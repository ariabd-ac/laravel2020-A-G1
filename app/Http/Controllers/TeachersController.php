<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
     public function admin(){
         return \view ('layout.app');
     }
    
     public function index()

    {
        //
        $teachers = Teacher::all();
        return view('teacher.index', \compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $this->validate($request, [
        // 'kodeguru' => 'required|max:5,',
        // 'nama' => 'required|max:100|min:4',
        // 'nig' => 'required|numeric|max:5',
        // 'phone' => 'required|max:12',
        // 'alamat' => 'required',
        // 'ttl' => 'required',
        // 'jk' => 'required',
        // 'status' => 'required'

        // ]);

        $teachers = Teacher::create([
            'kodeguru' => $request->kodeguru,
            'nama' => $request->nama,
            'nig' => $request->nig,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'status' => $request->status
        ]);

        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $teachers = Teacher::where('id', $id)->get(); // Mengambil satu penerima.
        return view('teacher.guru-detail', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           Teacher::where('id', $id)->update([
            'kodeguru' => $request->kodeguru,
            'nama' => $request->nama,
            'nig' => $request->nig,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'status' => $request->status
        ]);
        return redirect()->route('guru.index')->with('message', 'Data anda telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();
        return redirect()->route('guru.index')->with('message', 'Data anda telah dihapus!');
    }
}
