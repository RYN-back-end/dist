<?php
$sqlAllNutrients = "SELECT COUNT(id) AS countAllNutrients FROM nutrients";
$countAllNutrientsResult = runQuery($sqlAllNutrients);
$countAllNutrients = 0;

if ($countAllNutrientsResult->num_rows > 0) {
    $row = $countAllNutrientsResult->fetch_assoc();
    $countAllNutrients = $row['countAllNutrients'];
}


$sqlAllNutrientsRecommendation = "SELECT COUNT(id) AS countAllNutrientsRecommendation FROM nutrients_recom";
$countAllNutrientsResultRecommendation = runQuery($sqlAllNutrientsRecommendation);
$countAllNutrientsRecommendation = 0;

if ($countAllNutrientsResultRecommendation->num_rows > 0) {
    $row = $countAllNutrientsResultRecommendation->fetch_assoc();
    $countAllNutrientsRecommendation = $row['countAllNutrientsRecommendation'];
}

$sqlWorkoutsAll = "SELECT COUNT(id) AS countAllWorkouts FROM workouts";
$countAllWorkoutsResult = runQuery($sqlWorkoutsAll);
$countAllWorkouts = 0;
if ($countAllWorkoutsResult->num_rows > 0) {

    $row = $countAllWorkoutsResult->fetch_assoc();
    $countAllWorkouts = $row['countAllWorkouts'];
}

$sqlAllWorkoutsRecommendation = "SELECT COUNT(id) AS countAllWorkoutsRecommendation FROM workouts_recom";
$countAllWorkoutsResultRecommendation = runQuery($sqlAllWorkoutsRecommendation);
$countAllWorkoutsRecommendation = 0;

if ($countAllWorkoutsResultRecommendation->num_rows > 0) {
    $row = $countAllWorkoutsResultRecommendation->fetch_assoc();
    $countAllWorkoutsRecommendation = $row['countAllWorkoutsRecommendation'];
}


?>
<section class="statisticsSection">
    <div class="row g-4">
        <a href="index.php" class="statistic col-sm-6 col-md-4 col-lg-3">
            <h5 class="top">
                <i class="fa-light fa-pan-food"></i>
                Nutrients
            </h5>
            <div class="body">
                <h1 class="odometer"
                    data-count="<?php echo $countAllNutrients; ?>"><?php echo $countAllNutrients; ?></h1>
            </div>
        </a>
        <a href="workouts.php" class="statistic col-sm-6 col-md-4 col-lg-3">
            <h5 class="top">
                <i class="fa-light fa-waffle"></i>
                Workouts
            </h5>
            <div class="body">
                <h1 class="odometer"
                    data-count="<?php echo $countAllWorkouts ?? 0; ?>"><?php echo $countAllWorkouts ?? 0; ?></h1>
            </div>
        </a>
        <a href="nutrientsRecommendation.php" class="statistic col-sm-6 col-md-4 col-lg-3">
            <h5 class="top">
                <i class="fa-light fa-hard-drive"></i>
                Nutrients Recommendation
            </h5>
            <div class="body">
                <h1 class="odometer"
                    data-count="<?php echo $countAllNutrientsRecommendation ?? 0; ?>"><?php echo $countAllNutrientsRecommendation ?? 0; ?></h1>
            </div>
        </a>
        <a href="workoutRecommendation.php" class="statistic col-sm-6 col-md-4 col-lg-3">
            <h5 class="top">
                <i class="fa-light fa-waffle"></i>
                Workouts Recommendation
            </h5>
            <div class="body">
                <h1 class="odometer"
                    data-count="<?php echo $countAllWorkoutsRecommendation ?? 0; ?>"><?php echo $countAllWorkoutsRecommendation ?? 0; ?></h1>
            </div>
        </a>
    </div>
</section>
