<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="content">
        <h2 class="product-category">Product  <a class="btn-cart" href="/new">Add<i class="fa fa-plus"></i></a></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Artist</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Barang as $row => $value) : ?>
                    <tr>
                        <td><img src="assets/img/<?=$value->img_brg?>" style="width: 250px;"></td>
                        <td><?= $value->nama_brg ?></td>
                        <td><?= $value->nama_artis ?></td>
                        <td>$<?= $value->harga_brg ?></td>
                        <td><?= $value->stok_brg ?></td>
                        <td><?= $value->nama_kategori ?></td>
                        <td>
                            <a href="/edit/<?= $value->id_brg ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/delete/<?= $value->id_brg ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection('content'); ?>