@extends('layouts.admin_layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все товары</h1>
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
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Название
                                </th>
                                <th>
                                    Код
                                </th>
                                <th>
                                    Категория
                                </th>
                                <th>
                                    Описание
                                </th>
                                <th>
                                    Картинка
                                </th>
                                <th>
                                    Цена
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $product['id'] }}
                                    </td>
                                    <td>
                                        {{ $product['name'] }}
                                    </td>
                                    <td>
                                        {{ $product['code'] }}
                                    </td>
                                    <td>
                                        {{ $product['category_id'] }}
                                    </td>
                                    <td>
                                        {{ $product['description'] }}
                                    </td>
                                    <td>
                                    <img style="width: 100px;" src="/storage/{{ $product->image }}" alt="">
                                    </td>
                                    <td>
                                        {{ $product['price'] }} Руб
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form action="{{ route('product.destroy', $product['id']) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection