 <?php 
    
    $submit=$_POST;
    if ($submit) {
        // echo "<script>alert('hello')</script>";
        $conn=mysqli_connect('localhost','root','','hoteldc');
        $username=$_POST['username'];
        $password=$_POST['password'];
        
            $password = md5($password);
            $query = "SELECT * FROM customercustomerid WHERE Email='$username' AND Password='$password'";
            $results = mysqli_query($conn, $query);
            if(!$res)
            {
                die("error !!");
            }
            $results=mysqli_fetch_array($results);
            $num=mysqli_num_rows($results);
            if($num==0)
            {
                echo "<script>alert('incorrect')";
            }
            else{
                echo "<script>alert('correct')";
            }
            
            mysqli_close($conn);
        }
    
    
    ?>


<!DOCTYPE html>
<html>

    <head>
 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./main.css" type="text/css">
    
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous">

        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
            crossorigin="anonymous">
            <script>
                function fun(){
                    alert('hello');
                }
            </script>
        <style>
            body{

                }
            .hero-image {
                background-image: url("https://source.unsplash.com/800x800/?services,help,production");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            .hero-text {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
        </style>

    </head>

   

    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-info" style="border: none;">
                        <i class="far fa-arrow-alt-circle-right"></i>
                </button>
                <a class="navbar-brand ml-5" href="#">QH-solution</a>
                <button class="navbar-toggler d-lg-none" type="button"
                    data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <form action="./index.php" class="form-inline my-2 my-lg-0 mx-auto" method="post">
                        <input name="search" list="pages" class="form-control mr-sm-2" type="text"
                            placeholder="Type any service">
                        <button name="searchbutton" class="btn btn-outline-success my-2 my-sm-0">Search</button>
                        <datalist id="pages">
                            <option value="Hotel">
                            <option value="Rooms">
                            <option value="Booking">
                            <option value="Offers">
                            <option value="Fitness Gym">
                            <option value="Swimming Pool">
                            <option value="Conference Hall">
                        </datalist>
                    </form>
                    <?php if(isset($_POST['searchbutton'])) {
                        $go = $_POST['search'];
                        echo $go;
                        
                    } ?>
                    <!-- Button trigger modal -->
                   <!--  <?php
                    if(isset($_SESSION['username'])) {
                    // display logout link
                    if (isset($_SESSION['username'])) : ?>
                        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p class="mx-3"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>
                    <?php } else {
                    // display login link
                    ?> -->
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <a href="./login.html"><button class="btn btn-outline-info my-2 my-sm-0"
                        type="button" data-toggle="modal" data-target="#signInModal">Logout</button></a>
                        <!-- <a href="./book.html">Booking</a> -->
                    </ul>
                    <?php } ?>
                    
                  
                                            </div>         
                                        </form>
                                     <!-- <p class="text-center my-2"><a href="./registration.html">Create an Account</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </nav>  
        
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">

                <ul class="list-unstyled components sticky-top">

                    
                    <li class="active">
                        <a href="./index.php">Home</a>
                    </li>

                   <li>
                        <a href="#houseSubmenu" data-toggle="collapse"
                            aria-expanded="false" class="dropdown-toggle">QHS Services</a>
                        <ul class="collapse list-unstyled" id="houseSubmenu">
                            <li>
                                <a href="#clean">Repair</a>
                            </li>
                            <li>
                                <a href="#plumbing">Plumbing</a>
                            </li>
                            <li>
                                <a href="#travel">Travelling</a>
                            </li>
                            <li>
                                <a href="#parlour">Parlour</a>
                            </li>
                            <li>
                                <a href="#cook">Cook</a>
                            </li>
                        </ul>
                    </li>
                    
                 
                      <li class="active">
                        <a href="./Contact_us.html">Contact us</a>
                    </li>


                     <li class="active">
                        <a class="open-button" href="./book.html" target="" disabled>Booking</a>
                        <!-- <div class="form-popup" id="myForm">
                            <button type="button" class="btn cancel" onclick="closeForm()" style="background-color:red;">X</button>
                            <iframe src="demo_iframe.htm" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div> -->
                    </li>         
                    
                </ul>


            </nav>
            <script>
                function openForm() {
                document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                document.getElementById("myForm").style.display = "none";
                }
            </script>

            <!-- Main Content -->
            <div id="main-wrapper" class="col-md-10 float-right">
                <div id="main">

                

                    <div class="Jumbotron">
                        <h2 class="text-center">QUICK HOME SOLUTION</h2>
    <section>
        <img class="mySlides" src="https://source.unsplash.com/800x400/?plumber" style="width:100%">
        <img class="mySlides" src="https://source.unsplash.com/800x400/?cook" style="width:100%">
        <img class="mySlides" src="https://source.unsplash.com/800x400/?home cleaner" style="width:100%">
        <img class="mySlides" src="https://source.unsplash.com/800x400/?parlour,home beauty" style="width:100%"> 

    </section>               
 
  <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>


                        <p class="text-center mt-3">People will forget what you said. They will forget what you did. But they will never forget how you made them feel.</p>
                        <p class="text-center"> our work talk more about Us! (^_^) </p>
                        <p class="text-center">Customer service is about empathy.</p>
                    </div>

                    <div class="container text-muted mt-3">

                        <h3 class="mt-5 mb-4" id="plumbing"> Plumbing services</h3>

                        <!-- cards -->
                
                    <div class="row" style="height:100%">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:max">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/plumber.jfif" style="opacity:100%;" alt="Rooms">
                                        <div class="card-body" style="opacity:100%;">
                                          <h5 class="card-title" style="opacity:100%;">Plumbing</h5>
                                          <p class="card-text" style="opacity:100%;"> Crack-free plumbing that won’t break the bank.<br>We’re #1 in #2.<br><br></p>
                                          <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/electrician.jfif" alt="Rooms">
                                    <div class="card-body">
                                        <h5 class="card-title">Electrical Services</h5>
                                        <p class="card-text">It is easy to become an electrical engineer, but it is difficult to act like an electrician, especially when someone asks you to work on time, as an electrician does. </p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" id="image" src="qhs_img/home_color.jfif" alt="co">
                                        <div class="card-body">
                                            <h5 class="card-title">Painting Services</h5>
                                            <p class="card-text">All you need to paint is a few tools, a little instruction, and a vision in your mind.<br>If you could say it in words, there would be no reason to paint.</p><br>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
    
                        </div>
                    </div>

                    <div class="container text-muted mt-3">

                        <h3 class="mt-5 mb-4" id="clean"> Spotless </h3>                
                        <div class="row" style="">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/housekeep1.jfif" alt="Full Home ">
                                        <div class="card-body">
                                          <h5 class="card-title">Housekeeping</h5>
                                          <p class="card-text">Quick housekeeping service is available.<br>Good housekeeping is the first principle if safety</p>
                                          <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/cook1.jfif" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Cook</h5>
                                        <p class="card-text">Life is a kitchen put on your prettiest apron and whip up something incredible. Cooking is one of the greatest gifts you can pass on to your generation. Good food is all that sweet when shared with friends and family. Happiness is homemade</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                    <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/parlour1.jfif" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Parlour at home</h5>
                                            <p class="card-text">Beauty comes from the inside.And by inside I mean inside the hair salon</p>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="container text-muted mt-3">
                        <h3 class="mt-5 mb-4" id="travel"> travelling services </h3>                
                        <div class="row" style="">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/travel.jfif" alt="Full Home ">
                                        <div class="card-body">
                                        <h5 class="card-title">Travel</h5>
                                        <p class="card-text">Remember that happiness is a way of travel, not a destination.</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/cook1.jfif" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Rent a Car</h5>
                                        <p class="card-text">hire the best car with the best price.we expert in car rental</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                    <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/parlour1.jfif" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel Agency</h5>
                                            <p class="card-text">The world is a book and those who dont travel they just read one page of it.</p>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="container text-muted mt-3">
                        <h3 class="mt-5 mb-4" id="parlour"> travelling services </h3>                
                        <div class="row" style="">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/travel.jfif" alt="Full Home ">
                                        <div class="card-body">
                                        <h5 class="card-title">Travel</h5>
                                        <p class="card-text">Remember that happiness is a way of travel, not a destination.</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/cook1.jfif" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Rent a Car</h5>
                                        <p class="card-text">hire the best car with the best price.we expert in car rental</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                    <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/parlour1.jfif" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel Agency</h5>
                                            <p class="card-text">The world is a book and those who dont travel they just read one page of it.</p>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="container text-muted mt-3">
                        <h3 class="mt-5 mb-4" id="cook"> travelling services </h3>                
                        <div class="row" style="">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/travel.jfif" alt="Full Home ">
                                        <div class="card-body">
                                        <h5 class="card-title">Travel</h5>
                                        <p class="card-text">Remember that happiness is a way of travel, not a destination.</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/cook1.jfif" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Rent a Car</h5>
                                        <p class="card-text">hire the best car with the best price.we expert in car rental</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                    <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/parlour1.jfif" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel Agency</h5>
                                            <p class="card-text">The world is a book and those who dont travel they just read one page of it.</p>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="container text-muted mt-3">
                        <h3 class="mt-5 mb-4" id="other"> travelling services </h3>                
                        <div class="row" style="">
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/travel.jfif" alt="Full Home ">
                                        <div class="card-body">
                                        <h5 class="card-title">Travel</h5>
                                        <p class="card-text">Remember that happiness is a way of travel, not a destination.</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                <div class="card" style="width: 18rem; opacity:0.8">
                                    <img class="card-img-top" src="qhs_img/cook1.jfif" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Rent a Car</h5>
                                        <p class="card-text">hire the best car with the best price.we expert in car rental</p>
                                        <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5 hero-image" style="width:">
                                    <div class="card" style="width: 18rem; opacity:0.8">
                                        <img class="card-img-top" src="qhs_img/parlour1.jfif" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel Agency</h5>
                                            <p class="card-text">The world is a book and those who dont travel they just read one page of it.</p>
                                            <a href="service_unavail/ser_un/service_unavail.html" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                   
<!-- multimedia services -->
        <div class="jumbotron mt-5 mb-2">
		    <footer>
                        <div class="box">
                            <div class="container">
                                 <div class="row">
                                     
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <i class="fab fa-whatsapp fa-3x" aria-hidden="true"></i>
                                                
                                                <div class="title">
                                                    <h4>whatsapp</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>Join our whatsapp group for latest update</span>
                                                </div>
                                                
                                                <a href="https://chat.whatsapp.com/K3mp1MjpZ1nGPEXICBPW7H">Learn More</a>
                                                
                                             </div>
                                        </div>	 
                                        
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <i class="fab fa-twitter fa-3x" aria-hidden="true"></i>
                                            
                                                <div class="title">
                                                    <h4>Twitter</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>A great platform for telling us your views.</span>
                                                </div>
                                                
                                                <a href="#">Learn More</a>
                                                
                                             </div>
                                        </div>	 
                                        
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <i class="fab fa-facebook-f fa-3x" aria-hidden="true"></i>
                                                
                                                <div class="title">
                                                    <h4>Facebook</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>Checkout our latest services and annoucements on our official facebook page.</span>
                                                </div>
                                                
                                                <a href="#">Learn More</a>
                                                
                                             </div>
                                        </div>	 
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                    
                                                
                                </div>
                                    </div>	 
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <i class="fab fa-telegram fa-3x" aria-hidden="true"></i>
                                            
                                                <div class="title">
                                                    <h4>Telegram</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>join our channel to get latest about anything</span>
                                                </div>
                                                
                                                <a href="#">Join at Telegram</a>
                                                
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                        </div>
			</footer>
        </div>




        
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
                integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
                crossorigin="anonymous"></script>
            <script
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
                integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
                crossorigin="anonymous"></script>

                <script src="./app.js"></script>
               <script>
$(document).ready(function () {
  $("#login").on('submit',(function(e)
   {
    e.preventDefault();
        $.ajax({
            url: "verify.php",
            type: "POST",         
            data: new FormData(this), 
            contentType:false,     
            cache: false,            
            processData:false, 
            async:true,                    
            success: function(data)  
            {
              alert(data);
            
            }
            });
      }));
    });
        </script>




        </body>



</html>
