<html>
  <head>
    <script src="js/vendors/jquery/jquery.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
  </head>
  <body>
  <?php
  
      $email = '';
      $amount = '';
      $ref = '';
      
      if (isset($_POST) && !empty($_POST)) {
      
        if (isset($_POST["hash"]) && isset($_POST["email"]) && !empty($_POST["email"]) && 
            isset($_POST["amount"]) && !empty($_POST["amount"])  && 
            isset($_POST["ref"]) && !empty($_POST["ref"])){

              $email = $_POST["email"];
              $amount = $_POST["amount"];
              $ref = $_POST["ref"];
              $original_hash = $_POST["hash"];

              $to_hash = "Itma@ZxN3Q8R%%K2RKxSJroDAsBUuK" . $amount . $email . $ref;

              $hashed = hash('sha512', $to_hash);

              if($hashed != $original_hash) {

                echo 'Signature Validation Failed.';
                return;

              }
              
          } else {
              
              echo 'Missing mandatory parameters';
              return;
          }

      } else if(isset($_GET) && !empty($_GET)) {

        if (isset($_GET["hash"]) && isset($_GET["email"]) && !empty($_GET["email"]) && 
            isset($_GET["amount"]) && !empty($_GET["amount"])  && 
            isset($_GET["ref"]) && !empty($_GET["ref"])){
          
                $email = $_GET["email"];
                $amount = $_GET["amount"];
                $ref = $_GET["ref"];
                $original_hash = $_GET["hash"];

                $to_hash = "Itma@ZxN3Q8R%%K2RKxSJroDAsBUuK" . $amount . $email . $ref;

                $hashed = hash('sha512', $to_hash);

                if($hashed != $original_hash) {

                  echo 'Signature Validation Failed.';
                  return;

                }
         
          } else {
              
              echo 'Missing mandatory parameters';
              return;
          }
                 
       
      } else {

          echo 'Missing mandatory parameters';
           return;
      }
  ?>
  
  <div id="paystackEmbedContainerMain" style="margin-left:30%;margin-right:30%;">
    <div id="paystackEmbedContainer"></div> 
  </div>
  <script type="text/javascript">
  
         var mail = "<?php echo $email; ?>";
         var amount = "<?php echo $amount; ?>";
         var reference = "<?php echo $ref; ?>";
      
         PaystackPop.setup({
         key: 'pk_live_be65d173d1410877255510d53a6564651ab0cc85',
         email: mail,
         amount: amount,
         ref: reference,
         container: 'paystackEmbedContainer',
         callback: function(response){
              alert('Successful. Transaction ref is ' +response.reference +'. Go back to game?');
	      window.close();
          },
        });
      
  </script>    
  </body>
</html>



