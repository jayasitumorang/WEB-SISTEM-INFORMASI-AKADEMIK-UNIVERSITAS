<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
  <a class="navbar-brand" href="#">
  <a class="btn btn-outline-warning btn-navbar-language d-flex align-items-center">
    <span class="mx-2 lang-text"><h1><p color = "black">UR SISFO</p></h1></span>
  </a>
  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto d-flex align-items-center justify-content-center">
      <li class="nav-item mr-2">
        <a class="nav-link" href="./">Beranda</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link" href="./program-list.php">Program</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link" href="./about-us.php">Tentang</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link" href="./loginas.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">LOGIN</button>
        </a>
      </li>

    </ul>
  </div>
    
    </div>
</nav>

<style>
  body {
  color:white;
}

h1 {
  color: black;
}
    .navbar{
        width:100%;
        background: transparent !important;
        position:absolute;
        z-index:5;
    }
    .lang-text{
        font-size: 20px;
        line-height:26.4px;
        letter-spacing:2px;
    }
    .btn-text{
        font-weight:bold;
        letter-spacing:2px;
        border-radius: 10px;
        width: 200px;
        
    }
    .nav-link{
        color:#000 !important;
        letter-spacing:2px;

    }

    .btn-login-navbar{
        background:#FD9519;
        color:#FFF;
    }

    .btn-login-navbar:hover{
        background:#d98016;
    }

    .btn-navbar-language{
        border: 1px solid #FD9519;
        color:#000;
    }

    .btn-navbar-language:hover{
        background:#FD9519;
        color:#000;
    }
</style>