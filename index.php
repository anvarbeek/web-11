<?php
include 'header.php';
include 'config.php';

$errors = [];

$FullName = $Phone = $Email = $Password = $Radio = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $FullName = $_POST['FullName'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password_c = $_POST['Password_c'];
    $Radio = $_POST['Radio'];
    // Full name 
    if (empty(trim($_POST['FullName']))) {
        $errors = "Full Name must not be empty";
    } else {
        $FullName = trim($_POST['FullName']);
    }
    // Phone
    if (empty(trim($_POST['Phone']))) {
        $errors = "Phone must not be empty";
    } else {
        $Phone = trim($_POST['Phone']);
    }
    // Email  && preg_match('/^[a-z0-9._-]+@[a-z0-9.]+\.[a-z]{2,}$/i', $_POST['Email'])
    if (empty(trim($_POST['Email']))) {
        $errors = "Email must not be empty";
    } elseif (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
        $errors = "email yoq";
    } else {
        $Email = trim($_POST['Email']);
    }
    // Password && preg_match("/^[a-z0-9]{2,}$/i", $_POST["Password"]))
    if (empty(trim($_POST['Password']))) {
        $errors = "Password must not be empty";
    } elseif (strlen(trim($_POST["Password"])) < 6 ) {
        $errors[] = " Password 6dan kop bo'lsin, [a-z][0-9] belgilar yordamida";
    } else {
        $Password = trim($_POST['Password']);
    }
    // radio
    if (empty(trim($_POST['Radio']))) {
        $errors = "Type must not be empty";
    } else {
        $Radio = trim($_POST['Radio']);
    }




    //error bo'lmasa , usersni ma'lumotlar bazasiga yuboradi
    if (empty($errors)) {
        $sql = "INSERT INTO  sign_up(ID, FullName, Phone, Email, Password, Radio,)VALUES('$FullName', '$Phone', '$Email', '$Password', '$radio')";
        if (mysqli_query($conn, $sql)) {
            header("location:panel.php?success=good ");
        } else {
            $errors[] = "Xatolik ma'lumotlar yuborilmadi." . mysqli_error($con);
        }
    } else {
        $errors[] = "Xatolik ma'lumotlar yuborilmadi." . mysqli_error($con);
    }
}





?>




<div class="conteiner">
    <div class="row " style=" height:100vh;">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card shadow-lg rounded" style="width: 40rem;">
                <div class="card-head mt-4">
                    <div class="text-center">
                        <h1 class="card-title">Sign up</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="card-body">
                    <form action="panel.php" method="post">
                        <div class="form-group col-sm-dm p-4">
                            <div class="form-control">
                                <label for="" class="form-label">Full name</label>
                                <input type="text" class="form-control" name="FullName">
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="Phone">
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" required name="Email">
                            </div>
                            <div class="form-control gap-2 mt-3 d-flex">

                                <div class="col-sm">
                                    <label for="" class="form-label ">Password</label name="Password">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm">
                                    <label for="" class="form-label ">Create Password</label name="Password_c">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center  m-3">
                                <div class="form-radio  form-check-inline">
                                    <input class="form-radio-input" type="radio" value="user" name="radio" required>
                                    <label class="form-radio-label">
                                        User
                                    </label>

                                </div>
                                <div class="form-radio form-check-inline">
                                    <input class="form-radio-input" type="radio" value="admin" name="radio" required>
                                    <label class="form-radio-label">
                                        Admin
                                    </label>

                                </div>
                            </div>
                            <div class="d-grid m-3">
                                <button class="btn btn-success">ok</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


</body>

</html>