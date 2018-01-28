  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
  <ul id="login-dp" class="dropdown-menu">
    <li>
       <div class="row">
          <div class="col-md-12 text-center">
            Login
             <form class="form" role="form" method="POST" action="./PHP/Auth/Login.php">
                <div class="form-group">
                   <input type="text" class="form-control" name="uname" placeholder="Email address" required>
                </div>
                <div class="form-group">
                   <input type="password" class="form-control" name="upwd" placeholder="Password" required>

                </div>
                <div class="form-group">
                  <input type="hidden" name="page" value="../../Aufgaben.php">
                   <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </div>
             </form>
          </div>
          <div class="bottom text-center">
            New here ? <a href="../Register.php"><b>Join Us</b></a>
          </div>
       </div>
    </li>
  </ul>
