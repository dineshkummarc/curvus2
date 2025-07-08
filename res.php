 <?php
include('hdr.php'); ?>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curvus Cafe</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>    

    <?php
include('connect.php'); 
?>

 
                        <ul class="thumbnails">
                            <center>
                             <?php
                            $query = mysql_query("select * from tb_products") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                $qty = $row['quantity'];
                                
                                    $query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Confirmed'");
                                    $row1 = mysql_fetch_array($query1);
                                    $total_qty = $qty - $row1['qty'];                                   
                                ?>

                                <li class="span2">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/140x140" alt="">
                                        <div class="alert alert-success"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        
                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <p>
                                           <center> <a> Price: <?php echo $row['price']; ?></a></center>
                                        </p>
                                        <p>
                                                                            <?php if($total_qty > 0){ ?>
                                       <center> <a href="#add<?php echo $id; ?>"  data-toggle="modal" class="btn btn-success">&nbsp;Reserve</a></center>

                                        <?php }else{ ?>
                                        <span class="label label-important">Already Reserved For This Day</span></p>
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
                                                                window.location = 'cuslog.php';               
                                                                </script>
                                        <?php
                                    }
                                    ?>
                        </ul>


                   
              
          
        



                      
  
