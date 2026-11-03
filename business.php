<?php 
    $pageTitle = "Business";
    require('header.php');
    
    $id = $_GET['id']; //Grab ID from URL
    $query = "SELECT * FROM businesses WHERE business_id=$id";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($sql);

    $pageTitle = $row['name'];

    //Template Structure
    //Populate based on business chosen
    //Redirect to locations if none chosen
        
?>

<img src="https://placeholder.com/400x300" alt="Location-hero placeholder">

<h2><?php print $row['name']?></h2>

<p><?php print $row['address'] ?></p>

<div class=specials-card>
    <p>Special Menu Item</p>
</div>

<a href="#">Visit <?php print $row['name']?>'s Menu</a>

<img src="https://placeholder.com/400x300" alt="google maps placeholder" id="map">



<?php require('footer.php'); ?>