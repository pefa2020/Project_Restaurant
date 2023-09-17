<?php
    require('database.php');

    // Get all the  dishes
    // make sure to bind menuCategoryID to proper category NAME
    $queryAllDishes = 'SELECT * FROM dishes
                ORDER BY dishID';
    $statement1 = $db->prepare($queryAllDishes);
    // dont need to bind values, because we're grabbing everything
    // so jump to execute
    $statement1->execute();
    $dishes = $statement1->fetchAll();
    $statement1->closeCursor();

    $queryAllCategories = 'SELECT * FROM menuCategories
                ORDER BY menuCategoryID';
    $statement2 = $db->prepare($queryAllCategories);
    // dont need to bind values, because we're grabbing everything
    // so jump to execute
    $statement2->execute();
    $categories = $statement2->fetchAll();
    $statement2->closeCursor();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Periuvian Delight Restaurant</title>
        <link rel="icon" type="image/png" href="images/favicon.png">  
        <link rel="stylesheet" href="styles/menu.css">   
    </head>
    <body>
        <nav class="top">
            <img src="images/pe.jpg" title="Peruvian Flag" width="100" height="50"/>
            <br>
            <p><a href="home.html">Home</a> | <a href="create.php">Create</a> | <a href="#.php">Menu</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
        </nav>
        <hr>
        <br>
        <main>
            <section>
                <h2>Dishes</h2>
                <table>
                    <tr>
                        <th>Category Name</th>
                        <th>Dish Code</th>
                        <th>Dish Name</th>
                        <th>Description</th>
                        <th>Dish Price</th>
                    </tr>

                    <?php foreach ($dishes as $dish) : ?>
                        <tr>
                            <td><?php echo $categories[$dish['menuCategoryID']-1]['menuCategoryName']; ?></td>
                            <td><?php echo $dish['dishCode']; ?></td>
                            <td><?php echo $dish['dishName']; ?></td>
                            <td><?php echo $dish['description']; ?></td>
                            <td><?php echo $dish['price']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
        </main>
        <br>
        <br>
        <hr>
        <footer>
            <p><a href="home.html">Home</a> | <a href="create.php">Create</a> | <a href="#.php">Menu</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
            <p><em>Copyright &copy; Percy Flores, 10/10/2022, IT202 Project Assignment</em></p>
        </footer>
    </body>
</html>
