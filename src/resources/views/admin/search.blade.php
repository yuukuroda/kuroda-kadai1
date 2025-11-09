<input
    class="search-form__item-input"
    type="text"
    name="keyword"
    placeholder="名前やメールアドレスを入力してください"
    value="{{ old('keyword', request('keyword')) }}">

<select class="search-form__item-select" name="gender">
    <option value="">性別</option>
    <option value="1" @if(request('gender')=='1' ) selected @endif>男性</option>
    <option value="2" @if(request('gender')=='2' ) selected @endif>女性</option>
</select>

<select class="search-form__item-select" name="category_id">
    <option value="">お問い合わせの種類</option>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}" @if(request('category_id')==$category->id) selected @endif>
        {{ $category->content }}
    </option>
    @endforeach
</select>