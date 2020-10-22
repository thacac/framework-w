<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title); ?></title>
	<meta name="description" content="<?= ($description ?? ''); ?>">

	<?= $this->section('jsonld'); ?>

	<!-- Compiled and minified MAterilaize Framework CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>"> -->

	<?= $this->section('css'); ?>
</head>

<body>

	<?php $this->insert('back/partials/navbar') ?>
	<main>
		<div class="row container">
			<aside class="col l3 xl2">
				<?php $this->insert('back/partials/sidenav') ?>
			</aside>
			<div class="col s12 l9 xl10">
				<?= $this->section('main_content'); ?>
			</div>
		</div>
	</main>

	<?php $this->insert('back/partials/footer') ?>


	<!-- Compiled and minified MAterilaize Framework JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="<?= $this->assetUrl('Back/js/materialize_theme.js'); ?>"></script>
	<?= $this->section('js'); ?>

</body>

</html>