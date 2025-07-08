<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('hdr.php'); ?>
<?php include('admin/connect.php'); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curvus Cafe</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<style>
#menu_tab{
  width: 990px;
  height: 65px;
  float: center;
  background: url(css/images/templatemo_menu_bg.jpg) no-repeat;
}

ul.menu {
list-style-type:none; float:left; display:block; width:933px; 
}
ul.menu li {
display:inline;
font-size:12px;
font-weight:bold;
line-height:40px;
}
</style>
<body>
      <?php
        include ('navbarfixed.php');
        ?>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">

    <div id="templatemo_banner"></div>
 <div id="menu_tab">

  </div>
    <div id="templatemo_content_wrapper">          
        <div class="templatemo_side_bar margin_right_10">
            <img src="images/icons/bullet_go.png"/> Navigation: <span class="current">Seats Area</span>
         <hr><br>
            <div class="header_01">We OFFERS</div>
               <ul>
                    <li>
                        <span><a href="reservation.php"> Seats Area</a></span>
                    </li>
                    <li>
                        <span><a href="resbc.php"> Breakfast at the Cafe</a></span>
                    </li>

                    <li>
                        <span><a href="resbcg.php">Beverages at the Cafe and Grille </a></span>
                    </li>

                     
                      <li>
                        <span><a href="resdcg.php"> Desserts at the Cafe and Grille</a></span>
                    </li>
                    <li>
                        <span><a href="resdg.php"> Dining at the  Grille</a></span>
                    </li>
                    <li>
                        <span><a href="resdc.php"> Dining at the Cafe</a></span>
                    </li>
                    <li>
                        <span><a href="ressc.php"> Snacks at the Cafe</a></span>
                    </li>
                    <li>
                        <span><a href="ressg.php"> Snacks at the Grille</a></span>
                    </li>
                    
                </ul>
            <div class="margin_bottom_20 horizontal_divider"></div> 
            <div class="margin_bottom_20"></div>

            
        </div>
        <div class="templatemo_content margin_right_10">
        
            <div class="content_section">   
                            

                                        
 <ul class="thumbnails">
                            <center>
                             <?php
                            $query = mysql_query("select * from tb_products WHERE category = 'beverages'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                $qty = $row['quantity'];
                                
                                    $query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Confirmed'");
                                    $row1 = mysql_fetch_array($query1);
                                    $total_qty = $qty - $row1['qty'];                                   
                                ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/150x150" alt="">
                                        <div class="alert alert-success"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        
                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="200" height="200"></a>
<div class="alert alert-success"><div class="font1"><?php echo $row['price']; ?></div></div>

                                     
                                        <p>
                                                                            <?php if($total_qty > 0){ ?>
                                       <center> <a href="#add<?php echo $id; ?>"  data-toggle="modal" class="btn btn-success">&nbsp;Reserve</a></center>

                                        <?php }else{ ?>
                                       <center> <span class="label label-important">Already Reserved For This Day</span><center></p>
                                        <?php } ?>
                                       
                            <div id="order" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-body">
                            
                            <button type="submit" name="order" class="btn btn-success"><i class="icon-plus-sign"></i>&nbsp;Reserve</button>
                            <button class="btn" name="order" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Cancel</button>
            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                         <?php include('order_modal.php'); ?>
                                    <?php } ?>

                                    <?php
                                    if (isset($_POST['order'])) {
                                        $member_id = $_POST['member_id'];
                                        $quantity = $_POST['quantity'];
                                        $price = $_POST['price'];
                                        $product_id = $_POST['product_id'];
                                        $total = $quantity * $price;
                                        mysql_query("insert into order_details (memberID,qty,productID,price,total,status) values('$member_id','$quantity','$product_id','$price','$total','Waiting')") or die(mysql_query);
                                     
                                        ?>
                                                <script>
                                                                window.location = 'reservation.php';               
                                                                </script>
                                        <?php
                                    }
                                    ?>
                        </ul>


                   
              
          
        
    </div> 


    </div> 

     
          <div class="margin_bottom_40"></div>
 
        
        
        <div class="cleaner"></div>    

    
</div>
</div>

<?php include('foot.php'); ?>
    
    
</body>
</html>