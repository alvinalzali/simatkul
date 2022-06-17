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
    <h1 class="h3 mb-4 text-gray-800">My Reservation</h1>
    

    <table class="table">
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
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td class="text-center"><?= $r['roomtype'] ?></td>
                    <td class="text-center"><?= $r['duration'] ?> days</td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkin']))?></td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkout']))?></td>
                    <td class="text-center">Rp. <?= $r['total_price'] ?></td>
                    <td class="text-center"><?= $r['status'] ?></td>
                    <td class="text-center">
                                    <a href="" class="edit-role badge badge-warning" data-toggle="modal" data-target="#editReservationModal<?= $r['id']; ?>">Invoice</a>
                                    <a href=" <?= base_url('admin/deletereservation/') . $r['id']  ?>" class="badge badge-danger">Confirmation</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Reservation History</h1>
    

    <table class="table">
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
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td class="text-center"><?= $r['roomtype'] ?></td>
                    <td class="text-center"><?= $r['duration'] ?> days</td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkin']))?></td>
                    <td class="text-center"><?= date('l d-M-Y', strtotime($r['checkout']))?></td>
                    <td class="text-center">Rp. <?= $r['total_price'] ?></td>
                    <td class="text-center"><?= $r['status'] ?></td>
                    <td class="text-center">
                                    <a href="" class="edit-role badge badge-warning" data-toggle="modal" data-target="#editReservationModal<?= $r['id']; ?>">Invoice</a>
                                    <a href=" <?= base_url('admin/deletereservation/') . $r['id']  ?>" class="badge badge-danger">Confirmation</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->