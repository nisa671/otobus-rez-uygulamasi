<!--  Kaynak: https://github.com/ishafiul/bus-reservation-system/tree/master -->


<?php
include 'include/header.php';
?>

<!-- Bus Search and slide Start -->
<div class="container bg-light shadow-md rounded px-4 py-4">
    <div class="row align-items-center border-bottom-4">
        <!-- Bus Search Start -->
        <div class="col-sm-4">
            <h2 class="text-4 mb-3">Umuttepe Turizm</h2>
            <form id="bookingBus" method="POST" action="buslist.php">
                <div class="form-row">
                    <div class="col-lg-6 form-group">
                        <select class="form-control" name="from">
                            <option selected hidden>Nereden</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                            
                        </select>

                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <div class="col-lg-6 form-group">
                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                        <select class="form-control" name="to">
                            <option selected hidden>Nereye</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <input name="date" id="datepicker" type="text" class="form-control" required="" placeholder="Tarih">

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="submit-search" value="Araç Ara">
                <br>
            </form>
        </div>
        <!-- Bus Search end -->

        <!-- Maps start -->

        <div class="col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6342301.00043755!2d35.129329549999994!3d39.0876459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1711648732247!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </div>

        <!-- Maps end -->
        

    </div>
    <br>
    <br>
    <br>
</div>
<!-- Bus Search and slide end-->


<br>

<!-- scripts -->

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
 <?php
include 'include/footer.php';
?>