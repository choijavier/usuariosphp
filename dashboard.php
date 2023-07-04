<?php include("templates/head.php"); ?>

<?php /****************************************
    DB hardcode
    - User con permisos
*****************************************/ 

$users = [
    "admin_name" => 'admin',
    "admin_pass" => '1234',

    "editor_name" => 'editor',
    "editor_pass" => '5678',
];


?>

<body class="top dashboard">
    <header>
    </header>

    
    <!-- PORTADA -->
    <section id="panel" class="d-flex align-items-center align-items-lg-center min-vh-100">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="panel-content content col-lg-6">
                    <div class="text-start text-light">
                        
                        <?php 
                        // OBTENEMOS DATOS DEL FORMULARIO

                        $POST=($_POST);
                        /*
                        echo '<pre>'; 
                        echo var_dump($POST);   
                        echo '</pre>'; 
                        */

                        $nombre         = $POST['name'];
                        $pass           = $POST['pass'];
                        $email          = $POST['email'];
                        $pais           = $POST['pais'];


                        /*
                        echo $nombre.'<br>';
                        echo $pass.'<br>';
                        echo $email.'<br>';
                        echo $pais;

                        */

                        ?>

                        <img src="img/bg-cover.jpg" alt="" class="img-fluid mb-4">

                        <?php if ($nombre): ?>
                            <h2 class="panel-title"><span class="name"><?php echo $nombre; ?></span>, un placer tenerte por aca!</h2>
                        <?php else: ?>
                            <h2 class="panel-title">Un placer tenerte por aca!</h2>
                        <?php endif; ?>
                        

                        <ul>
                            <h4>Tus datos</h4>

                            <li class="capabilities">
                                <strong>
                                    Permisos:
                                </strong>

                                <?php
                                // CONTENIDO CONDICIONAL PARA TIPO DE USUARIOS
                                if ($nombre == $users["admin_name"] && $pass == $users["admin_pass"]) :  
                                    echo "Cuentas con permisos de -Administrador-";
                                    
                                elseif ($nombre == $users["editor_name"] && $pass == $users["editor_pass"]) :
                                    echo "Eres un usuario con permisos de -Editor-";
                                else:
                                    echo "Eres un usuario anonimo";
                                endif;

                                ?>
                                
                            </li>

                            <li>
                                <strong>
                                    Correo electrónico:
                                </strong>
                                <?php echo $email; ?>
                            </li>

                            <li>
                                <strong>
                                    País:
                                </strong>
                                <?php echo $pais; ?>
                            </li>

                        </ul>

                        <div class="mt-4">
                            <a href="index.php" class="btn btn-success">Volver</a>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
        <?php /*
        <div class="overlay"></div> <!-- overlay--light -->
        */ ?>
    </section>
    


    

<?php include("templates/footer.php"); ?>