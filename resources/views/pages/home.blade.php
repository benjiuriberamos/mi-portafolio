@extends('template._base')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

<section class="b1">
    <div class="b1__card">
        <div class="b1__cardleft">
            <img class="b1__cardleft-img" src="{{ asset('assets/img/yo.png') }}" alt="">
        </div>
        <div class="b1__cardrigth">
            <h1 class="b1__cardrigth-title">
                DESARROLLADOR BACKEND
            </h1>
            <div class="b1__cardrigth-text">
                <p> Hi! My name is BENJI URIBE RAMOS.</p>
            </div>
        </div>
    </div>
</section>
<section class="b2">
    <h2 class="b2__title">Mis habilidades</h2>
    <div class="b2__content">
        <div class="b2__item">
            <i class="fa-brands fa-php"></i> PHP<br> (Laravel, symfony, codeigneiter)<br>
            <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
        </div>
        <div class="b2__item">
            <i class="fa-solid fa-database"></i> SQL<br>(MySql, SqlServer)<br>
            <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
        </div>
        <div class="b2__item">
            <i class="fa-brands fa-git"></i> Git <br>
            (GitHub, Bitbucket)
        </div>
        <div class="b2__item">
            <i class="fa-brands fa-js"></i> JavaScript <br>(Node.js, Jquery, Angular)<br>
            <a href="{{ route('symfony') }}" class="b2__item-link">Ver proyectos</a>
        </div>
    </div>
</section>
<section class="b6">
    <h2 class="b6_title">Un poco sobre mis conocimientos</h2>
    <div class="b6_content owl-carousel">
        @foreach ($github_repos as $item)
        <div class="b6_item">
            <div class="b6_item-title"><a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer">{{ $item['name'] }}</a></div>
            <div class="b6_item-language">{{ $item['language'] }}</div>
            <div class="b6_item-views">{{ $item['watchers'] }} Vistas</div>
            <div class="b6_item-shadow"></div>
        </div>
        @endforeach
    </div>
</section>
<section class="b3">
    <h2 class="b3__title">Datos de contacto</h2>
    <div class="b3__content">
        <div class="b3__item">
            <i class="fa-regular fa-envelope"></i>
            <a href="mailto:benjiuriberamos@gmail.com" target="_blank" rel="noopener noreferrer">benjiuriberamos @gmail.com</a>
        </div>
        <div class="b3__item">
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+51954775880">+51 954775880</a>
        </div>
        <div class="b3__item">
            <i class="fa-brands fa-linkedin"></i>
            <a href="https://www.linkedin.com/in/benji-uribe-90b340234/" target="_blank">Linkedin</a>
        </div>
        <div class="b3__item">
            <i class="fa-brands fa-whatsapp"></i>
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

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
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

        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                center: true,
                items:2,
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    600:{
                        items:4
                    }
                }
            });
        });
    </script>
@endsection