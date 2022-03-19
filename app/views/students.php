<!--header-->
<?php require_once 'partials/header.php'?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <div class="card px-4 py-4">
                <!-- show success message-->
                <?php $this->flash('message','alert alert-success alert-dismissible fade show')?>

                <div class="clearfix">
                    <h3 class="float-left">Student Information</h3>
                    <a href="<?php echo BASEURL;?>/StudentController/addStudent" class="float-right btn btn-success btn-sm">Add New</a>
                </div>
                <hr>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>Md Nazmul Hasan</td>
                        <td>01765376287</td>
                        <td>nazmul@gmail.com</td>
                        <td>
                            <a href=""class="btn btn-sm btn-info">Edit</a>
                            <a href=""class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php require_once 'partials/footer.php'?>
