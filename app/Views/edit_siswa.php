<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="<?= base_url('/home/aksi_editsiswa') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $siswa->id_user ?>">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Nama Murid <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="<?= $siswa->nama ?>" required
                                            name="nama" placeholder="Masukkan Nama Murid..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Alamat <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="<?= $siswa->alamat ?>" required
                                            name="alamat" placeholder="Masukkan Alamat..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Tanggal Lahir <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" value="<?= $siswa->tanggal_lahir ?>"
                                            required name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Tempat Lahir <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="<?= $siswa->tempat_lahir ?>"
                                            required name="tempat_lahir" placeholder="Masukkan Tempat Lahir..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Jenis Kelamin <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="<?= $siswa->jenis_kelamin ?>" selected hidden>---Choose---
                                            </option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Nomor Telepon <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" value="<?= $siswa->no_tlp ?>" required
                                            name="no_tlp" placeholder="Masukkan Nomor Telepon..">
                                    </div>
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>