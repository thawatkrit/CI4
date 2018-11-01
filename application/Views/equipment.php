<!doctype html>
<html>
<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 5px;
		text-align: left;
	}
	img {
		width: 10%;
	}
	a {
		margin-right: 20px;
	}
</style> 
	<head>
		<title>Equipment</title>
	</head>
	<body>
		<h1>Equipment</h1>
		<a href="#"><p>Add Equipment</p></a>
		<table style="width:80%">
			<thead>
			  	<tr>
				    <th>Name</th>
				    <th>Detail</th>
				    <th>Image</th>
				    <th>Remark</th>
				    <th colspan="2">Manage</th>
			  	</tr>
		  	</thead>
		  	<tbody>
			    <?php
				    foreach ($rows_limit as $row) {
				    	$html = "";
						$html .=  "<tr>									";
						$html .=  "  <td>{$row->equipment_name}</td>	";
						$html .=  "  <td>{$row->equipment_detail}</td>	";
						$html .=  "  <td><img src=\"data:image/jpeg;base64,". base64_encode($row->equipment_img) . "\"/></td>";
						$html .=  "  <td>{$row->remark}</td>			";
						$html .=  "  <td><a href=\"#\">Edit</a></td>  	";
						$html .=  "  <td><a href=\"#example.php/?del={$row->id}\">Delete</a></td> 	";
						$html .=  "</tr>								";
						print $html;
					}
				?>
			</tbody>
		</table>
		<?php
			$back_page = $page ;
			$next_page = $page ;
			if ($page > 1) {
				$back_page = $page - 1;
			} else {
				$back_page = $page ;
			}
			if ($page < $number_of_page) {
				$next_page = $page + 1;
			} else {
				$next_page = $page ;
			}
			
			// echo $_SERVER["REQUEST_URI"] . "<br/>";
			// echo $_SERVER["SCRIPT_NAME"] . "<br/>";
			// echo $_SERVER["SCRIPT_FILENAME"] . "<br/>";
			// echo $_SERVER["PHP_SELF"] . "<br/>";
			// echo $_SERVER["REMOTE_ADDR"] . "<br/>";
			// // echo $_SERVER["REMOTE_HOST"] . "<br/>";
			// echo $_SERVER["REMOTE_PORT"] . "<br/>";

			echo "<a href=\"". $_SERVER["PHP_SELF"] . "?page=$back_page\"><</a>";
			for ($page = 1; $page <= $number_of_page; $page++) {
				echo "<a href=\"". $_SERVER["PHP_SELF"] . "?page=$page\">$page</a>";
			}
			echo "<a href=\"". $_SERVER["PHP_SELF"] . "?page=$next_page\">></a>";
		?>
	</body>
</html>
</html>