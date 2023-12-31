<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;


class karyawanController extends Controller
{
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan', compact('karyawan'));
    }
    public function create()
    {
        return view('create');
    }
    public function update($id)
    {
       if($data=karyawan::find($id)){
        return view('update',['data'=>$data]);
       }else return redirect('/read');
    }

    public function edit(Request $request)
    {
        if($data=karyawan::find($request->id)){
            $data->nama = $request->nama;
            $data->jabatan = $request->jabatan;
            $data->umur = $request->umur;
            $data->alamat = $request->alamat;

            
            
            
            $data->update_at=date('Y-m-d H:i:s');
            $data->save();
            return redirect('/read')->with('pesan','data dengan NIM : '.$request->nim.'berhasil diupdate');
        
        }else{
            return redirect('/read')->with('pesan','data tidak ditemukan/gagal diupdate');
            
        }

    }
    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|regex:/^G.\d{3}.\d{2}.\d{4}$/|unique:karyawan,id',
            'nama'=>'required|string|max:35',
            'jabatan'=>'required|integer|between:1,1000',
            'alamat'=>'required|min:6',
            'umur'=>'required|integer|between:1,1000'
        ]);

        $model = new karyawan();

        $model->id= $request->id;
        $model->nama = $request->nama;
        $model->jabatan = $request->jabatan;
        $model->alamat = $request->alamat;
        $model->umur= $request->umur;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('view',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new karyawan();
        $dataAll=$model->all();
        return view('read',['dataAll'=>$dataAll]);
    }
    public function delete($id)
    {
        $data = karyawan::find($id);

        if ($data) {
            // Delete the associated file

            $data->delete();
        } else {
            return redirect('/read')->with('pesan', 'Data NIM : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read')->with('pesan', 'Data NIM:' . $id . ' Berhasil dihapus');
    }

    
    public function tampilkan(Request $request)
    {
        $model = new karyawan();
        $model::insert(['nim'=>@$request->nim, 'nama'=>@$request->nama, 'alamat' =>@$request->alamat]);

        return view('tampil2',['data'=>$request->all()]);
    }

    public function logout()
    {
        return view('logout');
    }
}

