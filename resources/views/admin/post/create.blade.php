@extends('layouts.dashboard')
@section('title', 'Додати нерухомість')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('mainAdmin') }}">Головна</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title')</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('post.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Назва нерухомості</label>
                                        <input type="text" name="title" class="form-control" placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Категорія</label>
                                        <select name="category_id" class="custom-select rounded-0" id="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Місто</label>
                                        <select name="city_id" class="custom-select rounded-0" id="city_id">
                                            @foreach($cities as $city)
                                                <option value="{{ $city['id'] }}">{{ $city['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Опубліковано</label>
                                        <select name="published" class="custom-select rounded-0"
                                                id="exampleSelectRounded0">
                                            <option value="{{ $post['published'] = '1' }}">Так</option>
                                            <option value="{{ $post['published'] = '0' }}">Ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Текст сторінки</label>
                                        <textarea id="content" name="content" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Вартість</label>
                                        <input type="text" id="price" name="price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Опис сторінки (SEO)</label>
                                        <input type="text" name="description" class="form-control" id="exampleInputName" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Головне зображення</label>
                                        <input name="img" class="form-control" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="images[]">Додаткові зображення:</label>
                                        <input type="file" class="form-control m-2" name="images[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Адреса сторінки</label>
                                        <input id="slug" name="slug" class="form-control" readonly>
                                    </div>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Додати</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

