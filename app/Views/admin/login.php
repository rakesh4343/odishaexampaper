<?= $this->extend('templates/base') ?>


<?= $this->section('content') ?>
	<div class="container">
		<div class="columns">
		<div class="column is-6 is-offset-3">
		<div class="hero is-small">
			<div class="hero-body">
				<form class="form">
				  	<div class="box">
				  		<div class="field">
					  		<label class="label">Admin ID</label>
					  		<input class="input" type="text" placeholder="Enter Admin ID">
				  		</div>
				  		<div class="field">
					  		<label class="label">Admin ID</label>
					  		<input class="input" type="text" placeholder="Enter Admin ID">
				  		</div>
				  		<div class="field has-text-centered">
					  		<button class="button is-info" type="submit">LOGIN</button>
				  		</div>
				  	</div>
				  </form>
			</div>
		</div>    
		  
		</div>
		</div>
	</div>
<?= $this->endSection() ?>