<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JB S.A.S.</title>
  <link rel="stylesheet" href="../resources/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <!------------------------header logo ------------------------>
  <section class="head">
    <div class="logo"><img src="../resources/img/logoJB.svg"></div>
    <header>
      <nav>
        <a href="#start">INICIO</a>
        <a href="#about">SOBRE NOSOTROS</a>
        <a href="#services">SERVICIOS</a>
        <a href="#contacto">CONTACTO</a>
        <a class="intranet" href="{{ url('/login') }}">INTRANET</a>
      </nav>
    </header>
  </section>

  <!---------------header banner --------------------------------->

  <div class="header-banner">
    <img src="../resources/img/btnWhatsapp.png" class="btn-whatsapp" alt="whatsapp">
    <img src="../resources/img/banner.png" class="banner">
  </div>

  <!--------------- start page ---------------------------------->

  <div class="title-start" id="start">
    <h1>ASESORIA ESPECIALIZADA</h1>
    <hr>
  </div>
  <section class="seccion-start">
    <div class="adviser">
      <h2>Fabricacion, Montajes y Mantenimiento Industrial en Acero Inoxidable</h2>
      <p>En nuestra empresa, nos especializamos en brindar soluciones integrales para la fabricación, montaje y
        mantenimiento industrial, con un enfoque particular en acero inoxidable.<br>
        <br>
        Nuestro equipo altamente capacitado ofrece asesoría técnica personalizada,
        adaptándose a las necesidades específicas de cada proyecto, garantizando calidad, durabilidad y cumplimiento de
        los más altos estándares de la industria. Ya sea en la instalación de nuevos sistemas o en el mantenimiento de
        estructuras
        existentes, estamos comprometidos con la excelencia en cada detalle.
      </p>
    </div>
    <div class="adviser">
      <img src="../resources/img/asesoria.jpg" alt="">
    </div>
  </section>

  <!--------------- ABOUT US ---------------------------------->
  <section class="seccion-about" id="about">
    <div class="about-title">
      <h1>SOBRE NOSOTROS</h1>
      <hr>
    </div>
    <div class="cont">
      <img src="../resources/img/brochure/1.png" alt="">
      <img src="../resources/img/brochure/2.png" alt="">
      <img src="../resources/img/brochure/3.png" alt="">
    </div>
  </section>

  <!-----------------------CARDS SERVICES-------------------------------->

  <section class="cards" id="services">
    <h1>NUESTROS SERVICIOS</h1>
    <main>
      <div class="card">
        <div class="card__image-container">
          <img src="../resources/img/cards/card1.jpeg" />
        </div>
        <div class="card__content">
          <p class="card__title text--medium">
            FABRICACION
          </p>
          <div class="card__info">
            <p class="card-volver" id="info">mas informacion</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card__image-container">
          <img src="../resources/img/cards/card2.jpeg" />
        </div>
        <div class="card__content">
          <p class="card__title text--medium">
            MANTENIMIENTO
          </p>
          <div class="card__info">
            <p class="card-volver" id="info1">mas informacion</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card__image-container">
          <img src="../resources/img/cards/card3.jfif" />
        </div>
        <div class="card__content">
          <p class="card__title text--medium">
            MONTAJES
          </p>
          <div class="card__info">
            <p class="card-volver" id="info2">mas informacion</p>
          </div>
        </div>
      </div>
    </main>
  </section>

  <!-------------------- informacion servicios FABRICACION--------------->

  <section class="modal-container" id="modal">
    <div class="modal-contenido">
      <h2>FABRICACION</h2>
      <div class="slider">
        <ul>
          <li><img src="../resources/img/fabricacion/fa1.jfif" height="350px"></li>
          <li><img src="../resources/img/fabricacion/fa2.jfif" height="350px"></li>
          <li><img src="../resources/img/fabricacion/fa3.jfif" height="350px"></li>
          <li><img src="../resources/img/fabricacion/fa5.jfif" height="350px"></li>
          <li><img src="../resources/img/fabricacion/fa6.jpg" height="350px"></li>
        </ul>
      </div>
      <div class="informacion-modal">
        <p>La fabricación por<strong> INDUSTRIA METALMECANICA JB S.A.S. </strong>, impulsa nuevas oportunidades a los
          clientes que buscan
          optimizar su producción y su cadena de suministro.
          <br>
          <br>
          Esperan que se entreguen máquinas y equipos que se integren fácilmente a sus instalaciones, aumenten
          la eficiencia, mejoren la productividad y la conformidad;
          permitiendo una reacción ágil a las cambiantes demandas del mercado.
          Podemos ayudarlo a desarrollar las máquinas y los equipos que sus clientes industriales y de
          fabricación necesitan.
        </p>
      </div>
      <a href="" id="volver">VOLVER</a>
    </div>
  </section>

  <!--------------------seccion informacion servicios MANTENIMIENTO--------------->

  <section class="modal-container" id="modal1">
    <div class="modal-contenido">
      <h2>MANTENIMIENTO</h2>
      <hr>
      <div class="slider">
        <ul>
          <li><img src="../resources/img/mantenimiento/one.jfif" height="350px"></li>
          <li><img src="../resources/imgs/mantenimiento/m2.jfif" height="350px"></li>
          <li><img src="../resources/img/mantenimiento/m3.jfif" height="350px"></li>
          <li><img src="../resources/img/mantenimiento/m4.jfif" height="350px"></li>
          <li><img src="../resources/img/mantenimiento/m5.jfif" height="350px"></li>
        </ul>
      </div>
      <div class="informacion-modal">
        <p>
          El mantenimiento entra a ser protagonista cuando se revisan los costos que pueden traer averías graves o
          incluso
          cuando la única solución es comprar una máquina nueva.
          <br>
          <br>
          Por eso queremos brindarte la información adecuada para que puedas saber cuándo es conveniente realizar
          ajustes
          o cambios definitivos a tu maquinaria.
        </p>
      </div>
      <a href="" id="volver1">VOLVER</a>
    </div>
  </section>

  <!--------------------seccion informacion servicios MONTAJES--------------->
  <section class="modal-container" id="modal2">
    <div class="modal-contenido">
      <div class="slider">
        <ul>
          <li><img src="../resources/img/montajes/m0.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m1.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m2.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m3.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m4.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m5.jfif" height="350px"></li>
          <li><img src="../resources/img/montajes/m6.jfif" height="350px"></li>
        </ul>
      </div>
      <h2>MONTAJES</h2>
      <hr>
      <div class="informacion-modal">
        <p>
          Nuestro equipo de profesionales altamente capacitados y experimentados trabaja en estrecha colaboración con
          cada cliente para diseñar soluciones a medida que se ajusten a sus necesidades específicas. La tecnología de
          vanguardia y los estándares de calidad más rigurosos son el sello distintivo de <strong>INDUSTRIA
          METALMECANICA JB SAS.</strong>
        </p>
      </div>
      <a href="" id="volver2">VOLVER</a>
    </div>
  </section>
  <hr>

  <!--------------------seccion contacto---------------------------->
  <h1 class="titulo-contacto" id="contacto">CONTACTO</h1>
  <section class="contacto">
    <div class="container-contacto">
      <div class="box-info">
        <h1>CONTÁCTATE CON NOSOTROS</h1>
        <div class="data">
          <p><i class='bx bxs-phone'></i>3132175023</p>
          <p><i class='bx bx-envelope'></i>industriajbsas@gmail.com</p>
          <p><i class='bx bx-envelope'></i>ventasjbsas@gmail.com</p>
          <p><i class='bx bx-location-plus'></i>CRA 27 #19-37 Sur Bogotá.</p>
        </div>
        <div class="links">
          <a href="https://web.facebook.com/profile.php?id=61553189000452"><i
              class='bx bxl-facebook-circle'></i></i></a>
          <a href="https://api.whatsapp.com/send?phone=3132175023&=Hola, soy un cliente de la pagina web"><i
              class='bx bxl-whatsapp'></i></a>
          <a href="https://www.instagram.com/industria_metalmecanica_jb/"><i class='bx bxl-instagram'></i></a>
        </div>
      </div>
      <form action="https://formsubmit.co/industriajbsas@gmail.com" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Nombre" name="text" id="nombre" required>
          <i class="fa-solid fa-user"></i>
          <label hidden="hiddent" id="labelNombre">campo obligatorio</label>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Correo electrónico" name="email" id="email" required>
          <i class="fa-solid fa-envelope"></i>
          <label hidden="hiddent" id="labelemail">campo obligatorio</label>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Asunto" name="asunto" id="asunto" required>
          <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="input-box">
          <textarea placeholder="Escribe tu mensaje..." name="mensaje" id="mensaje" required></textarea>
        </div>
        <button type="submit" value="Enviar" onclick="enviar()" id="btn-enviar">Enviar mensaje</button>
        <input type="hidden" name="_next" value="http://127.0.0.1:5500/page/index.html  ">
        <input type="hidden" name="_captcha" value="false">
      </form>
    </div>
  </section>

  <div class="calidad">
    <img src="../resources/img/imgService.png">
    <h2>CALIDAD Y SERVICIO</h2>
  </div>

  <!------------------------------ pie de pagina ---------------------->

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="">
          <h6>COMPROMISO</h6>
          <hr class="line-footer">
          <p class="text-justify">Nuestra empresa se distingue por su compromiso inquebrantable con la calidad y la
            innovación. Desde la fabricación de maquinaria de última generación para la producción de alimentos hasta la
            implementación de sistemas de mantenimiento preventivo y correctivo, <strong>INDUSTRIA METALMECANICA JB
              SAS</strong>
            garantiza un servicio integral y de primera categoría.</p>
          <div class="footer-logo">
            <img src="../resources/img/logoJBack1.svg">
          </div>
        </div>
      </div>
      <div class="">
        <h6>Ubicanos facilmente</h6>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15908.09248818111!2d-74.12704808424523!3d4.58987346294406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99270355afc9%3A0x4372e8c40df49cff!2sCra%2027%20%2319-37%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1697617832668!5m2!1ses-419!2sco"
          width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    <div class="row">
      <div class="Copyright">
        <hr>
        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by <strong>INDUSTRIA METALMECANICA JB S.A.S.
            - DESIGNED BY NIITIDO DS </strong></p>
      </div>
      <div class="social">
        <ul class="social-icons">
          <li><a class="facebook" href="https://web.facebook.com/profile.php?id=61553189000452"><i
                class='bx bxl-facebook-circle' style='color:#ffffff'></i></a></li>
          <li><a class="whatsapp"
              href="https://api.whatsapp.com/send?phone=3132175023&=Hola, soy un cliente de la pagina web"><i
                class='bx bxl-whatsapp' style='color:#ffffff'></i></a></li>
          <li><a class="instagram" href="https://www.instagram.com/industria_metalmecanica_jb/"><i
                class='bx bxl-instagram' style='color:#ffffff'></i></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="../resources/js/index.js"></script>

</body>

</html>