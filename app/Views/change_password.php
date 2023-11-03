<div class="card-body">
    <h4 class="card-title">Change Password</h4>
    <!-- <p class="card-description"> Horizontal form layout </p> -->
    <form action="<?= base_url('Home/aksi_changepassword') ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $murid->id_user ?>">
        <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-1  col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" value="<?= $murid->password ?>" placeholder="Password"
                    name="password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
    </form>
</div>