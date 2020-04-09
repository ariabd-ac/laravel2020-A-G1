<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use DataTables;
use Validator;


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
     public function index(Request $request)

    {
        //
        // $teachers = Teacher::all();
        if ($request->ajax()) {
           $data = Teacher::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<button type="button" onclick="location.href =\''.route('guru.show', $row->id).'\'" class="detail btn btn-info btn-sm mr-1 detailBtn">Detail</button>';
                    $btn .= '<button type="button" data-id="/guru/'.$row->id.'/edit" class="edit btn btn-warning btn-sm mr-1 editBtn">Edit</button>';
                    $btn .= '<button type="submit" data-id="/guru/'.$row->id.'" class="btn btn-danger btn-sm deleteBtn">Delete</button>';
                    
                    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
                return view('teacher.index');
           
           // return Datatables::of(Teacher::all())->make(true);


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

        // $teachers = Teacher::create([
        //     'kodeguru' => $request->kodeguru,
        //     'nama' => $request->nama,
        //     'nig' => $request->nig,
        //     'phone' => $request->phone,
        //     'alamat' => $request->alamat,
        //     'ttl' => $request->ttl,
        //     'jk' => $request->jk,
        //     'status' => $request->status
        // ]);

        $validator = Validator::make($request->all(), [
            'kodeguru' => 'required',
            'nama' => 'required',
            'nig' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }else {
            $teachers = new Teacher;
            $teachers->kodeguru = $request->kodeguru;
            $teachers->nama = $request->nama;
            $teachers->nig = $request->nig;
            $teachers->phone = $request->phone;
            $teachers->alamat = $request->alamat;
            $teachers->ttl = $request->ttl;
            $teachers->jk = $request->jk;
            $teachers->status = $request->status;
            $teachers->save();
            return response()->json(['success' => true]);
        }

        // return redirect()->route('guru.index');
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

        $data = Teacher::where('id', $id)->get(); 
        return view('teacher.guru-detail', compact('data'));
        
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
        $data = Teacher::findOrFail($id);
        return response()->json($data);
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
        //    Teacher::where('id', $id)->update([
        //     'kodeguru' => $request->kodeguru,
        //     'nama' => $request->nama,
        //     'nig' => $request->nig,
        //     'phone' => $request->phone,
        //     'alamat' => $request->alamat,
        //     'ttl' => $request->ttl,
        //     'jk' => $request->jk,
        //     'status' => $request->status
        // ]);

        $validator = Validator::make($request->all(), [
            'kodeguru' => 'required',
            'nama' => 'required',
            'nig' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }else {
            $teachers = Teacher::find($id);
            $teachers->kodeguru = $request->kodeguru;
            $teachers->nama = $request->nama;
            $teachers->nig = $request->nig;
            $teachers->phone = $request->phone;
            $teachers->alamat = $request->alamat;
            $teachers->ttl = $request->ttl;
            $teachers->jk = $request->jk;
            $teachers->status = $request->status;
            $teachers->save();
            return response()->json(['success' => true]);
        }

        // return redirect()->route('guru.index')->with('message', 'Data anda telah diupdate!');
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
        // $teachers = Teacher::findOrFail($id);
        // $teachers->delete();
        // return redirect()->route('guru.index')->with('message', 'Data anda telah dihapus!');

        if (Teacher::destroy($id)) {
            $data = 'Success';
        }else {
            $data = 'Failed';
        }
        return response()->json($data);
    }
}
