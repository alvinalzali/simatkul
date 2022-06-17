<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');


        if($this->form_validation->run() == false){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $old_image = $data['user']['image'];
                    if($old_image != 'default.svg'){
                        unlink(FCPATH . 'assets/img/profile' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('user');
        }
    }
        
        public function reservation() {
            $data['title'] = 'Reservation';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['reservation'] = $this->db->get('reservation')->result_array();
            

            $this->form_validation->set_rules('checkin', 'Check In', 'required|trim');
            $this->form_validation->set_rules('checkout', 'Check Out', 'required|trim');
            $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
            $this->form_validation->set_rules('roomtype', 'Room Type', 'required|trim');

            if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/reservation', $data);
            $this->load->view('templates/footer');
            }else{
                $data = [
                    'name' => $data['user']['name'],
                    'checkin' => $this->input->post('checkin', true),
                    'checkout' => $this->input->post('checkout', true),
                    'phone' => htmlspecialchars($this->input->post('phone', true)),
                    'roomtype' => htmlspecialchars($this->input->post('roomtype', true)),
                    'user_id' => $data['user']['id'],
                    'status' => 'Pending'
                ];

                $this->db->insert('reservation', $data);
                $this->db->query("UPDATE `reservation` SET `reservation`.`total_price` = 
                (`reservation`.`price` * `reservation`.`duration`) 
                WHERE `id`>=0
                ");
                
                //query db
                $this->db->query("UPDATE `reservation` SET `reservation`.`duration` = 
                DATEDIFF(`reservation`.`checkout`,`reservation`.`checkin`)
                 WHERE `id`>=0;");

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your reservation has been sent!</div>');
                redirect('user');
            }

        }

        public function reservationInfo(){
            $data['title'] = 'Reservation Info';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/reservationInfo', $data);
            $this->load->view('templates/footer');
        }

        public function roomInfo(){
            $data['title'] = 'Room Types';
            $data['title2'] = 'Room Facilities';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/roominfo', $data);
            $this->load->view('templates/footer');
        }
}

