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
            'kodeguru' => 'required',
            'nama' => 'required',
            'nig' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'pdf' => 'max:2048|mimes:pdf',
            'gambar' => 'image|max:2048|mimes:jpeg,jpg,png,gif'
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }else {

          if($request->hasFile('pdf')){
                // ada file yang diupload
                $filenameWithExt = $request->file('pdf')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('pdf')->getClientOriginalExtension();
                $filenameSimpanPdf = $filename.'_'.time().'.'.$extension;

                $path = $request->file('gambar')->storeAs('public/uploads/teachers/pdf', $filenameSimpanPdf);
            }else{
                // tidak ada file yang diupload
                $filenameSimpanPdf = 'nodetect.pdf';
            }

            if($request->hasFile('gambar')){
                // ada file yang diupload
                $filenameWithExt = $request->file('gambar')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gambar')->getClientOriginalExtension();
                $filenameSimpan = $filename.'_'.time().'.'.$extension;

                $path = $request->file('gambar')->storeAs('public/uploads/teachers/photos', $filenameSimpan);
            }else{
                // tidak ada file yang diupload
                $filenameSimpan = 'noimage.jpg';
            }



            $teachers = new Teacher;
            $teachers->kodeguru = $request->kodeguru;
            $teachers->nama = $request->nama;
            $teachers->nig = $request->nig;
            $teachers->phone = $request->phone;
            $teachers->alamat = $request->alamat;
            $teachers->ttl = $request->ttl;
            $teachers->jk = $request->jk;
            $teachers->status = $request->status;
            $teachers->gambar = $filenameSimpan;
            $teachers->pdf = $filenameSimpanPdf;

 
            $teachers->save();

            // dd($teachers);
            return response()->json(['success' => true]);
        }

        
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
   

        $validator = Validator::make($request->all(), [
            'kodeguru' => 'required',
            'nama' => 'required',
            'nig' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'pdf' => 'max:2048|mimes:pdf',
            'gambar' => 'image|max:2048|mimes:jpeg,jpg,png,gif'
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

             if($request->hasFile('pdf')){
                // ada file yang diupload
                $filenameWithExt = $request->file('pdf')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('pdf')->getClientOriginalExtension();
                $filenameSimpanPdf = $filename.'_'.time().'.'.$extension;

                $path = $request->file('pdf')->storeAs('public/uploads/teachers/pdf', $filenameSimpanPdf);

                 if($teachers->pdf != NULL){
                    unlink(public_path('storage/uploads/teachers/pdf/'.$teachers->pdf));
                }

                $teachers->pdf = $filenameSimpanPdf;
            }else{
                // tidak ada file yang diupload
                $filenameSimpanPdf = 'nodetect.pdf';
            }



            if($request->hasFile('gambar')){
                // ada file yang diupload
                $filenameWithExt = $request->file('gambar')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gambar')->getClientOriginalExtension();
                $filenameSimpan = $filename.'_'.time().'.'.$extension;

                $path = $request->file('gambar')->storeAs('public/uploads/teachers/photos', $filenameSimpan);


                 if($teachers->gambar != NULL){
                    unlink(public_path('storage/uploads/teachers/photos/'.$teachers->gambar));
                }

                $teachers->gambar = $filenameSimpan;


            }else{
                // tidak ada file yang diupload
                $filenameSimpan = 'noimage.jpg';
            }

            $teachers->save();
            return response()->json(['success' => true]);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teacher::findOrFail($id);
        if($data->pdf != NULL){
            unlink(public_path('storage/uploads/teachers/pdf/'.$data->pdf));
        }
        if($data->pdf != NULL){
           unlink(public_path('storage/uploads/teachers/photos/'.$data->gambar)); 
        }

        if (Teacher::destroy($id)) {
            $data = 'Success';
        }else {
            $data = 'Failed';
        }
        return response()->json($data);
    }
}
