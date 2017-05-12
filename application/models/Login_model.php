<?php
class Login_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function validate($email, $password)
        {


            $query = $this->db->query("select * from usuarios where user = '".$email."' and clave = '".$password."' ");
            //return  $query->num_rows();
            return $query->result();                
        }

      

}
