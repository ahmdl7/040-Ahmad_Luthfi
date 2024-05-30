<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GalleryController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Logout;
use App\Models\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (GalleryController $galleryController, CollectionController $collectionController) {
    
    $galleries = $galleryController->getGallery();
    $collection = $collectionController->getCollection();
      
    return view('index', ['galleries' => $galleries, 'collection' => $collection]);
});

Route::get('/index/{collection}/edit', [CollectionController::class, 'detail'])->name('detail');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AdminController::class, 'login'])->name('login.post');

Route::get('/logout', [AdminController::class, 'logout'])->name('logout')->middleware([Logout::class]);

Route::get('/admin-gallery', [GalleryController::class, 'index'])->name('gallery.index')->middleware([AdminMiddleware::class]);

Route::get('/create-gallery', [GalleryController::class, 'create'])->middleware([AdminMiddleware::class]);

Route::post('/create-gallery', [GalleryController::class, 'store'])->name('gallery.store')->middleware([AdminMiddleware::class]);

Route::get('/admin-gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit')->middleware([AdminMiddleware::class]);

Route::post('/admin-gallery/{gallery}/update', [GalleryController::class, 'update'])->name('gallery.update')->middleware([AdminMiddleware::class]);

Route::delete('/admin-gallery/{gallery}', [GalleryController::class, 'delete'])->name('gallery.delete')->middleware([AdminMiddleware::class]);

Route::get('/admin-collection', [CollectionController::class, 'index'])->name('collection.index')->middleware([AdminMiddleware::class]);

Route::get('/create-collection',[CollectionController::class, 'create'])->middleware([AdminMiddleware::class]);

Route::post('/create-collection', [CollectionController::class, 'store'])->name('collection.store')->middleware([AdminMiddleware::class]);

Route::get('/admin-collection/{collection}/edit', [CollectionController::class, 'edit'])->name('collection.edit')->middleware([AdminMiddleware::class]);

Route::post('/admin-collection/{collection}/update', [CollectionController::class, 'update'])->name('collection.update')->middleware([AdminMiddleware::class]);

Route::delete('/admin-collection/{collection}', [CollectionController::class, 'delete'])->name('collection.delete')->middleware([AdminMiddleware::class]);