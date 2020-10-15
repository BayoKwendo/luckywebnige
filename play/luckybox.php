<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>var js1 = jQuery.noConflict();</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/public/assets/css/joy.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/fireworks.css">
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
                        <img src="/public/assets/img/web/game-screen/top.png" class="img-fluid top"/>
                        <div class="logo">
                        	<img src="/public/assets/img/web/game-screen/logo.png" class="img-fluid game-logo" />
                        </div>
                    </div>

                    <div id="center" class="holders">
                        <div>
                            <img src="/public/assets/img/web/game-screen/box-bg.png" class="img-fluid box_center"/>
                        </div>

                        <div class="boxes" >
                        	<div class="table">
                        		<table id="table">
	                            	<tbody>
	                            		<tr>
	                            			<td>
	                            				<div class="col" id="start1">
	                                				<p class="myVal" hidden>1</p>
					                                <img src="/public/assets/img/web/game-screen/1.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            			<td>
	                            				<div class="col" id="start2">
					                                <p class="myVal" hidden>2</p>
					                                <img src="/public/assets/img/web/game-screen/2.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            			<td>
	                            				<div class="col" id="start3">
					                                <p class="myVal" hidden>3</p>
					                                <img src="/public/assets/img/web/game-screen/3.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            		</tr>

	                            		<tr>
	                            			<td>
	                            				<div class="col" id="start4">
					                                <p class="myVal" hidden>4</p>
					                                <img src="/public/assets/img/web/game-screen/4.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            			<td>
	                            				<div class="col" id="start5">
					                                <p class="myVal" hidden>5</p>
					                                <img src="/public/assets/img/web/game-screen/5.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            			<td>
	                            				<div class="col" id="start6">
					                                <p class="myVal" hidden>6</p>
					                                <img src="/public/assets/img/web/game-screen/6.png" class="img-fluid"/>
					                            </div>
	                            			</td>
	                            		</tr>
	                            	</tbody>
	                            </table>
                        	</div>
                        </div>

                    </div>
                </div>

                <div id="bottom">
                	<div id="buttons">
                    	<button type="button" class="btn btn-secondary" onclick="back();">Back</button>
                    	<button type="button" class="btn btn-secondary" onclick="quit();">Quit</button>
                    </div>
                    <img src="/public/assets/img/web/game-screen/bottom.png" class="img-fluid bottom"/>
                </div>
            </div>

        </div>

        <div id="rightpane">
            <img src="/public/assets/img/web/game-screen/curtain_right.png" class="img-fluid curt_right"/>
        </div>
    </div>

    <div id="hidden-inputs">

        <input id="phone" value="<?php echo $_SESSION['phone']; ?>" hidden="true"/>
        <input id="stake" value="<?php echo $_SESSION['stake']; ?>" hidden="true"/>
        <input id="token" value="<?php echo $_SESSION['token']; ?>" hidden="true"/>
        <input id="session" value="<?php echo $_SESSION['session']; ?>" hidden="true"/>

    </div>

    <?php require 'partials/game_modals.php'; ?>

    <script src="/public/assets/engine/spin.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js" type="text/javascript" charset="utf-8" async defer></script>

</body>
</html>