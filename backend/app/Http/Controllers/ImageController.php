<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request) {
        $path = $request->file("image")->store("public");

        return $path;
    }

    public function getImage(Request $request) {

        // return Image::make; 
        // echo asset('storage/image/QkgoUzznuZK1We08bKhlCVfggyMwyEh7T6wiypmI.jpg');
    }
}
