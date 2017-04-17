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
    <script src="<?php echo base_url() ?>js/activity.js" type="text/javascript"></script>

    <style>
        body,h1 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #31ea93;
            text-align: left;
            padding: 20px;
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
        /*   */
    </style>
    <body>

        <div class="bgimg container-fluid w3-animate-opacity w3-text-white" ng-controller="activityController">
            <div class="w3-display-topleft w3-padding-large w3-xlarge">
                Logo
            </div>

            <div>
                <h1 class="w3-animate-top">Contacts</h1>
                <form novalidate="" method="post" action="<?php if (isset($activity_data)) {echo site_url("Activities/edit"); }else{echo site_url("Activities"); } ?>">
                    <?php if (isset($reg_errors)) echo $reg_errors; ?>
                
                    
                    <div class="form-group">
                        <label for="id">id:</label>
                        <input  ng-model="outcome"  type="text" name="id" class="form-control" id="outcome" placeholder="Enter Id" disabled="<?php echo isset($activity_data) ?>">

                    </div>
               
                    

                    <div class="form-group">
                        <label for="id">Outcome:</label>
                        <textarea ng-model="customer_id" name="outcome" class="form-control" id="outcome" placeholder="Enter Customer  outcoem"></textarea>

                    </div>


                    <div class="form-group">
                        <label class="control-label" for="type">type</label>

                        <select id="type" name="types" class="form-control" ng-model="type" required >
                            <option value="">--select type--</option>
                            <option value="1">Call</option>
                            <option value="2">Email</option>
                            <option value="3">Meeting</option>

                        </select>
                    </div>
            </div>

            <br>


            <input  type="submit" class="btn btn-default" value="Create Activity" />

        </form>
    </div>



    <div class="container">

    </div>

</div>

</body>
</html>

