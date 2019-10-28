<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UTS Metode Numerik</title>
</head>

<body>
    <div class="container">
        <h1 class="display-1">Metode Iterasi Tetap</h1>
        <div class="row">
            <form method="POST">
                <!-- nilai f(x) -->
                <div class="form-row">
                    <div class="col-md-auto">
                        <label>Masukan nilai f(x) </label>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="number" min="1" class="form-control" name="nilaix3" placeholder="n.x3" required>
                    </div>
                    <div class="form-group col-md-1">
                        <select class="custom-select mr-sm-2" name="operatorx2" required>
                            <option selected>Pilih operator</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="number" min="1" class="form-control" name="nilaix2" placeholder="n.x^2" required>
                    </div>
                    <div class="form-group col-md-1">
                        <select class="custom-select mr-sm-2" name="operatorx" required>
                            <option selected>Pilih operator</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="number" min="1" class="form-control" name="nilaix" placeholder="n.x" required>
                    </div>
                    <div class="form-group col-md-1">
                        <select class="custom-select mr-sm-2" name="operatorkonstanta" required>
                            <option selected>Pilih operator</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="number" min="1" class="form-control" name="konstanta" placeholder="n" required>
                    </div>
                </div>

                <div class="form-row">
                    <!-- nilai awal -->
                    <div class="col">
                        <div class="form-group">
                            <input type="number" class="form-control" name="titikawal" placeholder="Titik awal" required />
                        </div>
                    </div>
                    <!-- nilai batas -->
                    <div class="col">
                        <div class="form-group">
                            <input type="float number" class="form-control" name="nilaibatas" placeholder="Nilai batas" required />
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Hitung">
            </form>
        </div>
        
        <br>

        <?php
        if (isset($_POST['submit'])) {
            $nilaix3 = $_POST['nilaix3'];
            $operatorx2 = $_POST['operatorx2'];
            $nilaix2 = $_POST['nilaix2'];
            $operatorx = $_POST['operatorx'];
            $nilaix = $_POST['nilaix'];
            $operatorkonstanta = $_POST['operatorkonstanta'];
            $konstanta = $_POST['konstanta'];

            $titikawal = $_POST['titikawal'];
            $selisihtitikawal = array($titikawal);
            $nilaibatas = $_POST['nilaibatas'];

            //menentukan nilai g(x) -> f(x) = n.x^3 +/- n.x^2 +/- n.x +/- n
            //langkah 1
            //0 = x (n.x^2 +/- n.x +/- n) +/- n 
            //langkah 2
            //+/- n = x (n.x^2 +/- n.x +/- n)
            //langkah 3
            //x = +/- n / (n.x^2 +/- n.x +/- n)
            //jadi g(x) dari input pengguna pasti akan bebentuk
            $hasil = 0;
            $x = 0;

            function hitung($x, $operatorx2, $operatorx, $operatorkonstanta, $konstanta, $nilaix3, $nilaix2, $nilaix)
            {
                if ($operatorx2 == "+" && $operatorx == "+" && $operatorkonstanta == "+") {
                    $hasil = -$konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) + ($nilaix2 * $x) + $nilaix);
                } else if ($operatorx2 == "+" && $operatorx == "+" && $operatorkonstanta == "-") {
                    $hasil = $konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) + ($nilaix2 * $x) + $nilaix);
                } else if ($operatorx2 == "+" && $operatorx == "-" && $operatorkonstanta == "-") {
                    $hasil = $konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) + ($nilaix2 * $x) - $nilaix);
                } else if ($operatorx2 == "-" && $operatorx == "-" && $operatorkonstanta == "-") {
                    $hasil = $konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) - ($nilaix2 * $x) - $nilaix);
                } else if ($operatorx2 == "-" && $operatorx == "+" && $operatorkonstanta == "+") {
                    $hasil = -$konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) - ($nilaix2 * $x) + $nilaix);
                } else if ($operatorx2 == "-" && $operatorx == "-" && $operatorkonstanta == "+") {
                    $hasil = -$konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) - ($nilaix2 * $x) - $nilaix);
                } else if ($operatorx2 == "+" && $operatorx == "-" && $operatorkonstanta == "+") {
                    $hasil = -$konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) + ($nilaix2 * $x) - $nilaix);
                } else if ($operatorx2 == "-" && $operatorx == "+" && $operatorkonstanta == "-") {
                    $hasil = $konstanta / ((($nilaix3 * $x) * ($nilaix3 * $x)) - ($nilaix2 * $x) + $nilaix);
                }
                return $hasil;
            }


            ?>
            <div class="row">
                <div class="table">
                    <table class="table">
                        <thead style="text-align:center; " class="thead-dark">
                            <tr>
                                <th>r</th>
                                <th>Xr</th>
                                <th>Xr+1</th>
                                <th>|Xr+1 - Xr|</th>
                                <th>Lanjut/Berhenti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $no = -1;
                                    for ($x = 0;;) {
                                        $no++; ?>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $selisihtitikawal[0]; ?></td>
                                    <?php $hasil = hitung($selisihtitikawal[0], $operatorx2, $operatorx, $operatorkonstanta, $konstanta, $nilaix3, $nilaix2, $nilaix); ?>
                                    <td><?php echo $hasil; ?> </td>
                                    <?php $beda =  abs($selisihtitikawal[0] - $hasil); ?>
                                    <?php $selisihtitikawal[0] = $hasil; ?>
                                    <td><?php echo $beda; ?> </td>

                                    <?php if ($beda < $nilaibatas) { ?>
                                        <td><?php echo "Berhenti" ?> </td>
                                        <div class="input">
                                            <?php echo "Iterasi terjadi sebanyak $x kali"; ?>
                                        </div>
                                    <?php
                                                exit();
                                            } else { ?>
                                        <td><?php echo "Lanjut" ?> </td>
                                    <?php $x++;
                                            } ?>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                </div>
            </div>
        <?php
        } else {
            exit();
        }
        ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>