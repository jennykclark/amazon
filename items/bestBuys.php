<?php
$_title = 'Best Sellers';
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

try{
    $q = $db->query('SELECT * from items2 LIMIT 10');
}catch(PDOException $e) {
    exit();
}

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
    <section id="rightSide">
        <div id="options">
            <div id="Department">
                <h3>Department</h3>
                <p><a href="items/myItems.php">My items</a></p>
                <p><a href="../show_class/class.php">Classmate's items</a></p>
            </div>
            <div id="price">
                <h3>Price</h3>
                <p>Up to 100DKK</p>
                <p>100DKK to 200DKK</p>
                <P>200DKK to 500DKK</P>
                <P>500DKK to 1.OOODKK</P>
                <P>1.000DKK &amp; above</P>
            </div>

        </div>
    </section>
    <h1>Our Best Sellers</h1>
    <?php 
    while($rows=$q->fetch())
    {
    ?>
    <section id="mainItems">
        <section class="itemClass">
            <div id="imgDiv">
                <div id="imgSize">
                    <img src="../images/<?php echo $rows['item_img'];?>" alt="">
                </div>
            </div>

            <div id="itemInfo">
                <div id="heading">
                    <h1>
                        <?php
                        echo $rows['item_name'];
                        ?>
                    </h1>
                </div>
                <div id="item">
                    <h4>           
                        <?php
                        echo $rows['item_price'];
                        ?> DKK
                        </h4>
                    <p>Ships to Denmark</p>
                    <p>More buying choices</p>
                    <p>(<?php echo $rows['item_stock'];?> used and new offers)</p>
                    <br>
                    <p>
                    <?php
                        echo $rows['description'];
                    ?>
                    </p>
                </div>

            </div>
        </section>
    </section>
<br>
<?php 
}
?>
</main>

<?php
require_once(__DIR__.'../../components/footer.php');
?>