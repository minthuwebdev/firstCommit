<template>
	<div class="row">
		<div class="col-12">
			<form method="post">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
			@endforeach -->
			<div class="form-group">
				<label for="name">Name :</label>
				<input v-model="name" name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="">
  
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				<textarea v-model="address" name="address" class="form-control" id="student_address" rows="3" placeholder="You address"></textarea>
				
					<small class="form-text text-danger">
						
					</small>
			</div>
			<button @click.prevent="createStudent()" type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</template>
<script>
    export default {
    	data() {
    		return {
    			name: "",
    			address: ""
    		}
    	},
    	mounted() {

    	},
    	methods: {
    		createStudent: function() {
    			axios.post('/api/students/create', {
    				name: this.name,
    				address: this.address
  				})
  				.then(function (response) {
    				redirect: { name: "example-component" }
  				})
  				.catch(function (error) {
    				console.log(error)
  				});

    		}
    	}

    }
</script>







