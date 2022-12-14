<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONECTA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
</head>
<body>

    <header>
		<nav class="navbar navbar-expand-lg navbar-dark fondoPrincipal">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<h1>KONECTA</h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="#">Registro Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/producto/buscar')?>">Lista de productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?= site_url('/venta/producto')?>">Venta de Productos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <main>
        <div class="container mb-5">
             <div class="row mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-5">
                    <h3 class="fuente2 fw-bold text-center">Registro de productos</h3>
                    <form action="<?= site_url('/registro/productos/nuevo') ?>" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre_producto">
                        </div>
						<div class="mb-3">
                            <label class="form-label">Referencia:</label>
                            <input type="text" class="form-control" name="referencia_producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio:</label>
                            <input type="number" class="form-control" name="precio_producto">
                        </div>
						<div class="mb-3">
                            <label class="form-label">Peso:</label>
                            <input type="text" class="form-control" name="peso_producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoria:</label>
                            <input type="text" class="form-control" name="categoria_producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock:</label>
                            <input type="number" class="form-control" name="stock_producto">
                        </div>
						<div class="mb-3">
                            <label class="form-label">Fecha de creaci??n:</label>
                            <input type="date" class="form-control" name="fechaCreacion_producto">
                        </div>
                    	<div class="d-grid gap-2">
                            <button class="btn boton" type="submit">Registrar</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </main>

	<section>
		<?php if(session('mensaje')):?>
			<div class="modal fade" id="modal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header fondoPrincipal text-white">
							<h5 class="modal-title">Konecta</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="row d-flex justify-content-center">
								<div class="col-8">
									<h5><?= session('mensaje') ?></h5>
									<i class="fas fa-exclamation-triangle fa-5x text-center"></i>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>
	</section>
    
    <footer class="fondoDos p-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Horario de atenci??n:</h3>
					<p>Lunes a viernes 7:00 am - 3:00 pm / S??bado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
					<br>
					<h3 class="fw-bold">Direcci??n:</h3>
					<p>Bel??n Altavista Calle 8A # 112-82 </p>
				</div>
				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Ayudas:</h3>
					<p>Glosario / Correo remoto  /  Monitoreo y desempe??o de uso del sitio web</p>
					<br>
					<h3 class="fw-bold">Protecci??n de datos:</h3>
					<p>Protecci??n de datos personales en el Municipio de Medell??n </p>
				</div>
				<div class="col-12 col-md-4">
					<i class="fab fa-facebook fa-3x"></i>
					<i class="fab fa-instagram fa-3x"></i>
					<i class="fab fa-youtube fa-3x"></i>
					<br>
					<p class="mt-4">?? 2021 / NIT: 890905211-1 / C??digo DANE: 05001 / C??digo Postal: 050015</p>		
				</div>
			</div>
		</div>		
	</footer>

	<script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>" ></script>
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>