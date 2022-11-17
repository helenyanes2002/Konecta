<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONECTA</title>
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
							<a class="nav-link" href="<?= site_url('Productos')?>">Registro Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">Lista de productos</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="<?= site_url('/venta/producto')?>">Venta de Productos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    
    <main>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach($productos as $producto):?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <div class="card-body">
                                <h6 class="card-title"><?=$producto["id_producto"]?></h6>
                                <h6 class="card-title"><?=$producto["nombre_producto"]?></h6>
                                <h6 class="card-title"><?= $producto["referencia_producto"] ?></h6>
                                <h6 class="card-title"><?=$producto["precio_producto"]?></h6>
                                <h6 class="card-title"><?= $producto["peso_producto"] ?></h6>
                                <h6 class="card-title"><?=$producto["categoria_producto"]?></h6>
                                <h6 class="card-title"><?= $producto["stock_producto"] ?></h6>
                                <h6 class="card-title"><?= $producto["fechaCreacion_producto"] ?></h6>
                             
                                <p class="card-text"></p>
                                <a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto["id_producto"]?>" href="#" class="btn btn-primary"><i class="far fa-trash-alt"></i></a>
                                <a data-bs-toggle="modal" data-bs-target="#editar<?= $producto["id_producto"]?>" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                        <section>
                            <div class="modal fade" id="confirmacion<?= $producto["id_producto"]?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header fondoPrincipal text-white">
                                            <h5 class="modal-title">Casa Hogar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <p>¿Está seguro de eliminar este producto?</p>
                                           <p><?= $producto["id_producto"]?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="<?= site_url('/producto/eliminar/'.$producto["id_producto"]) ?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="modal fade" id="editar<?= $producto["id_producto"]?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header fondoPrincipal text-white">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                               <div class="col-9">
                                                    <form action="<?= site_url('/producto/editar/'.$producto["id_producto"]) ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre:</label>
                                                            <input type="text" class="form-control" name="nombre_producto" value="<?= $producto["nombre_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Referencia:</label>
                                                            <input type="text" class="form-control" name="referencia_producto" value="<?= $producto["referencia_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Precio:</label>
                                                            <input type="number" class="form-control" name="precio_producto" value="<?= $producto["precio_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Peso:</label>
                                                            <input type="texto" class="form-control" name="peso_producto" value="<?= $producto["peso_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Categoria:</label>
                                                            <input type="text" class="form-control" name="categoria_producto" value="<?= $producto["categoria_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Stock:</label>
                                                            <input type="number" class="form-control" name="stock_producto" value="<?= $producto["stock_producto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Fecha de creación:</label>
                                                            <input type="date" class="form-control" name="fechaCreacion_producto" value="<?= $producto["fechaCreacion_producto"] ?>">
                                                        </div>
                                                        <button class="btn boton" type="submit">Actualizar</button>
                                                    </form>
                                               </div>
                                           </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <?php endforeach ?>
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


    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>