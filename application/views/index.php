<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>


<section id="home-page" class="d-flex justify-content-between">
    <div class="left-side">
        <div class="circle circle-img"></div>
    </div>
    <div class="right-side d-flex flex-column justify-content-center">
        <h1 class="heading-text">UR SISFO</h1>
        <div style="height:5px; width:250px; background:#FD9519;" class="my-2"></div>
        <h2 class="h4 caption-text mb-4"> PORTAL MAHASISWA <br>UNTUK MENGETAHUI INFORMASI SEPUTAR<br> AKADEMIK DAN KAMPUS.</h2>
        <a class="nav-link" href="./loginas.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">LOGIN</button>
        </a>
    </div>
</section>

<?php include "./parts/footer.php" ?>

<style>
    body {
  background-image: url("images/university.jpg");
  background-color: #cccccc;
   background-size:100% 100%;
    background-repeat: no-repeat;
}
    #home-page{
        min-height:100vh;
    }

    .left-side{
        position:relative;
        width:50%;
        overflow:hidden;
        margin-top:10%;
    }

    .circle{
        border-radius:50%;
        position:absolute;
    }
    h1 {
  
  color: white;
}

    .circle-img-2{
        background:#B4D7FE;
        bottom:0;
        margin-bottom:-50px;
        right:250px;
        z-index:1;
        width:200px;
        height:200px;
    }

    .circle-img-3{
        width:150px;
        height:150px;
        right:200px;
        z-index:1;
        background:linear-gradient(180deg, #B4D7FE 0%, #5696F4 100%);


    }

    .right-side{
        width:50%;
        padding:50px;
        position:relative;
    }
    .heading-text{
        max-width:65%;
        letter-spacing: 2px;
        font-weight:bold;
    }

    .caption-text{
        max-width:85%;
        letter-spacing: 2px;
        color:white;
    }

    .btn-home-login{
        background:#FD9519;
        height:50px;
        color: #FFF;
        letter-spacing:2px;
        font-weight:bold;
    }

    .btn-home-login:hover{
        background:#d98016;
    }
</style>
