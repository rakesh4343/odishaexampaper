<?= $this->extend('templates/admintemplate') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
	<div class="columns">
		<div class="column is-3">
			<?=$this->include('templates/adminSidebar') ?>
		</div>
		<div class="column is-9">
			<div class="table-container">
				<h4 class="title has-text-centered">Manage Admins<hr class="navbar-divider" /></h4>
			  <!-- Users table -->
		<table class="table is-fullwidth is-stripped is-hoverable has-text-centered">
		  <thead class="has-background-danger ">
		    <tr>
		      <th class="has-text-light">Sl No.</th>
		      <th class="has-text-light">Name</th>
		      <th class="has-text-light">Accounted Created on</th>
		      <th class="has-text-light">Quizzes Taken</th>
		      <th class="has-text-light">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>1</th>
		     
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>
		      	<div class="buttons">
		      		<button class="button is-danger is-rounded is-small">Delete User</button>
		      	</div>
		      </td>
		    </tr>
		    <tr>
		      <th>2</th>
		     
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>
		      	<div class="buttons">
		      		<button class="button is-danger is-rounded is-small">Delete User</button>
		      	</div>
		      </td>
		    </tr>
		    <tr>
		      <th>3</th>
		     
		      <td>Rakesh Kumar Behera</td>
		      <td>12-22-2022</td>
		      <td>45</td>
		      <td>
		      	<div class="buttons">
		      		<button class="button is-danger is-rounded is-small">Delete User</button>
		      	</div>
		      </td>
		    </tr>
		  </tbody>
		</table>
			  <!-- ends -->
			</div>
		</div>
	</div>
</div>




<?= $this->endSection() ?>