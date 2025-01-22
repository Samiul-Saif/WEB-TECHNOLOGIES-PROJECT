<?php
include_once "header.php";
require_once('../model/tcModel.php');
 
$termsContent = getTermsAndConditions();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
</head>
<body>
    <h1 align="center">Terms and Conditions</h1>
    <div align="center">
        <?= nl2br(htmlspecialchars($termsContent)) ?>
    </div>
</body>
</html>
<?php include_once "footer.php"; ?>