@extends('layouts.main')

@section('container')
    <section class="border shadow">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1200x500/?deal" style="opacity: 30%" class="d-block w-100 bg-dark"
                        alt="Heroes image">
                </div>
                <div class="carousel-caption d-none d-md-block my-lg-5">
                    <h3>Find your dream job here</h3>
                    <p>Various career opportunities await you.
                        Find the right career and connect with companies anytime, anywhere.</p>
                    <a class="btn btn-secondary" href="/register">Register Now</a>
                </div>
            </div>
            <div class="row justify-content-center px-3 py-4 d-block d-md-none">
                <div class="col text-center ">
                    <h3>Find your dream job here</h3>
                    <p>Some representative placeholder content for the first slide.And an even wittier subheading to boot.
                        Jumpstart
                        your
                        marketing
                        efforts with this example based on Apple's marketing pages.</p>
                    <a class="btn btn-dark" href="/register">Register Now</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-md-flex justify-content-evenly flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-dark my-3 me-md-3 pt-3 px-3 shadow pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Job Seekers</h2>
                    <p class="lead">Find and get better job opportunities according to skills and location.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <a href="/jobs" class="btn btn-dark px-5 py-3" style="position:relative; top:40%;">Search a job</a>
                </div>
            </div>
            <div class="bg-light my-3  me-md-3 pt-3 px-3 shadow pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Company</h2>
                    <p class="lead">Post job advertisements to connect with the most potential job seekers.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <a href="/register/company" class="btn btn-light px-5 py-3" style="position:relative; top:40%;">Post a
                        job</a>
                </div>
            </div>
        </div>
    </section>
    


    <!--- About 
    Us --->

<main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1387x768/?deal" style="opacity: 80%" class="d-block w-100 bg-dark" alt="Heroes image">
                    <div class="carousel-caption d-none d-md-block my-lg-5">
                    <h3>About</h3>
                    <h3>Job Portal</h3>
                    <p>Job Portal is the topest job site in the worldwith unique visitors every month. Indeed strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities</p>
                    <a class="btn btn-secondary" href="/team">Expert Team</a>
                   </div>
                </div>
            </div>
     </div>
</main>

<!--- Expert 
Team --->

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 mt-4 mb-4">
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



@endsection