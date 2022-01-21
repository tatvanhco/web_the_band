<h2>THÊM SẢN PHẨM MỚI</h2>
                <form action="./xulythem.php" method="POST">
                    <div class="form-group">
                        ID sản phẩm: <input type="text" class="form-control" placeholder="Tên sản phẩm" name="id" required>
                    </div>
                    <div class="form-group">
                        Tên sản phẩm: <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" required>
                    </div>

                    <div class="form-group">
                        Hãng: <input type="text" class="form-control" placeholder="Brand" name="brand" required>
                    </div>

                    <div class="form-group">
                        Giá: <input type="number" class="form-control" placeholder="Giá" name="price" required>
                    </div>
                    <div class="form-group">
                        URL ảnh: <input type="text" class="form-control" placeholder="URL ảnh" name="img" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit" value="submit">Thêm</button>
                    <button type="reset" class="btn btn-warning" >Xóa</button>
                </form>