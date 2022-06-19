

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
        <div class="container mt-2">
            @yield('container')
        </div>
    </main>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<!--- Expert Team --->

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                <br>
				<h2 class="text-center">Our Expert Team</h2>
				<p class="text-center">Meets talented group with a shared vision of delivering consistently</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/abdullah.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Abdullah</h4>
					<h6>Database Specialist</h6>
					<hr>
					<p>As a database specialist, mine duties include designing database elements, retrieving data for reports, maintaining secure data backup systems, running tests on database systems, and debugging database issues.</p>
					<hr>
					<a href="https://www.facebook.com/profile.php?id=100010239768044" class="btn btn-primary">Know More</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/ossamamehmood.png" class="img-fluid" alt="User Pic">
					</div>
					<h4>Ossama Mehmood 샘</h4>
					<h6>User Interface Designer</h6>
					<hr>
					<p>Started my career at the age of Sixteen (16) as a Graphic Designer. To upvoke mine jounrey strength in myself as a User Interface Designer, Website and Software Designer       
                    <br><a href="https://ossamamehmood.me">ossamaehmood</a></p>
					<hr>
					<a href="https://www.linkedin.com/in/ossamamehmood" class="btn btn-primary">Know More</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/hamzaaltaf.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Hamza Altaf</h4>
					<h6>Backend End Developer</h6>
					<hr>
					<p>As a Back-end developers create, code, and improve the server, server-side applications, and databases that, when combined with front-end codes, help create a functional, seamless experience for the end-user.</p>
					<hr>
                    <a href="https://www.linkedin.com/in/hamza-altaf-b7a3751b0" class="btn btn-primary">Know More</a>
                </div>
			</div>
		</div>
        <br>
	</div>
</body>

<!--- Team 
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
    transform: rotate(0deg);
    transform: scale(1.0);
}
.card-box {
    padding: 15px;
    background-color: #fdfdfd;
    margin: 20px 0px;
    border-radius: 10px;
    border: 1px solid #eee;
    box-shadow: 0px 0px 0px 0px #d4d4d4;
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