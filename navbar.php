<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="myButton11" class="navbar-brand" href="#">START</a>
            <script type="text/javascript">
                  document.getElementById("myButton11").onclick = function () {
                      location.href = "index.php";
                  };
            </script>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="myButton3"><a href="#">Home</a></li>
              <script type="text/javascript">
                  document.getElementById("myButton3").onclick = function () {
                      location.href = "Home_page.php";
                  };
              </script>
            <li><a id="myButton4" href="#about">Interests</a></li>
              <script type="text/javascript">
                  document.getElementById("myButton4").onclick = function () {
                      location.href = "IN_page.php";
                  };
              </script>
            <li><a id="myButton5" href="#contact">Contact</a></li>
               <script type="text/javascript">
                  document.getElementById("myButton5").onclick = function () {
                      location.href = "CT_page.php";
                  };
              </script>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle">My Setup<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a id="myButton10" href="#">Computer</a></li>
                    <script type="text/javascript">
                  document.getElementById("myButton10").onclick = function () {
                      location.href = "CP_page.php";
                  };
              </script>
                  <li><a id="myButton6" href="#">Monitors</a></li>
                    <script type="text/javascript">
                  document.getElementById("myButton6").onclick = function () {
                      location.href = "MN_page.php";
                  };
              </script>
                  <li><a id="myButton7" href="#">Periferials</a></li>
                    <script type="text/javascript">
                  document.getElementById("myButton7").onclick = function () {
                      location.href = "PR_page.php";
                  };
              </script>
                  <li><a id="myButton8" href="#">Desk</a></li>
                    <script type="text/javascript">
                  document.getElementById("myButton8").onclick = function () {
                      location.href = "DK_page.php";
                  };
              </script>
                  <li><a id="myButton9" href="#">Other Equipment</a></li>
                    <script type="text/javascript">
                  document.getElementById("myButton9").onclick = function () {
                      location.href = "OT_page.php";
                  };
              </script>
                </ul>
            </li>
            <li id="myButton1" class="login"><a href="#help"><?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];}else{echo "Login";} ?></a></li>
              <script type="text/javascript">
                  document.getElementById("myButton1").onclick = function () {
                      location.href = "User_info.php";
                  };
              </script>
            <li id="myButton2" class="signUp"><a href="#signUp">Register</a></li>
              <script type="text/javascript">
                  document.getElementById("myButton2").onclick = function () {
                      location.href = "register.php";
                  };
              </script>
            <li id="myButton12" class="signUp"><a href="#signUp">Logout</a></li>
              <script type="text/javascript">
                  document.getElementById("myButton12").onclick = function () {
                      location.href = "logout.php";
                  };
              </script>

          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
