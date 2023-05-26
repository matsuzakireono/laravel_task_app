<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\FurnitureController;
use App\Models\Coach;
use App\Models\Team;


Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/ContactForm', [ContactFormController::class, 'index'])->name('contact.index');
Route::get('/ContactForm/{id}}', [ContactFormController::class, 'show'])->name('contact.show');
Route::get('/ContactForm/{id}}/edit', [ContactFormController::class, 'edit'])->name('contact.edit');


Route::post('/ContactForm/{id}}', [ContactFormController::class, 'update'])->name('contact.update');
Route::post('/ContactForm/{id}}/delete', [ContactFormController::class, 'delete'])->name('contact.delete');
Route::post('/ContactForm/confirm', [ContactFormController::class, 'confirm'])->name('contact.confirm');
Route::post('/ContactForm/complete', [ContactFormController::class, 'store'])->name('contact.store');

Route::resource('books', BookController::class);
Route::resource('youtubes', YoutubeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ここから家具サイト
    Route::resource('furnitures', FurnitureController::class);
});
// Route::resource('funitures', FurnitureController::class);

require __DIR__ . '/auth.php';

/* Coachのデータを一覧表示する
 * (表示したいだけなので、Controllerを作らずルータ内で処理する)
 */
Route::get('/coach', function () {
    /* Coach モデルを通じて、coaches テーブルの内容をすべて取得 */
    $all_coaches = Coach::all();
    foreach ($all_coaches as $coach) {
        /* $coach->teamで、関連付けされたteams テーブルのレコードの内容を取得できる */
        print("<p>監督名： {$coach->name} (担当チーム名： {$coach->team->name})</p>");
    }
});

/* Teamのデータを一覧表示する
 * (表示したいだけなので、Controllerを作らずルータ内で処理する)
 */
Route::get('/team', function () {
    /* Team モデルを通じて、teams テーブルのデータをすべて取得 */
    $all_teams = Team::all();
    foreach ($all_teams as $team) {
        /* nullの場合があるので、ifでチェック */
        if ($team->coach != null) {
            $coach = $team->coach->name;
        } else {
            $coach = '';
        }
        print("<h2>チーム名： {$team->name} (監督：{$coach}) </h2>");
        print("<p>所属プレイヤー</p>");
        print('<ul>');
        /* $team->playersで、関連付けされたteams テーブルのレコードの内容を取得できる
             * Team モデルとPlayer モデルのリレーションは一対多(hasMany)
             * 複数データが取得されるため、foreachでループしてひとつずつ処理する
             */
        foreach ($team->players as $player) {
            print("<li>{$player->name}</li>");
        }
        print('</ul>');
    }
});