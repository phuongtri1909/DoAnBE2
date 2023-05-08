@include('layouts.header_admin')
<div class="container">

    <div class="head-title">
        <div class="left">
            <div class="breadcrumb">
                <h1>Quản lý sản phẩm</h1>
            </div>
            <ul class="breadcrumb">

                <a href="{{ route('admin') }}">
                   <li>Home</li>
                </a>

                <li><i class='bx bx-chevron-right'></i></li>

                <li> <a class="active" href="{{ route('admin') }}">{{ $pageName }}</a> </li>

            </ul>
        </div>

    </div>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-sm-11">
                        <h3 class="card-title">{{ $pageName }}</h3>
                    </div>

                    <div class="col-sm-1">
                      <a class="btn btn-outline-success btn-sm" href="{{route('product.create')}}"> 
                        <i class="bi bi-plus-square-dotted"></i>
                    </a>                      
                    </div>

                </div>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                Id
                            </th>
                            <th style="width: 18%">
                                Name
                            </th>
                            <th style="width: 8%">
                                Image
                            </th>
                            <th style="width: 32%;">
                                Description
                            </th>
                            <th style="width: 10%" class="text-center">
                                Price
                            </th>
                            <th style="width: 2%" class="text-center">
                                Feature
                            </th>
                            <th style="width: 2%" class="text-center">
                                Manu_id
                            </th>
                            <th style="width: 2%" class="text-center">
                                Type_id
                            </th>
                            <th style="width: 24%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <?php foreach($getAllProductsNew as $value):?>               --}}
                        <tr>
                            <td>
                                {{-- <?php echo $value['id']; ?> --}}
                            </td>
                            <td>
                                <a>
                                    {{-- <?php echo $value['name']; ?> --}}
                                </a>
                                <br />
                                <small>
                                    {{-- Created <?php echo $value['created_at']; ?> --}}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        {{-- <img alt="Avatar" class="table-avatar" src="../../../img/<?php echo $value['image']; ?>"> --}}
                                    </li>
                                </ul>
                            </td>
                            <td nowrap style="overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">
                                <!--style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"-->
                                    {{-- <?php echo $value['description']; ?> --}}
                            </td>
                            <td class="project-state">
                                {{-- <?php echo number_format($value['price']); ?> VNĐ --}}
                            </td>
                            <td class="project-state">
                                {{-- <?php echo $value['feature']; ?> --}}
                            </td>
                            <td class="project-state">
                                {{-- <?php echo $value['manu_id']; ?> --}}
                            </td>
                            <td class="project-state">
                                {{-- <?php echo $value['type_id']; ?> --}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-outline-info btn-sm" href=""> {{-- up_products.php?id=<?= $value['id'] ?> --}}
                                  <i class="bi bi-pencil"></i>
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href=""> {{-- del_products.php?id=<?= $value['id'] ?> --}}
                                  <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- <?php endforeach; ?> --}}
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


</div>
@include('layouts.footer_admin')
