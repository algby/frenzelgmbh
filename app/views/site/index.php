<?php
/**
 * @var yii\base\View $this
 */
use \app\models\Messages;
use \yii\helpers\Html;

$this->title = 'Welcome';
?>

<section id="content">

	<div class="row-fluid">
		<div class="tile double-vertical bg-color-yellow icon">
		    <div class="tile-content">
		    	<i class="icon-arrow-right-3"></i>
		    </div>
		    <div class="brand">
		    		<span class="name">Frenzel GmbH</span>
		    </div>
	    </div>
	    <div class="tile double bg-color-blue">
		    <div class="tile-content">		    	
				<a class="button bg-color-green fg-color-white big" style="padding-top:10px;" href="http://www.yiiframework.com">Get started with Yii2<i class="icon-arrow-right-3 right"></i></a>			
		    </div>
		    <div class="brand">
		    	<span class="name">Yii2 Framework</span>
		    </div>
	    </div>
	    <div class="tile image">
			<div class="tile-content">
				<img src="http://lorempixel.com/200/200/sports/"/>
			</div>
		</div>
		<div class="tile bg-color-green icon selected">
			<b class="check"></b>
			<div class="tile-content">
				Lorem ipsum...
			</div>
		</div>
		<div class="tile image">
			<div class="tile-content">
				<img src="http://lorempixel.com/200/200/fashion/"/>
			</div>
		</div>
		<div class="tile image">
			<div class="tile-content">
				<img src="http://lorempixel.com/200/200/cats/"/>
			</div>
		</div>
		<div class="tile double bg-color-red">
		    <div class="tile-content">		    	
				<a class="button bg-color-yellow fg-color-white big" style="padding-top:10px;" href="http://www.yiiframework.com">Get started with Yii2<i class="icon-arrow-right-3 right"></i></a>			
		    </div>
		    <div class="brand">
		    	<span class="name">Yii2 Framework</span>
		    </div>
	    </div>
	    <div class="tile double">
	    	<div class="tile-content">
				<h3 style="margin-bottom: 5px;"><?php echo Messages::find(1)->subject; ?></h3>
				<p><?php echo Messages::find(1)->msg_body; ?></p>
			</div>
			<div class="brand">
				<div class="badge">10</div>
				<div class="name">News</div>
			</div>
		</div>
	</div>

	<!-- Example row of columns -->

	<div class="row-fluid">
		<div class="span4">
			<h2>Consulting</h2>
			<p>
				Since 1996 we support several companies in their business planning process and financial reporting.
				Based upon the fact - <b>keep the solution small and simple</b> - we implemented many successfull solutions
				(most of them are still running) and learned how to satisfy all the needs by different stakeholders.
				Today we are using powerful tools like <b>QlikView, Planlogiq</b> and others to provide our customers with
				an uptodate intime reporting.
			</p>

			<p><a class="button" href="#">Consulting details &raquo;</a></p>
		</div>
		<div class="span4">
			<h2>Coding</h2>

			<p>
				Around 1989 everything started with our first so called "PC" - a Schneider PC ;) - and since that time,
				computing wasn't just to use a computer. We started application development on low level languages like 
				Basic. Database Languages like DBase and so on. Today we deliver solutions based upon <b>PHP, C#, MSSQL, MYSQL</b>
				Today we develop our solutions using <b>SCRUM</b> which means a running protoype is the best to continue
				with production releases.
				Check out our success stories to find out more!
			</p>

			<p><?php echo Html::a('Coding details &raquo;', array('/site/page','view'=>'page_webcoding'),array('class'=>'button')); ?></p>
		</div>
		<div class="span4">
			<h2>Services</h2>

			<p>
				<a href="http://www.restrictedpartyscreening.org">Restricted Party Screening ORG</a> is our denied person/party
				screening service which allows you to keep your trade compliance. Take care about world sanctions and identify 
				possible risks in your business relations.
			</p>

			<p><a class="button" href="#">View details &raquo;</a></p>
		</div>
	</div>
</section>

