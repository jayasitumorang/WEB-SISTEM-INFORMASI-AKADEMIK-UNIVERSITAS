<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>


<section id="home-page" class="d-flex justify-content-between">
    <div class="left-side">
        <h1 class="language-heading">Pilihlah Bahasa <br> Yang Ingin <br> Kamu Gunakan</h1>
        <div class="circle circle-img"></div>
    </div>
    <div class="right-side d-flex justify-content-center align-items-center">
    <div class="circle circle-img-2"></div>

        <div class="flag-item mr-5">
            <a href="#" class="text-decoration-none">
                <img src="./src/images/id-flag-lg.png" class="flag-img mb-5">
                <h3 class="text-center language-detail">Indonesia</h3>
            </a>
        </div>
        <div class="flag-item mr-5">
            <a href="#" class="text-decoration-none">
                <img src="./src/images/en-flag-lg.png" class="flag-img mb-5">
                <h3 class="text-center language-detail">English</h3>
            </a>
        </div>
    </div>
</section>

<?php include "./parts/footer.php" ?>

<style>
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
    .circle-img{
        background:red;
        width:750px;
        height:750px;
        margin-bottom:-200px;
        bottom:0;
        z-index:-1;
        /* left:-20; */
        margin-left:-100px;
        background:linear-gradient(180deg, #B4D7FE 0%, #5696F4 100%);
        background-size: cover;
    }

    .circle-img-2{
        background:#5696F4;
        width:250px;
        height:250px;
        bottom:0;
        right:0;
        margin-right:-30px;
        margin-bottom:-50px;
    }
    
    .language-heading{
        z-index:3;
        padding:50px;
        margin-top:100px;
        max-width:80%;
        font-size:50px;
        color:#FFF;
    }

    .language-detail{
        color:#000;
    }

    .right-side{
        width:50%;
        padding:50px;
        position:relative;
        margin-top:10%;
        overflow:hidden;
        /* background:red;
        width:45%;
        border-radius: 45px 0 0 45px; */
    }
    .heading-text{
        max-width:65%;
        letter-spacing: 2px;
        font-weight:bold;
    }

    .caption-text{
        max-width:85%;
        letter-spacing: 2px;

    }

    .btn-home-login{
        background:#FD9519;
        height:50px;
        color: #FFF;
        letter-spacing:2px;
        font-weight:bold;
    }

    .flag-img{
        max-width:250px;
    }
</style>
