 <center>       <table class="table table-bordered" width="100%" style="border:10px;">
<tr>
<td><center><h3>Cake</h3><center></td>
<td><center><h3>price</h3><center></td>
<td><center><h3>Description</h3><center></td></center>

   <tr>
                                <td>  <center>  <?php echo '<img src="'.$this->config->base_url().'uploads/'.$file.'" width="142" height="142"/>'; ?></center>
                                <br><br><br><center>
                                    <form action="gallery_control/admin_gallery_imgdisplay" method="post" name="gallery_view">

                               

                               
									
                                <td><center> <?php echo $price; ?></center> </td>
                                <td> <center><?php echo $description ?> </center></td>
                                </tr>
                                
                                </table> </center>
