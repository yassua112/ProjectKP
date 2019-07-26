<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Dokumentasi;
use App\BidangHukum;
use App\User;
use Alert;
use Image;
class DokumentasiController extends AdminController {


    public function index() {       
        $dokumentasi=Dokumentasi::get();      
        return view('dashboard.gambar',['data'=>$dokumentasi]);
    }

    public function dokCreat(){
        
        $bidanghukum=BidangHukum::get();
        return view('dashboard.create.create-dokumentasi',['data'=>$bidanghukum],compact('category','caption'));
    }

    public function create(Request $request){
        $this->validate($request, [

            'fotodokumentasi' => 'required',
            'fotodokumentasi.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'caption'=>['required', 'string', 'max:255'],
    ]);
                // dd($request);
    if($request->hasfile('fotodokumentasi'))
        {
            foreach($request->file('fotodokumentasi') as $image)
            {                
                $filename='dokumentasi'.time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/dokumentasi/'.$filename);
                Image::make($image)->resize(300,300)->save($location);
                $data[] = $filename;  
            }
        }

        $user=auth()->user();
        $form= new Dokumentasi();
        $form->judul_dokumentasi =$request->category;
        $form->keterangan =$request->caption;
        $form->foto=json_encode($data);
        $form->id_admin =$user->id;
        $form->save();
        Alert::success('Berhasil', 'Data Berhasil Di Tambahkan')->persistent("Ok");
        return redirect()->route('admin.dokumentasi');
    }

    public function edit($id) {
        $dokumentasi = Dokumentasi::find($id); // menemukan id data yang dicari untuk diedit
        return view('dashboard.edit.editDokumen', compact('dokumentasi'));
    }

    public function update(Request $request,$id){ 
        $this->validate($request, [
            'nama_bid_hukum'    =>  'required',
            'keterangan'     =>  'required'
        ]);
        $bidanghukum = BidangHukum::find($id);
        // dd($request,$id);      
        $bidanghukum->nama_bid_hukum=$request->get('nama_bid_hukum');
        $bidanghukum->keterangan=$request->get('keterangan');
        $bidanghukum->save();
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect()->route('table');
    }


    public function hapus($id){
        $dokumentasi=Dokumentasi::find($id);
        $dokumentasi->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        return redirect()->route('admin.dokumentasi');
        
    }
}
