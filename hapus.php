<?php
    $nis = $_GET['nis'];
    $server = mysqli_connect("localhost","root","","oper");
    echo $nis; 
 
    $sql = "DELETE FROM operator WHERE nis = '$nis'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='tampil.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal : <br>".mysqli_error($server);
    }

  ?>