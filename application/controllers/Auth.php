<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // var_dump($user); die; jika ingin mengecek inputan

        if($user) {
            if($user['is_active'] == 1) {
                // cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated!
                </div>');
                redirect('auth');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('birthplace', 'Birthplace', 'required');
        $this->form_validation->set_rules('scan', 'Scan', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if($this->form_validation->run() == false) {
            $data['title'] = 'Hotel Management System | Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'job' => htmlspecialchars($this->input->post('job', true)),
                'role_id' => 2,
                'is_active' => 1,
                'image' => 'default.svg',
                'date_created' => time(),
                'gender' => htmlspecialchars($this->input->post('gender', true)),
                'birthplace' => htmlspecialchars($this->input->post('birthplace', true)),
                'phone' => htmlspecialchars($this->input->post('phone', true))
            ];
            
            
            $upload_image = $_FILES['scan']['name'];
            if($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['file_name'] = $_FILES['scan']['name'];
                $this->load->library('upload', $config);
                if($this->upload->do_upload('scan')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('scan', $new_image);
                    $this->db->where('email', $this->input->post('email'));
                    $this->db->update('user');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('user', $data);
            
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Your account has been created. Please login.
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
        
    }
}
