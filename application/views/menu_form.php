
        
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
<?php echo $error;?>

<?php echo form_open_multipart('menu_control/do_upload');?>
<center><h3>Cake Category</h3>
<br>
Category Cake<select name="category">
<option value="edible">Edible Cake</option>
<option value="engagement">Engagement Cake</option>
<option value="flower">Flower Cake</option>
<option value="cartoon">Cartoon Cake</option>
<option value="fruit">Fruit Cake</option>
</select>
<br><br>
Cake_Title<input type="text" name="name" placeholder="Enter name of Cake"/>
<br/><br/>
Description<input type="text" name="description" placeholder="Enter your cake name" />
<br /><br />
Price<input type="text" name="price" placeholder="Enter Price" />
<br /><br />
<input type="file" name="userfile" size="2000" />

<br /><br /></center>
<h3>Ingredients</h3>
<br>
Cream:<select name="cream">
<option value="350gm">350gm</option>  
<option value="500gm">500gm</option>
<option value="750gm">750gm</option>
<option value="1/2kg">0.5kg</option>
<option value="1kg">1kg</option>
<option value="2kg">2kg</option>
<option value="3kg">3kg</option>
<option value="4kg">4kg</option>
<option value="5kg">5kg</option>
</select>
<br><br>
Sugar:<select name="sugar">
<option value="350gm">350gm</option>  
<option value="500gm">500gm</option>
<option value="750gm">750gm</option>
<option value="1/2kg">0.5kg</option>
<option value="1kg">1kg</option>
<option value="2kg">2kg</option>
<option value="3kg">3kg</option>
<option value="4kg">4kg</option>
<option value="5kg">5kg</option>
</select>
<br><br>
Cocoa-Powder:<select name="cocoapowder">
<option value="350gm">350gm</option>  
<option value="500gm">500gm</option>
<option value="750gm">750gm</option>
<option value="1/2kg">0.5kg</option>
<option value="1kg">1kg</option>
<option value="2kg">2kg</option>
<option value="3kg">3kg</option>
<option value="4kg">4kg</option>
<option value="5kg">5kg</option>
</select>
<br><br>
Baking-Powder:<select name="bakingpowder">
<option value="1/2tsp">1/2tsp</option>  
<option value="1tsp">1tsp</option>
<option value="1½tsp">1½tsp</option>
<option value="2tsp">2tsp</option>
</select>
<br><br>
Bicorbonate of Soda:<select name="bicarbonate">
<option value="1/2tsp">1/2tsp</option>  
<option value="1tsp">1tsp</option>
<option value="1½tsp">1½tsp</option>
<option value="2tsp">2tsp</option>
</select>
<br><br>
Eggs:<select name="eggs">
<option value="1">1</option>  
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
<br><br>
Milk:<select name="milk">
<option value="350ml">350ml</option>  
<option value="500ml">500ml</option>
<option value="750ml">750ml</option>
<option value="0.5ltr">0.5ltr</option>
<option value="1ltr">1ltr</option>
<option value="2ltr">2ltr</option>
<option value="3ltr">3ltr</option>
<option value="4ltr">4ltr</option>
<option value="5ltr">5ltr</option>
</select>
<br><br>
veg-oil:<select name="vegoil">
<option value="350ml">350ml</option>  
<option value="500ml">500ml</option>
<option value="750ml">750ml</option>
<option value="0.5ltr">0.5ltr</option>
<option value="1ltr">1ltr</option>
<option value="2ltr">2ltr</option>
<option value="3ltr">3ltr</option>
<option value="4ltr">4ltr</option>
<option value="5ltr">5ltr</option>
</select>
<br><br>


<input type="submit" value="upload" />

</form>

 </div>
                                
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    
                    </div><!-- /.row -->




                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

