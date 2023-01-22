<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>

<style>
   @media screen and (max-width:800px){
    .top8{
      margin-bottom: 25px;
    }
   }

</style>
</head>
<body>
<?php require_once(__DIR__.'/navbar.php'); ?>
<div class="container top4 shadow-lg">
   <!--Section: Contact v.2-->
<section class="mb-4 pb-1 py-4">
   
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-1">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"> Our team will come back to you within
        a matter of hours to help you.</p>
  
    <div class="row">

      
        <div class="col-md-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                
                <div class="row">

                   
                    <div class="col-md-6 top8">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                           
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                           <br>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                           <br>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>
                          <br>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="channel[]" id="checkbox1" value="nl">
                    <label for="checkbox1" class="form-check-label">Subscribe to our Newsletter</label>
                </div>
                <br>
            </form>

            <div class="text-center ">
                <a class="btn btn-primary btn-lg" role="button" href="#">Send</a>
            </div>
           
            <div class="status"></div>
  
    </div>
   
</section>

<!--Section: Contact v.2--> 
</div>



<?php require_once(__DIR__.'/navbar.php'); ?>
      


      <script src="bootstrap-4.6.1-dist/js/jquery"></script>
      <script src="bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>


</body>
</html>