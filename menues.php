<img src="../image/tlo.png" id="bgLight">
<div class="container-fluid">			
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<ul class="nav mainmenu">
				<li class="nav-header">
					<a @click="showComponent=4" class="menuItem">
						strona główna
					</a>
				</li>
				<li class="nav-header">
					<a @click="showComponent=4"  class="menuItem">
						o nas		
					</a>
				</li>
				<li class="nav-header">
					<a @click="showComponent=1"  class="menuItem">
						oferta									
						<i class="fa fa-plus-square fa-fw fa-lg"></i>		
					</a>													
				</li>
				<li class="nav-header">
					<a @click="showComponent=4" class="menuItem">
						realizacje		
					</a>
				</li>
				<li class="nav-header">
					<a @click="showComponent=2" class="menuItem">
						artykuły
						<i class="fa fa-plus-square fa-fw fa-lg"></i>
					</a>
				</li>
				<li class="nav-header">
					<a @click="showComponent=3" class="menuItem">
						kontakt
						<i class="fa fa-plus-square fa-fw fa-lg"></i>		
					</a>
				</li>
			</ul>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-0 col-xs-0">
			<div v-show="showComponent===1">
				<?php include_once 'offers.php';?>
			</div>
			<div v-show="showComponent===2">
				<?php include_once 'articles.php';?>
			</div>
			<div v-show="showComponent===3">
				<?php include_once 'kontakt.php';?>
			</div>
			<div v-show="showComponent===4">				
			</div>			
		</div>
	</div>
</div>