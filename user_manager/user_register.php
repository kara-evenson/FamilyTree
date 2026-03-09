<?php  require_once '../view/header.php'; ?> 
<!-- <span><?php echo $registration_message?></span><br> -->
 <h1>Register Confirmation</h1>
        <h2>Please verify the information you submitted:</h2>

            <div>
            <p>First Name: <?php echo $firstName; ?></p>
            <p>Last Name: <?php echo $lastName; ?></p>
            <p>Address: <?php echo $address; ?></p>
            <p>City: <?php echo $city; ?></p>
            <p>State: <?php echo $state; ?></p>
            <p>Zip Code: <?php echo $zip; ?></p>
            <p>Email: <?php echo $email; ?></p>
            </div>

<?php require_once '../view/footer.php'; ?>