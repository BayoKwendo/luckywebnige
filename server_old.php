<?php
 

if (isset($_POST)){
	//echo "post";
  $msisdn = $_REQUEST['msisdn'];
 $link="http://169.50.117.71:5004/luckybox/web";
 //$phone_number="254722112256";
 $signature=hash('sha512', $msisdn."P@s5w0rd_5@lt");
 $curl = curl_init();
 // echo $signature;

 $data = array("msisdn" => $msisdn);                                                                    
 $data_string = json_encode($data);                                                                                   
                                                                                                                      
 $curl = curl_init($link);                                                                      
 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
 curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);                                                                  
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                      
 curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
     'Content-Type: application/json',
     'Content-Length: ' . strlen($data_string),
       "Signature:".$signature                                                                       
 ));  

      $response = curl_exec($curl);
      $err = curl_error($curl);
      echo $err;
      curl_close($curl);
      //echo $response;
	//die();

  //header("refresh:3;url=Location :index.html"); // really should be a fully qualified URI
  echo '<script>alert("Welcome to luckybox.You will receive a notification on your phone shortly");</script>';
  echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
  

      

}else{
	echo "error";
	//redirect("index.html");
}



 
      
 //do our stuff and refresh page
 //header("Location:index.html");
// }



?>

