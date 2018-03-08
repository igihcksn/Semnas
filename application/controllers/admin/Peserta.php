<?php 
    class Peserta extends CI_Controller
    {
        
        function __construct()
        {
            parent::__construct();

            //load model
            $this->load->model('admin/peserta_model');
            //vaidasi inputan
            $this->load->library('form_validation');

            // //cek login, ketika belum ada loginsession maka akan langsung di arahkan ke login
            // if (!$this->session->userdata('auth'))
            // {
            //     redirect('auth/login');
            // }
        }

        public function index ()
        {

            //get semua data brand
            $data['list_brand'] = $this->m_brand->get_all_data();
            $this->load->view('admin/master/brands/index', $data);
        }

        public function add ()
        {
            $this->load->view('admin/master/brands/add');
        }

        public function add_process() 
        {
            
            //cek inputan // aturan
            $this->form_validation->set_rules('brand_name', 'Name', 'required|max_length[5]');
            $this->form_validation->set_rules('brand_description', 'Description', 'required|max_length[225]');
            //jalankan validasi
            if ($this->form_validation->run() !== FALSE)
            {
                //default logo
                $logo = 'default.jpg';
                //upload logo
                $config['upload_path'] = 'resource/images/brand-icon/';
                $config['allowed_types'] = 'jpg|jpeg|png|ico|bmp';
                $config['file_name'] = strtolower(str_replace(' ', '-', $this->input->post('brand_name'))) ;
                //load library upload & menggunakan confignya
                $this->load->library('upload', $config);
                //proses upload
                //brand logo adalah nama input file
                if($this->upload->do_upload('brand_logo')) {
                    // ambil nama file yang baru di upload & masukkan ke variabel logo
                    $logo = $this->upload->data('file_name');
                }
                //jika data tidak error
                $params = array(
                    'brand_name' => $this->input->post('brand_name'),
                    'brand_description' => $this->input->post('brand_description'),
                    'brand_slug' => strtolower(str_replace(' ','-', $this->input->post('brand_name'))),
                    'brand_logo' => $logo
                    );
                //proses insert
                if($this->m_brand->insert($params))
                {
                    redirect('admin/master/brands');
                } else {
                    echo 'error';
                }
            }

            $this->load->view('admin/master/brands/add');
        }

        //delete
        public function delete($brand_id = ""){
            $params = array('brand_id' => $brand_id);
            //get detail data
            $brand = $this->m_brand->get_detail_data($params);
            //Jika logo yang di simpan bukan default
            if ($this->m_brand->delete($params))
            {
                //jik brand_logo buka default
                if ($brand['brand_logo'] != 'default.jpg') 
                {
                    unlink('resource/images/brand-icon/'. $brand['brand_logo']);
                }
            }
            //delete
            if ($this->m_brand->delete($params)) {
                redirect('admin/master/brands');
            } 
        }
    }
 ?>