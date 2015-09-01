<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> InfoMousses </title>
        <link rel="stylesheet" href="/InfoMusses/bower_components/materialize/dist/css/materialize.min.css" media="screen" title="no title" charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css" >
    </head>
    <body class='body'>
       
       <!-- Modal Structure -->
      <div id="wrong" class="modal">
        <div class="modal-content">
          <h4>Preencha todos os campos!</h4>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
      </div>
      
        <!-- Modal Structure -->
      <div id="sold" class="modal">
        <div class="modal-content">
            <center>
              <h4>Seu pedido foi anotado!</h4><br>
              <h5>Guarde seu código único e aguarde a entrega...</h5><br><br>
              <h2 id='cod'> CARLOS-2 </h2>
            </center>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
      </div>
    
    
    
       
        <div class='box'> 
            <center>
                <!--<i class="large material-icons">insert_chart</i>-->
                <h1>Encomende seu Mousse agora!</h1>
                <div class='container'>
                    <br>
                    <form class='mainform container' action="" >
                        <input id='nome' type="text" placeholder="Nome" required>
                        <input id='email' type="email" placeholder="Email" required>
                        <input id='sala' type="text" placeholder="Sua sala" required><br><br>
                        <select id='sabor' name="sabor"   required>
                            <option value="" disabled selected>Escolha o sabor</option>
                            <option value="limao">Limão</option>
                            <option value="morango">Morango</option>
                            <option value="maracuja">Maracujá</option>
                        </select>
                        <br>
                        <input type="button" class='waves-light btn submit'  value="Comprar">
                    </form>
                </div>
            </center>
        </div>
        
    <script src='bower_components/jquery/dist/jquery.min.js'></script>
    <script src='bower_components/materialize/dist/js/materialize.min.js'></script>
    <script src='js/app.js'></script>
    </body>
</html>