<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $students = Student::all();
        return view('student.index', \compact('students'));
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
        $students = Student::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'phone' => $request->phone,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $students = Student::where('id', $id)->get(); // Mengambil satu penerima.
        return view('student.siswa-detail', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        Student::where('id', $id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'phone' => $request->phone,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('siswa.index')->with('message', 'Data anda telah diupdate!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('siswa.index')->with('message', 'Data anda telah dihapus!');
    }
}
