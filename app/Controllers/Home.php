<?php

namespace App\Controllers;

use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('login');
        echo view('footer');
    }
    public function dashboard()
    {
        $model = new M_model();
        $data['totalUsers'] = $model->getTotalUsers();
        echo view('header');
        echo view('menu');
        echo view('dashboard', $data);
        echo view('footer');
    }
    public function gantipassword()
    {

        $model = new M_model();
        $data['murid'] = $model->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('change_password', $data);
        echo view('footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Home');
    }
    public function aksi_changepassword()
    {
        $model = new M_model();
        $id = $this->request->getPost('id');
        $password = $this->request->getPost('password');
        $where = array('id_user' => session()->get('id'));
        $data1 = array(
            'password' => md5($password),
            'updated_at' => date('Y-m-d H:i:s')
        );
        // print_r($password);
        $model->qedit('user', $data1, $where);
        return redirect()->to('/home/index/');
    }
    public function aksi_login()
    {
        $u = $this->request->getPost('username');
        $p = $this->request->getPost('password');
        $model = new M_model();
        $data = array(
            'username' => $u,
            'password' => md5($p)
        );
        $cek = $model->getWhere2('user', $data);

        if ($cek > 0) {
            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('email', $cek['email']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');
        } else {
            // Tambahkan kode berikut
            session()->setFlashdata('error', 'Salah password');
            return redirect()->to('/home/index');
        }
    }
    public function user()
    {
        $model = new M_model();
        $on = 'user.level=level.id_level';

        $data['vuser'] = $model->join2('user', 'level', $on);

        echo view('header');
        echo view('menu');
        echo view('tabel_user', $data);
        echo view('footer');
    }
    public function siswa()
    {
        // if (session()->get('level') == 1) {
        $model = new M_model();
        $on = 'siswa.user_id=user.id_user';
        $data['vsiswa'] = $model->join2('siswa', 'user', $on);
        echo view('header');
        echo view('menu');
        echo view('tabel_siswa', $data);
        echo view('footer');
    }
    public function staf()
    {
        // if (session()->get('level') == 1) {
        $model = new M_model();
        $on = 'staf.user_id=user.id_user';
        $data['vstaf'] = $model->join2('staf', 'user', $on);
        echo view('header');
        echo view('menu');
        echo view('tabel_staf', $data);
        echo view('footer');
    }
    public function reset($id)
    {
        $model = new M_model();
        $where = array('id_user' => $id);
        $user = array('password' => 'aaaa');
        $model->qedit('user', $user, $where);

        // Uncomment the following line to enable redirection
        return redirect()->to('/Home/user');
    }
    public function adduser()
    {
        $model = new M_model();

        $data['user'] = $model->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('add_user', $data);
        echo view('footer');
    }
    public function aksi_adduser()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $no_tlp = $this->request->getPost('no_tlp');
        $level = $this->request->getPost('level');
        $created_by = $this->request->getPost('created_by');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');

        $user = array(
            'username' => $username,
            'password' => md5('password'),
            'email' => $email,
            'level' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => session()->get('id')
        );

        $model = new M_model();
        $model->simpan('user', $user);

        $where = array('username' => $username);
        $id = $model->getWhere2('user', $where);
        $id_user = $id['id_user'];
        $siswa = array(
            'user_id' => $id_user,
            'nama' => $nama,
            'alamat' => $alamat,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_tlp' => $no_tlp,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => session()->get('id')
        );
        // print_r($siswa);
        $model->simpan('siswa', $siswa);
        return redirect()->to('/home/user');
    }
    public function addstaf()
    {
        $model = new M_model();

        $data['user'] = $model->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('add_staf', $data);
        echo view('footer');
    }
    public function aksi_addstaf()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $no_tlp = $this->request->getPost('no_tlp');
        $level = $this->request->getPost('level');
        $created_by = $this->request->getPost('created_by');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');

        $user = array(
            'username' => $username,
            'password' => md5('password'),
            'email' => $email,
            'level' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => session()->get('id')
        );

        $model = new M_model();
        $model->simpan('user', $user);

        $where = array('username' => $username);
        $id = $model->getWhere2('user', $where);
        $id_user = $id['id_user'];
        $staf = array(
            'user_id' => $id_user,
            'nama' => $nama,
            'alamat' => $alamat,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_tlp' => $no_tlp,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => session()->get('id')
        );
        // print_r($siswa);
        $model->simpan('staf', $staf);
        return redirect()->to('/home/staf');
    }
    public function editsiswa($id)
    {
        // if (session()->get('level') == 1) {

        $model = new M_model();
        $on = 'siswa.user_id=user.id_user';
        $where = array(
            'user_id' => $id
        );
        $data['siswa'] = $model->joinW('siswa', 'user', $on, $where);
        echo view('header');
        echo view('menu');
        echo view('edit_siswa', $data);
        echo view('footer');


        // } else {
        //     return redirect()->to('/home/dashboard');
        // }
    }
    public function aksi_editsiswa()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $no_tlp = $this->request->getPost('no_tlp');
        $level = $this->request->getPost('level');
        $created_by = $this->request->getPost('created_by');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $where2 = array('user_id' => $id);
        $data2 = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_tlp' => $no_tlp,
            'siswa_updated_at' => date('Y-m-d H:i:s')
        );
        //    print_r($id);
        // //  print_r($data2);
        $model->qedit('siswa', $data2, $where2);
        return redirect()->to('/home/siswa');
    }
    public function editstaf($id)
    {
        // if (session()->get('level') == 1) {

        $model = new M_model();
        $on = 'staf.user_id=user.id_user';
        $where = array(
            'user_id' => $id
        );
        $data['staf'] = $model->joinW('staf', 'user', $on, $where);
        echo view('header');
        echo view('menu');
        echo view('edit_staf', $data);
        echo view('footer');


        // } else {
        //     return redirect()->to('/home/dashboard');
        // }
    }
    public function aksi_editstaf()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $no_tlp = $this->request->getPost('no_tlp');
        $level = $this->request->getPost('level');
        $created_by = $this->request->getPost('created_by');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $where2 = array('user_id' => $id);
        $data2 = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_tlp' => $no_tlp,
            'staf_updated_at' => date('Y-m-d H:i:s')
        );
        //    print_r($id);
        // //  print_r($data2);
        $model->qedit('staf', $data2, $where2);
        return redirect()->to('/home/siswa');
    }
}