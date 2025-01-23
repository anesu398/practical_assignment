<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
public function update(Request $request, $id)
{
    $content = Content::findOrFail($id);
    $content->saveVersion(); // Save the current version
    // Update the content as usual
}
}
