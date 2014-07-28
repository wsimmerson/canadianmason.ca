'use strict';

/**
 * @ngdoc overview
 * @name canadianmasoncaApp
 * @description
 * # canadianmasoncaApp
 *
 * Main module of the application.
 */
angular
  .module('canadianmasoncaApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .when('/directory', {
        templateUrl: 'views/directory.tpl.html',
        controller: 'DirectoryCtrl'
      })
      .when('/discussion', {
        templateUrl: 'views/discussion.tpl.html',
        controller: 'DiscussionCtrl'
      })
      .when('/discussion/:url', {
        templateUrl: 'views/discussion-detail.tpl.html',
        controller: 'DiscussionDetailCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
