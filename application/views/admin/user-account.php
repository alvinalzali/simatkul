<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-880"><?= $title ?></h1>




            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover table-striped" id="tabel" class="display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Job</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userdata as $r) : 
                        ?>
                        <?php if($r['role_id'] == 1){
                            $b = "Admin";
                        } else if($r['role_id'] == 2){
                            $b = "User";
                        }else if($r['role_id'] == 0){
                            $b = "Super Admin";
                        }?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $b?></td>
                            <td><?= $r['job'] ?></td>
                            <td>
                                <a href=" <?= base_url('admin/deleteuser/') . $r['id'] ?>" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


</div>
<!-- /.container-fluid -->