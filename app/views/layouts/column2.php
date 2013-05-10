<?php
use \Yii;

use app\widgets\UserMenu;
use app\widgets\TagCloud;
use app\widgets\RecentComments;

$this->beginContent('@app/views/layouts/main.php'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
      <?php echo $content; ?>
    </div>
    <div class="span3">
      <?php if(!Yii::$app->user->isGuest) $this->widget(UserMenu::className()); ?>
	
      <?php $this->widget(TagCloud::className(), array(
          'maxTags'=>Yii::$app->params['tagCloudCount'],
      )); ?>

      <?php $this->widget(RecentComments::className(), array(
          'maxComments'=>Yii::$app->params['recentCommentCount'],
      )); ?>
    </div>
  </div>
</div>
<?php $this->endContent(); ?>
