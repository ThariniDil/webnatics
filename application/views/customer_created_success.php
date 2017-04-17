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
                <h1 class="w3-animate-top rect rect-round">Customer Created Succusfully</h1>
            </div>

        </div>

    </body>
</html>