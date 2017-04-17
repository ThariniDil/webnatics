var base_url = "http://localhost/webnatics/index.php/";

var app = angular.module('myapp', []);

app.controller('editController', function ($scope, $http, $filter) {

    $scope.x = 10;
    $scope.inactive1 = true;
    $scope.inactive2 = true;
    $scope.inactive3 = true;

    $scope.edit = {};
    $scope.inputs = {};
    $scope.inputs.phones = [];
    $scope.inputs.emails = [];

    $scope.user = {};


    $scope.addFieldPhone = function () {
        console.log("add");
        $scope.inputs.phones.push({})
    }
    $scope.addFieldEmail = function () {
        console.log("add");
        $scope.inputs.emails.push({})
    }
    
    $scope.genarateFields = function () {
       for(var i=0;i<emails.length;i++){
           var email=emails[i];
           $scope.inputs.emails.push({"id":email.id,"email":email.email});
           //console.log($scope.inputs.emails);
       }
       
       for(var i=0;i<phones.length;i++){
           var phone=phones[i];
           $scope.inputs.phones.push({"id":phone.id,"contact_number":phone.contact_number});
           //console.log($scope.inputs.emails);
       }
    }
    $scope.genarateFields();



});


