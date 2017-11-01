<?php
include('header.php');
?>

 <section>
      <div class="grid">
        <div class="grid-row">
          <div class="grid-col col--3 col--middle">
			<div class="card">
			  <div class="card-container">
				<div class="card-title">
				  <div class="opacity"></div>
				  <span>Login Antallagi</span>
				</div>
				<form action='/login.php'>
				<div class="card-input">
				  <input class="inputslogin" type='text' name='email' placeholder='Email'>
				  <input class="inputslogin" type='password' name='senha' placeholder='Senha'>
				  <input class="checkmanter" type="checkbox" name="" value="Manterconectado"><span>Manter Conectado</span>
				</div>
			  </div>
			  <div class="card-action">
				<div class="action">
                    
				  <div class="divider">
				  </div>
                    <div id="esqueceusenha">
                    <a href="#">Esqueceu a Senha</a>
                    </div>
				  <input class='button button-link' type='submit' value='Entrar'>
				  </form>
				</div>
			  </div>
			</div>
          </div>
        </div>
      </div>
</section>
</body>
</html>