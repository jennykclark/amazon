<?php
$_title = 'Update Profile';
require_once(__DIR__.'../../components/header.php');
session_start();
if(! isset($_SESSION['user_name'])){
    header('Location: ../sign_in/sign_in.php');
    die();
}

require_once(__DIR__.'../../globals.php');
require_once(__DIR__.'../../db.php');

try{
    $db = _db();
}catch(Exception $ex){
    _res(500, ['info'=>'System under maintainance','error'=>__LINE__]);
}

$userProduct = $_SESSION['user']['user_id'];

$q = $db->prepare('SELECT * FROM items2 WHERE user_id = :userID');
$q->bindValue(":userID", $userProduct);

$q->execute();

?>
<body id="itemsBody">
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
           
           <button class="dropbtn"><p>Hello 
           <?php echo $_SESSION['user']['user_name'] ?>
            <!-- Add php echo session user name -->
            <!-- <span>Account &amp; Lists</span></p> -->
            <span>Account</span></p>
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

<main>
<section id="edit">
    <div id="editheading">
        <h1>Update Profile</h1>
    </div>
    <div class="options" id="upProfile">
        <p class="BoldP">First Name</p>
        <div class="optioninfo">
        <p><?php echo $_SESSION['user']['user_name']?></p>
        </div>

        <p class="BoldP">Last Name</p>
        <div class="optioninfo">
        <p><?php echo $_SESSION['user']['lastName']?></p>
        </div>  
        
        
        <p class="BoldP">Email</p>
        <div class="optioninfo">
        <p><?php echo $_SESSION['user']['email']?></p>
        </div>

        
        <div class="optioninfo">
                <div id="passwordDiv">
           <p class="BoldP">Password</p> 
           <Button id="passUpdate" onclick="document.location='../email/passwordEmail.php'">Update Password</Button>
        </div>
        <button id="updateButton" onclick="document.location='transaction.php'" >Update</button>
        </div>
    </div>



</section>
</main>

<?php
require_once(__DIR__.'../../components/footer.php');
?>