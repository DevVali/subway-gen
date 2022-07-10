<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require "C:/xampp/htdocs/subway_surf/require/connect.php" ?>
        <title>A JSON code template generator for Subway Surfers.</title>
    </head>
    <body>
        <header>
                <h1>A JSON code template generator for Subway Surfers.</h1>
                <p style="color:#aaa;font-size:25px">Earn coins, keys and more for free in Subway Surfers.</p>
                <img src="https://cdn.discordapp.com/attachments/889423777123938315/995664415410102272/subwaysurfers_01.png" style="width:600px;height:300px">
        </header>
        <h2>Android Tutorial</h2>
        <ol style="display:grid;place-items: center;">
            <li>Download <a href="https://play.google.com/store/apps/details?id=com.kiloo.subwaysurf&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">Subway Surfers</a>.</li>
            <li>Open your file manager app.</li>
            <li>Navigate between the folders.</li>
            <li>Android → data → com.kiloo.subwaysurf → files → profile</li>
            <li>Copy the generated code, find the file in the folder "profile" and paste it there.</li>
        </ol>
        <h2>Available generators</h2>
        <a href="/generator/wallet"><button class="btn btn-primary" style="width:75%">wallet.json (coins, keys, ...)</button></a>

        <br><br><br>
        <?php require "C:/xampp/htdocs/subway_surf/require/footer.php" ?>
</html>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>