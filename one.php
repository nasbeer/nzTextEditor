<?php



//$url='https://rest.coinapi.io/v1/exchanges/';
$curl = curl_init();
//curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt_array($curl, [
//	CURLOPT_URL => "https://coingecko.p.rapidapi.com/simple/price?ids=1&vs_currencies=USD",
    CURLOPT_URL => "http://rest.coinapi.io/v1/exchangerate/BTC/USD",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		//"x-rapidapi-host: coingecko.p.rapidapi.com",
		'X-CoinAPI-Key: A660A0D9-18B3-45B7-8DF2-D19C2D44ED12'
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    echo "<pre>"; print_r($response); echo "</pre>";
	//echo $response;
}

// $url = "https://rest.coinapi.io/v1/exchanges/";   
// $ch = curl_init();   
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
// curl_setopt($ch, CURLOPT_URL, $url);   
// curl_setopt($ch, CURLOPT_HEADER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'X-CoinAPI-Key: A660A0D9-18B3-45B7-8DF2-D19C2D44ED12'
// )); 
// echo $ch;
// $res = curl_exec($ch);   
// echo $res;   

// $url='https://rest.coinapi.io/v1/exchanges/';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HTTPHEADER,array('X-CoinAPI-Key: A660A0D9-18B3-45B7-8DF2-D19C2D44ED12'));
// $response = curl_exec($ch);
// echo "<pre>",'print_r($response)'."</pre>";
// curl_close($ch);
?>
<?php
//		$data = $this->College_model->getCollegesAcademicChair();
                // $collData=array();
		// try {
		// $curl_handle=curl_init();
		// curl_setopt($curl_handle,CURLOPT_URL,'https://rest.coinapi.io/v1/exchanges');
		// curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		// curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		// curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array(
// 'X-CoinAPI-Key: ' . 'A660A0D9-18B3-45B7-8DF2-D19C2D44ED12'
// ));
		// $buffer = curl_exec($curl_handle);
		// curl_close($curl_handle);
			// if (empty($buffer)){
				// print "Something went wrong.";
			// }else{
				// $data=json_decode($buffer);
				// // foreach($data as $row){
					// // $collData[]=array(
					// // 'code'=>$row->Code,
					// // 'college_name'=>$row->Description
					// // );
				// // }
				// // echo '<pre>';
				// // print_r($collData);
				// // $this->db->truncate('college');
				// // if($this->db->insert_batch('college',$collData)){
					// // echo 'College sync done successfully';
				// // }
			// }
		 // } catch (Exception $e) {
            // return false;
        // }
	 // print_r($collData);
		// //return $this->json( $collData );

	
	?>