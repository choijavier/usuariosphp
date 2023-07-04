<?php include("templates/head.php"); ?>

<body class="top">
    

    <!-- PORTADA -->
    <section id="cover" class="d-flex align-items-center align-items-lg-center min-vh-100">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="content col-lg-5">

                    <?php /*
                    <div class="text-end text-light">
                        <h1 class="cover-title">Modelo Y</h1>
                        <p class="description">
                            El Model Y es totalmente eléctrico, por lo que nunca más tendrá que visitar una gasolinera. Si carga durante la noche en casa, puede despertarse con la batería llena todas las mañanas. Y cuando está de viaje, es fácil conectarse en el camino, en cualquier estación pública o con la red de carga de Tesla.
                        </p>
                        <div class="mt-4">
                            <a href="#contact" class="btn btn-light">Solicitar un Test Drive</a>
                            <a href="#contact" class="btn btn-light-outline">Comprar</a>
                        </div>
                    </div>
                    */ ?>
                    <div class="formulario">
                        <header>
                            <div class="mb-3">
                                <h4 class="title">Ingresa a tu cuenta</h4>
                                <span class="description">
                                    Tempore nemo reprehenderit voluptatem, cupiditate. Quia praesentium dolorem dolorum.
                                </span>
                            </div>
                        </header>
                        <form action="dashboard.php" method="post">
                            <div class="row">

                                <div class="col-lg-12 mb-3">

                                    <!-- <label for="exampleInputEmail1" class="form-label">Nombre</label> -->
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Nombre">
                                    
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <!-- <label for="exampleInputPassword1" class="form-label">Apellido</label> -->
                                    <input type="password" class="form-control" id="exampleInputPass" name="pass" placeholder="Contraseña" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <!-- <label for="exampleInputPassword1" class="form-label">Apellido</label> -->
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Correo electrónico" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <!-- <label for="exampleInputEmail1" class="form-label">Nombre</label> -->
                                    <select class="form-control" name="pais" id="" value="paises">
                                        <option value="Argentina">Argentina</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Bolivia">Bolivia</option>
                                    </select>
                                </div>



                                <div class="col-lg-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>

                                <div class="ref mt-3" style="font-size: 13px; line-height: 16px;">
                                    <small>DEMOS</small>
                                    <ul style="margin: 0; padding: 0;">
                                        <li><code>Administrador: 'admin/1234'</code></li>
                                        <li><code>Editores: 'editor/5678'</code></li>
                                        <li><code>Cualquier otro dato ingresa como invitado.</code></li>
                                    </ul>
                                </div>



                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php /*
        <div class="overlay"></div> <!-- overlay--light -->
        */ ?>
    </section>
    


    
<?php include("templates/footer.php"); ?>