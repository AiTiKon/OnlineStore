@extends('layouts.admin_layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить товар</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Введите название товара" required>
                            </div>
                            <div class="form-group">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Выберите категорию</label>
                                    <select name="category_id" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Код</label>
                                <input type="text" name="code" class="form-control" id="exampleInputEmail1"
                                    placeholder="Введите код товара" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Цена</label>
                                <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                    placeholder="Введите цену товара" required>
                            </div>

                            <div class="form-group">
                                    <label for="desc">Описание</label>
                                    <textarea style="margin-top: 25px;" class="form-control" name="description" placeholder="Введите описание товара" 
                                                id="desc" cols="10" rows="5" required></textarea>
                                </div>

                            <div class="form-group">
                                    <label for="image">Загрузить фото</label><br>
                                    <input type="file" name="image" id="image" required>
                                </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection