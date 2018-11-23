<legend class="text-left">artykuły</legend>
<transition-group name="fade">
	<div v-for="article in articles" :key="article">
		<div class="textBox col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<a href="#" class="textArticle text-left">
				{{ article }} <i class="fa fa-arrow-right fa-fw fa-lg fa-inverse"></i>
			</a>
		</div>
	</div>
</transition-group>