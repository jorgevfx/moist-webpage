<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46ad5ba21c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/usuario-giftcards.css">
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
                        <i class="fa-solid fa-gift"></i>
                        <h1>GIFTCARDS Y/O CUPONES</h1>
                    </div>
                    <div class="option-body">
                        <h4 class="gf-title">Felicidades! Cuentas con 1 giftcard activo</h4>
                        <div class="giftcard-wrapper position-relative">
                            <div
                                class="front d-flex align-items-center justify-content-evenly flex-wrap position-absolute w-100 h-100">
                                <h1>TARJETA REGALO</h1>
                                <i class="fa-solid fa-gift"></i>
                            </div>
                            <div
                                class="back position-absolute d-flex flex-column justify-content-center align-content-center w-100 h-100">
                                <p class="mb-3">Código:</p>
                                <p class="mb-3" id="giftcard-code">1111111111111111</p>
                                <button type="button" class="copy-gf btn btn-outline-light mb-3">Copiar</button>
                            </div>
                        </div>
                        <p class="get-gf-p">Puedes adquirir tus giftcards <a href="./giftcards.html">aquí</a></p> 
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
        const card = document.querySelector(".giftcard-wrapper");
        const front = document.querySelector('.front');
        const back = document.querySelector('.back');

        card.addEventListener('click', () => {
            card.classList.toggle('active')
        })

        const copy_btn = document.querySelector('.copy-gf');
        copy_btn.addEventListener('click', () => {
            const code = document.getElementById('giftcard-code');
            navigator.clipboard.writeText(code.textContent);
        })
    </script>
    <script src="../js/usuario_scripts.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>