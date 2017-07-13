<!DOCTYPE html>
<html>
    <head>
        <title>.:LOGIN:.</title>
        <script src="<?php echo URL; ?>public/js/jquery-2.0.3.min.js"></script>
        <link rel="stylesheet" href="<?php echo URL; ?>public/js/jquery-ui-1.10.3/themes/base/jquery.ui.all.css">

        <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.form.js"></script>
        <script src="<?php echo URL; ?>public/js/myjs.js"></script>
        <script src="<?php echo URL; ?>public/js/teamdf-jquery-number/jquery.number.js"></script>
        <link href="<?php echo URL; ?>public/css/ernest.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/form.css" rel="stylesheet">
    </head>
    <header><img src="<?php echo URL; ?>public/img/span-putih.png" width="40px" height="48px"></header>
    <body>
        <?php
        //if (isset($this->error)) {
        //echo "<div style='color:red' id=notfound><h2>" . $this->error . "<h2></div>";
        //}
        ?>
        <div id="log">
            <div class="login-container">
                <?php
                if (isset($this->error)) {
                    echo "<div style='color:red' id=notfound><h2>" . $this->error . "<h2></div>";
                }
                ?>

                <div class="kolom5" style="margin-top: 40px">
                    <h1>Login APPS</h1>
                    <form id="login-form" action="<?php echo URL; ?>auth/login" method="post">	

                        <label class="isian">Username</label> 
                        <input name="user" id="nuser" type="text" /> 
                        <div class="error" id="wuser" style="display:none"></div>	


                        <label class="isian">Password</label>
                        <input style="" name="pass" id="pass" type="password" /> 
                        <div class="error" id="wpass" style="display:none"></div>	


                        <ul class="inline" style="margin-left: 290px"> 
                            <li><input id="button" type="submit" class="sukses" name="yt0" value="Login" onClick="return cek()"/> 
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

<script type="text/javascript">
    $(function() {
        var notfound = document.getElementById('notfound');
        $('#nuser').focus();
        $('#wuser').fadeOut();
        $('#wpass').fadeOut();
        $('#nuser').keyup(function() {
            if (notfound != null) {
                $('#notfound').fadeOut(200);
            }
            if ($('#nuser').val() != '') {
                $('#wuser').fadeOut(200);
            }
        })
        $('#pass').keyup(function() {
            if (notfound != null) {
                $('#notfound').fadeOut(200);
            }
            if ($('#npass').val() != '') {
                $('#wpass').fadeOut(200);
            }
        })
    })

    function cek() {
        var jml = 0;
        if (document.getElementById('nuser').value == '') {
            var data = "Isikan nama user anda!";
            $('#wuser').fadeIn(200);
            $('#wuser').html(data);
            jml++;
        }

        if (document.getElementById('pass').value == '') {
            var data = "Isikan password anda!";
            $('#wpass').fadeIn(200);
            $('#wpass').html(data);
            jml++;
        }

        if (jml > 0) {
            return false;
        } else {
            return true;
        }
    }

</script>