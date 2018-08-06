<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout example for Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">

</head>

<?php
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $fn = $_POST['fn'];  
    $ln =$_POST['ln'];  
    $email= $_POST['email'];  
    $package = $_POST['package'];
    $payment = $_POST['paymentMethod'];
    $zip = $_POST['zip'];   
    $available = $_POST['calendar'];
    // $to = 'ysolaadebayo@gmail.com, ysolaadebayo@yahoo.com';
    // $from ='';
    // $subject = "Client request";
    
    $from = new SendGrid\Email(null, "ysolaadebayo@gmailS.com");
    $subject = "Client request";
    $to = new SendGrid\Email(null, "ysolaadebayo@gmail.com");
 

    $body = new SendGrid\Content(null, 
    "From: $fn $ln\n 
    E-Mail: $email\n 
    Package: $package\n
    Payment method: $payment\n
    Zip: $zip\n
    Meeting: $available\n") ;

    if (new SendGrid\Mail($from, $subject, $to, $body)) { 
        echo "<script>alert('Email sent successfully');</script>";
   } else { 
       echo "<script>alert('The email could not be sent');</script>";
   }


$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
}
?>



<body class="bg-light" data-gr-c-s-loaded="true" cz-shortcut-listen="true">

    <div class="container">
        <div class="py-5 text-center">
            <h2>Photographer portfolio</h2>
        </div>

        
        <form action="" method="post">
                <h4 class="mb-3">Packages</h4>
               <div class="d-block my-3 middle">
                        <label>
                            <input type="radio" name="package" value="Package 1" checked/>
                            <div class="box">
                                <span>Package 1</span>
                            </div>
                        </label>

                          <label>
                            <input type="radio" name="package" value="Package 2" checked/>
                            <div class="box">
                                <span>Package 2</span>
                            </div>
                        </label>

                       <label>
                            <input type="radio" name="package" value="Package 3" checked/>
                            <div class="box">
                                <span>Package 3</span>
                            </div>
                        </label>
                </div>

                <div class="d-block my-3">
                <h4 class="mb-3">Days photographer is available </h4>
                    <select name="calendar">   
                        <option value="July 27">July 27</option>
                        <option value="July 30">July 30</option>
                        <option value="August 2">August 2</option>
                        <option value="August 7">August 7</option>
                        <option value="August 10">August 10</option>
                    </select>
                </div>

                <hr class="mb-4">
                    
                    <div class="container-fluid">

                     <h4 class="mb-3">Information</h4>
                    
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="fn">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="ln">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder=""name="zip" required>
                            <div class="invalid-feedback">
                            Zip code required.
                            </div>
                        </div>
                    
                    </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3 middle">
                        <label>
                            <input type="radio" name="paymentMethod" value="Cash" checked/>
                            <div class="box">
                                <span>Cash</span>
                            </div>
                        </label>

                        <label>
                            <input type="radio" name="paymentMethod" value="Venmo"/>
                            <div class="box">
                                <span>Venmo</span>
                            </div>
                        </label>

                        <label>
                            <input type="radio" name="paymentMethod" value="Paypal"/>
                            <div class="box">
                                <span>Paypal</span>
                            </div>
                        </label>
                    </div>
                
                        <hr class="mb-4"> 
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue to checkout</button>
        </form>

        <hr class="mb-4">
        
        <h3>Portfolio</h3>

        <div class="portfolio"> 
            <div><img src="/pic.jpg"></div>
            <div><img src="/pic.jpg"></div>
            <div><img src="/pic.jpg"></div>
            <div><img src="/pic.jpg"></div>
            <div><img src="/pic.jpg"></div>
        </div>
        

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Support</a>
                </li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>



</html>