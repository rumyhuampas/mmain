<?php include Kohana::find_file('views', '_loginheader'); ?>

<body class="login">
	<div class="loginbox radius3">
		<div class="loginboxinner radius3">
			<div class="loginheader">
				<div style="margin-left: 20%;"><img src=<?php echo URL::base()."assets/images/ms.png" ?> alt="" /></div>
			</div>
			
			<br clear="all">
			
			<ul class="widgetlist">
				<li><a class="add default" href="/mfarm/abmcerdas/new" style=" ">Nueva cerda</a></li>
				<li><a class="editor" href="/mfarm/abmcerdas/edit">Modif. cerda</a></li>
				<li><a class="add default" href="/mfarm/abmcerdas/new" style=" ">Nueva cerda</a></li>
				<li><a class="editor" href="/mfarm/abmcerdas/edit">Modif. cerda</a></li>
			</ul>
			
			<br clear="all">

			<!--<div class="loginform">
				<p><a href="../mfarm/"><button class="radius3 bebas default" name="btnlogin" >PorkMan</button></a></p>
				<p><a href="../mjor/"><button class="radius3 bebas default" name="btnlogin" style=" ">JorMan</button></a></p>
         </div>-->
		</div>
	</div>
</body>

<?php include Kohana::find_file('views', '_footer'); ?>