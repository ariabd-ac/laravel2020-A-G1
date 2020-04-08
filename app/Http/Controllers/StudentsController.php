<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Student;
use Illuminate\Http\Request;
use DataTables;
use Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function admin(){
    //     return \view ('layout.app');
    // }
    // public function index()
    public function index(Request $request)

    {
        //
        //  $students = Student::all();
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<button type="button" onclick="location.href =\''.route('siswa.show',$row->id).'\'" class="detail btn btn-info btn-sm mr-1 detailBtn">Detail</button>';
                    $btn .= '<button type="button" data-id="/siswa/'.$row->id.'/edit" class="edit btn btn-warning btn-sm mr-1 editBtn">Edit</button>';
                    $btn .= '<button type="submit" data-id="/siswa/'.$row->id.'" class="btn btn-danger btn-sm deleteBtn">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('student.index');
        // return view('student.index', \compact('students'));
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nis' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'phone' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }else {
            $students = new Student;
            $students->nama = $request->nama;
            $students->nis = $request->nis;
            $students->ttl = $request->ttl;
            $students->alamat = $request->alamat;
            $students->jk = $request->jk;
            $students->phone = $request->phone;
            $students->kelas = $request->kelas;
            $students->jurusan = $request->jurusan;
            $students->save();
            return response()->json(['success' => true]);
        }
        //
        // $students = Student::create([
        //     'nama' => $request->nama,
        //     'nis' => $request->nis,
        //     'ttl' => $request->ttl,
        //     'alamat' => $request->alamat,
        //     'jk' => $request->jk,
        //     'phone' => $request->phone,
        //     'kelas' => $request->kelas,
        //     'jurusan' => $request->jurusan
        // ]);

        // return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Student  $student
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $students = Student::where('id', $id)->get(); // Mengambil satu penerima.
        $data = Student::where('id', $id)->get();
        return view('student.siswa-detail', compact('data'));

        // return view('student.siswa-detail', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\Student  $student
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Student $student)
    public function edit($id)
    {
        //
        $data = Student::findOrFail($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Student  $student
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        // Student::where('id', $id)->update([
        //     'nama' => $request->nama,
        //     'nis' => $request->nis,
        //     'ttl' => $request->ttl,
        //     'alamat' => $request->alamat,
        //     'jk' => $request->jk,
        //     'phone' => $request->phone,
        //     'kelas' => $request->kelas,
        //     'jurusan' => $request->jurusan
        // ]);
        // return redirect()->route('siswa.index')->with('message', 'Data anda telah diupdate!');

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nis' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'phone' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        if($validator->fails()) {
            return response() -> json(['errors' => $validator->getMessageBag()->toArray()]);
        }else {
            $students = Student::find($id);
            $students->nama = $request->nama;
            $students->nis = $request->nis;
            $students->ttl = $request->ttl;
            $students->alamat = $request->alamat;
            $students->jk = $request->jk;
            $students->phone = $request->phone;
            $students->kelas = $request->kelas;
            $students->jurusan = $request->jurusan;
            $students->save();
            return response()->json(['success' => true]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  \App\Student  $student
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $students = Student::findOrFail($id);
        // $students->delete();
        // return redirect()->route('siswa.index')->with('message', 'Data anda telah dihapus!');
        if (Student::destroy($id)) {
            $data = 'Success';
        }else {
            $data = 'Failed';
        }
        return response()->json($data);
    }
}
