<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
<?php 

class Welcome extends CI_Controller {
 public function __construct()
    {
    	parent::__construct();
}
public function logout()
{
	redirect('welcome/dashboard');
}
}