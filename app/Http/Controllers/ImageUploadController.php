<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImageUploadController extends Controller
{
    public function create($lastId)
    {
//        dd('id of inserted item', $lastId);
        $id = $lastId;
        return view('skills-academy.file-upload', compact('id'));
    }

    public function fileStore(Request $request, $id)
    {
//        dd($id, 'make use of the id and store it');
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

//        $iconName = $request->icon->getClientOriginalName();
//        $image->move(public_path('images'),$imageName);

        $imagePath = 'videos/' . $imageName;
        $image = Storage::disk('public')->put($imagePath, file_get_contents($image));


        $imageUpload = new FileUpload();
        $imageUpload ->video_id = $id;
        $imageUpload->filename = $imageName;
        $imageUpload->save();
//        Alert::success('Success', 'Course video Uploaded Successfully!!!');
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
