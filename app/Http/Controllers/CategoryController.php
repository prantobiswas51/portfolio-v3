<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function view()
    {
        $categories = Category::all();

        return view('admin.categories.view', [
            'categories' => $categories,
        ]);
    }

    public function saveCat(Request $request)
    {

        $image = $request->image;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = time().'.'.'png';
        Storage::disk('publiccat')->put($imageName, base64_decode($image));

        Category::create([
            'catName' => $request->formData['catName'],
            'catSlug' => $request->formData['catSlug'],
            'catMessage' => $request->formData['catMessage'],
            'catImageUrl' =>  $imageName
        ]);
    }
}
