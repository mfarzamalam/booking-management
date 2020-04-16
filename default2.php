<?php

    include('common.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

    <font size="3" color="#800000">
        <center><?php echo $_SESSION['project'];  ?></center>
    </font>
    <br>
    <div align="center">
        <b>
            <font style="font-size: 20px">
                <a href="receipts.php">Receipt Voucher</a><br>
                <a href="status_receipts.php">Status of Receipt (s)</a></br>
                <a href="edit_delete_receipts.php">Edit / Delete Receipt (s)</a></br>
                <a href="last10receipt.php">Last 50 Receipts</a><br>
                <a href="report.php">Receivable Status</a></br>
                <a href="db_search.php">Search Receipts</a></br>
                <a href="unitmanager.php">Unit Manager</a></br>
                <a href="msgmanager.php">Message Manager</a></br>
                <a href="completion.php">Completion Date</a></br>
                <a href="monthlymdues.php">Monthly Maintainance</a></br>
                <a href="mutationform.php">Transfer / Booking Form</a></br>
                <a href="codemanager.php">Code Manager</a></br>
                <a href="undertaking.php">Resale Undertaking</a></br>
                <a href="contactlist.php">Contact List / SMS</a></br><br>
                <a href="logout.php">Logout</a>
            </font>
        </b>
    </div>

</body>
</html>
