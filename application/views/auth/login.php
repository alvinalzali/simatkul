<!-- Landing Page -->

<!-- backgorund-->
<img src="assets\img\BG Login.png" class="img-fluid" alt="bg-login">

<div id="bg-txt1">
    <p id="txt-11">Experience</p>
</div>
<div id="bg-txt2">
    <p id="txt-12">Sunset View on Rancamaya</p>
</div>
<div id="bg-txt4"></div>
<div id="bg-txt3">
    <p id="txt-13">
        Rancayamaya is one hotel that has an amazing view
        when the sunset arrives, and gives the impression of
        comfort for visitors.
    </p>
</div>

<!--  -->
<div class="container-fluid" style="height: 683px; background: #929070;">
    <!-- Icon -->
    <img id="IconRancamaya" src="assets\img\Rancamaya Icon.png" alt="icon-rancamaya">

    <p id="txt-21">WELCOME TO RANCAMAYA</p>
    <p id="txt-22">HOTEL IN BOGOR, JAWA BARAT</p>
    <p id="txt-23">
        Here at Rancamaya Hotel, we embrace our guests with
        comfort and value, enhancing each stay through the
        uniqueness of our city and team. Perfect for business
        and leisure travelers, our boutique hotel is a
        comfortable escape in bogor.
    </p>

    <!-- Outer Row -->
    <div class="row content-right">

        <div class="col-lg-7" style=" position: absolute;
        width: 502px;
        height: 633px;
        left: 720px;
        top: 683px;

        background: rgba(21, 21, 21, 0.75);">

            <div class="card shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h2 class="h4 text-gray-900 mb-2">MAKE A RESERVATION</h2>
                                    <p class="card-text" style="font-size: 12px; font-style: italic;">(Must be 18 years old and older to make reservation)</p>
                                </div>
                                <hr>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    Don't have an account yet?
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div id="bg-3" class="container-fluid" style="height: 450px; background: #161616;">
    <!--Bag Hitam-->
    <div class="card">

    </div>
    <div class="row">
        <div class="col-lg">
            <h5 id="txt-5">MODERN AMENITIES</h5>
            <p id="txt-51">
                Rancamaya hotel has everything you need for
                business or leisure travel- a fitness center, and
                complimentary local shuttle service are just a
                few of our many offerings.
            </p>
        </div>
        <div class="col">
            <h5 id="txt-5">SPECIALS &
                PACKAGES</h5>
            <p id="txt-51">
                Rancamaya hotel has everything you need for
                business or leisure travel- a fitness center, and
                complimentary local shuttle service are just a
                few of our many offerings.
            </p>
        </div>
        <div class="col">
            <h5 id="txt-5">AMAZING VIEW
                ON BOGOR CITY</h5>
            <p id="txt-51">
                Provide the best experience for the view in
                every corner of the hotel, giving you comfort
                every time.
            </p>
        </div>
    </div>
</div>

<!--Bag Putih-->
<div id="bg-4" class="container-fluid" style="height: 574px; background: #ffffff;">
    <p id="txt-41">COMFORTABLE, CONTEMPORARY ROOMS & SUITES</p>
    <p id="txt-42">Choose from our modern Superior or Deluxe Rooms, or upgrade to a luxurious One-Bedroom Suite for your visit to the “City by the Bay.” Our hotel rooms range from 250 to 600 square feet of space.</p>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="z-index: 0">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets\img\Room1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\img\room2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\img\room3.png" alt="Third slide">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--Bag Coklat-->
<div id="bg-5" class="container-fluid" style="height: 450px; background: #161616;">
    <div class="row">
        <div class="col">
            <h5 id="txt-5">STUNNING NEWS</h5>
            <p id="txt-51">
                Our rooms offer stunning views of the green field and very own french balcony
            </p>
        </div>
        <div class="col">
            <h5 id="txt-5">42”FLAT SCREEN TV</h5>
            <p id="txt-51">
                Catch up on all your favoutite shows or watch the latest hollywood blockbuster and Korean Drama Korean on your 42” flat-screen high definition TV.
            </p>
        </div>
        <div class="col">
            <h5 id="txt-5">WELL-LIT WORKSPACE</h5>
            <p id="txt-51">
                Need to check your email or prepare for an upcoming meeting?Set up your laptop or tablet on the spacious desk and get to work.
            </p>
        </div>
    </div>
</div>