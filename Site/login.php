<?php
include('header.php');
?>
     <section>
      <div class="grid">
        <div class="grid-row">
          <div class="grid-col col--4 col--middle">
			<div class="card">
			  <div class="card-container">
				<div class="card-title">
				  <div class="opacity"></div>
				  <span>Login</span>
				</div>
				<form action='/login.php'>
				<div class="card-input">
				  <input type='text' name='email' placeholder='Email'>
				  <input type='password' name='senha' placeholder='Senha'>
				  
				</div>
			  </div>
			  <div class="card-action">
				<div class="action">
				  <div class="divider">
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