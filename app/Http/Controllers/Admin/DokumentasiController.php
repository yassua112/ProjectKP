<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Dokumentasi;
use App\BidangHukum;
use App\User;
use Alert;
class DokumentasiController extends AdminController {


    public function index() {

        $bidanghukum=BidangHukum::get(); 
        return view('dashboard.gambar',['data'=>$bidanghukum],compact('category','caption'));
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
                $name=$image->getClientOriginalName();
                $image->move(public_path().'images/dokumentasi/', $name);  
                $data[] = $name;  
            }
        }
        $user=auth()->user();

        $form= new Dokumentasi();
        $form->foto=json_encode($data);
        $form->id_admin =$user ->id;
        $form->judul_dokumentasi =$request->category;
        $form->keterangan =$request->caption;
        $form->save();
        Alert::success('Berhasil', 'Data Berhasil Di Tambahkan')->persistent("Ok");
        return redirect()->route('admin.dokumentasi');
    }
}