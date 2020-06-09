@extends('apps.header')

@section('content')

@push('boot')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endpush

@push('css')
	 <link rel="stylesheet" type="text/css" href="apps/style.css">
@endpush

<div class="container well col-lg-6 bg-dark" style="position:relative;top:20px">

		<div class="card">
			<div class="card-header">
				<h1>Welcome to Laravel</h1>
			</div>
			<div>
				<form action="{{ url('/admin') }}">
				<div class="row" style="margin-top:10px;margin-left:5px">
					<div class="col-lg-5">
						<input type="text" id="number" name="number" class="form-control" placeholder="Enter number">
						{{ $errors->first('number') }}
					</div>
					<div class="col-lg-5">
						<input type="text" name="name" class="form-control" placeholder="Enter password">
						{{ $errors->first('name') }}
					</div>
					<div class="col-lg-2">
						<input type="submit" value="SUBMIT" class="btn btn-info">
					</div>
				</div>
				</form>
			    </div>					 
				<div class="card-body " >
				  
				  <table class="table ">
				  	<thead>
				  		<th>SR</th>
				  		<th>NAME</th>
				  		<th>EMAIL</th>
				  		<th>MOBILE</th>
				  		<th>PASSWORD</th>
				  	</thead>
				  	<tbody>
				  		@php
				  		  $number = 1;
				  		 @endphp
				    @foreach($data as $result)

				  		<tr>
				  			<td> {{ $number }}</td>
				  			<td>{{ $result->name }}</td>
				  			<td>{{ $result->email }}</td>
				  			<td>{{ $result->mobile  }}</td>
				  			<td>{{ $result->password  }}</td>
				  			
				  		</tr>

				  		 @php
				  		 $number++ ;
				  		 @endphp
				    @endforeach 
				  		
				  	</tbody>
				  </table>
			     </div>
		 </div>
	</div>
	

  
@endsection	

