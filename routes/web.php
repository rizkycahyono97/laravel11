<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rizky Cahyono', 'title' => 'About Page']);
});

// Buat 2 rute baru
// 1. /bLog
// -> 2 buah artikel. judul dan isi
// 2. /contact
// email / social media

Route::get('/posts', function () { 

    // eiger loading
    // $posts = Post::with(['author', 'category'])->latest()->get();

    // local scope // localscope + eiger loading -> untuk pencarian
    return view('posts', [
        'title' => 'Blog Page', 
        'posts' => Post::with(['author', 'category', 'author'])->filter(request(['search', 'category']))->latest()->paginate(9)->withQueryString()
    ]);

});

// jika post di klik maka akan menampilkan artikel lengkap menggunakan teknik implicit binding di laravel
Route::get('/posts/{post:slug}', function (Post $post) {
    
    // $post = Post::find($id);

    // return di halaman post.blade.php yang berisi tittle dan $post(dari atas tadi)
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// route model binding
Route::get('/authors/{user:username}', function (User $user) {
    // lazy eiger loading
    // $post = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $post = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});


