'use strict';

/**
 * @ngdoc function
 * @name canadianmasoncaApp.controller:DiscussionCtrl
 * @description
 * # DiscussionCtrl
 * Controller of the canadianmasoncaApp
 */
angular.module('canadianmasoncaApp')
  .controller('DiscussionCtrl', function ($scope, $http) {
    $scope.discussions = {};
    $scope.url = document.URL;

    $http.get('api/discussion.json').
        success(function(data) {
            $scope.discussions = data;
        });

  });

angular.module('canadianmasoncaApp')
    .controller('DiscussionDetailCtrl', function ($scope, $http, $routeParams) {
        $scope.discussions = {};
        $scope.url = $routeParams.url;

        $http.get('api/discussion.json').
            success(function(data) {
                $scope.discussions = data;
            });

        //$scope.title = $scope.discussions[$scope.url].title;
        //$scope.body = $scope.discussions[$scope.url].body;

});