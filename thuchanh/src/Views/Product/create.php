<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW PRODUCT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="product-sector">Sector</label>
                    <select name="sector" id="product-sector" name="sector">
                        <option name="sector" id="product-sector" name="sector">Phone</option>
                        <option name="sector" id="product-sector" name="sector">Tu Lanh</option>
                        <option name="sector" id="product-sector" name="sector">TV</option>
                        <option name="sector" id="product-sector" name="sector">Dieu Hoa</option>
                    </select>  
                </div>

                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input type="text" class="form-control" id="product-price" name="price" placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label for="product-quantity">Quantity</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity" placeholder="Enter quantity">
                </div>
                <div class="form-group">
                    <label for="product-desc">Description</label>
                    <textarea type="text" class="form-control" id="product-desc" name="desc" placeholder="Enter desc"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>