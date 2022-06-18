<!-- Begin Page Content -->
<!-- Print -->
<style>
.card-input-element+.card {
  height: calc(36px + 2*1rem);
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
  border: 2px solid var(--primary);
  -webkit-transition: border .3s;
  -o-transition: border .3s;
  transition: border .3s;
}

.card-input-element:checked+.card::after {
  content: '\e5ca';
  color: #AFB8EA;
  font-family: 'Material Icons';
  font-size: 24px;
  -webkit-animation-name: fadeInCheckbox;
  animation-name: fadeInCheckbox;
  -webkit-animation-duration: .5s;
  animation-duration: .5s;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
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
            
            
        <h3>Range</h3>
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


  <h3>Choose Room Types</h3>
  
  <div>
  <?= form_error('roomtype', '<small class="text-danger pl-3">', '</small>'); ?>
        <label>
          <input type="radio" class="card-input-element d-none" name="room" value="6000,Double">
          <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
          Organization 1
          </div>
        </label>
        <label class="mt-3">
          <input type="radio" class="card-input-element d-none" name="room" value="8000,Single">
          <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
          Organization 2
          </div>
        </label>
  </div>

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