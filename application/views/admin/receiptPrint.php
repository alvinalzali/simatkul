
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rancamaya Hotel Invoice</title>
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/css-custom.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- cdn modals -->
    <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css" rel="stylesheet" type="text/css" />
<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
        <!-- Invoice styling -->
<style>
            body {
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                text-align: center;
                color: #777;
            }

            body h1 {
                font-weight: 300;
                margin-bottom: 0px;
                padding-bottom: 0px;
                color: #000;
            }

            body h3 {
                font-weight: 300;
                margin-top: 10px;
                margin-bottom: 20px;
                font-style: italic;
                color: #555;
            }

            body a {
                color: #06f;
            }

            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
                border-collapse: collapse;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }
</style>
    </head>

    <body onload="print()"> 
    <?php date_default_timezone_set("Asia/Bangkok");
    $total = 0;
    $active = 0;
    $da = 0;?>
        <div class="invoice-box" style="max-width: 1200px;">
            <table>
                <tr class="top">
                    <td colspan="30">
                        <table style="margin: auto; width: 100%;">
                            <tr>
                                <td class="title">
                                    <img src="<?= base_url('assets/img/Rancamaya Icon.png'); ?>" alt="Company logo" style="width: 100%; max-width: 82px" />
                                </td>
                                <td>
                                    REPORT OF RESERVATION PER MONTH, <?= date('F') ?>
                                </td>
                                <td style="text-align: right;">
                                    Recap #: <?= date('lidmy') ?><br />
                                    Created: <?= date('l, d-m-Y') ?><br />
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="20">
                        <table>
                            <tr>
                                <td>
                                    Rancamayasuite, Inc.<br />
                                    Rancamaya Road<br />
                                    Sunnyville, 16750
                                </td>

                                <td>
                                    Administrator<br />
                                    <?= $user['name']?><br />
                                    <?= $user['email']?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading" style="text-align: center;">
                <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total Price</th>
                </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($reservation as $rs) :
                        if ($rs['status'] == 'Active'||$rs['status'] == 'Deactive') { ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rs['name'] ?></td>
                                <td class="text-center"><?= $rs['roomtype'] ?></td>
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
                                <td></td>
                                <td>Total Active Customer</td>
                                <td class="text-center"><?= $active?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Deactive Customer</td>
                                <td class="text-center"><?= $da?></td>

                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Customer</td>
                                <td class="text-center"><?= $i-1?></td>

                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Income</td>
                                <td class="text-center">Rp. <?= number_format($total, 0, ",", ".") ?></td>

                            </tr>

            </table>
            <div class="modal-footer">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">General Management<br>
                    <img src="<?= base_url('assets/img/ttd.jpeg'); ?>" alt="Ttd Manajemen" style="width: 100%; max-width: 193px" />
                    <br> Yusuf Adi Wijaya</li>
                </ul>

            </div>
        </div>
    </body>