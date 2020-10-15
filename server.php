  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
if (isset($_POST)){

 
    $name = $_REQUEST['name'];
    $platform = 'web';
    $msisdn = $_REQUEST['msisdn'];
    $account = $_REQUEST['account'];
    $code =  $_REQUEST['code'];
    $email = $_REQUEST['email'];
    $salt = 'P@s5w0rd_5@lt';
    $concat_data=$msisdn.$name.$salt.$account.$code.$email;
    $signature=hash('sha512', $concat_data);
     
    $link="http://169.50.117.71:5004/luckybox/register";
    //$phone_number="254722112256";
    #$signature=hash('sha512', $msisdn."P@s5w0rd_5@lt");
    $curl = curl_init();
    // echo $signature;
    
    #$data = array("msisdn" => $msisdn);  
    $data = array(
      "msisdn" => $msisdn,
      "name"=>$name,
      "platform"=>$platform,
      "msisdn"=>$msisdn,
      "account"=>$account,
      "code"=>$code,
      "email"=>$email
    
      );                                                                    
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
          //echo $err;
          curl_close($curl);
       
          $response = json_decode($response, true);
          $code = $response['code'];
          $error = $response['error'];
          $status = $response['status'];
      echo '<script>alert("Welcome to luckybox.We are registering you");</script>'.$error;
            
        if($status=='failed')
              {
                echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
                 echo  '<div class="alert alert-success">
                  <strong>"FAILED: Sorry there was an error: "'.$response['error'].'
                          </div>';
              }
        else
             echo  '<div class="alert alert-success">
                      <strong>"Welcome, registration successful: "'.$response['status'].'
                    </div>';
      
        //echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"."error:".$status;
  }

?>

