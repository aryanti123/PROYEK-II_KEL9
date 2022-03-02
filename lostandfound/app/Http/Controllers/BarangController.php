<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Image;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFound()
    {
        $data = DB::table('barang')->where('lostandfound', '=', 'found')->join('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'barang.id_mahasiswa')
        ->orderBy('id_barang', 'desc')->get();
        return view('lostandfound.allItemFound', compact('data'));
    }

    public function indexLost()
    {
        $data = DB::table('barang')->where('lostandfound', '=', 'lost')->join('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'barang.id_mahasiswa')
            ->orderBy('id_barang', 'desc')->get();
        return view('lostandfound.allItemLost', compact('data'));
    }
   
    public function addFoundItem(Request $request){
        $request->validate([
            'nama_item' => ['required', 'string'],
            'date' => ['required'],
            'place' => ['required', 'string'],
            'description' => ['required', 'string'],
            'picture' => ['required'],
        ]);

        $mahasiswa_id = DB::table('mahasiswa')->where('user_id', '=', Session::get('users_id'))->select('id_mahasiswa')->first();
        $data_barang = new Barang();
        $data_barang->nama_item = $request->input('nama_item');
        $data_barang->date = $request->input('date');
        $data_barang->place = $request->input('place');
        $data_barang->description = $request->input('description');
        
        $file = $request->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file-> move('uploads', $filename);
        $data_barang->picture = $filename;

        $data_barang->id_mahasiswa = $mahasiswa_id->id_mahasiswa;
        $data_barang->lostandfound = 'found';
        $data_barang->founderorowner = '-';
        $data_barang->status = 'NotClaimed';
        
        

        

        if ($data_barang->save()){
            return redirect('lostandfound/viewFoundItem');
        }

    }

    public function addLostItem(Request $request){
        $filename = time().$request->file('picture')->getClientOriginalName();
        $mahasiswa_id = DB::table('mahasiswa')->where('user_id', '=', Session::get('users_id'))->select('id_mahasiswa')->first();
        $request->validate([
            'nama_item' => ['required', 'string'],
            'date' => ['required'],
            'place' => ['required', 'string'],
            'description' => ['required', 'string'],
            'picture' => ['required'],
        ]);

        $query = DB::table('barang')->insert([
            'nama_item'=>$request->input('nama_item'),
            'date'=>$request->input('date'),
            'place'=>$request->input('place'),
            'description'=>$request->input('description'),
            'picture'=>$filename,
            'id_mahasiswa'=> $mahasiswa_id->id_mahasiswa,
            'lostandfound'=>'lost',
            'founderorowner'=>'-',
            'status'=>'NotClaimed',
        ]);

        if ($query){
            $request->file('picture')->move(public_path('uploads'), $filename);
            return redirect('lostandfound/viewLostItem');
        }

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $mahasiswa_id = DB::table('mahasiswa')->where('user_id', '=', Session::get('users_id'))->select('id_mahasiswa')->first();

        $data = DB::table('barang')->where('id_mahasiswa', '=', $mahasiswa_id->id_mahasiswa)->get();
        // ->where('id_mahasiswa', '=', $mahasiswa_id->id_mahasiswa)->select('id_mahasiswa')->first();
        //     ->get();
        // $mahasiswa_id = DB::table('mahasiswa')->where('id_mahasiswa', '=', $mahasiswa_id->id_mahasiswa)->select('id_mahasiswa')->first();

        return view('lostandfound.history', compact('data'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function editItem($id)
    {
        $row = DB::table('barang')->where('id_barang', $id)->first();
        $dataBarang = [
            'dataBarang' => $row
        ];

        if($row->lostandfound == 'lost'){
            return view('lostandfound.editItemLost', $dataBarang);
        }
        else{
            return view('lostandfound.editItemFound', $dataBarang);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function updateItemLost(Request $request, $id)
    {
        $request->validate([
            'nama_item' => ['required', 'string'],
            'date' => ['required'],
            'place' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $query = DB::table('barang')->where('id_barang', $id)->update([
            'nama_item' => $request->input('nama_item'),
            'date' => $request->input('date'),
            'place' => $request->input('place'),
            'founderorowner' => $request->input('founder'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        return redirect('/lostandfound/history')->with('success', 'Data simpan');
    }

    public function updateItemFound(Request $request, $id)
    {
        $request->validate([
            'nama_item' => ['required', 'string'],
            'date' => ['required'],
            'place' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $query = DB::table('barang')->where('id_barang', $id)->update([
            'nama_item' => $request->input('nama_item'),
            'date' => $request->input('date'),
            'place' => $request->input('place'),
            'founderorowner' => $request->input('owner'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        return redirect('/lostandfound/history')->with('success', 'Data simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('barang')->where('id_barang', $id)->delete();
        return redirect('/lostandfound/history')->with('success', 'Data dihapus');
    }
}
