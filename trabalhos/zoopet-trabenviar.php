<!DOCTYPE html>
<html lang="en">


<?php

// recebe as Variaveis
$nome = "Edson Carlos";
$email = "zoopet2019@petzoofzea.com.br";
$mensagem = "mensagem";

//INFO IMAGEM
$arquivo = $_FILES['arquivo'];
$anexos = count($arquivo);
$arquivo_nome = $arquivo['name'];
$arquivo_caminho = $arquivo['tmp_name'];

//$arquivos = count($arquivo['name']);

//PASTA
$folder = 'uploads/';
for ($i = 0; $i < $anexos; $i++) {
move_uploaded_file($anexos[$i], $folder . $anexos['name'][$i]);
}

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include("class.phpmailer.php");
require("class.smtp.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
$mail->IsSMTP();
$mail->Host = "br290.hostgator.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'zoopet2019@petzoofzea.com.br'; // Usuário do servidor SMTP
$mail->Password = 'zoopet2019@321'; // Senha do servidor SMTP
$mail->Port = '25';

// Define o remetente.
$mail->From = "zoopet2019@petzoofzea.com.br"; // Seu e-mail
$mail->FromName = "Administrador"; // Seu nome

// Define os destinatário(s)
$mail->AddAddress($email, $nome);
$mail->AddCC('zoopet2019@petzoofzea.com.br', 'Eu'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Define a mensagem (Texto e Assunto)
$mail->Subject = "Mensagem do site"; // Assunto da mensagem
$mail->Body = $mensagem;

// Anexando
for($i = 0; $i < $anexos; $i++) {
$mail->AddAttachment($arquivo_caminho[$i], $folder . $arquivo_nome[$i]);
}
// Envia o e-mail
$enviado = $mail->Send();

// Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";

} else {
echo "Não foi possível enviar o e-mail !";
}
?>











  <head>
<link rel="shortcut icon" href="libs/img/logo.png" />
<style>




@media (max-width: 767px) {
    .hidden-xs {
        display: none!important
    }
}
@media (min-width: 768px)and (max-width: 991px) {
    .hidden-sm {
        display: none!important
    }
}
@media (min-width: 992px)and (max-width: 1199px) {
    .hidden-md {
        display: none!important
    }
}
@media (min-width: 1200px) {
    .hidden-lg {
        display: none!important
    }
}


    </style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="libs/css/style.css?a">

<link rel="stylesheet" type="text/css"  href="libs/css/estilo.css?12" />
<title>ZOOPET 2019 - PET - ZOOTECNIA</title>

<meta name="description" content="Para acessar nosso planejamento anual, click sobre o ano desejado: Planejamento 2016"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="hidden-xs hidden-sm navbar-brand" href="index.html"> <img style="width: 40%; height: 40%;" src="libs/img/logo.png"/> </a>

      <a class="hidden-md hidden-lg navbar-brand" href="index.html"> <img style="width: 80px; height: 80px;" src="libs/img/logo.png"/> </a>




      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div onclick="void(0)" class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto menu">
          <li class="nav-item "><a href="index.html" class="nav-link">Início</a></li>       
          <li class="nav-item"><a  class="nav-link">O BALIDO  <i class="fas fa-caret-down"></i></a>
                <ul>
                      <li><a href="apresentacao.html">Apresentação</a></li>
                      <li><a href="expediente.html">Expediente</a></li>
                      <li><a href="volume-atual.html">Edição Atual</a></li>    
                      <li><a href="volumes-anteriores.html">Edições Anteriores</a></li>   
                      <li><a href="normas.html">Normas para Publicação</a></li>      
                      <li><a href="contato_revista.html">Contato</a></li>                 
                </ul>
            </li>
          <li class="nav-item"><a href="materias.html" class="nav-link">Matérias</a></li>
          
           <li class="nav-item"><a  class="nav-link">PETianos  <i class="fas fa-caret-down"></i></a>
                <ul>
                      <li><a href="ativos.html">Ativos</a></li>
                      <li><a href="egressos.html">Egressos</a></li>
                      <li><a href="tutor.html">Tutor</a></li>                    
                </ul>
            </li>
             <li class="nav-item"><a class="nav-link">Atividades <i class="fas fa-caret-down"></i></a> 
                <ul>
                      
                      <li><a href="processo-2019.html">Processo Seletivo 2019</a></li>
<li><a href="atividades.html">Atividades</a></li>
                    
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link">ZOOPET 2019 <i class="fas fa-caret-down"></i></a> 
                <ul>
                      
                      <li><a href="zoopet.html">Inscrições</a></li>
<li><a href="zoopet_trabalhos.html">Trabalhos</a></li>
                    
                </ul>
            </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('libs/img/back2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">ZOOPET 2019</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="site-section mb-5">
    <div class="container"><h2>Inscrição enviada!</h2>
      <div class="row mb-5">
  

      </div>
      



            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- .site-section -->
  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
    
          <p class="mb-5">Avenida Duque de Caxias Norte, 225 - Campus da USP Pirassununga</p>
          
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">petzootecnia@usp.br</h3>
       

        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">

              <ul>
 
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">19 35654150</span></a></li>

              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to  can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Desenvolvido por <a href="https://renanhirai.com.br" target="_blank" class="text-primary">Renan Hirai</a>
            <!-- Link back to  can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>