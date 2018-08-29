<!DOCTYPE html>
<html>

<head>
    <title>Course Registration Form </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Meta tag Keywords -->
    <link href="css/registration_css.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="video">
        <div class="center-container">
            <div class="w3ls-agileinfo">
                <h1> Course Registration Form </h1>
            </div>
            <div class="bg-agile">
                <h2>Training Course </h2>
                <div class="login-form">
                    <form action="db_registration.php" method="post">
                        <input type="text" name="Tittle" placeholder="Tittle" required="" />
                        <input type="text" name="Name" placeholder="Full Name" required="" />
                        <input type="text" name="Position" placeholder="Position" required="" />
                        <input type="text" name="Company" placeholder="Company" required="" />
                        <input type="email" name="Email" placeholder="Email" required="" />
                        <input type="text" name="Address" placeholder="Street Address" required="" />
                        <input type="text" name="Address1" placeholder="Street Address Line2" required="" />
                        <div class="left-w3-agile">
                            <select class="form-control" name="Country">
							<option>Choose your country</option>
							<option value="Argentina">Argentina</option>
							<option value="Georgia">Georgia</option>
							<option value="Dominica"> Dominica</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Monaco"> Monaco</option>
						</select>
                            <input type="text" name="Region" placeholder="State/region" required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text" name="City" placeholder="City" required="" />
                            <input type="text" name="Zip" placeholder="Zip/postal code" required="" />
                        </div>
                        <input type="text" name="Number" placeholder="Phone Number" required="" />
                        <div class="w3-agile">
                            <span><label>Gender : &nbsp;</label></span>
                            <input type="radio" value="Male" name="gender"><span>Male &nbsp;</span>
                            <input type="radio" value="Female" name="gender"><span>Female</span>
                        </div>
                        <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
            </div>
            <!-- //banner -->
            <!--copyright-->
            <!--
<div class="copy w3ls">
    <p>&copy; 2018 Course Registration Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
-->
            <!--//copyright-->
        </div>
    </div>
</body>

</html>
