<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>

<style>
body {
  background-image: url('images/bcc.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<section id="home-page" class="d-flex justify-content-between">
    <div class="left-side">
        <div class="circle circle-img"></div>
    </div>
    <div class="right-side d-flex flex-column justify-content-center">
        <h1 class="heading-text">TENTANG KAMI</h1>
        <div style="height:5px; width:250px; background:#FD9519;" class="my-2"></div>
        <h2 class="h4 caption-text mb-4"> KAMI MEMBERIKAN PENDIDIKAN TERBAIK <br>AYO BERGABUNG DENGAN KAMI DAN WUJUDKAN MIMPIMU!!<br> CONTACT:<br> URSISFOR@GMAIL.COM</h2>
       

        
    </div>
</section>

<?php include "./parts/footer.php" ?>

<style>
    body {
  color:black;
}

h1 {
  color: black;
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
    .circle-img{
        background:red;
        width:550px;
        height:550px;
        
        bottom:0;
        z-index:2;
        /* left:-20; */
        margin-left:-100px;
        background:url("images/6.jpg") no-repeat;
        background-size: cover;
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
