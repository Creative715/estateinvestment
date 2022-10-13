<div class="card-body">
    <div class="form-group">
        <label>Назва нерухомості</label>
        <input type="text" name="title" value="{{ $post['title'] }}"
               class="form-control" placeholder="Введіть назву" required>
    </div>
    <div class="form-group">
        <label for="category_id">Категорія</label>
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
        <label for="city_id">Місто</label>
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
        <label for="published">Опубліковано</label>
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
        <input id="price" name="price" class="form-control" value="{{  $post->price }}">
    </div>
    <div class="form-group">
        <label>Опис сторінки (SEO)</label>
        <input type="text" name="description" value="{{ $post['description'] }}"
               class="form-control" id="exampleInputName" placeholder="Введіть опис"
               required>
    </div>
    <div class="form-group">
        <img class="img-thumbnail" src="{{ $post->img }}" alt="{{ $post->title }}"
             title="{{ $post->title }}" width="150" height="auto">
    </div>
    <div class="form-group">
        <label>Зображення</label>
        <input name="img" class="form-control" type="file" value="{{ $post->img }}">
    </div>
    <div class="form-group">
        <label>Галерея зображень</label>
        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
    </div>
    <div class="form-group">
        <label>Адреса сторінки</label>
        <input type="text" name="slug" class="form-control" value="{{ $post['slug'] }}"
               readonly>
    </div>

</div>
