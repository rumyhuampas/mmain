<?php include Kohana::find_file('views', '_header'); ?>

<body class="login">
	
	<?php include Kohana::find_file('views', '_headerbar'); ?>
	
	<div class="loginbox radius3 welcomeloginbox">
		<div class="loginboxinner radius3">
			<div class="loginheader">
				<div style="margin-left: 35%;"><img src=<?php echo URL::base()."assets/images/ms.png" ?> alt="" /></div>
			</div>
			
			<br clear="all">
			
			<ul class="widgetlist" style="margin-left: 8%;">
				<?php
				if (Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN) ||
					Helpers_Utils::strContains($_userprofile, Helpers_Const::UPGRANJA) ||
					Helpers_Utils::strContains($_userprofile, Helpers_Const::UPVENTA) ||
					Helpers_Utils::strContains($_userprofile, Helpers_Const::UPESTADISTICO)){
				?>
				<li><a class="porkman" href="/mfarm/home" style=" ">PorkMan</a></li>
				<?php
				}
				if (Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN)){
				?>
				<li><a class="editor" href="/mjor/home">JorMan</a></li>
				<?php
				}
				if (Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN)){
				?>
				<li><a class="add" href="#" style=" ">StockMan</a></li>
				<?php
				}
				if (Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN)){
				?>
				<li><a class="babybottle" href="#">AcopioMan</a></li>
				<?php
				}
				?>
			</ul>
			
			<br clear="all">
			
		</div>
	</div>
</body>

<?php include Kohana::find_file('views', '_footer'); ?>