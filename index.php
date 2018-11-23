<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div id="test">
		<img src="../image/tlo.png" id="bgBlack">
		<div v-show="showDarkness" class="darkness"></div>
			<div class="container-fluid">
				<div class="row-fluid">				
					<div class="col-lg-7 col-md-7 col-sm-0 col-xs-0">
						<div v-if="showMenu">
							<a href="index.php">
								<img src="../image/byd.png" class="logo">			
							</a>							
						</div>
						<div v-else>
							<a href="index.php">
								<img src="../image/logo_black.svg" class="logo">
							</a>
						</div>
					</div>
					<div class="signBottom text-right col-lg-1 col-md-1 col-sm-12 col-xs-12">
						<a tabindex="0" data-trigger="focus"  data-container="body" role="button" data-toggle="popover" data-placement="auto" data-offset='80px' data-html="true" data-content="<input class='text-right' type='text' v-model='searchString' placeholder='dalej' />">
							<i class="fa fa-search fa-fw fa-lg fa-inverse fa-2x" aria-hidden="true"></i>
						</a>
					</div>
					<div class="signBottom text-left col-lg-1 col-md-1 col-sm-12 col-xs-12">
						<div v-if="show">
							<a @click="onshow()">
								<i class="fa fa-bars fa-fw fa-lg fa-inverse fa-2x"></i>		
							</a>						
						</div>	
						<div v-else>
							<a @click="onshow()">
								<i class="fa fa-times fa-fw fa-lg fa-inverse fa-2x" ></i>
							</a>						
						</div>					
					</div>
				</div>
			</div>
			<div v-show="showSearch">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div> 			
						<input type="text" v-model="searchString" placeholder="dalej" />
					</div>
				</div>		
			</div>
			<div class="cont">
				<div v-if="showMenu">
					<?php include_once 'menues.php';?>
				</div>
				<div v-else>
					<div class="titleList text-center">
						<span>Strony www i sklepy internetowy.</span>
						<p>Powstaliśmy, aby swoją pracą ustalać nowe standarty i rewolucjonizować branżę.</p>
						<p>Realizujemy swoje plany i mażenia, tworząc strony www i sklepy internetowy</p>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.8/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/vue.resource/1.0.2/vue-resource.min.js"></script>
	<script src="/js/vueTest.js"></script>	
	<script>
		$(document).ready(function() {
		  $('[data-toggle="popover"]').popover();
		});  
	</script>
</body>
</html>