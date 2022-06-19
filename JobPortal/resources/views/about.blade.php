<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- web icon --}}
    <link rel="icon" sizes="32x32" href="/favicon.png">

    {{-- custom css --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><span data-feather="briefcase"></span>  Job Portal</a>
                <button class="navbar-toggler btn-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about*') ? 'active' : '' }} " href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('team*') ? 'active' : '' }} " href="/team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('jobs*') ? 'active' : '' }} " href="/jobs">Job
                                Search</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/register/company">Post Job</a>
                            </li>
                        @endguest
                        @can('recruit')
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/lists">Post Job</a>
                            </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }} " href="/contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" class="lh-md"
                                    href="#" role="button" aria-expanded="false">{{ auth()->user()->name }} <i
                                        class="ms-1" style="width:20px; height:20px" data-feather="user"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    @can('recruit')
                                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                    @endcan
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="/login" class="rounded-0 btn btn-outline-light">Login</a>
                                    </li>
                                    <li>
                                        <a href="/register" class="rounded-0 btn btn-light">Register</a>
                                    </li>
                                @endauth
                            </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1200x500/?deal" style="opacity: 80%" class="d-block w-100 bg-dark" alt="Heroes image">
                    <div class="carousel-caption d-none d-md-block my-lg-5">
                    <h3>About Job Portal</h3>
                    <p>Job Portal is the topest job site in the worldwith unique visitors every month. Indeed strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities</p>
                    <a class="btn btn-secondary" href="/team">Expert Team</a>
                </div>
                </div>
    </main>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<!--- About Us 
Styling 
--->

<style>
.user-pic {
    width: 250px;
    height: 250px;
    overflow: hidden;
    border-radius: 100%;
    margin: 20px auto 20px;
    border-left: 6px solid #ddd;
    border-right: 6px solid #ddd;
    border-top: 6px solid #212529;
    border-bottom: 6px solid #212529;
    transform:  rotate(720deg);
    transition: 1.0s;
}
.card-box:hover .user-pic {
    transform: rotate(360deg);
    transform: scale(1.0);
}
.card-box {
    padding: 15px;
    background-color: #fdfdfd;
    margin: 20px 0px;
    border-radius: 10px;
    border: 1px solid #eee;
    box-shadow: 0px 0px 8px 0px #d4d4d4;
    transition: 0.5s;
}
.card-box:hover {
	border: 1px solid #212529;
}
.card-box p {
    color: #212529;
}

.btn-primary {
    border-color: #212529;
    background-color: #212529;
    border: 1px solid #212529;
}

.btn-primary:hover{
     background: #ffffff;
     color: black;
}
</style>