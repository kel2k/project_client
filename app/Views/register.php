<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add User</h4>
            <form action="<?= base_url('Home/aksi_tambahmurid') ?>" method="post">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" placeholder="Isi Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="Isi Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="Isi Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputNumber2" class="col-sm-3 col-form-label">NIS</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="nis" placeholder="Isi NIS">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputText" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Isi Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputText" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Isi Tempat Lahir">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>