<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post Create</title>
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
                </div>
            </div>
        </nav>
        
        @php
            use Carbon\Carbon;
        @endphp
        <div class="flex-container_post_create">
            <div class="post_creation shadow-lg p-3 mb-5 bg-body rounded">
                <form action="{{ url('post') }}" method="post">
                    @csrf
                    <div class="form-floating mb-4">
                        <textarea value="{{ old('message') }}" required type="text" minlength="1" maxlength="150" class="form-control" id="message" name="message" placeholder="Enter here your message..."></textarea>
                        <label for="message">Message</label>
                    </div>
                    <!--div class="form-floating mb-4">
                        <input value="{{ old('userid') }}" required type="number" maxlength="50" class="form-control" id="userid" name="userid">
                        <label for="userid">User ID</label>
                    </div-->
                    <div class="form-row text-center">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{ url('post') }}">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>