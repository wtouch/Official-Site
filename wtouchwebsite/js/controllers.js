//'use strict';


/* Controllers */

angular.module('handmadeFlwrs.controllers',[]).
controller('ViewController', function($scope,$http) {
	$scope.show=function(){
	$http.get("http://localhost/aarti/SwamiFlowers/server.php?view=view")
    .success(function(response) {$scope.names = response;});
	}
	$scope.show();
	$scope.del=function(id){
		
		console.log(id);
		$http.get("http://localhost/aarti/SwamiFlowers/server.php?view=delete&id=" +id )
		.success(function(response) {
			console.log(response);
			$scope.show();
		});
	}
	console.log("View Controller");
}).
controller('FormController', function($scope, $http, $routeParams) {
	
	$http.get("http://localhost/aarti/SwamiFlowers/server.php?view=update&id="+$routeParams.id)
    .success(function(response) {
		$scope.names = response;
		$scope.reset = function() {
			$scope.user = angular.copy($scope.names);
		};
		$scope.reset();
		console.log(response);
		
	}).error(function(err){
		console.log(err);
	});
	
		$scope.update = function(){
		$http.post("http://localhost/aarti/SwamiFlowers/server.php?view=update", $scope.user )
		.success(function(response) {
			alert(response);
			console.log(response);
		})
	}
}).
controller('AddController', function($scope, $http) {
	$scope.reset = function() {
			$scope.user = {};
		};
	$scope.update = function(){
		$http.post("http://localhost/aarti/SwamiFlowers/server.php?view=insert", $scope.user )
		.success(function(response) {
			alert(response);
			console.log(response);
			$scope.reset();
		})
	}
});
