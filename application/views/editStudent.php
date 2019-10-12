<!DOCTYPE html>
<html lang="en">

<?php require('head.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require('sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require('topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Student Edit</h1>
                    <div class="border-left-primary">
                        <div class="container">
                            <form method="POST" action="<?php echo base_url() . 'Student/editStudent/' . $id; ?>" class="needs-validation">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="studentName">Student Name</label>
                                        <input type="text" class="form-control" id="studentName" placeholder="Student Name" name="studentName" value="<?php echo $studentName; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fatherName">Father Name</label>
                                        <input type="text" class="form-control" id="fatherName" placeholder="Father Name" name="fatherName" value="<?php echo $fatherName; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" value="<?php echo $address; ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">Class</label>
                                        <select class="form-control" name="class" required >
                                            <option>----Class----</option>
                                            <option value="0">PG</option>
                                            <option value="1">Nursery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="studentCnic">Student CNIC / B-Form</label>
                                        <input class="form-control" type="text" name="studentcnic" minlength="13" maxlength="13" id="studentcnic" placeholder="CNIC without dash" value="<?php echo $studentCnic; ?>" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fatherCnic">Faher CNIC</label>
                                        <input class="form-control" type="text" name="fathercnic" minlength="13" maxlength="13" id="fathercnic" placeholder="CNIC without dash" value="<?php echo $fatherCnic; ?>" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="cellNumber">Cell Number</label>
                                        <input class="form-control" type="text" name="cellNumber" minlength="11" maxlength="11" id="cellNumber" value="<?php echo $cellNumber; ?>" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dob">Date of Birth</label>
                                        <input class="form-control" type="date" name="dob" required="" data-date="" data-date-format="DD MM YYYY" value="<?php echo $dob; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Gender</label>
                                        <select class="form-control" name="gender" required>
                                            <option>----Gender----</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Done</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php require('footbar.php'); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <?php require('foot.php'); ?>

</body>

</html>