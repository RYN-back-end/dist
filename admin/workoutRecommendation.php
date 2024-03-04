<?php
include __DIR__ . '/../system/core.php';
require('../system/helper.php');
checkAdminLogin();
$selectNutrientsSql = 'SELECT * FROM workouts_recom order by id DESC';
$selectNutrientsResult = runQuery($selectNutrientsSql);


if (isset($_POST['method']) && isset($_POST['id']) && $_POST['method'] == 'edit') {
    $updateSql = "UPDATE workouts_recom SET `title` = '{$_POST['title']}' ,`text` = '{$_POST['text']}'";


    $imagePath = "";
    if (isset($_FILES['img']) && $_FILES['img']) {
        $errors = array();
        $file_name = (time() * 2) . '.jpg';
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        if ($file_size > 2097152) {
            header("Location: workoutRecommendation.php?error=The image size must be less than 2MB");
        }
        if (move_uploaded_file($file_tmp, "../uploads/workoutRecommendation/" . $file_name)) {
            $imagePath = "uploads/workoutRecommendation/" . $file_name;
            $updateSql .= ", `img` = '{$imagePath}'";
        }
    }

    $updateSql .= "WHERE `id` = '{$_POST['id']}'";

    runQuery($updateSql);
    header("Location: workoutRecommendation.php");
}

if (isset($_POST['method']) && $_POST['method'] == 'new') {


    $imagePath = "";
    if (isset($_FILES['img']) && $_FILES['img']) {
        $errors = array();
        $file_name = (time() * 2) . '.jpg';
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        if ($file_size > 2097152) {
            header("Location: workoutRecommendation.php?error=The image size must be less than 2MB");
        }
        if (move_uploaded_file($file_tmp, "../uploads/workoutRecommendation/" . $file_name)) {
            $imagePath = "uploads/workoutRecommendation/" . $file_name;
        }
    }
    $insertSql = "INSERT INTO `workouts_recom`(`title`, `text`, `img`) VALUES ('{$_POST['title']}','{$_POST['text']}','{$imagePath}')";
    runQuery($insertSql);
    header("Location: workoutRecommendation.php");
}

if (isset($_GET['method']) && $_GET['method'] == 'DELETE' && isset($_GET['id'])) {
    $deleteID = $_GET['id'];
    $sql = "DELETE FROM workouts_recom WHERE id = '{$deleteID}'";
    runQuery($sql);
    header('Location: workoutRecommendation.php');
}


?>
<!doctype html>
<html lang="ar" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">
<head>
    <meta charset="utf-8"/>
    <title>Workouts Recommendation</title>
    <?php
    include_once 'layout/assets/css.php';
    ?>
<body>
<div class="back">
    <a href="logout.php" class="btn"> Logout </a>
</div>
<div class="loader-ajax" style="display: none  ; ">
    <div class="lds-grid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
        </div>
    </div>
</div>
<div class="lds-hourglass"></div>

<content>
    <?php
    include_once 'layout/inc/counter.php';
    ?>
    <!--control -->
    <section class="tableSection">
        <div class="tableHead">
            <h6>Workouts</h6>
            <button class="btn customBtn" data-bs-toggle="modal" data-bs-target="#createModal">Add Recommendation
            </button>
        </div>
        <div class="tableDiv">
            <table id="table" class="table datatable table-bordered dt-responsive nowrap table-striped align-middle">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($selectNutrientsResult->num_rows > 0) {
                    while ($row = $selectNutrientsResult->fetch_assoc()) {
                        ?>

                        <tr>
                            <td><?php echo $row['title'] ?></td>
                            <th><img src="../<?php echo $row['img'] ?>" onclick="window.open(this.src)"
                                     style="width: 100px;"></th>
                            <td>
                                <button class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo $row['id'] ?>"><i
                                            class="fa-light fa-edit"></i></button>
                            </td>
                            <td>

                                <a href="?method=DELETE&id=<?php echo $row['id'] ?>"
                                   class="btn btn-danger confirmation"><i class="fa-light fa-trash"></i></a>
                            </td>
                        </tr>


                        <div class="modal fade" id="editModal<?php echo $row['id'] ?>" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <input type="hidden" name="method" value="edit">
                                            <input type="hidden" name="id"
                                                   value="<?php echo $row['id'] ?>">
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-6">
                                                    <div class="inputFeild">
                                                        <label for="">Title</label>
                                                        <input name="title" type="text" class="form-control"
                                                               required value="<?php echo $row['title'] ?>"
                                                               placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-6">
                                                    <div class="inputFeild">
                                                        <label for="">Image</label>
                                                        <input name="img" type="file" class="form-control"
                                                               value=""
                                                               placeholder="Type">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for="">Text</label>
                                                        <textarea class="form-control" name="text" required
                                                                  placeholder="Text"><?php echo $row['text'] ?></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Recommendation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="method" value="new">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="inputFeild">
                                    <label for="">Title</label>
                                    <input name="title" type="text" class="form-control"
                                           required value=""
                                           placeholder="Title">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="inputFeild">
                                    <label for="">Image</label>
                                    <input name="img" type="file" class="form-control"
                                           required value=""
                                           placeholder="Type">
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for="">Text</label>
                                    <textarea class="form-control" name="text" required placeholder="Text"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</content>

<?php
include_once 'layout/assets/js.php';
?>
</body>
</html>
