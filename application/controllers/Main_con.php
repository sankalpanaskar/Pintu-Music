<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_con extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		//session_start();

    //$this->load->helper('textlocal.class');

		$this->load->model('Login_model');
//$this->load->library('upload', $config);

    //require_once(APPPATH."views/textlocal.php");


	}

	public function login_check(){


		$email = $this->input->post('email');
		$password = $this->input->post('password');

			$query=$this->db->get_where('admin', array('uid' => $email,'password' => $password));
			if($query->num_rows()>0)
			{
				//redirect(base_url()."dashboard");
	      // $this->session->set_userdata('user', '1');
				// $this->session->set_userdata('header_name', $query->result()[0]->name);
				//redirect(base_url()."dashboard_principle");
				echo "1";
				//echo "principalsdds";

			}
			else{
				echo "0";
			}





	}

	public function add_slider(){

		$x = $this->input->post('hid');

		if($x==0){

		$data['text1'] = $this->input->post('header1');
		$data['text2'] = $this->input->post('header2');
		$data['description'] = $this->input->post('description');
      $this->load->library('upload',$config);
		      $config['upload_path'] = 'assets/images/slider/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';

          $config['file_name'] = time().$_FILES['file1']['name'];


            //$s=explode('.',$config['file_name']);
						  $data['image']=str_replace(' ', '_', $config['file_name']);
							//$this->upload->initialize($config);
							$this->upload->initialize($config);
						   $this->upload->do_upload('file1');

						//echo $this->Login_model->add_slider($data);

						if($this->Login_model->add_slider($data)==TRUE){
							$this->session->set_flashdata('sl','true');
								redirect(base_url()."slider");
						}
						else{
							$this->session->set_flashdata('sl_error','true');
							redirect(base_url()."slider");
						 }

					}
					else{

						$data['text1'] = $this->input->post('header1');
						$data['text2'] = $this->input->post('header2');
						$data['description'] = $this->input->post('description');

						      $config['upload_path'] = 'assets/images/slider/';
				          $config['allowed_types'] = 'jpg|jpeg|png|gif';
				          $config['file_name'] = time().$_FILES['file1']['name'];
									$this->load->library('upload',$config);
										$this->upload->initialize($config);
										$this->upload->do_upload('file1');
										$u = $this->db->get_where('slider', array(
                    'id' => $x
									))->result_array();
										if($_FILES['file1']['name']){
											//var_dump($u[0]['image']);
											unlink('assets/images/slider/'.$u[0]['image']);
				            $data['image']=str_replace(' ', '_', $config['file_name']);
									  }

										$this->db->where('id', $x);

	                 // $res = $this->db->update('slider', $data);
										// redirect(base_url()."slider");

										if( $this->db->update('slider', $data)==TRUE){
											$this->session->set_flashdata('sl_up','true');
												redirect(base_url()."slider");
										}
										else{
											$this->session->set_flashdata('sl_up_error','true');
											redirect(base_url()."slider");
										 }

					}

      }
			public function add_gallery(){




				$data['description'] = $this->input->post('description');

				      $config['upload_path'] = 'assets/images/gallery/thumb/';
		          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		          $config['file_name'] = time().$_FILES['file2']['name'];
							$this->load->library('upload',$config);
								$this->upload->initialize($config);
								$this->upload->do_upload('file2');
		            $data['thumb_img']=str_replace(' ', '_', $config['file_name']);;

								$config['upload_path'] = 'assets/images/gallery/original/';
			          $config['allowed_types'] = 'jpg|jpeg|png|gif';
			          $config['file_name'] = time().$_FILES['file3']['name'];
								$this->load->library('upload',$config);
									$this->upload->initialize($config);
									$this->upload->do_upload('file3');
			            $data['original_img']=str_replace(' ', '_', $config['file_name']);;
									//echo $this->Login_model->add_gallery($data);

									if($this->Login_model->add_gallery($data)==TRUE){
										$this->session->set_flashdata('gl','true');
											redirect(base_url()."gallery");
									}
									else{
										$this->session->set_flashdata('gl_error','true');
										redirect(base_url()."gallery");
									 }

								// $this->Login_model->add_gallery($data);
								// redirect(base_url()."gallery");

		      }


					public function add_music(){

						$data['music_title'] = $this->input->post('description');
							$data['artist_name'] = $this->input->post('artist_name');

						      $config['upload_path'] = 'assets/music/thumb/';
				          $config['allowed_types'] = 'jpg|jpeg|png|gif';
				          $config['file_name'] = time().$_FILES['file2']['name'];
									$this->load->library('upload',$config);
									$this->upload->initialize($config);
									$this->upload->do_upload('file2');
			            $data['thumb_img']=$config['file_name'];

									$this->load->library('upload',$config);
									$config['upload_path'] = 'assets/music/';
				          $config['allowed_types'] = 'mp3';
									//$config['max_size'] = '102400';
				          //$config['file_name'] = time().$_FILES['file3']['name'];
									$config['file_name'] = time().'music'.".mp3";

									$this->upload->initialize($config);
									$this->upload->do_upload('file3');
			            $data['mp3_file']=$config['file_name'];

									// $this->Login_model->add_music($data);
									// redirect(base_url()."music");
									if($this->Login_model->add_music($data)==TRUE){
										$this->session->set_flashdata('ml','true');
											redirect(base_url()."music");
									}
									else{
										$this->session->set_flashdata('ml_error','true');
										redirect(base_url()."music");
									 }

			}


			public function add_video(){
				$data['video_title'] = $this->input->post('title');
				$str=$this->input->post('link');
				$data['video_link'] = str_replace("watch?v=", "embed/", $str);
				$data['video_date'] = $this->input->post('v_date');
				$data['description'] = $this->input->post('description');
				$data['video_type'] = $this->input->post('v_type');

				if($this->Login_model->add_video($data)==TRUE){
					$this->session->set_flashdata('vl','true');
						redirect(base_url()."video");
				}
				else{
					$this->session->set_flashdata('vl_error','true');
					redirect(base_url()."video");
				 }

				// $this->Login_model->add_video($data);
				// redirect(base_url()."video");
		  }


			public function add_caller_tune(){
				$data['music_id'] = $this->input->post('music');

				$data['provider'] = $this->input->post('provider');
				$data['caller_code'] = $this->input->post('call_code');
				//$data['video_type'] = $this->input->post('v_type');

				// $this->Login_model->add_caller_tune($data);
				// redirect(base_url()."music");

				if($this->Login_model->add_caller_tune($data)==TRUE){
					$this->session->set_flashdata('cl','true');
						redirect(base_url()."music");
				}
				else{
					$this->session->set_flashdata('cl_error','true');
					redirect(base_url()."music");
				 }
		  }


			public function add_download(){
				$data['music_id'] = $this->input->post('music');

				$data['app_name'] = $this->input->post('app_name');
				$data['app_link'] = $this->input->post('app_link');
				//$data['video_type'] = $this->input->post('v_type');

				if($this->Login_model->add_download($data)==TRUE){
					$this->session->set_flashdata('dl','true');
						redirect(base_url()."music");
				}
				else{
					$this->session->set_flashdata('dl_error','true');
					redirect(base_url()."music");
				 }

				// $this->Login_model->add_download($data);
				// redirect(base_url()."music");
			}


			public function update_download(){
				$data['music_id'] = $this->input->post('music1');

				$data['app_name'] = $this->input->post('app_name1');
				$data['app_link'] = $this->input->post('app_link1');
				//$data['video_type'] = $this->input->post('v_type');

				$this->db->where('id', $this->input->post('hid'));

				if($this->db->update('down_link', $data)==TRUE){
					$this->session->set_flashdata('dl_up','true');
						redirect(base_url()."music");
				}
				else{
					$this->session->set_flashdata('dl_up_error','true');
					redirect(base_url()."music");
				 }

			  // $res = $this->db->update('down_link', $data);
				//
				// redirect(base_url()."music");
			}

			public function add_social_link(){

				$data['title1'] = $this->input->post('header1');
					$data['title2'] = $this->input->post('header2');

							$config['upload_path'] = 'assets/images/social_icon/';
							$config['allowed_types'] = 'jpg|jpeg|png|gif';
							$config['file_name'] = time().$_FILES['file1']['name'];
							$this->load->library('upload',$config);
							$this->upload->initialize($config);
							$this->upload->do_upload('file1');
							$data['link1_img']=str_replace(' ', '_', $config['file_name']);

 						//$this->db->insert('social_link', $data);
							// $this->Login_model->add_social($data);
							//  redirect(base_url()."social_link");

							 if($this->Login_model->add_social($data)==TRUE){
			 					$this->session->set_flashdata('so','true');
			 						redirect(base_url()."social_link");
			 				}
			 				else{
			 					$this->session->set_flashdata('so_error','true');
			 					redirect(base_url()."social_link");
			 				 }

						 }


					public function update_social_link(){

					 $data['title1'] = $this->input->post('header3');
					 $data['title2'] = $this->input->post('header4');

					$config['upload_path'] = 'assets/images/social_icon/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = time().$_FILES['file2']['name'];
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					$this->upload->do_upload('file2');
					if($config['file_name']==''){
					$data['link1_img']=$this->input->post('file2_name');
				}else{
					$data['link1_img']=str_replace(' ', '_', $config['file_name']);
				}

				//$this->db->insert('social_link', $data);
						$this->db->where('id', $this->input->post('hid'));

						// $res = $this->db->update('link_tbl', $data);
					 // redirect(base_url()."social_link");
					 if($this->db->update('link_tbl', $data)==TRUE){
						$this->session->set_flashdata('so_up','true');
							redirect(base_url()."social_link");
					}
					else{
						$this->session->set_flashdata('so_up_error','true');
						redirect(base_url()."social_link");
					 }

				 }

				public function add_event(){

					$data['event_title'] = $this->input->post('event_title');
					$data['event_date'] = $this->input->post('event_date');
					$data['event_time'] = $this->input->post('event_time');
					$data['event_time_suffix'] = $this->input->post('event_time_suffix');
					$data['event_place'] = $this->input->post('event_place');


					$config['upload_path'] = 'assets/images/events/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = time().$_FILES['file1']['name'];
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					$this->upload->do_upload('file1');
					$data['event_img']=str_replace(' ', '_', $config['file_name']);
					$data['event_desc'] = $this->input->post('event_desc');

					//$this->db->insert('social_link', $data);
				// $this->Login_model->add_event($data);
				//  redirect(base_url()."event");

				 if($this->Login_model->add_event($data)==TRUE){
					$this->session->set_flashdata('el','true');
						redirect(base_url()."event");
				}
				else{
					$this->session->set_flashdata('el_error','true');
					redirect(base_url()."event");
				 }

			 }
			public function delete_slider(){

		    $id = $this->input->post('id');

				$u = $this->db->get_where('slider', array(
				'id' => $id
			))->result_array();
          unlink('assets/images/slider/'.$u[0]['image']);
		    $this->db->delete('slider', array('id' => $id));

		  }
			public function delete_download(){

		    $id = $this->input->post('id');
		    $this->db->delete('down_link', array('id' => $id));

		  }
			public function delete_gallery(){

		    $id = $this->input->post('id');
				$u = $this->db->get_where('img_gallery', array(
				'id' => $id
			))->result_array();
			unlink('assets/images/gallery/original/'.$u[0]['original_img']);
			unlink('assets/images/gallery/thumb/'.$u[0]['thumb_img']);
		    $this->db->delete('img_gallery', array('id' => $id));

		  }
			public function delete_music(){

		    $id = $this->input->post('id');
		    $this->db->delete('music_tbl', array('id' => $id));

		  }
			public function delete_video(){

		    $id = $this->input->post('id');
		    $this->db->delete('video_tbl', array('id' => $id));

		  }
			public function delete_link(){

		    $id = $this->input->post('id');
				$u = $this->db->get_where('link_tbl', array(
				'id' => $id
			))->result_array();
			unlink('assets/images/social_icon/'.$u[0]['link1_img']);
		    $this->db->delete('link_tbl', array('id' => $id));

		  }
			public function delete_event(){

		    $id = $this->input->post('id');

				$u = $this->db->get_where('event_tbl', array(
				'id' => $id
			))->result_array();
			unlink('assets/images/events/'.$u[0]['event_img']);
		    $this->db->delete('event_tbl', array('id' => $id));

		  }
			public function delete_caller(){

		    $id = $this->input->post('id');
		    $this->db->delete('caller_tbl', array('id' => $id));

		  }

			public function fetch_slider(){

			   //$src=array();
			   $id = $this->input->post('id');
			    //echo $i
			   $slider = $this->Login_model->getslider_byid($id);

				 echo json_encode($slider);

			  }


			// public function send_mail12(){


			// 	$name=$this->input->post('full_name');
			// 	$email_id=$this->input->post('email_id');
			// 	$phone=$this->input->post('phone');
			// 	$query=$this->input->post('query');

			// $this->load->library('email', $config);

			// //$this->email->set_newline("\r\n");

			// $this->email->from($email_id, $name);
			// $this->email->to('sankalpa.bca@gmail.com');
			// //$this->email->cc($email_id);
			// $this->email->subject('Query');

			// $this->email->message('<p>Name :'.$name.'</p><br><p>Phone :'.$phone.'</p><br><p>Query Message :'.$query.'</p>');

			// if (!$this->email->send())
			// echo '0';

			// else

			// echo '1';

			// }

			public function send_mail1(){

				$name=$this->input->post('full_name');
				$email_id=$this->input->post('email_id');
				$phone=$this->input->post('phone');
				$query=$this->input->post('query');

				require 'PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->isSMTP();                                  	// Set mailer to use SMTP
				$mail->Host = 'mail.singersuparnabiswas.com';     	// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                          	// Enable SMTP authentication
				$mail->Username = 'info@singersuparnabiswas.com';	// SMTP username
				$mail->Password = '1234567890'; 					// SMTP password
				$mail->SMTPSecure = 'tls';                         	// Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                 	// TCP port to connect to

				$mail->setFrom('info@singersuparnabiswas.com', $name);
				$mail->addReplyTo('nsuparna@yahoo.com', $name);
				$mail->addAddress('nsuparna@yahoo.com');   			// Add a recipient
				//$mail->addCC($email_id,'Contact You Soon');
				//$mail->addBCC('bcc@example.com');

				$mail->isHTML(true);  // Set email format to HTML

				$bodyContent = '<div style="width:100%;background:#1f7ea2;text-align:center;"><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">'.$name.'</p><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">'.$phone.'</p><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">'.$email_id.'</p><h1 style="padding:20px;font-family: cursive;">'.$query.'</h1></div>';


				$mail->Subject = 'Query Mail';
				$mail->Body    = $bodyContent;

				// foreach($upload_name as $image)
				// {
				// 	//echo $dir.$image[i];
				// 	$mail->addAttachment($dir.$image,rand().'jpg');    // Attachment 1
				// }


				if(!$mail->send()) {
				    echo '<script type="text/javascript">alert("Message Not Sent")</script>';
					//unlink('salary_slip/'.$upload_name);
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
				    echo '<script type="text/javascript">alert("Message Sent Successfully")</script>';
					//unlink('salary_slip/'.$upload_name);
				}
			}

		public function send_mailpass(){

			$this->db->select('password');
			$this->db->from('admin');
			$reault_array = $this->db->get()->result_array();

			$pass=$reault_array[0]['password'];
			//echo $pass;
			require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                   // Set mailer to use SMTP
			$mail->Host = 'mail.singersuparnabiswas.com';                    // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                            // Enable SMTP authentication
			$mail->Username = 'info@singersuparnabiswas.com';          // SMTP username
			$mail->Password = '1234567890'; // SMTP password
			$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                 // TCP port to connect to

			$mail->setFrom('info@singersuparnabiswas.com','Suparna Biswas');
			$mail->addReplyTo('sankalpa.bca@gmail.com', 'Suparna Biswas');
			$mail->addAddress('sankalpa.bca@gmail.com');   // Add a recipient
			//$mail->addCC($email_id,'Contact You Soon');
			//$mail->addBCC('bcc@example.com');

			$mail->isHTML(true);  // Set email format to HTML

			$bodyContent = '<div style="width:100%;background:#1f7ea2;text-align:center;"><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">Your Password</p><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">'.$pass.'</p></div>';


			$mail->Subject = 'Forgot Password';
			$mail->Body    = $bodyContent;

			if(!$mail->send()) {
				echo '<script type="text/javascript">alert("Password Not Sent")</script>';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo '<script type="text/javascript">alert("Password Sent Successfully")</script>';
			}
		}


		public function send_verification_code(){
			$code=rand();


			require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                   // Set mailer to use SMTP
			$mail->Host = 'mail.singersuparnabiswas.com';                    // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                            // Enable SMTP authentication
			$mail->Username = 'info@singersuparnabiswas.com';          // SMTP username
			$mail->Password = '1234567890'; // SMTP password
			$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                 // TCP port to connect to

			$mail->setFrom('info@singersuparnabiswas.com','Suparna Biswas');
			$mail->addReplyTo('sankalpa.bca@gmail.com', 'Suparna Biswas');
			$mail->addAddress('sankalpa.bca@gmail.com');   // Add a recipient
			//$mail->addCC($email_id,'Contact You Soon');
			//$mail->addBCC('bcc@example.com');

			$mail->isHTML(true);  // Set email format to HTML

			$bodyContent = '<div style="width:100%;background:#1f7ea2;text-align:center;"><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">Your Verification Code</p><p style="text-align: center;font-family: fantasy;font-size: 30px;padding: 10px;margin:0px;color:#fff;">'.$code.'</p></div>';


			$mail->Subject = 'Verification Code';
			$mail->Body    = $bodyContent;

			if(!$mail->send()) {
				echo '<script type="text/javascript">alert("Password Not Sent")</script>';
				echo 'Mailer Error: ' . $mail->ErrorInfo;

			} else {
				echo '<script type="text/javascript">alert("Password Sent Successfully")</script>';
				$data['code']=$code;
				$this->db->insert('veri_code',$data);
			}
		}

		public function change_pass1(){
			$this->db->select('code');
			$this->db->from('veri_code');
			$reault_array = $this->db->get()->result_array();

			$pass=$reault_array[0]['code'];
			if($pass==$this->input->post('c_code')){
				$data['password']=$this->input->post('re_pass');
				$this->db->where('uid','admin');
				$this->db->update('admin',$data);
				$this->db->delete('veri_code');
				echo '1';

			}else{
				echo '0';
			}
		}


		public function update_biography(){

			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('editor1');

			$this->db->select('*');
 		 $this->db->from('biography');
 		 $reault_array = $this->db->get()->result_array();

			if($_FILES['file1']['name']){
       unlink('assets/images/'.$reault_array[0]['image']);
		   $config['upload_path'] = 'assets/images/';
		   $config['allowed_types'] = 'jpg|jpeg|png|gif';
		   $config['file_name'] = time().$_FILES['file1']['name'];
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $this->upload->do_upload('file1');

		   $data['image']=$config['file_name'];

	 }

	   		//$this->db->insert('social_link', $data);
			$this->db->where('id', 1);
			// $res = $this->db->update('link_tbl', $data);
			// redirect(base_url()."social_link");
			if($this->db->update('biography', $data)==TRUE){
			   $this->session->set_flashdata('so_up','true');
				redirect(base_url()."biography");
		   }
		   else{
			   $this->session->set_flashdata('so_up_error','true');
			   redirect(base_url()."biography");
			}

		}

		public function down_link_music()
	     {
				 $arr=array();
				 $this->db->select('*');
				 $this->db->from('caller_tbl as clb');
				 $this->db->join('provider as pv','clb.provider=pv.id', 'INNER');
				 $this->db->where('clb.music_id',$this->input->post('id'));

	        	$q=$this->db->get();

	          if($q->num_rows() > 0) {
	    			foreach (($q->result()) as $row) {
	    				$data[] = $row;
	    			}

	    			$arr['a1']=$data;//echo json_encode($data);
	    	   	}

						$this->db->select('*');
	 				 $this->db->from('down_link as dl');
	 				 $this->db->join('music_tbl as mt','dl.music_id=mt.id', 'INNER');
	 				 $this->db->where('mt.id',$this->input->post('id'));

	 	        	$q1=$this->db->get();

	 	          if($q1->num_rows() > 0) {
	 	    			foreach (($q1->result()) as $row) {
	 	    				$data1[] = $row;
	 	    			}

	 	    			$arr['a2']=$data1;
	 	    	   	}

           echo json_encode($arr);

					}


}

?>
