<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Const\Prefecture;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class Furniture extends Model
{
    use HasFactory;
    public function scopeSearch(Builder $query, Request $request)
    {
        // 人気順か新着順かで並び替え
        $sort = $request->input('sort');
        if ($sort === 'newest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sort === 'popular') {
            // 人気順でソートする処理を記述する（例えば売上数や評価などに基づいてソート）
            $query->orderBy('review', 'desc');
        }

        // 地域で絞り込み
        $prefecture = $request->input('prefecture');
        if ($prefecture !== '全国') {
            $query->where('prefecture', $prefecture);
        }

        // 価格帯で絞り込み
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }
        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        // is_visibleがtrueのものだけ表示
        $is_visible = $request->input('is_visible');
        if ($is_visible) {
            $query->where('is_visible', true);
        }

        return $query->get();
    }
}