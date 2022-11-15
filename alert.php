<?php 
    if (isset($_GET['success'])) {
?>  
        <h2 style="color: green; text-align: center; margin-top: 20px">
            <?php echo $_GET['success'] ?>
        </h2>
<?php 
    }
?>

<?php 
    if (isset($_GET['error'])) {
?>  
        <h2 style="color: red; text-align: center; margin-top: 20px">
            <?php echo $_GET['error'] ?>
        </h2>
<?php 
    }
?>