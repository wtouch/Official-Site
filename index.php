<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Web Touch India Solutions Pune </title>
	<meta name="description" content="Web Touch India Solutions Pune | Web Developing, Web Designing, Web Hosting, Email Hosting, Graphic Designing, Total Web Solution, Website Creation, Create Website in Pune, PCMC, Pimpri Chinchwad">
    <meta name="keywords" content="web development in pune, create website in pune, website developer in pune, web developer in pimpri, web developer in chinchwad, web designer in pune, pune web designer, best web designer in pune, web hosting in pune, pune web hosting">
	<meta name="google-site-verification" content="ISYG6-zeIrymBbDTQvnQi88-llmNf3ZNNjS5xJ6Jo6c">
	<link href="http://wtouch.in/favicon.png" rel="shortcut icon" type="image/jpg">
	<meta name="google-site-verification" content="dj3-y34SieO5iSJ5PKS_cA1JF5tReZ4tTCpuWaI2b6c">    
	<link rel="stylesheet" href="wtouch-site/css/bootstrap.min.css">
	<link href="wtouch-site/css/style.css" rel="stylesheet">
	
	<script src="wtouch-site/js/jquery.min.js"></script>
	<script src="wtouch-site/js/bootstrap.min.js"></script>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	<header>
		<div class="container">
		  <div id="row">
			<div class="col-lg-6 center-block" style="float:none;">
				<form action="http://www.google.co.in" id="cse-search-box">
					<input type="hidden" name="cx" value="partner-pub-3472030761744247:2930316732" />
					<input type="hidden" name="ie" value="UTF-8" />
					<div class="input-group">
						<input type="text" class="form-control" name="q" size="55" placeholder="Search" />
						<span class="input-group-btn">
							<input type="submit" class="btn btn-success" name="sa" value="Search" />
						</span>
					</div>
				</form>
			</div><!-- /.col-lg-6 -->
		  </div> <!-- row-->      
		</div>  <!-- container -->  
     
	</header>
    
 <div id="logo">
     <div class="container text-center">
         <img src="wtouch-site/img/logo.png" alt="Web Touch India Solutions, Web Developer Pune" title="Web Touch India Solutions, Web Developer Pune" />
         <h1>Web Touch India Solutions</h1>
     </div> 
</div>     
<div class="container" style="color:#fff;">
    <nav class="navbar navbar-default">  

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav menu nav nav-pills"">
        <li><a href="#">Web Hosting</a></li>        
        <li><a href="#">Customer Login</a></li>
        <li><a href="#">Maharastra eSchool</a></li>
        <li><a href="#">Bluk SMS</a></li>
        <li><a href="#">Email Login</a></li>
        <li><a href="#">Real Estate Portal</a></li>        
        <li><a href="#">Small Business</a></li>
   </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
  <address class="text-center">
     <div itemscope itemtype="http://schema.org/LocalBusiness">
	   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	     <span itemprop="streetAddress">3rd Floor, Rathod Building, Matoshree Colony, Thergaon</span>
	     <span itemprop="addressLocality">Pune</span>,
	     <span itemprop="addressRegion">Maharashtra</span>
	     <span itemprop="postalCode">411033</span>
	   </div>
	   Phone: <span itemprop="telephone">+91 9049508514</span>
	</div>
	</address>
  
  
<footer class="text-center">    
       <?php 
$con= mysql_connect("localhost","wtoucct8","Shetkar@1988","wtoucct8_test");
// Check connection
	$create = mysql_query("CREATE TABLE IF NOT EXISTS `wtoucct8_test`.`webtracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)") or die(mysql_error());

if(!isset($_SESSION['userip'])){
	$_SESSION['userip'] = $_SERVER['REMOTE_ADDR'];
	$userip = $_SESSION['userip'];
	$insertip = mysql_query("INSERT INTO `wtoucct8_test`.`webtracker`(`userip`) VALUES('$userip')")or die("Not inserted ip");
	$query = mysql_query("SELECT * FROM `wtoucct8_test`.`webtracker`") or die("Select Error(not set session):".mysql_error());
	$TotalVisitors = mysql_num_rows($query);
	echo "<p>Total Visitors : ".$TotalVisitors.' <br>';
	echo "Your IP is: ".$userip.'</p>';
}else{
	$query = mysql_query("SELECT * FROM `wtoucct8_test`.`webtracker`") or die("Select Error(set session):".mysql_error());
	$TotalVisitors = mysql_num_rows($query);
	echo "<p>Total Visitors : ".$TotalVisitors.' <br>';
	$userip = $_SESSION['userip'];
	echo "Your IP is: ".$userip.'</p>';
}

?>
</footer> 
   
 </div> 
<script type="text/javascript" src="http://www.google.co.in/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
<script type="text/javascript" src="http://www.google.com/cse/query_renderer.js"></script>
<div id="queries"></div>
<script src="http://www.google.com/cse/api/partner-pub-3472030761744247/cse/2930316732/queries/js?oe=UTF-8&amp;callback=(new+PopularQueryRenderer(document.getElementById(%22queries%22))).render"></script>
<script type="text/javascript">
	/* Google Analytics */
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37247562-1']);
	  _gaq.push(['_setDomainName', 'wtouch.in']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	/* Right Click Disable  */
	var isNS = (navigator.appName == "Netscape") ? 1 : 0;

	if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

	function mischandler(){
	return false;
	}

	function mousehandler(e){
	var myevent = (isNS) ? e : event;
	var eventbutton = (isNS) ? myevent.which : myevent.button;
	if((eventbutton==2)||(eventbutton==3)) return false;
	}
	document.oncontextmenu = mischandler;
	document.onmousedown = mousehandler;
	document.onmouseup = mousehandler;
	/* Hotjar Script */
	(function() {
    var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
    sa.src = ('https:' == document.location.protocol ? 'https://cdn' : 'http://cdn') + '.ywxi.net/js/1.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sa, s);
  })();
  
	/* Google Custom Search */ 
	(function(f,b,g){
        var d=g.prototype.open,a=g.prototype.send,c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:724};
        if(typeof b.addEventListener!=="undefined"){b.addEventListener("DOMContentLoaded",function(){f.hj.documentHtml=b.documentElement.outerHTML})}
        c=b.createElement("script");c.src="//static.hotjar.com/insights.js";b.getElementsByTagName("head")[0].appendChild(c);f.hj.xo=g.prototype.open;f.hj.xs=g.prototype.send;
        if(!f._hjPlayback){
            f.hj.xo=g.prototype.open;f.hj.xs=g.prototype.send;
            g.prototype.open=function(l,j,m,h,k){this._u=j;f.hj.xo.call(this,l,j,m,h,k)};
            g.prototype.send=function(e){var j=this,i=j._u.indexOf("insights.hotjar.com")===-1;if(i){function h(){if(j.readyState===4){f.hj("_xhr",j._u,j.status,j.response)}}if(this.addEventListener){this.addEventListener("readystatechange",h,false)}else{this.attachEvent("onreadystatechange",h)}}f.hj.xs.call(this,e)}
        }
    })(window,document,window.XMLHttpRequest);
</script> 
</body>    
</html>    