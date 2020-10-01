<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "EthFair"; include_once 'blocks/head.php'?>
</head>
<body>
  <?php include_once "blocks/header.php"?>
  <div id="feedback">
    <form>

		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="EthFair">
		<input type="hidden" name="admin_email" value="vadimdoron1nzzz@gmail.com">
		<input type="hidden" name="form_subject" value="Form Subject">
    <!-- END Hidden Required Fields -->
    <h1>Feedback:</h1>
		<input type="text" name="Name" placeholder="You name..." required><br>
		<input type="text" name="E-mail" placeholder="You E-mail..." required><br>
		<input type="text" name="Subject" placeholder="Message subject..."required><br>
    <textarea type="text" name="Message" rows="5" placeholder="You message..."required></textarea><br>
		<button>Send</button>

    </form>
  </div>
  <div id="contacts">
    <h1>Contacts</h1>
      <div id="contactsnum">
        <a class='contactslogo' href="https://twitter.com/EthFair/" target="_blank" title="twitter"><h3>Twitter.com/EthFair/ </h3></a>
        <a class='contactslogo' href="https://t.me/EthFairDeFi" target="_blank" title="telegram"><h3>T.me/EthFairDeFi</h3></a>
        <a class='contactslogo' href="twitter.com" target="_blank" title="mail"><h3>EthFair.DeFi@gmail.com</h3></a>
        <a class='contactslogo' href="https://www.reddit.com/user/EthFair/" target="_blank" title="reddit"><h3>Reddit.com/EthFair/</h3></a>
      <div>
  </div>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/script.js"></script>
  <?php include_once "blocks/footer.php"?>
</body>
</html>