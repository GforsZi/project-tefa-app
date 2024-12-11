<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Setting;
use App\Http\Controllers\Uploads;

Route::get("/", function () {
  return view("welcome", ["tittle" => "Landing page"]);
})->middleware("guest");

Route::get("/login", [Login::class, "show"])
  ->name("login")
  ->middleware("guest");
Route::post("/login", [Login::class, "auth"])->middleware("guest");
Route::get("/register", [Register::class, "show"])->middleware("guest");
Route::post("/register", [Register::class, "store"])->middleware("guest");
Route::get("/home", [Home::class, "show"])->middleware("auth");
Route::get("/profile", [Profile::class, "show"])->middleware("auth");
Route::get("/setting", [Setting::class, "show"])->middleware("auth");
Route::get("/uploads", [Uploads::class, "show"])->middleware("auth");
Route::get("/uploads/by/img", [Uploads::class, "show_by_img"])->middleware(
  "auth"
);
Route::get("/uploads/by/video", [Uploads::class, "show_by_video"])->middleware(
  "auth"
);
Route::get("/uploads/by/script", [
  Uploads::class,
  "show_by_script",
])->middleware("auth");
Route::get("/uploads/by/web", [Uploads::class, "show_by_web"])->middleware(
  "auth"
);
Route::get("/uploads/insert", [Uploads::class, "show_ins"])->middleware("auth");

Route::get("/uploads/insert/img", [Uploads::class, "show_ins_img"])->middleware(
  "auth"
);

Route::post("/uploads/insert/img", [
  Uploads::class,
  "uploadFileFoto",
])->middleware("auth");

Route::get("/uploads/insert/video", [
  Uploads::class,
  "show_ins_video",
])->middleware("auth");

Route::post("/uploads/insert/video", [
  Uploads::class,
  "uploadFileVideo",
])->middleware("auth");
Route::get("/uploads/insert/script", [
  Uploads::class,
  "uploadFileScript",
])->middleware("auth");
Route::get("/uploads/insert/web", [Uploads::class, "show_ins_web"])->middleware(
  "auth"
);
Route::post("/uploads/insert/web", [
  Uploads::class,
  "uploadFilePage",
])->middleware("auth");
Route::get("/uploads/edit", [Uploads::class, "show_edt"])->middleware("auth");

Route::post("/logout", [Profile::class, "logout"])->middleware("auth");
