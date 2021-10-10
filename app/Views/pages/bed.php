<?= $this->extend('templates/base') ?>


<?= $this->section('content') ?>
    
  <div class="container mt-2">
  	 <div class="columns">
  	 	<div class="column is-3">
  	 		<aside class="box">
  	 			This is teh left sidebar
  	 		</aside>
  	 	</div>
  	 	<div class="column is-6">
  	 			<main>
  	 				 <article class="box">
                <p class="content subtitle is-4">
                  
                </p>
             </article>
  	 			</main>
  	 	</div>
  	 	<div class="column is-3">
  	 		<aside class="box">
  	 			This is teh left sidebar
  	 		</aside> 
  	 	</div>
  	 </div>
  </div>

<?= $this->endSection() ?>