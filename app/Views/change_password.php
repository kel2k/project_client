<link href="<?= base_url() ?>/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>
                        <div class="basic-form">
                        <form class="form-inline" action="<?= base_url('Home/aksi_changepassword') ?>" method="post">
                                <div class="form-group mb-2">
                                    <label class="sr-only">New Password</label>
                                    <input type="text" readonly="readonly" class="form-control-plaintext"
                                        value="New Password">
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control"
                                        value="<?= $murid->password ?>" name="password" placeholder=" Password">
                                </div>
                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>