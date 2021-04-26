<?php 
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
         echo '<script>';
  //  echo 'console.log('. json_encode($my_arr, JSON_HEX_TAG) .')';
     echo 'console.log('. json_encode('test', JSON_HEX_TAG) .')';
   echo '</script>';
        if (isset($_POST['reg_user'])){
                   echo '<script>';
     echo 'console.log('. json_encode($_POST['fn_modal'], JSON_HEX_TAG) .')';
   echo '</script>';
        // call method addToCart
        $User->addToUser($_POST['fn_modal'], $_POST['ln_modal']);
        }
    }
    // $in_cart = $Cart->getCartId($product->getData('cart')) ;
    // $item_id = $_GET['item_id']??0;
    // foreach ($product->getData() as $item){
    //     if($item['item_id']==$item_id){
            
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shoes World</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <?php require 'functions.php'; ?>


</head>
<body>


    <!-- start #header -->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">Sport Shoes World - Ho Chi Minh City District 1 - 39 Nguyen Binh Khiem - SDT: 0983 471 295</p>
                <div class="font-rale font-size-14">
                        <!-- <button class="btn" id="login-ic" data-toggle="modal" data-target="#signup-modal"><i class="fa fa-user-circle fa-lg"></i>
                        </button>
                    <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Register</a> -->
                    <button class="btn" id="login-ic" data-toggle="modal" data-target="#signin-modal"><i class="fa fa-user-circle fa-lg"></i>
                    </button>
                </div>
            </div>
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Sign in</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <!-- <form data-toggle="validator" action="signin.php" method="POST"> -->
                  <form data-toggle="validator" method="POST">
                    <!-- <?php $errors = array(); 
                            include('errors.php'); ?> -->
                <div class="form-group">
                    <input placeholder="Email" type="text" name="reg-email" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" name="reg-password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn login-submit btn-dark" name="login_user">Sign in</button>
                    <button type="button" class="btn btn-secondary" id="register-btn" data-toggle="modal" data-target="#signup-modal">Register</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

         <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Register</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
<!-- <form data-toggle="validator" action="registerModal.php" method="POST"> -->
                <form data-toggle="validator" method="POST">
                <div class="form-group">
                    <input placeholder="First name" type="text" name="fn_modal" class="form-control" data-error="Please enter first name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Last name" type="text" name="ln_modal" class="form-control" data-error="Please enter last name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio"  name="gender_modal" autocomplete="off" checked> Male
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio"  name="gender_modal" autocomplete="off"> Female
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Email" type="text" name="email_modal" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" name="pw_modal" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Confirm password" type="password" name="repw_modal" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Phone" type="number" name="phone_modal" class="form-control" data-error="Please enter phone." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Address" type="text" name="address_modal" class="form-control" data-error="Please enter address." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-dark" name="reg_user">Register</button>
                     <button type="button" class="btn btn-secondary" id="back-signin-btn">Sign in</button>
<!-- <script type="text/javascript">
    $('#back-signin-btn').click(function(){
        $('#signup-modal').modal('hide');
        $('#signin-modal').modal('show');
    });
</script> -->
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">Sport Shoes World</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Coming Soon</a>
                      </li>
                  </ul>
                  <form action="#" class="font-size-14 font-rale">
                      <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'))?? 0; ?></span>
                      </a>
                  </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">
        <?php  ?>
