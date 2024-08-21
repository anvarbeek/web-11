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
                            <h1 class="card-title">login</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="profile.php" method="post">
                            <div class="form-group col-sm-dm p-4">
                                <div class="form-control mt-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-control mt-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                
                                <div class="d-grid m-3">
                                    <button class="btn btn-success ">ok</button>
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