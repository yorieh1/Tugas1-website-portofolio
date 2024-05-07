<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>ADMIN-PORTOFOLIO</title>

	<link href="/asset/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">PORTOFOLIO</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{ route('home') }}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('profil') }}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('pendidikan') }}">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Pendidikan</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('kontak') }}">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Kontak</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('pengalaman') }}">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Pengalaman</span>
            </a>
           </a>
                 </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('keahlian') }}">
            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Keahlian</span>
           </a>
					

					
					

					

					
					<li class="sidebar-header">
						setting
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="btn btn-danger">Logout</span>
            </a>
		
			{{-- <a class="dropdown-item" href="{{ route('logout') }}"
			onclick="event.preventDefault();
						  document.getElementById('logout-form').submit();">
			 {{ __('Logout') }}
		 </a> --}}

		 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			 @csrf
		 </form>
		</li>		
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Portofolio Yori Saputra</strong>
						<div class="mb-3 text-sm">
							Tampilkan tentang diri anda.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Yori Saputra</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="col-lg-12">
					@if (Session::has('success'))
						<div class="pt-3">
							<div class="alert alert-success alert-simple alert-inline show-code-action">
								{{ Session::get('success') }}
							</div>
						</div>
					@endif
					@if (Session::has('error'))
						<div class="pt-3">
							<div class="alert alert-danger alert-simple alert-inline show-code-action">
								{{ Session::get('error') }}
							</div>
						</div>
					@endif
			
					@if ($errors->any())
						<div class="pt-3">
							<div class="alert alert-danger alert-simple alert-inline show-code-action">
								<ul>
									@foreach ($errors->all() as $data)
										<li>{{ $data }}</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endif
				</div>
                @yield('content')
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Yori Saputra</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>PortfolioSaya</strong></a>								&copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="/asset/js/app.js"></script>

	
	
	
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>