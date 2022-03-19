<!--header-->
<?php require_once 'partials/header.php'?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="card shadow px-4 py-4">

                <!-- show success message-->
                <?php $this->flash('message','alert alert-success alert-dismissible fade show')?>

                <h5 class="text-center mb-3">Welcome to Dashboard</h5>
                <p>You have successfully logged in.</p>

            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php require_once 'partials/footer.php'?>
