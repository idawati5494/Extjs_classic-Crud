<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top" id="mainNav">
	>
    <div class="container"> 
      <a class="navbar-brand" href="#page-top">WEB INDO</a>
      <button class="navbar-toggler navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			  <a class="nav-link js-scrool-trigger" href="http://localhost/dashboard/">HOME <span class="sr-only">(current)</span></a>
			
            </li>
            <li class="nav-item">
              <a class="nav-link js-scrool-trigger" href="http://localhost/Belajar_laravel/public/blog/create">CREATE</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#action" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ACTION
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="http://localhost/Belajar_laravel/public/blog/create">CREATE</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href=>EDIT</a>
               
            </li>
            </li>
              <li class="nav-item">
              <a class="nav-link js-scrool-trigger" href="#hubungi_kami">HUBUNGI KAMI</a>
            </li>
            </li>
            
              </div>
              </div>
            </li>
          </ul>
        </div>
    </nav>

<div class="card text-white bg-danger  mb-12">
	<div class="card-body">

		</div>
			<br>
			<br><br>
			<title>@yield('title')</title>
			<link rel="stylesheet" href="/css/master.css">
			<br>
		</head>
		<body>
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					
						
						
					
				@yield('content')
				<br>
				</div>
			</div>
		</div>
	<div>
</div>
<br>
<footer text align="center">
	
	&copy; laravel & sekolahkoding 2020
	</p>

</footer>
<script scr="/js/main.js"></script>
</body>
</html>