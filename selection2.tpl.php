<link rel="stylesheet" href="<?php print '/' . drupal_get_path('module', 'capgateway') . '/css/style.css';  ?>" type="text/css" media="all" charset="utf-8" />

<form action="" method="post">
	<table id="enquiry">
		<thead>
			<tr>
				<th colspan="2">
					Your Specification
				</th>
			</tr>
		</thead>
<tbody>
<?php	foreach($cart->getCart() as $item): ?>
<tr class="<?php print $item['group']; ?>">
	<td><?php print $item['item']; ?></td>
	<td>&pound;<?php print number_format($item['price'], 2); if ($item['quantity'] > 1) {print " * {$item['quantity']}";} ?></td>
</tr>
<?php endforeach; ?>
</tr>
</tbody>
<tbody>
<tr>
	<td>Total</td>
	<td>&pound;<?php print number_format($cart->getTotalIncVAT() + $saving[0] + $saving[1] + $saving[2], 2); ?></td>
</tr>
<tr>
	<td><strong>Our Price</strong></td>
	<td><strong>&pound;<?php print number_format($cart->getTotalIncVAT(), 2); ?></strong></td>
</tr>
<tr>
	<td>Saving</td>
	<td>&pound;<?php print number_format($saving[0] + $saving[1] + $saving[2], 2)?></td>
</tr>
</tbody>
		<?php
			$groups = array();
			foreach ($options as $option) {
				$curr_group = $option->Dc_Description;
				$groups[$curr_group][] = $option;
			}
		?>
		<?php foreach($groups as $group => $options): ?>
			<thead>
				<tr>
					<th colspan="2"><?php echo $group; ?></th>
			</thead>
			<tbody>
				<?php for($i = 0; $i < count($options); $i++): ?>
				<tr>
					<td>
						<input type="hidden" name="data[option][<?php echo $options[$i]->Opt_OptionCode; ?>]" value="0" />
						<input id="opt<?php echo $options[$i]->Opt_OptionCode; ?>" type="checkbox" name="data[option][<?php echo $options[$i]->Opt_OptionCode; ?>]" value="1" />
						<label for="opt<?php echo $options[$i]->Opt_OptionCode; ?>"><?php echo $options[$i]->Do_Description; ?></label>
					</td>
					<td class="price">
						&pound;<?php echo number_format($options[$i]->Opt_Basic + $options[$i]->Opt_VAT, 2); ?>
					</td>
				</tr>
				<?php endfor; ?>
			</tbody>
		<?php endforeach; ?>
	</table>
	<div class="submit">
		<input type="submit" name="submit" value="Next &raquo;" />
	</div>
</form>
