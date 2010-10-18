<link rel="stylesheet" href="<?php print '/' . drupal_get_path('module', 'capgateway') . '/css/style.css';  ?>" type="text/css" media="all" charset="utf-8" />
<a href="/buy-new/<?php print strtolower($desc->CVehicle_ManText); ?>/<?php print str_replace(" ", "", strtolower($desc->CVehicle_ShortModText)); ?>">Click here to go Back</a>
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
	<thead>
		<tr>
			<th colspan="2">Select your colour</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($options as $option): ?>
		<?php if ($option->Dc_Description == 'Paintwork'): ?>
		<tr>
			<td>
			<input type="radio" name="data[color]" class="selecti" id="col<?php print $option->Opt_OptionCode; ?>" value="<?php print $option->Opt_OptionCode; ?>" />
			<label for="col<?php print $option->Opt_OptionCode; ?>">
				<?php print $option->Do_Description; ?>
			</label>
			</td>
			<td>&pound;<?php print number_format($option->Opt_Basic + $option->Opt_VAT, 2); ?></td>
		</tr>
		<?php endif; ?>
		<?php endforeach; ?>
	</tbody>
	<thead>
		<tr>
			<th colspan="2">Select your trim</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($options as $option): ?>
		<?php if ($option->Dc_Description == 'Trim'): ?>
		<tr>
			<td>
			<input type="radio" name="data[trim]" class="optselecti" id="opt<?php print $option->Opt_OptionCode; ?>" value="<?php print $option->Opt_OptionCode; ?>" />
			<label for="opt<?php print $option->Opt_OptionCode; ?>">
				<?php print $option->Do_Description; ?>
			</label>
			</td>
			<td>&pound;<?php print number_format($option->Opt_Basic + $option->Opt_VAT, 2); ?></td>
		</tr>
		<?php endif; ?>
		<?php endforeach; ?>
	</tbody>
</table>
<div class="submit">
	<input type="submit" name="submit" value="Next &raquo;" />
</div>
</form>
