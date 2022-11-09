<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46ad5ba21c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/usuario-direccion.css">
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
                        <a href="./usuario-general.html"<i class="fa-solid fa-user"></a>
                        <i class="fa-solid fa-house-user"></i>
                        <h1>DIRECCIÓN</h1>
                    </div>
                    <div class="option-body">
                        <form class="general-data needs-validation" novalidate>
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control input-field" id="calle"" autocomplete="off" placeholder="Pasaje Heraldos Negros" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese una calle
                            </div>
                            <label for="nro">Número</label>
                            <input type="number" class="form-control input-field" id="nro" autocomplete="off" placeholder="120" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese un número
                            </div>
                            <label for="piso">Piso o apartamento</label>
                            <input type="text" class="form-control input-field" id="piso" autocomplete="off" placeholder="1 piso, 240A" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese un piso o apartamento
                            </div>
                            <label for="departamento">Departamento</label>
                            <select name="selectDepartamento" class="form-control input-field select-dept" required>
                                <option value="" selected disabled>Seleccione</option>
                                <option value="01">Amazonas</option>
                                <option value="02">Ancash</option>
                                <option value="03">Apurímac</option>
                                <option value="04">Arequipa</option>
                                <option value="05">Ayacucho</option>
                                <option value="06">Cajamarca</option>
                                <option value="07">Callao</option>
                                <option value="08">Cuzco </option>
                                <option value="09">Huancavelica</option>
                                <option value="10">Huánuco</option>
                                <option value="11">Ica</option>
                                <option value="12">Junín</option>
                                <option value="13">La Libertad</option>
                                <option value="14">Lambayeque</option>
                                <option value="15">Lima</option>
                                <option value="16">Loreto</option>
                                <option value="17">Madre de Dios</option>
                                <option value="18">Moquegua</option>
                                <option value="19">Pasco</option>
                                <option value="20">Piura</option>
                                <option value="21">Puno</option>
                                <option value="22">San Martín</option>
                                <option value="23">Tacna</option>
                                <option value="24">Tumbes</option>
                                <option value="25">Ucayali</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, seleccione un departamento
                            </div>
                            <label for="prov">Provincia</label>
                            <select class="form-control input-field select-prov" name="selectProvincia" id="prov" required>
                                <option value="" selected disabled>Seleccione la Provincia</option>
                            </select> 
                            <div class="invalid-feedback">
                                Por favor, seleccione una provincia
                            </div>
                            <label for="dist">Distrito</label>
                            <select class="form-control input-field select-dist" name="selectDistrito" id="dist" required>
                                <option value="" selected disabled>Seleccione el Distrito</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, seleccione un distrito
                            </div>
                            <input type="submit" value="GUARDAR" class="form-submit">
                        </form>
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
    <script src="../js/direccion.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>


