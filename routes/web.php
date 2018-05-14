<?php
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\User;


Route::get("/template", function(){
    return view("template/master");
});

Route::get("/profile", function(){
    return view("template/profil");
});

Route::get("/about", function(){
    return view("template/about");
});


/**
 * LAST
 */
Route::get("/user/create", function(){
    return view("user.form");
})->name("user.create");



Route::put("/user/simpan", function(UserFormRequest $request){

    $path = $request->foto->store("uploads");
    
    $data = $request->all();
    $data['foto'] = $path;

    $user = new User;
    $user->fill($data)->save();

    return "Data berhasil Simpan";
})->name("user.simpan");

Route::get('user', function() {
    $data = User::paginate(10);

    return view("user.index", ['data' => $data]);
})->name("user.index");


Route::resource("berita", "BeritaController");

Route::get('contoh/index', 'ContohController@index');
Route::get('contoh/hello', 'ContohController@hello');

Route::get("reg", function(){
    return view("form");
});

Route::delete("proses", function(){
    return "Diproses";
});
Route::get("proses", function(){
    return "Diproses GET";
});

Route::prefix("admin/master")->middleware("auth.basic")->group(function(){
    Route::get("user", function(){ return "User"; });
    Route::get("level", function(){ return "level"; });
});



Route::get('/berita/{id}/{tipe?}', function($id, $tipe='politik'){
    $link = "<a href='". route('kamu', ['id' => 2]) ."'>info</a>";
    return "Tampil berita ke $id Tipe $tipe " . $link;
})->where([
    'id'=>'[0-9]+',
    'tipe'=>'politik|teknologi|technology',
    'jenis' => '[a-z]+'
])->name("aku");

Route::get('/information/{id}/{tipe?}', function($id, $tipe='politik'){
    return "Tampil Informasi ke $id Tipe $tipe";
})->name("kamu");




Route::get("/", function(){
    return "Hello World";
});

Route::get("/profil", function(){
    return "HALAMAN PROFIL";
});


