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

                <table id="myTable" class="table table-bordered">
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

                    <?php foreach ($data as $student){ ?>

                        <tr>
                            <td><?php echo $student->id ?></td>
                            <td><?php echo $student->name ?></td>
                            <td><?php echo $student->phone ?></td>
                            <td><?php echo $student->email ?></td>
                            <td>
                                <a href="<?php echo BASEURL;?>/StudentController/editStudent/<?php echo $student->id ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="<?php echo BASEURL;?>/StudentController/deleteStudent/<?php echo $student->id ?>" onclick="return confirm('Do you want to Delete?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php require_once 'partials/footer.php'?>
