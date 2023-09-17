<?php
    
    $first_name = filter_input(INPUT_POST, 'first_name'); // alr
    $last_name = filter_input(INPUT_POST, 'last_name'); // alr
    $email = filter_input(INPUT_POST, 'email'); // alr
    $address = filter_input(INPUT_POST, 'address'); // alr
    $city = filter_input(INPUT_POST, 'city'); // alr
    $state = filter_input(INPUT_POST, 'state'); // alr
    $zip_code = filter_input(INPUT_POST, 'zip_code', // alr
        FILTER_VALIDATE_INT);
    $reference = filter_input(INPUT_POST, 'reference'); // alr

    // basic validation on input
    if ($first_name == null 
        || $last_name == null 
        || $email == null
        || $address == null 
        || $city == null 
        || $state == null 
        || $zip_code == null  
        || $reference == null) {
            echo "Invalid product data. Check all fields.";
    } else {
        require_once('database.php');
        $query = 'INSERT INTO customers
            (firstName, lastName, emailAddress, streetAddress, city, state, zipCode, reference, dateAdded)
            VALUES
            (:first_name, :last_name, :email, :address, :city, :state, :zip_code, :reference, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue('first_name', $first_name);
        $statement->bindValue('last_name', $last_name);
        $statement->bindValue('email', $email);
        $statement->bindValue('address', $address);
        $statement->bindValue('city', $city);
        $statement->bindValue('state', $state);
        $statement->bindValue('zip_code', $zip_code);
        $statement->bindValue('reference', $reference);
        $statement->execute();
        $statement->closeCursor();

        echo "Success! Data is valid and was inserted into the customers SQL database ";
        //include('menu.php');
    }
?>