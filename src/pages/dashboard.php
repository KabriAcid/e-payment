<?php
// dashboard.php
require '../../config/config.php';

$sql = "SELECT transaction_id, amount, currency, customer_email, status, created_at FROM transactions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <table>
                <tr>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Customer Email</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["transaction_id"] . "</td>";
                        echo "<td>" . $row["amount"] . "</td>";
                        echo "<td>" . $row["currency"] . "</td>";
                        echo "<td>" . $row["customer_email"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No transactions found</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </main>
</body>

</html>