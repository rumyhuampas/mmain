<?php include Kohana::find_file('views', '_header'); ?>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
            		<?php if(Helpers_User::IsAnyUser()){
                		echo "<li><a href=".URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'edit')).">Perfil</a></li>";
                	}?>
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'new')); ?>>Usuarios del sistema</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Alta de Usuario</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php include Kohana::find_file('views', '_message'); ?>
                    
					<?php echo Form::open('abmusers/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewuser'));
                    	echo '<p>';
                        	echo Form::label('username', 'Nombre');
							echo '<span class="field">';
							echo Form::input('username', '', array('type' => 'text', 'id' => 'username', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('newpass', 'Nueva contraseña');
							echo '<span class="field">';
							echo Form::input('newpass', '', array('type' => 'password', 'id' => 'newpass', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('newpass2', 'Repetir contraseña nueva');
							echo '<span class="field">';
							echo Form::input('newpass2', '', array('type' => 'password', 'id' => 'newpass2', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						
						echo '<p>';
							echo Form::label('checks', 'Perfiles');
                            echo '<span class="formwrapper">';
								echo '<span class="checkbox">'.Form::input('upadmin', '', array('type' => 'checkbox', 'id' => 'upadmin')).'</span>ADMIN<br>';
                            	echo '<span class="checkbox">'.Form::input('upventa', '', array('type' => 'checkbox', 'id' => 'upventa')).'</span>VENTA<br>';
								echo '<span class="checkbox">'.Form::input('upgranja', '', array('type' => 'checkbox', 'id' => 'upgranja')).'</span>GRANJA<br>';
								echo '<span class="checkbox">'.Form::input('upestadistico', '', array('type' => 'checkbox', 'id' => 'upestidistico')).'</span>ESTADISTICO';
                            echo '</span>';
                        echo '</p>';
                        
                        echo '<p class="stdformbutton">';
                        	echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();
					?>
            
            
	            	<div class="contenttitle radiusbottom0">
	                	<h2 class="table"><span>Usuarios</span></h2>
	                </div><!--contenttitle-->
	                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
	                    <colgroup>
	                        <col class="con0" />
	                        <col class="con1" />
	                    </colgroup>
	                    <thead>
	                        <tr>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">&nbsp;</th>
	                        </tr>
	                    </thead>
	                    <tfoot>
	                        <tr>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">&nbsp;</th>
	                        </tr>
	                    </tfoot>
	                    <tbody>
	                    	<?php foreach($users as $user){
	                    		echo '<tr>';
		                            echo '<td>'.$user->UserName.'</td>';
									echo '<td class="center">';
									if (Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN)){
										echo '<a href='.URL::base().Route::get('default')
		                            		->uri(array('controller' => 'abmusers', 'action' => 'edit', 'id' => $user->Id)).'class="delete"> Editar </a>';
									}
									if($user->Id != $_userid){
										echo '-';
		                            	echo '<a href='.URL::base().Route::get('default')
		                            		->uri(array('controller' => 'abmusers', 'action' => 'delete', 'id' => $user->Id)).'class="delete"> Eliminar </a>';
									}
									echo '</td>';
		                        echo '</tr>';
	                    	}
							?>
	                    </tbody>
	                </table>
                
                	<br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>