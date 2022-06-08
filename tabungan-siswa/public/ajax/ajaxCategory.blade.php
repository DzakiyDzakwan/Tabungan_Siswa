<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'tabungan-siswa');
    $keynya = $_GET['kunci'];
    $result = mysqli_query($conn, "SELECT * FROM categories WHERE name LIKE '%$keynya%'");
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
            <th>Category<i class="fa fa-sort"></i></th>
            <th style="text-align:center;">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datanya as $data) :?>     
            <tr>
                <td><?= $data['category_id'] ?></td>
                <td><?= $data['name'] ?></td>
                <td style="text-align:center;">
                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a href="/hapuskategori/<?= $data['category_id']; ?>" onclick="return confirm('Anda yakin?')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>    
        <?php endforeach; ?>

    </tbody>
</table>
<div class="clearfix">
</div>