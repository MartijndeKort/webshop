<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type"
    content="text/html; charset=utf-8">
    <title>Webshop</title>
    <link rel="stylesheet" href="css/webshop.css" />
    <script>
        function uitloggen(){
            var loguit = confirm('Weet u zeker dat u wilt uitloggen?');
            if(loguit){
                location.href='index.php?page=uitloggen';
            }
        }
    </script>
</head>
<body>
<div class="header">
    <div class="icon-container">
        <div class="icon">&#x266c;</div>
    </div>
<?php
if(isset($_SESSION["ID"]) &&
$_SESSION["STATUS"] == "ACTIEF") {
    if($_SESSION["ROL"]==0){
?>
<div class="user">
    <p id="user">Gebruiker:
        <?php echo $_SESSION["USER_NAAM"]; ?></p>
</div>
<div class="nav">
<ul>
    <li onclick="location.href='index.php?page=profile_edit'">
    Profiel</li>
    <li onclick="location.href='index.php?page=webshop'">
    Webshop</li>
</ul>
</div>
<?php
}elseif($_SESSION["ROL"]==1){
?>
<div class="user">
    <p id="user">Administrator:
        <?php echo $_SESSION["USER_NAAM"]; ?></p>
</div>
<div class="nav-admin">
    <ul>
        <li onclick="location.href='index.php?page=albums'">
        Albums</li>
        <li onclick="location.href='index.php?page=klanten'">
        Klanten</li>
        <li onclick="location.href='index.php?page=weborders'">
        Weborders</li>
        <li onclick="location.href='index.php?page=rapporten'">
        Rapporten</li>
        <li onclick="uitloggen()">Uitloggen</li>
</ul>
</div>
<?php
}
}
?>
</div>



</body>
</html>
