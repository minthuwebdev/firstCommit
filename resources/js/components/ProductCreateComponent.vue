<template>
	<div class="row">
		<div class="col-12">
			<form method="post">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
			@endforeach -->
			<div class="form-group">
				<label for="name">Name :</label>
				<input name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="">
  
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				<textarea name="address" class="form-control" id="student_address" rows="3" placeholder="You address"></textarea>
				
					<small class="form-text text-danger">
						
					</small>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</template>