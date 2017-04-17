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
    <script src="<?php echo base_url() ?>js/app.js" type="text/javascript"></script>

    <style>

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
    </style>
    <body>

        <div class="bgimg container-fluid w3-animate-opacity w3-text-white" ng-controller="searchController">
            <div class="w3-display-topleft w3-padding-large w3-xlarge">
                Logo
            </div>

            <div>
                <h1 class="w3-animate-top">Activities</h1>
            </div>


            <div class="container">
                <div class="row">
                    <div>
                        <table id="table">
                            <tr>
                                <th>Data</th>
                                <th>Type</th>
                                <th>Outcome</th>
                                <th>sales person</th>
                                <th>Edit</th>
                            </tr>

                            <?php
                            foreach ($activity_data as $row) {
                                ?>

                                <tr>
                                    <td><?php echo $row->date ?></td>
                                    <td><?php echo $row->type ?></td>
                                    <td><?php echo $row->outcome ?></td>
                                    <td><?php echo $row->sales_person_name ?></td>
                                    <td><a href="<?php echo site_url('Activities')."/edit/".$row->id ?>">edit</a></td>
                                </tr>

                                <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>