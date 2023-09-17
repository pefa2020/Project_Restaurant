<?php
    $category_id = filter_input(INPUT_POST, 'category_id',
        FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $description = filter_input(INPUT_POST, 'dish_description');
    $price = filter_input(INPUT_POST, 'price',
        FILTER_VALIDATE_FLOAT);

    // basic validation on input
    if($category_id == null || $category_id == FALSE ||
        $code == null || $name == null || $description == null || 
        $price == null || $price == false) {
            echo "Invalid product data. Check all fields.";
    } else {
        require_once('database.php');
        $query = 'INSERT INTO dishes
            (menuCategoryID, dishCode, dishName, description, price, dateAdded)
            VALUES
            (:category_id, :code, :name, :dish_description, :price, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue('category_id', $category_id);
        $statement->bindValue('code', $code);
        $statement->bindValue('name', $name);
        $statement->bindValue('dish_description', $description);
        $statement->bindValue('price', $price);
        $statement->execute();
        $statement->closeCursor();
        include('menu.php'); //
    }
?>