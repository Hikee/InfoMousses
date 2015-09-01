<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> InfoMousses </title>
        <link rel="stylesheet" href="/InfoMusses/bower_components/materialize/dist/css/materialize.min.css" media="screen" title="no title" charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/InfoMusses/css/main.css" >
    </head>
    <body>
        <div class="box">
                   <?php if(isset($_POST['login']) && $_POST['login'] == 'ok'){?>
                   <? }else{ ?>    
                   <center>
                    <h1> CONTROLE DE ESTOQUE </h1><br><br><br>
                    <div class="container">
                        <form action='../sys/action.php' class='container' method="post">
                            <input name="reuser" type="text" placeholder="USER">
                            <input name="repass" type="password" placeholder="PASS">
                            <br><br>
                            <input type="submit" class='btn' value="Entrar">
                            <input type="hidden" name='action' value='relogin'> 
                        </form>
                    </div>
                </center>
                <?php } ?>
        </div>
        
     <script src='/InfoMusses/bower_components/jquery/dist/jquery.min.js'></script>
    <script src='/InfoMusses/bower_components/materialize/dist/js/materialize.min.js'></script>
</body>
</html>