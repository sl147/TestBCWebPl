<legend class="text-left">oferta</legend>
<transition-group name="fade">
	<div v-for="offer in offers" :key="offer">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="offerItem text-center">
			<a href="#">
				{{ offer }} 
			</a>
		</div>
		</div>
	</div>
</transition-group>