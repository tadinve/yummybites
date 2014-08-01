<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='reethi-facilitator@solivarindia.com '; // Business email ID
?>

    
                                             <center>       <table class="table table-bordered" width="100%" style="border:10px;">
<tr>
<td><center><h3>Cake</h3><center></td>
<td><center><h3>Ingredients</h3></center></td>
<td><center><h3>price</h3><center></td>
<td><center><h3>Quantity</h3><center></td></center>
<tr>

   <tr>
                                <td>  <center>  <?php echo '<img src="'.$this->config->base_url().'uploads/'.$file.'" width="142" height="142"/>'; ?></center>
                                <br><br><br><center>
                                    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">

                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></center></td>


                                <td>
<ul class="list-unstyled">
                                                    
                                                         <h6><center>Cream: <span> <?php echo $cream;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                    
                                                    
                                                   
                                                       <h6><center>Sugar: <span> <?php echo $sugar;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                   
                                                         <h6><center>Cocoa powder: <span> <?php echo $cocoapowder;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                    
                                                        <h6><center>Baking Powder: <span> <?php echo $bakingpowder;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                   
                                                        <h6><center> Bicarbonate of soda: <span> <?php echo $bicarbonate;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                    
                                                        <h6> <center>Eggs: <span><?php echo $eggs;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                    
                                                        <h6><center>Milk:<span> <?php echo $milk;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                    
                                                        <h6><center>Vegetable Oil: <span><?php echo $vegoil;?></center></span></h6>
                                                        <div class="clearfix"></div>
                                                   
                                                    
                                                </ul>

                                </td>
                                <td><center> <?php echo $price; ?></center> </td>
                                <td> <center><?php echo $quantity ?> </center></td>
                                </tr>
                                
                                </table> </center>

    <div class="btn">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="<?php echo ucfirst($category);?>">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $price; ?>">
    <input type="hidden" name="cpp_header_image" value="<?php echo $this->config->base_url(); ?>img/lo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://demo.phpgang.com/payment_with_paypal/cancel.php">
    <input type="hidden" name="return" value="http://demo.phpgang.com/payment_with_paypal/success.php">
     
    </form>
    </div>
</div>