<?php
// -- Começo de inclusão de dependências -- //
include_once 'conn/connect.php';
// -- Fim de inclusão de dependências -- //

//  -- Começo do script de início da sessão e checagem de usuário permitido (temporariamente por nome em específico) -- //
session_start();

if(!empty($_SESSION['id'])){
  header("Location: admsys.php");  
  }else{
  
    
}





//  -- Fim do script de início da sessão e checagem de usuário permitido (temporariamente por nome em específico) -- //

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Amplisys </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
         <h1 class="text-light"><a href="#intro"><span>Amplisys</span></a></h1> 
        <!--<a href="#intro" class="scrollto"><img src="img/logo.png" alt="Amplisys Logo"  class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Nossos valores</a></li>
          <li><a href="#services">Serviços</a></li>
         <!-- <li><a href="#portfolio">Portfólio</a></li> -->
         <!-- <li><a href="#team">Nosso Time</a></li> -->
         <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Entre em Contato</a></li>
           <li><a href="login.php">Entrar </a></li>


        
</ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        
      </div>

      <div class="intro-info">
        <h2>Amplisys<br><span>SPA</span><br></h2> 
        
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Single Page Applications de qualidade</h3>
          <p>Conheça nosso trabalho com sites de página única, ideal para sua empresa adquirir presença online </p>
        </header>

        <div class="row about-container">


        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/pc1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <br><br><h4>Para empresas de pequeno, médio ou grande porte</h4>
            <p>
             Independente da proporção do seu empreendimento, é importante ter presença online. É pensando nessa divulgação
             que surge o Amplisys SPA: fazer teu negócio captar mais clientes no mundo da Web. Páginas simples, bonitas e diretas na informação.
             
            </p>
            
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/pc2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Empresa online é empresa que vende mais</h4>
            <p>
             Não podemos negar que a internet vem revolucionando o meio em que vivemos. Ficar de fora desse movimento é perder clientes.
            </p>
            <p>
              Com um site single page (página única) você promove seu negócio afim de captar clientes com inovação aos concorrentes que ainda não possuem esse diferencial.
            </p>
            <p>
              Criamos a apresentação de sua empresa, colocamos e remodelamos o objetivo e visão, inserimos formulário para contato e ainda estilizamos com uma galeria
              de imagens para que os clientes possam saber como é seu trabalho.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

     
    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Esqueça a divulgação, deixe conosco</h3>
           </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Projetado para alavancar</h5>
                <p class="card-text">Criamos sua campanha nas maiores redes sociais, montamos e-mail marketing, captação de lista de e-mails e mais.</p>
                <a href="#" class="readmore">Leia mais </a>
              </div>
            </div>
          </div>

        </div>


      </div>
    </section>

    

    <!--========================== 
      Contact Section
    ============================-->
    <section id="contact">
      
      <div class="container-fluid">

        <div class="section-header">
          <h3> Conta pra gente <br> o que você precisa </h3> 
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-1 col-sm-1 col-md-3">
          
          </div>

        

          
         
            <div class="form">
              <div id="sendmessage">Sua mensagem foi enviada! Entraremos em contato em breve =D</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Título" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Digite sua mensagem..."></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Enviar</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

 

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Amplisys</h3>
            <p>Trabalhar com produtividade não precisa ser difícil.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><a href="#">Home</a></li>
             <!-- <li><a href="#">About us</a></li> -->
              <li><a href="#">Serviços</a></li>
              <li><a href="#">Termos de serviço</a></li>
              <li><a href="#">Política de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Entre em contato</h4>
            <p>
              Belo Horizonte - MG <br>
              São Paulo - SP<br>
              Brasil <br>
              <strong>Celular:</strong> (+55) 011 95065-2240<br>
              <strong>Email:</strong> contato@amplisys.com.br<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Assine nossa Newsletter</h4>
            <p>Acompanhe tudo que postamos, vamos deixar matéria quentinha e nova direto na sua caixa toda semana!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019 <strong>Amplisys</strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
