<?php
include 'admin.header.php';
$all_inv_query = "SELECT * FROM `all_invoice` JOIN users ON all_invoice.user_id =users.id JOIN _all_bus ON all_invoice.bus_id=_all_bus.id ORDER BY all_invoice.id DESC
";
$bbbb = "";
$all_inv_result = mysqli_query($conn, $all_inv_query);
if(isset($_SESSION['name']) && $user['admin'] == 1) {

?>

<div id="viewport">

    <div class="container bg-light shadow-md rounded py-4">
        <div class="mx-3 mb-3 text-center">
            <h4 class="">Tüm Faturalar</h4>
        </div>
        <hr>
        <table class="table text-xl-center">
            <tr class="thead-light shadow-none bg-light ">
                <th>Fatura Numarası</th>
                <th>Bilet Numarası</th>
                <th>Yolcu Adı</th>
                <th>Koltuk Numarası</th>
                <th>Nereden</th>
                <th>Nereye</th>
                <th>Seyahat Tarihi</th>
                <th>Araç Adı</th>
                <th>Araç Numarası</th>
            </tr>

            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($all_inv_result)) {
                ?>
                <tr>
                    <td><?php echo $row['invoice_numb'];?></td>
                    <td><?php echo $row['ticket_id'];?></td>
                    <td><?php echo $row['f_name']. " " .$row['l_name'];?></td>
                    <td><?php echo $row['seat_number'];?></td>
                    <td><?php echo $row['d_place'];?></td>
                    <td><?php echo $row['a_place'];?></td>
                    <td><?php echo $row['date_journey'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['number'];?></td>
                </tr>
                <?php
            }
                ?>

        </table>
    </div>


</div>
    <?php
}
?>