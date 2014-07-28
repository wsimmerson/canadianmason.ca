'use strict';

/**
 * @ngdoc function
 * @name canadianmasoncaApp.controller:DirectoryctrlCtrl
 * @description
 * # DirectoryCtrl
 * Controller of the canadianmasoncaApp
 */
angular.module('canadianmasoncaApp')
  .controller('DirectoryCtrl', function ($scope, $http) {
    $scope.directory = {};
    $scope.showing = "";

    $scope.checkProv = function(prov) {
        
        console.log($scope.showing);
        return prov === $scope.showing;
    };

    $http.get('api/directory.json').
        success(function(data) {
            $scope.directory = data;
        });
  });
