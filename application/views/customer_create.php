<!DOCTYPE html>
<html ng-app="myapp">
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-theme.css">
    
    
    
    <script src="<?php echo base_url() ?>js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/customer_create.js" type="text/javascript"></script>

    <style>
        body,h1 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
    <body>

        <div class="bgimg container-fluid w3-animate-opacity w3-text-white" ng-controller="customController">
            <div class="w3-display-topleft w3-padding-large w3-xlarge">
                Logo
            </div>

            <div>
                <h1 class="w3-animate-top">CREATE CUSTOMER</h1>
                <form novalidate="" method="post" action="<?php echo site_url("customer") ?>">
                    <?php if (isset($reg_errors)) echo $reg_errors; ?>
                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter company name">

                    </div>
                    <div class="form-group">
                        <label for="company_name">company name:</label>
                        <input type="text" name="company_name" class="form-control" id="name" placeholder="Enter company name">

                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input name="website" type="text" class="form-control" id="address" placeholder="Enter website url">
                    </div>
                    <br>
                    <h2>phone</h2>
                    
                    <button type="button" ng-click="addFieldPhone()">+</button>
                    <br>
                    
                    <div ng-repeat="item in inputs.phones">
                        <input ng-model="item.value" name="phones[]" type="number">
                    </div>

                    
                     <h2>email</h2>
                    
                    <button type="button" ng-click="addFieldEmail()">+</button>
                    <br>
                    
                    <div ng-repeat="item in inputs.emails">
                        <input ng-model="item.value" name="emails[]" type="email">
                    </div>
                    
                    <button type="buton" class="btn btn-default">Create Customer</button>

                </form>
            </div>

        </div>

    </body>
</html>