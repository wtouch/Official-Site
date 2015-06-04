<?php
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Add JavaScript
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/angular.min.js');
$doc->addScript('http://maps.googleapis.com/maps/api/js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/script.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/mystyles.css');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<jdoc:include type="head" />
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	</head>
	<body ng-app="myApp">
	<a id="top"></a>
		<div class="container">
			
			
			<?php if ($this->countModules('position-5')) : ?>
			<div class="pull-right login">
				<jdoc:include type="modules" name="position-5" style="none" />
			</div>
			<?php endif; ?>
				
			<div class="logo text-center">
				<a href="#"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/getImage.png" class="homelogo" alt="Web Touch India Solutions"></a>
			</div>
			<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
			<?php if ($this->countModules('position-1')) : ?>
				<nav class="navbar navbar-default">
					<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
						<jdoc:include type="modules" name="position-1" style="none" />
					</div>
				</nav>
			<?php endif; ?>
			
			<?php if ($this->countModules('position-2')) : ?>
				<div class="homeservice">
						<jdoc:include type="modules" name="position-2" style="none" />
					</div>
			<?php endif; ?>
		
		<?php if (!$this->countModules('position-2')) : ?>
			<div class="content">
				<!-- Begin Content -->
				<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
				<jdoc:include type="modules" name="position-3" style="xhtml" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="position-4" style="none" />
				<!-- End Content -->
			</div>
		<?php endif; ?>
          </div>
		<footer>
			<div class="container">
				<jdoc:include type="modules" name="footer" style="none" />
				<p class="pull-right">
					<a href="#top" id="back-top">
						<?php echo JText::_('Top'); ?>
					</a>
				</p>
				<p>&copy; 2012 <a href="http://www.wtouch.in" target="_blank">Web Touch India Solutions</a></p>
			</div>
		</footer>
		
	</body>
</html>
