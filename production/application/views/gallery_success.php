
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
<h3>Your file was successfully uploaded!</h3>
<?php 

//print_r($display);

//for($i=0;$i<count($display);$i++){?>
<?php //echo "<img src='/ci/uploads/".$display[$i]->file."' >";?><?php //}?>
<p><?php echo anchor('welcome/upload_form', 'Try it again!'); ?></p>
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


