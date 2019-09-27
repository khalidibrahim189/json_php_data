<?php

    $url = 'http://ppid.jakarta.go.id/json?url=http://data.jakarta.go.id/dataset/7bbae9d6-e125-4536-be8e-c1e2f16de146/resource/093b760b-d797-4ccf-bef6-e6fcec626ca0/download/processed-hutan-kota-jakarta-luas-status-hukum-alamat.csv';
    $json = file_get_contents($url);
    $data = json_decode($json, true);
?>

<h1 style="text-align : center;">Data Luas Hutan Kota Jakarta</h1>

<table border="10">
    <tr>
        <td style="background-color: red;">Nama Hutan</td>
        <td style="background-color: red;">Luas</td>
        <td style="background-color: red;">Status Hukum</td>
        <td style="background-color: red;">Kepemilikan</td>
        <td style="background-color: red;">Kotamadya</td>
    </tr>

<?php
    for($i=0;$i<count($data);$i++){
        $row = $data[$i];
     ?>
        <tr>
            <td><?php echo $row['nama_hutan_kota'] ?></td>
            <td><?php echo $row['luas'] ?></td>
            <td><?php echo $row['status_hukum'] ?></td>
            <td><?php echo $row['kepemilikan'] ?></td>
            <td><?php echo $row['kotamadya'] ?></td>
        </tr>
     <?php
    }

?>

</table>