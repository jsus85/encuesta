<?php
class Usuarios_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        /**
        * nuevo registro en la  database
        * @param array $data
        * @return boolean 
        */
        function save($data)
        {
                $insert = $this->db->insert('usuarios', $data);
                return $insert;
        }

        public function all()
        {
                $this->db->order_by("id", "desc"); 
                $query = $this->db->get('usuarios');
                return $query->result();
        }


         /**
            * Get registro by his is
            * @param int $id 
            * @return array
            */
            public function get_data_by_id($id)
            {
                        
                $this->db->select('*');
                $this->db->from('usuarios');
                $this->db->where('id', $id);
                $query = $this->db->get();
                return $query->result_array(); 
            }

      

}
