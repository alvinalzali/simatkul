<?php
defined('BASEPATH') or exit('No direct script access allowed');


class reservation_model extends CI_Model
{

    public function getReservationInfo()
    {
        $query = "SELECT `reservation`.*, `user`.`name`
                    FROM `reservation` JOIN `user`
                    ON `reservation`.`user_id` = `user`.`id`
                    order by `reservation`.`id` ASC
                ";

        return $this->db->query($query)->result_array();
    }
}
