<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-880"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover table-striped" id="tabel" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Room Facilities</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($roomstatus as $rs) :
                        if ($rs['status'] == 'Active') { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rs['room'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= $rs['roomfacilities'] ?></td>
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['checkin'] ?></td>
                                <td><?= $rs['checkout'] ?></td>
                                <td><?= $rs['status'] ?></td>
                                <td>
                                    <a href="" class="edit-role badge badge-success" data-toggle="modal" data-target="#editReservationModal<?= $rs['id']; ?>">edit</a>
                                    <a href=" <?= base_url('admin/deletereservation/') . $rs['id']  ?>" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>

                        <?php }  ?>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-880 mt-5"><?= $title2 ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <table class="table table-hover table-striped" id="tabel2" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Room Facilities</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($roomstatus as $rs) :
                        if ($rs['status'] == 'Deactive') { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rs['room'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= $rs['roomfacilities'] ?></td>
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['checkin'] ?></td>
                                <td><?= $rs['checkout'] ?></td>
                                <td><?= $rs['status'] ?></td>
                                <td>
                                <a href="" class="edit-role badge badge-success" data-toggle="modal" data-target="#editReservationModal<?= $rs['id']; ?>">edit</a>
                                    <a href=" <?= base_url('admin/deletereservation/') . $rs['id']  ?>" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>

                        <?php }  ?>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php $i = 1; ?>
<?php foreach ($roomstatus as $rs) : ?>
    <div class="modal fade" id="editReservationModal<?= $rs['id']; ?>" tabindex="-1" aria-labelledby="editReservationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editReservationModalLabel">Edit Role Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/editReservation/') . $rs['id'] ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" placeholder="Room Name" value="<?= $i ?>" disabled>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <select class="form-select form-control form-control-user" id="room" name="room" placeholder="Room">
                                    <option selected><?= $rs['room'] ?> </option>
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
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-select form-control form-control-user" id="roomtype" name="roomtype" placeholder="roomtype">
                                <option selected><?= $rs['roomtype'] ?> </option>
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
                        </div>
                        <div class="form-group">
                            <select class="form-select form-control form-control-user" id="roomfacilities" name="roomfacilities" placeholder="roomfacilities">
                                <option selected><?= $rs['roomfacilities'] ?> </option>
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

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Room Name" value="<?= $rs['name'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="checkin" name="checkin" placeholder="Room Name" value="<?= $rs['checkin'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="checkout" name="checkout" placeholder="Room Name" value="<?= $rs['checkout'] ?>">
                        </div>
                        <div class="form-group">
                        <select class="form-select form-control form-control-user" id="status" name="status" placeholder="Room Status">
                                <option selected><?= $rs['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>