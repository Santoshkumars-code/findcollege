<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddController;

Route::get("/", [AddController::class, "index"])->name("homepage");
Route::get("/insert", [AddController::class, "insertAdd"])->name("insert");
Route::get("/add/{id}",[AddController::class, "viewAdd"])->name("singleView");
Route::get("/category/{cat_id}",[AddController::class, "catView"])->name("catView");
Route::get("/search",[AddController::class, "search"])->name("search");


Route::post("/insert", [AddController::class, "addStore"])->name("addStore");
Route::post("/insert/cat", [AddController::class, "categoryStore"])->name("catStore");
