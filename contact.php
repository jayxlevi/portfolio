<?php

include('includes/header.php');
include('functions.php');

$result = false;

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $data['firstname'] = $firstname;
    $data['lastname'] = $lastname;
    $data['email'] = $email;
    $data['message'] = $msg;

    $result = processForm($data);

    if($result == true){
        header('Location: form_success.php');
    }//end of redirect

}

?>

<main id="contact">
    <h2>Contact Jay</h2>
    <div class="logolinks">
        <a href="https://www.linkedin.com/in/jay-perrone-9309b823b"><img src="images/linkedin_logo.png" alt="LinkedIn logo and link"></a>
        <a href="https://github.com/jayxlevi"><img src="images/github_logo.png" alt="Github logo and link"></a>
    </div>
    <form method="post" action="contact.php">
        <label for="firstname">First Name</label><br>
        <input type="text" id="firstname" name="firstname" required="required"><br><br>
        <label for="lastname">Last Name</label><br>
        <input type="text" id="lastname" name="lastname" required="required"><br><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required="required"><br><br>
        <label for="message">What can I help you with?</label><br>
        <textarea name="message" id="message" cols="20" rows="10"></textarea><br><br>
        <input type="submit" id="submit" value="Submit" name="submit">

    </form>
</main>


<?php

include('includes/footer.php');

?>
