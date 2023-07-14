@extends('layouts.admin_layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
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
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <label for="code">Код</label>
                                    <input type="text" name="code" class="form-control" id="code"
                                        placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Описание</label>
                                    <textarea style="margin-top: 25px;" class="form-control" name="description" placeholder="Введите название категории" 
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