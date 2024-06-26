<?php
include 'include/header.php';
if(isset($_GET['invoice'])){
    $invoice_id =$_GET['invoice'];
}
$invoice_query = "SELECT f_name, l_name, `name`, `type`, `ticket_id`,`date_journey`,`reserving_time`,`d_time`,`d_place`,`a_time`,`a_place`,`price`,`number` FROM `users` JOIN all_invoice ON all_invoice.user_id=users.id JOIN _all_bus ON _all_bus.id = all_invoice.bus_id WHERE `invoice_numb`='$invoice_id' GROUP BY `invoice_numb`";
$result = mysqli_query($conn, $invoice_query);
$invoice_row = mysqli_fetch_assoc($result);
$t_price_q="SELECT COUNT(`seat_number`) FROM `invoice_temp` WHERE `invoice_numb`='$invoice_id'";
$_count = mysqli_query($conn, $t_price_q);
$_count_row = mysqli_fetch_assoc($_count);
$_count_ticket =$_count_row["COUNT(`seat_number`)"];
$seat_query="SELECT `seat_number` FROM `invoice_temp` WHERE `invoice_numb`='$invoice_id'";
$result_book = mysqli_query($conn, $seat_query);
?>
    <br>
    <br>
<div class="container invoice-container bg-light">
    <div class="row align-items-center">
        <div class="col-sm-7 text-center text-sm-left">
            <p><img src="img/logo.png" title="ebus" width="120px"></p>
        </div>
        <div class="col-sm-5 text-center text-sm-right">
            <h4 class="mb-0">Fatura:</h4>
            <p class="mb-0">Fatura Numarası: <?php echo $invoice_id;?></p>
        </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Nereden:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['d_place']?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Nereye:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['a_place']?></span> </div>
        <div class="col-sm-4"> <span class="text-black-50 text-uppercase">Tarih:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['date_journey']?> </span> </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Kalkış Zamanı:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['d_time']?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Varış Zamanı:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['a_time']?></span> </div>

        <div class="col-sm-4"> <span class="text-black-50 text-uppercase">Ticket ID:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['ticket_id']?></span> </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Yolcu Adı:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['f_name'].' '.$invoice_row['l_name'];?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Koltuk:(<?php echo $_count_ticket?>)</span><br>
            <span class="font-weight-500 text-3">
                <?php
                while ($_book_row = mysqli_fetch_assoc($result_book)){
                    echo $_book_row['seat_number'].' ';
                }
                ?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Durum</span><br>
            <span class="font-weight-500 text-3">Rezerve</span> </div>
    </div>
    <hr class="my-4">
    <div class="row">

        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Seyahatler:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['name'].' Seyahat';?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Araç Tipi:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['type']?></span> </div>
        <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Toplam Ücret:</span><br>
            <span class="font-weight-500 text-3"><?php echo $invoice_row['price']*$_count_ticket.'TL'?></span> </div>
    </div>
    <br>

    <p class="text-center text-black-50">Seyahat ederken bilet çıktınızı ve kimlik belgenizi yanınızda taşıyın.</p>
    <hr class="my-4">
    <div class="text-center">
        <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>