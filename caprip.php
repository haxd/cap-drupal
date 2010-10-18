<?php

	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 'On');

	require('capgateway.module');

	function get_xml_keys($xml) {
		$keys = array();

		foreach ($xml->children() as $index => $child) {
			$keys[] = $index;
		}

		return $keys;
	}

	function get_xml_values($xml) {
		$values = array();

		foreach($xml->children() as $index => $child) {
			$values[] = (string) $child;
		}

		return $values;
	}

	function make_mysql_keys($keys) {
		$build = '(`';
		$build.= implode($keys, '`,`');
		$build.= '`)';

		return $build;
	}

	function make_mysql_values($values, &$mysql) {
		$build = '(';

		foreach ($values as $index => $value) {
			if ($value == null) {
				$build .= 'NULL';
			} else {
				$build .= '"' . $mysql->real_escape_string(trim($value)) . '"';
			}
			if ($index < count($values) - 1) $build .= ", ";
		}

		$build .= ')';

		return $build;
	}

	function jigger_xml($keys, $rows, $extra_keys, $extra_values) {
		$row_value = get_xml_values($rows);

		if (count($keys) < count($row_value)) {
			$keys = get_xml_keys($rows);

			foreach ($extra_keys as $ekey)
				array_unshift($keys, $ekey);
		}

		foreach ($extra_values as $evals)
			array_unshift($row_value, $evals);

		$values[] = $row_value;

		return array($keys, $values);
	}

	function store_xml_array($xml, $table, &$mysql, $extra_keys = array(), $extra_values = array()) {
		$values = array();
		$keys = array();

		$extra_values = array_reverse($extra_values);
		$extra_keys = array_reverse($extra_keys);

		if (is_array($xml)) {
			foreach($xml as $rows) {
				if (get_class($rows) == "SimpleXMLElement") {
					list($keys, $val) = jigger_xml($keys, $rows, $extra_keys, $extra_values);
					$values[] = $val[0];
				}
			}
		} elseif (get_class($xml) == "SimpleXMLElement") {
			list($keys, $values) = jigger_xml($keys, $xml, $extra_keys, $extra_values);
		}

		$okeys = $keys;
		$keys = make_mysql_keys($keys);

		$tvalues = array();

		foreach ($values as $value) {
			$tvalues[] = make_mysql_values($value, $mysql);
		}

		$values = implode($tvalues, ",\n");

		$dup = '';

		foreach ($okeys as $index => $key) {
			$dup .= "$key=VALUES($key)";
			if ($index < count($okeys) - 1) {
				$dup .= ',';
			}
		}

		$query = "INSERT INTO $table $keys VALUES $values ON DUPLICATE KEY UPDATE $dup;";

		$mysql->query($query) or die($table . ': ' . $mysql->error . "\n" . $query);
	}

	$mysql = new MySQLi();

	$mysql->connect('localhost', 'root', 'root', 'cap');

	print "Ripping CAP Database...\n";

	$makes = array('volkswagen', 'audi', 'skoda', 'ford');

	foreach($makes as $make):

	$started = strtotime('now');

	print "(" . date('d-m-Y H:i:s') .  ") Getting all ranges and derivatives for the $make manufactuerer\n";

	$make = make_load($make);
	
  $ranges = get_vehicle('GetCAPRange', 'gvranges_' . $make->CMan_Name, array(
    'ManCode' => (string) $make->CMan_Code,
    'JustCurrentRanges' => 'true',
    'BodyStyleFilter' => ''  
  ));

  foreach ($ranges as $range) {

	  $derivatives = get_vehicle('GetCAPDerFromRange', 'gv_der_' . $range->CRan_Code, array(
  	  'RanCode' => (string) $range->CRan_Code,
	    'JustCurrentDerivatives' => true,
    	'BodyStyleFilter' => ''
  	));

  	print "Updating " . count($derivatives) . " derivatives.\n";

		store_xml_array($derivatives, 'derivatives', $mysql, array('id', 'CRan_Code'), array(null, $range->CRan_Code));

  	foreach ($derivatives as $der) {
  		$bundle = get_nvd('GetCAPOptionsBundle', 'gv_opts_' . $der->CDer_ID, array(
	  	  'CAPID' => (string) $der->CDer_ID,
  		  'OptionDate' => '2010-01-01',
  		  'JustCurrent' => 'true',
  	  	'DescriptionRS' => 'true',
	  	  'OptionsRS' => 'true',
  		  'RelationshipsRS' => 'true',
  		  'PackRS' => 'true',
  	  	'TechnicalRS' => 'true'
	  	));

	  	$bun = array();
	  	$arr = array();
			
			$bun['descriptions'] = $bundle->NVDBundle->Descriptions;
			$arr['options'] = $bundle->NVDBundle->Options;
			$arr['relationships'] = $bundle->NVDBundle->Relationships;
			$arr['packs'] = $bundle->NVDBundle->Packs;

			//un['technicals'] = $bundle->NVDBundle->Technical;
			$bun['validdateranges'] = $bundle->NVDBundle->ValidDateRange;

			foreach ($bun as $table => $data) {
				store_xml_array($data, $table, $mysql, array('id', 'CDer_ID'), array(null, $der->CDer_ID));
			}

			foreach ($arr as $table => $data) {
				$samedata = array();
				$linkdata = array();

				foreach ($data as $index => $dat) {
					switch ($table) {
						case "options":
							$key = 'Opt_OptionCode';
						break;
						case "relationships":
							$key = 'RI_RuleCode';
						break;
						case "packs":
							$key = 'PP_PackCode';
						break;
					}

					$unique = $dat->$key;

					$xml = new SimpleXMLElement("<options><CDer_ID>".$der->CDer_ID."</CDer_ID><$key>$unique</$key></options>");

					$samedata[] = $dat;
					$linkdata[] = $xml;
				}

				if (count($samedata) > 0) {
					store_xml_array($samedata, $table, $mysql, array('id'), array(null));
					store_xml_array($linkdata, 'derivatives_' . $table, $mysql);
				}

			}
  	}

		print "Finished updating.\n";
	}

	print "Done with {$make->CMan_Name}\n";
	print "Took " . (strtotime('now') - $started) . " seconds\n";

	endforeach;

	print "Done\n";
?>
