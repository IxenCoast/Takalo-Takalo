<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function info($mail)
        {   
            $sql = "select * from utilisateur where mail = %s";
            $sql = sprintf($sql, $this->db->escape($mail));
            $query = $this->db->query($sql);
            $result = $query->row_array(); 

            return $result;
            // return $query;
        }
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

        public function listeProduitAdmin()
        {   
            $sql = "SELECT * FROM produit";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function mesObjets($id)
        {   
            $sql = "SELECT * FROM produit JOIN utilisateur on utilisateur.idu = produit.idu where produit.idu =%s";
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

        public function demander($p,$pf)
        {   
            $sql = "insert into demande values(null,%s,%s, now(), null , null)";
            $sql = sprintf($sql, $this->db->escape($p), $this->db->escape($pf));
            $this->db->query($sql);
        }

        public function accepter($idd, $idu, $idf, $idp, $idpf)
        {   
            $sql = "update demande set dta=now() where idd=%s";
            $sql = sprintf($sql, $this->db->escape($idd));
            $sql1 = "update produit set idu=%s where idp=%s";
            $sql1 = sprintf($sql, $this->db->escape($idf),$this->db->escape($idp) );
            $sql2 = "update produit set idu=%s where idp=%s";
            $sql2 = sprintf($sql, $this->db->escape($idu),$this->db->escape($idpf) );
            $this->db->query($sql);
            $this->db->query($sql1);
            $this->db->query($sql2);
        }

        public function refuser($idd)
        {   
            $sql = "update demande set dtr=now() where idd=%s";
            $sql = sprintf($sql, $this->db->escape($idd));
            $this->db->query($sql);
        }


        public function encours($id)
        {   
            $sql = "SELECT * FROM demande join produit on demande.idp = produit.idp where dta is null and dtr is null and produit.idu=%s";
            $sql = sprintf($sql, $this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function enprepa()
        {   
            $sql = "SELECT * FROM demande join produit on demande.idp = produit.idp where dta is null and dtr is null";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function notif($id)
        {   
            $sql = "SELECT * FROM demande join produit on demande.idpf = produit.idp where dta is null and dtr is null and produit.idu=%s";
            $sql = sprintf($sql, $this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }
        
        public function getIdAsk($id)
        {   
            $sql = "select idu from produit where idp in (SELECT demande.idp FROM demande join produit on demande.idpf = produit.idp where dta is null and dtr is null and produit.idu=2)";
            $sql = sprintf($sql, $this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

       

    }
?>
