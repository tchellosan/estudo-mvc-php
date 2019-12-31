<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" charset="Marcelo Silva">
	<meta name="description" content="<?php echo $this->getDescription(); ?>">
	<meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
	<title><?php echo $this->getTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo DIRCSS.'style.css'; ?>">
	<?php $this->addHead(); ?>
</head>
<body>
	<nav>
		<a href="<?php echo DIRPAGE; ?>">Home</a>
		<a href="<?php echo DIRPAGE.'contato'; ?>">Contato</a>
		<a href="<?php echo DIRPAGE.'cadastro'; ?>">Cadastro</a>
	</nav>

	<header>
		<img src="<?php echo DIRIMG.'banner.jpg'; ?>" alt="Banner">
		Marcelo Silva / (11) 9.4775 - 6634
		<?php $this->addHeader(); ?>		
	</header>

	<main>
		<?php $this->addMain(); ?>		
	</main>

	<footer>
		&copy; 2019 - Todos os direitos reservados.
		<?php $this->addFooter(); ?>		
	</footer>
</body>
</html>