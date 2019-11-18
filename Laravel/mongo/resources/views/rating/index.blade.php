@extends('rating.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movie Ratings</div>

                <div class="card-body">
					
					<h4>Rated Movies: {{ $count }}</h4>
					<br>
					<h4>Average Raters: {{ $average }}</h4>
					<br>
					<a class="btn btn-primary" href="{{route('rating.create')}}">Add New</a>
					<table class="table table-striped table-dark">
						<tr>
							<th>Rank</th>
							<th>Title</th>
							<th>Score</th>
							<th>Vote</th>
							<th>Action</th>
						</tr>
						@foreach($models as $model)
						<tr>
							<td>{{ $model->Rank }}</td>
							<td>{{ $model->Title }}</td>
							<td>{{ $model->Score }}</td>
							<td>{{ $model->Vote }}</td>
							<td>{{ $model->Action }}</td>
							<td>
								<a class="btn btn-primary" href="{{ route('rating.show', $model->id) }}">Show</a>
                                    <!-- /btn-group-->
                                    <!--div class="btn-group">
                                        <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            
											<a class="dropdown-item" href="{{ route('rating.edit', $model->id) }}">Edit</a>
                                            <form action="{{ route('rating.destroy', $model->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="dropdown-item">Delete</button>
                                            </form>
											
                                        </div>
                                        </div>
                                    </div-->
										
                                    <!-- /btn-group-->
                            </td>
						</tr>
						@endforeach
					</table>
					{{ $models->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection