<?= $this->extend('templates/admintemplate') ?>


<?= $this->section('content') ?>
<div class="container">
	<h1 class="title is-1 has-text-centered has-text-primary-dark">Create Genral Knowledge</h1>
	<section class="section">
	<form class="form">
		<label class="label">Choose Category</label>
		<div class="select">
		  <select>
		    <option>History</option>
		    <option>Geography</option>
		    <option>Physics</option>
		    <option>Botany</option>
		    <option>Zoology</option>
		    <option>Science</option>
		    <option>Computer</option>
		    <option>Miscellaneous topic</option>

		  </select>
		</div>
		<!-- Create MCQ's -->
		<div class="field">
			<div class="control">
				<label class="label">Post Title</label>
				<input class="input" id="postTitle" type="text" placeholder="Enter Post Title">
			</div>
		</div>
		<div class="field">
			<div class="control">
					<label class="label">Description</label>
					<textarea class="textarea" name="postDescription" placeholder="Short Description"></textarea>
			</div>
		</div>
		<div class="field">
			<div class="control">
				<label class="label">Post Content</label>
				<textarea class="textarea" name="postContent" id="editor1"></textarea>
			</div>
		</div>
		<div class="field">
			<button class="button is-info has-text-centered">Create Post</button>
		</div>
	</form>
	</section>
</div>
<?= $this->endSection() ?>