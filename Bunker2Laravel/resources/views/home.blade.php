@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
					
					<!--Display data from HomeController-->
					<table class="table">
						<tr>
							<td scope="col">#</td>
							<td scope="col">Titel</td>
							<td scope="col">Info</td>
							<td scope="col">Afdeling</td>
						</tr>
						@foreach( $datas as $data)
						
						<tr>
							<th scope="row">{{ $data->id }}</th>
							<td>{{ $data->title }}</td>
							<td>{{ $data->info }}</td>
							<td>{{ $data->afdeling }}</td>
						</tr>
						
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
