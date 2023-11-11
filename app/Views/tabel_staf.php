<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table Seksi Sarana</h4>
                        <button class="btn btn-primary mb-2" data-toggle="tooltip" data-placement="bottom"
                            title="Add a new user" onclick="window.location.href='/home/addstaf'">Add Staf</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Seksi Sarana</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telfon</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($vstaf as $k) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $k->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $k->alamat ?>
                                        </td>
                                        <td>
                                            <?php echo $k->tanggal_lahir ?>
                                        </td>
                                        <td>
                                            <?php echo $k->tempat_lahir ?>
                                        </td>
                                        <td>
                                            <?php echo $k->jenis_kelamin ?>
                                        </td>
                                        <td>
                                            <?php echo $k->no_tlp ?>
                                        </td>
                                        <td>
                                            <?php echo $k->created_at ?>
                                        </td>
                                        <td>
                                            <?php echo $k->staf_updated_at ?>
                                        </td>
                                        <td>
                                            <?php echo $k->created_by ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('/home/editstaf/' . $k->user_id) ?>"><button
                                                    class="btn btn-warning" data-toggle="tooltip" data-placement="bottom"
                                                    title="Click to edit">Edit</button></a>
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