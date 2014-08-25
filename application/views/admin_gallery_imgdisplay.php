 <script type="text/javascript">
function ConfirmDelete()
{
  var x=confirm("Are you sure you want to delete?");
 if (x)
   window.location.href = this.getAttribute('href');
 else
   return false;
}

</script>


 <center>       <table class="table-bordered offset1" style="margin-left:16%;" width="82%" style="border:10px;align:">
<tr>
<td><center><h3>Id</h3></center></td>
<td><center><h3>Category</h3></center></td>

<td><center><h3>Cake</h3></center></td>
<td><center><h3>price</h3></center></td>
<td><center><h3>Description</h3></center></td>
<td><center><h3>Actions</h3></center></td>

<?php 
foreach ($display as $data) {
	# code...
?>
<tr>
	<td align="center"><?php echo $data['id']?></td>
		<td align="center"><?php echo $data['category']?></td>

								<td align="center"><?php echo '<img src="'.$this->config->base_url().'uploads/'.$data['file'].'" width="242" height="242"/>'; ?></td>
								<td align="center"><?php echo $data['price']?></td>
								<td align="center"><?php echo $data['description']?></td>
								<td align="center">	<a class="btn btn-mini btn-info" href="admin_gallery_edit/?id=<?php echo $data['id'] ?>">Edit
                                                               
                                                       </a>
                                                               <i class="icon-edit bigger-120"></i>
                                                       </a>	
                                                       <a class="btn btn-mini btn-info" href="delete/?id=<?php echo $data['id'] ?>" onclick="return ConfirmDelete()">Delete
                                                               <i class="icon-edit bigger-120"></i>
                                                       </a>	
                                                   </td>
                                

                                
                                </tr>
                                <?php } ?>
                                </table> </center>
