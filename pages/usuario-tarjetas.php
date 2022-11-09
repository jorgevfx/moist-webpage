<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46ad5ba21c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/usuario-tarjetas.css">
    <link rel="stylesheet" href="../styles/usuario-common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MOIST</title>
</head>

<body>
    <header class="header">
        <div class="header-wrapper">
            <a href="../index.html">MOIST</a>
            <h1>Mi cuenta</h1>
        </div>
    </header>
    <main class="main">
        <section class="main-section">
            <div class="container">
                <div class="options-wrapper">
                    <div class="avatar">
                        <div class="circle-logo">U1</div>
                        <p class="welcome-txt">Hola,</p>
                        <p class="username">Usuario0001</p>
                    </div>
                    <div class="options-item ordenes">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>Mis ordenes</p>
                    </div>
                    <div class="options-item datos">
                        <i class="fa-solid fa-id-card"></i>
                        <p>Editar datos</p>
                    </div>
                    <div class="options-item direccion">
                        <i class="fa-solid fa-house-user"></i>
                        <p>Dirección</p>
                    </div>
                    <div class="options-item tarjetas">
                        <i class="fa-solid fa-credit-card"></i>
                        <p>Métodos de pago</p>
                    </div>
                    <div class="options-item giftcards">
                        <i class="fa-solid fa-gift"></i>
                        <p>Giftcards y/o cupones</p>
                    </div>
                    <div class="options-item ayuda">
                        <i class="fa-solid fa-circle-question"></i>
                        <p>¿Necesitas ayuda?</p>
                    </div>
                    <div class="options-item logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Cerrar sesión</p>
                    </div>
                </div>
                <div class="option-info">
                    <div class="option-title">
                        <a href="./usuario-general.html"><i class="fa-solid fa-angle-left"></i></a>
                        <a href="./usuario-general.html"><i class="fa-solid fa-user"></i></a>
                        <i class="fa-solid fa-credit-card"></i>
                        <h1>MÉTODOS DE PAGO</h1>
                    </div>
                    <div class="option-body">
                        <div class="card-general">
                            <h2>Nombre tarjeta</h2>
                            <p>4551 **** **** 9281</p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#infoTarjeta">Ver más</button>
                        </div>
                        <button type="button" class="nuevatarjeta_btn" data-bs-toggle="modal"
                            data-bs-target="#nuevaTarjeta">
                            <i class="fa-solid fa-square-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="infoTarjeta" tabindex="-1" aria-labelledby="infoTarjetaLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nombre tarjeta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12 input-group ">
                                    <input type="text" class="form-control" placeholder="Tarjeta" aria-label="Username"
                                        aria-describedby="basic-addon1" value="4551 3921 9281 9281" required>
                                    <span class="input-group-text" id="basic-addon1">&#128179;</span>
                                    <div class="valid-feedback">
                                        Número correcto
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="text" class="form-control" id="inputFechaExpiracion"
                                        placeholder="Fecha exp." value="01/20" required>
                                    <div class="valid-feedback">
                                        Fecha de expiración correcta
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="number" class="form-control" id="inputFechaExpiracion"
                                        placeholder="CVV" value="123" max="999" required>
                                    <div class="valid-feedback">
                                        CVV correcto
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="nuevaTarjeta" tabindex="-1" aria-labelledby="nuevaTarjetaLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar nueva tarjeta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate>

                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Nombre de la  tarjeta"
                                        aria-label="Username" aria-describedby="basic-addon1" required>
                                    <div class="invalid-feedback">
                                        Porfavor, ingrese un número de tarjeta correcto
                                    </div>
                                </div>

                                <div class="col-12 input-group ">
                                    <input type="text" class="form-control" placeholder="Tarjeta" aria-label="Username"
                                        aria-describedby="basic-addon1" required>
                                    <span class="input-group-text" id="basic-addon1">&#128179;</span>
                                    <div class="invalid-feedback">
                                        Porfavor, ingrese un número de tarjeta correcto
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="text" class="form-control" id="inputFechaExpiracion"
                                        placeholder="Fecha exp." required>
                                    <div class="invalid-feedback">
                                        Por favor, ingrese una fecha válida
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="number" class="form-control" id="inputFechaExpiracion"
                                        placeholder="CVV" min="100" max="999" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingrese un CVV correcto
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-wrapper">
            <p>MOIST</p>
            <a href="./tyc.html">Términos y condiciones</a>
            <p>© MOIST 2022</p>
        </div>
    </footer>
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="../js/usuario_scripts.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>