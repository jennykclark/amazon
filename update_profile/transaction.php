<?php
$_title = 'Update Items';
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

<section id="UploadDIv">
    <h1>Update Profile</h1>

<form class="style_form" id="update_item" onsubmit="return false">

<div>
        <label for="name">First Name</label>
        <input type="text" name="name" value="<?php echo $_SESSION['user']['user_name']?>">
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php echo $_SESSION['user']['lastName']?>">
    </div>
    <div>
    <label for="email">Email</label>
      <input name="email" value="<?php echo $_SESSION['user']['email']?>" type="text">
</div>
<br>
<input type="text" name="userId" value="<?php echo $_SESSION['user']['user_id'] ?>">

  <button onclick="update()" id="updateButton">Update</button>  

    
</form>
</section>


<?php
require_once(__DIR__.'../../components/footer.php');
?>
