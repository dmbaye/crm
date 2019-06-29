<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::latest()->where('owner_id', auth()->id())->get();

        return view('files.index', compact('files'));
    }

    public function create()
    {}

    public function store(Request $request)
    {
        $this->validate($request, [
            'document' => 'required',
        ]);

        $path = $request->file('document')->store('files');

        $file = new File();
        $file->owner_id = auth()->id();
        $file->path = $path;

        if (!$file->save()) {
            return redirect()->back()
                ->with('error', 'We were unable to upload your file, try again.');
        }

        return redirect()->route('files.index')
            ->with('success', 'Your file was uploaded successfully.');
    }

    public function show()
    {}

    public function edit()
    {}

    public function update()
    {}

    public function destroy()
    {}
}
