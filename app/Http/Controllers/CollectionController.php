<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        //select semua data collection
        $collection = Collection::all();
        return view('admin-collection', ['collection' => $collection]);
    }

    public function create(){
        return view('create-collection');
    }

    public function store(Request $request){
        //validasi data
        $data = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'harga' => 'numeric|required',
            'stok' => 'nullable|numeric',
            'deskripsi'=> 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        //menyimpan file gambar pada folder lokal
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/collections'), $fileName);
            $data['image'] = $fileName;
        }

        //menyimpan data
        Collection::create($data);

        return redirect(route('collection.index'))->with('success', 'Data Added Successfully');
    }

    public function edit(Collection $collection){
        return view('edit-collection', ['collection' => $collection]);
    }

    public function update(Request $request, Collection $collection)
    {
        //validasi data
        $data = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'harga' => 'numeric|required',
            'stok' => 'nullable|numeric',
            'deskripsi'=> 'nullable|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
            
        if ($request->hasFile('image')) {
            //menghapus gambar lama
            $imagePath = public_path('images/collections/' . $collection->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            //menyimpan gambar baru
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/collections/'), $fileName);
            $data['image'] = $fileName;
        }

        //mengupdate data
        $collection->update($data);

        return redirect(route('collection.index'))->with('success', 'Data Updated Successfully');
    }

    public function delete(Collection $collection)
    {
        //menghapus gambar dari folder lokal
        $imagePath = public_path('images/collections/' . $collection->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        //menhapus data
        $collection->delete();

        return redirect(route('collection.index'))->with('success', 'Data Deleted Successfully');
    }

    public function getCollection()
    {
        //mengambil semua data dari database
        $collection = Collection::all();
        return $collection;
    }

    public function detail($id){
        //me-select gambar berdasarkan id
        $collection = Collection::where('id', $id)->first();
        return view('detail', ['collection' => $collection]);
    }
}
