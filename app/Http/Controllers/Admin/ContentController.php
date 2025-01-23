<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Request $request)
{
    $query = Content::query();

    if ($request->has('search')) {
        $query->where('section', 'like', '%' . $request->input('search') . '%')
              ->orWhere('key', 'like', '%' . $request->input('search') . '%');
    }

    $contents = $query->paginate(10);
    return view('admin.content.index', compact('contents'));
}

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $content->value = 'assets/img/' . $imageName;
        } else {
            $content->value = $request->input('value');
        }

        $content->save();
        return redirect()->route('admin.content.index')->with('success', 'Content updated successfully.');
    }
}