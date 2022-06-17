<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    order by `user_sub_menu`.`menu_id` ASC
                ";
                    

        return $this->db->query($query)->result_array();
    }

    public function substract_date(){
        $query = "UPDATE `reservation` SET `reservation`.`total_price` = 
        (`reservation`.`price` * `reservation`.`duration`) 
        WHERE `id`>=0;
        ";

        return $this->db->query($query);
    }

    public function total_price(){
        $query = "UPDATE `reservation` SET `reservation`.`duration` = 
        DATEDIFF(`reservation`.`checkout`,`reservation`.`checkin`)
         WHERE `id`>=0;";

        return $this->db->query($query);
    }
}