<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h4>Login Here</h4>
            <hr>
            <form action="{{route('login-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="name" value="{{old ('email')}}">
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                 </div>

            
                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" placeholder="Enter password" name="password" value="">
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                 </div>

                 <div class="form-group">
                    <button class="btn-warning" type="submit"> Login</button>
                 </div>
                 <br>
                    <a href="/register">Don't have an account? Register!</a>

            </form>
        </div>
    </div>
</div>

    
</body>
</html>