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
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Room Type</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($reservation as $r) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $r['roomtype'] ?></td>
                    <td><?= $r['checkin'] ?></td>
                    <td><?= $r['checkout'] ?></td>
                    <td><?= $r['status'] ?></td>
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