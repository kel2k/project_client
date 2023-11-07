<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($vuser as $k) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $k->username ?>
                                        </td>
                                        <td>
                                            <?php echo $k->password ?>
                                        </td>
                                        <td>
                                            <?php echo $k->email ?>
                                        </td>
                                        <td>
                                            <?php echo $k->nm_level ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/home/reset/' . $k->id_user) ?>"><button
                                                    class="btn btn-danger">Reset</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!--**********************************-->