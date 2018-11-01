<?php namespace App\Controllers;

use App\Models\UerModel;
use CodeIgniter\Controller;
use App\Entities\User;

class equipment_controller extends Controller
{
    protected $helpers = ['url', 'form'];
	
	public function index()
	{
		
		$db      = \Config\Database::connect();
		$builder = $db->table('equipment');
		$query   = $builder->get();
		$rows = $query->getResult();

		$elements_per_page = 10;
		$number_of_page = ceil(count($rows) / $elements_per_page);

		if (!isset($_GET["page"])) {
			$page = 1;
		} else {
			$page = $_GET["page"];
			if ($page < 1 || $page > $number_of_page) {
				$page = 1;
			} else {
				$page = $_GET["page"];
			}
		}

		$start_element = ($page - 1) * $elements_per_page;
		$query_limit = $builder->get($elements_per_page, $start_element)->getResult();

    	$data = [
			'rows'  => $rows,
			'rows_limit' => $query_limit,
			'number_of_page' => $number_of_page,
			'page' => $page
        ];
     
	    echo view('equipment',$data);
	}


	//--------------------------------------------------------------------

}
