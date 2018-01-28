<nav class="navbar navbar-default navbar-inverse" role="navigation">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../home.php">Bayraktar Hasan</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="../home.php">Home</a></li>
      <li><a href="../Aufgaben.php">Aufgaben</a></li>

    </ul>

    <ul class="nav navbar-nav navbar-right">
        <?php
          if(!empty($_SESSION['uname'])){
            echo '<p class="navbar-text"> ' .$_SESSION['uname'] .'</p></li>';
          } else {
            echo '<p class="navbar-text">Already have an account?</p></li>';
          }
       ?>

      <li class="dropdown">
          <?php
          if(isset($_SESSION['login']) && $_SESSION['login'] == true ) {
            include('../PHP/Auth/Logout_FormSub.php');
          } else {
            include('../PHP/Auth/Login_FormSub.php');
          }
         ?>
      </li>

    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
