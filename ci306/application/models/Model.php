<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($mail,$pass)
        {   
            $sql = "select * from utilisateur";
            $query = $this->db->query($sql);
            $row = array();
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

        public function signup($n,$m, $p)
        {   
            $sql = "insert into utilisateur(idu,nom,mail,mdp) values(null,%s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($n), $this->db->escape($m),$this->db->escape($p));
            $this->db->query($sql);
        }

        public function listeProduit($id)
        {   
            $sql = "SELECT * FROM produit JOIN utilisateur on utilisateur.idu = produit.idu where produit.idu !=%s";
            $sql = sprintf($sql, $this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        // public function checkLogin($mail,$pass){
        //     $this -> db -> select('mail, mdp');
        //     $this -> db -> from('utilisateur');
        // }

    }
?>
