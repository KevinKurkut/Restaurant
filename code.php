<?php
require __DIR__ . "/config/database.php";

// delete meal
if(isset($_POST['delete_meal']))
{
    $meal_id = $_POST['meal_id'];

    $stmt = $mysqli->prepare("DELETE FROM cart WHERE cart_id= ?");
    $stmt->bind_param("i", $meal_id);
    $query_run = $stmt->execute();

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Meal Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Meal Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>