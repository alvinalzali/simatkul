<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {   
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New role added!
            </div>');
            redirect('admin/role');
        }

    }

    

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');


    }

    public function changeaccess ()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed!
        </div>');

    }

    public function deleterole($role_id)
    {
        if($role_id != 1) {
            $this->db->delete('user_role', ['id' => $role_id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Role Deleted!
            </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            You can\'t delete this role!
            </div>');
        }

        redirect('admin/role');
    }

    public function editrole($role_id){
        if($role_id != 1){
                $this->db->where('id', $role_id);
                $this->db->update('user_role', ['role' => $this->input->post('role')]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Role Updated!
                </div>');
                redirect('admin/role');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            You can\'t edit this role!
            </div>');
            redirect('admin/role');
        }
    }

    public function useraccount(){
        $data['title'] = 'User Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-account', $data);
        $this->load->view('templates/footer');
    }

    public function deleteuser($id){
        if($id != 1){
            $this->db->delete('user', ['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User Deleted!
            </div>');
            redirect('admin/useraccount');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            You can\'t delete this user!
            </div>');
            redirect('admin/useraccount');
        }
    }

    public function reservationstatus(){
        $data['title'] = 'Reservation Active';
        $data['title2'] = 'Reservation History';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['roomstatus'] = $this->db->get('reservation')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('room/reservation_status', $data);
        $this->load->view('templates/footer');
    }

    public function deletereservation($id){
        $this->db->delete('reservation', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Reservation Deleted!
        </div>');
        redirect('admin/reservationstatus');
    }

    public function editReservation($id){
        $data['title'] = 'Edit Reservation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['reservation'] = $this->db->get_where('reservation', ['id' => $id])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('checkin', 'Check In', 'required|trim');
        $this->form_validation->set_rules('checkout', 'Check Out', 'required|trim');
        $this->form_validation->set_rules('room', 'Room', 'required|trim');
        $this->form_validation->set_rules('roomtype', 'Room Type', 'required|trim');
        $this->form_validation->set_rules('roomfacilities', 'Room Facilities', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('room/edit_reservation', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->where('id', $id);
            $this->db->update('reservation', [
                'name' => $this->input->post('name'),
                'checkin' => $this->input->post('checkin'),
                'checkout' => $this->input->post('checkout'),
                'room' => $this->input->post('room'),
                'roomtype' => $this->input->post('roomtype'),
                'roomfacilities' => $this->input->post('roomfacilities'),
                'status' => $this->input->post('status')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Reservation Edited!
            </div>');
            redirect('admin/reservationstatus');
        }
    }
}