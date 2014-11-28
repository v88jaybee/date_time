<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller {

	public function main()
	{
		$date_value = date("F d, Y");
		$time_value = date("h:i A");
		$date_time['date_time'] = array(
			'date' => $date_value,
			'time' => $time_value
		);
		$this->load->view('date_time_display',$date_time);
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */