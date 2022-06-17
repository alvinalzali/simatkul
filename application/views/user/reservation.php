<!-- Begin Page Content -->
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
            <div class="container">
  
  <h1>Radio Buttons as Cards</h1>
  
  <div class="row">
    
      <div class="col-md-4 col-lg-4 col-sm-4">
        
        <label>
          <input type="radio" name="product" class="card-input-element" />

            <div class="panel panel-default card-input">
              <div class="panel-heading">Product A</div>
              <div class="panel-body">
                Product specific content
              </div>
            </div>

        </label>
        
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4">
        
        <label>
          <input type="radio" name="product" class="card-input-element" />

            <div class="panel panel-default card-input">
              <div class="panel-heading">Product B</div>
              <div class="panel-body">
                Product specific content
              </div>
            </div>
        </label>
        
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4">
        
        <label>
          <input type="radio" name="product" class="card-input-element" />

            <div class="panel panel-default card-input">
              <div class="panel-heading">Product C</div>
              <div class="panel-body">
                Product specific content
              </div>
            </div>
        </label>
        
      </div>
  </div>
  
</div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="roomtype" name="roomtype">
                    <option selected>Room types </option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Triple">Triple</option>
                    <option value="Quad">Quad</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="Twin">Twin</option>
                    <option value="Double-Double">Double-Double</option>
                    <option value="Studio">Studio</option>
                </select>
                <?= form_error('roomtype', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Done</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->