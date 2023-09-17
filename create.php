<?php
    require('database.php');
    $query = 'SELECT * FROM menucategories ORDER BY menuCategoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Periuvian Delight Restaurant</title>
    <link rel="icon" type="image/png" href="images/favicon.png">  
    <link rel="stylesheet" href="styles/create.css?ver=<?php echo rand(111,999)?>"> <!--Used to avoid caching on client end caching and possibly server caching too.-->
    <script type="text/javascript" language="javascript" src="js/create.js"></script>
</head>

<body>
    <nav class="top">
    <img src="images/pe.jpg" title="Peruvian Flag" width="100" height="50"/>
    <br>
    <p><a href="home.html">Home</a> | <a href="#">Create</a> | <a href="menu.php">Menu</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
    </nav>

    <header>
            <center>
            <h1>Create your favorite Peruvian Dish</h1>
            <h3>Enjoy!</h3>
            </center>          
    </header>

    <br>
    <br>

    <span class="circlecolor1">
        Make your dish:
    </span>

    <form action="add_dish.php" method="post" id="create">
		<main class="container">		
			<div id="a">Menu Category</div>
			<div id="b">
				<select id="categories" name="category_id" required> <!--php is necessary since one is going to bind values from menuCategories table -->
                        <?php foreach ($categories as $category) : ?>
                        <!-- create an option-->
                        <option value="<?php echo $category['menuCategoryID']; ?>"> <!--value would be 1...-->
                            <?php echo $category['menuCategoryName']; ?>
                        </option>
                        <?php endforeach; ?>
                </select>
			</div>
			<div id="c">Dish Code</div>
			<div id="d">
				<input type="text"  name="code" type="text" id=" dish code" placeholder="6 alphanumeric characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6}" title="Must contain at least one number and one uppercase and lowercase letter, and exactly 6 characters" minlength="6" maxlength="10" required/>
			</div>
			<div id="e">Dish Name</div> 
			<div id="f">
				<input type="text"  name="name" id=" dish name" minlength="5" maxlength="255" required/>
			</div>
			<div id="g">Dish Description</div>
			<div id="h">
				<textarea name="dish_description" id=" description" placeholder="Describe your meal" minlength="10" maxlength="255" required></textarea>
			</div> 
			<div id="i">Dish Price</div>
			<div id="j">
				<input type="number" name="price" id=" dish price" min='10.99' max="99999999.99" step='0.01' placeholder='0.00' required/>
			</div>
			
			<div id="k">
				<div class="K">
				<input type="reset"/>
				</div> 
			</div>
                
			<div id="l" >
				<div class="L">
				<input type="submit"/>
				<link href="cart.html" />
				</div> 
			</div>
		</main>    			
    </form>
    <br>

    <div id="errors" class="visible">
    </div> 
    <br>

    <br>
    <br>
    <span class="circlecolor2">
        Specialties of the House
    </span>
    <br>

    <center>
    <img src="images/lomo.jpg" alt="Restaurant" title="Lomo Saltado"  width="400" height="300">
    <img src="images/ceviche.jpg" alt="Restaurant" title="Ceviche" width="400" height="300">
    <img src="images/papa.jpg" alt="Restaurant" title="Papa a la Huancaina" width="400" height="300">
    </center>
    
    <br>
    <hr>
    <footer>
        <p><a href="home.html">Home</a> | <a href="#">Create</a> | <a href="menu.php">Menu</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
        <p><em>Copyright &copy; Percy Flores, 10/10/2022, IT202 Project Assignment</em></p>
    </footer>

</body>

</html>