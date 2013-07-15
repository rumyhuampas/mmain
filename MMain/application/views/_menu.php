<div class="mainleft">
  	<div class="mainleftinner">
    
      	<div class="leftmenu">
    		<ul>
            	<li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $menuid ?>>
            		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'new')); ?> class="dashboard">
            			<span>Usuarios</span>            			
            		</a>
            	</li>
            </ul>
                
        </div><!--leftmenu-->
    	<div id="togglemenuleft"><a></a></div>
    </div><!--mainleftinner-->
</div><!--mainleft-->