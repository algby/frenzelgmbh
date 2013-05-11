<?php
use \Yii;

use app\widgets\UserMenu;
use app\widgets\TagCloud;
use app\widgets\RecentComments;

$this->beginContent('@app/views/layouts/main.php'); ?>
<section id="content">
	<div class="container-fluid">
	  <div class="row-fluid">
	  	 <div class="span3">
	  	 	<div class="page-sidebar">
	  	 		<ul>
	  	 			<li><a href="#">Test</a></li>
	  	 			<li class="sticker sticker-color-blue"><a>Item</a></li>
	  	 			<li><a><i class="icon-cube"></i>Item</a></li>
	  	 		</ul>
	  	 		<?php echo $this->clips['sidebar']; ?>
	  	 	</div>      
	    </div>
	    <div class="span9">
	      <?php echo $content; ?>
	    </div>
	  </div>
	</div>
</section>
<?php $this->endContent(); ?>
