<?php include "header.php"; ?>

<?php
    // Contoh nilai dari database
    $status = "aktif"; // Anda dapat mengganti ini dengan nilai yang diperoleh dari database

    $checkedAktif = "";
    $checkedTidakAktif = "";

    if ($status == "aktif") {
        $checkedAktif = "checked";
    } elseif ($status == "tidak aktif") {
        $checkedTidakAktif = "checked";
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <!-- sweet alert -->
    <div class="infodata"
        data-infodata="<?php if(isset($_SESSION['status'])){echo $_SESSION['status'];} unset($_SESSION['status']); ?>">
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <buttton class="btn btn-primary mb-3" href="#" data-toggle="modal" data-target="#insert_user" type="button">
                <i class="fa fa-plus-square"></i> Tambah User
            </buttton>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_user">
                Launch demo modal
            </button> -->
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include "../koneksi/koneksi.php";
                            
                            $data_user = mysqli_query($conn,"select * from tbl_user order by username asc");
                            
                          
                            $i = 1;
                        while(  $data = mysqli_fetch_array($data_user)){
                            ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $data['username'];?></td>
                            <td><?php echo $data['level'];?></td>
                            <td><?php echo $data['status'];?></td>
                            <td>
                                <button class="btn btn-outline-warning my-auto mx-auto" id="editbuttonuser"
                                    data-toggle="modal" data-target="#edit_user" data-id="<?php echo $data['id'];?>"
                                    data-username="<?php echo $data['username'];?>"
                                    data-level="<?php echo $data['level'];?>"
                                    data-status="<?php echo $data['status'];?>"><i class="fa fa-edit"></i></button>


                                <?php 
                                    if ($data['level'] != 'superadmin') {
                                        echo '<a href="../function/delete_user.php?id=' . $data['id'] . '" class="deletedata btn btn-danger" style="color: white">
                                                <i class="fa fa-trash"></i>
                                                
                                            </a>';
                                    }
                                    ?>

                            </td>
                        </tr>
                        <?php
                    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<!-- Edit Modal-->
<div class="modal fade" id="edit_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>

            <form action="../function/edit_user.php" method="POST">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="">
                    </div>

                    <div class="form-group mt-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="level">Level</label>
                        <select class="custom-select" aria-label="Default select example" id="level" name="level"
                            placeholder="" required>
                            <option value="superadmin">Superadmin</option>
                            <option value="manager">Manager</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <label class="ml-2" for="status">Status</label>
                    <div class="form-group mt-2 d-flex justify-content-start">
                        <div class="form-check ml-1 mr-5">
                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
                                value="aktif" <?php echo $checkedAktif; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"
                                value="tidak aktif" <?php echo $checkedTidakAktif; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak Aktif
                            </label>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="edit_user_post">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Edit Modal-->

<!-- Insert Modal-->
<form action="../function/add_user.php" method="POST">
    <div class="modal fade" id="insert_user" tabindex="-1" role="dialog" aria-labelledby="insert_user_label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Silahkan Input Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group mt-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="level">Level</label>
                        <select class="custom-select" aria-label="Default select example" id="level" name="level"
                            placeholder="" required>
                            <option selected value="superadmin">Superadmin</option>
                            <option value="manager">Manager</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <label class="ml-2" for="status">Status</label>
                    <div class="form-group mt-2 d-flex justify-content-start">
                        <div class="form-check ml-1 mr-5">
                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
                                value="Aktif" <?php echo $checkedAktif; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"
                                value="Tidak Aktif" <?php echo $checkedTidakAktif; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak Aktif
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" id="buttonsubmit" type="submit"
                            name="add_user_post">Input</button>
                    </div>

                </div>
            </div>
        </div>
</form>
<!-- End Insert Modal-->


<!-- /.container-fluid -->
<?php include "footer.php"; ?>