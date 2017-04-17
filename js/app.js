var base_url = "http://localhost/webnatics/index.php/";

$(function () {

    $(".input-group-btn .dropdown-menu li a").click(function () {

        var selText = $(this).html();

        //working version - for single button //
        //$('.btn:first-child').html(selText+'<span class="caret"></span>');  

        //working version - for multiple buttons //
        $(this).parents('.input-group-btn').find('.btn-search').html(selText);

    });

});

var app = angular.module('myapp', []);

app.controller('searchController', function ($scope, $http, $filter) {

    $scope.x = 10;
    $scope.inactive = true;
    $scope.edit = {};
    $scope.inputs = [];


    $scope.tableData = null;
    $scope.customer = {};
    $scope.user = {};
    $scope.search = function () {
        $("#table tr").remove();
        var data = 'name=' + $scope.customer.name;

        $http({
            method: 'GET',
            url: base_url + "customer/search?" + data
        }).then(function successCallback(response) {
            $scope.tableData = response.data;
            console.log($scope.tableData);
        }, function errorCallback(response) {
            // alert("failure message: ");
        });

    }

    $scope.addfield = function () {
        cosole.log("add");
        $scope.inputs.push({})
    }

    $scope.edit = function () {
        console.log($scope.user);
        $http({
            url: base_url + "customer/edit_basic",
            method: "POST",
            data: {data: $scope.user},
        }).then(function (response) {
            alert("suc");
        },
                function (response) { // optional
                    alert("fail");
                }
        );
    }
    $scope.getEditedFields = function () {
//        angular.forEach($scope.myForm, function (value, key) {
//            if (key[0] == '$')
//                return;
//            console.log(key, value.$pristine)
//        });
        $scope.edit();

    }

});


