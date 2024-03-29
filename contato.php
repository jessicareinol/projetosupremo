<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato | Supremo Soluções Ambientais e Serviços</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>

    <!-- Barra de acessibilidade -->
    <ul id="atalhos">
        <li><a href="#irmenu" accesskey="1">Ir para Menu Principal [1]</a></li>
        <li><a href="#irconteudo" accesskey="2">Ir para Conteúdo [2]</a></li>
    </ul>
    
	<header class="container">
	    <div class="row align-items-center">
	        <div class="col-md-4">
	            <div class="logotipo">
	                <img src="supremo/logo_transparente.png" alt="Logotipo da Supremo Soluções Ambientais e Serviços" class="logo img-fluid">
	            </div>
	        </div>
	        <div class="col-md-8">
	            <h1>Supremo Soluções Ambientais e Serviços</h1>
	        </div>
	    </div>
	</header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon visually-hidden">Abrir/navegar pela barra de navegação</span>
            </button>
            <a class="navbar-brand visually-hidden" href="#" id="irmenu">Menu</a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicoseprodutos.php">Serviços e Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipe.php">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="redessociais.php">Redes Sociais</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<main>
		<div>
			<a href="#" id="irconteudo" class="visually-hidden">Contato</a>
			    <h2>Fale Conosco</h2>

			    <div class="card">
			        <div class="card-body">
				        <form id="form">
				            <div>
				                <label for="nome">Nome*:</label>
				                <input type="text" id="nome" placeholder="Digite seu nome" class="inputs required" oninput="nomeValido()">
				                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
				            </div>
				            <div>
				                <label for="email">Endereço de e-mail*:</label>
				                <input type="email" id="email" placeholder="Digite seu melhor email" class="inputs required" oninput="emailValido()">
				                <span class="span-required">Digite um email válido</span>
				            </div>
				            <div>
				                <label for="mensagem">Mensagem*:</label>
				                <textarea class="inputs required" name="descricao" id="mensagem" cols="25" rows="10" placeholder="Digite sua mensagem" oninput="mensagemValida()"></textarea>
				                <span class="span-required">O campo não pode ficar em branco.</span>
				            </div>
				            <button type="submit">Enviar</button>
				            <small id="campoObrigatorio" class="form-text text-muted small-font">* Campos obrigatórios</small>
				        </form>
			        </div>

					<p><b>Você também enviar uma mensagem diretamente para o nosso e-mail.</b><br>
					<b>E-mail:</b> <a href="mailto:comercial@supremosolucoes.com.br">comercial@supremosolucoes.com.br</a><br>
					<b>Telefone:</b> (18) 3203-4907<br>
					<br>
					<b>Caso prefira, visite nossa empresa.</b><br>
					<b>Endereço:</b> Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
					CEP: 19015-080</p>

					<div class="text-center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.1846431032554!2d-51.39787032761652!3d-22.118934665562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f44a0dcb0f03%3A0xef74b712e961b7a8!2sR.%20Sete%20de%20Setembro%2C%201548%20-%20Vila%20do%20Estadio%2C%20Pres.%20Prudente%20-%20SP%2C%2019015-080!5e0!3m2!1spt-BR!2sbr!4v1711686453426!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<p class="mapa-google">Mapa da localização da empresa. 
						<br>R. Sete de Setembro, 1548 - Vila do Estadio, Pres. Prudente - SP, 19015-080</p>


						<!-- <img src="supremo/localizacao.png" alt="Imagem do Google Maps mostrando o endereço onde está localizado a empresa Supremo Soluções Ambientais e Serviços. É possível ver uma imóvel na cor azul, uma porta e janela grandes e número 1548 na parede. Dois vasos com uma planta em cada um estão localizados ao lado da porta." class="localizacao-img"> -->
					</div>
				</div>
		</div>
	</main>

    <br>
    
    <div class="footer-bar"> <!-- Barra -->
        <span class="visually-hidden">Barra de rodapé</span>
    </div> 

    <footer>
        <br>SUPREMO SOLUÇÕES EM ENGENHARIA LTDA<br>
        Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
        Contato: (18) 3203-4907 – CEP: 19015-080
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Seu navegador não suporta JavaScript!</noscript>

    <script src="script.js"></script> <!-- arquivo javascript -->
</body>
</html>