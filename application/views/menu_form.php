
        
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
Category Cake<select>
<option value="edible">Edible Cake</option>
<option value="edible">Engagement Cake</option>
<option value="edible">Flower Cake</option>
<option value="edible">Cartoon Cake</option>
<option value="edible">Fruit Cake</option>
</select>
<br><br>
Cake_Title<input type="text" name="title" placeholder="Enter name of Cake"/>
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
<option value="0.5kg">0.5kg</option>
<option value="1kg">1kg</option>
<option value="2kg">2kg</option>
<option value="3kg">3kg</option>
<option value="4kg">4kg</option>
<option value="5kg">5kg</option>
</select>
<br><br>
Sugar:<select name="sugar">
<option value="2kg">350gm</option>  
<option value="0.5kg">500gm</option>
<option value="1kg">750gm</option>
<option value="0.5kg">0.5kg</option>
<option value="1kg">1kg</option>
<option value="2kg">2kg</option>
<option value="3kg">3kg</option>
<option value="4kg">4kg</option>
<option value="5kg">5kg</option>
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

