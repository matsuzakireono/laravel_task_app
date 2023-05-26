@php
    use App\Const\Prefecture;
@endphp

<x-app-layout>
    <!-- index.blade.php -->
    <!-- 検索ボックス -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            家具一覧
        </h2>
    </x-slot>
    <form action="{{ route('furnitures.index') }}" method="GET">
        <div>
            <label for="prefecture">地域:</label>
            <select name="prefecture" id="prefecture">
                    <option value="全国" {{request('prefecture') === '全国' ? 'selected' : '' }}>全国</option>
                    @for($i = 0; $i < count(Prefecture::LIST); $i++)
                    <option value="{{ Prefecture::LIST[$i] }}" {{request('prefecture') === Prefecture::LIST[$i] ? 'selected' : '' }}>{{ Prefecture::LIST[$i] }}</option>
                    @endfor

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
            <div>
                <label for="minPrice">最少額:</label>
                <input type="number" id="minPrice" name="minPrice" value="{{ request('minPrice') !== null ? request('minPrice') : '' }}">
            </div>
            <div>
                <label for="maxPrice">最大額:</label>
                <input type="number" id="maxPrice" name="maxPrice" value="{{ request('maxPrice') !== null ? request('maxPrice') : '' }}">
            </div>
        </div>
        <div>
            <label for="is_visible">在庫があるものだけ表示する</label>
            <input type="checkbox" name="is_visible" value="is_visible" {{ request('is_visible') == true ? 'checked' : ''}}>
        </div>

        <button type="submit">検索</button>
    </form>

    <!-- 検索結果の表示 -->
    <!-- 検索結果の表示 -->
    <div class="product-table">
        <table>
            <thead>
                <tr>
                    <th>画像</th>
                    <th>商品名</th>
                    <th>価格(円)</th>
                    <th>都道府県</th>
                    <th>評価</th>
                    <th>発売日</th>
                    <th>在庫</th>
                </tr>
            </thead>
            <tbody>
                @foreach($furnitures as $furniture)
                <tr>
                    <td><img src="{{ $furniture->image }}+{{$furniture->id}}" alt="商品画像"></td>
                    <td>{{ $furniture->name }}</td>
                    <td>{{ $furniture->price }}</td>
                    <td>{{ $furniture->prefecture }}</td>
                    <td>{{ $furniture->review }}</td>
                    <td>{{ $furniture->created_at }}</td>
                    <td>
                        @if ($furniture->is_visible)
                            あり
                        @else
                            なし
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-app-layout>
