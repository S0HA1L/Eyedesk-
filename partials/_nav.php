<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
}
else{
  $loggedin = false;
}

echo '<div class="p-3 mb-2 bg-primary text-white">';
      echo '<nav class="navbar navbar-expand-lg navbar-light bg-light  ">
      <a class="navbar-brand " href="/CurityHealthLoginSystem">HealthCare Login System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/CurityHealthLoginSystem/welcome.php">Health Center<span class="sr-only">(current)</span></a>
          </li>';
      if(!$loggedin){
      echo '<li class="nav-item text-right">
        <a class="nav-link" href="/CurityHealthLoginSystem/login.php" >login</a>
      </li>
      
      <li class="nav-item text-right">
        <a class="nav-link" href="/CurityHealthLoginSystem/signup.php">signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item ">
        <a class="nav-link " href="/CurityHealthLoginSystem/logout.php">logout</a>
      </li>';
      }
      
      
      echo '</ul>
        <form class="form-inline my-2 my-lg-0">
        </form>
        </div>
      </nav>';
      echo '</div>';

?>