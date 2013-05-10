<?php
use \Yii;

use app\widgets\UserMenu;
use app\widgets\TagCloud;
use app\widgets\RecentComments;

$this->beginContent('@app/views/layouts/main.php'); ?>
<div class="container-fluid">
  <div class="row-fluid">
  	 <div class="span3">
      
    </div>
    <div class="span9">
      <?php echo $content; ?>
    </div>
  </div>
</div>
<?php $this->endContent(); ?>
