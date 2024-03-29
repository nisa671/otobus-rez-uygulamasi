<?php
include 'admin.header.php';
if(isset($_POST['update']))
{
    $name = $_POST['bus_name'];
    $type = $_POST['bus_type'];
    $d_time = $_POST['d_time'];
    $dep_place = $_POST['d_place'];
    $a_time = $_POST['a_time'];
    $ari_place = $_POST['a_place'];
    $price = $_POST['price'];
    if($_POST['sat'] == 'On'){
        $Sat = 1;
    }
    else{
        $Sat = 0;
    }
    if($_POST['sun'] == 'On'){
        $Sun = 1;
    }
    else{
        $Sun = 0;
    }
    if($_POST['mon'] == 'On'){
        $Mon = 1;
    }
    else{
        $Mon = 0;
    }
    if($_POST['tue'] == 'On'){
        $Tue = 1;
    }
    else{
        $Tue = 0;
    }
    if($_POST['wed'] == 'On'){
        $Wed = 1;
    }
    else{
        $Wed = 0;
    }
    if($_POST['thu'] == 'On'){
        $Thu = 1;
    }
    else{
        $Thu = 0;
    }
    if($_POST['fri'] == 'On'){
        $Fri = 1;
    }
    else{
        $Fri = 0;
    }
    $number=$_POST['bus_number'];
    $insert_bus_query = "INSERT INTO _all_bus SET `name`='$name', `number`='$number', `type`='$type', `d_time`='$d_time', `d_place`='$dep_place', `a_time`='$a_time', `a_place`='$ari_place', `price`='$price', `Sat`='$Sat', `Sun`= '$Sun', `Mon`='$Mon', `Tue`='$Tue', `Wed`='$Wed', `Thu`='$Thu', `Fri`='$Fri'";

    mysqli_query($conn,$insert_bus_query);
}
?>
<div id="viewport">
    <div class="container bg-light shadow-md rounded py-4 " style="max-width: 550px">
        <div class="card">
            <h5 class="card-header">
                Yeni Araç Ekle
            </h5>
            <form class="container" id="" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="bus_name" class="col-form-label">Araç Adı</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="bus_name" id="bus_name" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="bus_number" class="col-form-label">Araç Numarası</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="bus_number" id="bus_number" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="bus_type" class="col-form-label">Araç Tipi</label>
                <div class="form-row">
                    <div class="col form-group">
                            <select name="bus_type" class="form-control" id="bus_type">
                                <option>AC</option>
                                <option>NON-AC</option>
                            </select>
                    </div>
                </div>
                <label for="d_place" class="col-form-label">Kalkış Yeri</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select id="d_place" class="form-control" name="d_place">
                            <option selected hidden>Nereden</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                            
                        </select>

                    </div>
                </div>
                <label for="d_time" class="col-form-label">Kalkış Zamanı</label>
                <div class="form-row">
                    <div class="col form-group">
                            <input name="d_time" id="d_time" type="text" class="form-control">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>

                    </div>
                </div>
                <label for="a_place" class="col-form-label">Varış Noktası</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select id="a_place" class="form-control" name="a_place">
                            <option selected hidden>Nereye</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                           
                        </select>

                    </div>
                </div>
                <label for="a_time" class="col-form-label">Varış Zamanı</label>
                <div class="form-row">
                    <div class="col form-group">
                        <input name="a_time" id="a_time" type="text" class="form-control">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>

                    </div>
                </div>
                <label for="price" class="col-form-label">Ücret</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="price" id="price" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="sat" class="col-form-label">Cumartesi</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="sat" class="form-control" id="sat">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="sun" class="col-form-label">Pazar</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="sun" class="form-control" id="sun">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="mon" class="col-form-label">Pazartesi</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="mon" class="form-control" id="mon">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="tue" class="col-form-label">Salı</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="tue" class="form-control" id="tue">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="wed" class="col-form-label">Çarşamba</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="wed" class="form-control" id="wed">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="thu" class="col-form-label">Perşembe</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="thu" class="form-control" id="thu">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <label for="fri" class="col-form-label">Cuma</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="fri" class="form-control" id="fri">
                            <option>Açık</option>
                            <option>Kapalı</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="update" value="Giriş Yap">
                <br>
            </form>
        </div>

        </form>
    </div>
</div>
<script>

    $('#d_time').timepicker();
    $('#a_time').timepicker();
</script>