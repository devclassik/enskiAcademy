<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImageUploadController extends Controller
{
    public function create()
    {
        return view('skills-academy.file-upload');
    }

    public function fileStore(Request $request)
    {
//        dd('hello', $id);
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

//        $iconName = $request->icon->getClientOriginalName();
//        $image->move(public_path('images'),$imageName);

        $imagePath = 'videos/' . $imageName;
        $image = Storage::disk('public')->put($imagePath, file_get_contents($image));


        $imageUpload = new FileUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        FileUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
