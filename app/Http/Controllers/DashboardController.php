<?php

namespace App\Http\Controllers;


use App\Models\Bayarzakat;
use App\Models\Kategori_Mustahik;
use App\Models\Mustahik_Lainnya;
use App\Models\Mustahik_Warga;
use App\Models\Muzakki;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardController extends Controller
{
    public function dashboard(){

        return view('dashboard');
    }

    public function muzakkiRead(){
        $muzakki = Muzakki::all();
        return view('muzakki', compact(['muzakki']));
    }

    public function muzakkiPost(Request $request){

        Muzakki::create($request->except(['_token','created_at','updated_at']));
        return redirect('dashboard/muzaki');
    }

    public function muzakiDestroy($id){
        $muzakki = Muzakki::find($id);
        $muzakki->delete();
        return redirect('dashboard/muzaki');
    }

    public function muzakiEdit($id){
            $muzakki = Muzakki::find($id);

            return view('muzakiEdit', compact(['muzakki']));

    }
    public function muzakiUpdate($id, Request $request){
        $muzakki = Muzakki::find($id);
        $muzakki->update($request->except(['_token']));
        return redirect('dashboard/muzaki');
    }

    public function mustahikRead(){
        $mustahik = Kategori_Mustahik::all();
        return view('mustahik', compact(['mustahik']));
    }

    public function mustahikPost(Request $request){
        Kategori_Mustahik::create($request->except(['_token','created_at','updated_at']));
        return redirect('dashboard/mustahik');
    }

    public function mustahikDestroy($id){
        $mustahik = Kategori_Mustahik::find($id);
        $mustahik->delete();
        return redirect('dashboard/mustahik');
    }
//
    public function mustahikEdit($id){
        $mustahik = Kategori_Mustahik::find($id);

        return view('mustahikEdit', compact(['mustahik']));

    }
    public function mustahikUpdate($id, Request $request){
        $mustahik = Kategori_Mustahik::find($id);
        $mustahik->update($request->except(['_token']));
        return redirect('dashboard/mustahik');
    }

    public function bayarzakatRead(){
        $zakat = Bayarzakat::all();
        return view('zakat', compact(['zakat']));
    }

    public function bayar($id){
        $muzakki = Muzakki::find($id);
        return view('muzakiBayar', compact(['muzakki']));
    }

    public function sumbitBayar(Request $request){

        Bayarzakat::create($request->except(['_token','created_at','updated_at']));
        return redirect('dashboard/bayarzakat');

    }

    public function deleteBayar($id){
        $zakat = Bayarzakat::find($id);
        $zakat->delete();
        return redirect('dashboard/bayarzakat');
    }

    public function editBayar($id){
        $zakat = Bayarzakat::find($id);
        return view('zakatEdit', compact(['zakat']));
    }

    public function updateBayar(Request $request, $id){
        $zakat = Bayarzakat::find($id);
        $zakat->update($request->except(['_token']));

        return redirect('dashboard/bayarzakat');
    }

    public function wargaRead(){
        $warga = Mustahik_Warga::all();
        return view('warga',compact(['warga']));
    }

    public function wargaAdd(Request $request){
        Mustahik_Warga::create($request->except(['_token','created_at','updated_at']));
        return redirect('dashboard/warga');
    }

    public function wargaDelete($id){
        $warga = Mustahik_Warga::find($id);
        $warga->delete();

        return redirect('dashboard/warga');
    }

    public function wargaEdit($id){
        $warga = Mustahik_Warga::find($id);
        return view('wargaEdit',compact(['warga']));
    }

    public function wargaUpdate(Request $request, $id){
        $warga = Mustahik_Warga::find($id);
        $warga->update($request->except(['_token']));

        return redirect('dashboard/warga');
    }

    public function lainnyaRead(){
        $lainnya = Mustahik_Lainnya::all();
        return view('lainnya',compact(['lainnya']));
    }

    public function lainnyaAdd(Request $request){
        Mustahik_Lainnya::create($request->except(['_token','created_at','updated_at']));
        return redirect('dashboard/lainnya');
    }

    public function lainnyaDelete($id){
        $lainnya = Mustahik_Lainnya::find($id);
        $lainnya->delete();
        return redirect('dashboard/lainnya');
    }

    public function lainnyaEdit($id){
        $lainnya = Mustahik_Lainnya::find($id);
        return view('lainnyaEdit',compact('lainnya'));
    }

    public function lainnyaUpdate(Request $request, $id){
        $lainnya = Mustahik_Lainnya::find($id);
        $lainnya->update($request->except(['_token']));
        return redirect('dashboard/lainnya');
    }

    public function laporanZakat(){
        $data = 0;

        $muzaki = Bayarzakat::count('nama_kk');
        $jiwa = Bayarzakat::sum('jumlah_tanggungandibayar');
        $beras = Bayarzakat::sum('bayar_beras');
        $uang = Bayarzakat::sum('bayar_uang');

        return view('laporanZakat',compact(['muzaki','jiwa','beras','uang','data']));
    }

    public function laporanWarga(){
        $fakir1 = Mustahik_Warga::where('kategori','Fakir I');
        $fakir2 = Mustahik_Warga::where('kategori','Fakir II');
        $miskin1 = Mustahik_Warga::where('kategori','Miskin I');
        $miskin2 = Mustahik_Warga::where('kategori','Miskin II');
        $mampu = Mustahik_Warga::where('kategori','Mampu');

        $bfakir1 = $fakir1->sum('hak');
        $bfakir2 = $fakir2->sum('hak');
        $bmiskin1 = $miskin1->sum('hak');
        $bmiskin2 = $miskin2->sum('hak');
        $bmampu = $mampu->sum('hak');

        $kfakir1 = $fakir1->count();
        $kfakir2 = $fakir2->count();
        $kmiskin1 = $miskin1->count();
        $kmiskin2 = $miskin2->count();
        $kmampu = $mampu->count();

        $hfakir1 = Kategori_Mustahik::where('nama_kategori','Fakir I')->value('jumlah_hak');
        $hfakir2 = Kategori_Mustahik::where('nama_kategori','Fakir II')->value('jumlah_hak');
        $hmiskin1 = Kategori_Mustahik::where('nama_kategori','Miskin I')->value('jumlah_hak');
        $hmiskin2 = Kategori_Mustahik::where('nama_kategori','Miskin II')->value('jumlah_hak');
        $hmampu = Kategori_Mustahik::where('nama_kategori','Mampu')->value('jumlah_hak');

        return view('laporanWarga', compact(['bfakir1','kfakir1','hfakir1'],['bfakir2','kfakir2','hfakir2'],['bmiskin1','kmiskin1','hmiskin1'],['bmiskin2','kmiskin2','hmiskin2'],['bmampu','kmampu','hmampu']));
    }

    public function laporanMustahikl(){
        $ustad = Mustahik_Lainnya::where('kategori','Fisabilillah (Ustad)');
        $santri = Mustahik_Lainnya::where('kategori','Fisabilillah (Santri)');
        $ibnusabil = Mustahik_Lainnya::where('kategori','Ibnu Sabil');
        $mualaf = Mustahik_Lainnya::where('kategori','Mualaf');


        $bustad = $ustad->sum('hak');
        $bsantri = $santri->sum('hak');
        $bibnusabil = $ibnusabil->sum('hak');
        $bmualaf = $mualaf->sum('hak');


        $kustad = $ustad->count();
        $ksantri = $santri->count();
        $kibnusabil = $ibnusabil->count();
        $kmualaf = $mualaf->count();


        $hustad = Kategori_Mustahik::where('nama_kategori','Fisabillilah (Ustad)')->value('jumlah_hak');
        $hsantri = Kategori_Mustahik::where('nama_kategori','Fisabillilah (Santri)')->value('jumlah_hak');
        $hibnusabil = Kategori_Mustahik::where('nama_kategori','Ibnu Sabil')->value('jumlah_hak');
        $hmualaf = Kategori_Mustahik::where('nama_kategori','Mualaf')->value('jumlah_hak');


        return view('laporanMustahikl', compact(['bustad','kustad','hustad'],['bsantri','ksantri','hsantri'],['bibnusabil','kibnusabil','hibnusabil'],['bmualaf','kmualaf','hmualaf']));
    }

    public function laporanZakatpdf(){
        $muzaki = Bayarzakat::count('nama_kk');
        $jiwa = Bayarzakat::sum('jumlah_tanggungandibayar');
        $beras = Bayarzakat::sum('bayar_beras');
        $uang = Bayarzakat::sum('bayar_uang');

        view()->share(compact(['muzaki','jiwa','uang','beras']));

        $pdf = PDF\Pdf::loadView('laporanZakat-pdf');

        return $pdf->download('Laporan Zakat.pdf');
    }

    public function laporanWargapdf(){
        $fakir1 = Mustahik_Warga::where('kategori','Fakir I');
        $fakir2 = Mustahik_Warga::where('kategori','Fakir II');
        $miskin1 = Mustahik_Warga::where('kategori','Miskin I');
        $miskin2 = Mustahik_Warga::where('kategori','Miskin II');
        $mampu = Mustahik_Warga::where('kategori','Mampu');

        $bfakir1 = $fakir1->sum('hak');
        $bfakir2 = $fakir2->sum('hak');
        $bmiskin1 = $miskin1->sum('hak');
        $bmiskin2 = $miskin2->sum('hak');
        $bmampu = $mampu->sum('hak');

        $kfakir1 = $fakir1->count();
        $kfakir2 = $fakir2->count();
        $kmiskin1 = $miskin1->count();
        $kmiskin2 = $miskin2->count();
        $kmampu = $mampu->count();

        $hfakir1 = Kategori_Mustahik::where('nama_kategori','Fakir I')->value('jumlah_hak');
        $hfakir2 = Kategori_Mustahik::where('nama_kategori','Fakir II')->value('jumlah_hak');
        $hmiskin1 = Kategori_Mustahik::where('nama_kategori','Miskin I')->value('jumlah_hak');
        $hmiskin2 = Kategori_Mustahik::where('nama_kategori','Miskin II')->value('jumlah_hak');
        $hmampu = Kategori_Mustahik::where('nama_kategori','Mampu')->value('jumlah_hak');

        view()->share(compact(['bfakir1','kfakir1','hfakir1'],['bfakir2','kfakir2','hfakir2'],['bmiskin1','kmiskin1','hmiskin1'],['bmiskin2','kmiskin2','hmiskin2'],['bmampu','kmampu','hmampu']));
        $pdf = PDF\Pdf::loadView('laporanWarga-pdf');

        return $pdf->download('Laporan Warga.pdf');
    }

    public function laporanMustahiklpdf(){
        $ustad = Mustahik_Lainnya::where('kategori','Fisabilillah (Ustad)');
        $santri = Mustahik_Lainnya::where('kategori','Fisabilillah (Santri)');
        $ibnusabil = Mustahik_Lainnya::where('kategori','Ibnu Sabil');
        $mualaf = Mustahik_Lainnya::where('kategori','Mualaf');


        $bustad = $ustad->sum('hak');
        $bsantri = $santri->sum('hak');
        $bibnusabil = $ibnusabil->sum('hak');
        $bmualaf = $mualaf->sum('hak');


        $kustad = $ustad->count();
        $ksantri = $santri->count();
        $kibnusabil = $ibnusabil->count();
        $kmualaf = $mualaf->count();


        $hustad = Kategori_Mustahik::where('nama_kategori','Fisabillilah (Ustad)')->value('jumlah_hak');
        $hsantri = Kategori_Mustahik::where('nama_kategori','Fisabillilah (Santri)')->value('jumlah_hak');
        $hibnusabil = Kategori_Mustahik::where('nama_kategori','Ibnu Sabil')->value('jumlah_hak');
        $hmualaf = Kategori_Mustahik::where('nama_kategori','Mualaf')->value('jumlah_hak');

        view()->share(compact(['bustad','kustad','hustad'],['bsantri','ksantri','hsantri'],['bibnusabil','kibnusabil','hibnusabil'],['bmualaf','kmualaf','hmualaf']));
        $pdf = PDF\Pdf::loadView('laporanMustahik-pdf');

        return $pdf->download('Laporan Mustahik.pdf');
    }
}
