<?php
use yii\helpers\Html;
?>

<?php $this->beginWidget('\yii\widgets\Block', array('id'=>'sidebar')); ?>
	<ul>
		<li class="sticker sticker-color-blue"><a><i class="icon-spades"></i>About QlikView</a></li>
		<li class="sticker sticker-color-green"><a><i class="icon-clubs"></i>Our Skills</a></li>
		<li class="sticker sticker-color-yellow"><a><i class="icon-diamonds"></i>Our Customers</a></li>
	</ul>
<?php $this->endWidget(); ?>

<section id="content">
	<h1>QlikView <small>Corporate Analysis Best Practice</small></h1>
	<p>
		We rock your web!
	</p>
	<h2>About QlikView</h2>
	<p>
		Lorem ispum dolorem...
	</p>
	<h2>Our Skills</h2>
	<p>
		Lorem ispum dolorem...
	</p>
	<h2>Our Customers</h2>
	<p>
		Lorem ispum dolorem...
	</p>
</section>