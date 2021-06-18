<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>



<section id="forgot-password-page" class="container d-flex align-items-center justify-content-center">
    
    <div class="form-container container-fluid">
        <form>
            <div class="form-group mb-4">
                <input type="email" class="form-control form-input" placeholder="Nama Pemilik atau e-mail">
            </div>
            <div class="btn-action-group d-flex w-10 justify-content-center">
                <button type="submit" class="btn btn-warning btn-send-auth mx-2 btn-action">Kirim Tautan Login</button>
            </div>
        </form>
    
    </div>
</section>

<?php include "./parts/footer.php" ?>


<style>
    #forgot-password-page{
        min-height:87.5vh;
    }

    .btn-send-auth{
        background: #FD9519;
        color: #FFF;
        font-weight:bold;
        letter-spacing:2px;
    }

    .btn-send-auth:hover{
        background:#d98016;
    }

    .form-container{
        min-width:70%;
        max-width:70%;
    }


    .form-input{
        background: #FFF !important;
        border: 1px solid #FD9519;
        border-radius: 10px;
        padding: 20px;
    }

    .btn-action{
        min-width:100%;
        border-radius: 10px;
    }
</style>