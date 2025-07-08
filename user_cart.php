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
   
   <br><br><br><br><br><br><br>
  <div class="margin_bottom_20"></div>  
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">

   <div id="menu_tab">

  </div>

    <div id="templatemo_content_wrapper">          
       
            <div class="content_section">
                            
 <div id="content">
              
                        <h3>My Cart</h3>
                        <div class="hero-unit-table">

                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $cart_table = mysql_query("select  * from order_details where memberID='$ses_id' and status='waiting'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>

                                        <tr>
                                            <td><?php echo $product_row['name']; ?></td>
                                            <td><?php echo $product_row['category']; ?></td>
                                            <td><?php echo $cart_row['price']; ?></td>
                                            <td><?php echo $cart_row['qty']; ?></td>
                                            <td><?php echo $cart_row['total']; ?></td>
                                            <td width="100"><a href="#orderdel<?php echo $order_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger">&nbsp;Remove</a></td>
                                        </tr>
                                        <!-- product delete modal -->
                                    <div id="orderdel<?php echo $order_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Remove &nbsp;</strong>this item?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="romove_item.php<?php echo '?id=' . $order_id; ?>" >&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">&nbsp;No</button>

                                        </div>
                                    </div>
                                    <!-- end deletemodal -->

                                <?php } ?>

                                </tbody>
                            </table>




                        </div>

                        <?php
                        if ($cart_count != 0) {
                            $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'waiting'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                                <center> <a href="#order" role="button"  data-toggle="modal"class="btn btn-success">&nbsp;Set Reservetion?</a></center>
                                <div class="pull-right">
                                    <div class="span"><div class="alert alert-success">&nbsp;Total:&nbsp;<?php echo $rows['sum(total)']; ?></div></div>
                                </div>
                            <?php }
                            ?>
                            <?php
                        }
                        ?>
                    

                        <!-- product order modal -->
                        <div id="order" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                           <div class="alert alert-info">Thank You!!</div>
                              <div class="alert alert-danger"><p>The Seats Reservation has sent<br>wait until the asign personel contact you for more information<br> Thank you,, have a nice day!</p></div>     
                 <a class="btn btn-success" href="update.php<?php echo '?id=' . $ses_id; ?>" >&nbsp;OK</a>           
                
                          

                            
                               
                               
                            </div>
                            <div class="modal-footer">
                            
                               

                            </div>
                        </div>
                        <a class="btn" href="reservation.php">Add More</a>
                 <!-- end delete modal -->

                    </div>
                                        


     
          <div class="margin_bottom_40"></div>
 
        
        
        <div class="cleaner"></div>    
    </div> 
   </div>  
</div>
</div>

<?php include('foot.php'); ?>
    
    
</body>
</html>