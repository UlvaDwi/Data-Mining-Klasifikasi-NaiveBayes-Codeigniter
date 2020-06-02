<?php 

/**
 * 
 */
class Uji_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_training')->result();
	}

	public function tambah_data($kesimpulan)
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'pkh' => $this->input->post('pkh', true),
			'jml_tanggungan' => $this->input->post('jml_tanggungan', true),
			'kepala_rt' => $this->input->post('kepala_rt', true),
			'kondisi_rumah' => $this->input->post('kondisi_rumah', true),
			'jml_penghasilan' => $this->input->post('jml_penghasilan', true),
			'status_rumah' => $this->input->post('status_rumah', true),
			'status_kelayakan' =>$kesimpulan
		);

		$this->db->insert('tbl_training', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'pkh' => $this->input->post('pkh', true),
			'jml_tanggungan' => $this->input->post('jml_tanggungan', true),
			'kepala_rt' => $this->input->post('kepala_rt', true),
			'kondisi_rumah' => $this->input->post('kondisi_rumah', true),
			'jml_penghasilan' => $this->input->post('jml_penghasilan', true),
			'status_rumah' => $this->input->post('status_rumah', true),
			'status_kelayakan' => $this->input->post('status_kelayakan', true)
		);
		$this->db->where('id_training', $this->input->post('id_training', true));
		$this->db->update('tbl_training', $data);
	}

	public function hapus_data($id)
	{
		$this->db->delete('tbl_training', ['id_training' => $id]);
	}

	public function detail_data($id)
	{
		return $this->db->get_where('tbl_training', ['id_training' => $id]) ->row_array(); 
	}
}
?>