<h1>hello world!</h1>

@auth

<div>
				<form method="POST" action="{{ url('/admin') }}">
					@csrf
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

@endauth

@guest

you are guest

@endguest