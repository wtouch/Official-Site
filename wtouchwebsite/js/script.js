'use strict';
var hostUrl = '/website/templates/default/';

jQuery(document).ready(function() {
	jQuery(".imgs").click(function(){
		jQuery(".portimg").attr("src",(jQuery(this).attr("src")))
	})
});
function initialize() {
	var mapProp = {
		center:new google.maps.LatLng(18.625955, 73.756366),
		zoom:18,
		disableDefaultUI:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
	var marker=new google.maps.Marker({
		position:new google.maps.LatLng(18.625955, 73.756366),
	});
	marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

var app = angular.module('myApp',[]);

app.config(function($locationProvider) {
	console.log("config");
  /* $routeProvider
   .when('/:view', {
    templateUrl: function(rd) { return hostUrl+"/"+rd.view+'.html';}
  })
  .otherwise({ redirectTo: '/home' }); */
});
app.controller('enquiryController', function($scope,$http, $location) {
	$scope.hostUrl = hostUrl;
	var today = new Date();
	var year = today.getFullYear();
	var month = today.getMonth() + 1;
	var date = today.getDate();
	var hour = today.getHours();
	var min = today.getMinutes();
	var sec = today.getSeconds();
	$scope.mailSent = false;
		$scope.enquiry = {
			subject : 'Website Enquiry',
			date : year + "-" + month + "-" + date + " " + hour + ":" + min + ":"+sec,
			user_id : 1,
			to_email : {to : 'vilas@wtouch.in'}
			
		};
		$scope.postData = function(enquiry){
			console.log(enquiry);
			$http.post("http://apnasite.in/server-api/index.php/post/enquiry", $scope.enquiry).success(function(response) {
				
				$scope.mailSent = true;
			});
		};
});	
	