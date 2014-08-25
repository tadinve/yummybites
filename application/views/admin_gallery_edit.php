
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

<?php echo form_open_multipart('welcome/edit');?>


<center>Cake_Title<input type="text" name="category" placeholder="Enter name of Cake"/>
<br/><br/>
Description<input type="text" name="description" placeholder="Enter your cake description" />
<br /><br />
Price<input type="text" name="price" placeholder="Enter Price" />
<br /><br />
<input type="hidden" name="id" value="<?php echo $id; ?>">


<br /><br /></center>
<center><input type="submit" value="upload" /></center>


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

