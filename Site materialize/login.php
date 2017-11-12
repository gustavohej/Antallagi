<?php
    
    include('header.php');
         
    if(cookieverifica())
       header("Location:index.php");  
     
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $login = (isset($_POST['email'])) ? $_POST['email'] : '';
    $entrar = $_POST['action'];
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    $senha = md5($senha);
    $connect = mysql_connect('127.0.0.1','root','');
    $db = mysql_select_db('mydb');
    
      if (isset($entrar)) {
        $verifica = mysql_query("SELECT * FROM login WHERE email = '$login' AND senha = '$senha'") or die("Erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'></script>";
        }else{
                  
          if(isset($_POST['filled-in-box'])){
            setcookie("login",$login);
            setcookie("pass",$senha);
          }else{
            unset($_COOKIE["login"]);
            unset($_COOKIE["pass"]);
          }
          header("Location:index.php");
        }
      }
    }
    function cookieverifica()
    {
           if(isset($_COOKIE["login"])&&isset($_COOKIE["pass"]))
           {
               $login = $_COOKIE["login"];
               $senha = $_COOKIE["pass"];
           
                $verifica = mysql_query("SELECT * FROM login WHERE email = '$login' AND senha = '$senha'") or die("Erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                  return false;
                }else{
                  return true;
                }
           }
    }
    
    ?>
  
       <html>   
    
       <head>                  
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="css/login.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
   

         <script type="text/javascript">
           $(document).ready(function(){
    $('#modal1').modal();
	 });

</script>
    
  
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>Antallagi Login</h5>
      <br />
      <form method="POST" action="login.php">
    <div class="input-field">
    <input id="email" type="email" class="validate" name="email">
    <label for="email">Email</label>
    </div>
    <div class="input-field">
    <input id="password" type="password" class="validate" name="senha">
    <label for="password">Senha</label>
    </div>
    <label id='erroruser'>Usuario e Senha Incorretos !</label>
    <p>
    <input type="checkbox" class="filled-in" id="filled-in-box" value="true"/>
    <label for="filled-in-box">Manter Conectado</label>
    </p>
    </div>
    <div class="modal-footer"> 
    <div id='lostpass'>
      <a href="recovery.php" >Esqueci a Senha</a>
      </div>
    <button class="btn waves-effect waves-light " type="submit" name="action">Entrar</button>
  
    </form>
  </div>


    
  
    
    
    </section>
    

    </body>
    </html>