<?php
    echo form_open_multipart('image_control/do_upload');
    echo form_input('title','');
    echo form_input('id','');
    echo form_upload('userfile');
    echo form_submit('upload','Upload');
    echo form_close();
?>

<?php foreach ($images as $image):?>
<h1><?php echo $image->title;?></h1>
<h1><?php echo $image->id;?></h1>
<img src = "/<?php// echo ltrim($image->a_photo, '/'); ?>" >
<img src="<?php echo base_url() ?>/ci/uploads/<?php echo $image->image;?>"/> 
<img src="<?php //echo sprintf("images/%s", $image['screenshot']);?>" />
<h1><?php// echo $image->a_photo;?></h1>
<?php endforeach; ?>