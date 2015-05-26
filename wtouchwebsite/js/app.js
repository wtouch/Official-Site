'use strict';
// Declare app level module which depends on filters, and services
angular.module('handmadeFlwrs', [
  'ngRoute',
  'handmadeFlwrs.controllers'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/', {templateUrl: 'template/newregister.html', controller:'ViewController'});
  $routeProvider.when('/newregister', {templateUrl: 'template/newregister.html', controller:'AddController'});
  $routeProvider.when('/view', {templateUrl: 'template/view.html', controller:'ViewController'});
  $routeProvider.when('/edit/:id', {templateUrl: 'template/updtform.html', controller:'FormController'});
  $routeProvider.when('/contact', {templateUrl: 'template/contact.html'});
  $routeProvider.otherwise({redirectTo: '/'});
}]);