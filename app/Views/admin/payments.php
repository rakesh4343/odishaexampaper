<?= $this->extend('templates/admintemplate') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
	<div class="columns">
		<div class="column is-3">
			<?=$this->include('templates/adminSidebar') ?>
		</div>
		<div class="column is-9">
			<div class="table-container">
				<h4 class="title has-text-centered">Payments Data<hr class="navbar-divider" /></h4>
			  <!-- Users table -->
		<table class="table is-fullwidth is-stripped is-hoverable ">
		  <thead class="has-background-warning-dark ">
		    <tr>
		      <th class="has-text-light">Sl No.</th>
		      <th class="has-text-light">Name</th>
		      <th class="has-text-light">Paid On</th>
		      <th class="has-text-light">Amount(In Rupees)</th>
		      <th class="has-text-light">For</th>
		      <th class="has-text-light">Status</th>
		      <th class="has-text-light"> Payment ID</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>1</th>
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>Skill test PDF</td>
		      <td>Done</td>
		      <td>sdl39434j3kl0djf398430dffj</td>
		      
		    </tr>
		    <tr>
		      <th>2</th>
		     
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>Junior clerk and assistant question paper with solution</td>
		      <td>Failed</td>
		       <td>sdl39434j3kl0djf398430dffj</td>
		      
		    </tr>
		    <tr>
		      <th>3</th>
		     
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>Skill test PDF</td>
		      <td>Failed</td>
		       <td>sdl39434j3kl0djf398430dffj</td>
		      
		    </tr>
		  </tbody>
		</table>
			  <!-- ends -->
			</div>
		</div>
	</div>
</div>




<?= $this->endSection() ?>