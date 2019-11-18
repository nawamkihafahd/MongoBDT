@extends('rating.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Rating Data</div>

                <div class="card-body">
                    
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action= "{{ route('rating.store') }}" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="Rank">Rank: </label>
							<input type="text" class="form-control" id="Rank" name="Rank" placeYear="Rank*">
						</div>
						<br>
						<div class="form-group">
							<label for="Title">Title: </label>
							<input type="text" class="form-control" id="Title" name="Title" placeYear="Title*">
						</div>
						<br>
						<div class="form-group">
							<label for="Year">Year: </label>
							<input type="text" class="form-control" id="Year" name="Year" placeYear="Year*">
						</div>
						<br>
						<div class="form-group">
							<label for="Score">Score: </label>
							<input type="text" class="form-control" id="Score" name="Score" placeScore="Score*">
						</div>
						<br>
						<div class="form-group">
							<label for="Metascore">Metascore: </label>
							<input type="text" class="form-control" id="Metascore" name="Metascore" placeMetascore="Metascore*">
						</div>
						<br>
						<div class="form-group">
							<label for="Genre">Genre: </label>
							<input type="text" class="form-control" id="Genre" name="Genre" placeGenre="Genre*">
						</div>
						<br>
						<div class="form-group">
							<label for="Vote">Vote: </label>
							<input type="text" class="form-control" id="Vote" name="Vote" placeVote="Vote*">
						</div>
						<br>
						<div class="form-group">
							<label for="Director">Director: </label>
							<input type="text" class="form-control" id="Director" name="Director" placeDirector="Director*">
						</div>
						<br>
						<div class="form-group">
							<label for="Runtime">Runtime: </label>
							<input type="text" class="form-control" id="Runtime" name="Runtime" placeRuntime="Runtime*">
						</div>
						<br>
						<div class="form-group">
							<label for="Revenue">Revenue: </label>
							<input type="text" class="form-control" id="Revenue" name="Revenue" placeRevenue="Revenue*">
						</div>
						<br>
						<div class="form-group">
							<label for="Description">Description: </label>
							<input type="text" class="form-control" id="Description" name="Description" placeDescription="Description*">
						</div>
						<br>
						
						
						
						
						
						<br>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
					<script>
						// Add the following code if you want the name of the file appear on select
						$(".custom-file-input").on("change", function() {
							var fileName = $(this).val().split("\\").pop();
							$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
						});
					</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection