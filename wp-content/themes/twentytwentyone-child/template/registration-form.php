<?php
/**
 * Template Name:   registration-form
 * Template Post Type:post,page,my-post-type;
 */
get_header();
?>
<html>

<head>
    <title>Form Validation</title>
</head>

<body>
    <div class="main">
        <h1>Registration Form</h1>
        <div class="sub">
            <div class="form1">
                <!--	Registration Form<br>!-->
                <form name="registration-form" method="post">
                    <input type="text" id="req1" placeholder="Firstname" name="firstname" id="firstname"><br><br>
                    <input type="text" id="req2" placeholder="Lastname" name="lastname" id="lastname"><br><br>
                    <input type="text" id="req3" placeholder="Username" name="username" id="username"><br><br>
                    <input type="text" id="req4" placeholder="Email address" name="email" id="email"><br><br>
                    <input type="text" id="req5" placeholder="Contact number" name="phone" id="phoneno"><br><br>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wpdb->insert('wp_register', array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'username' => $username,
        'email' => $email,
        'phoneno' => $phone,
        'flag' => '0',
    ));
}
?>
<?php
get_footer();
?>