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
    <link rel="stylesheet" href="{{ asset('assets/css/portafolio.css') }}">
    <title>Benji Uribe Ramos</title>
    <style>
        canvas {
            position: absolute;
            z-index: -2;
        }
        #c {
           width: 100%;
           height: 100%;
           display: block;
           position: absolute;
        }
    </style>

</head>
<body class="body-class--dark">
    <header>
    </header>
    <body >
        <section class="content" id="app">
            <div class="content-text">
                <h1 class="content-title">BENJI URIBE RAMOS</h1>
                <h4 class="content-subtitle">Backend developer</h4>
            </div>
            <div class="content-capa" style="background-image: url('/assets/img/fondodev.jpeg');"></div>
            <div class="content-data">
                <h3>Contact me.</h3>
                <p>Phone: <a href="tel:+51954775880" target="_blank">+51 954775880</a></p>
                <p>Whatsapp: <a href="tel:+51954775880" target="_blank">+51 954775880</a></p>
                <p>Telegram: <a href="https://t.me/burinvierno" target="_blank">@burinvierno</a></p>
                <p>Email: <a href="mailto:benjiuriberamos@gmail.com" target="_blank">benjiuriberamos@gmail.com</a></p>
            </div>
        </section>
        <canvas id="c"></canvas>
    </body>


    <footer class="footer">
    </footer>

    <script  type="importmap">{
        "imports": {
            "three": "https://threejs.org/build/three.module.js"
        }
    }</script>
    <script type="module">
        import * as THREE from 'three';

        function main() {

            const canvas = document.querySelector( '#c' );
            const renderer = new THREE.WebGLRenderer( {
                antialias: true,
                canvas,
                canvas,
                alpha: true
            } );

            //creando objeto camara
            const fov = 75;
            const aspect = (300/150); // the canvas default
            const near = 0.1;
            const far = 7;
            const camera = new THREE.PerspectiveCamera( fov, aspect, near, far );
            camera.position.z = 2;

            //creando mi objeto escena
            const scene = new THREE.Scene();

            //creando mi objeto geometrico
            const boxWidth = 0.1;
            const boxHeight = 0.1;
            const boxDepth = 0.1;
            const geometry = new THREE.BoxGeometry( boxWidth, boxHeight, boxDepth );

            //creando mi objeto material
            const material = new THREE.MeshPhongMaterial( { color: 0x44aa88 } ); // greenish blue

            //Generando un modelo(mesh), para generar un modelo se requiere de un objeto material y un objeto geometrico
            // const cube = new THREE.Mesh( geometry, material );
            // scene.add( cube );

            // se creo esta función para crear cubos de una forma más rápida
            function makeInstance(geometry, color, x, y = 2) {
                const material = new THREE.MeshPhongMaterial({color});

                const anycube = new THREE.Mesh(geometry, material);
                scene.add(anycube);

                anycube.position.x = x;
                anycube.position.y = y;

                return anycube;
            }

            const cubes = [
                makeInstance(geometry, 0xfff,  0, 1.2),
                // makeInstance(geometry, 0xfff, -2),
                // makeInstance(geometry, 0xfff,  2),
            ];


            //Agregando luz
            {
                const color = 0xFFFFFF;
                const intensity = 3;
                const light = new THREE.DirectionalLight(color, intensity);
                light.position.set(-1, 2, 4);
                scene.add(light);
            }

            function resizeRendererToDisplaySize(renderer) {
                const canvas = renderer.domElement;
                const width = canvas.clientWidth;
                const height = canvas.clientHeight;
                const needResize = canvas.width !== width || canvas.height !== height;
                if (needResize) {
                    renderer.setSize(width, height, false);
                }
                return needResize;
            }

            function render( time ) {

                time *= 0.001; // convert time to seconds

                // cube.rotation.x = time;
                // cube.rotation.y = time;

                if (resizeRendererToDisplaySize(renderer)) {
                    const canvas = renderer.domElement;
                    // camera.aspect = canvas.clientWidth / canvas.clientHeight;
                    camera.aspect = canvas.clientWidth / canvas.clientHeight;
                    camera.updateProjectionMatrix();
                }

                cubes.forEach((cube, ndx) => {
                    const speed = 1 + ndx * 3;
                    const rot = time * speed;
                    cube.rotation.x = rot;
                    cube.rotation.y = rot;
                });

                renderer.render( scene, camera );

                requestAnimationFrame( render );

            }

            requestAnimationFrame( render );

        }

        main();
    </script>

    <script type="module">
        import { neonCursor } from 'https://unpkg.com/threejs-toys@0.0.8/build/threejs-toys.module.cdn.min.js'

        neonCursor({
        el: document.getElementById('app'),
        shaderPoints: 16,
        curvePoints: 80,
        curveLerp: 0.5,
        radius1: 5,
        radius2: 30,
        velocityTreshold: 10,
        sleepRadiusX: 100,
        sleepRadiusY: 100,
        sleepTimeCoefX: 0.0025,
        sleepTimeCoefY: 0.0025
        })

    </script>
</body>
</html>
