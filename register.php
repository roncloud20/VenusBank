<?php
    $pagetitle = "Register to become a member";
    require_once "assets/header.php";
?>
<h1>Register</h1>
<form action="" method="post">
    <input type="text" name="firstname" placeholder="Firstname:"/> <br/>
    <input type="text" name="surname" placeholder="Surname:"/> <br/>
    <input type="email" name="email" placeholder="E-Mail Address:"/> <br/>
    <input type="tel" name="phone" placeholder="Phone Number:"/>
    <input type="submit" value="Register">
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Validate the firstname
        if(empty($firstname)) {
            echo "Please enter a firstname";
        }
        if(empty($surname)) {
            echo "Please enter a surname";
        }
    }

    $str = "Kehinde Zaza Oseni";
    echo "<p>$str</p>";
    // $pat = "/zaza/i";
    // echo preg_replace($pat, "Odogwu", $str);
    echo preg_replace("/\s/i", $str);
    // if(preg_match_all("/[abc]/", $str)){
    //     echo "Match";
    // } else {
    //     echo "No Match";
    // };
?>