<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css" /> 
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Zilla+Slab');
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

    /*.container{
      padding: 0;
    }*/
    .top-notification{
      text-align: center;
      background-color: #21252B;
      color: #f2f2f2;
      padding: 10px;
      font-family: 'Zilla Slab', serif;
      letter-spacing: .1em;
    }
    .top-notification span{
      color: #11D335;
    }
    .top-notification i{
      position: absolute;
      right: 10px;
      font-size: 1.5em;
      transition: .2s;
    }
    .top-notification i:hover{
      cursor: pointer;
      color: darkgray;
    }
    .hide{
      display: none;
    }
    nav{
      padding-top: 40px;
      padding-bottom: 40px;
      border-bottom: 1px solid #6d6d6d;
    }
    nav a{
      font-size: 2.5vh;
      padding: 20px;
      color: #21252B;
      font-weight: 600;
      text-transform: uppercase;
      transition: .4s;
      font-family: 'Josefin Sans', sans-serif;
    }
    nav a:hover{
      text-decoration: none;
      color:#11D335;
    }
    nav .nav-link{
      text-align: center;
    }
    .nav-link-r a:hover{
      text-shadow: 1px 1px 5px rgba(0,0,0,.15);
    }
    a.logo{
      position: absolute;
      left: 50%;
      transform: translateX(-50%)translateY(-50%);
      top: 50%;
    }
    .shopping-menu{
      text-align: center;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .shopping-menu a{
      text-decoration: none;
      padding: 20px;
      color: #21252B;
      transition: .2s;
      font-family: 'Josefin Sans', sans-serif;
    }
    .shopping-menu a:hover{color: #11D335;}
    .fa-user-circle{
      position: absolute;
      right: 20px;
      font-size: 1.5em;
    }
    .fa-window-close{
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 2em;
        cursor: pointer;
        transition: .3s;
        }
    .fa-window-close:hover{
        text-shadow: 1px 1px 5px rgba(0,0,0,.15);
    }
    .cartPanel{
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1;
        overflow-x: hidden;
        transition: 0.5s;
        background-color: gainsboro;
        border-left: 1px solid darkgray;
    }
    .cart-status{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        margin: 0;
        text-align: center;
        color:lightslategrey;
    }  
    .shopping-cart .fa-shopping-bag{
        color:#b2b2b2;
        padding: 20px;
        font-size: 2em;
    }
    .cart-bottom p{
        position: absolute;
        padding: 10px;
        bottom: 0;
    }
    #main{
        transition: margin-right .3s ease-in-out, opacity .3s ease-in-out;
    }
        .slider-wrap{
            width: 90%;
            margin: 20px auto;
        }
        .slider{
            width: 100%;
            height: 60vh;
            margin: auto;
        } 
        .slider div{
            height: 100%;
            width: 100%;
            background-color: #fff;
        }
        .slider div{
            background-image: url(images/off.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .slider div:nth-child(2){
            background-image: url(images/nmd.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .slider div:nth-child(3){
            background-image: url(images/nikes.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .home-grid .row .col-md{
            border: 1px solid #6d6d6d;
            margin: 5px;
            padding: 20px;
            height: 60vh;
        }
        .home-grid h1{
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        .left-box{
            overflow: scroll;
        }
        
        ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 7px;
        }
        ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0,0,0,.5);
            -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
        }
        
        .right-box{
            text-align: center;
            box-sizing: border-box;
        }
        .right-box h6{
            font-weight: lighter;
            letter-spacing: .1em;
            margin-top: 20px;
            position: absolute;
            width: 100%;
            left: 50%;
            transform: translateX(-50%);
        }
        .right-box p{
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        .left-box img{
            display: block;
            margin: 15px auto;
            padding: 50px;
            width: 100%;
        }
        .buttons{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            margin: 0;
            padding: 0;
        }
         .col-12{
             padding: 10px;
             background-color: #232323;
             color: #fff;
             transition: .2s;
        }
        .col-12:hover{
            opacity: .9;
            cursor: pointer;
        }
    @media screen and (max-width: 600px) {
        .shopping-menu a{
          display: block;
        }
    }    
    </style>

    <title>Sole Lab &#124; Home</title>
  </head>
  <body>
    <div id="main">
    
        <div class="top-notification">
          Free shipping on all orders above <span>&#36;100</span> <i class="fas fa-window-close close-btn"></i>
        </div>
        <header>
          <nav class="mobile-screen navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="120px;"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
            </nav>
            <nav class="large-screen">
            <div class="container">
              <div class="row">
                <div class="col-md nav-link nav-link-l">
                    <a href="index.php">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
                <div class="col-md nav-link nav-link-c">
                  <a href="index.php" class="logo"><img src="images/logo.png" width="120px"></a>
                </div>
                <div class="col-md nav-link nav-link-r">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-shopping-bag" onclick="openSidePanel()"></i></a>
                    <a href="#"><i class="far fa-user-circle"></i></a>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <div class="main-content">
            
            <div class="container home-grid">
                <h1></h1>
                <div class="row">
                    <div class="col-md left-box">
                        <img src="images/7.jpeg">
                        <img src="images/8.jpeg">
                        <img src="images/9.jpeg">
<!--                        <p>NIKE/REACT ELEMENT 87/REACT ELEMENT 87 &#39;LIGHT BONE&#39;</p>-->
                    </div>
                    <div class="col-md right-box">
                        <h6>REACT ELEMENT 87 &#39;Solar Red&#39;</h6>
                        <p>
                        Designed for casual wear, the React Element 87 is defined by both the super-soft React midsole optimized for lightweight cushioning and an all-new translucent upper made from TPE yarn translucent textile. Mixed materials and exposed stitching can be found throughout but are particularly noticeable on the wavy, trail-style lacing system. A low&#45;slung swoosh in tan and red accents round out this hybrid sneaker’s sporty look.
                        <br><br>
                        <span>&#36;140</span>
                        </p>
                        <div class="row buttons">
                        <div class="col-12">
                            Add to Cart
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<!--        <footer></footer>-->
    </div>
      
    <div class="shopping-cart cartPanel" id="sidePanel">
        <i class="fas fa-window-close" onclick="closeSidePanel()"></i>
        
        
        <p class="cart-status"><i class="fas fa-shopping-bag"></i><br>Your cart is empty</p>
        <div class="cart-bottom">
        <p>Sub-total&#58;</p>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $('.close-btn').click(function(){
        $('.top-notification').addClass("hide");
      });
    </script>
    
    <!--Cart slide in/out-->  
    <script>
        function openSidePanel() {
            document.getElementById("sidePanel").style.width = "300px";
            document.getElementById("main").style.marginRight = "300px";
            document.getElementById("main").style.opacity= "0.5";
        }

        function closeSidePanel() {
            document.getElementById("sidePanel").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.getElementById("main").style.opacity= "1";
        }
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    <!--Slick slider-->  
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script> 
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                arrows:false, 
                autoplay: true,
                dots:true,
                autoplaySpeed:2000

          });  
//        $('.left-arrow').click(function(){
//          $('.slider').slick('slickPrev');
//        });
//
//        $('.right-arrow').click(function(){
//          $('.slider').slick('slickNext');
//        });   
        });
    </script>  
        
  </body>
</html>
