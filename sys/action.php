<?php
    
    include '../dao/connection.php';
    
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = $_POST['action'];
    }
    
    if($action == 'save'){

        $nome   = $_GET['name'];  
        $email  = $_GET['email'];
        $sala   = $_GET['class'];
        $sabor  = $_GET['savor'];


        /* unic code */
        $r   = rand(10000,1000000);
        $cod = "$r-$sala";
        /* date */

        date_default_timezone_set("America/Sao_Paulo");
        $date = date('Y-M-d H:i:s');


          try{
                $query = "INSERT INTO venda (nome,email,sala,sabor,cod,data) VALUES (?,?,?,?,?,?)";

                $stmt = Connection::prepare($query);
                $stmt->bindValue(1,$nome);
                $stmt->bindValue(2,$email);
                $stmt->bindValue(3,$sala);
                $stmt->bindValue(4,$sabor);
                $stmt->bindValue(5,$cod);
                $stmt->bindValue(6,$date);
                $stmt->execute();
            }catch(PDOException $e){

            }
        
        echo $cod;
    }
else if($action == 'relogin'){
    $user = $_POST['reuser'];
    $pass = $_POST['repass'];
    $id   = 0;
    try{
        $query = "SELECT * FROM readmin WHERE retname = ? AND retpass = ? ";
        $stmt  = Connection::prepare($query);
        $stmt->bindValue(1,$user);
        $stmt->bindValue(2,$pass);
        $stmt->execute();
        $res = $stmt;
        
        foreach($res as $key => $val){
            $id = $val->id;
        }
        if($id != 0){
            session_start();
            
            
            $_SESSION['id']     = $id;
            $_SESSION['name']   = $user;
            $_SESSION['pass']   = $pass; 
            
        }
        
    }catch(PDOException $e){
        echo $e;
    }
    
    
}












