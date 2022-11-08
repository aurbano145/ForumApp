<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post</title>
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
                            <a class="nav-link active" aria-current="page" href="{{ url('post') }}">Posts</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-primary" type="button" href="{{ url('user') }}">Log in</a>
                    </form>
                </div>
            </div>
        </nav>
        
        @php
            use Carbon\Carbon;
        @endphp
        <div class="flex-container_post_show">
            <div class="post_show_upbar">
                <a href="{{ url('post') }}">
                    <img src="{{ url('assets/img/arrowback.png') }}" width=25 height=25>
                </a>
            </div>
            <div class="post_show_content">
                <div class="user_data">
                    <img class="user_img" src="{{ url('assets/img/user.png') }}" width=50 height=50>
                    <h6 class="card-subtitle mb-2">{{ $post->user->name }}</h6>
                </div>
                <div class="user_info">
                    <h4 class="card-text">{{ $post->message }}</h4>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>