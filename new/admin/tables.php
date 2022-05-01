<?php
include('include/header.php');
include('include/css.php');

?>

<!-- Sidebar -->
<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fas fa-user-secret me-2"></i>Codersbite</div>
    <div class="list-group list-group-flush my-3">
        <a href="home.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="Add-student.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-project-diagram me-2"></i>Add Students</a>
        <a href="Notice.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-chart-line me-2"></i>Add Notice</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-paperclip me-2"></i>View All Students</a>
       
    </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <?php
    include('db/connect.php');
    $query ="SELECT ID, StudentName, StudentClass,StudentContactNumber,ContactNumber,DateofAdmission FROM tblstudent";
    $result = mysqli_query($conn,$query);
    ?>
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Student Name</th>
                                <th>Class</th>
                                <th>Contact NO:</th>
                                <th>Parents Contact NO:</th>
                                <th>Date OF Addmission</th>
                            </thead>
                            <?php while($row=mysqli_fetch_assoc($result)){ ?>

                            <tr>
                                <td><?php echo $row['ID'];  ?></td>
                                <td><?php echo $row['StudentName'];  ?></td>
                                <td><?php echo $row['StudentClass']; ?></td>
                                <td><?php echo $row['StudentContactNumber']; ?></td>
                                <td><?php echo $row['ContactNumber']; ?></td>
                                <td><?php echo $row['DateofAdmission']; ?></td>
                            </tr>


                            <?php } ?>
                        </table>


                    </div>
                </div>
            </div>

        </div>


        </section>



    </div>









</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<?php
include('include/script.php');
include('include/foter.php');?>





<!-- [poihgfcfghjkl;] -->