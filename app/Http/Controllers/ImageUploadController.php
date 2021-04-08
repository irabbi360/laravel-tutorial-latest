<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageUploadController extends Controller
{

    public function imageUploadResize(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048'
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('images');
        $img = Image::make($image->path());
        $img->resize(100, 100, function($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        return back()
            ->with('success','Image Uploaded Successfully')
            ->with('image', $input['imagename']);
    }






























    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif,sgv,|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image')
            ->with('image', $imageName);
    }
}
