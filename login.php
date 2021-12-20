<?php
include 'App/config.php';
include _INCULDES_DIR_ . '/html_start.html.php';
?>
<div class="container">
    <h1>Login</h1>
    <a href="index.php" class="btn btn-primary">Index</a>
    <a href="register.php" class="btn btn-primary">Register</a>

    <form method="post" action="" class="mt-4">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include _INCULDES_DIR_ . '/html_end.html.php';
