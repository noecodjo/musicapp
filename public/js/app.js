'use strict';

var musicApp = angular.module('musicApp', [
  'ngRoute', 'ngAnimate', 'artistController', 'artistService',
]);

musicApp.config(function ($routeProvider, $locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: 'js/pages/artists.html',
      controller: 'artistController'
    }).
    when('/music/:artist_slug', {
      templateUrl: 'js/pages/artist.html',
      controller: 'artistController'
    }).
    otherwise({
      redirectTo: '/'
    });
  $locationProvider.html5Mode(true);
});
