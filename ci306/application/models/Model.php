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

        // public function checkLogin($mail,$pass){
        //     $this -> db -> select('mail, mdp');
        //     $this -> db -> from('utilisateur');
        // }

    }

    public function getproduit($nom , $img)
    {
        $sql = "SELECT * FROM Produit";
        $query = $this->db->query($sql);
        $result = array()
        foreach ($nom  as $name) 
        {
            echo $name;    
        }
    } 
?>
