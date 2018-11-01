<?php namespace App\Models;

class PaginationModel extends Model {


    function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->library('pagination');

    }
     function paginationCreate($paging_url,$total_rows)  
	{  
            //pagination
		$config['base_url'] = $paging_url;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = PER_PAGE;
		$config['last_link'] = 'Last';
 
		//Pre
		$config['prev_tag_open'] = '<li >';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '«';

		//Next
		$config['next_tag_open'] = '<li >';
		$config['next_tag_close'] = '</li>';
		$config['next_link'] = '»';

		//Current
		$config['cur_tag_open'] = '<li>';
		$config['cur_tag_close'] = '</a></li>';

		//page num
		$config['num_tag_open'] = '<li >';
		$config['num_tag_close'] = '</li>';

		//
		$config['attributes'] = array('class' => 'page-link');

		//
		$config['full_tag_open'] = '<ul >';
		$config['full_tag_close'] = '</ul>';



		
		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();

            return $pagination;  
        } 

   


}