<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UTS PWL</title>
    <style>
        .container {
            margin-top: 20px;
        }

        td {
            vertical-align: middle;
            text-align: center;
        }

        th {
            text-align: center;
        }

        #teamField {
            text-align: left;
        }

        img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="col-md-12 text-center">Singapore Premier League</h1>
        <br>
        <table class="table table-striped table-bordered" width="100%">
            <tr>
                <th>#</th>
                <th>Team</th>
                <th>Matches Played</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Losses</th>
                <th>Goals For</th>
                <th>Goals Against</th>
                <th>Goal Difference</th>
                <th>Points</th>
            </tr>
            <tr>
                <?php
                $no = 0;
                foreach ($datateam as $data) {
                    $mp = floor(($data->menang + $data->kalah + $data->draw));
                    $gd = floor(($data->goal - $data->kebobolan));
                    $p = floor((($data->menang * 3) + $data->draw));
                    $no++; ?>
                    <td><?php echo $no; ?> </td>
                    <td id="teamField"><img src="<?php echo base_url('assets/logoimg/') . $data->logo; ?>"> <?php echo $data->nama; ?> </td>
                    <td><?php echo $mp ?> </td>
                    <td><?php echo $data->menang; ?> </td>
                    <td><?php echo $data->draw; ?> </td>
                    <td><?php echo $data->kalah; ?> </td>
                    <td><?php echo $data->goal; ?> </td>
                    <td><?php echo $data->kebobolan; ?> </td>
                    <td><?php echo $gd; ?> </td>
                    <td><?php echo $p; ?> </td>
            </tr>
        <?php } ?>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>