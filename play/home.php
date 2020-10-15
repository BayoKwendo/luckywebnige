<?php
session_start();

$session = base64_decode(urldecode($_GET['sessionId']));

$newSession = explode('&', $session);

foreach($newSession as $mySession){
    $temp = explode('=', $mySession);
    $data[$temp[0]] = $temp[1];
}

$_SESSION['session'] = $_GET['sessionId'];
$_SESSION['phone'] = $data['phone'];
$_SESSION['token'] = $data['token'];

if(!$_SESSION['phone']){
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/public/assets/css/home.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <div id="container">
        <div id="leftpane">
            <img src="/public/assets/img/web/pick/curtain_left.png" class="img-fluid curt_left"/>
        </div>
        <div id="middlepane">
            <div class="center">

                <div class="main">
                    <div id="top">
                        <img src="/public/assets/img/web/pick/header.png" class="img-fluid"/>
                    </div>

                    <div id="center" class="holders">
                        <div>
                            <img src="/public/assets/img/web/pick/holder.png" class="img-fluid" id="holder" />
                        </div>

                        <div class="logo" >
                            <button id="" data-toggle="modal" data-target="#myModal1" style="background:transparent; border: hidden;">
                                <img src="/public/assets/img/web/pick/lucky_box_logo.png" id="logo" class="img-fluid"/>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="bottom">
                    <img src="/public/assets/img/web/pick/balance.png" class="img-fluid balance" />

                    <div id="balcontent">
                        <div class="table">
                            <table id="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-responsive" id="recharge" data-toggle="modal" data-target="#rechargeModal">Recharge Account</button>
                                        </td>
                                        <td>
                                            <div class="bal">
                                                <h4 id="bal"></h4>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-responsive" id="withdraw"  data-toggle="modal" data-target="#withdrawModal">Withdraw Money</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="rightpane">
            <img src="/public/assets/img/web/game-screen/curtain_right.png" class="img-fluid curt_right"/>
        </div>
    </div>

    <div id="hidden-inputs">

        <input id="phone" hidden="true" value="<?php echo $_SESSION['phone']; ?>" />
        <input id="token" hidden="true" value="<?php echo $_SESSION['token']; ?>" />

    </div>

    <?php require 'partials/modals.php'; ?>

    <script src="/public/assets/engine/result.js" type="text/javascript"></script>
    <script src="/public/assets/engine/balance.js" type="text/javascript"></script>
    <script src="/public/assets/engine/main.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js" type="text/javascript" charset="utf-8" async defer></script>

</body>
</html>