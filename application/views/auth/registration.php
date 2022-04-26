<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <?= form_open_multipart('auth/registration'); ?>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Fullname" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class=" form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="address" name="address" placeholder=" Address" value="<?= set_value('address') ?>">
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="job" name="job" placeholder="Job" value="<?= set_value('job') ?>">
                                <?= form_error('job', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-control form-control-user" id="gender" name="gender" placeholder="Gender">
                                    <option value="">Select Gender</option>
                                    <option value="man">Man</option>
                                    <option value="woman">Woman</option>
                                </select>
                                <?= form_error('gender', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="birthplace" name="birthplace" placeholder="Birthplace" value="<?= set_value('birthplace') ?>">
                                <?= form_error('birthplace', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Scan KTP/Visa</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="scan" name="scan">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Phone Number" value="<?= set_value('phone') ?>">
                                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <button type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>