<?php 
	if(Helpers_User::IsAnyUser()){
		$_sess = Session::instance();
		$_username = $_sess->get('currentuser');
		$_userid = $_sess->get('currentuserid');
		$_userprofile = $_sess->get('currentuserprofile');
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
    
    	<div class="headright">
    		
    		<div id="userPanel" class="headercolumn">
                <a href="#" class="userinfo radius2">
                    <img src=<?php echo URL::base()."assets/images/avatar.png" ?> alt="" class="radius2" />
                    <span><strong><?php if(isset($_username)){ echo $_username; }?></strong></span>
                </a>
                <div class="userdrop">
                    <ul>
                        <li><a href=<?php echo URL::base()."../mmain/abmusers/edit" ?>>Perfil</a></li>
                        <?php
		                if(Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN)){
		                ?>
                        <li><a href=<?php echo URL::base()."../mmain/abmusers/new" ?>>Usuarios del sistema</a></li>
                        <?php
						}
                        ?>
                        <li><a href=<?php echo URL::base()."../mmain/welcome" ?> >Menu principal</a></li>
                        <li><a href=<?php echo URL::base()."../mmain/login/exit" ?> >Salir</a></li>
                    </ul>
                </div><!--userdrop-->
            </div><!--headercolumn-->
            
    	</div><!--headright-->
            
    </div><!--headerinner-->
</div><!--header-->
<!-- END OF HEADER -->