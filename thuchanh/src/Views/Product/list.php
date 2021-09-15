<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      PRODUCT LIST
    </div>
    <div class="card-body">
      <a href="index.php?page=product-create" type="button" class="btn btn-success">Add New Product</a>


      <table class="table">
        <thead>

          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
            <tr>
              <th><?php echo $product['id'] ?></th>
              <td><?php echo $product['product_name'] ?></td>
              <td><?php echo $product['price'] ?></td>
              <td><?php echo $product['quantity'] ?></td>
              <td><a href="index.php?page=product-update&id=<?php echo $product['id'] ?>" type="button" class="btn btn-warning">Edit</a></td>
              <td><a onclick="return confirm('Ban chac muon xoa muon xoa mat hang <?php echo $product['name'] ?> ?')" href="index.php?page=product-delete&id=<?php echo $product['id'] ?>" type="button" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>