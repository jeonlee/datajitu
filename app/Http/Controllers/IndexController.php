<?php

namespace App\Http\Controllers;

use App\Singapura;
use App\Sydney;
use App\Cambodia;
use App\Taiwan;
use App\China;
use App\Hongkong;
use App\Bukumimpi;
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

    public function showhasilsingapura()
    {
        $singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->paginate(10);

        $collection = collect($singapuras);

        
        return view('index.hasilsingapura', compact('singapura','singapuras','users'));
    }

    public function showanalisissingapura()
    {
        $singapura = Singapura::all()->last();

         $singapuras = Singapura::orderBy('periode','desc')->paginate(10);

        $collection = collect($singapuras);


        
        
        return view('index.analisissingapura', compact('singapura','singapuras','satux1'));
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
    public function showhasilsydney()
    {
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->paginate(10);

        $collection = collect($sydneys);

        

        return view('index.hasilsydney', compact('sydney','sydneys'));
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
    public function showhasilcambodia()
    {
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);

        

        return view('index.hasilcambodia', compact('cambodia','cambodias'));
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
    public function showhasiltaiwan()
    {
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);

        

        return view('index.hasiltaiwan', compact('taiwan','taiwans'));
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
    public function showhasilchina()
    {
        $china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);

       

        return view('index.hasilchina', compact('china','chinas'));
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
    public function showhasilhongkong()
    {
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);

        

        return view('index.hasilhongkong', compact('hongkong','hongkongs'));
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
    public function showjadwalkeluaran()
    {
        return view('index.jadwalkeluaran', compact('jadwalkeluaran','jadwalkeluarans'));
    }
    public function shownumbergenerator()
    {
        return view('index.numbergenerator', compact('numbergenerator','numbergenerators'));
    }


}
