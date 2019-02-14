<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
 *
 * Name : Web Controller
 * Date : 2016/10/23
 * Auther : A.shokri
 * Description : The Controller From Load Main Website Page.
 *
*/

class Web extends CI_Controller
{
	public function index()
	{
		$data = array(
			'url'=>base_url(),
			'title'=>'پروفایل آنلاین ایرانیان'
			);
		$this->load->view('site/header',$data);
		$this->load->view('site/home',$data);
		$this->load->view('site/footer',$data);
	}

	public function register($notice=0)
	{
		$captcha = array(
	        'img_path'      => './captcha/',
	        'img_url'       => 'http://localhost/captcha/',
	        'word_length'   => 5,
	        'colors'        => array(
	                'background' => array(255, 255, 255),
                	'border' => array(255, 255, 255),
                	'text' => array(0, 0, 0),
                	'grid' => array(255, 40, 40)
	        )
		);
		$cap = create_captcha($captcha);
		$data = array(
			'title'=>'ثبت نام در',
			'url'=>base_url(),
			'captcha'=>$cap,
			'notice'=>$notice
			);
		
		$capcha_data = array(
		        'captcha_time'  => $cap['time'],
		        'ip_address'    => $this->input->ip_address(),
		        'word'          => $cap['word']
		);
		$this->load->model('captcha_model');
		$this->captcha_model->insert($capcha_data);

		$this->load->view('site/form_header',$data);
		$this->load->view('site/register',$data);
	}

	public function login($notice=0)
	{
		$login = $this->session->userdata('login');
		
		if(!empty($login))
		{
			if($login==true)
			{
				redirect(base_url() . 'panel/index');
			}
		}

		$captcha = array(
	        'img_path'      => './captcha/',
	        'img_url'       => 'http://localhost/captcha/',
	        'word_length'   => 5,
	        'colors'        => array(
	                'background' => array(255, 255, 255),
                	'border' => array(255, 255, 255),
                	'text' => array(0, 0, 0),
                	'grid' => array(255, 40, 40)
	        )
		);
		$cap = create_captcha($captcha);
		$data = array(
			'title'=>'ورود به',
			'url'=>base_url(),
			'captcha'=>$cap,
			'notice'=>$notice
			);

		$capcha_data = array(
		        'captcha_time'  => $cap['time'],
		        'ip_address'    => $this->input->ip_address(),
		        'word'          => $cap['word']
		);
		$this->load->model('captcha_model');
		$this->captcha_model->insert($capcha_data);

		$this->load->view('site/form_header',$data);
		$this->load->view('site/login',$data);
	}

	public function forget($notice=0)
	{
		$captcha = array(
	        'img_path'      => './captcha/',
	        'img_url'       => 'http://localhost/captcha/',
	        'word_length'   => 5,
	        'colors'        => array(
	                'background' => array(255, 255, 255),
                	'border' => array(255, 255, 255),
                	'text' => array(0, 0, 0),
                	'grid' => array(255, 40, 40)
	        )
		);
		$cap = create_captcha($captcha);
		$data = array(
			'title'=>'فراموشی رمز عبور',
			'url'=>base_url(),
			'captcha'=>$cap,
			'notice'=>$notice
			);

		$capcha_data = array(
		        'captcha_time'  => $cap['time'],
		        'ip_address'    => $this->input->ip_address(),
		        'word'          => $cap['word']
		);
		$this->load->model('captcha_model');
		$this->captcha_model->insert($capcha_data);

		$this->load->view('site/form_header',$data);
		$this->load->view('site/forget',$data);
	}

	public function rules()
	{
		$data = array(
			'url'=>base_url(),
			'title'=>'پروفایل آنلاین ایرانیان - قوانین'
			);
		$this->load->view('site/header',$data);
		$this->load->view('site/rules',$data);
		$this->load->view('site/footer',$data);
	}

	public function about()
	{
		$data = array(
			'url'=>base_url(),
			'title'=>'پروفایل آنلاین ایرانیان - درباره ما'
			);
		$this->load->view('site/header',$data);
		$this->load->view('site/about',$data);
		$this->load->view('site/footer',$data);
	}
}

?>