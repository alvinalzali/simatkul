<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <main role="main">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.webp'); background-repeat: no-repeat; background-size: auto; background-position: center center;">
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 text-center text-white">
                      <hr>
                      <img class="mb-4" src="<?= base_url('assets/img/Rancamaya Icon.png'); ?>" alt height="200">
                    <h1>Experience Sunset View on Rancamaya</h1>
                    <hr>
                    <h5 class="font-italic"><strong>Rancayamaya is one hotel that has an amazing view
                        when the sunset arrives, and gives the impression of
                        comfort for visitors.</strong></h5>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>

        <div id="myCarousel" class="carousel slide" ride="crousel" style="text-shadow: 2px 2px #020202;">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide="0" class="active"></li>
                <li data-target="#myCarousel" data-slide="1"></li>
                <li data-target="#myCarousel" data-slide="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="first-slide" src="<?= base_url('assets/img/1.png'); ?>" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>AMAZING GREEN VIEW</h1>
                            <p>Our rooms offer stunning views of the green field and very own french balcony</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="second-slide" src="<?= base_url('assets/img/2.png'); ?>" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>BEAUTIFUL VIEW WITH FAMILY</h1>
                            <p>Catch up on all your favoutite shows or watch the latest hollywood blockbuster and Korean Drama Korean on your 42” flat-screen high definition TV.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="<?= base_url('assets/img/3.png'); ?>" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>WELL-LIT WORKSPACE</h1>
                            <p>Need to check your email or prepare for an upcoming meeting?Set up your laptop or tablet on the spacious desk and get to work.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>       
        <form class="form-signin bg-dark text-white overflow-hidden px-md-4" method="post" action="<?= base_url('auth') ?>">
            <br>
            <div class="text-center mb-4">
                <br>
                <h1 class="h3 mb-3 font-weight-normal">
                    Make a reservation
                </h1>
                <p>(Must be 18 years old and older to make reservation)</p>
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-secondary" type="submit">
                Sign in
            </button>
            <br>
            <p class="text-center">
                Don't have account yet?
                <a href="<?= base_url('auth/registration') ?>">create an account!</a>
            </p>
            <br>
        </form>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>MODERN AMENITIES</h2>
                    <p>
                        Rancamaya hotel has everything you need for
                        business or leisure travel- a fitness center, and
                        complimentary local shuttle service are just a
                        few of our many offerings.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>SPECIALS & PACKAGES</h2>
                    <p>
                        Rancamaya hotel has everything you need for
                        business or leisure travel- a fitness center, and
                        complimentary local shuttle service are just a
                        few of our many offerings.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>AMAZING VIEW ON BOGOR CITY</h2>
                    <p>
                        Provide the best experience for the view in
                        every corner of the hotel, giving you comfort
                        every time.
                    </p>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
        <div class="text-center font-italic">
            <p>by Kelompok 2</p>
        </div> 
    </main>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
