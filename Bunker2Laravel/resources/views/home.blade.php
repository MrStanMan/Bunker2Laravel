@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex;">
					<div style="width: 50%;">Dashboard</div>
					<div style="text-align: right; width: 50%;"><a href="{{ url('add') }}">ADD</a></div>
				</div>

                <div class="card-body">
                 	<!--Display data from HomeController-->
					<table class="table">
						<tr>
							<td scope="col">#</td>
							<td scope="col">Titel</td>
							<td scope="col">Info</td>
							<td scope="col">Afdeling</td>
							<td scope="col"></td>
						</tr>
						
						@foreach( $datas as $data)
						<tr>
							<th scope="row">{{ $data->id }}</th>
							<td>{{ $data->title }}</td>
							<td>{{ str_limit($data->info, 60) }}</td>
							<td>{{ $data->afdeling }}</td>
							<td><a href="{{url('/delete/'.$data->id) }}">DEL</a></td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
