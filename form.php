<?php include('hdr.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curvus Cafe</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>    
    <?php include('connect.php'); 


?>
         
           <div class="row-fluid">
                            <div class="span12">

                                <div class="row-fluid">
                                    <div class="span2"></div>
                                    <div class="span8">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="thumbnail">
                                                   
                                                    <form class="form-horizontal" method="post">
                                                        <div class="alert alert-success"><strong>Customer Login Form</strong></div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputEmail">User Name</label>
                                                            <div class="controls">
                                                                <input type="text" id="inputEmail" name="username" placeholder="User Name">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputPassword">Password</label>
                                                            <div class="controls">
                                                                <input type="password" id="inputPassword" name="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <a href="index.php" class="btn btn-danger">&nbsp;cancel</a>

                                                                <button type="submit" class="btn btn-primary" name="login">&nbsp;Sign in</button>
                                                           
                                                            
                                                                <a href="signup.php" class="btn btn-success">&nbsp;Sign Up</a>
                                                           
                                                             </div>
                                                            <br>
                                                            <?php
                                                            if (isset($_POST['login'])) {
    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
                                        }
                                        
                                                                $username = clean($_POST['username']);
                                                                $password = clean($_POST['password']);

                                                                $query = mysql_query("select * from tb_member where username='$username' and Password='$password' ") or die(mysql_error());
                                                                $count = mysql_num_rows($query);
                                                                $row = mysql_fetch_array($query);
                                                                if ($count > 0) {
                                                                   
                                                                    
                                                                    $_SESSION['id'] = $row['memberID'];
                                                                    ?>
                                                                    <script>
                                                                        window.location = 'reservation.php';                
                                                                </script>

                                                  
                                                  <?php
                                                                    session_write_close();
                                                                } else {
                                                                session_write_close();
                                                                    ?>

                                                                    <div class="alert alert-error">Please check your username and password</div>
                                                                <?php }
                                                            }
                                                            ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                        </ul>





                                    </div>
                                    <div class="span2">

                                    </div>
                                
  </div>
                            </div>
                             </div>
                       
              
        

</body>




</html>