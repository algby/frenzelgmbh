<?php 
use \yii\helpers\Html;

?>

<?php $this->beginWidget('\yii\widgets\Block', array('id'=>'sidebar')); ?>
	<ul>
		<li class="sticker sticker-color-blue"><?php echo Html::a('<i class="icon-plus"></i>Create Message', array('/messages/create')); ?></li>
	</ul>
<?php $this->endWidget(); ?>

<div class="row-fluid">	
	<h4><?php echo Html::encode($data->subject); ?></h4>
	<p>
	<?php
		echo $data->msg_body;
	?>
	</p>
</div>
