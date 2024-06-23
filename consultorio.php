<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NUTRI Consultório</title>
    <link rel="stylesheet" href="consultorio.css">
    <script src="https://kit.fontawesome.com/fff353ec8e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
 
  </head>
  <body>
  <header id="header">
        <div class="container">
            <div class="logo"><a href="#">NUTRI</a></div>
            <div class="menu">
                <nav>
                    <a href="#sobre">Sobre</a>
                    <a href="#cadastro">Cadastro</a>
                    <a href="#local">Local</a>
                    <a href="#contato">Contato</a>
                </nav>
            </div>
            <div class="sociais">
                <button><i style="color: #62d2a2" class="fa-brands fa-instagram"></i></button>
                <button><i style="color: #62d2a2" class="fa-brands fa-github"></i></button>
                <button><i style="color: #62d2a2" class="fa-brands fa-linkedin"></i></button>
            </div>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width: 300px; height:550px;"  src="imagens/hero-bg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

              <h5 style=" margin-bottom: 210px;  font-size: 45px;color: #fefefe; font-weight: bold;">
                Melhores resultados do Brasil</h5>
              <p style="font-size: 16px;color: #000; font-weight: 900;">
                </p>

            </div>
          </div>
          <div class="carousel-item">
            <img style="width: 300px; height:550px" src="imagens/hero-bg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            <h5 style=" margin-bottom: 210px;  font-size: 45px;color: #fefefe; font-weight: bold;">
                Profissionais Certificados</h5>
              <p style="font-size: 16px;color: #000; font-weight: 900;">
                </p>

            </div>
          </div>
          <div class="carousel-item">
            <img style="width: 300px; height:550px" src="imagens/hero-bg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style=" margin-bottom: 210px;  font-size: 45px;color: #fefefe; font-weight: bold;">
                Atendimento de Alta Qualidade</h5>
              <p style="font-size: 20px;color: #000; font-weight: 900;">
                </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section id="sobre">
                <div class="container1">
                    <div class="txt-sobre">
                    <h2>Sobre Nós</h2>
                    <p>Bem-vindo ao NUTRI! Somos um consultório inovador dedicado a oferecer soluções de alta tecnologia e 
                        cuidado personalizado para nossos pacientes. Nossa equipe de profissionais altamente qualificados utiliza 
                        as mais recentes tecnologias médicas para garantir diagnósticos precisos e tratamentos eficazes. 
                        <!--Na NUTRI,combinamos conhecimento especializado com um atendimento acolhedor,
                        criando um ambiente onde você se sente seguro e bem cuidado. Venha nos visitar
                        e experimente o futuro da saúde hoje! -->
                    </p>
                    </div>
                    <div class="img-sobre">
                      <img src="imagens/about-img.jpg" alt="">
                    </div>
                </div>
      </section>


        <section class="calculadora">
            <div class="container5">
              <div class="image">
                <img src="imagens/d3.jpg" alt="">
              </div>

        <form action="bootstrap.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"
        required placeholder="Seu Nome"> <br><br>
        <label for="peso">Peso(kg): </label>
        <input type="number" id="peso" name="peso"
        step="0.1" required placeholder="Seu peso"> <br><br>
        <label for="altura">Altura(m):</label>
        <input type="number" name="altura" id="altura"
        step="0.01" required placeholder="Sua Altura"> <br><br>
        <label for="anoNasc">Ano de Nascimento:</label>
        <input type="number" name="anoNasc" id="anoNasc"
        required placeholder="Seu ano" min="1900"> <br><br>
        <input class="button" type="submit" value="Calcular">
        <input class="button" type="reset" value="Limpar">
        <a href="#"><input class="button" type="button" value="Voltar"></a>
    </form>
    <div class="resposta">

      <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
          if(isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['anoNasc'])){
              $ano = date('Y');
              $nome = $_POST['nome'];
              $peso = $_POST['peso'];
              $altura = $_POST['altura'];
              $anoNasc = $_POST['anoNasc'];
              $erro= empty($nome) || empty($peso) || empty($altura) || empty($anoNasc) ? "todos os campos são obrigatórios" : 
              ((!is_numeric($altura) || $peso <=0 || $altura <=0 || $anoNasc <= 1900) ? "por favor insira valores
              válidos para o peso, altura e ano de nascimento" : "");
              if($erro){
                  echo $erro;
              }else{
                  $imc = $peso / ($altura * $altura);
                  $imc = number_format($imc, 2);
                  $classificacao= ($imc < 18.5) ? "Abaixo do Peso" : (($imc < 24.9) ? "Peso normal" : (($imc < 29.9) ?
                  "Sobrepeso" : "Obesidade"));

                  $idade = $ano - $anoNasc;
                  echo "Nome: $nome, $idade anos<br>";
                  echo "Indíce de Massa Corporal: $imc <br>($classificacao)";
              }
          }else {echo "Formulário não enviado corretamente";}}?>
      </div>
      </div>
      </section>

            <section id="local">
              <div class="titulo">
            <h2>Local</h2>
              </div>
                <div class="container3">
                      <div class="address">
                          <p><strong>Endereço:</strong> Rua 25 de Março, 123</p>
                          <p>Bairro Vargas</p>
                          <p>Cidade Sapucaia do Sul, Brasil</p>
                          <p>CEP: 12345-678</p>
                      </div>
                    <div>
                      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2058.28529922127!2d-51.14065179319733!3d-29.817825193195546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95196f2a593c6151%3A0xee0be7c4a3eba933!2sCol%C3%A9gio%20ULBRA%20S%C3%A3o%20Lucas!5e0!3m2!1spt-BR!2sbr!4v1719035721959!5m2!1spt-BR!2sbr"
                      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </section>

            <section class="contato">
                  <div class="titulo">
                    <h2>Entrar em Contato</h2>
                  </div>
                <div class="container4">
                  <div class="caixas">
                    <input type="text" placeholder="Seu Nome" /><br>
                    <input type="text" placeholder="Seu Numero" /><br>
                    <input type="email" placeholder="Seu Email" /><br>
                    <textarea type="text" class="message-box" placeholder="Message"></textarea><br>
                    <button>Enviar</button>
                    </div>
                <div class="image">
                  <img src="imagens/d1.jpg" alt="">
                </div>
                </div>
            </section>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>