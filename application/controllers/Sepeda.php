<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepeda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sepeda_models');
		$this->load->library('form_validation');
	}
	public function index()
	{	
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Beranda';
		$data['kelas']='active';
		$data['kelas1']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$data['barang'] = $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category')->result_array();
		$data['foto'] = $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where tb_product.nama_product="Norco Rollover FS 100"')->row_array();
		$data['foto1'] = $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where tb_product.nama_product="Sepeda Santa Cruz"')->row_array();
		$data['sepeda'] = $this->sepeda_models->getdatasepeda();
		$data['sparepart'] = $this->sepeda_models->getdatasparepart();
		$this->load->view('template/header', $data);
		$this->load->view('user/index',$data);
		$this->load->view('template/footer');
	}

	public function detail($id)
	{	
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$data['judul']='Detail Product';
		$data['kelas']='active';
		$data['kelas1']='';
		$data['detail']=$this->sepeda_models->getProductById($id);
		$this->load->view('template/header',$data);
		$this->load->view('user/product_detail',$data);
		$this->load->view('template/footer');
	}
	public function keranjang($id){	
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['id_user'] = $id_user;
		$data['foto'] = $foto;
		$data['judul']='Keranjang';
		$data['kelas']='';
		$data['kelas1']='';
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesa','<div class="alert alert-danger" role="alert">Masih kosong nih, Ayo login dan mulai berbelanja.</div');
			$data['keranjang']=$this->sepeda_models->getKeranjang($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/keranjang',$data);
			$this->load->view('template/footer');
		}else{
			$data['keranjang']=$this->sepeda_models->getKeranjang($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/keranjang',$data);
			$this->load->view('template/footer');
		}
	}

	public function Insertkeranjang($id)
	{	
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['id_user'] = $id_user;
		$data['foto'] = $foto;
		$data['judul']='Keranjang';
		$data['kelas']='';
		$data['kelas1']='';
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus Login terlebih dulu!</div');
			redirect('Auth');
		}else{
			$data=[
				"id_user" => $id_user,
				"id_product" => $id,
				"qty" => 1 ,
			];
			$this->db->insert('tb_keranjang',$data);
			redirect('sepeda');
		}
	}
	public function hapusKeranjang($id)
	{
		$this->sepeda_models->hapuskeranjang($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
			Data Berhasil di Hapus
			</div');
		redirect('sepeda');
	}

	public function editkeranjang($id,$idk)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Beranda';
		$data['kelas']='active';
		$data['kelas1']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$data['keranjang1']= $this->sepeda_models->getKeranjangid($id,$idk);
		$this->load->view('template/header',$data);
		$this->load->view('user/edit-keranjang',$data);
		$this->load->view('template/footer');
	}

	public function editkeranjang1($id){
		$jumlah = $this->input->post('qty',true);

		$this->db->set('qty',$jumlah);
		$this->db->where('id_user',$iduser);
		$this->db->update('tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
			data '.$username.' berhasil diprebarui
			</div');
		redirect('sepeda/profile/'.$username);
	}

	public function checkout($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'checkout';
		$data['kelas']='';
		$data['kelas1']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['foto'] = $foto;
			$data['id_user'] = $id_user;
			$data['keranjang']=$this->sepeda_models->getKeranjang($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/checkout',$data);
			$this->load->view('template/footer');
		}
	}

	public function konfirmasi($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'checkout';
		$data['kelas']='';
		$data['kelas1']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$username = $data['user']['username'];
			$nama = $data['user']['nama'];
			$nohp = $data['user']['nohp'];

		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$data['username'] = $username;
		$data['nama'] = $nama;
		$data['nohp'] = $nohp;
		$data['id_transaksi'] = date('ymdhis');
		$data['namapenerima'] = $this->input->post('nama', true);
		$data['nohp1'] = $this->input->post('nohp', true);
		$data['kecamatan'] = $this->input->post('kecamatan', true);
		$data['paket'] = $this->input->post('paket', true);
		$data['alamat'] = $this->input->post('alamatpenerima', true);
		$data['pembayaran'] = $this->input->post('pembayaran', true);
		$data['provinsi'] = $this->input->post('provinsi', true);
		$data['kota'] = $this->input->post('kota', true);
		$data['kodepos'] = $this->input->post('kodepos', true);
		$data['ongkos'] = $this->input->post('ongkos', true);
		$data['keranjang']=$this->sepeda_models->getKeranjang($id);
		$data['rekening']=$this->sepeda_models->getrekening();

		$this->load->view('template/header',$data);
		$this->load->view('user/confirmation',$data);
		$this->load->view('template/footer');
	}

	public function profile()
	{	
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$data['judul']='Profile';
		$data['kelas']='';
		$data['kelas1']='';
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$this->load->view('template/header',$data);
			$this->load->view('user/profile',$data);
			$this->load->view('template/footer');
		}
	}
	
	public function ubah_profile(){
		$iduser = $this->input->post('id_user',true);
		$nama = $this->input->post('nama',true);
		$username = $this->input->post('username',true);
		$nohp = $this->input->post('nohp',true);
		$email = $this->input->post('email',true);
		$alamat = $this->input->post('alamat',true);

		$upload_image = $_FILES['foto']['name'];
		if($upload_image){
			$config['upload_path']          = './Assets/img/profile/';
			$config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048; // 2MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
        	$new_image = $this->upload->data('file_name');
        	$this->db->set('photo',$new_image);
        }
    }

    $this->db->set('nama',$nama);
    $this->db->set('username',$username);
    $this->db->set('nohp',$nohp);
    $this->db->set('email',$email);
    $this->db->set('alamat',$alamat);
    $this->db->where('id_user',$iduser);
    $this->db->update('tb_user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    	Data '.$username.' berhasil di perbarui
    	</div');
    	redirect('sepeda/profile/'.$username);
    }
    
    public function ubah_password(){
    	$data['user'] = $this->db->get_where('tb_user', ['id_user'=>$this->session->userdata('id_user')])->row_array();
    	$pwLama = $this->input->post('passwordLama');
    	$pwBaru1 = $this->input->post('passwordBaru1');
    	$pwBaru2 = $this->input->post('passwordBaru2');

    	if(password_verify($pwLama,$data['user']['password'])){
    		if ($pwBaru1 == $pwBaru2) {
    			$password = password_hash($pwBaru1,PASSWORD_DEFAULT);
    			$this->db->set('password',$password);
    			$this->db->where('id_user',$data['user']['id_user']);
    			$this->db->update('tb_user');
    			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    				Password berhasil diprebarui
    				</div');
    			redirect('sepeda/profile/'.$data['user']['id_user']);
    		}else if($pwBaru1 != $pwBaru2){
    			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
    				Password tidak sama, mohon ulangi
    				</div');
    			redirect('sepeda/profile/'.$data['user']['id_user']);
    		}
    	}else{
    		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
    			Password lama salah, mohon ulangi
    			</div');
    		redirect('sepeda/profile/'.$data['user']['id_user']);
    	}
    }
  	
  	private function _uploadImage()
  	{
  		$config['upload_path']          = './assets/img/buktiTF/';
  		$config['allowed_types']        = 'jpeg|jpg|png';
  		$config['max_size']             = 2048; // 2MB
  		$this->load->library('upload', $config);
  		if ($this->upload->do_upload('buktitf')) {
  			return $this->upload->data("file_name");
  		}
  	}


  	public function multiinsertpesanan(){
  		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
  			$this->session->userdata('id_user')])->row_array();
  		$data['judul'] = 'checkout';
  		$data['kelas']='';
  		$data['kelas1']='';
  		if($this->session->userdata('id_user') != null){
  			$foto = $data['user']['photo'];
  			$id_user = $data['user']['id_user'];
  			$username = $data['user']['username'];
  			$nama = $data['user']['nama'];
  			$nohp = $data['user']['nohp'];
  		}
  		else{
  			$foto = 'default.png';
  			$id_user ='0';
  		}
  		$data['foto'] = $foto;
  		$id_user = $id_user;
  		$username = $username;
  		$nama = $nama;
  		$nohp = $nohp;
  		$id_transaksi = $this->input->post('id_transaksi', true);
  		$namapenerima = $this->input->post('nama_penerima', true);
  		$nohp1 = $this->input->post('nohp1', true);
  		$kecamatan = $this->input->post('kecamatan', true);
  		$paket = $this->input->post('jasa', true);
  		$qty = $this->input->post('jumlah', true);
  		$alamat = $this->input->post('alamat', true);
  		$pembayaran = $this->input->post('pembayaran', true);
  		$provinsi = $this->input->post('provinsi', true);
  		$kota = $this->input->post('kota', true);
  		$tgl = $this->input->post('tgl', true);
  		$kodepos = $this->input->post('kodepos', true);
  		$ongkos = $this->input->post('ongkos', true);
  		$idproduct = $this->input->post('idproduct', true);
  		$jumlah = $this->input->post('qty22', true);
  		$total = $this->input->post('hargaxjumlah', true);
  		$harga = $this->input->post('harga', true);
  		$subtotal = $this->input->post('subtotal', true);

  		$data=[
  			"id_pemesan" => $id_transaksi,
  			"id_user" => $id_user,
  			"nama_penerima" => $namapenerima,
  			"no_hp" => $nohp1,
  			"tgl" => $tgl,
  			"alamat" => $alamat,
  			"provinsi" => $provinsi,
  			"kab_kota" => $kota,
  			"kecamatan" => $kecamatan,
  			"kodepos" => $kodepos,
  			"subtotal" => $subtotal,
  			"pembayaran" => $pembayaran,
  			"jasa" => $paket,
  			"ongkir" => $ongkos,
  			"status_pesanan" => 1,
  			"buktitf" => $this-> _uploadImage()
  		];
  		$this->db->insert('tb_pemesan',$data);

  		$data = array();
  		$index = 0; 
  		foreach ($idproduct as $dataid) {
  			array_push($data, array(
  				"id_pesanan" => $id_transaksi,
  				"id_userpesan" => $id_user,
  				"id_barang" => $dataid,
  				"jumlahcheck" => $jumlah[$index],
  				"harga" => $harga[$index],
  				"subtotal" => $subtotal,
  				"jumlahxharga" => $total[$index],
  			)); 
  			$this->db->query('update tb_product set stok=stok-'.$jumlah[$index].' where id_product='.$dataid);
  			$index++;
  		}

  		$sql = $this->sepeda_models->save_batch($data);
  		$this->db->query('delete from tb_keranjang where id_user='.$id_user);
  		redirect('sepeda/index/'.$id_user);
  	}
  	
  	public function setprovinsi(){
		$provinsi = $this->rajaongkir->province(9);
		$this->output->set_content_type('application/json')->set_output($provinsi);
	}
	public function setkota($id,$prov){
		$kotasal = $this->rajaongkir->city($id,$prov);
		$this->output->set_content_type('application/json')->set_output($kotasal);
	}
	public function getprovinsi(){
		$provinsi = $this->rajaongkir->province();
		$this->output->set_content_type('application/json')->set_output($provinsi);
	}
	public function getkota($id_provinsi){
		$kota = $this->rajaongkir->city($id_provinsi);
		$this->output->set_content_type('application/json')->set_output($kota);
	}
	public function getongkir($asal,$tujuan,$berat,$kurir){
		$ongkir = $this->rajaongkir->cost($asal,$tujuan,$berat,$kurir);
		$this->output->set_content_type('application/json')->set_output($ongkir);
	}

	public function pesanan($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Pesanan';
		$data['kelas']='';
		$data['kelas1']='active';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$level = $data['user']['level'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['pesanan']= $this->sepeda_models->getpesanancs($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/pesanan-cs',$data);
			$this->load->view('template/footer');
		}
	}
	public function pesanandikemas($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Pesanan';
		$data['kelas']='';
		$data['kelas1']='active';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$level = $data['user']['level'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['kemasan']= $this->sepeda_models->getkemasancs($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/pesanan-dikemascs',$data);
			$this->load->view('template/footer');
		}
	}
	public function pesanandikirim($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Pesanan';
		$data['kelas']='';
		$data['kelas1']='active';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$level = $data['user']['level'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['kemasan']= $this->sepeda_models->getkirimancs($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/pesanan-dikirimcs',$data);
			$this->load->view('template/footer');
		}
	}
	public function pesananselesai($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Selesai';
		$data['kelas']='';
		$data['kelas1']='active';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$level = $data['user']['level'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['selesai']= $this->sepeda_models->getselesaics($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/pesanan-selesaics',$data);
			$this->load->view('template/footer');
		}
	}
	public function detailpesanan($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Pesanan';
		$data['kelas']='';
		$data['kelas1']='';
		$data['kelas2']='active';
		$data['kelas3']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
			$level = $data['user']['level'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		if($this->session->userdata('id_user') == null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda harus masuk terlebih dulu!</div');
			redirect('auth');
		}else{
			$data['detailpesanan']= $this->sepeda_models->getdetailpesanan($id);
			$this->load->view('template/header',$data);
			$this->load->view('user/pesanan_detail',$data);
			$this->load->view('template/footer');
		}
	}
	public function pesananditerima($id){
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		if($this->session->userdata('id_user') != null){
			$id_user = $data['user']['id_user'];
		}
		$data['id_user'] = $id_user;
		$this->db->set('status_pesanan',4);
		$this->db->set('tglterima',date('d M Y'));
		$this->db->where('id_pemesan',$id);
		$this->db->update('tb_pemesan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
			data '.$username.' berhasil diprebarui
			</div');
		redirect('sepeda/pesananselesai/'.$id_user);
	}
	public function search(){
		$data['user'] = $this->db->get_where('tb_user', ['id_user'=>
			$this->session->userdata('id_user')])->row_array();
		$data['judul'] = 'Beranda';
		$data['kelas']='active';
		$data['kelas1']='';
		if($this->session->userdata('id_user') != null){
			$foto = $data['user']['photo'];
			$id_user = $data['user']['id_user'];
		}
		else{
			$foto = 'default.png';
			$id_user ='0';
		}
		$data['foto'] = $foto;
		$data['id_user'] = $id_user;
		$keyword = $this->input->post('search');
		$data['pencarian']= $this->sepeda_models->getsearch($keyword);
		$this->load->view('template/header',$data);
		$this->load->view('user/index-search',$data);
		$this->load->view('template/footer');
	}
  	
}