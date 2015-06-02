'use strict';
var hostUrl = '/website/templates/default/';

$(document).ready(function() {
	$(".imgs").click(function(){
		$(".portimg").attr("src",($(this).attr("src")))
	})
});
var app = angular.module('myApp',[]);

app.config(function($locationProvider) {
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
			date : year + "-" + month + "-" + date + " " + hour + ":" + min + ":"+sec
		};
		$scope.postData = function(enquiry){
			console.log(enquiry);
			$http.post("http://apnasite.in/server-api/index.php/post/enquiry", $scope.enquiry).success(function(response) {
				
				$scope.mailSent = true;
			});
		};
});	
	