
    <?php
        /*$sql = "SELECT * FROM users Where id = 1";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username'] ."<br>".$row['password'] . "<br>";
            }
            }else {
                echo "No results found!";
            }*/

        require_once 'includes/header.php';
        ?>
        <?php
            if (isset($_SESSION['sessionId'])){
                echo '<script>alert("Welcome!!\nYou are logged in")</script>';
            }
        ?>

        <?php    
        require_once 'includes/footer.php';
    ?>

