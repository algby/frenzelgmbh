<?php
/**
 * @var $this \yii\base\View
 * @var $content string
 */
use yii\helpers\Html;
$this->registerAssetBundle('app');
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title><?php echo Html::encode($this->title); ?></title>
	<?php $this->head(); ?>
</head>
<body class="metrouicss">
<div class="container">
	<?php $this->beginBody(); ?>
	<div class="masthead">
		<h3 class="muted">Frenzel GmbH</h3>

		<div class="nav-bar bg-color-blueDark">
			<div class="nav-bar-inner">
				<ul class="menu">
					<li><?php echo Html::a('Home', Yii::$app->homeUrl); ?></li>
					<li class="divider"></li>

					<li data-role="dropdown">
						<a href="#">Consulting</a>
						<ul class="dropdown-menu">
							<li><?php echo Html::a('QlikView', array('/site/page','view'=>'page_qlikview')); ?></li>
							<li><?php echo Html::a('Corporate Business Planning', array('/site/page','view'=>'page_cpb')); ?></li>
							<li><?php echo Html::a('Data Design', array('/site/page','view'=>'page_cpb')); ?></li>
							<li><?php echo Html::a('Data Quality', array('/site/page','view'=>'page_cpb')); ?></li>
						</ul>
					</li>
					
					<li class="divider"></li>

					<li data-role="dropdown">
						<a href="#">Development</a>
						<ul class="dropdown-menu">
							<li><?php echo Html::a('Web Design', array('/site/page','view'=>'page_webdevelopment')); ?></li>
							<li><?php echo Html::a('Web Coding', array('/site/page','view'=>'page_webcoding')); ?></li>
							<li><?php echo Html::a('Individual Software', array('/site/page','view'=>'page_individualsoftware')); ?></li>
							<li><?php echo Html::a('Playground::Messages', array('/messages')); ?></li>
						</ul>
					</li>
					
					<li class="divider"></li>

					<li data-role="dropdown">
						<a href="#">Solutions</a>
						<ul class="dropdown-menu">
							<li><?php echo Html::a('Corporate Planning', array('/site/page','view'=>'page_corporateplanning')); ?></li>
							<li><?php echo Html::a('Denied Party Screening', array('/site/page','view'=>'page_deniedparties')); ?></li>
							<li><?php echo Html::a('Weasy', array('/site/page','view'=>'page_weasy')); ?></li>
							<li><?php echo Html::a('HTV', array('/site/page','view'=>'page_htv')); ?></li>
						</ul>
					</li>
					
					<li class="divider"></li>
					<li><?php echo Html::a('Contact', array('/site/contact')); ?></li>
					<?php if (Yii::$app->user->isGuest): ?>
					<li><?php echo Html::a('Login', array('/site/login')); ?></li>
					<?php else: ?>
					<li><?php echo Html::a('Logout (' . Html::encode(Yii::$app->user->identity->email) . ')', array('/site/logout')); ?></li>
					<?php endif; ?>
				</ul>				
			</div>
		</div>
		<!-- /.navbar -->
	</div>

	<?php echo $content; ?>

	<div class="footer bg-color-blueDark fg-color-white">
		<p>&copy; Frenzel GmbH <?php echo date('Y'); ?></p>
		<p>
			<?php echo Yii::powered(); ?>
			Template by <a href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a>.
			Styles by <a href="http://metroui.org.ua/">Metro UI CSS</a>
		</p>
	</div>
	<?php $this->endBody(); ?>
</div>
<?php $this->widget('yii\debug\Toolbar'); ?> 
</body>
</html>
<?php $this->endPage(); ?>