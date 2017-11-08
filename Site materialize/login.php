<?php
include('header.php');
if( isset($_POST['email'])){
$login = $_POST['email'];
  $entrar = $_POST['action'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('mydb');
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM login WHERE email = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>$('#modal1').modal('open');</script>";
          
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
}
?>

<link type="text/css" rel="stylesheet" href="css/login.css"/>
<section>

<div class="container">

<div class="row">
        <div class="col s10 offset-s1 m6 offset-m3">
          <div class="card">
            <div class="card-content">
			<h5>Login</h5>
			<br/>
			<form method="POST" action="login.php">
			<div class="input-field">
              <input id="email" type="email" class="validate" name="email">
			  <label for="email">Email</label>
			  </div>
			 <div class="input-field">
			 <input id="password" type="password" class="validate" name="senha">
			  <label for="password">Senha</label>
			  </div>
			  <p>
			    <input type="checkbox" class="filled-in" id="filled-in-box" />
				<label for="filled-in-box">Manter Conectado</label>
			  </p>
            </div>
            <div class="card-action">
			<div>
              <a href="#">Esqueci a Senha</a>
			  <button class="btn waves-effect waves-light" type="submit" name="action" >Entrar</button>
			  </div>
			  </form>
            </div>
          </div>
        </div>
      </div>
  <a onclick="modal()">Modal</a>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  
  
</section>
</body>
<script type="text/javascript">
 $(document).ready(function(){
    $('.modal').modal();
  });

</script>
</html>