<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PHP, LARAVEL, Symfony, Laravel, Css">
    <meta name="author" content="Benji Uribe Ramos">
    <meta name="description" content="Portafolio de Benji Uribe Ramos">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('mi-portafolio/assets/css/home.css') }}">
    <title>Benji Uribe Ramos</title>

    <!-- Adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4262096324136426"
     crossorigin="anonymous"></script>
    
</head>
<body>
    <header class="header">
        <div class="header__wancho">
            <img src="{{ asset('mi-portafolio/assets/img/mylogo.png') }}" alt="Logo" class="h__logo">
        </div>
    </header>

    <section class="b1">
        <div class="b1__card">
            <div class="b1__cardleft">
                <img class="b1__cardleft-img" src="{{ asset('mi-portafolio/assets/img/yo.png') }}" alt="">
            </div>
            <div class="b1__cardrigth">
                <h1 class="b1__cardrigth-title">
                    DESARROLLADOR FULLSTACK
                </h1>
                <div class="b1__cardrigth-text">
                    <p> Hola bienvenido a mi portafolio. <br>
                    Mi nombre es Benji Uribe Ramos y tengo experiencia en el mundo de la programación
                    actualmente me encuentro disponible a escuchar ofertas de empleo, estoy interesado en nuevos 
                    retos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="b2">
        <h2 class="b2__title">Mis habilidades</h2>
        <div class="b2__content">
            <div class="b2__item">
                PHP (Laravel, symfony, codeigneiter)<br>
                <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
            </div>
            <div class="b2__item">
                SQL (MySql)<br>
                <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
            </div>
            <div class="b2__item">
                Git (GitHub, Bitbucket)
            </div>
            <div class="b2__item">
                JavaScript (Node.js, Jquery, Angular)<br>
                <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
            </div>
        </div>
    </section>
    <section class="b3">
        <h2 class="b3__title">Datos de contacto</h2>
        <div class="b3__content">
            <div class="b3__item">
            <a href="mailto:benjiuriberamos@gmail.com" target="_blank" rel="noopener noreferrer">benjiuriberamos @gmail.com</a>
            </div>
            <div class="b3__item">
            <a href="tel:+51954775880">+51 954775880</a>
            </div>
            <div class="b3__item">
            <a href="https://www.linkedin.com/in/benji-uribe-90b340234/" target="_blank">Linkedin</a>
            </div>
            <div class="b3__item">
            
            <a href="https://wa.link/ycsebk" target="_blank">Whatsapp</a>
            </div>
        </div>
    </section>
    <section class="b4">
        
        <div class="b4__form-container">
            <h3 class="b4__title">Envíame un mensaje:</h3>
            <form class="b4__form" id="formulario">
                <div class="b4__input">
                    <input type="text" class="input_class" name="nombre" id="nombre" placeholder="Nombre/Empresa">
                </div>
                <div class="b4__input">
                    <input type="text" class="input_class"name="asunto" id="asunto" placeholder="Asunto">
                </div>
                <div class="b4__input">
                    <textarea name="mensaje" class="textarea_class" id="mensaje" rows="5">Mensaje</textarea>
                <div class="b4__input">
                    <button id="btnenviar">Enviar</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__wancho">
            <img src="{{ asset('mi-portafolio/assets/img/mylogo.png') }}" alt="Logo" class="f__logo">
        </div>
    </footer>
    <script>
        

        function isMobile() {
            if (sessionStorage.desktop)
                return false;
            else if (localStorage.mobile)
                return true;
            var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
            for (var i in mobile)
                if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
            return false;
        }

        const formulario = document.querySelector('#formulario');
        const buttonSubmit = document.querySelector('#btnenviar');
        const urlDesktop = 'https://web.whatsapp.com/';
        const urlMobile = 'whatsapp://';
        const telefono = '+51954775880';

        formulario.addEventListener('submit', (event) => {
            event.preventDefault()
            buttonSubmit.innerHTML = 'REDIRIGIENDO A WHATSAPP';
            buttonSubmit.disabled = true
            setTimeout(() => {
                let nombre = document.querySelector('#nombre').value
                let asunto = document.querySelector('#asunto').value
                let mensaje = document.querySelector('#mensaje').value
                let mensajewts = `send?phone=${telefono}&text=*_Formulario de BENJADEV_*%0A` +
                    `*¿Cón quién tengo el gusto?*%0A${nombre}%0A` +
                    `*¿Cuál es el asunto a tratar?*%0A${asunto}%0A` +
                    `*¿Cuál es  tu mensaje?*%0A${mensaje}`;
                if(isMobile()) {
                    window.open(urlMobile + mensajewts, '_blank')
                }else{
                    window.open(urlDesktop + mensajewts, '_blank')
                }
                // buttonSubmit.innerHTML = '<i class="fab fa-whatsapp"></i> Enviar'
                buttonSubmit.disabled = false
                buttonSubmit.innerHTML = 'ENVIAR DATOS!'
            }, 3000);
        });
    </script>
</body>
</html>
