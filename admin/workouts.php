<?php
include __DIR__ . '/../system/core.php';
require('../system/helper.php');
checkAdminLogin();


$selectWorkoutsSql = 'SELECT * FROM workouts order by id DESC';
$selectWorkoutsResult = runQuery($selectWorkoutsSql);


if (isset($_POST['method']) && isset($_POST['id']) && $_POST['method'] == 'edit') {
    $updateSql = "UPDATE workouts SET `type` = '{$_POST['type']}' ,`time` = '{$_POST['time']}'  ,`burned_calories` = '{$_POST['burned_calories']}' WHERE `id` = '{$_POST['id']}'";

    runQuery($updateSql);
    header("Location: workouts.php");
}

if (isset($_POST['method']) && $_POST['method'] == 'new') {
    $insertSql = "INSERT INTO `workouts`(`type`, `time`, `burned_calories`) VALUES ('{$_POST['type']}','{$_POST['time']}','{$_POST['burned_calories']}')";
    runQuery($insertSql);
    header("Location: workouts.php");
}

if (isset($_GET['method']) && $_GET['method'] == 'DELETE' && isset($_GET['id'])) {
    $deleteID = $_GET['id'];
    $sql = "DELETE FROM workouts WHERE id = '{$deleteID}'";
    runQuery($sql);
    header('Location: workouts.php');
}


?>
<!doctype html>
<html lang="ar" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">
<head>
    <meta charset="utf-8"/>
    <title>Workouts</title>
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
            <button class="btn customBtn" data-bs-toggle="modal" data-bs-target="#createModal">Add Workout</button>
        </div>
        <div class="tableDiv">
            <table id="table" class="table datatable table-bordered dt-responsive nowrap table-striped align-middle">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Time in mintes</th>
                    <th>burned calories</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($selectWorkoutsResult->num_rows > 0) {
                    while ($row = $selectWorkoutsResult->fetch_assoc()) {
                        ?>

                        <tr>
                            <td><?php echo $row['type'] ?></td>
                            <td><?php echo $row['time'] ?> min</td>
                            <td><?php echo $row['burned_calories'] ?> cal</td>
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
                            <div class="modal-dialog">
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
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for="">Type</label>
                                                        <input name="type" type="text" class="form-control"
                                                               required value="<?php echo $row['type'] ?>"
                                                               placeholder="Type">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Time </label>
                                                        <input name="time" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['time'] ?>"
                                                               placeholder="time (min)">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> burned calories </label>
                                                        <input name="burned_calories" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['burned_calories'] ?>"
                                                               placeholder="Number of calories">
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
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Workouts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="method" value="new">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for="">Type</label>
                                    <input name="type" type="text" class="form-control"
                                           required value=""
                                           placeholder="Type">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Time </label>
                                    <input name="time" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Time">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> burned calories </label>
                                    <input name="burned_calories" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="burned calories">
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
