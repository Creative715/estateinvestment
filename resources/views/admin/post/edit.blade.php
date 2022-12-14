@extends('layouts.dashboard')
@section('title', 'Редагувати сторінку')
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
                                <h3 class="card-title">@yield('title') - {{ $post['title'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('post.update', $post['id']) }}"
                                  method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Назва нерухомості</label>
                                        <input type="text" name="title" value="{{ $post['title'] }}"
                                               class="form-control" placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Категорія</label>
                                        <select name="category_id" class="custom-select rounded-0"
                                                id="exampleSelectRounded0">
                                            @foreach($categories as $category)
                                                <option value="{{ $category['id'] }}"
                                                        @if ($category['id'] == $post['category_id']) selected
                                                    @endif>{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Місто</label>
                                        <select name="city_id" class="custom-select rounded-0"
                                                id="exampleSelectRounded0">
                                            @foreach($cities as $city)
                                                <option value="{{ $city['id'] }}"
                                                        @if ($city['id'] == $post['city_id']) selected
                                                    @endif>{{ $city['title'] }}</option>
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
                                        <label>Текст сторінки</label>
                                        <textarea id="content" name="content" class="form-control"
                                                  rows="4">{{ $post['content'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Вартість</label>
                                        <input type="text" id="price" name="price" class="form-control" value="{{  $post->price }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Опис сторінки (SEO)</label>
                                        <input type="text" name="description" value="{{ $post['description'] }}"
                                               class="form-control" id="exampleInputName" placeholder="Введіть опис"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <img class="img-thumbnail" src="{{ $post->img }}" alt="{{ $post->title }}"
                                             title="{{ $post->title }}" width="250" height="auto">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="img">Головне зображення</label>
                                        <input name="img" class="form-control" type="file" value="{{ $post->img }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="images[]">Додаткові зображення:</label>
                                        <input type="file" class="form-control m-2" name="images[]" multiple>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Адреса сторінки</label>
                                        <input type="text" name="slug" class="form-control" value="{{ $post['slug'] }}"
                                               readonly>
                                    </div>

                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                </div>

                            </form>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12"><h5>Додаткові зображення:</h5></div>
                                    <div class="mt-4"></div>
                                    @if (count($post->images)>0)
                                        @foreach ($post->images as $img)
                                            <div class="card col-md-2">

                                                <form action="/deleteimage/{{ $img->id }}" method="post">
                                                    <button class="btn text-danger">X</button>
                                                    @csrf
                                                    @method('delete')
                                                </form>

                                                <img src="/images/gallery/{{ $img->image }}" class="img-thumbnail" style="height: auto; max-width: 200px;" alt="" srcset="">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
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

