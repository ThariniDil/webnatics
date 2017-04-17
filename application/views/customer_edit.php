<!DOCTYPE html>
<html ng-app="myapp">
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/common.css">



    <script src="<?php echo base_url() ?>js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js" type="text/javascript"></script>

    <script>
        var emails = [];
        var phones = [];
        emails =<?php echo json_encode($email_data) ?>;
        phones =<?php echo json_encode($phone_data) ?>;
    </script>
    <script src="<?php echo base_url() ?>js/customer_edit.js" type="text/javascript"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #31ea93;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: rgba(156, 39, 176, 0.42);
        }
        tr:nth-child(odd) {
            background-color: rgba(33, 150, 243, 0.33);
        }

        /*search */

        .filter-col{
            padding-left:10px;
            padding-right:10px;
        }
        /* - search*/
        /* input fields : desabled*/
        input[disabled]  {
            background-color: rgba(255, 0, 0, 0);
            border: 1px solid rgba(255, 235, 59, 0);
            color:white;
        }
        .overlay input[type="text"]{
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.72);
        }
        /*   */
    </style>
    <body class="bgimg">
        <div class="container w3-animate-opacity w3-text-white" ng-controller="editController">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                         <div class="col-sm-10 col-sm-offset1">
                             <h1 class="w3-animate-top">CUSTOMERS</h1>
                             <a class="round-button" ng-click="inactive1 = false">
                                edit
                            </a>
                            <table id="table" class="overlay">
                                <?php
                                if (isset($user_data)) {
                                    ?>

                                    <tr>
                                        <td>name</td>
                                        <td><input ng-model="user.name" ng-disabled="inactive1" type="text" value="<?php echo $user_data->name ?> "/></td>
                                    </tr>

                                    <tr>
                                        <td>company name</td>
                                        <td><input ng-model="user.company_name" ng-disabled="inactive1" type="text" value="<?php echo $user_data->company_name ?> "/></td>
                                    </tr>
                                    <tr>
                                        <td>business registration number</td>
                                        <td><input ng-model="user.business_registration_number" ng-disabled="inactive1" type="text" value="<?php echo $user_data->business_registration_number ?> "/></td>
                                    </tr>
                                    <tr>
                                        <td>website</td>
                                        <td><input ng-disabled="inactive1" type="text" value="<?php echo $user_data->website ?> "/></td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td><input ng-disabled="inactive1" type="text" value="<?php echo $user_data->name ?> "/></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px">Activities</td>
                                        <td>activities</td>
                                    </tr>

                                    <?php
                                }
                                ?>
                            </table>
                            <br>
                            <button ng-click="getEditedFields()">UPDATE</button>
                 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">  
                    <h2>phone</h2>

                    <button type="button" ng-click="addFieldPhone()">+</button>
                    <br>

                    <div ng-repeat="phone in inputs.phones">
                        <input ng-model="phone[$index]"  name="phones[]" type="number" ng-value="{{phone.contact_number}}">
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="col-md-5">

                        <h2>email</h2>

                        <button type="button" ng-click="addFieldEmail()">+</button>
                        <br>

                        <div ng-repeat="email in inputs.emails">
                            <input ng-model="email[$index]" ng-value="email.email" name="emails[]" type="email" ng-value="{{email.email}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>