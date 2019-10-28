<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UTS Metode Numerik</title>

    <style>
        td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    //FUNGSI PERSAMAAN NON LINEAR 
    //X^3+4X^2-11X-30
    function fungsi($x)
    {
        $hasil = 30 / (($x * $x) + (4 * $x) - 11);
        return $hasil;
    }
    ?>

    <center>
        <h1 class="header mt-4 border">Metode Iterasi Tetap</h1>
    </center>

    <?php
    //DEFINISI VARIABEL X,Z
    $x = 0;
    $z = 0; ?>

    <?php
    //FORM INPUT VARIABEL DAN BATAS EBSELON 
    ?>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="input">
                    <h3><u>Form Input</u></h3>
                    <form method="POST">
                        <br>
                        F(x) = x<sup>3</sup>+4x<sup>2</sup>-11x-30
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="inputnumber1">Input Titik Awal A</label>
                            <input type="number" class="form-control" name="x" placeholder="Masukkan Titik A" required />
                        </div>
                        <div class="form-group">
                            <label for="inputnumber3">Input Batas</label>
                            <input type="float number" class="form-control" name="z" placeholder="Masukkan Batas" required />
                        </div>
                        <input name="submit" type="submit" value="GENERATE" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>


    <br>

    <?php
    if (isset($_POST['submit'])) {
        ?>
        <div class="input">
            <?php
                $x = $_POST['x'];
                $selang = array($x);
                $ebs = $_POST['z'];
                ?>
            <br>
        </div>

        <?php
            //MENAMPILKAN TABEL HASIL 
            ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table">
                        <table class="table table-dark">
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
                                        <td><?php echo $selang[0]; ?></td>
                                        <?php $fungsi = fungsi($selang[0]); ?>
                                        <td><?php echo $fungsi; ?> </td>
                                        <?php $beda =  abs($selang[0] - $fungsi); ?>
                                        <?php $selang[0] = $fungsi; ?>
                                        <td><?php echo $beda; ?> </td>

                                        <?php if ($beda < $ebs) { ?>
                                            <td><?php echo "Berhenti" ?> </td>
                                            <div class="input">
                                                <?php echo "Total Iterasi ada = $x"; ?>
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
            </div>
        </div>

    <?php
    } else {
        exit();
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>