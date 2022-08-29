<?php include('header.php');?>

<section class="login-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-10 container-box mx-auto m-4">
                <h2 class="banner-text">Login</h2>
                <form>
                    <div class="form-group mt-4">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control mt-2" id="exampleInputPassword1" placeholder="Enter Password">
                    </div>
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="banner-btn mb-3 mt-4">
                        <button type="button" class="button px-4 py-2 rounded-5 mt-2">LOGIN</button>
                        <a href="sign-up.php" class="href-text">Don't Have an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>
<style>
    <?php include "style.css" ?>
</style>