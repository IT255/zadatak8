<?php
session_start();

if(isset($_POST['booking']) && ! @$_SESSION['username']){
     $message = '<div class=" container alert alert-danger text-center">
            <strong>Wrong!!</strong> You need to be logged in to make a reservation!.
          </div>';
}

?>
        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MetHotels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheet/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
        <?php if(@$_SESSION['username']){
            echo '<ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
          </ul>';
        }else {
            echo '<ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> SignUp</a></li>
          </ul>';
        }
?>
        
      
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/image1.jpg" alt="Image">
      </div>

      <div class="item">
        <img src="images/image2.jpg" alt="Image">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div class="container text-center">
  <h3 class="headline_room">Our Room Gallery</h3><br>
  <div class="row images">
    <div class="col-sm-4">
        <img src="images/image1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Room 1</p>
    </div>
    <div class="col-sm-4">
      <img src="images/image2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Room 2</p>
    </div>
    <div class="col-sm-4">
      <img src="images/image3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Room 3</p>
    </div>
  </div>
</div><br>

<div class="container text-center first_content">
  <div class="row">

    <div class="col-sm-8">
      <h3>Nearby Locations</h3><br>
        <p class="text-justify paragraph">
          Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
    </div>
    <div class="col-sm-4 well_words">
      <div class="well">
       <p >Very Good Price!!</p>
      </div>
      <div class="well">
       <p>Book Today And Get Discount!</p>
      </div>
    </div>
  </div>
</div><br>

<?php echo @$message; ?>

<div class=" booking">
    <form class="form-inline text-center" action="" method="POST">
      <div class="form-group">
      <h4>Book Online</h4>
      </div>
      <div class="form-group">
          <div class='input-group date datetimepicker1'>
                <input class="form-control" type="text" name="datumin" value="" id="datumin">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
      </div>
      <div class="form-group">
          <div class='input-group date datetimepicker2'>
                <input class="form-control" type="text" name="datumout" value="" id="datumout">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
      </div>
      <div class="form-group">
        <label for="sel1">Adults:</label>
        <select class="form-control" id="sel1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
        </select>
     </div>
     <div class="form-group">
       <label for="sel1">Children:</label>
       <select class="form-control" id="sel1">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
       </select>
    </div>
        <button type="submit" name="booking" class="btn btn-success">Book Now</button>
  </form>
</div>


<div class="container text-justify second_content">
   <h3>Lorem Ipsum</h3>
     <p class="paragraph">
       <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
</div>





<!--Footer-->
<footer class="page-footer font-small">
    <!--Footer Links-->
    <div class="container text-center">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 ">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>MetHotels</strong>

                </h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p class="text-justify paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>

            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-3 text-center">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Rooms</strong>
                </h6>
                <hr style="width: 60px;">
                <p>
                    <a href="#!">Room 1</a>
                </p>
                <p>
                    <a href="#!">Room 2</a>
                </p>
                <p>
                    <a href="#!">Room 3</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 text-center">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Restaurants</strong>
                </h6>
                <hr>
                <p>
                    <a href="#!">Cafe Bar</a>
                </p>
                <p>
                    <a href="#!">Coctail Bar</a>
                </p>
                <p>
                    <a href="#!">Restaurant</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-3 text-center">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
        <hr />
        <div class="footerConnect">
            <div class="container">
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-12 col-md-6 text-left">
                        <h6 class="text-center">
                            <strong>Get connected with us on social networks!</strong>
                        </h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-12 col-md-6 text-center ">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-lg-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-lg-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
    </div>


    <!-- Copyright-->
    <div class="footer-copyright text-center">
        © 2018 Copyright:
        <a href="#">
            <strong> Nikola Aleksic</strong>
        </a>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>

  $(function() {
    $('.datetimepicker1').datetimepicker({
      format:'YYYY-MM-DD'
    });
    $('.datetimepicker2').datetimepicker({
      format:'YYYY-MM-DD'
    });
  });

    </script>
</body>
</html>

        
    </body>
</html>
