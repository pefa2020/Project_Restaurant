<?php
  require('database.php');
  $query = 'SELECT * FROM customers ORDER BY customerID';
  $statement = $db->prepare($query);
  $statement->execute();
  $customers = $statement->fetchAll();
  $statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Periuvian Delight Restaurant</title>
    <link rel="icon" type="image/png" href="images/favicon.png">  
    <link rel="stylesheet" href="styles/mailingList.css">
    <script type="text/javascript" language="javascript" src="js/mailingList.js"></script>
</head>

<body>
    <nav class="top">
    <img src="images/pe.jpg" title="Peruvian Flag" width="100" height="50"/>
    <br>
    <p><a href="home.html">Home</a> | <a href="create.php">Create</a> | <a href="menu.php">Menu</a> |<a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
    </nav>

    <header>
            <center>
            <h1>Join our Mailing List</h1>
            <h3>For free!</h3>
            </center>          
    </header>

    <br>
    <br>

    <form action="add_customer.php" method="post" id="customer">
    <main class="container">
          <div id="a">First Name</div>  
          <div id="b">
            <input type="text"  name="first_name" placeholder="input name" id=" first name" minlength="4" maxlength="10" required/>
          </div>
          <div id="c">Last Name</div>
          <div id="d">
            <input type="text"  name="last_name" placeholder="input last name" id=" last name" minlength="2" maxlength="10" required/>
          </div>
          <div id="e">Email</div> 
          <div id="f">
            <input type="email"  name="email" placeholder="input email @" id=" email"  maxlength="30" required/>
          </div>
          <div id="g">Address</div>
          <div id="h">
            <input type="text"  name="address" placeholder="input address" id=" address" minlength="10" maxlength="20" required/>
          </div> 
          <div id="i">City</div>
          <div id="j">
            <input type="text"  name="city" placeholder="input city" id=" city" minlength="5" maxlength="10" required/>
          </div>
          <div id="k">State</div>
          <div id="l">
            <input type="text"  name="state" placeholder="input state" id=" state" minlength="2" maxlength="2" title="Must contain exactly 2 letters." required/>
          </div>
          <div id="m">Zip-Code</div>
          <div id="n">
            <input type="number" name="zip_code" placeholder="input zip-code" id=" zip-code" minlength="5" maxlength="5" title="Must contain exactly 5 digits." required/>
          </div>
          <div id="o">How did you hear about us?</div>
          <div id="p">
            
          <select id="reference" name="reference" required> <!--No need for php since one is not binding values from a table of referrals (such table doesn't exist)-->
            <option value='Friend Referral'>Friend Referral</option>
            <option value='Google Search'>Google Search</option>
            <option value='Advertisement'>Advertisement</option>
            <option value='Yellow Pages'>Yellow Pages</option>
            <option value='Family Referral'>Family Referral</option>
          </select>

          </div>
          <div id="q">
            <div class="Q">
            <input type="reset"/>
            </div>
            
          </div>
          <div id="r" >
            <div class="R">
            <input type="submit"/>
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

    <br>
    <hr>
    <footer>
        <p><a href="home.html">Home</a> | <a href="create.php">Create</a> | <a href="menu.php">Menu</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
        <p><em>Copyright &copy; Percy Flores, 11/02/2022, IT202 Project Assignment</em></p>
    </footer>

</body>

</html>