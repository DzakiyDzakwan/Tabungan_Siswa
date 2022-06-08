<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'tabungan-siswa');
    $keynya = $_GET['kunci'];
    $result = mysqli_query($conn, "SELECT * FROM siswas WHERE nama LIKE '%$keynya%'");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    $datanya = $rows;
?>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIS<i class="fa fa-sort"></i></th>
                <th>NAMA</th>
                <th>KELAS <i class="fa fa-sort"></i></th>
                <th>SALDO</th>
                <th style="text-align:center;">Actions</th>
            </tr>
        </thead>
        <tbody id="body-tabel">
          <?php foreach ($datanya as $data) : ?>
            <tr id="<?= $data->id; ?>" class="parent-td">
                <td id="<?= $data['NIS']; ?>"><?= $data['NIS']; ?></td>
                <td id="<?= $data['NIS']; ?>"><?= $data['NIS']; ?></td>
                <td id="<?= $data['nama']; ?>"><?= $data['nama']; ?></td>
                <td id="<?= $data['kelas']; ?>"><?= $data['kelas']; ?></td>
                <td id="<?= $data['user']; ?>"><?= $data['user']; ?></td>
                <td style="text-align:center;">
                    <a href="/hapus/<?= $data['NIS']; ?>/<?= $data['user']; ?>" onclick="return confirm('Anda yakin ingin menghapus siswa?')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>     
            <?php endforeach; ?>
        </tbody>
    </table>
</div>