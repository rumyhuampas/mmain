<?php 
	if(Helpers_User::IsAnyUser()){
		$_sess = Session::instance();
		$_username = $_sess->get('currentuser');
		$_userid = $_sess->get('currentuserid');
		if($_userid == ''){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));	
		}
	}
?>

<!-- START OF HEADER -->
<div class="header radius3">
	<div class="headerinner">

        <a href=
        <?php 
        	if(isset($_userid) && $_userid != ''){
    			echo URL::base().Route::get('default')->uri(array('controller' => 'welcome', 'action' => 'index'));
    		}
			else{
        		echo URL::base().Route::get('default')->uri(array('controller' => 'login', 'action' => 'index'));
			} 
        ?>
        >
        	<img src=<?php echo URL::base()."assets/images/msheader.png" ?> alt="" />
        </a>
        <!--<div class="title">PORKMAN</div>-->
    
    </div><!--headerinner-->
</div><!--header-->
<!-- END OF HEADER -->