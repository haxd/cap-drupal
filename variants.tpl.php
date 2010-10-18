<link rel="stylesheet" href="<?php print '/' . drupal_get_path('module', 'capgateway') . '/css/style.css';  ?>" type="text/css" media="all" charset="utf8" />
<script type="text/javascript" language="javascript" charset="utf-8">
	$(function() {
		$('#cart').submit(function() {
			var selected = $('.selecti:checked').val();
			var test = undefined == selected;
			
			if (test) {
				alert('Please select a vehicle derivative');
			}

			return !test;
		});
	});
</script>
<a href="/buy-new/<?php print strtolower($make->CMan_Name); ?>">Back to Buy New <?php print ucspecial(trim($make->CMan_Name)); ?></a>
<br />
<form id="cart" action="" method="post">
	<fieldset>
		<legend>Please select a derivative</legend>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>List Price</th>
					<th>Saving</th>
					<th>Our Price</th>
				</tr>
			</thead>
				<?php foreach($derivatives as $grp => $ders): ?>
				<?php $group = explode('/', (string) $grp); ?>
				<tbody class="group">
					<tr><td><strong><?php print ucspecial($group[1]); ?></strong></td></tr>
					<?php foreach($ders as $der): ?>
					<tr>
						<td>
							<input id="der<?php print $der->CDer_ID; ?>" class="selecti" type="radio" name="data[selection]" value="<?php print $der->CDer_ID; ?>" />
							<label for="der<?php print $der->CDer_ID; ?>"><?php print $der->CDer_Name; ?></label>
						</td>
						<td>
							<?php
								$price = (float) $der->Descriptions->Pr_Basic;
								print($price . "<br />");
								$price += (float) $der->Descriptions->Pr_VAT;
								print((float) $der->Descriptions->Pr_VAT . "<br />");

								$mandopts = array(0, 1, -1);

								foreach($der->Options as $option) {
									if (in_array($option->Opt_OptionCode, $mandopts) or $option->Opt_Default == "true") {
										$price += (float) $option->Opt_Basic;
										$price += (float) $option->Opt_VAT;
										print((float) $option->Opt_Basic . "<br />");
										print((float) $option->Opt_VAT . "<br />");
									}
								}

								print '&pound;' . number_format($price, 2);
							?>
						</td>
						<td>
						  <?php
						  	$saving = (float) $der->Savings->make_saving;
						  	$saving += (float) $der->Savings->model_saving;
						  	$saving += (float) $der->Savings->der_saving;

						  	print '&pound;' . number_format($saving, 2);
						  ?>
						</td>
						<td>
							<?php
								$our_price = $price;
								$our_price -= $saving;

								print '&pound;' . number_format($our_price, 2);
							?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			<?php endforeach; ?>
		</table>
		<div class="submit">
			<input type="submit" name="submit" value="Next &raquo;" />
		</div>
	</fieldset>
</form>
