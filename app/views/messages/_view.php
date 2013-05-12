<?php 
use \yii\helpers\Html;

?>

<div class="row-fluid">	
	<h4><?php echo Html::encode($data->subject); ?></h4>
	<?php
		echo $data->msg_body;
	?>
</div>
