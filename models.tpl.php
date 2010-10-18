<link rel="stylesheet" href="<?php print '/' . drupal_get_path('module', 'capgateway') . '/css/style.css';  ?>" type="text/css" media="all" charset="utf8" />
<?php

	function get_model($str) {
		$t = strtolower(preg_replace("/\s+/i", "-", $str));
		$t = explode("-", $t);
		return $t[0] . $t[1];
	}

?>
<p>
	<ul id="new-cars">
		<?php foreach ($models as $model): ?>
			<li class="car">
				<a href="/buy-new/<?php print trim(strtolower($make->CMan_Name));	?>/<?php print trim(get_model($model->CRan_Name)); ?>" class="<?php
				print get_model($model->CRan_Name); ?>">
				<?php print ucspecial($model->CRan_Name); ?> 
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</p>
