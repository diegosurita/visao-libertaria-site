<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container text-center w-auto">
	<div class="row py-4">
		<div class="col-12">
			<h1 class="mb-0 h2">Acesse sua conta de colaborador</h1>
		</div>
	</div>
	<div class="justify-content-center row">
		<form class="card form-signin col-4 p-4" id="esqueci" method="post">

			<?php if ($formulario == 'email'): ?>
				<div class="form-label-group mb-3">
					<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required
						autofocus />
				</div>
			<?php elseif ($formulario == 'senha'): ?>
				<div class="form-label-group mb-3">
					<input type="password" id="senha" name="senha" class="form-control" placeholder="Nova Senha" required
						autofocus />
				</div>

				<div class="form-label-group mb-3">
					<input type="password" id="senhaconfirmacao" name="senhaconfirmacao" class="form-control"
						placeholder="Digite novamente a Senha" required autofocus />
				</div>
			<?php endif; ?>
			<div class="d-flex justify-content-center">
				<div class="h-captcha" data-sitekey="f70c594b-cc97-4440-980b-6b506509df17"></div>
			</div>
			<div class="d-grid gap-2">
				<button class="btn btn-primary btn-block btn-submeter" type="button">Enviar</button>
			</div>

			<div class="col-12 mb-3 mt-3">
				<a href="<?= site_url('site/login'); ?>">Fazer login</a>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$('#esqueci').on('submit', function (e) {
		e.preventDefault();
	});
	$('.btn-submeter').on('click', function () {
		$.ajax({
			type: 'POST',
			async: false,
			url: window.location.href,
			data: $('#esqueci').serialize(),
			dataType: 'json',
			beforeSend: function () { $('#modal-loading').show(); },
			complete: function () { $('#modal-loading').hide() },
			success: function (retorno) {
				if (retorno.status == true) {
					popMessage('Sucesso!', retorno.mensagem, TOAST_STATUS.SUCCESS);
					<?php if ($formulario == 'senha'): ?>
						$('#esqueci').hide();
						setTimeout(function () {
							document.location.href = '<?= site_url('site/login'); ?>';
						}, 5000);
					<?php endif; ?>
				} else {
					popMessage('ATENÇÃO', retorno.mensagem, TOAST_STATUS.DANGER);
				}
			}
		});
	});
</script>
<?= $this->endSection(); ?>