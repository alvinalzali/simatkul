

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-880 text-center"><?= $title ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); 
            $total = 0;
            $active = 0;
            $da = 0;?>

            <table class="table table-hover table-striped" id="tabel" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($reservation as $rs) :
                        if ($rs['status'] == 'Active'||$rs['status'] == 'Deactive') { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rs['name'] ?></td>
                                <td><?= $rs['roomtype'] ?></td>
                                <td><?= date('l, d-M-Y', strtotime($rs['checkin']))?></td>
                                <td><?= date('l, d-M-Y', strtotime($rs['checkout']))?></td>
                                <td><?= $rs['status'] ?></td>
                                <td class="text-center">Rp. <?= number_format($rs['total_price'], 0, ",", ".") ?></td>
                                
                            </tr>
                            <?php $i++; 
                            if ($rs['status'] == 'Active') {
                                $active += 1;
                            }
                            if ($rs['status'] == 'Deactive') {
                                $da += 1;
                            }
                            $total += $rs['total_price'];
                            ?>
                            
                        <?php }  ?>

                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                            <tr scope="heading">
                                <th></th>
                                <td class="reset-this"></td>
                                <td ></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Active Customer</td>
                                <td class="text-center"><?= $active?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Deactive Customer</td>
                                <td class="text-center"><?= $da?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Customer</td>
                                <td class="text-center"><?= $i-1?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Income</td>
                                <td class="text-center">Rp. <?= number_format($total, 0, ",", ".") ?></td>
                                <td></td>
                            </tr>
                </tfoot>
            </table>
            <div class="modal-footer">
                <a href="<?= base_url('admin/receiptPrint/') ?>" class="btn btn-primary">Print</a>
            
        </div>
        </div>

    </div>

