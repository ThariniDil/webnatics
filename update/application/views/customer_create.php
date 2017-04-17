<!DOCTYPE html>
<html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-theme.css">

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

        <div class="bgimg container-fluid w3-animate-opacity w3-text-white">
            <div class="w3-display-topleft w3-padding-large w3-xlarge">
                Logo
            </div>

            <div>
                <h1 class="w3-animate-top">CREATE CUSTOMER</h1>
                <form method="post" action="<?php echo site_url("customer")?>">
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

                    <button type="submit" class="btn btn-default">Create Customer</button>

                </form>
            </div>

        </div>

    </body>
</html>