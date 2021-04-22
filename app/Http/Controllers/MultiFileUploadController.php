<?php

namespace App\Http\Controllers;

use App\Models\FileUp;
use Illuminate\Http\Request;

class MultiFileUploadController extends Controller
{
    public function filesUpload(Request $request)
    {
        $this->validate($request,[
           'filenames' => 'required',
           'filenames.*' => 'required',
        ]);

        $files = [];
        if ($request->hasFile('filenames')) {
            foreach ($request->file('filenames') as  $file) {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
        }

        $file = new FileUp();
        $file->filenames = $files;
        $file->save();

        return back()->with('success','File uploaded successfully');

    }
}








