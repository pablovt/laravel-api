<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/author', [AuthorController::class, 'store']); //Author Registration
Route::get('/author/{id}', [AuthorController::class, 'show']); //Search Author by Id
Route::delete('/author/{id}', [AuthorController::class, 'destroy']); //Remove Author
Route::put('/author/{id}', [AuthorController::class, 'update']); //Update Author

Route::post('/article', [ArticleController::class, 'store']); //Article Registration
Route::get('/article/{id}', [ArticleController::class, 'show']); //Search for Article by Id
Route::delete('/article/{id}', [ArticleController::class, 'destroy']); //Remove Article
Route::put('/article/{id}', [ArticleController::class, 'update']); //Update Article
Route::post('/article/searchByAuthorId', [ArticleController::class, 'searchByAuthorId']); //AuthorId article search

Route::post('/comments', [CommentsController::class, 'store']); //Comment Registration
Route::get('/comments/{id}', [CommentsController::class, 'show']); //Search Comments
Route::delete('/comments/{id}', [CommentsController::class, 'destroy']); //Remove Comments
Route::put('/comments/{id}', [CommentsController::class, 'update']); //Update Comments
Route::post('/comments/searchByArticleId', [CommentsController::class, 'searchByArticleId']); //Search comments by articleId