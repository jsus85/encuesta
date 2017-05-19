<?php
class Encuestas_model extends CI_Model {

        
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
                $query = $this->db->get('preguntas');

                return $query->result();
        }


         /**
            * Get registro by his is
            * @param int $id 
            * @return array
            */
            public function get_data_by_question($id)
            {
                        
                $this->db->select('*');
                $this->db->from('opciones');
                $this->db->where('pregunta_id', $id);
                $query = $this->db->get();

                return $query->result();
                //return $query->result_array(); 
            }

      

}
