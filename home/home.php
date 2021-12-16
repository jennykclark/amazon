<?php
$_title = 'Amazon';
require_once(__DIR__.'../../components/header.php');

require_once(__DIR__.'../../globals.php');
require_once(__DIR__.'../../db.php');

?>
<body id="HomePage">
    <nav id="amazonNav">
        <div id="logo">
        <a href="../home/home.php"><img src="../image/amazonLogo.png" id="amazonLogo"></a>
        </div>
        <div id="Delivery">
            <i class="fas fa-map-marker-alt"></i> 
            <p><span id="deliveryGrey">Deliver to</span> <br> Denmark</p>
        </div>
        <div id="search">
            <div id="dropdown"><p>All</p></div>
            <input id="searchbar" onkeyup="search_animal()" type="text" name="search"> <button id="searchButton"><i class="fas fa-search"></i></button>
        </div>
        <div id="tools">
        <div id="flag">
            <img src="../image/denmark.png" id="denmarkFlag">
        </div>
        <div id="account" class="dropdown">
           
           <button class="dropbtn"><p> 
               <!-- <?php echo $_SESSION['user']['user_name'] ?> -->
            <!-- Add php echo session user name -->
            <!-- <span>Account &amp; Lists</span></p> -->
            <span>Hello</span></p>
        </button> 
        <div class="dropdown-content">
            <h4>Account</h4>
            <a href="../account/account.php">Your Account</a>
            <a href="../add_items/upload_item.php">Add Items</a>
            <a href="../update_items/basic_update.php">Update Items</a>
            <a href="../sign_in/sign_in.php">Sign In</a>
            <a href="../logout/logout.php">Sign out</a>
            </div>

        </div>
        <div id="Order">
            <!-- <p> Return </p>
             <p>&amp;Orders</p> -->
             <p>Return
                 <span>&amp;Orders</span>
             </p>
        </div>
        <div id="basket">
            <!-- <p>Basket</p> -->
            <i class="fas fa-shopping-cart"></i>
        </div>
        </div>
    </nav>
<div id="secondnav">
    <div id="all">
        <p> &#9776; All</p>
    </div>
    <div id="deals">
        <p>Last Mintue Deals</p>
    </div>
    <div id="grocery">
        <p>Grocery</p>
    </div>
    <div id="free">
        <p>Free Delivery</p>
    </div>
    <div id="buy">
        <p>Buy Again</p>
    </div>
</div>

<img src="../image/xmasDeals.jpg" alt="" class="heroImage">

<div class="titles">
    <div class="shopTitle">    
        <h1>
            Products from Class
        </h1>
        <div class="img">
            <img src="../image/knowIcon.png" class="divImage">
        </div>
        <a href="../show_class/class.php">Shop here</a>
    </div>
    <div class="shopTitle">
        <h1>
            View all Items
        </h1>
        <div class="img">
            <img src="../image/amazonStar.jpg" class="divImage"> 
            
        </div>
        <a href="../items/myItems.php">Shop here</a>
    </div>
    <div class="shopTitle">
        <h1>Our Best Sellers</h1>
        <div class="img">
            <img src="../image/celticTales.jpg" class="divImage" id="Tales">
        </div>
        <a href="../items/bestBuys.php">Shop here</a>
    </div>
    <div class="shopTitle">
        <h1>Items under 150dkk</h1>
        <div class="img">
            <img src="../image/deals.jpg" class="divImage">
        </div>
        <a href="../items/underAmount.php">Shop here</a>
    </div>
</div>


<div class="heroImage"></div>

<?php
require_once(__DIR__.'../../components/footer.php');
?>