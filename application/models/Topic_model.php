<?php 

class Topic_Model extends CI_model{

    public function create_topic($data ){

        $query = $this->db->insert('topic', $data);
        return $query;
        }

        public function get_data( ){

        
            $query=$this->db->get('topic'); 
        
                return $query;
              
            
            }

            public function delete_topic($id){
                $this -> db -> where('id', $id);
                $this -> db -> delete('topic');

            }


}


?>