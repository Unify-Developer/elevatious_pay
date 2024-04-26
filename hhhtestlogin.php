<?php

require './include/config.php';
$msg = '';

if (isset( $_POST[ 'login' ] ) ) {
    $user_name = $_POST[ 'username' ];
    // $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];

    $sql = $conn->prepare( "SELECT * FROM student WHERE user_name = '$user_name' and password = '$password'" );

    $sql->execute();

    if ( $sql->rowCount() > 0 ) {
        $result = $sql->fetch( PDO::FETCH_ASSOC );
        // $msg = 'Welcome ' . $result[ 'full_name' ];

        header( 'Location: hhhtestlogin.php' );

        exit();

    } else {
        $msg = 'Wrong Info';
    }
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>User Login Page</title>
    <link rel='stylesheet' href='./assets/dist/css/style.css'>

</head>

<body>
    <center>
        <div class='container'>
            <form class='login-form' action='' method='post'>
                <h2>Login</h2>
                <div class='input-group'>
                    <label for='full_name'>Username</label>
                    <input type='text' id='username' name='username' required>
                </div>
                <div class='input-group'>
                    <label for='full_name'>Password</label>
                    <input type='password' id='password' name='password' required>
                </div> <br>
                <!--
<div class = 'input-group' style = 'display: flex;' >
<input type = 'checkbox'>  <label for = 'admin' name = 'admin'>Login as Admin</label>
</div> <br> -->
                <button name='login'>Login</button>

                <p><span style='color: red; '>
                        <?=$msg?>
                    </span></p>
            </form>
        </div>
    </center>
</body>

</html>