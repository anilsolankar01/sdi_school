<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>complaint</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <h2>Track yor complaint</h2>
            <form method="POST" action="test_comp.php" id="signup-form" class="signup-form" enctype="multipart/form-data">
                <h3>
                aa    
                </h3>
                <fieldset>
                    <div class="form-row">
                        
                        <div class="form-group-flex">
                            <div class="form-group">
                                <input type="text" name="a" id="" placeholder="Name" />
                            </div>
                            
                        </div>
                    </div>
                </fieldset>
                

                <h3>
                    complaint
                </h3>
                <fieldset>
                    <label style="padding-bottom: 25px;" for="" class="label-radio">write here </label>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="city" id="city" placeholder="school code" />
                           
                        </div>
                        <div class="form-input">
                           
                            <input type="text" name="city" id="city" placeholder="school name" />
                        </div>
                        
                    </div>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <select name="country" id="country">
                                <option value="">facilities</option>
                                <option value="Viet Nam">staff</option>
                                <option value="USA">admission</option>
                                <option value="USA">other</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                        </div>                         
                    </div>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="city" id="city" placeholder="tells us more" />
                           
                        </div>
                        
                        
                    </div>
                   
                </fieldset>

                <h3>
                    status
                </h3>
                <fieldset>
                    <input type="submit">
                    <label for="job" class="label-radio">your complaint has been raised. Your ticket no. is 3923213.</label>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>