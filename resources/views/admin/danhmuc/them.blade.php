@extends('admin/layout/index')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <div class="content-wrapper">
        @if(count($errors) > 0)
            <div class='card card-inverse-warning' id='context-menu-access'>
                <div class='card-body'>
                    @foreach($errors->all() as $err)
                        <p class='card-text' style='text-align: center;'>
                            {{$err}}
                        </p>
                    @endforeach
                </div>
            </div>
        @endif

        @if(session('ThongBao'))
            <div class='card card-inverse-success' id='context-menu-access'>
                <div class='card-body'>
                    <p class='card-text' style='text-align: center;'>
                        {{session('ThongBao')}}
                    </p>
                </div>
            </div>
        @endif

        <div class="row grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;font-size: 30px;">Thêm danh mục</h4>
                        <form class="forms-sample" method="post" action="admin/danhmuc/them">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Chọn danh mục cha <span style="color: red">*</span></label>
                                <select name="parent_id" aria-controls="order-listing" class="form-control">
                                    <option value="">Chọn danh mục cha</option>
                                    {{FurnitureStoreCategory::cat_parent($categories)}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Vị trí <span style="color: red">*</span></label>
                                <input type="number" value=""
                                       name="position" class="form-control" id="exampleInputName1" placeholder="Vị trí của danh mục" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục <span style="color: red">*</span></label>
                                <input type="text" value=""
                                       name="name" class="form-control" id="exampleInputName1" placeholder="Tên danh mục" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mr-2">Thêm danh mục</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
