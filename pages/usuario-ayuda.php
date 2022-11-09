<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46ad5ba21c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/usuario-ayuda.css">
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
                        <i class="fa-solid fa-circle-question"></i>
                        <h1>AYUDA</h1>
                    </div>
                    <div class="option-body">
                        <p>Por favor, seleccione el pedido con el que necesite ayude y posteriormente la acción a tomar
                        </p>
                        <div class="table-container d-flex flex-wrap w-100">
                            <div class="w-100 h-50 table-responsive">
                                <table class="table table-pedidos">
                                    <thead>
                                        <tr>
                                            <th>Número de pedido</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>P1000020</td>
                                        </tr>
                                        <tr>
                                            <td>P1000050</td>
                                        </tr>
                                        <tr>
                                            <td>P1000120</td>
                                        </tr>
                                        <tr>
                                            <td>P1000250</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                        <tr>
                                            <td>P1000400</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="table table-hover table-accion">
                                <thead>
                                    <tr>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hablar con un asesor</td>
                                    </tr>
                                    <tr>
                                        <td>Editar pedido</td>
                                    </tr>
                                    <tr>
                                        <td>Cancelar pedido</td>
                                    </tr>
                                    <tr>
                                        <td>Devolución</td>
                                    </tr>
                                    <tr>
                                        <td>Otros</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mt-3">Puedes visitar nuestra sección de ayuda</p>
                        <a href="./ayuda.html">Ir a ayuda</a>
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
        const pedidos = document.querySelectorAll('.table-pedidos tbody tr')
        let elemento_seleccionado;
        
        const fn = (elem,bool) => {
            elem.addEventListener('click', () => {
                if(elem.classList.contains('active')){
                    elem.classList.remove('active')
                    bool = false;
                } else if(!bool){
                    elem.classList.add('active')
                    bool = true;
                }  
            })
        }

        pedidos.forEach(elem =>{
            fn(elem,elemento_seleccionado)
        })

    </script>
    <script src="../js/usuario_scripts.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>