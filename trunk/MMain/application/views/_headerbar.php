<?php 
	$_sess = Session::instance();
	$_username = $_sess->get('currentuser');
	$_userid = $_sess->get('currentuserid');
	if($_userid == ''){
		HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));	
	}
?>

<!-- START OF HEADER -->
<div class="header radius3">
	<div class="headerinner">
    	
        <a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
        	<img src=<?php echo URL::base()."assets/images/porkman2.png" ?> alt="" />
        </a>
        <!--<div class="title">PORKMAN</div>-->
    
    </div><!--headerinner-->
</div><!--header-->
<!-- END OF HEADER -->