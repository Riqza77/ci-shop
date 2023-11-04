<nav class="navbar navbar-expand-md navbar-light fixed-top bg-warning">
	<div class="container">
		<a class="navbar-brand text-white" href="<?= base_url() ?>">Fazadesain.id </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<?php $role = $this->session->userdata('role'); ?>
					<?php if($role != 'admin') : ?>
					<?php else: ?>
				<li class="nav-item dropdown active">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">Manage</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
						<a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
						<a href="<?= base_url('order') ?>" class="dropdown-item">Order</a>
						<a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
					</div>
				</li>
					<?php endif; ?>
			</ul>
			<ul class="navbar-nav">
					<?php if($role != 'admin') : ?>
				<li class="nav-item active">
					<a class="nav-link text-dark" href="<?= base_url('home') ?>">Produk <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart 
						<?php if (getCart() == 0):?>
                        <?php else: ?><span class="badge badge-primary small mb-2"><?= getCart() ?></span>
                        <?php endif; ?></a>
				</li>
					<?php endif; ?>
				<?php if (!$this->session->userdata('is_login')) : ?>
					<li class="nav-item">
						<a href="<?= base_url('login') ?>" class="nav-link">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('register') ?>" class="nav-link">Register</a>
					</li>
				<?php else : ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata("name") ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">

					<?php if($role != 'admin') : ?>
							<a href="<?= base_url('profile') ?>" class="dropdown-item">Profile</a>
							<a href="<?= base_url('myorder') ?>" class="dropdown-item">Orders</a>
						<?php endif; ?>
							<a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>