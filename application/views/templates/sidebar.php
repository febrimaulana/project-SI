<div class="page-content d-flex align-items-stretch">
	<!-- Side Navbar -->
	<nav class="side-navbar">
		<!-- Sidebar Header-->
		<div class="sidebar-header d-flex align-items-center">
			<div class="avatar"><img src="<?= base_url('asset') ?>/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
			<div class="title">
				<h1 class="h4">Developer TA/KP</h1>
				<p>Web Programming</p>
			</div>
		</div>
		<ul class="list-unstyled p-0 mb-1">
			<li><a href="<?= base_url(); ?>"> <i class="icon-home"></i>Home </a></li>
		</ul>
		<?php $aktor = $this->session->userdata('id_aktor'); ?>
		<?php $menutitle = $this->menu->GetTitleMenu($aktor); ?>
		<?php foreach ($menutitle as $tl) { ?>
			<span class="heading"><?= $tl['nama_title_menu'] ?></span>
			<?php
				$titleid = $tl['id_title_menu'];
				$submenu = $this->menu->GetSubMenu($titleid);
				?>
			<?php foreach ($submenu as $sm) : ?>
				<ul class="list-unstyled p-0">
					<?php if ($sm['nama_sub_menu'] == $title) { ?>
						<li class="active"><a href="<?= base_url() . $sm['url_sub_menu'] ?>"> <i class="<?= $sm['icon_sub_menu'] ?>"></i><?= $sm['nama_sub_menu'] ?></a></li>
					<?php } else { ?>
						<li><a href="<?= base_url() . $sm['url_sub_menu'] ?>"> <i class="<?= $sm['icon_sub_menu'] ?>"></i><?= $sm['nama_sub_menu'] ?></a></li>
					<?php } ?>
				</ul>
			<?php endforeach; ?>
		<?php } ?>
	</nav>

	<div class="content-inner">
		<!-- Page Header-->
		<header class="page-header">
			<div class="container-fluid">
				<h2 class="no-margin-bottom"><?= $title; ?></h2>
			</div>
		</header>
		<!-- Dashboard Counts Section-->
		<section class="dashboard-counts no-padding-bottom">
