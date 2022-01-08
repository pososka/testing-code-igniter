<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php $this->hooks->call_hook('head'); ?>
</head>
<body>
	<div class="body">
		<header id="masthead" class="site-header header">
			<nav class="navbar navbar-expand-lg navbar-dark px-0">
				<div class="col-lg-2 d-flex justify-content-between site-branding">
					<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" class="custom-logo">

					<button class="navbar-toggler border-0" data-target="#sidebar">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>

				<form role="search" class="col-lg-6 collapse navbar-collapse" method="GET" action="/">
					<input type="search" class="form-control" placeholder="Поиск" value="" name="s">
					<button class="btn btn-outline-success ml-2" type="submit">Поиск</button>
				</form>

				<div id="header-navigation" class="col-lg-4 collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="" class="nav-link rcl-login">Вход</a>
						</li>

						<li class="nav-item">
							<a href="" class="nav-link rcl-register">Регистрация</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-lg-2 d-lg-block sidebar" id="sidebar">
					<button class="sidebar-toggler" data-target="#sidebar">
						<span class="fa fa-times"></span>
					</button>
					
					<div class="sidebar__inner">
						<div class="sidebar-ex">
							
							<div id="header-navigation-sidebar" class="d-lg-none">
								<ul class="nav justify-content-around">
									<li class="nav-item">
										<a href="" class="nav-link rcl-login">Вход</a>
									</li>

									<li class="nav-item">
										<a href="" class="nav-link rcl-register">Регистрация</a>
									</li>
								</ul>
							</div>

							<form role="search" class="px-3 py-3 d-lg-none d-flex" method="GET" action="">
								<input type="search" class="form-control" placeholder="Поиск" value="" name="s">
								<button class="btn btn-outline-success ml-2" type="submit">Поиск</button>
							</form>
						</div>

						<nav class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url(); ?>">Главная</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('user_guide/'); ?>">Документация</a>
							</li>
						</nav>
					</div>
				</nav>

				<main id="primary" class="col-lg-10 site-main p-0">
					<div class="container pt-3">
						