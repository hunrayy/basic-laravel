<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form class="col-md-12 d-flex justify-content-center align-items-center" style="height: 100vh;" method="post" action="/register">
    @csrf
    <div class="col-md-4">
        <h3 class="m-3">Register</h3>
        @if (session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
        @endif
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div class="text-danger">{{ $error}}</div>
            @endforeach
        </div>
        @endif
        <!-- firstname input -->
        <div class="form-outline mb-4">
            <input type="text" class="form-control" name="firstname" />
            <label class="form-label">Firstname</label>
        </div>

        <!-- lastname input -->
        <div class="form-outline mb-4">
            <input type="text" class="form-control" name="lastname" />
            <label class="form-label">Lastname</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" class="form-control" name="email" />
            <label class="form-label" >Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" class="form-control" name="password" />
            <label class="form-label" >Password</label>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" >gender</label>
            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <!-- <input class="form-check-input" type="checkbox" checked /> -->
                 
                <label class="form-check-label"> Remember me </label>
            </div>
            </div>

            <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4">Sign in</button>

        <div class="text-center">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</form>
    
</body>
</html>