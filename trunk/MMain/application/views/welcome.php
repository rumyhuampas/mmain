<?php include Kohana::find_file('views', '_loginheader'); ?>

<script src=<?php echo URL::base()."/scripts/custom/welcome.js" ?> type="text/javascript"></script>

<body class="login">
	<div class="loginbox radius3 welcomeloginbox">
		<div class="loginboxinner radius3">
			<div class="loginheader">
				<div style="margin-left: 35%;"><img src=<?php echo URL::base()."assets/images/ms.png" ?> alt="" /></div>
			</div>
			
			<br clear="all">
			
			<ul class="widgetlist" style="margin-left: 8%;">
				<li><a class="porkman" href="/mfarm/home" style=" ">PorkMan</a></li>
				<li><a class="editor" href="/mjor/">JorMan</a></li>
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