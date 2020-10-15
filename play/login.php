<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <div style="position: relative; left: 0; top: 0;">
        <div id="center">
            <div>
                <img src="/public/assets/img/web/lognsignup/logo.png" class="img-fluid logo"/>
            </div>

            <div class="form">

                <form method="POST" action="/core/play/signin.php">
                  <div class="form-group inmage">
                    <img src="/public/assets/img/web/lognsignup/text.png" alt="" class="img-fluid">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Username" required="required">
                  </div>
                  <div class="form-group inmage">
                    <img src="/public/assets/img/web/lognsignup/text.png" alt="" class="img-fluid">
                    <input type="password" class="form-control" id="pin" name="pin" placeholder="Password" required="required">
                  </div>

                  <div class="row buttons">
                        <div class="col">
                            <button type="submit"><img src="/public/assets/img/web/lognsignup/login1.fw.png" alt="" class="img-fluid"></button>
                            <!-- <button type="button"  onclick="login()"><img src="/public/assets/img/web/lognsignup/login1.fw.png" alt=""></button> -->
                        </div>
                        <div class="col">
                            <button type="button"><img src="/public/assets/img/web/lognsignup/signup.png" alt="" class="img-fluid"></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!--begin::Base Scripts -->

    <!-- <script src="/public/assets/engine/login.js" type="text/javascript"></script> -->
    <!-- <script src="services/redirect.js" type="text/javascript"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js" type="text/javascript" charset="utf-8" async defer></script>

    <!--end::Base Scripts -->

</body>
</html>