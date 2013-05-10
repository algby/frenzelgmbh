<?php 
use \yii\helpers\Html;

?>
<div class="row-fluid">
	<div class="page-header">
		<h1><?php Html::encode($data->subject); ?></h1>
	</div>
	<?php
		echo $data->body;
	?>
</div>
