<!-- Begin Page Content -->
<!-- Print -->
<style>
.card-input-element+.card {
  height: calc(214px + 3*1rem);
  color: var(--primary);
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 2px solid transparent;
  border-radius: 4px;
}

.card-input-element+.card:hover {
  cursor: pointer;
}

.card-input-element:checked+.card {
  border: 6px solid var(--primary);
  -webkit-transition: border .3s;
  -o-transition: border .3s;
  transition: border .3s;
}

@-webkit-keyframes fadeInCheckbox {
  from {
    opacity: 0;
    -webkit-transform: rotateZ(-20deg);
  }
  to {
    opacity: 1;
    -webkit-transform: rotateZ(0deg);
  }
}

@keyframes fadeInCheckbox {
  from {
    opacity: 0;
    transform: rotateZ(-20deg);
  }
  to {
    opacity: 1;
    transform: rotateZ(0deg);
  }
}




</style>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://daemonite.github.io/material/js/material.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <?= form_open_multipart('user/reservation'); ?>
    <form action="<?= base_url('user/reservation'); ?>" method="post">

        <div class="modal-body">
            
            
        <h3>Reservation Date</h3>
        <div class="ui form">
          <div class="two fields">
            <div class="field">
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Check In</label>
                <input type="date" class="form-control" id="checkin" name="checkin">
                <?= form_error('checkin', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="field">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Check Out</label>
                    <input type="date" class="form-control" id="checkout" name="checkout">
                <?= form_error('checkout', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
          </div>
        </div>
        <br/>
            
            

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone">
                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


  <h3>Choose Reservation Room Types</h3>
  
  <div class="container-fluid">
  <?= form_error('room', '<small class="text-danger">', '</small>'); ?>
        <label>
          <input type="radio" class="card-input-element " name="room" value="650000,Deluxe Room(Single)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Deluxe Room/reservation.png'); ?>" class="card-img" alt="Deluxe Room">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.650.000</h5>
          </div>
          </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="1200000,Deluxe Balcony Room(Double)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Deluxe Balcony Room/reservation.png'); ?>" class="card-img" alt="Deluxe Balcony Room">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.1.200.000</h5>
          </div>
        </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="1600000,Family Suite(Triple)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Family Suite/reservation.png'); ?>" class="card-img" alt="Family Suite">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.1.600.000</h5>
          </div>
        </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="5000000,Gallery Suite(Double)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Gallery Suite/reservation.png'); ?>" class="card-img" alt="Gallery Suite">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.5.000.000</h5>
          </div>
        </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="4200000,Hillside Studio(Double)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Hillside Studio/reservation.png'); ?>" class="card-img" alt="Hillside Studio">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.4.200.000</h5>
          </div>
        </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="4100000,Premiere Room(Double - Double)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Premiere Room/reservation.png'); ?>" class="card-img" alt="Premiere Room">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.4.100.000</h5>
          </div>
        </div>
        </label>
        
        <label>
          <input type="radio" class="card-input-element " name="room" value="6700000,Premiere Suite(Studio)">
          <div class="card bg-dark text-white">
          <img src="<?= base_url('assets/img/Premiere Suite/reservation.png'); ?>" class="card-img" alt="Premiere Suite">
          <div class="card-img-overlay " style="padding-top: 14%;">
          <h5 class="card-title" style="color: black;
                                font-size: 17px;
                                font-family: sans-serif;">Rp.6.700.000</h5>
          </div>
        </div>
        </label>
        
        

        
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Done</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- Script Print  -->


<!-- End of Main Content -->

<!-- Modal -->