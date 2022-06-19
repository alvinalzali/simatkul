<!-- Begin Page Content -->
<?php
$query = "SELECT `reservation`.*, `user`.`name`
            FROM `reservation` JOIN `user`
            ON `reservation`.`user_id` = `user`.`id`
            WHERE `reservation`.`user_id` = $user[id]
            order by `reservation`.`id` ASC
                ";

$reservation = $this->db->query($query)->result_array();
?>

<div class="container-fluid">

    <!-- Page Heading -->
    
    <h1 class="h3 mb-4 text-gray-800 text-center">My Reservation</h1>
    <?= $this->session->flashdata('message'); ?>
    <h2 class="h3 mb-4 text-gray-800">Pending Reservation</h2>
    

    <table class="table" id="tabel">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Room Type</th>
                <th scope="col" class="text-center">Duration</th>
                <th scope="col" class="text-center">Check In</th>
                <th scope="col" class="text-center">Check Out</th>
                <th scope="col" class="text-center">Total Price</th>
                <th scope="col "class="text-center">Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($reservation as $r) : ?>
                <?php if($r['status'] == 'Pending') : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td class="text-center"><?= $r['roomtype'] ?></td>
                    <td class="text-center"><?= $r['duration'] ?> days</td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkin']))?></td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkout']))?></td>
                    <td class="text-center">Rp. <?= number_format($r['total_price'], 0, ",", ".") ?></td>
                    <td class="text-center"><?= $r['status'] ?></td>
                    <td class="text-center">
                                    <a href="<?= base_url('user/invoice/') . $r['id']  ?>" class="edit-role badge badge-warning">Invoice</a>
                                    <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" class="edit-role badge badge-primary">Confirmation</a>
                                    <a href=" <?= base_url('user/deletereservation/') . $r['id']  ?>" class="badge badge-danger">Delete</a>           
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <?= form_open_multipart('user/check_invoice/'. $r['id']); ?>
        <div class="custom-file">
            <input type="file" id="invoice" name="invoice" class="custom-file-input">
            <label class="custom-file-label" for="invoice">Choose file (PNG & JPG ONLY!)</label>
        </div>
        
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="upload" class="btn btn-primary">Save  changes </button>
        </div>

    </div>
  </div>
            </div>
    </div>
    <?php endif; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <br>



    <h2 class="h3 mb-4 text-gray-800">Active Reservation</h2>

    <table class="table" id="tabel2">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Room Type</th>
                <th scope="col" class="text-center">Duration</th>
                <th scope="col" class="text-center">Check In</th>
                <th scope="col" class="text-center">Check Out</th>
                <th scope="col" class="text-center">Total Price</th>
                <th scope="col "class="text-center">Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($reservation as $r) : ?>
                <?php if($r['status'] == 'Active') : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td class="text-center"><?= $r['roomtype'] ?></td>
                    <td class="text-center"><?= $r['duration'] ?> days</td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkin']))?></td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkout']))?></td>
                    <td class="text-center">Rp. <?= number_format($r['total_price'], 0, ",", ".") ?></td>
                    <td class="text-center"><?= $r['status'] ?></td>
                    <td class="text-center">
                                    <a href="<?= base_url('user/invoice/') . $r['id']  ?>" class="edit-role badge badge-warning">Invoice</a>
        
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <?= form_open_multipart('user/check_invoice/'. $r['id']); ?>
        <div class="custom-file">
            <input type="file" id="invoice" name="invoice" class="custom-file-input">
            <label class="custom-file-label" for="invoice">Choose file (PNG & JPG ONLY!)</label>
        </div>
        
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="upload" class="btn btn-primary">Save  changes </button>
        </div>

    </div>
  </div>
            </div>
        </div>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <!-- Page Heading -->
    <br>
    <h1 class="h3 mt-4 mb-4 text-gray-800">Reservation History</h1>
    

    <table class="table" id="tabel3">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Room Type</th>
                <th scope="col" class="text-center">Duration</th>
                <th scope="col" class="text-center">Check In</th>
                <th scope="col" class="text-center">Check Out</th>
                <th scope="col" class="text-center">Total Price</th>
                <th scope="col "class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($reservation as $r) : ?>
            <?php if($r['status'] == 'Deactive') : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td class="text-center"><?= $r['roomtype'] ?></td>
                    <td class="text-center"><?= $r['duration'] ?> days</td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkin']))?></td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkout']))?></td>
                    <td class="text-center">Rp. <?= number_format($r['total_price'], 0, ",", ".") ?></td>
                    <td class="text-center"><?= $r['status'] ?></td>

                </tr>
            <?php endif; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    
</div>
<!-- /.container-fluid -->

<!-- Button trigger modal -->
</div>

<!-- Modal -->

<!-- End of Main Content -->

<!-- modals -->
<!-- Modal -->