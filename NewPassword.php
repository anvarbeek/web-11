<?php
include 'header.php';
include 'config.php';
?>

<div class="conteiner">
    <div class="row " style=" height:100vh;">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card shadow-lg rounded" style="width: 40rem;">
                <div class="card-head mt-4">
                    <div class="text-center">
                        <h1 class="card-title">New Password</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="card-body">
                    <form action="NewPassword.php" method="post">
                        <div class="form-group col-sm-dm p-4">
                            <div class="form-control mt-3">
                                <label for="" class="form-label">New Password</label>
                                <input type="Password" class="form-control" required>
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Create Password</label>
                                <input type="Password" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <a href="login.php" class="btn btn-outline-success ">No</a>
                                <button class="btn btn-success " name="submit">Yes</button>
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