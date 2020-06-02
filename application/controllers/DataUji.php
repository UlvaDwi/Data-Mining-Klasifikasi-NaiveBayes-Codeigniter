<?php 

/**
 * 
 */
class DataUji extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Uji_Model');
		$this->load->model('Training_Model');
		$this->load->library('form_validation');
	}

	function index()
	{

		$data['training'] = $this->Training_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('uji/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->Uji_Model->hapus_data($id);
		$this->session->set_flashdata('flash_uji', 'Dihapus');
		redirect('DataUji');
	}

	public function ubah($id)
	{

		$this->form_validation->set_rules("nama", "Nama", "required");
		$this->form_validation->set_rules("pkh", "Pkh", "required");
		$this->form_validation->set_rules("jml_tanggungan", "Jumlah Tanggungan", "required");
		$this->form_validation->set_rules("kepala_rt", "Kepala Rumah Tangga", "required");
		$this->form_validation->set_rules("kondisi_rumah", "Kondisi Rumah", "required");
		$this->form_validation->set_rules("jml_penghasilan", "Jumlah Penghasilan", "required");
		$this->form_validation->set_rules("status_rumah", "Status Rumah", "required");


		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Uji_Model->detail_data($id);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Uji_Model->ubah_data();
			$this->session->set_flashdata('flash_uji', 'DiUbah');
			redirect('DataUji');
		} 
	}

	function hitung(){
		$output = "";
		$this->form_validation->set_rules("nama", "Nama", "required");
		$this->form_validation->set_rules("pkh", "Pkh", "required");
		$this->form_validation->set_rules("jml_tanggungan", "Jumlah Tanggungan", "required");
		$this->form_validation->set_rules("kepala_rt", "Kepala Rumah Tangga", "required");
		$this->form_validation->set_rules("kondisi_rumah", "Kondisi Rumah", "required");
		$this->form_validation->set_rules("jml_penghasilan", "Jumlah Penghasilan", "required");
		$this->form_validation->set_rules("status_rumah", "Status Rumah", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Uji_Model->detail_data($id);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$status_PKH = array();
			$jumlah_tanggungan = array();
			$kepala_rt = array();
			$kondisi_rumah = array();
			$jml_penghasilan = array();
			$status_rumah = array();

			$jumlah_layak = $this->Training_Model->count_layak();
			$jumlah_tidak_layak = $this->Training_Model->count_tidaklayak();
			$total_training = $jumlah_layak+$jumlah_tidak_layak;
			$status_PKH = $this->Training_Model->status_PKH($this->input->post('pkh'));
			$jumlah_tanggungan = $this->Training_Model->jumlah_tanggungan($this->input->post('jml_tanggungan'));
			$kepala_rt = $this->Training_Model->kepala_rt($this->input->post('kepala_rt'));
			$kondisi_rumah = $this->Training_Model->kondisi_rumah($this->input->post('kondisi_rumah'));
			$jml_penghasilan = $this->Training_Model->jml_penghasilan($this->input->post('jml_penghasilan'));
			$status_rumah = $this->Training_Model->status_rumah($this->input->post('status_rumah'));

  //perhitungan //Step 1
			
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Jumlah Data</th>
			<th>Kelas PC1(Layak)</th>
			<th>Kelas PC0(Tidak Layak)</th>
			</tr>
			<tr>
			<td>" .$total_training. "</td>
			<td>" .$jumlah_layak. "</td>
			<td>" .$jumlah_tidak_layak. "</td>
			</tr>
			</thead>
			</table>";



   //Step 1
   //tampil
			$PC1 = round($jumlah_layak/($jumlah_tidak_layak+$jumlah_layak), 2);
			$PC0 = round($jumlah_tidak_layak/($jumlah_tidak_layak+$jumlah_layak), 2);

			$kelas_layak = round($status_PKH['layak'],2)*round($jumlah_tanggungan['layak'], 2)*round($kepala_rt['layak'], 2)*round($kondisi_rumah['layak'], 2)*round($jml_penghasilan['layak'], 2)*round($status_rumah['layak'], 2)*$PC1;
			$kelas_tidak_layak = round($status_PKH['tidaklayak'],2)*round($jumlah_tanggungan['tidaklayak'], 2)*round($kepala_rt['tidaklayak'], 2)*round($kondisi_rumah['tidaklayak'], 2)*round($jml_penghasilan['tidaklayak'], 2)*round($status_rumah['tidaklayak'], 2)*$PC0;


			$output .= "----Probabilitas Prior----<br>";
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Kelas PC1(Layak)</th>
			<th>Kelas PC0(Tidak Layak)</th>
			</tr>
			<tr>
			<td>" .$PC1. "</td>
			<td>" .$PC0. "</td>
			</tr>
			</thead>
			</table>";




   //STEP 2
			// $output .= "----Probabilitas Posterior----<br>";
			// $output .= "status_PKH : ";
			// $output .= var_dump($status_PKH);
			// $output .= "<br>";
			// $output .= "jumlah tanggungan : ";
			// $output .= var_dump($jumlah_tanggungan);
			// $output .= "<br>";
			// $output .= "kepala_rt : ";
			// $output .= var_dump($kepala_rt);
			// $output .= "<br>";
			// $output .= "kondisi_rumah : ";
			// $output .= var_dump($kondisi_rumah);
			// $output .= "<br>";
			// $output .= "jml_penghasilan : ";
			// $output .= var_dump($jml_penghasilan);
			// $output .= "<br>";
			// $output .= "status_rumah : ";
			// $output .= var_dump($status_rumah);
			// $output .= "<br><br>";


   //step 3
			$output .= "<br>----Probabilitas Data Uji di Dapat dari Probabilitas Posterior ----<br>";
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th> </th>
			<th>Stts PKH</th>
			<th>Jml Tanggu ngan</th>
			<th>Kepala Rumah Tangga</th>
			<th>Kondisi Rumah</th>
			<th>Jml Pengha silan</th>
			<th>Stts Pemilik Rumah</th>
			<th>Hasil Proba bilitas</th>
			</tr>
			<tr>
			<td>PC1 (Layak)</th>
			<td>" .round($status_PKH['layak'],2). "</td>
			<td>" .round($jumlah_tanggungan['layak'], 2). "</td>
			<td>" .round($kepala_rt['layak'], 2). "</td>
			<td>" .round($kondisi_rumah['layak'], 2). "</td>
			<td>".round($jml_penghasilan['layak'], 2). "</td>
			<td>".round($status_rumah['layak'], 2). "</td>
			
			<td>".$kelas_layak. "</td>
			</tr>

			<tr>
			<td>PC0 (Tidak Layak)</th>
			<td>" .round($status_PKH['tidaklayak'],2). "</td>
			<td>" .round($jumlah_tanggungan['tidaklayak'], 2). "</td>
			<td>" .round($kepala_rt['tidaklayak'], 2). "</td>
			<td>" .round($kondisi_rumah['tidaklayak'], 2). "</td>
			<td>".round($jml_penghasilan['tidaklayak'], 2). "</td>
			<td>".round($status_rumah['tidaklayak'], 2). "</td>

			<td>".$kelas_tidak_layak. "</td>
			</tr>
			</thead>
			</table>";


			// $output .= "----Probabilitas Data Uji----<br>";
			// $output .= "-PCO (Tidak Layak) <br> ";

			// $output .= "Status PKH: ".round($status_PKH['tidaklayak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($jumlah_tanggungan['tidaklayak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($kepala_rt['tidaklayak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($kondisi_rumah['tidaklayak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($jml_penghasilan['tidaklayak'], 2);
			// $output .= "<br>Status Rumah: ".round($status_rumah['tidaklayak'], 2);
			// $output .= "<br>Hasil Probabilitas: ";

			// $output .= $kelas_tidak_layak = round($status_PKH['tidaklayak'],2)*round($jumlah_tanggungan['tidaklayak'], 2)*round($kepala_rt['tidaklayak'], 2)*round($kondisi_rumah['tidaklayak'], 2)*round($jml_penghasilan['tidaklayak'], 2)*round($status_rumah['tidaklayak'], 2)*$PC0;

			// $output .= " </br><br>";
			// $output .= "-PC1 (Layak)<br>";

			// $output .= "Status PKH: ".round($status_PKH['layak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($jumlah_tanggungan['layak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($kepala_rt['layak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($kondisi_rumah['layak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($jml_penghasilan['layak'], 2);
			// $output .= "<br>Status Rumah: ".round($status_rumah['layak'], 2);
			// $output .= "<br> Hasil Probabilitas: ";
			// $output .= $kelas_layak = round($status_PKH['layak'],2)*round($jumlah_tanggungan['layak'], 2)*round($kepala_rt['layak'], 2)*round($kondisi_rumah['layak'], 2)*round($jml_penghasilan['layak'], 2)*round($status_rumah['layak'], 2)*$PC1;
			
			$kesimpulan = "";
			$operator="";
			if ($kelas_layak >= $kelas_tidak_layak) {
				$kesimpulan = "layak";
				$operator = ">=";
			}else{
				$kesimpulan = "tidak layak";
				$operator = "<=";
			}


			$output .= "*Kelas Layak(PC1)" .$operator."Kelas Tidak Layak(PC0)
			<br>Dapat disimpulkan Bahwa Data Uji tersebut <b><u>".$kesimpulan."</u></b> Untuk menerima Beras Rastra";

      // masukan hasil kesimpulan dalam parameter untuk di save
			$this->Uji_Model->tambah_data($kesimpulan);
			$this->session->set_flashdata('flash_uji','dihitung' );
			$this->session->set_flashdata('flash_hitung', $output );
			redirect('DataUji');
		} 
	}




}
?>