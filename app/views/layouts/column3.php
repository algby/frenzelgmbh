<?php
use \Yii;

use app\widgets\UserMenu;
use app\widgets\TagCloud;
use app\widgets\RecentComments;

$this->beginContent('@app/views/layouts/main.php'); ?>
<section id="content">
	<div class="container-fluid">
	  <div class="row-fluid">
	  	 <div class="span2">
	  	 	<div class="page-sidebar">	  	 		
	  	 		<?php echo $this->blocks['sidebar']; ?>
	  	 	</div>      
	    </div>
	    <div class="span7">
	      <?php echo $content; ?>
	    </div>
	    <div class="span3">
	  	 	<div class="page-toolbar">	  	 		
	  	 		<?php echo $this->blocks['toolbar']; ?>
	  	 	</div>      
	    </div>
	  </div>	  
	</div>
</section>
<?php $this->endContent(); ?>
