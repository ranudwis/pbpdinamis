<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="bs/jquery.min.js"></script>
    <script src="bs/popper.min.js"></script>
    <script src="bs/js/bootstrap.min.js"></script>
	<link href="{{ asset('fontawesome/css/all.min.css') }}"rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
	<title></title>
</head>
<body>
	<div class="card">
	  <div class="card-header">Log-in</div>
	  <div class="card-body">
	    <form name="login" method="post" action="{{ url('login') }}">
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            @endif

	    	<table>
	    		<tr>
	    			<td><i class="fas fa-envelope"></i></td>
	    			<td>
	    				<input type="text" class="form-control" name="email" autofocus placeholder="Email">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td><i class="fas fa-key"></i></td>
	    			<td>
	    				<input type="text" class="form-control" name="password" placeholder="Password">
	    			</td>
	    		</tr>
	    	</table>
			<button type="submit" class="btn btn-primary" name="login">Login</button>
		</form>
	  </div>
	</div>
</body>
</html>
