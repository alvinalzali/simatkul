<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <?= form_open_multipart('user/reservation'); ?>
    <form action="<?= base_url('user/reservation'); ?>" method="post">

        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Address</label>
                <input type="text" class="form-control" id="address" name="address">
                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city">
                <?= form_error('city', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state">
                <?= form_error('state', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode">
                <?= form_error('zipcode', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Check In</label>
                <input type="text" class="form-control" id="checkin" name="checkin">
                <?= form_error('checkin', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Check Out</label>
                <input type="text" class="form-control" id="checkout" name="checkout">
                <?= form_error('checkout', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone">
                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="room" name="room">
                    <option selected>Room types </option>
                    <option value="300">300</option>
                    <option value="301">301</option>
                    <option value="302">302</option>
                    <option value="304">304</option>
                    <option value="305">305</option>
                    <option value="306">306</option>
                    <option value="307">307</option>
                    <option value="308">308</option>
                    <option value="309">309</option>
                </select>
                <?= form_error('room', '<small class="text-danger pl-3">', '</small>'); ?>
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
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="roomfacilities" name="roomfacilities">
                    <option selected>Room Facilities</option>
                    <option value="Standard Room">Standard Room</option>
                    <option value="Superior Room">Superior Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Super Deluxe">Super Deluxe</option>
                    <option value="Junior Suite">Junior Suite</option>
                    <option value="Suite">Suite</option>
                    <option value="Executive Suite">Executive Suite</option>
                    <option value="Presidential Room">Presidential Room</option>
                    <option value="Penthouse Suites">Penthouse Suites</option>
                </select>
                <?= form_error('roomfacilities', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Agree to Terms and Conditions</label>
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