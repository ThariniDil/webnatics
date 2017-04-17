var base_url = "http://localhost/webnatics/index.php/";

var app = angular.module('myapp', []);

app.controller('activityController', function ($scope, $http, $filter) {

    $scope.types = [{id: "1", name: "male"}, {id: "2", name: "femail"}];


});

