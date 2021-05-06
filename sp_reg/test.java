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
                style="background-color:black;"
            }
        </style>

    </head>

   

    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-info" style="border: none;">
                        <i class="far fa-arrow-alt-circle-right"></i>
                </button>
                <a class="navbar-brand ml-5" href="#">HOTEL DC</a>
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
                            aria-expanded="false" class="dropdown-toggle">Hotel DC services</a>
                        <ul class="collapse list-unstyled" id="houseSubmenu">
                            <li>
                                <a href="./Subpages/hom.php">Geust Room</a>
                            </li>
                            <li>
                                <a href="./Subpages/b.php">Mini Audi</a>
                            </li>
                            <li>
                                <a href="./Subpages/pe.php">Wifi</a>
                            </li>
                            <li>
                                <a href="./Subpages/pe.php">Parking</a>
                            </li>
                        </ul>
                    </li>
                    
                 
                      <li class="active">
                        <a href="./Contact_us.html">Contact us</a>
                    </li>
                     <li class="active">
                        <a href="./book.html">Booking</a>
                    </li>
                    <li class="active">
                        <a href="./admin.html">Admin</a>
                    </li>

                   
                    
                </ul>


            </nav>

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

                        <h3 class="mt-5 mb-4"> Restourant  </h3>

                        <!-- cards -->
                
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mr-5">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="food.jpg
                                        " alt="Rooms">
                                        <div class="card-body">
                                          <h5 class="card-title">Food service</h5>
                                          <p class="card-text">We provide delicious and healthy food.<br><br></p>
                                          <a href="Subpages/hotel.php" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="rooms.jpg" alt="Rooms">
                                    <div class="card-body">
                                        <h5 class="card-title">Rooms</h5>
                                        <p class="card-text">we provide clean and fresh room to customers. </p>
                                        <a href="./Subpages/m.php" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" id="image" src="pool.jpg" alt="co">
                                        <div class="card-body">
                                            <h5 class="card-title">Swimming pool</h5>
                                            <p class="card-text">We provide large and fresh swimming pool.</p><br>
                                            <a href="./Subpages/ma.php" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container text-muted mt-3">

                        <h3 class="mt-5 mb-4"> Hotel </h3>

                        <!-- cards -->
                
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mr-5">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="dc7.jpeg" alt="Full Home ">
                                        <div class="card-body">
                                          <h5 class="card-title">Housekeeping</h5>
                                          <p class="card-text">Quick housekeeping service is available.</p>
                                          <a href="./Subpages/home.php" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="parking.jpg" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">Parking</h5>
                                        <p class="card-text">Very large place is provided for parking.</p>
                                        <a href="./Subpages/a.php" class="btn btn-outline-success">Click to know more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mr-5">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="gym.jpg" alt="Control">
                                        <div class="card-body">
                                            <h5 class="card-title">Fitness Gym</h5>
                                            <p class="card-text">We take care about health of Customers.</p>
                                            <a href="./Subpages/p.php" class="btn btn-outline-success">Click to know more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                   

                <div class="jumbotron mt-5 mb-2">
		    <footer>

                    <!-- footer start -->
                        <div class="box">
                            <div class="container">
                                 <div class="row">
                                     
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <i class="fab fa-instagram fa-3x" aria-hidden="true"></i>
                                                
                                                <div class="title">
                                                    <h4>Instagram</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>Get connected with us using instagram</span>
                                                </div>
                                                
                                                <a href="#">Learn More</a>
                                                
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
                                                
                                                <i class="fab fa-google-plus-g fa-3x" aria-hidden="true"></i>
                                            
                                                <div class="title">
                                                    <h4>Google</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <span>Connect us with google.</span>
                                                </div>
                                                
                                                <a href="#">Learn More</a>
                                                
                                             </div>
                                        </div>	 
                                        
                                         
                                                
                                             </div>
                                        </div>
                                
                                </div>		
                            </div>
                        </div>
                    <!-- footer end -->
			</footer>

                </div>

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
