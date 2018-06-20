<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
</head>
<style>
    @media only screen and (max-width: 600px) {
    .ui.segment.container{
        margin-top: 20px;
    }
}
@media only screen and (min-width: 1200px) {
    #comentario{
top:14%;
    }
}
</style>
<body>

    <div style="background: #1b1c1d" class="ui pointing secondary inverted menu fixed">
        <a href="index.html" class="item"><i class="ui home icon"></i> Home </a>
        <a href="#" class="active item"><i class="chat icon"></i> Comentários</a>
        <a href="#" class="item"><i class="ui user icon"></i> Sobre Mim</a>
        <div class="right menu">
            <a href="#" class="item">
                <i class="ui github icon"></i>
                Veja esse projeto no GitHub
            </a>
        </div>
    </div>
    <!-- inicio da parte de comentários -->
    <div id="comentario" class="ui segment container">
    <h1>Comentários</h1>
    <div class="ui divider"></div>
<div class="ui comments inverted large">
  <div class="comment">
    <a class="avatar">
        <img src="img/user.png">        
    </a>
    <div class="content">
      <a class="author">Joe Henderson</a>
      <div class="text">
        <p>As horas, minutos e segundos ficam como relembradores visíveis que seu esforço os colocou lá. </p>
        <p>Preserve até sua próxima corrida, quando o relógio permite ver quão Impermanente seus esforços são.</p>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
        <img src="img/user.png">
    </a>
    <div class="content">
      <a class="author">Christian Rocha</a>
      <div class="text">Eu retuitei isso. </div>
    </div>
  </div>
  <?php
    require_once("Conexao.php");
    $conexao = new Conexao();
    $sql = "SELECT * FROM comentario;";
    $dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
    foreach($dados as $obj){
       echo"
       <div class=\"comment\">
       <a class=\"avatar\">
       <img src=\"img/user.png\">       
       </a>
       <div class=\"content\">
         <a class=\"author\">$obj->nome</a>
         <div class=\"text\">
           <p>$obj->texto </p>
         </div>
       </div>
     </div>
    ";
    }
?>
  <div class="ui divider"></div>

  <form class="ui reply form" method="post" action="addComment.php">
      <h3>Deixe seu comentário</h3>
      <div class="field">
          <h4>Seu nome</h4>
      <input type="text" name="nome">
          
      </div>
    <div class="field">
    <h4>Seu comentário</h4>
        
      <textarea name="texto"></textarea>
    </div>
    <input class="ui black submit button" type="submit" value="Adicionar Comentário">  
  </form>
</div>
</div>

<!-- Footer -->
<div style="font-size: 20px; margin-top: 10%;" class="ui inverted vertical footer segment">
	<div class="ui container">
		<div class="ui stackable inverted divided equal height stackable grid">
			<div class="four wide column">
				<h4 class="ui inverted header">Sobre</h4>
				<div class="ui inverted link list">
					<a href="#" class="item">Informações adicionais</a>
					<a href="#" class="item">Hobbies</a>
				</div>
			</div>
			<div class="four wide column">
				<h4 class="ui inverted header">Participe</h4>
				<div class="ui inverted link list">
					<a href="feed.php" class="item">Deixe seu comentário</a>
					<a href="#" class="item">Contato</a>
				</div>
			</div>
			<div class="eight wide column">
				<h4 class="ui inverted header">
					Lucas Venancio ©
				</h4>
				<p>Desenvolvedor Web. Site desenvolvido usando Semantic-UI. Para mais detalhes, entre em contato.</p>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script>
	$("body").backstretch("img/bg3.jpg");
</script>
</html>