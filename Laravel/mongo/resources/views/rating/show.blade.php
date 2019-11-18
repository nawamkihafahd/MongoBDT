@extends('rating.layout')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			Show
		</div>
		<div class="card-body">
		<div class="row">
        <div class="col-md-2">
            <h4>Rank</h4>
			<h4>Title</h4>
			<h4>Year</h4>
			<h4>Score</h4>
			<h4>Metascore</h4>
        </div>
		<div class="col-md-4">
            <h4>:{{$model->Rank}}</h4>
			<h4>:{{$model->Title}}</h4>
			<h4>:{{$model->Year}}</h4>
			<h4>:{{$model->Score}}</h4>
			<h4>:{{$model->Metascore}}</h4>
        </div>
		<div class="col-md-2">
            <h4>Genre</h4>
			<h4>Vote</h4>
			<h4>Director</h4>
			<h4>Runtime</h4>
			<h4>Revenue</h4>
        </div>
		<div class="col-md-4">
            <h4>:{{$model->Genre}}</h4>
			<h4>:{{$model->Vote}}</h4>
			<h4>:{{$model->Director}}</h4>
			<h4>:{{$model->Runtime}}</h4>
			<h4>:{{$model->Revenue}}</h4>
        </div>
		</div>
		<div class="row">
			<h5>Description:</h5>
			<h5>{{$model->Description}}</h5>
		</div>
		<div class="row">
			<div class="col-md-5">
			</div>
			<div class="col-md-1">
				<a class="btn btn-primary" href="{{ route('rating.edit', $model->id) }}">Edit</a>
				
			</div>
			<div class="col-md-1">
				<form action="{{ route('rating.destroy', $model->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
			<div class="col-md-5">
			</div>
		</div>
		</div>
	</div>
</div>
@endsection