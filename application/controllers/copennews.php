<?php 
if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class copennews extends CI_Controller {
		public function index(){

			$this->home();
		}

		public function home(){
			$this->load->model("mopennews");
			$data["results"] = $this->mopennews->getData("home");
			$this->load->view("header");
			//$this->load->view("header2");
			$this->load->view("opennews_home", $data);
			$this->load->view("footer");
 
		$this->load->helper('directory'); //load directory helper
		$dir = "uploads/images/"; // Your Path to folder
		$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
	}


       public function facebook1(){
      //      $this->load->model("mopennews");
    //        $data["results"] = $this->mopennews->getData("home");
  //          $this->load->view("users/");
            //$this->load->view("header2");
  //          $this->load->view("opennews_home", $data);
//            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

		public function article(){
			$this->load->model("mopennews");
			$data["results"] = $this->mopennews->getData("article");
			$this->load->view("header");
			//$this->load->view("header2");
			$this->load->view("opennews_article_page", $data);
			$this->load->view("footer");
 
		$this->load->helper('directory'); //load directory helper
		$dir = "uploads/images/"; // Your Path to folder
		$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
	}

        public function article_page(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getArticle("postId");
            $this->load->view("header");
            //$this->load->view("header2");
            $this->load->view("article_page1", $data);
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

        public function article_1(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getData("article");
            $this->load->view("header");
            //$this->load->view("header2");
            $this->load->view("opennews_article_page_1", $data);
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }
        public function article_2(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getData("article");
            $this->load->view("header");
            //$this->load->view("header2");
            $this->load->view("opennews_article_page_2", $data);
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }
        public function article_3(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getData("article");
            $this->load->view("header");
            //$this->load->view("header2");
            $this->load->view("opennews_article_page_3", $data);
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }
        public function article_4(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getData("article");
            $this->load->view("header");
            //$this->load->view("header2");
            $this->load->view("opennews_article_page_4", $data);
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

   /* public function comments(){
        $userComment = array();
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getComment("comments");
        //if($this->input->post('commentSubmit')){
        //$userComment = array(
          //      'comments' => strip_tags($this->input->post('comments')),
            //    );
        $comments = $this->input->post('commentSubmit');
         $commentSubmit = $this->mopennews->addComment($comments);
        
    
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    //}
        public function comments() {
        $this->load->model( 'user' );
        if ( ! $this->user->isLoggedIn() ) {
            $response['error'] = "Not logged in.";
            exit( json_encode( $response ) );
        }

        if ( $this->input->is_ajax_request() ) {
            
            $response = array();

            if( isset( $_POST['comment'] ) ) {

                $comment_content = htmlentities( strip_tags ( $this->input->post( 'comment' ) ) );
                $data['comment_content'] = ( strlen( $comment_content ) > 5000 ) ? substr( $comment_content, 0, 5000 ) : $comment_content;
                $data['comment_type'] = $this->input->post( 'comment_type', true );
                $data['post_id'] = $this->input->post( 'post_id', true );

                if ( isset( $_POST['comment_parent'] ) )
                    $data['comment_parent'] = $this->input->post( 'comment_parent', true );
                else
                    $data['comment_parent'] = 0;


                $dateTime = new DateTime( 'now', new DateTimeZone( 'UTC' ) );
                $data['comment_created'] = $dateTime->format( 'Y-m-d H:i:s' );

                $data['user_id'] = $_SESSION['user_id'];

                $data['comment_approved'] = 0;
                if ( $_SESSION['user_role'] >= USER_ROLE_EDITOR )
                    $data['comment_approved'] = 1;

                $response = $this->comment_model->addComment( $data );

                if ( $response )
                    exit( json_encode( $response ) );
                else
                    exit( json_encode( array( 'success' => false ) ) );
            }
        }
    }


		public function international(){
		$this->load->model("mopennews");
			$data["results"] = $this->mopennews->getData("international");
		$this->load->view("header");
		//$this->load->view("header2");
			$this->load->view("opennews_international_page",$data);
			$this->load->view("footer");

			$this->load->helper('directory'); //load directory helper
		$dir = "uploads/images/"; // Your Path to folder
		$map = directory_map($dir);
		}


        public function oauth_googleplus(){
        $this->load->library("Googleplus");
      //  $this->load->view("header");
        //$this->load->view("header2");
        //    $this->load->view("opennews_international_page",$data);
          //  $this->load->view("footer");

            $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir);
        }


        public function oauth_facebook(){
        $this->load->view("users/facbook_user");    
       // $this->load->library("facebook-php-sdk/Authentication/OAuth2Client");
        //$this->load->library("facebook-php-sdk/autoload");
       // $this->load->library("facebook-php-sdk/Facebook");

            $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir);
        }
        function cast_vote(){
            $this->load->model('mopennews');
            $this->load->view('opennews_polling');
         $rating = $this->input->post('user_vote');
         $users_vote = $this->mopennews->add_vote_user($rating);
        // redirect('copennews/vote_success');
         //$this->index();
    }
        public function get_vote(){
            $this->load->model("mopennews");
            $data["results"] = $this->mopennews->getVotes();
            $this->load->view("opennews_polling", $data);
     
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

		public function location(){
		//$this->load->model("mopennews");
		//	$data["results"] = $this->mopennews->getData("location");
			//$this->load->view("header");
			$this->load->view("opennews_location");
			//$this->load->view("footer");

			$this->load->helper('directory'); //load directory helper
		$dir = "uploads/images/"; // Your Path to folder
		$map = directory_map($dir);
		}
		public function temperature(){
		//$this->load->model("mopennews");
		//	$data["results"] = $this->mopennews->getData("location");
			$this->load->view("header");
			$this->load->view("header2");
			$this->load->view("WeatherAndForecast");
			$this->load->view("footer");

			$this->load->helper('directory'); //load directory helper
		$dir = "uploads/images/"; // Your Path to folder
		$map = directory_map($dir);
		}
	/*	public function createUser()
	{
		$this->load->helper('url');
		$this->load->model('mopennews','',TRUE);
		$this->mopennews->addStudent($_POST);
		redirect('opennews_login_page','refresh');
	}*/
	 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('mopennews');
    }

	 public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['mopennews'] = $this->mopennews->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/opennews_account_page', $data);
        }else{
            redirect('copennews/login');
        }
    }
     /*
     * User login
     */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->mopennews->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('copennews/home');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('users/opennews_login_page', $data);
    }
    
    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                //'gender' => $this->input->post('gender'),
                //'phone' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->mopennews->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('copennews/verify');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['mopennews'] = $userData;
        //load the view
        $this->load->view('users/opennews_register_page', $data);
    }
        public function emailVerify(){
            $this->load->model("mopennews");
            $this->load->view("header");
            $this->load->view("");
            $this->load->view("footer");
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

    function verify($verificationText=NULL){  

        $this->load->model('Home_model');
        $this->load->model('Email_model');

  $noRecords = $this->Home_model->verifyEmailAddress($verificationText);  
  if ($noRecords > 0){
   $error = array( 'success' => "Email Verified Successfully!"); 
  }else{
   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
  }
  $data['errormsg'] = $error; 
  $this->load->view('users/opennews_login_page', $data);
  //redirect('copennews/login');
}
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('copennews/home');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->mopennews->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
?>