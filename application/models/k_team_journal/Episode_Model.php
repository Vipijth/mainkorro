<?php 

class Episode_Model extends CI_model{

    public function create_topic($data ){

        $query = $this->db->insert('episode', $data);
        return $query;
        }


  public function Update_topic($tp,$datas ){
    $this->db->where('id', $tp);
        $this->db->update('topic', $datas);

        }

        public function get_data( ){
           
        
            $query=$this->db->get('episode'); 
            $num = $query->num_rows();
                return $num;
              
            
            }

            public function get_info( ){

        
                $query=$this->db->get('episode'); 
            
                    return $query;
                  
                
                }

                public function delete_episode($id){
                    $this -> db -> where('id', $id);
                    $this -> db -> delete('episode');
    
                }
                public function  topics_list()
                {
                    $this->db->select("*");
                    $this->db->from(' topic');
                    // $this->db->order_by('id','ASC');
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }
                }
        
                public function topics_list_id1($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' video' );
                    $this->db->join ( 'topic', 'topic.topic_number = video.topic_number' , 'left' );
                    $this->db->where ( 'video.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id2($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' moonshot_conversations' );
                    $this->db->join ( 'topic', 'topic.topic_number = moonshot_conversations.topic_number' , 'left' );
                    $this->db->where ( 'moonshot_conversations.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->row ();
                }
                  public function topics_list_id3($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list' );
                    $this->db->join ( 'topic', 'topic.topic_number =  topics_data_list.topic_number' , 'left' );
                    $this->db->where ( ' topics_data_list.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id4($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list_1' );
                    $this->db->join ( 'topic', 'topic.topic_number = topics_data_list_1.topic_number' , 'left' );
                    $this->db->where ( 'topics_data_list_1.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id5($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list_2' );
                    $this->db->join ( 'topic', 'topic.topic_number = topics_data_list_2.topic_number' , 'left' );
                    $this->db->where ( 'topics_data_list_2.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id6($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( '  topics_6' );
                    $this->db->join ( 'topic', 'topic.topic_number =  topics_6.topic_number' , 'left' );
                    $this->db->where ( ' topics_6.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                 
            

}


?>