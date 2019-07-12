<?php
class Login_model extends CI_Model {


  public function getall_slider()
  	{
  		$q = $this->db->get('slider');
  		if($q->num_rows() > 0) {
  			foreach (($q->result()) as $row) {
  				$data[] = $row;
  			}

  			return $data;
  		}
	  }
	  
  public function getall_biography()
  	{
  		$q = $this->db->get('biography');
  		if($q->num_rows() > 0) {
  			foreach (($q->result()) as $row) {
  				$data[] = $row;
  			}

  			return $data;
  		}
  	}

    public function getslider_byid($id)
        {

        	$q=$this->db->get_where('slider', array('id' => $id));

            if($q->num_rows() > 0) {
    			foreach (($q->result()) as $row) {
    				$data[] = $row;
    			}

    			return $data;
    		}
        }

    public function getall_gallery()
    	{
    		$q = $this->db->get('img_gallery');
    		if($q->num_rows() > 0) {
    			foreach (($q->result()) as $row) {
    				$data[] = $row;
    			}

    			return $data;
    		}
    	}
      public function getall_music()
      	{
      		$q = $this->db->get('music_tbl');
      		if($q->num_rows() > 0) {
      			foreach (($q->result()) as $row) {
      				$data[] = $row;
      			}

      			return $data;
      		}
      	}
        public function getall_video()
        	{
        		$q = $this->db->get('video_tbl');
        		if($q->num_rows() > 0) {
        			foreach (($q->result()) as $row) {
        				$data[] = $row;
        			}

        			return $data;
        		}
        	}
          public function getall_caller()
          	{
          		$q = $this->db->get('caller_tbl');
          		if($q->num_rows() > 0) {
          			foreach (($q->result()) as $row) {
          				$data[] = $row;
          			}

          			return $data;
          		}
          	}
            public function getall_provider()
            	{
            		$q = $this->db->get('provider');
            		if($q->num_rows() > 0) {
            			foreach (($q->result()) as $row) {
            				$data[] = $row;
            			}

            			return $data;
            		}
            	}
              public function getall_down()
              	{
              		$q = $this->db->get('down_link');
              		if($q->num_rows() > 0) {
              			foreach (($q->result()) as $row) {
              				$data[] = $row;
              			}

              			return $data;
              		}
              	}
                public function getall_link()
                	{
                		$q = $this->db->get('link_tbl');
                		if($q->num_rows() > 0) {
                			foreach (($q->result()) as $row) {
                				$data[] = $row;
                			}

                			return $data;
                		}
                	}
                  public function getall_event()
                  	{
                  		$q = $this->db->get('event_tbl');
                  		if($q->num_rows() > 0) {
                  			foreach (($q->result()) as $row) {
                  				$data[] = $row;
                  			}

                  			return $data;
                  		}
                  	}

    public function add_slider($data)
    	{
        if($this->db->insert('slider', $data)==true){
           return true;
          }else{
           return false;
          }

           //$this->db->insert('slider', $data);

    	}
      public function add_gallery($data)
      	{
          if($this->db->insert('img_gallery', $data)==true){
             return true;
            }else{
             return false;
            }

             //$this->db->insert('img_gallery', $data);

      	}
        public function add_music($data)
        	{
            if($this->db->insert('music_tbl', $data)==true){
               return true;
              }else{
               return false;
              }

               //$this->db->insert('music_tbl', $data);

        	}
          public function add_video($data)
            {

              if($this->db->insert('video_tbl', $data)==true){
                 return true;
                }else{
                 return false;
                }


                 //$this->db->insert('video_tbl', $data);

            }
            public function add_caller_tune($data)
              {

                if($this->db->insert('caller_tbl', $data)==true){
                   return true;
                  }else{
                   return false;
                  }


                   //$this->db->insert('caller_tbl', $data);

              }
              public function add_download($data)
                {


                     //$this->db->insert('down_link', $data);
                     if($this->db->insert('down_link', $data)==true){
                        return true;
                       }else{
                        return false;
                       }

                }

                public function add_social($data)
                  {


                       //$this->db->insert('link_tbl', $data);
                       if($this->db->insert('link_tbl', $data)==true){
                          return true;
                         }else{
                          return false;
                         }

                  }
                  public function add_event($data)
                    {


                         //$this->db->insert('event_tbl', $data);
                         if($this->db->insert('event_tbl', $data)==true){
                            return true;
                           }else{
                            return false;
                           }

                    }


      public function add_doctor($data)
      	{
          // if($this->db->insert('login', $data)==true){
          //    return true;
          //   }else{
          //    return false;
          //   }\



             $this->db->insert('doctor_details', $data);

      	}

    public function getall_specialization()
    	{
    		$q = $this->db->get('doctor_specialization');
    		if($q->num_rows() > 0) {
    			foreach (($q->result()) as $row) {
    				$data[] = $row;
    			}

    			return $data;
    		}
    	}
//
// /*Add section*/
//
// 	public function add_provider($data) {
//
//            if($this->db->insert('provider', $data)==true){
//            	return true;
//            }else{
//            	return false;
//            }
//
// 	}
//
// 	public function edit_provider($id, $data){
//      $this->db->where('prov_id', $id);
//      $this->db->update('provider', $data);
// }
//
//
//
// 	 public function getprovider_byid($id)
//     {
//
//     	$q=$this->db->get_where('provider', array('prov_id' => $id));
//
//         if($q->num_rows() > 0) {
// 			foreach (($q->result()) as $row) {
// 				$data[] = $row;
// 			}
//
// 			return $data;
// 		}
//     }

}

?>
