<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function create()
    {
        $latestFile = File::latest()->first();

        return view('file.create', compact('latestFile'));
    }

    public function store(Request $request)
    {
        // Валидация на файловете
        $request->validate([
            'files.*' => 'required|mimes:jpeg,png,pdf|max:2048',
        ]);

        // Запазване на файловете в базата данни
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileModel = new File;
                $fileName = time().'_'.$file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $fileModel->name = $fileName;
                $fileModel->path = '/storage/'.$filePath;
                $fileModel->save();
             
        }
    }

    return redirect()->back()->with('success', 'Your message was sent successfully! ');
}

public function download()
    {
        $fileModel = File::latest()->first();

        if ($fileModel) {
            return response()->download(public_path($fileModel->path));
        } else {
            redirect()->back()->with('success', 'Your message was sent successfully! ');
        }
    }
}

