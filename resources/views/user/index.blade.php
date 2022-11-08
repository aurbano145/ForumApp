<!--?php
 
include('config.php');
session_start();
 
if (isset($_POST['submit'])) {
 
    $username = $_POST['name'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE name=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>
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
        
        <div class="flex-container_login">
            <p class="fs-1 fw-bold">Log in</p>
            <div class="login_form shadow-lg p-3 mb-5 bg-body rounded">
                <form>
                    <div class="form-floating mb-4">
                        <input type="name" class="form-control" id="name" name="name" placeholder="Enter your username...">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password...">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-row text-center">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                    <hr/>
                    <div class="mb-2 form-row text-center">
                        <p class="text-decoration-none">Haven't already an account? <a href="{{ url('user/create') }}" class="text-decoration-underline">Register now</a></p>
                    </div>
                </form>
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>