<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="card-header text-center">Thêm sản phẩm</h3>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">
                    <label for="productName">Tên sản phẩm</label>
                    <input type="text" placeholder="Tên sản phẩm" id="productName" class="form-control"
                        name="productName" required autofocus>
                    @if ($errors->has('productName'))
                        <span class="text-danger">{{ $errors->first('productName') }}</span>
                    @endif
                </div>


                <div class="form-group mb-3">
                    <label for="productPrice">Giá sản phẩm</label>
                    <input type="number" placeholder="Gía sản phẩm" id="productPrice" class="form-control"
                        name="productPrice" required autofocus>
                    @if ($errors->has('productPrice'))
                        <span class="text-danger">{{ $errors->first('productPrice') }}</span>
                    @endif
                </div>


                <div class="form-group mb-3">
                    <label for="productCategory">Danh mục</label>
                    <select class="form-select form-control" aria-label="Default select example" id="productCategory"
                        name="productCategory">
                        <option value="1">One</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="productManu">Hãng sản xuất</label>
                    <select class="form-select form-control" aria-label="Default select example" id="productManu"
                        name="productManu">
                        <option value="1">One</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="productImage">Hình ảnh</label>
                    <input multiple type="file" id="productImage" class="form-control" name="productImage" required>
                    @if ($errors->has('productImage'))
                        <span class="text-danger">{{ $errors->first('productImage') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="optionList">Chọn thuộc tính cho sản phẩm:</label>
                    <select id="optionList" class="form-control" multiple>
                        @foreach ($properties as $item)
                        <option value="{{ $item->id }}">{{ $item->propertiesName }}</option>
                        @endforeach
                       
                       
                    </select>
                </div>
    
                <div class="form-group mb-3">
                    <label for="selectedOptions">Các thuộc tính đã chọn:</label>
                    <div class='sl_p form-group mb-3' id="selectedOptions"></div>
                </div>

                    <a class="btn btn-primary" onclick="addAttributes()">Thêm thuộc tính</a>
               

                <div class="d-grid mx-auto text-center">
                    <button type="submit" class="btn btn-outline-success ">Thêm</button>
                </div>
            </form>
         

        </div>
    </div>
</div>
