<?php
if (isset($_GET["hoverboards"]) == false) {
  session_start();
  $_SESSION['error'] = 'Failed to generate. Try again.';
  header("Location: /generator/wallet.php");
}
if (isset($_GET["gamekeys"]) == false) {
  session_start();
  $_SESSION['error'] = 'Failed to generate. Try again.';
  header("Location: /generator/wallet.php");
}
if (isset($_GET["gamecoins"]) == false) {
  session_start();
  $_SESSION['error'] = 'Failed to generate. Try again.';
  header("Location: /generator/wallet.php");
}
if (isset($_GET["scoreboosters"]) == false) {
  session_start();
  $_SESSION['error'] = 'Failed to generate. Try again.';
  header("Location: /generator/wallet.php");
}
if (isset($_GET["headstarts"]) == false) {
  session_start();
  $_SESSION['error'] = 'Failed to generate. Try again.';
  header("Location: /generator/wallet.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Code for the wallet.json file</title>
    <?php require "/home/runner/subwaysurf/require/connect.php" ?>
  </head>
  <body>
    <header>
      <h1>Code for the wallet.json file</h1>
      <p style="color:#aaa;font-size:25px">Copy the generated code, find the file wallet.json in the folder "profile" and paste it there.</p>
    </header>

    <p style="color:red;text-decoration:underline"><b>Note that this may restart some statistics and you're using it at your own risk.</b></p>
    <textarea rows="35" cols="35" readonly>
      <?php require "/home/runner/subwaysurf/require/walletCODE.php" ?>
    </textarea>
    </script>
        
    <h2>Android Tutorial</h2>
    <ol style="display:grid;place-items: center;">
      <li>Download <a href="https://play.google.com/store/apps/details?id=com.kiloo.subwaysurf&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">Subway Surfers</a>.</li>
      <li>Open your file manager app.</li>
      <li>Navigate between the folders.</li>
      <li>Android → data → com.kiloo.subwaysurf → files → profile</li>
      <li>Copy the generated code, find the file wallet.json in the folder "profile" and paste it there.</li>
    </ol>
    <h2>Available generators</h2>
    <a href="/generator/wallet.php"><button class="btn btn-primary" style="width:75%">wallet.json (coins, keys, ...)</button></a>

    <br><br><br>
      <?php require "/home/runner/subwaysurf/require/footer.php" ?>
</html>