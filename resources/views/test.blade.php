
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 




	$arr1 = [	
		['id' => 1, 'name' => 'sport'],
		['id' => 2, 'name' => 'food']
	];
	$arr2 = [
		['id'=>1,'title'=>'UEFA Leage Champ','category'=>1],
		['id'=>2,'title'=>'Piala Sudirman','category'=>1],
		['id'=>3,'title'=>'10 Restoran Enak','category'=>2],
		['id'=>4,'title'=>'Final F1','category'=>1],
		['id'=>5,'title'=>'Cara Masak Kue','category'=>2]
	];
	$sport=[];
	$food=[];
	$join=[];


	foreach ($arr2 as $key => $val) {
		// if () {
		// 	# code...
		// }
		echo "<pre>";
		print_r($val['title']);
		echo "</pre>";
		// foreach ($val as $key2 => $val2) {
		// 	// if()
		// 	echo "<pre>";
		// 		print_r($val2);
		// 		print_r("<br>");
		// 		// print_r("value : ".$val2);
		// 	echo "</pre>";
		// 	// if ($value['category']==1) {
		// 	// 	$sport+=$value;
		// 	// }
		// 	// else if($value['category']==2){
		// 	// 	$food+=$value;
		// 	// };
		// };
		// echo "<pre>";
		// print_r($sport);
		// echo "</pre>";
	};

	?>
</body>
</html>