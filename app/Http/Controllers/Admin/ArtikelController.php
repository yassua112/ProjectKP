<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Artikel;
use App\User;
use App\Lawyers;
use Alert;
class ArtikelController extends AdminController
{
    public function article_show(){
    
    $title= Artikel::all();
    
        return view('dashboard.postArtikel',['data'=>$title]);
    
    }
    public function tambah_artikel(){
    $title = Artikel::get();
    return view('dashboard.create.create-article', compact('title','ckedtor'));
    }
    public function form_pref(Request $request){
        
        $massage=[
            'required'=>'Ada atribut yangmasih kosong, Silahkan di isi',
            'min'=>'Setidaknya Isi 5 karakter judul/255 karakter untuk isi artikel'
        ];
        $this->validate($request, [
            'title' => ['required', 'string', 'min:5'],
            'ckedtor' => ['required', 'string', 'min:5'],
            'fotocover'=>['required'],            
        ],$massage);
        
        $user = auth()->user();
        
        $artikel = new Artikel;                
        $artikel->judul_artikel = $request->title;
        $artikel->isi_artikel = $request->ckedtor;
        $artikel->id_admin = $user->id;
        $artikel->username =$user->username;
        
        if($request->hasFile('fotocover')){
            $image =$request ->file('fotocover');
            $filename='cover'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/cover/'.$filename);
            Image::make($image)->resize(100,100)->save($location);
            $artikel->foto=$filename;            
            $artikel->save();
        }
        Alert::success('Berhasil', 'Data Berhasil Di Tambahkan')->persistent("Ok");
        return redirect()->route('article.show');     
    }
    public function edit_artikel($id) {
        $artikel=Artikel::find($id); // menemukan id data yang dicari untuk diedit
        return view('dashboard.edit.editArticle', compact('artikel'));
    }
    public function update(Request $request,$id){ 
      
        $artikel = Artikel::find($id);
        // dd($request,$id);      
        $artikel->judul_artikel=$request->get('title');
        $artikel->isi_artikel=$request->get('ckedtor');
        $artikel->save();
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect()->route('article.show');
    }
    
    public function hapus_artikel($id){
        $artikel=Artikel::find($id);
        $artikel->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        return redirect()->route('article.show');        
    }
 
}
