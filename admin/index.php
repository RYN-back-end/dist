<?php
include __DIR__ . '/../system/core.php';
require('../system/helper.php');
checkAdminLogin();
$selectNutrientsSql = 'SELECT * FROM nutrients order by id DESC';
$selectNutrientsResult = runQuery($selectNutrientsSql);


if (isset($_POST['method']) && isset($_POST['id']) && $_POST['method'] == 'edit') {
    $updateSql = "UPDATE nutrients SET `type` = '{$_POST['type']}' ,`qty` = '{$_POST['qty']}'  ,`calories_no` = '{$_POST['calories_no']}' , `fats` = '{$_POST['fats']}', `protein` = '{$_POST['protein']}' , `carb` = '{$_POST['carb']}', `hint` = '{$_POST['hint']}' WHERE `id` = '{$_POST['id']}'";

    runQuery($updateSql);
    header("Location: index.php");
}

if (isset($_POST['method']) && $_POST['method'] == 'new') {
    $insertSql = "INSERT INTO `nutrients`(`type`, `qty`, `calories_no`,`fats` ,`protein` ,`carb` ,`hint`) VALUES ('{$_POST['type']}','{$_POST['qty']}','{$_POST['calories_no']}','{$_POST['fats']}', '{$_POST['protein']}','{$_POST['carb']}','{$_POST['hint']}' )";
    runQuery($insertSql);
    header("Location: index.php");
}

if (isset($_GET['method']) && $_GET['method'] == 'DELETE' && isset($_GET['id'])) {
    $deleteID = $_GET['id'];
    $sql = "DELETE FROM nutrients WHERE id = '{$deleteID}'";
    runQuery($sql);
    header('Location: index.php');
}


?>
<!doctype html>
<html lang="ar" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">
<head>
    <meta charset="utf-8"/>
    <title>Nutrients</title>
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
            <h6>Nutrients</h6>
            <button class="btn customBtn" data-bs-toggle="modal" data-bs-target="#createModal">Add Nutrient</button>
        </div>
        <div class="tableDiv">
            <table id="table" class="table datatable table-bordered dt-responsive nowrap table-striped align-middle">
                <thead>
                <tr>
                    <th>Nutrient Type</th>
                    <th>Quantity(gm)</th>
                    <th>Number of calories (cal)</th>
                    <th>Fats</th>
                    <th>Proteins</th>
                    <th>Carbs</th>

                    <th>Hint</th>
                    <th>Edit Nutrient</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($selectNutrientsResult->num_rows > 0) {
                    while ($row = $selectNutrientsResult->fetch_assoc()) {
                        ?>

                        <tr>
                            <td><?php echo $row['type'] ?></td>
                            <td><?php echo $row['qty'] ?> gm</td>
                            <td><?php echo $row['calories_no'] ?> cal</td>
                            <td><?php echo $row['fats'] ?> </td>
                            <td><?php echo $row['protein'] ?> </td>
                            <td><?php echo $row['carb'] ?> </td>

                            <td><?php echo $row['hint'] ?> </td>
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
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Nutrient </h5>
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
                                                        <label for="">Nutrient Type</label>
                                                        <input name="type" type="text" class="form-control"
                                                               required value="<?php echo $row['type'] ?>"
                                                               placeholder="Type">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Quantity (gm)</label>
                                                        <input name="qty" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['qty'] ?>"
                                                               placeholder="Quantity in gm">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Number of calories </label>
                                                        <input name="calories_no" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['calories_no'] ?>"
                                                               placeholder="Number of calories">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for="">Fats Number </label>
                                                        <input name="fats" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['fats'] ?>"
                                                               placeholder="Number of Fats">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Proteins Number </label>
                                                        <input name="protein" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['protein'] ?>"
                                                               placeholder="Number of proteins">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Number of Carbs </label>
                                                        <input name="carb" type="number"
                                                               class="form-control" required
                                                               value="<?php echo $row['carb'] ?>"
                                                               placeholder="Number of Carbs">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-12">
                                                    <div class="inputFeild">
                                                        <label for=""> Hint </label>

                                                        <input name="hint" type="text"
                                                               class="form-control" required
                                                               value="<?php echo $row['hint'] ?>"
                                                               placeholder="Hint">
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Nutrients</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="method" value="new">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for="">Nutrient Type</label>
                                    <input name="type" type="text" class="form-control"
                                           required value=""
                                           placeholder="Type">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Quantity (gm) </label>
                                    <input name="qty" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Quantity in gm">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Number of calories </label>
                                    <input name="calories_no" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Number of calories">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for="">Fats Number </label>
                                    <input name="fats" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Number of Fats">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Proteins Number </label>
                                    <input name="protein" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Number of proteins">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Number of Carbs </label>
                                    <input name="carb" type="number"
                                           class="form-control" required
                                           value=""
                                           placeholder="Number of Carbs">
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12">
                                <div class="inputFeild">
                                    <label for=""> Hint </label>
                                    <input name="hint" type="text"
                                           class="form-control" required
                                           value=""
                                           placeholder="Hint">
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
