<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Content extends Model
{
    public function versions()
    {
        return $this->hasMany(ContentVersion::class);
    }

    public function saveVersion()
    {
        $this->versions()->create([
            'value' => $this->value,
        ]);
    }

    // Renaming the custom update method to avoid conflicts
    public function updateContent(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        $content->saveVersion(); // Save the current version
        
        // Update the content with new data
        $content->update($request->all());

        return $content;
    }
}
