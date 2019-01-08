@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">
					Add item
				</div>
				
                <div class="card-body">
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
								<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action="{{ url('/add/create') }}" method="post" id="data">
						{{csrf_field()}}
						<table class="table">
							<div class="form-group">
								<tr>
									<td>Titel *</td>
									<td><input type="text" name="title" class="form-control" placeholder="" /></td>
								</tr>
							</div>
							<div class="form-group">
								<tr>
									<td>Info *</td>
									<td><textarea name="info" class="form-control" form="data"></textarea></td>
								</tr>
							</div>
							<div class="form-group">
								<tr>
									<td>Afdeling *</td>
									<td><input type="text" name="afdeling" class="form-control" placeholder="" /></td>
								</tr>
							</div>
							<div class="form-group">
								<tr>
									<td><input type="submit" class="btn btn-primary" /><td>
								</tr>
							</div>
							<tr>
							<td>
							<i>* required</i>
							</td>
							</tr>
						</table>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
