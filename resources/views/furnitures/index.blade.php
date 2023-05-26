<!-- index.blade.php -->
<!-- 検索ボックス -->
<form action="{{ route('furnitures.index') }}" method="GET">
    <div>
        <label for="prefacture">地域:</label>
        <select name="prefecture" id="prefecture">
            <option value="全国" {{request('prefecture') === '全国' ? 'selected' : '' }}>全国</option>
            @foreach ($prefectures as $prefecture )
                <option value="{{$prefecture}}"{{request('prefecture') === $prefecture ? 'selected' : '' }}>{{$prefecture}}</option>
            @endforeach

        </select>
    </div>
    <div>
        <label for="sort">並び替え:</label>
        <select name="sort" id="sort">
            <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>新着順</option>
            <option value="popular" {{ request('sort') === 'popular' ? 'selected' : '' }}>人気順</option>
        </select>
    </div>
    <div>
        <label for="price">価格帯</label>
        <div>
            <label for="minPrice">最少額:</label>
            <input type="number" id="minPrice" name="minPrice">
        </div>
        <div>
            <label for="maxPrice">最大額:</label>
            <input type="number" id="maxPrice" name="maxPrice">
        </div>
    </div>


        <button type="submit">検索</button>
</form>
<!-- 検索結果の表示 -->
<div>
    <table border="1">
        <thead>
            <tr>
                <th>名前</th>
                <th>価格(円)</th>
                <th>都道府県</th>
                <th>画像</th>
                <th>評価</th>
                <th>発売日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($furnitures as $furniture)
                    <tr>
                        <td>{{ $furniture->name }}</td>
                        <td>{{ $furniture->price }}</td>
                        <td>{{ $furniture->prefecture }}</td>
                        <td><img src="{{ $furniture->image }}+{{$furniture->id}}" alt="商品画像"></td>
                        <td>{{ $furniture->review}}</td>
                        <td>{{ $furniture->created_at }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
