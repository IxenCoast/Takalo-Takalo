<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($mail,$pass)
        {   
            $sql = "select * from user";
            $query = $this->db->query($sql);
            $valiny = false;
            foreach($query->result_array() as $row)
            {
                if($mail ==  $row['mail'] && $pass ==  $row['mdp'])
                {
                    $valiny = true;
                }
            }
            return $valiny;
        }
    }
?>