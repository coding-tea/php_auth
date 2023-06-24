<?php
    require '../layout/header.php'; 
    session_start();
?>

<div class="container">
    <form method="post" action="">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name='remmeber'>
        <label class="form-check-label" for="exampleCheck1">Remmber Me</label>
        </div>
        <button type="submit" class="btn btn-primary" name="login">login</button>
    </form>
</div>

<?php
    if(isset($_POST['login'])):
        require '../db/config.php';
        $stmt = $db->prepare('select * from users where email = ? and password = ?');
        $flag = $stmt->execute([
            $_POST['email'],
            $_POST['password']
        ]);
        if($flag){
            $_SESSION['email'] =  $_POST['email'];
            if(isset($_POST['remmeber'])){
                $_COOKIE['email'] = $_POST['email'];
            }
            header('location:../index.php');
        }
    endif;
?>

<?php require_once '../layout/footer.php'; ?>