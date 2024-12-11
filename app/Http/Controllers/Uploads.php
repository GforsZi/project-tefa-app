<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use App\Models\fotos;
use App\Models\scripts;
use App\Models\vidios;
use App\Models\pages;

class Uploads extends Controller
{
  public function show(): view
  {
    return view("uploads.index", [
      "tittle" => "Uploads page",
    ]);
  }

  public function show_ins(): view
  {
    return view("uploads.insert", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_ins_img(): view
  {
    return view("insert.img", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_ins_video(): view
  {
    return view("insert.video", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_ins_script(): view
  {
    return view("insert.script", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_ins_web(): view
  {
    return view("insert.web", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_edt(): view
  {
    return view("uploads.edit", [
      "tittle" => "edit uploads page",
    ]);
  }

  public function show_by_img(): view
  {
    return view("uploadsByCategory.img", [
      "tittle" => "category uploads page",
      "fotos" => fotos::with("user")
        ->latest()
        ->get(),
    ]);
  }

  public function show_by_video(): view
  {
    return view("uploadsByCategory.video", [
      "tittle" => "category uploads page",
      "videos" => vidios::with("user")
        ->latest()
        ->get(),
    ]);
  }

  public function show_by_script(): view
  {
    return view("uploadsByCategory.script", [
      "tittle" => "category uploads page",
      "scripts" => scripts::with("user")
        ->latest()
        ->get(),
    ]);
  }

  public function show_by_web(): view
  {
    return view("uploadsByCategory.web", [
      "tittle" => "category uploads page",
      "pages" => pages::with("user")
        ->latest()
        ->get(),
    ]);
  }

  public function uploadFileFoto(Request $request)
  {
    $validate = $request->validate([
      "name_foto" => "required|max:30",
      "file" => "required|file|mimes:jpg,jpeg,png,svg|max:5125",
      "caption" => "max:100",
      "description" => "max:200",
    ]);
    $validate["user_id"] = auth()->user()->id;

    $file = $request->file("file");
    $filename = time() . "_" . $file->getClientOriginalName();
    $file->move(public_path("storage_ctm/uploads_img"), $filename);
    $validate["file"] = $filename;

    fotos::create($validate);

    return back()->with("success", "File berhasil diupload!");
  }

  public function uploadFileVideo(Request $request)
  {
    $validate = $request->validate([
      "name_video" => "required|max:30",
      "file" => "required|file|mimes:mp4|max:5125",
      "caption" => "max:100",
      "description" => "max:200",
    ]);
    $validate["user_id"] = auth()->user()->id;

    $file = $request->file("file");
    $filename = time() . "_" . $file->getClientOriginalName();
    $file->move(public_path("storage_ctm/uploads_video"), $filename);
    $validate["file"] = $filename;

    vidios::create($validate);

    return back()
      ->with("success", "File berhasil diupload!");
  }
  public function uploadFileScript(Request $request)
  {
    $validate = $request->validate([
      "name_foto" => "required|max:30",
      "file" => "required|file|mimes:js,php|max:5125",
      "caption" => "max:100",
      "description" => "max:200",
    ]);
    $validate["user_id"] = auth()->user()->id;

    if ($validate) {
      $file = $request->file("file");
      $path = $file->store("uploads_script", "public");
      $validate["file"] = $path;
      fotos::create($validate);
    }

    return back()->with("success", "File berhasil diupload!");
  }
  public function uploadFilePage(Request $request)
  {
    $validate = $request->validate([
      "name_page" => "required|max:30",
      "file" => "required|file|mimes:html|max:5125",
      "caption" => "max:100",
      "description" => "max:200",
    ]);
    $validate["user_id"] = auth()->user()->id;

    $file = $request->file("file");
    $filename = time() . "_" . $file->getClientOriginalName();
    $file->move(public_path("storage_ctm/uploads_web"), $filename);
    $validate["file"] = $filename;

    pages::create($validate);

    return back()
      ->with("success", "File berhasil diupload!");
  }
}
