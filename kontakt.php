<legend class="text-left">kontakt</legend>
<form class="form">
	<p class="text-left">Wyślij nam wiadomość</p>
	<label class="text-left">Imię i nazwisko<span>*</span></label>
	<input class="formInput" type="text" name="name"><br><br>
	<label class="text-left">Adres email<span>*</span></label>
	<input class="formInput"type="email" name="email"><br><br>
	<label class="text-left">Treść</label>
	<input class="formInput" type="text" name="text"><br><br>
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="chekTop">
				<input class="chekbox" v-model="check" type="checkbox" />
				<span class="text-justify">
					Wyrażam zgodę na otrzymanie od Volkswagen Group Polska sp.z o.o z siedzibą w Poznaniu informacji handlowych za pośrednictwem środków komunikacji elektronicznej.
				</span>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<button :disabled="isDisabled" @click="submit()" type='button' title='wyślij' class='btnSubmit btn btn-default'>wyślij</button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="chekTop">
				<input class="chekbox" v-model="check" type="checkbox" />
				<span class="text-justify">
					Wyrażam zgodę na pretwarzanie moich danych osobowych przez Volkswagen Group Polska sp.z o.o z siedzibą w Poznaniu w celach marketingowych.
				</span>
			</div>
		</div>
	</div>
</form>
