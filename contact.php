<?php require('includes/header.php');?>
<?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<header>
	<h1>Get in touch!</h1>
	<nav id="top" class="main-nav">
    <a href="./web.php" class="web"><span>web</span></a>
    <a href="./about.php" class="About"><span>about</span></a>
    <a href="./index.php" class="home"><span>home</span></a>
	</nav>
</header>

<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Submit Feedback">
  </form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("henryjosephsteinberg@gmail.com",$subject,$message,"From: $from\n");
    echo "Thanks for getting in touch!";
  }
}
?>

<?php include('includes/footer.php');?>