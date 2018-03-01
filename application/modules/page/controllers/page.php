<?php
class Page extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
		//$this->load->model('home_model', 'webvfMD');	
		// $loggedIn = $this->session->userdata('logged_in');
		// if($loggedIn == NULL){
			// return redirect('login');
		// }return true;	
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));		
	}
	
	public function index(){
		$title = "HVAC services| hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quat gio cong nghiep, hvacservices";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quat gio cong nghiep, hvacservices";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		$this->parser->parse('header',$data);
		$service_check = $this->callbuyMD->service_enable();
		$service = $service_check[0]['service_enable']; 
		if($service == 1){
				$this->parser->parse('index_page_news',$data);
		}else{
				$this->parser->parse('index_page',$data);
		}
	
		$this->parser->parse('footer',$data);
		
	}	
	public function check_login(){
		$username = $this->input->post('nameuser');
		$passwords = $this->input->post('passwords');
		$mahoa = md5($passwords);

		$check_logins = $this->callbuyMD->check_login_user($username,$mahoa);
		
		if($check_logins == true){
				foreach($check_logins as $row){}
				$newdata = array(
				'id_user' 	 		 => $row['id_user'],
				'nameuser'    		 => $row['nameuser'],
				'id_pem'      => $row['id_pem'],
				'logged_in'		 => TRUE
				);
				$this->session->set_userdata($newdata);
				redirect("/admin");
			
		}else{
			redirect("/page/login");
		}
		
	}
	public function login(){
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('login',$data);
		$this->parser->parse('footer',$data);
		
	}
	
	public function warring(){
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quat cong nghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quat cong nghiep";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('warring',$data);
		$this->parser->parse('footer',$data);
		
	}
	
	public function information($id){
		
		$jinformation = $this->callbuyMD->get_information($id);
		
		if($jinformation == NULL){
			redirect("/page/warring");
		}
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		'keywords' => $keywords,
		'jinformation' => $jinformation,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('index_content_service',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function contact(){
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('contact_us',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function news(){
		
	
		$title = "News Tin Tức Blog hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Tin Tức Blog Thông Tin VềFave viet nam , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Tin Tức Blog Thông Tin Về HVAC Service , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('index_news',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function view_news($id){
		if($id == NULL){
			redirect("/page/warring");
		}
		$view_news = $this->callbuyMD->get_view_news($id);
		foreach($view_news as $valueview_news){}
		if($view_news == NULL){
			redirect("/page/warring");
		}
		$title = $valueview_news['name_en']."News Tin Tức Blog hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = $valueview_news['description'];
		$keywords = $valueview_news['keywords'];
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		'view_news' => $view_news,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('index_news_detail',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function detail($id){
		if($id == NULL){
			redirect("/page/warring");
		}
		$detail = $this->callbuyMD->get_detail_list_product($id);
		if($detail == NULL){
			redirect("/page/warring");
		}
		foreach($detail as $valuedetail){}
		$title = $valuedetail['name_products']." hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = $valuedetail['description'];
		$keywords = $valuedetail['keywords'];
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		'detail' => $detail,
		);
		$this->parser->parse('header',$data);
		$this->parser->parse('index_detail',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function customer_contact(){
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');
		$datetime = time();
		$timedate = date("d-m-Y H:i:s",$datetime);
		
		$data = array(
			'fullname'=> $fullname,
			'email'=> $email,
			'phone'=> $phone,
			'message'=> $message,
			'timedate'=> $timedate,
		
		);
		$install = $this->db->insert('tbl_customer_contact', $data); 
		if($install ==true){
			$info = "hvacservices.com.vn";
			$this->load->library('email');
			$subject = 'Thông Báo Tư Vấn hệ Thống Quạt Lúc '.$timedate.' Cho Khách Hàng'.$phone.'';
			$body ='Cảm Ơn Quý Khách hàng! Gửi Tới Tư Vấn Hệ Thống Quạt Gió Và Thông Hơi Chúng Tôi sẽ Có Người Liên Lạc Sau Khi Bạn Nhận Được Email Thông báo Này
			Tên Khách Hàng:  '.$fullname.'Số Điện Thoại: '.$phone.' Email Liên Lạc '.$email.' Nếu Mọi Thông Tin Điền Là Đúng
			Một Lần Nữa Thay Mặt Nhà Cung Cấp Cảm Ơn Quý Khách. Vui Lòng Không Trả Lời bằng Vào Email Này Nếu Bạn Có Nhu Cầu Email Vui Lòng Gửi Về  quatgiocn@gmail.com</br>
			* Nếu khách hàng muốn Dowload Về Chi Tiết Categories Vui Lòng <a style="color: red;" href="http://api.hvacservices.com.vn/dowload/"> Nhấn Vào Đây </a>. 
			Thank your!
			';
			$result = $this->email->from('system@hvacservices.com.vn')->to($email)->cc('hvacservices.com.vn@gmail.com')->cc('hvacservices.com.vn@gmail.com')->cc('nhantin@hvacservices.com.vn')->subject($subject)->message($body)->send();
		
				redirect("/page/thank");
			//}		
			
		}
		
	}
	public function thank(){
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$data = array(
			'title' => $title,
			'description' => $description,
			'keywords' => $keywords,
			);
		$this->parser->parse('header',$data);
		$this->parser->parse('thankyou',$data);
		$this->parser->parse('footer',$data);
	}
  
	public function product($id){
		$title = "hvacservices.com.vn |HVAC Service | hvacservices.com.vn";
		$description = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$keywords = "Quạt gió công nghiệp , hvacservices.com.vn, hệ thống làm mát, quatgiocongnghiep, quatconnghiep";
		$get_list_product = $this->callbuyMD->get_list_product($id);
		if($get_list_product == NULL){
			redirect("/page/warring");
		}
		$get_danhmuc = $this->callbuyMD->get_danhmuc($id);
		
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		'get_list_product' => $get_list_product,
		'get_danhmuc' => $get_danhmuc,
		);
		
		$this->parser->parse('header',$data);
		$this->parser->parse('index_list',$data);
		$this->parser->parse('footer',$data);
	}
	
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>