<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7 PHP</title>
        <style>
            body{
                background-color:silver; 
            }
            h1{
                text-align:center;
            }
            table{
                margin:auto;
            }
            table td{
                padding: 3px;
            }
            .box-tampil{
                max-width: 500px;
                height: 400px;
                margin: 20px auto;
                padding:10px;
            }
            .box{
                border-radius: 20px;
                background-color: rgb(187,250,187);
                margin: 20px auto;
                width: 450px;
                padding:20px;
            }
        </style>
    </head>
    <body>
    <?php
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tugas = $_POST['tugas'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];

            $akhir = round((($tugas+$uts+$uas)/3),2);
    ?>
    
        <h1>Nilai Akhir Mahasiwa</h1>
        <div class="box-tampil">
            <div class="box">
                <table>
                    <tr>
                        <td colspan="2"><?php echo $nama ?></td>
                        <td><?php echo $nim ?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Nilai Tugas</td>
                        <td>=</td>
                        <td><?php echo $tugas ?></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td>=</td>
                        <td><?php echo $uts ?></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td>=</td>
                        <td><?php echo $uas ?></td>
                    </tr>
                    <tr>
                        <td>Nilai Akhir</td>
                        <td>=</td>
                        <td><h2><?php echo $akhir ?></h2></td>
                    </tr>
                </table>
                <table>
                <tr>
                    <td colspan="3" rowspan="2"><h3>
                        <?php
                            if($akhir >= 80){
                                echo "Anda Lulus Dengan Predikat A";
                            }
                            elseif($akhir >= 70){
                                echo "Anda Lulus Dengan Predikat B";
                            }
                            elseif($akhir >= 60){
                                echo "Anda Lulus Dengan Predikat C";
                            }
                            else{
                                echo "Maaf Anda Dinyatakan Tidak Lulus";
                            }
                        ?>
                    </h3></td>  
                </tr>
                </table>
            </div>
        </div>
    <?php
        }
    ?>
    </body>
</html>