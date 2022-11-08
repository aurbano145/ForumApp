<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <div class="flex-container_posts">
            @foreach($posts as $post)
            <a class="post_content card text-decoration-none text-reset" href="{{ url('post/' . $post->id) }}">
                <div class="card-body">
                    <div class="post_data">
                        <div class="user_img">
                            <img class="user_img" src="{{ url('assets/img/user.png') }}" width=50 height=50>
                        </div>
                        <div class="user_info">
                            <h6 class="card-subtitle mb-2">{{ $post->user->name }}</h6>
                            <p class="card-text">{{ $post->message }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            
            <a class="text-decoration-none" href="{{ url('post/create') }}">
                <button type="button" class="btn btn-primary" style="margin-top: 10px; border-radius: 100%">
                    <i class="material-icons">add</i>
                </button>
            </a>
        </div>
        
        @section('scripts')
        <script src="{{ url('assets/js/commonindex.js') }}"></script>
        @endsection
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>