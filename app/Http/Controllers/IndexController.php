<?php

namespace App\Http\Controllers;

use App\Singapura;
use App\Sydney;
use App\Cambodia;
use App\Taiwan;
use App\China;
use App\Hongkong;
use App\Bukumimpi;
use App\Prediksisgp;
use App\Prediksisyd;
use App\Prediksicmb;
use App\Prediksitw;
use App\Prediksichn;
use App\Prediksihk;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
    	$singapura = Singapura::all()->last();
    	$singapuras = Singapura::all();
        $collection = collect($singapuras);
        $sorted = $collection->sortByDesc('periode');

        $cambodia = Cambodia::all()->last();
        $cambodias = Cambodia::all();
        $collectionmc = collect($cambodias);
        $sorted1 = $collectionmc->sortByDesc('periode');

        $sydney = Sydney::all()->last();
        $sydneys = Sydney::all();
        $collectionsd = collect($sydneys);
        $sorted2 = $collectionsd->sortByDesc('periode');

        $taiwan = Taiwan::all()->last();
        $taiwans = Taiwan::all();
        $collectiontw = collect($taiwans);
        $sorted4 = $collectiontw->sortByDesc('periode');

        $china = China::all()->last();
        $chinas = China::all();
        $collectioncn = collect($chinas);
        $sorted3 = $collectioncn->sortByDesc('periode');

        $hongkong = Hongkong::all()->last();
        $hongkongs = Hongkong::all();
        $collectionhk = collect($hongkongs);
        $sorted5 = $collectionhk->sortByDesc('periode');

    	return view('index.index', compact('singapura','cambodia','sydney','taiwan','china','hongkong','sorted','sorted1','sorted2','sorted3','sorted4','sorted5'));
    }

    public function showsingapura()
    {
    	$singapura = Singapura::all()->last();

    	$singapuras = Singapura::all();

        $collection = collect($singapuras);

        $sorted = $collection->sortByDesc('periode');

        $users = Singapura::paginate(10);

    	return view('index.singapura', compact('singapura','sorted','users'));
    }
    
    public function showtestsingapura()
    {
    	$singapura = Singapura::all()->last();

    	$singapuras = Singapura::all();

        $collection = collect($singapuras);

        $sorted = $collection->sortByDesc('periode');

        $users = Singapura::paginate(10);
        $singapore = Singapura::orderBy('periode','desc')->paginate(30);
        $sgp_number = Singapura::orderBy('periode','asc')->first(['number'])->paginate(10);
        $sgp_as=array();
        $sgp_kop=array();
        $sgp_kepala=array();
        $sgp_ekor=array();
        $as=array();
        foreach($singapore as $sgp){
            $sgp_as[]=substr($sgp->number,0,1);  
            $sgp_kop[]=substr($sgp->number,1,1); 
            $sgp_kepala[]=substr($sgp->number,2,1); 
            $sgp_ekor[]=substr($sgp->number,3,1);  
        }
    	return view('index.testsingapura', compact('singapura','singapore','sorted','users','sgp_number','sgp_as','sgp_kop','sgp_kepala','sgp_ekor','sgp'));
    }
    
    public function showhasilsingapura(Request $request)
    {
        $items = $request->items ?? 10;  
        
        $singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->paginate($items);

        $collection = collect($singapuras);

        
        return view('index.hasilsingapura', compact('singapura','singapuras','users','items'));
    }

    public function showprediksisgp()
    {
        $prediksisgp = Prediksisgp::all()->last();

        $prediksisgps = Prediksisgp::all();

        $prediksisyd = Prediksisyd::all()->last();

        $prediksisyds = Prediksisyd::all();

        $prediksicmb = Prediksicmb::all()->last();

        $prediksicmbs = Prediksicmb::all();

        $prediksitw = Prediksitw::all()->last();

        $prediksitws = Prediksitw::all();

        $prediksichn = Prediksichn::all()->last();

        $prediksichns = Prediksichn::all();

        $prediksihk = Prediksihk::all()->last();

        $prediksihks = Prediksihk::all();

        $collection = collect($prediksisgps);
        $sorted = $collection->sortByDesc('tanggal');

        $collection1 = collect($prediksisyds);
        $sorted1 = $collection1->sortByDesc('tanggal');

        $collection2 = collect($prediksicmbs);
        $sorted2 = $collection2->sortByDesc('tanggal');

        $collection3 = collect($prediksitws);
        $sorted3 = $collection3->sortByDesc('tanggal');

        $collection4 = collect($prediksichns);
        $sorted4 = $collection4->sortByDesc('tanggal');

        $collection5 = collect($prediksihks);
        $sorted5 = $collection5->sortByDesc('tanggal');

        return view('index.prediksisgp', compact('prediksisgp','prediksisgps', 'prediksisyd', 'prediksisyds', 'prediksicmb', 'prediksicmbs', 'prediksitw', 'prediksitws', 'prediksichn', 'prediksichns', 'prediksihk', 'prediksihks','sorted','sorted1','sorted2','sorted3','sorted4','sorted5'));
    }
    
    
    public function showanalisissingapura()
    {
        $singapura = Singapura::all()->last();

         $singapuras = Singapura::orderBy('periode','desc')->paginate(10);

        $collection = collect($singapuras);
        $sgp_number = Singapura::orderBy('periode','desc')->first(['number'])->paginate(10);
        $numb=substr("$sgp_number",0,1);
        $sgp_as=array();
        $sgp_kop=array();
        $sgp_kepala=array();
        $sgp_ekor=array();
        foreach($singapuras as $sgp){
            $sgp_as[]=substr($sgp->number,0,1);  
            $sgp_kop[]=substr($sgp->number,0,2); 
            $sgp_kepala[]=substr($sgp->number,0,3); 
            $sgp_ekor[]=substr($sgp->number,0,4);  
        }
        
        return view('index.analisissingapura', compact('singapura','singapuras','satux1','as_sgp','sgp_number','numb','sgp_numb','sgp','sgp_as','sgp_kop','sgp_kepala','sgp_ekor'));
    }
    public function searchResultSingapura(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $singapura = Singapura::all()->last();

        $singapuras = Singapura::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisissingapura', compact('singapura','singapuras'));
    }
    public function showkonversi()
    {
        
        
        return view('index.konversi');
    }

    public function showcarahitung()
    {
        
        
        return view('index.carahitung');
    }
     public function showresultsgp()
        {
        
        
        return view('index.resultsgp');
        }
    
    public function showlivedrawsgp()
        {
        
        
        return view('index.livedrawsgp');
        }

    public function showlivedrawsyd()
        {
        
        
        return view('index.livedrawsyd');
        }

    public function showlivedrawcmb()
        {
        
        
        return view('index.livedrawcmb');
        }

    public function showlivedrawchn()
        {
        
        
        return view('index.livedrawchn');
        }

    public function showlivedrawtw()
        {
        
        
        return view('index.livedrawtw');
        }

    public function showlivedrawhk()
        {
        
        
        return view('index.livedrawhk');
        } 
    public function showsydney()
    {
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::all();
        
        $collection = collect($sydneys);

        $sorted = $collection->sortByDesc('periode');

        return view('index.sydney', compact('sydney','sorted'));
    }
    public function showhasilsydney(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->paginate($items);

        $collection = collect($sydneys);

        

        return view('index.hasilsydney', compact('sydney','sydneys','items'));
    }
     public function showanalisissydney()
    {
        $sydney = Sydney::all()->last();

         $sydneys = Sydney::orderBy('periode','desc')->paginate(10);

        $collection = collect($sydneys);


        
        
        return view('index.analisissydney', compact('sydney','sydneys'));
    }
    public function searchResultSydney(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $sydney = Sydney::all()->last();

        $sydneys = Sydney::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisissydney', compact('sydney','sydneys'));
    }
    public function showcambodia()
    {
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::all();

        $collection = collect($cambodias);

        $sorted = $collection->sortByDesc('periode');
        

        return view('index.cambodia', compact('cambodia','sorted'));
    }
    public function showhasilcambodia(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate($items);

        $collection = collect($cambodias);

        

        return view('index.hasilcambodia', compact('cambodia','cambodias','items'));
    }
     public function showanalisiscambodia()
    {
        $cambodia = Cambodia::all()->last();

         $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);


        
        
        return view('index.analisiscambodia', compact('cambodia','cambodias','satux1'));
    }
    public function searchResultCambodia(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisiscambodia', compact('cambodia','cambodias'));
    }
    public function showtaiwan()
    {
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::all();
        
        $collection = collect($taiwans);

        $sorted = $collection->sortByDesc('periode');

        return view('index.taiwan', compact('taiwan','sorted'));
    }
    public function showhasiltaiwan(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate($items);

        $collection = collect($taiwans);

        

        return view('index.hasiltaiwan', compact('taiwan','taiwans','items'));
    }
    public function showanalisistaiwan()
    {
        $taiwan = Taiwan::all()->last();

         $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);


        
        
        return view('index.analisistaiwan', compact('taiwan','taiwans','satux1'));
    }
    public function searchResultTaiwan(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisistaiwan', compact('taiwan','taiwans'));
    }
    public function showchina()
    {
        $china = China::all()->last();

        $chinas = China::all();
        
        $collection = collect($chinas);

        $sorted = $collection->sortByDesc('periode');

        return view('index.china', compact('china','sorted'));
    }
    public function showhasilchina(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->paginate($items);

        $collection = collect($chinas);

       

        return view('index.hasilchina', compact('china','chinas','items'));
    }
    public function showanalisischina()
    {
        $china = China::all()->last();

         $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);


        
        
        return view('index.analisischina', compact('china','chinas','satux1'));
    }
    public function searchResultChina(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $china = China::all()->last();

        $chinas = China::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisischina', compact('china','chinas'));
    }
    public function showhongkong()
    {
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::all();
        
        $collection = collect($hongkongs);

        $sorted = $collection->sortByDesc('periode');

        return view('index.hongkong', compact('hongkong','sorted'));
    }
    public function showhasilhongkong(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate($items);

        $collection = collect($hongkongs);

        

        return view('index.hasilhongkong', compact('hongkong','hongkongs','items'));
    }
    public function showanalisishongkong()
    {
        $hongkong = Hongkong::all()->last();

         $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);


        
        
        return view('index.analisishongkong', compact('hongkong','hongkongs','satux1'));
    }
    public function searchResultHongkong(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisishongkong', compact('hongkong','hongkongs'));
    }
    public function showbukumimpi()
    {
        return view('index.bukumimpi', compact('bukumimpi'));
    }
    public function showcomingsoon()
    {
        return view('index.comingsoon', compact('comingsoon','comingsoons'));
    }
    public function showjadwalkeluaran()
    {
        return view('index.jadwalkeluaran', compact('jadwalkeluaran','jadwalkeluarans'));
    }
    public function shownumbergenerator()
    {
        return view('index.numbergenerator', compact('numbergenerator','numbergenerators'));
    }


}
