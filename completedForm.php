<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Anthony Hamlin">
    <meta name="keywords" content="Savanna's Coffee House">
    <meta name="description" content="Savanna's Coffee House">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Custom Font -->
    <link rel="stylesheet" href="https://use.typekit.net/fbg7bai.css">
    <link rel="stylesheet" href="https://use.typekit.net/fbg7bai.css">
    <!-- custom css-->
    <link rel="stylesheet" href="css/sav_layout.css">
    <link rel="stylesheet" href="css/sav_style.css">

    <title>Savanna's Coffee House</title>
</head>

<body>
    <!-- page start -->
    <div id="page">
        <!-- header start -->
        <header class="bkg_coffee">
            <hr>
            <!-- nav start -->
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bkg_coffee">
                    <a class="navbar-brand" href="#"><img src="images/coffeecup1.svg" width="25px" alt="Coffee cup"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="menu.html">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="events.html">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- nav end -->
            <!-- Masthead Start-->
            <div class="jumbotron  bkg_creamer jumbotron-fluid">
                <div class="container">
                    <img src="images/SavannasLogo.svg" class="sav_logo" alt="Savanna's Coffee House Logo">
                </div>
            </div>
            <hr>
            <!-- Masthead END-->
        </header>
        <hr>
        <!-- header end -->
        <!-- content start -->
        <div class="container" id="content">
            <div class="row">
                <div class="col-sm">
                    <h1 class="adorn_graved_reg">Savanna's Coffee House</h1>
                    <h5 class="voltage_reg">Contact Form</h5>
                    <!-- PHP CODE -->
                    <?php

echo "<p>Thank you for your response. I appreciate you contacting us.</p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "noreply@hamberfim.com";		//CHANGE within the quotes. Place email address where you wish to send the form data. 
										//Use your DMACC email address for testing. 
										//Example: $toEmail = "jhgullion@dmacc.edu";		
	
	$subject = "Savanna's Coffee House";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example" 

	$fromEmail = "noreply@hamberfim.com";		//CHANGE within the quotes.  Use your DMACC email address for testing OR
										//use your domain email address if you have Heartland-Webhosting as your provider.
										//Example:  $fromEmail = "contact@jhgullion.org";  

//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	} 
	
	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}
?>
<!-- PHP CODE -->
                </div>
            </div>
        </div>
        <!-- content end -->
        <!-- footer start -->
        <hr>
        <div class="bottom_hr">
        </div>
        <div class="jumbotron bkg_coffee jumbotron-fluid div_shrink div_ft_control">
            <footer class="jumbotron bkg_creamer jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <p class=" adorn_graved_reg_blk text-center font_size_up1"><span>Savanna’s</span></p>
                            <p class="voltage_reg_blk text-center font_size_up2"><span>Coffee House</span></p>
                            <div class="text-center"><img src="images/coffeecup1.svg" width="40px" alt=" Cup Logo">
                            </div><br>
                            <p class="adorn_graved_reg_blk text-center">604 24th Street</p>
                            <p class="adorn_graved_reg_blk text-center">St. Paul, Minnesota</p>
                            <p class="adorn_graved_reg_blk text-center">702-971-1154</p>
                            <!-- Social media font awesome icons Start-->
                            <p class="text-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </p>
                            <!-- social media font awesome icons END-->
                            <!-- back to top of page -->
                            <p class="voltage_reg_blk text-center font_size_up2"><a href="#page">Go to top</a></p>
                            <br>
                            <!-- back to top of page -->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer end -->
    </div>
    <!-- page end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="formsubmit.js"></script>
</body>

</html>