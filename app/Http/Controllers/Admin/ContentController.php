<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    // Display a paginated list of content items with optional search filtering
    public function index(Request $request)
    {
        $query = Content::query();

        if ($request->filled('search')) {
            $query->where('section', 'like', '%' . $request->input('search') . '%')
                  ->orWhere('key', 'like', '%' . $request->input('search') . '%');
        }

        $contents = $query->paginate(10);
        return view('admin.content.index', compact('contents'));
    }

    // Show the form for editing a specific content item
    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content'));
    }

    // Update the content record
    public function update(Request $request, $id)
    {
        $request->validate([
            'value' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $content = Content::findOrFail($id);

        // Save previous value as a version
        $content->saveVersion();

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if (!empty($content->value) && file_exists(public_path($content->value))) {
                unlink(public_path($content->value));
            }

            // Store new image
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
