<?php
  include 'nav.php';
?>
<br><br><br>
<div class="container">
<h1>Transaction History</h1>

    <br>
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover table-borderless">
            <thead>
                <tr>

                    <th class="text-center">Date & Time</th>

                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>

                </tr>
            </thead>
            <tbody>
                <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

                <tr>
                    <td class="py-2">
                        <?php echo $rows['datetime']; ?>
                    </td>

                    <td class="py-2">
                        <?php echo $rows['sender']; ?>
                    </td>
                    <td class="py-2">
                        <?php echo $rows['receiver']; ?>
                    </td>
                    <td class="py-2"><strong>
                            <?php echo $rows['balance']; ?>
                        </strong </td>


                        <?php
            }

        ?>
            </tbody>
        </table>

    </div>
</div>

<?php include('footer.php'); ?>

</body>

</html>