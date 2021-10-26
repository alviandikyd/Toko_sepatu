<?php
class Tokosepatu extends CI_Controller
{
 
    public function index()
 
    {
 
        $this->load->view('view_form_tokosepatu');
    }
 
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli',
            'required|min_length[3]', [
            'required' => 'Nama Pembeli Harus diisi',
            'min_lenght' => 'Nama tidak boleh kosong'
        ]);
 
        $this->form_validation->set_rules('nohp', 'No HP',
            'required|min_length[3]', [
            'required' => 'No HP Harus diisi',
            'min_lenght' => 'No HP terlalu pendek'
        ]);
 
        if ($this->form_validation->run() == false) {
            $this->load->view('view_form_tokosepatu');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'ukuran'=> $this->input->post('ukuran'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->input->post('harga')
            ];
            if ($this->input->post('merk') == "Nike"){
                $data['harga'] = 375000;
            }else if($this->input->post('merk') == "Adidas"){
                $data['harga'] = 300000;
            }else if($this->input->post('merk') == "Kickers"){
             $data['harga'] = 250000;
            }else if($this->input->post('merk') == "Eiger"){
             $data['harga'] = 275000;
            }else if($this->input->post('merk') == "Bucherri"){
            $data['harga'] = 400000;
            }
 
        $this->load->view('view_data_tokosepatu', $data);
        }
    }
}