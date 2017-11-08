<?php
include('header.php');
?>
<link type="text/css" rel="stylesheet" href="css/login.css"/>
<section>

<div class="container">

<div class="row">
        <div class="col s12 m7">
          <div class="card">
            
            <div class="card-content">
              <form>
			  <label for="email">Email</label>
			  <input id="email" type="email" class="validate">
			  <label for="password">Senha</label>
			  <input id="password" type="password" class="validate">
			  <p>
			    <input type="checkbox" class="filled-in" id="filled-in-box" />
				<label for="filled-in-box">Manter Conectado</label>
			  </p>
			  
			</form>
            </div>
            <div class="card-action">
			<div>
              <a href="#">Esqueci a Senha</a>
			  <button class="btn waves-effect waves-light" type="submit" name="action">Entrar</button>
			  </div>
            </div>
          </div>
        </div>
      </div>
 
</div>
</section>
</body>
</html>