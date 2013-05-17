
<?php
   class Call_page11 extends CI_Model{
   function getall(){
		$query = $this->db->query("SELECT * FROM login");
		
		return $query->result();
   }
   function insertall($data){
		$query = $this->db->insert("login",$data);
		
   }
   function insert1($data){
		$query = $this->db->insert_batch("login",$data);		
   }
   function update1($data){
		$query = $this->db->query("UPDATE `login` SET `username`='login7',`password`='pass7',`id`=1 WHERE `id`=1");		
   }
   function delete1($data){
		$query = $this->db->delete("login",$data);		
   }
}
        ?> 