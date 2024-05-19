<?php

namespace App\Http\Controllers;

//import Model "internship
use App\Models\internship;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $internships = internship::latest()->paginate(5);

        //render view with posts
        return view('internship.index', compact('internships'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        return view('internship.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_intern'=> 'required',
            'periode_masuk_intern'=> 'required',
            'periode_keluar_intern'=> 'required',
            'alamat_intern'=> 'required',
            'prov_intern'=> 'required',
            'kota_intern'=> 'required',
            'link_intern'=> 'required',
            'jns_intern'=> 'required',
            'jabatan_intern'=> 'required',
            'deskripsi_intern'=> 'required'
        ]);

        //create post
        internship::create([
            'nama_intern' => $request->nama_intern,
            'periode_masuk_intern' => $request->periode_masuk_intern,
            'periode_keluar_intern' => $request->periode_keluar_intern,
            'alamat_intern' => $request->alamat_intern,
            'prov_intern' => $request->prov_intern,
            'kota_intern' => $request->kota_intern,
            'link_intern' => $request->link_intern,
            'jns_intern' => $request->jns_intern,
            'jabatan_intern' => $request->jabatan_intern,
            'deskripsi_intern' => $request->deskripsi_intern
        ]);

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $internship = internship::findOrFail($id);

        //render view with post
        return view('internship.show', compact('internship'));
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $internship = internship::findOrFail($id);

        //render view with post
        return view('internship.edit', compact('internship'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_intern'=> 'required',
            'periode_masuk_intern'=> 'required',
            'periode_keluar_intern'=> 'required',
            'alamat_intern'=> 'required',
            'prov_intern'=> 'required',
            'kota_intern'=> 'required',
            'link_intern'=> 'required',
            'jns_intern'=> 'required',
            'jabatan_intern'=> 'required',
            'deskripsi_intern'=> 'required'
        ]);

        //get post by ID
        $internship = internship::findOrFail($id);
            //update post without image
            $internship->update([
                'nama_intern' => $request->nama_intern,
                'periode_masuk_intern' => $request->periode_masuk_intern,
                'periode_keluar_intern' => $request->periode_keluar_intern,
                'alamat_intern' => $request->alamat_intern,
                'prov_intern' => $request->prov_intern,
                'kota_intern' => $request->kota_intern,
                'link_intern' => $request->link_intern,
                'jns_intern' => $request->jns_intern,
                'jabatan_intern' => $request->jabatan_intern,
                'deskripsi_intern' => $request->deskripsi_intern
        ]);

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $internship = internship::findOrFail($id);

        //delete post
        $internship->delete();

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}