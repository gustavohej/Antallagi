<?php
  use app\lib\html;
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <?php HTML::style(); ?>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header>
        <nav class="nav-extended">
          <div class="container">
            <div class="nav-wrapper">
              <div class="logo">
                <a href="#" class="brand-logo">Antallagi</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              </div>
              <div class="nav-search">
                <form class="" action="index.html" method="post">
                  <input type="text" name="" value="" placeholder="Pesquisar">
                  <button type="button" name="button"><i class="material-icons">search</i></button>
                </form>
              </div>
              <div id="nav-mobile" class="links-right hide-on-med-and-down">
                <?php if(!empty($_SESSION['cliente'])) { ?>
                  <a href="sass.html" style="text-transform: capitalize;"><?= $_SESSION['cliente']->nome_cliente ?></a>
                  <a href="badges.html">Logout</a>
                <?php } else { ?>
                  <a href="Home">Home</a>
                  <a href="badges.html">Contato</a>
                  <a href="Cliente">Registrar</a>
                  <a href="Login">Login</a>
                <?php } ?>
              </div>
              <div class="side-nav" id="mobile-demo">
                <a href="sass.html">Sass</a>
                <a href="badges.html">Components</a>
                <a href="collapsible.html">JavaScript</a>
                <a href="collapsible.html">Css</a>
              </div>
            </div>
          </div>
        </nav>
        <nav class="transparent no-shadow">
          <div class="container">
            <div class="nav-wrapper">
              <div class="row">
                <div class="col s12 center-small">
                  <a href="#!" class="breadcrumb">First</a>
                  <a href="#!" class="breadcrumb">Second</a>
                  <a href="#!" class="breadcrumb">Third</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <main>
        <div class="container">
          <div class="row">
            <div class="col s12 order">
              <a href="#" class="waves-effect waves-teal btn-flat">Ordem alfabetica<i class="material-icons">arrow_downward</i></a>
              <a href="#" class="waves-effect waves-teal btn-flat">Preço<i class="material-icons">arrow_downward</i></a>
              <a href="#" class="waves-effect waves-teal btn-flat">Data<i class="material-icons">arrow_downward</i></a>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 l4">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="public/images/1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fixed-action-btn">
          <a class="btn-floating btn-large pulse waves-effect">
            <i class="large material-icons">add</i>
          </a>
        </div>
      </main>
      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('select').material_select();
          $(".button-collapse").sideNav();
        });
      </script>
    </body>
  </html>
