<?php 
/**
  * 
  */
class sepeda_models extends CI_Model
{
	public function getalldata(){
		return $this->db->get('tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" ORDER BY rand() DESC')->result_array();
	}
	public function getdatasepeda(){
		return $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" and id_category= 1')->result_array();
	}
	public function getdatasparepart(){
		return $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" and id_category= 7 or id_category= 2')->result_array();
	}
	public function getalldatakategori(){
		return $this->db->get('tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" GROUP BY tb_kategori.nama_category ORDER BY rand() DESC limit 4')->result_array();
	}
	public function getdatakategori($id){
		return $this->db->get('tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" and id_category='.$id.' ORDER BY rand() DESC')->result_array();
	}
	public function getnamakategori($id){
		return $this->db->get('tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where status="on" and id_category='.$id.' ORDER BY rand() DESC')->row_array();
	}
	public function rupiah($nilai = 0){
		$string = "Rp." . number_format($nilai)." .-";
		return $string;
	}
	public function hp($notlp) {
     // kadang ada penulisan no hp 0811 239 345
		$notlp = str_replace(" ","",$notlp);
     // kadang ada penulisan no hp (0274) 778787
		$notlp = str_replace("(","",$notlp);
     // kadang ada penulisan no hp (0274) 778787
		$notlp = str_replace(")","",$notlp);
     // kadang ada penulisan no hp 0811.239.345
		$notlp = str_replace(".","",$notlp);

     // cek apakah no hp mengandung karakter + dan 0-9
		if(!preg_match('/[^+0-9]/',trim($notlp))){
         // cek apakah no hp karakter 1-3 adalah +62
			if(substr(trim($notlp), 0, 3)=='+62'){
				$hp = trim($notlp);
			}
         // cek apakah no hp karakter 1 adalah 0
			elseif(substr(trim($notlp), 0, 1)=='0'){
				$hp = '+62'.substr(trim($notlp), 1);
			}
			elseif (substr(trim($notlp), 0, 3)=='0') {
				$hp = $notlp;
				$hp0 = substr_replace($hp,'0',0,3);
				echo $hp0;	
			}	
		}
		print $hp;
	}
	public function getProductById($id)
	{
		return $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where id_product='.$id)->row_array();
	}
	public function getKeranjang($id)
	{
		return $this->db->query("select *,sum(qty)jumlah from tb_product join tb_keranjang on tb_product.id_product=tb_keranjang.id_product join tb_kategori on tb_product.category=tb_kategori.id_category join tb_user on tb_keranjang.id_user=tb_user.id_user where tb_keranjang.id_user=".$id." group by tb_keranjang.id_product")->result_array();
	}
	public function getKeranjangid($id,$idk)
	{
		return $this->db->query("select *,sum(qty)jumlah from tb_product join tb_keranjang on tb_product.id_product=tb_keranjang.id_product join tb_kategori on tb_product.category=tb_kategori.id_category join tb_user on tb_keranjang.id_user=tb_user.id_user where tb_keranjang.id_user=".$id." and tb_product.id_product=".$idk." group by tb_keranjang.id_product;")->row_array();
	}
	public function getstatusid($id)
	{
		return $this->db->query("select * from tb_pemesan where  id_pemesan=".$id)->row_array();
	}
	public function getdatabarang(){
		return $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category ORDER BY tb_product.nama_product asc')->result_array();
	}
	public function getkategori(){
		return $this->db->query('select * from tb_kategori')->result_array();
	}
	public function hapusbarang($id)
	{
		$this->db->where('id_product',$id);
		$this->db->delete('tb_product');
	}
	public function hapuskeranjang($id)
	{
		$this->db->query('delete from tb_keranjang where id_user='.$id);
	}
	public function editkeraanjang($id){
		$this->db->query('update from tb_keranjang set qty where id_user='.$id);
	}
	public function getkategoriid($id){
		return $this->db->query('select * from tb_kategori where id_category='.$id)->row_array();
	}
	public function hapuskategori($id)
	{
		$this->db->where('id_category',$id);
		$this->db->delete('tb_kategori');
	}
	public function getuser(){
		return $this->db->query('select * from tb_user order by nama')->result_array();
	}
	public function countuser(){
		return $this->db->query('select * from tb_user order by nama')->num_rows();
	}
	public function getuserid($id){
		return $this->db->query('select * from tb_user where id_user='.$id)->row_array();
	}
	public function hapususer($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('tb_user');
	}
	public function getpesanan(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="0" or tb_pemesan.status_pesanan="1" group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getkemasan(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="2" group by tb_pesanan.id_pesanan order by tb_pemesan.tgl desc;')->result_array();
	}
	public function getkiriman(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="3" group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getselesai(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="4" group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getpesananid($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product group by 
			tb_pesanan.id_pesanan where tb_pemesan.id_pemesan='.$id)->row_array();
	}
	public function countallpesanan(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product group by 
			tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc')->num_rows();
	}
	public function countpesanan(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="0" or tb_pemesan.status_pesanan="1" group by 
			tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc')->num_rows();
	}
	public function countkemasan(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="2" group by 
			tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc')->num_rows();
	}
	public function countkiriman(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="3" group by 
			tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc')->num_rows();
	}
	public function countselesai(){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="4" group by 
			tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc')->num_rows();
	}
	public function getpesanancs($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="0" or tb_pemesan.status_pesanan="1" and tb_pemesan.id_user='.$id.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getkemasancs($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="2" and tb_pemesan.id_user='.$id.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getkirimancs($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="3" and tb_pemesan.id_user='.$id.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}
	public function getselesaics($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="4" and tb_pemesan.id_user='.$id.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->result_array();
	}

	public function getdetailpesanan($id){
		return $this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pesanan.id_pesanan='.$id)->result_array();
	}

	public function arrayPesanan($id){
		$pesanan=["Belum Transfer","Menunggu konfirmasi penjual","Pesanan sedang Dikemas","Pesanan Dikirim","Pesanan Telah Sampai"];
		return $pesanan[$id];
	}
	public function arrayPesananadm($id){
		$pesanan=["Belum Transfer","Sudah Transfer","Pesanan Sedang Dikemas","Pesanan Dikirim","Pesanan Telah Sampai"];
		return $pesanan[$id];
	}
	public function arraystatus(){
		$pesanan=["Pesanan sedang Dikemas","Pesanan Dikirim"];
		return $pesanan;
	}
	public function arraystatus1(){
		$pesanan=["Pesanan Dikirim"];
		return $pesanan;
	}
	public function getrekening(){
		return $this->db->query('select * from tb_rekening')->result_array();
	}
	 public function save_batch($data){   
	   return $this->db->insert_batch('tb_pesanan', $data);  
	}
	public function getsearch($key){
		return $this->db->query('select * from tb_product join tb_kategori on tb_product.category=tb_kategori.id_category where tb_product.nama_product like "%'.$key.'%" or tb_kategori.nama_category like "%'.$key.'%";')->result_array();
	}
	

} ?>