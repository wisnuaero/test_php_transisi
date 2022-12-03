<?php
include 'fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>
<!-- body -->

<body>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Test php dasar transisi</h1>
        </div>
    </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-6">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <div class="card-header d-flex flex-row">
                            <div class="p-2">
                                <h5>1.</h5>
                            </div>
                            <div class="p-2  ">Nilai ujian sebuah kelas tersimpan dalam sebuah string
                                berikut :
                                $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
                                Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi,
                                (3) 7
                                nilai terendah dari nilai-nilai di atas.
                                <!-- script php -->
                                <p class="card-text mt-3">
                                    <?php
                                    $nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);

                                    // Rata rata
                                    $jumlah = array_sum($nilai);
                                    $rata = $jumlah / count($nilai);
                                    echo "Rata-Rata : " . $rata;
                                    echo "<br>";

                                    // 7 Nilai Tertinggi
                                    rsort($nilai);
                                    $top7 = array_slice($nilai, 0, 7);
                                    echo "7 Tertinggi : ";
                                    echo implode(" ", $top7);
                                    echo "<br>";

                                    // 7 Nilai Terendah
                                    asort($nilai);
                                    $low7 = array_slice($nilai, 0, 7);
                                    echo "7 Terendah : ";
                                    echo implode(" ", $low7);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <div class="card-header d-flex flex-row">
                            <div class="p-2">
                                <h5>2.</h5>
                            </div>
                            <div class="p-2  ">Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah
                                huruf kecil dalam sebuah string.
                                Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output :
                                “TranSISI”
                                mengandung 3 buah huruf kecil.</div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            <form name="form" action="" method="post">
                                <div class="">
                                    <input type="text" name="count" id="count" placeholder="Masukan Kalimat">
                                    <button type="submit" name="submit" class="btn btn-primary m-2 ">Run</button>
                            </form>
                            <!-- script php -->
                            <?php
                            $string = $_POST['count'] ?? '';
                            echo "<br>";
                            echo $string . " mengandung " . count_($string) . " buah huruf kecil";
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <div class="card shadow rounded">
                <div class="card-body">
                    <div class="card-header d-flex flex-row">
                        <div class="p-2">
                            <h5>3.</h5>
                        </div>
                        <div class="p-2">Buatlah sebuah fungsi dalam PHP untuk membentuk unigram,
                            bigram, trigram dari sebuah string.
                            Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”,
                            maka
                            akan menghasilkan output :
                            <ul>
                                <li>Unigram : jakarta, adalah, ibukota, negara, republik, indonesia</li>
                                <li>Bigram : jakarta adalah, ibukota negara, republik indonesia</li>
                                <li>Trigram : jakarta adalah ibukota, negara republik indonesia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <form name="form" action="" method="post">
                            <input type="text" name="ngram" id="ngram" placeholder="Masukkan Kalimat">
                            <button type="submit" name="submit" class="btn btn-primary ml-2">Run</button>
                        </form>
                        <!-- script php -->
                        <?php $input = $_POST['ngram'] ?? ''; ?>
                        <ul>
                            <li>Unigram : <?php echo unigram($input); ?></li>
                            <li>Bigram : <?php echo bigram($input); ?></li>
                            <li>Trigram : <?php echo trigram($input); ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow rounded">
                <div class="card-body">
                    <div class="card-header d-flex flex-row">
                        <div class="p-2  ">
                            <h5>4.</h5>
                        </div>
                        <div class="p-2  ">Buatlah sebuah fungsi dalam PHP, yang apabila dipanggil
                            akan menampilkan tabel berikut :
                        </div>
                    </div>
                    <div class="media mb-1">
                        <img src="assets/images/pola.png" class="mr-3" alt="..." width="180" height="180">
                    </div>
                    <!-- script php -->
                    <?php
                    $ab = 1;
                    $xy = 1;
                    echo "<table>";
                    for ($i = 0; $i < 8; $i++) {
                        echo '<tr>';
                        for ($x = 0; $x < 8; $x++) {
                            echo '<td ' . calc($xy) . '>';
                            echo $ab++;
                            echo '</td>';
                            if ($xy == 12) {
                                $xy = 1;
                            } else {
                                $xy++;
                            }
                        }
                        echo '</tr>';
                    }
                    echo "</table>";
                    ?>
                </div>

            </div>
        </div>
    </div>
    <div class="row mb-3 mt-2">
        <div class="col-6">
            <div class="card shadow rounded">
                <div class="card-body">
                    <div class="card-header d-flex flex-row  mb-3">
                        <div class="p-2">
                            <h5>5.</h5>
                        </div>
                        <div class="p-2  ">Buatlah sebuah fungsi “enkripsi”, yang apabila diberikan
                            input DFHKNQ akan memberikan output EDKGSK</div>
                    </div>
                    <div class="card-body">
                        <form name="form" action="" method="post">
                            <input type="text" name="enkripsi" id="enkripsi" placeholder="Masukkan Kalimat">
                            <button type="submit" name="submit" class="btn btn-primary m-2 ">Run</button>
                        </form>
                        <!-- script php -->
                        <p class="card-text">
                            <?php
                            $input = $_POST['enkripsi'] ?? '';
                            ?>
                            <?php
                            echo encrypt($input);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>

</html>