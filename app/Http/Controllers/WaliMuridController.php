<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Student;
use App\WaliMurid;
use App\Http\Controllers\Upload;

class WaliMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $walim = WaliMurid::all();
        // dd($mapel);
        return view ('walim.index',\compact('walim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view('walim.create', \compact('student'));
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

        // $gambar   = Storage::putFile('public/gambar/',$request->file('gambar'));
        // $new_gambar = time().$gambar->getClientOriginalName();
        //  $walim = WaliMurid::create([
        //     'gambar' => $gambar,
        //     'student_id' => $request->student_id,
        //     'nama_ayah' => $request->nama_ayah,
        //     'nama_ibu' => $request->nama_ibu,
        //     'nama_wali' => $request->nama_wali,
        //     'alamat' => $request->alamat,
        //     'phone' => $request->phone,
        //     'pekerjaan' => $request->pekerjaan
        // ]);

        // dd($wali)

        // $path = $request->file('image')->store('public');

        

   

        // $data = [
        //     'path' => $path,
        //     'student_id' => $request->student_id,
        //     'nama_ayah' => $request->nama_ayah,
        //     'nama_ibu' => $request->nama_ibu,
        //     'nama_wali' => $request->nama_wali,
        //     'alamat' => $request->alamat,
        //     'phone' => $request->phone,
        //     'pekerjaan' => $request->pekerjaan
        // ];
        
        // return Upload::create($data);

        // dd($path);
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $walim = WaliMurid::create([
            'gambar' => $new_gambar,
            'student_id' => $request->student_id,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'pekerjaan' => $request->pekerjaan

        ]);

        $gambar->move('storage/uploads/walim/',$new_gambar);

        // $walim = new WaliMurid();

        // $walim->student_id = $request->input('student_id');
        // $walim->nama_ayah = $request->input('nama_ayah');
        // $walim->nama_ibu = $request->input('nama_ibu');
        // $walim->nama_wali = $request->input('nama_wali');
        // $walim->alamat = $request->input('alamat');
        // $walim->phone = $request->input('phone');
        // $walim->pekerjaan = $request->input('pekerjaan');


        // if($request->hasfile('gambar')){
        //     $file = $request->file('gambar');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/upload',$filename);
        //     $walim->gambar = $filename;
        // }else{
        //     return $request;
        //     $walim->gambar = '';
        // }
        // $walim->save();
        return \redirect('walim');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(WaliMurid $walim, Student $student)
    {
        //
        $student = Student::all();
        return \view('walim.edit', compact('walim','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaliMurid $walim)
    {
        //
         $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

           WaliMurid::where('id', $walim->id)->update([
            'gambar' => $new_gambar,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'pekerjaan' => $request->pekerjaan
            ]);

           $gambar->move('storage/uploads/walim/',$new_gambar);
           
            return redirect('walim')->with('status', 'Berhasil di add');
           // return view ('walim.index');
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
    }
}
