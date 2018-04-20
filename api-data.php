<?php

	/*
	 Here, I simply hardcode the data.
	 In a real system, the data should be read from a file or database
	*/
	
	$politicians = [
		[
			'name' => 'Mahathir Mohamad',
			'party' => 'PPBM',
		],
		[
			'name' => 'Najib Razak',
			'party' => 'BN',
		],
		[
			'name' => 'Lim Guan Eng',
			'party' => 'DAP',
		],
		[
			'name' => 'Mohammad Sabu',
			'party' => 'AMANAH',
		],
		[
			'name' => 'Tony Pua',
			'party' => 'DAP',
		],
	];
	
	header('Content-Type: application/json');
	echo json_encode($politicians);