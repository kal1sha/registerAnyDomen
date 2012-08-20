<?php
class Mysql
{
        private $db = null;
        private $result = null; 
 

        public function __construct($host, $user, $password, $base, $port = null, $charset = 'utf8') {
                $this->db = new mysqli($host, $user, $password, $base, $port);
                $this->db->set_charset($charset);
        } 

        public function query($query) {
                if(!$this->db)
                        return false; 

                if(is_object($this->result))
                        $this->result->free(); 

                $this->result = $this->db->query($query); 
 
                if($this->db->errno)
                        die("mysqli error #".$this->db->errno.": ".$this->db->error); 
 
                if(is_object($this->result)) {
                        while($row = $this->result->fetch_assoc())
                                $data[] = $row;
                        
                        return @$data;
                } 
                else if($this->result == FALSE)
                        return false;
                else return $this->db->affected_rows;
        }
}

?>