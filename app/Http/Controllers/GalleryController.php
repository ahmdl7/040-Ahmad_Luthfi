<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; 
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view('admin-gallery', ['gallery' => $gallery]);
    }

    public function create(){
        return view('create-gallery');
    }

    public function store(Request $request){
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/gallery'), $fileName);
            $data['image'] = $fileName;
        }

        Gallery::create($data);

        return redirect(route('gallery.index'))->with('success', 'Image Added Successfully');
    }

    public function edit(Gallery $gallery){
        return view('edit-gallery', ['gallery' => $gallery]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama dari file sistem
            $imagePath = public_path('images/gallery/' . $gallery->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Simpan gambar baru
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/gallery/'), $fileName);
            $data['image'] = $fileName;
        }

        
        $gallery->update($data);

        return redirect(route('gallery.index'))->with('success', 'Image Updated Successfully');
    }

    public function delete(Gallery $gallery)
    {
      
        $imagePath = public_path('images/gallery/' . $gallery->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        
        $gallery->delete();

        return redirect(route('gallery.index'))->with('success', 'Image Deleted Successfully');
    }
    public function getGallery()
    {
        $galleries = Gallery::all();
        return $galleries;
    }
}
