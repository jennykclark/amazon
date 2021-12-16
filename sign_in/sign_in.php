<?php
$_title = 'Sign in';
require_once(__DIR__.'../../components/header.php');
?>
<body>
    <nav id="signInNav">
        <div id="logoblack">
        <a href="../home/home.php"><img src="../image/amazonBlack.png" id="signLogo"alt=""></a>           
        </div>
    </nav>

    <main>
        <section id="signUP">
            <section id="smallersignin">
                <div id="sign">
                    <form  onsubmit="return false">
                    <h1 id="lightFont">Sign-In</h1>
                    <h4>Email:</h4>
                    <input name="email" type="text" placeholder="email">
                    <h4>Password:</h4>
                    <input name="password" type="password" placeholder="password">
                    <button class="continueButton" onclick="login()">Sign in</button>
                    </form>
                    <p id="newAmazon"><span>New to Amazon?</span></p>
                    <button id="createButton" onclick="document.location='../signup/signup.php'">Create an Account</button>
                </div>
            </section>
        </section>
    </main>


<?php
require_once(__DIR__.'../../components/footer.php');
?>
