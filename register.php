<?php
include 'App/config.php';

if (!empty($_POST)) {
    $username = (isset($_POST['username'])) ? $_POST['username'] : null;
    $email = (isset($_POST['email'])) ? $_POST['email'] : null;
    $password1 = (isset($_POST['password1'])) ? $_POST['password1'] : null;
    $password2 = (isset($_POST['password2'])) ? $_POST['password2'] : null;

    if ($username && $email && $password1 && $password1 == $password2) {
        $repository = new UserRepository();
        $repository->registerUser($username, $email, $password1);
        header("Location: login.php");
        exit;
    }
}

include _INCULDES_DIR_ . '/html_start.html.php';
?>

<div class="container">
    <h1>Register</h1>
    <a href="index.php" class="btn btn-primary">Index</a>
    <a href="login.php" class="btn btn-primary">Login</a>

    <form method="post" action="" class="mt-4">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" autocomplete="off">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password1" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Repeat Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="password2" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include _INCULDES_DIR_ . '/html_end.html.php';
