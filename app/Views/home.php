<?php

use CodeIgniter\I18n\Time;

?>

<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<style>
	.multiple-card-slider .carousel-inner {
		padding: 1em;
	}

	.multiple-card-slider .card {
		margin: 0 0.5em;
		box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
		border: none;
	}

	.multiple-card-slider .carousel-control-prev,
	.multiple-card-slider .carousel-control-next {
		background-color: #e1e1e1;
		width: 3em;
		height: 3em;
		border-radius: 50%;
		top: 50%;
		transform: translateY(-50%);
	}

	.carousel-control-prev-icon,
	.carousel-control-next-icon {
		height: 2.5rem;
	}

	@media (min-width: 768px) {

		.multiple-card-slider .carousel-item {
			margin-right: 0;
			display: block;
			backface-visibility: visible;
		}

		.multiple-card-slider .carousel-item-50 {
			flex: 0 0 calc(100% / 2);
		}

		.multiple-card-slider .carousel-item-25 {
			flex: 0 0 calc(100% / 4);
		}

		.multiple-card-slider .carousel-inner {
			display: flex;
		}
	}

	@media (max-width: 768px) {
		.div-slider {
			display: none;
		}
		
	}
</style>




<div class="container-fluid py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row g-4">
					<!-- Left big card -->
					<div class="col-lg-6">
						<div class="card bg-image hover-zoom"
							style="background-position: center center; background-size: cover; height:30rem;">
							<img src="<?= $banner[0]['imagem']; ?>" style="height:30rem;" />
							<!-- Card Image overlay -->
							<div class="mask align-items-center p-3 p-sm-4"
								style="position: absolute; background-color: rgba(0, 0, 0, 0.6);">
								<div class="w-100" style="margin-top:12rem;">
									<!-- Card title -->
									<h2 class="h1"><a href="post-single-4.html" class="btn-link text-white">
											<?= $banner[0]['titulo']; ?>
										</a></h2>
									<p class="text-white"><?= $banner[0]['gancho']; ?></p>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center">
										<li class="nav-item pointer">
											<div class="d-flex align-items-center text-white position-relative">
												<?php if ($banner[0]['avatar'] != NULL && $banner[0]['avatar'] != ""): ?>
													<div class="avatar avatar-sm">
														<img class="avatar-img rounded-circle"
															src="<?= $banner[0]['avatar']; ?>" style="width:45px;"
															alt="avatar">
													</div>
												<?php endif; ?>
												<span class="ms-3">by <a href="#"
														class="stretched-link text-white btn-link"><?= $banner[0]['apelido']; ?></a></span>
											</div>
										</li>
										<li class="nav-item pointer text-white">
											<?= Time::createFromFormat('Y-m-d H:i:s', $banner[0]['publicado'])->toLocalizedString('dd/MM/yyyy'); ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Right small cards -->
					<div class="col-lg-6">
						<div class="row g-4">
							<!-- Card item START -->
							<div class="col-12">
								<div class="card bg-image hover-zoom"
									style="background-position: center center; background-size: cover; height:15rem;">
									<img src="<?= $banner[1]['imagem']; ?>" style="height:15rem;" />
									<!-- Card Image -->
									<!-- Card Image overlay -->
									<div class="mask align-items-center p-3 p-sm-4"
										style="position: absolute; background-color: rgba(0, 0, 0, 0.6);">
										<div class="w-100" style="margin-top:7rem;">
											<!-- Card title -->
											<h4 class="text-white"><a href="post-single-4.html"
													class="btn-link stretched-link text-reset"><?= $banner[1]['titulo']; ?></a>
											</h4>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center">
												<li class="nav-item pointer">
													<div class="d-flex align-items-center text-white position-relative">
														<?php if ($banner[1]['avatar'] != NULL && $banner[1]['avatar'] != ""): ?>
															<div class="avatar avatar-sm">
																<img class="avatar-img rounded-circle"
																	src="<?= $banner[1]['avatar']; ?>" style="width:45px;"
																	alt="avatar">
															</div>
														<?php endif; ?>
														<span class="ms-3">by <a href="#"
																class="stretched-link text-white btn-link"><?= $banner[1]['apelido']; ?></a></span>
													</div>
												</li>
												<li class="nav-item pointer text-white">
													<?= Time::createFromFormat('Y-m-d H:i:s', $banner[0]['publicado'])->toLocalizedString('dd/MM/yyyy'); ?>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->
							<!-- Card item START -->
							<div class="col-md-6">
								<div class="card bg-image hover-zoom"
									style="background-position: center center; background-size: cover; height:13rem;">
									<img src="<?= $banner[2]['imagem']; ?>" style="height:15rem;" />
									<!-- Card Image overlay -->
									<div class="mask align-items-center p-3 p-sm-4"
										style="position: absolute; background-color: rgba(0, 0, 0, 0.6);">
										<div class="w-100" style="margin-top:2rem;">
											<!-- Card category -->
											<h4 class="text-white"><a href="post-single-4.html"
													class="btn-link stretched-link text-reset"><?= $banner[2]['titulo']; ?></a>
											</h4>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center">
												<li class="nav-item pointer">
													<div class="d-flex align-items-center text-white position-relative">
														<?php if ($banner[2]['avatar'] != NULL && $banner[2]['avatar'] != ""): ?>
															<div class="avatar avatar-sm">
																<img class="avatar-img rounded-circle"
																	src="<?= $banner[2]['avatar']; ?>" style="width:45px;"
																	alt="avatar">
															</div>
														<?php endif; ?>
														<span class="ms-3">by <a href="#"
																class="stretched-link text-white btn-link"><?= $banner[2]['apelido']; ?></a></span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->
							<!-- Card item START -->
							<div class="col-md-6">
								<div class="card bg-image hover-zoom"
									style="background-position: center center; background-size: cover; height:13rem;">
									<img src="<?= $banner[3]['imagem']; ?>" style="height:15rem;" />
									<!-- Card Image overlay -->
									<div class="mask align-items-center p-3 p-sm-4"
										style="position: absolute; background-color: rgba(0, 0, 0, 0.6);">
										<div class="w-100" style="margin-top:2rem;">
											<h4 class="text-white"><a href="post-single-4.html"
													class="btn-link stretched-link text-reset"><?= $banner[3]['titulo']; ?></a>
											</h4>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center">
												<li class="nav-item pointer">
													<div class="d-flex align-items-center text-white position-relative">
														<?php if ($banner[3]['avatar'] != NULL && $banner[0]['avatar'] != ""): ?>
															<div class="avatar avatar-sm">
																<img class="avatar-img rounded-circle"
																	src="<?= $banner[3]['avatar']; ?>" style="width:45px;"
																	alt="avatar">
															</div>
														<?php endif; ?>
														<span class="ms-3">by <a href="#"
																class="stretched-link text-white btn-link"><?= $banner[3]['apelido']; ?></a></span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-lg-4">
				<div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
					<h3 class="m-0">Categorias</h3>
					<a class="text-secondary font-weight-medium text-decoration-none" href="">Ver Todos</a>
				</div>
				<div class="d-flex flex-wrap m-n1">
					<?php //foreach($widgetCategorias as $categorias): 
					?>
						<a href="<? //base_url().'site/artigos/'.$categorias['id'];
						?>" class="btn btn-sm btn-outline-secondary m-1"><? //$categorias['nome'];
						?></a>
					<?php //endforeach; 
					?>
				</div>
			</div> -->

			<section class="col-lg-12 div-slider">

				<div class="multiple-card-slider">
					<div id="carouselExampleControls2" class="carousel" data-bs-ride="false">
						<div class="carousel-inner">
							<?php foreach ($banner as $chave => $b): ?>
								<?php if ($chave > 3): ?>
									<div class="carousel-item carousel-item-25 <?= ($chave == 3) ? ('active') : (''); ?>">
										<div class="card bg-image hover-zoom">
											<!-- Card Image -->
											<img class="card-img" src="<?= $b['imagem']; ?>" alt="<?= $b['titulo']; ?>"
												style="height: inherit;">
											<!-- Card Image overlay -->
											<div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
												<!-- <div>
													<a href="#" class="badge bg-dark mb-2"><i
															class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
												</div> -->
												<div class="w-100 mt-auto">
													<!-- Card title -->
													<h4 class="text-white"><a
															href="<?= site_url('site/artigo/' . $b['url_friendly']) ?>"
															class="text-white btn-link"><?= $b['titulo']; ?></a>
													</h4>
													<!-- Card info -->
													<ul
														class="nav nav-divider text-white align-items-center d-none d-sm-inline-block small">
														<li class="nav-item">
															<div class="text-white">por <a
																	href="<?= site_url('site/artigo/' . $b['url_friendly']) ?>"
																	class="text-white btn-link"><?= $b['apelido']; ?></a>
															</div>
														</li>
														<li class="nav-item">
															<?= Time::createFromFormat('Y-m-d H:i:s', $b['publicado'])->toLocalizedString('dd/MM/yyyy'); ?>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>

			</section>

			<section class="col-lg-12 div-slider">

				<div class="m-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Últimos vídeos do Visão Libertária</h2>
					<p>Os vídeos mais recentes pra você se manter informado.</p>
				</div>

				<div class="multiple-card-slider">
					<div id="carouselExampleControls" class="carousel" data-bs-ride="false">
						<div class="carousel-inner">
							<?php for ($max = 0; $max < 5; $max++): ?>
								<div class="carousel-item carousel-item-50 active">
									<div class="card mb-3 shadow-0">
										<!-- Card img -->
										<div class="position-relative bg-image hover-overlay shadow-1-strong rounded"
											data-mdb-ripple-init data-mdb-ripple-color="light">
											<img class="card-img" alt="Card image" style="height:auto;"
												src="<?= $artigos[$max]['imagem']; ?>">
											<a href="<?= site_url('site/artigo/' . $b['url_friendly']) ?>">
												<div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2)"></div>
											</a>
											<!-- <div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<div class="w-100 mt-auto">
													<a href="#" class="badge text-bg-warning mb-2"><i
															class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
												</div>
											</div> -->
										</div>
										<div class="card-body px-3 pt-3">
											<h4 class="card-title"><a
													href="<?= site_url('site/artigo/' . $b['url_friendly']) ?>"
													class="btn-link text-reset fw-bold"><?= $artigos[$max]['titulo']; ?></a>
											</h4>
											<p class="card-text"><?= $artigos[$max]['gancho']; ?></p>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center">
												<li class="nav-item pointer">
													<div class="d-flex align-items-center position-relative">
														<?php if ($artigos[$max]['avatar'] != NULL && $artigos[$max]['avatar'] != ""): ?>
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"
																	src="<?= $artigos[$max]['avatar']; ?>" style="width:45px;"
																	alt="avatar">
															</div>
														<?php endif; ?>
														<span class="ms-3">por <a
																href="<?= site_url('site/artigo/' . $b['url_friendly']) ?>"
																class="stretched-link text-reset btn-link"><?= $artigos[$max]['apelido']; ?></a></span>
													</div>
												</li>
												<li class="nav-item pointer">
													<?= Time::createFromFormat('Y-m-d H:i:s', $artigos[$max]['publicado'])->toLocalizedString('dd/MM/yyyy'); ?>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<?php endfor; ?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</section>



			<?php if ($config['home_ultimos_videos_mostrar'] == '1'): ?>
				<div class="col-lg-8">
					<div class="row mb-3">
						<div class="mb-4 d-md-flex justify-content-between align-items-center">
							<h2 class="m-0"><i class="bi bi-megaphone"></i> Nossos vídeos</h2>
							<a class="text-secondary font-weight-medium text-decoration-none"
								href="<?= site_url('site/artigos') ?>">Ver Todos</a>
						</div>
						<div class="col-lg-12 row">

							<?php if (is_array($artigos)): ?>
								<?php foreach ($artigos as $chave => $artigo): ?>
									<?php if ($chave > 4): ?>
										<div class="card shadow-0 col-6 mb-3">
											<div class="row g-3">
												<div class="col-5">
													<img class="rounded" style="max-width: inherit;" src="<?= $artigo['imagem'] ?>"
														alt="">
												</div>
												<div class="col-7">
													<h6 class="m-0"><a href="<?= site_url('site/artigo/' . $artigo['url_friendly']); ?>"
															class="btn-link stretched-link text-reset">Ten
															<?= $artigo['titulo'] ?></a></h6>
													<!-- Card info -->
													<ul class="nav nav-divider align-items-center mt-1 small">
														<li class="nav-item">
															<?= Time::createFromFormat('Y-m-d H:i:s', $artigo['publicado'])->toLocalizedString('dd/MM/yyyy'); ?>
														</li>
													</ul>
												</div>
											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
							<?php else: ?>
								<div class="w-100 text-center">Nenhum artigo encontrado.</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="col-lg-4 pt-3 pt-lg-0">

				<div class="pb-3">

					<div class="mb-4 d-md-flex justify-content-between align-items-center">
						<h3 class="m-0">Esteira de Produção</h3>
					</div>
					<div class="py-2 px-3 text-center">
						<?php foreach ($widgetEsteiraProducao as $key => $qtde): ?>
							<div class="badge <?= getColors($key); ?> m-1 p-1">
								<?= $key; ?>:
								<?= number_format($qtde, 0, ',', '.'); ?>
							</div>
						<?php endforeach; ?>
					</div>

				</div>


				<?php if ($config['home_newsletter_mostrar'] == '0'): ?>
					<div class="pb-3">
						<div class="mb-4 d-md-flex justify-content-between align-items-center">
							<h3 class="m-0">Newsletter</h3>
						</div>
						<div class="bg-light text-center p-4 mb-3">
							<p>Assine nossa Newsletter
							<div class="input-group" style="width: 100%;">
								<input type="text" class="form-control form-control-lg" placeholder="Seu e-mail">
								<div class="input-group-append">
									<button class="btn btn-primary">Assinar</button>
								</div>
							</div>
							<small>Toda semana, um e-mail com as novidades.</small>
						</div>
					</div>
				<?php endif; ?>

				<?php if ($config['home_talvez_goste_mostrar'] == '1'): ?>
					<div class="col-lg-12 pb-3">
						<div class="mb-4 d-md-flex justify-content-between align-items-center">
							<h3 class="m-0">Talvez você goste</h3>
						</div>
						<?php if (is_array($rand)): ?>
							<?php foreach ($rand as $chave => $r): ?>

								<div class="d-flex position-relative mb-3">
									<span
										class="me-3 mt-n1 fa-fw fw-bold fs-3 text-dark opacity-25"><?= ($chave + 1 > 10) ? ('0' . $chave + 1) : ($chave + 1); ?>
									</span>
									<h6><a href="<?= site_url('site/artigo/' . $r['url_friendly']); ?>"
											class="text-reset btn-link"><?= $r['titulo']; ?></a> -
										<?= Time::createFromFormat('Y-m-d H:i:s', $r['criado'])->toLocalizedString('dd MMMM yyyy'); ?>
									</h6>
								</div>
							<?php endforeach; ?>
						<?php else: ?>
							<div class="text-center">Nenhum artigo encontrado.</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	$('.multiple-card-slider .carousel').each(function (e) {
		var currentCarouselId = '#' + $(this).attr('id');
		const multipleItemCarousel = document.querySelector(currentCarouselId);
		const carousel = new bootstrap.Carousel(multipleItemCarousel, {
			interval: false
		})
		var carouselWidth = $(currentCarouselId + ' .carousel-inner')[0].scrollWidth;
		var cardWidth = $(currentCarouselId + ' .carousel-item').width();
		var scrollPosition = 0;
		var tamanho = 0;
		var tempo = 0;

		if ($(currentCarouselId + ' .carousel-item').hasClass('carousel-item-50')) {
			tamanho = 2;
			tempo = 3000;
		}
		if ($(currentCarouselId + ' .carousel-item').hasClass('carousel-item-25')) {
			tamanho = 4;
			tempo = 5000;
		}

		var intervalId = window.setInterval(function () {
			$(currentCarouselId + ' .carousel-control-next').trigger('click');
		}, tempo);

		$(currentCarouselId + ' .carousel-control-next').on('click', function (e) {
			if (scrollPosition < (carouselWidth - (cardWidth * (tamanho + 1)))) {
				scrollPosition = scrollPosition + cardWidth;
				$(currentCarouselId + ' .carousel-inner').animate({ scrollLeft: scrollPosition }, 350);
			} else {
				scrollPosition = 0;
				$(currentCarouselId + ' .carousel-inner').animate({ scrollLeft: scrollPosition }, 350);
			}
		});
		$(currentCarouselId + ' .carousel-control-prev').on('click', function () {
			if (scrollPosition >= cardWidth) {
				scrollPosition = scrollPosition - cardWidth;
				$(currentCarouselId + ' .carousel-inner').animate({ scrollLeft: scrollPosition }, 350);
			} else {
				scrollPosition = carouselWidth - (cardWidth * tamanho);
				$(currentCarouselId + ' .carousel-inner').animate({ scrollLeft: scrollPosition }, 350);
			}
		});

	});
</script>
<?= $this->endSection(); ?>