<!-- Begin Page Content -->


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-880 text-center"><?= $title ?></h1>

    <h2 class="h3 mb-4 text-gray-880"><?= $title1 ?></h2>

    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg">


            <table class="table table-hover table-striped" id="tabel" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Room Type</th>
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
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkin']))?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkout']))?></td>
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
                            <br>
    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-880"><?= $title2 ?></h2>

    <div class="row">
        <div class="col-lg">


            <table class="table table-hover table-striped" id="tabel2" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($roomstatus as $rs) :
                        if ($rs['status'] == 'Pending') { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkin']))?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkout']))?></td>
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

                        <br>
    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-880 mt-5"><?= $title3 ?></h2>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <table class="table table-hover table-striped" id="tabel3" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Room Type</th>
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
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkin']))?></td>
                                <td><?= date('l d-M-Y', strtotime($rs['checkout']))?></td>
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