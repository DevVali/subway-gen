<?php
$warn = "";
session_start();
if (isset($_SESSION['error'])) {
  $warn = $_SESSION['error'];
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Generate the wallet.json file</title>
    <?php require "/home/runner/subwaysurf/require/connect.php" ?>
  </head>
  <body>
    <p><?php echo "$warn"; ?></p>
    <header>
      <h1>Generate the wallet.json file</h1>
      <p style="color:#aaa;font-size:25px">Fill out the options and generate your customized JSON template code.</p>
    </header>
        
    <form method="get" action="/code/wallet.php">
      <fieldset>
        <legend>Game data</legend>
        <label for="number">Hoverboards:</label> <input type="number" name="hoverboards" required> <font color="red">*</font><br>
        <label for="number">Game keys:</label> <input type="number" name="gamekeys" required> <font color="red">*</font><br>
        <label for="number">Game coins:</label> <input type="number" name="gamecoins" required> <font color="red">*</font><br>
        <label for="number">Score Boosters:</label> <input type="number" name="scoreboosters" required> <font color="red">*</font><br>
        <label for="number">Headstarts:</label> <input type="number" name="headstarts" required> <font color="red">*</font><br>
      </fieldset>
      <br><input type="submit" class="btn btn-success">
    </form>

    <br><br><br>
      <?php require "/home/runner/subwaysurf/require/footer.php" ?>
</html>