<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form class="col-md-12 d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4">
        <h3 class="m-3">Register</h3>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
            </div>

            <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</form>
    
</body>
</html>