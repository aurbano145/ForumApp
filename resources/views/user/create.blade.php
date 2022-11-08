<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">The Forum</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('post') }}">Posts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="flex-container_register">
            <p class="fs-1 fw-bold">Register</p>
            <div class="login_form shadow-lg p-3 mb-5 bg-body rounded">
                <form action="{{ url('user') }}" method="post">
                    @csrf
                    <div class="form-floating mb-4">
                        <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="20" class="form-control" id="name" name="name" placeholder="Enter your username...">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input value="{{ old('email') }}" required type="email" maxlength="50" class="form-control" id="email" name="email" placeholder="Enter your email...">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input value="{{ old('password') }}" required type="password" class="form-control" id="password" name="password" placeholder="Enter your password...">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input value="{{ old('birthdate') }}" required type="date" class="form-control" id="birthdate" name="birthdate" placeholder="dd/mm/yyyy">
                        <label for="birthdate">Birthdate</label>
                    </div>
                    <!--div class="mb-4">
                        <label for="repassword" class="form-label fw-semibold">Confirm password</label>
                        <input type="repassword" class="form-control" id="repassword" placeholder="Confirm your password...">
                    </div-->
                    <div class="form-row text-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <hr/>
                    <div class="mb-2 form-row text-center">
                        <p class="text-decoration-none">You have already an account? <a href="{{ url('user') }}" class="text-decoration-underline">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>