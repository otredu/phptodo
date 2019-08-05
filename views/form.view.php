<?php require('partials/head.php'); ?>

<h1>Submit your name </h1>

<form method="GET" action="views/add-name.php">
    <input name="name"></input>
</form>


<?php 
echo "<pre>";
echo var_dump($_SERVER); 
echo var_dump($_REQUEST);
echo "</pre>";
?>

<?php require('partials/footer.php') ?>