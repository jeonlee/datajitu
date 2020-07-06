<?php

namespace App\Http\Controllers;

use App\Singapura;
use App\Sydney;
use App\Cambodia;
use App\Taiwan;
use App\China;
use App\Hongkong;
use App\Japan;
use App\Bukumimpi;
use App\Prediksisgp;
use App\Prediksisyd;
use App\Prediksicmb;
use App\Prediksitw;
use App\Prediksichn;
use App\Prediksihk;
use App\Prediksijpn;
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
	    
        $japan = Japan::all()->last();
        $japans = Japan::all();
        $collectionjpn = collect($japans);
        $sorted6 = $collectionjpn->sortByDesc('periode');

    	return view('index.index', compact('singapura','cambodia','sydney','taiwan','china','hongkong','japan','sorted','sorted1','sorted2','sorted3','sorted4','sorted5','sorted6'));
    }

//     public function showsingapura()
//     {
//     	$singapura = Singapura::all()->last();

//     	$singapuras = Singapura::all();

//         $collection = collect($singapuras);

//         $sorted = $collection->sortByDesc('periode');

//         $users = Singapura::paginate(10);

//     	return view('index.singapura', compact('singapura','sorted','users'));
//     }
    
    public function showsingapura()
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
        $val_as=array_count_values($sgp_as);
        $val_kop=array_count_values($sgp_kop);
        $val_kepala=array_count_values($sgp_kepala);
        $val_ekor=array_count_values($sgp_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($sgp_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($sgp_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($sgp_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($sgp_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($sgp_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($sgp_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($sgp_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($sgp_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.singapura', compact('singapura','singapore','sorted','users','sgp_number','sgp_as','sgp_kop','sgp_kepala','sgp_ekor','sgp','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
	
    public function showhasilsingapura(Request $request)
    {
        $items = $request->items ?? 10;  
        
        $singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->paginate($items);

        $collection = collect($singapuras);
        
        return view('index.hasilsingapura', compact('singapura','singapuras','items'));
    }

    public function showhasilsingapuram(Request $request)
    {
        $items = $request->items ?? 10;  
        
        $singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->paginate($items);

        $collection = collect($singapuras);

        
        return view('index.hasilsingapura-m', compact('singapura','singapuras','items'));
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

        $prediksijpn = Prediksijpn::all()->last();

        $prediksijpns = Prediksijpn::all();

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
	    
        $collection6 = collect($prediksijpns);
        $sorted6 = $collection6->sortByDesc('tanggal');

        return view('index.prediksisgp', compact('prediksisgp','prediksisgps', 'prediksisyd', 'prediksisyds', 'prediksicmb', 'prediksicmbs', 'prediksitw', 'prediksitws', 'prediksichn', 'prediksichns', 'prediksihk', 'prediksihks','prediksijpn','prediksijpns','sorted','sorted1','sorted2','sorted3','sorted4','sorted5','sorted6'));
    }
    
    public function showprediksisgpdet()
    {
	$prediksisgp = Prediksisgp::all()->last();
	return view('index.prediksisgpdet', compact('prediksisgp'));
    }
	
    public function showprediksisyddet()
    {
	$prediksisyd = Prediksisyd::all()->last();
	return view('index.prediksisyddet', compact('prediksisyd'));
    }
	
    public function showprediksicmbdet()
    {
	$prediksicmb = Prediksicmb::all()->last();
	return view('index.prediksicmbdet', compact('prediksicmb'));
    }
	
    public function showprediksichndet()
    {
	$prediksichn = Prediksichn::all()->last();
	return view('index.prediksichndet', compact('prediksichn'));
    }
	
    public function showprediksitwdet()
    {
	$prediksitw = Prediksitw::all()->last();
	return view('index.prediksitwdet', compact('prediksitw'));
    }
	
    public function showprediksihkdet()
    {
	$prediksihk = Prediksihk::all()->last();
	return view('index.prediksihkdet', compact('prediksihk'));
    }
	
	
    public function showprediksijpndet()
    {
	$prediksijpn = Prediksijpn::all()->last();
	return view('index.prediksijpndet', compact('prediksijpn'));
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
        
        return view('index.analisissingapura', compact('singapura','singapuras','sgp_number','numb','sgp','sgp_as','sgp_kop','sgp_kepala','sgp_ekor'));
    }
    public function searchResultSingapura(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $singapura = Singapura::all()->last();

        $singapuras = Singapura::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisissingapura', compact('singapura','singapuras'));
    }
public function showanalisissingapuram()
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
        
        return view('index.analisissingapura-m', compact('singapura','singapuras','sgp_number','numb','sgp','sgp_as','sgp_kop','sgp_kepala','sgp_ekor'));
    }
    public function searchResultSingapuram(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $singapura = Singapura::all()->last();

        $singapuras = Singapura::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisissingapura-m', compact('singapura','singapuras'));
    }
    public function showkonversi()
    {
        
        
        return view('index.konversi');
    }
public function showkonversim()
    {
        
        
        return view('index.konversi-m');
    }
    public function showcarahitung()
    {
        
        
        return view('index.carahitung');
    }
     public function showresultsgp()
        {
        
        
        return view('index.resultsgp');
        }
    public function showresultsgpm()
        {
        
        
        return view('index.resultsgp-m');
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
	
     public function showlivedrawjpn()
        {
        
        
        return view('index.livedrawjpn');
        } 
//     public function showsydney()
//     {
//         $sydney = Sydney::all()->last();

//         $sydneys = Sydney::all();
        
//         $collection = collect($sydneys);

//         $sorted = $collection->sortByDesc('periode');

//         return view('index.sydney', compact('sydney','sorted'));
//     }
	
    public function showsydney()
    {
        $sydney = Sydney::all()->last();

    	$sydneys = Sydney::all();

        $collection = collect($sydneys);

        $sorted = $collection->sortByDesc('periode');

        $users = Sydney::paginate(10);
        $sidney = Sydney::orderBy('periode','desc')->paginate(30);
        $syd_number = Sydney::orderBy('periode','asc')->first(['number'])->paginate(10);
        $syd_as=array();
        $syd_kop=array();
        $syd_kepala=array();
        $syd_ekor=array();
        $as=array();
        foreach($sidney as $syd){
            $syd_as[]=substr($syd->number,0,1);  
            $syd_kop[]=substr($syd->number,1,1); 
            $syd_kepala[]=substr($syd->number,2,1); 
            $syd_ekor[]=substr($syd->number,3,1);  
        }
        $val_as=array_count_values($syd_as);
        $val_kop=array_count_values($syd_kop);
        $val_kepala=array_count_values($syd_kepala);
        $val_ekor=array_count_values($syd_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($syd_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($syd_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($syd_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($syd_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($syd_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($syd_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($syd_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($syd_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.sydney', compact('sydney','sidney','sorted','users','syd_number','syd_as','syd_kop','syd_kepala','syd_ekor','syd','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
	
	
    public function showhasilsydney(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->paginate($items);

        $collection = collect($sydneys);

        

        return view('index.hasilsydney', compact('sydney','sydneys','items'));
    }
    public function showhasilsydneym(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->paginate($items);

        $collection = collect($sydneys);

        

        return view('index.hasilsydney-m', compact('sydney','sydneys','items'));
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
 public function showanalisissydneym()
    {
        $sydney = Sydney::all()->last();

         $sydneys = Sydney::orderBy('periode','desc')->paginate(10);

        $collection = collect($sydneys);


        
        
        return view('index.analisissydney-m', compact('sydney','sydneys'));
    }
public function searchResultSydneym(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $sydney = Sydney::all()->last();

        $sydneys = Sydney::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisissydney-m', compact('sydney','sydneys'));
    }
//     public function showcambodia()
//     {
//         $cambodia = Cambodia::all()->last();

//         $cambodias = Cambodia::all();

//         $collection = collect($cambodias);

//         $sorted = $collection->sortByDesc('periode');
        

//         return view('index.cambodia', compact('cambodia','sorted'));
//     }
	
    public function showcambodia()
    {
        $cambodia = Cambodia::all()->last();

    	$cambodias = Cambodia::all();

        $collection = collect($cambodias);

        $sorted = $collection->sortByDesc('periode');

        $users = Cambodia::paginate(10);
        $cmbodia = Cambodia::orderBy('periode','desc')->paginate(30);
        $cmb_number = Cambodia::orderBy('periode','asc')->first(['number'])->paginate(10);
        $cmb_as=array();
        $cmb_kop=array();
        $cmb_kepala=array();
        $cmb_ekor=array();
        $as=array();
        foreach($cmbodia as $cmb){
            $cmb_as[]=substr($cmb->number,0,1);  
            $cmb_kop[]=substr($cmb->number,1,1); 
            $cmb_kepala[]=substr($cmb->number,2,1); 
            $cmb_ekor[]=substr($cmb->number,3,1);  
        }
        $val_as=array_count_values($cmb_as);
        $val_kop=array_count_values($cmb_kop);
        $val_kepala=array_count_values($cmb_kepala);
        $val_ekor=array_count_values($cmb_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($cmb_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($cmb_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($cmb_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($cmb_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($cmb_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($cmb_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($cmb_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($cmb_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.cambodia', compact('cambodia','cmbodia','sorted','users','cmb_number','cmb_as','cmb_kop','cmb_kepala','cmb_ekor','cmb','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
    public function showhasilcambodia(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate($items);

        $collection = collect($cambodias);

        

        return view('index.hasilcambodia', compact('cambodia','cambodias','items'));
    }
    public function showhasilcambodiam(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate($items);

        $collection = collect($cambodias);

        

        return view('index.hasilcambodia-m', compact('cambodia','cambodias','items'));
    }
     public function showanalisiscambodia()
    {
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);

	
        
        
        return view('index.analisiscambodia', compact('cambodia','cambodias'));
    }
    public function searchResultCambodia(Request $request)
    {
    	$startDate = Carbon::now()->toDateString();
	    if($request->startDate){
		$startDate = $request->startDate;    
	    }
	$endDate = Carbon::now()->toDateString();
	    if($request->startDate){
		$endDate = $request->endDate; 
	    }
        

        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisiscambodia', compact('cambodia','cambodias'));
    }
	
public function showanalisiscambodiam()
    {
        $cambodia = Cambodia::all()->last();

         $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);


        
        
        return view('index.analisiscambodia-m', compact('cambodia','cambodias'));
    }
    public function searchResultCambodiam(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisiscambodia-m', compact('cambodia','cambodias'));
    }
//     public function showtaiwan()
//     {
//         $taiwan = Taiwan::all()->last();

//         $taiwans = Taiwan::all();
        
//         $collection = collect($taiwans);

//         $sorted = $collection->sortByDesc('periode');

//         return view('index.taiwan', compact('taiwan','sorted'));
//     }
	
    public function showtaiwan()
    {
        $taiwans = Taiwan::all();
        
        $collection = collect($taiwans);

        $sorted = $collection->sortByDesc('periode');

        $users = Taiwan::paginate(10);
        $taiwn = Taiwan::orderBy('periode','desc')->paginate(30);
        $twn_number = Taiwan::orderBy('periode','asc')->first(['number'])->paginate(10);
        $twn_as=array();
        $twn_kop=array();
        $twn_kepala=array();
        $twn_ekor=array();
        $as=array();
        foreach($taiwn as $twn){
            $twn_as[]=substr($twn->number,0,1);  
            $twn_kop[]=substr($twn->number,1,1); 
            $twn_kepala[]=substr($twn->number,2,1); 
            $twn_ekor[]=substr($twn->number,3,1);  
        }
        $val_as=array_count_values($twn_as);
        $val_kop=array_count_values($twn_kop);
        $val_kepala=array_count_values($twn_kepala);
        $val_ekor=array_count_values($twn_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($twn_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($twn_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($twn_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($twn_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($twn_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($twn_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($twn_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($twn_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.taiwan', compact('taiwn','sorted','users','twn_number','twn_as','twn_kop','twn_kepala','twn_ekor','twn','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
	
    public function showhasiltaiwan(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate($items);

        $collection = collect($taiwans);

        

        return view('index.hasiltaiwan', compact('taiwan','taiwans','items'));
    }
    public function showhasiltaiwanm(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate($items);

        $collection = collect($taiwans);

        

        return view('index.hasiltaiwan-m', compact('taiwan','taiwans','items'));
    }
    public function showanalisistaiwan()
    {
        $taiwan = Taiwan::all()->last();

         $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);


        
        
        return view('index.analisistaiwan', compact('taiwan','taiwans'));
    }
    public function searchResultTaiwan(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisistaiwan', compact('taiwan','taiwans'));
    }
public function showanalisistaiwanm()
    {
        $taiwan = Taiwan::all()->last();

         $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);


        
        
        return view('index.analisistaiwan-m', compact('taiwan','taiwans'));
    }
    public function searchResultTaiwanm(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisistaiwan-m', compact('taiwan','taiwans'));
    }
//     public function showchina()
//     {
//         $china = China::all()->last();

//         $chinas = China::all();
        
//         $collection = collect($chinas);

//         $sorted = $collection->sortByDesc('periode');

//         return view('index.china', compact('china','sorted'));
//     }
	
    public function showchina()
    {
        
	$china = China::all()->last();
        $chinas = China::all();
        
        $collection = collect($chinas);

        $sorted = $collection->sortByDesc('periode');

        $users = China::paginate(10);
        $chaina = China::orderBy('periode','desc')->paginate(30);
        $chn_number = China::orderBy('periode','asc')->first(['number'])->paginate(10);
        $chn_as=array();
        $chn_kop=array();
        $chn_kepala=array();
        $chn_ekor=array();
        $as=array();
        foreach($chaina as $chn){
            $chn_as[]=substr($chn->number,0,1);  
            $chn_kop[]=substr($chn->number,1,1); 
            $chn_kepala[]=substr($chn->number,2,1); 
            $chn_ekor[]=substr($chn->number,3,1);  
        }
        $val_as=array_count_values($chn_as);
        $val_kop=array_count_values($chn_kop);
        $val_kepala=array_count_values($chn_kepala);
        $val_ekor=array_count_values($chn_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($chn_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($chn_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($chn_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($chn_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($chn_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($chn_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($chn_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($chn_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.china', compact('china','chaina','sorted','users','chn_number','chn_as','chn_kop','chn_kepala','chn_ekor','chn','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
	
    public function showhasilchina(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->paginate($items);

        $collection = collect($chinas);

       

        return view('index.hasilchina', compact('china','chinas','items'));
    }
    public function showhasilchinam(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->paginate($items);

        $collection = collect($chinas);

       

        return view('index.hasilchina-m', compact('china','chinas','items'));
    }
    public function showanalisischina()
    {
        $china = China::all()->last();

         $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);


        
        
        return view('index.analisischina', compact('china','chinas'));
    }
    public function searchResultChina(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $china = China::all()->last();

        $chinas = China::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisischina', compact('china','chinas'));
    }
public function showanalisischinam()
    {
        $china = China::all()->last();

         $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);


        
        
        return view('index.analisischina-m', compact('china','chinas'));
    }
    public function searchResultChinam(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $china = China::all()->last();

        $chinas = China::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisischina-m', compact('china','chinas'));
    }
//     public function showhongkong()
//     {
//         $hongkong = Hongkong::all()->last();

//         $hongkongs = Hongkong::all();
        
//         $collection = collect($hongkongs);

//         $sorted = $collection->sortByDesc('periode');

//         return view('index.hongkong', compact('hongkong','sorted'));
//     }
	
    public function showhongkong()
    {
        

        $hongkongs = Hongkong::all();
        
        $collection = collect($hongkongs);

        $sorted = $collection->sortByDesc('periode');

        $users = Hongkong::paginate(10);
        $hongkg = Hongkong::orderBy('periode','desc')->paginate(30);
        $hkg_number = Hongkong::orderBy('periode','asc')->first(['number'])->paginate(10);
        $hkg_as=array();
        $hkg_kop=array();
        $hkg_kepala=array();
        $hkg_ekor=array();
        $as=array();
        foreach($hongkg as $hkg){
            $hkg_as[]=substr($hkg->number,0,1);  
            $hkg_kop[]=substr($hkg->number,1,1); 
            $hkg_kepala[]=substr($hkg->number,2,1); 
            $hkg_ekor[]=substr($hkg->number,3,1);  
        }
        $val_as=array_count_values($hkg_as);
        $val_kop=array_count_values($hkg_kop);
        $val_kepala=array_count_values($hkg_kepala);
        $val_ekor=array_count_values($hkg_ekor);
	    if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
	    if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
	    if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
	    if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
	    if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
	    if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
	    if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
	    if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
	    if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
	    if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
	    
	    if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
	    if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
	    if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
	    if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
	    if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
	    if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
	    if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
	    if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
	    if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
	    if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

	    if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
	    if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
	    if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
	    if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
	    if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
	    if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
	    if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
	    if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
	    if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
	    if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

	    if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
	    if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
	    if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
	    if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
	    if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
	    if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
	    if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
	    if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
	    if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
	    if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
	$arr_as=array();
	$arr_kop=array();
	$arr_kepala=array();
	$arr_ekor=array();
	array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
	array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
	array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
	array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($hkg_as, function($value){
       	    return $value < 5;
	});
	$temp_kop = array_filter($hkg_kop, function($value){
	    return $value < 5;
	});
	$temp_kepala = array_filter($hkg_kepala, function($value){
	    return $value < 5;
	});
	$temp_ekor = array_filter($hkg_ekor, function($value){
	    return $value < 5;
	});
	$val_as = array_filter($hkg_as, function($value){
	    return $value % 2;
	});
	$val_kop = array_filter($hkg_kop, function($value){
	    return $value % 2;
	});
	$val_kepala = array_filter($hkg_kepala, function($value){
	    return $value % 2;
	});
	$val_ekor = array_filter($hkg_ekor, function($value){
	    return $value % 2;
	});
	    ////Ganjil Genap AS
	if(count($val_as) < 15){
	    $gg_as="Genap";
	}elseif(count($val_as) > 15) {
	    $gg_as="Ganjil";
	}elseif(count($val_as) == 15){
	    $gg_as="Rata";
	}
	   ////Ganjil Genap KOP 
	if(count($val_kop) < 15){
	    $gg_kop="Genap";
	}elseif(count($val_kop) > 15) {
	    $gg_kop="Ganjil";
	}elseif(count($val_kop) == 15){
	    $gg_kop="Rata";
	}
	   ////Ganjil Genap KEPALA
	if(count($val_kepala) < 15){
	    $gg_kepala="Genap";
	}elseif(count($val_kepala) > 15) {
	    $gg_kepala="Ganjil";
	}elseif(count($val_kepala) == 15){
	    $gg_kepala="Rata";
	}
	   ////Ganjil Genap EKOR
	if(count($val_ekor) < 15){
	    $gg_ekor="Genap";
	}elseif(count($val_ekor) > 15) {
	    $gg_ekor="Ganjil";
	}elseif(count($val_ekor) == 15){
	    $gg_ekor="Rata";
	}
	    ////Besar Kecil AS
	if(count($temp_as) < 15){
	    $majoritas_as='Besar';
	}elseif(count($temp_as) > 15){
	    $majoritas_as='Kecil';
	}elseif(count($temp_as) == 15){
	    $majoritas_as='Rata';
	}
	   ////Besar Kecil KOP    
	if(count($temp_kop) < 15){
	    $majoritas_kop='Besar';
	}elseif(count($temp_kop) > 15){
	    $majoritas_kop='Kecil';
	}elseif(count($temp_kop) == 15){
	    $majoritas_kop='Rata';
	}
	    ////Besar Kecil KEPALA
	if(count($temp_kepala) < 15){
	    $majoritas_kepala='Besar';
	}elseif(count($temp_kepala) > 15){
	    $majoritas_kepala='Kecil';
	}elseif(count($temp_kepala) == 15){
	    $majoritas_kepala='Rata';
	}
	    ////Besar Kecil EKOR
	if(count($temp_ekor) < 15){
	    $majoritas_ekor='Besar';
	}elseif(count($temp_ekor) > 15){
	    $majoritas_ekor='Kecil';
	}elseif(count($temp_ekor) == 15){
	    $majoritas_ekor='Rata';
	}
    	return view('index.hongkong', compact('hongkg','sorted','users','hkg_number','hkg_as','hkg_kop','hkg_kepala','hkg_ekor','hkg','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
	
    public function showhasilhongkong(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate($items);

        $collection = collect($hongkongs);

        

        return view('index.hasilhongkong', compact('hongkong','hongkongs','items'));
    }
    public function showhasilhongkongm(Request $request)
    {
        $items = $request->items ?? 10; 
        
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate($items);

        $collection = collect($hongkongs);

        

        return view('index.hasilhongkong-m', compact('hongkong','hongkongs','items'));
    }
    public function showanalisishongkong()
    {
        $hongkong = Hongkong::all()->last();

         $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);


        
        
        return view('index.analisishongkong', compact('hongkong','hongkongs'));
    }
    public function searchResultHongkong(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisishongkong', compact('hongkong','hongkongs'));
    }
public function showanalisishongkongm()
    {
        $hongkong = Hongkong::all()->last();

         $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);


        
        
        return view('index.analisishongkong-m', compact('hongkong','hongkongs'));
    }
    public function searchResultHongkongm(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisishongkong-m', compact('hongkong','hongkongs'));
    }
    public function showjapan()
    {
        $japan = Japan::all()->last();

        $japans = Japan::all();

        $collection = collect($japans);

        $sorted = $collection->sortByDesc('periode');

        $users = Japan::paginate(10);
        $nippon = Japan::orderBy('periode','desc')->paginate(30);
        $jpn_number = Japan::orderBy('periode','asc')->first(['number'])->paginate(10);
        $jpn_as=array();
        $jpn_kop=array();
        $jpn_kepala=array();
        $jpn_ekor=array();
        $as=array();
        foreach($nippon as $jpn){
            $jpn_as[]=substr($jpn->number,0,1);  
            $jpn_kop[]=substr($jpn->number,1,1); 
            $jpn_kepala[]=substr($jpn->number,2,1); 
            $jpn_ekor[]=substr($jpn->number,3,1);  
        }
        $val_as=array_count_values($jpn_as);
        $val_kop=array_count_values($jpn_kop);
        $val_kepala=array_count_values($jpn_kepala);
        $val_ekor=array_count_values($jpn_ekor);
        if(!empty($val_as['0'])){ $as_0= $val_as['0']; }else { $as_0=0; }
        if(!empty($val_as['1'])){ $as_1= $val_as['1']; }else { $as_1=0; }
        if(!empty($val_as['2'])){ $as_2= $val_as['2']; }else { $as_2=0; }
        if(!empty($val_as['3'])){ $as_3= $val_as['3']; }else { $as_3=0; }
        if(!empty($val_as['4'])){ $as_4= $val_as['4']; }else { $as_4=0; }
        if(!empty($val_as['5'])){ $as_5= $val_as['5']; }else { $as_5=0; }
        if(!empty($val_as['6'])){ $as_6= $val_as['6']; }else { $as_6=0; }
        if(!empty($val_as['7'])){ $as_7= $val_as['7']; }else { $as_7=0; }
        if(!empty($val_as['8'])){ $as_8= $val_as['8']; }else { $as_8=0; }
        if(!empty($val_as['9'])){ $as_9= $val_as['9']; }else { $as_9=0; }
        
        if(!empty($val_kop['0'])){ $kop_0= $val_kop['0']; }else { $kop_0=0; }
        if(!empty($val_kop['1'])){ $kop_1= $val_kop['1']; }else { $kop_1=0; }
        if(!empty($val_kop['2'])){ $kop_2= $val_kop['2']; }else { $kop_2=0; }
        if(!empty($val_kop['3'])){ $kop_3= $val_kop['3']; }else { $kop_3=0; }
        if(!empty($val_kop['4'])){ $kop_4= $val_kop['4']; }else { $kop_4=0; }
        if(!empty($val_kop['5'])){ $kop_5= $val_kop['5']; }else { $kop_5=0; }
        if(!empty($val_kop['6'])){ $kop_6= $val_kop['6']; }else { $kop_6=0; }
        if(!empty($val_kop['7'])){ $kop_7= $val_kop['7']; }else { $kop_7=0; }
        if(!empty($val_kop['8'])){ $kop_8= $val_kop['8']; }else { $kop_8=0; }
        if(!empty($val_kop['9'])){ $kop_9= $val_kop['9']; }else { $kop_9=0; }

        if(!empty($val_kepala['0'])){ $kepala_0= $val_kepala['0']; }else { $kepala_0=0; }
        if(!empty($val_kepala['1'])){ $kepala_1= $val_kepala['1']; }else { $kepala_1=0; }
        if(!empty($val_kepala['2'])){ $kepala_2= $val_kepala['2']; }else { $kepala_2=0; }
        if(!empty($val_kepala['3'])){ $kepala_3= $val_kepala['3']; }else { $kepala_3=0; }
        if(!empty($val_kepala['4'])){ $kepala_4= $val_kepala['4']; }else { $kepala_4=0; }
        if(!empty($val_kepala['5'])){ $kepala_5= $val_kepala['5']; }else { $kepala_5=0; }
        if(!empty($val_kepala['6'])){ $kepala_6= $val_kepala['6']; }else { $kepala_6=0; }
        if(!empty($val_kepala['7'])){ $kepala_7= $val_kepala['7']; }else { $kepala_7=0; }
        if(!empty($val_kepala['8'])){ $kepala_8= $val_kepala['8']; }else { $kepala_8=0; }
        if(!empty($val_kepala['9'])){ $kepala_9= $val_kepala['9']; }else { $kepala_9=0; }

        if(!empty($val_ekor['0'])){ $ekor_0= $val_ekor['0']; }else { $ekor_0=0; }
        if(!empty($val_ekor['1'])){ $ekor_1= $val_ekor['1']; }else { $ekor_1=0; }
        if(!empty($val_ekor['2'])){ $ekor_2= $val_ekor['2']; }else { $ekor_2=0; }
        if(!empty($val_ekor['3'])){ $ekor_3= $val_ekor['3']; }else { $ekor_3=0; }
        if(!empty($val_ekor['4'])){ $ekor_4= $val_ekor['4']; }else { $ekor_4=0; }
        if(!empty($val_ekor['5'])){ $ekor_5= $val_ekor['5']; }else { $ekor_5=0; }
        if(!empty($val_ekor['6'])){ $ekor_6= $val_ekor['6']; }else { $ekor_6=0; }
        if(!empty($val_ekor['7'])){ $ekor_7= $val_ekor['7']; }else { $ekor_7=0; }
        if(!empty($val_ekor['8'])){ $ekor_8= $val_ekor['8']; }else { $ekor_8=0; }
        if(!empty($val_ekor['9'])){ $ekor_9= $val_ekor['9']; }else { $ekor_9=0; }
    $arr_as=array();
    $arr_kop=array();
    $arr_kepala=array();
    $arr_ekor=array();
    array_push($arr_as,$as_0,$as_1,$as_2,$as_3,$as_4,$as_5,$as_6,$as_7,$as_8,$as_9);
    array_push($arr_kop,$kop_0,$kop_1,$kop_2,$kop_3,$kop_4,$kop_5,$kop_6,$kop_7,$kop_8,$kop_9);
    array_push($arr_kepala,$kepala_0,$kepala_1,$kepala_2,$kepala_3,$kepala_4,$kepala_5,$kepala_6,$kepala_7,$kepala_8,$kepala_9);
    array_push($arr_ekor,$ekor_0,$ekor_1,$ekor_2,$ekor_3,$ekor_4,$ekor_5,$ekor_6,$ekor_7,$ekor_8,$ekor_9);
        $temp_as = array_filter($jpn_as, function($value){
            return $value < 5;
    });
    $temp_kop = array_filter($jpn_kop, function($value){
        return $value < 5;
    });
    $temp_kepala = array_filter($jpn_kepala, function($value){
        return $value < 5;
    });
    $temp_ekor = array_filter($jpn_ekor, function($value){
        return $value < 5;
    });
    $val_as = array_filter($jpn_as, function($value){
        return $value % 2;
    });
    $val_kop = array_filter($jpn_kop, function($value){
        return $value % 2;
    });
    $val_kepala = array_filter($jpn_kepala, function($value){
        return $value % 2;
    });
    $val_ekor = array_filter($jpn_ekor, function($value){
        return $value % 2;
    });
        ////Ganjil Genap AS
    if(count($val_as) < 15){
        $gg_as="Genap";
    }elseif(count($val_as) > 15) {
        $gg_as="Ganjil";
    }elseif(count($val_as) == 15){
        $gg_as="Rata";
    }
       ////Ganjil Genap KOP 
    if(count($val_kop) < 15){
        $gg_kop="Genap";
    }elseif(count($val_kop) > 15) {
        $gg_kop="Ganjil";
    }elseif(count($val_kop) == 15){
        $gg_kop="Rata";
    }
       ////Ganjil Genap KEPALA
    if(count($val_kepala) < 15){
        $gg_kepala="Genap";
    }elseif(count($val_kepala) > 15) {
        $gg_kepala="Ganjil";
    }elseif(count($val_kepala) == 15){
        $gg_kepala="Rata";
    }
       ////Ganjil Genap EKOR
    if(count($val_ekor) < 15){
        $gg_ekor="Genap";
    }elseif(count($val_ekor) > 15) {
        $gg_ekor="Ganjil";
    }elseif(count($val_ekor) == 15){
        $gg_ekor="Rata";
    }
        ////Besar Kecil AS
    if(count($temp_as) < 15){
        $majoritas_as='Besar';
    }elseif(count($temp_as) > 15){
        $majoritas_as='Kecil';
    }elseif(count($temp_as) == 15){
        $majoritas_as='Rata';
    }
       ////Besar Kecil KOP    
    if(count($temp_kop) < 15){
        $majoritas_kop='Besar';
    }elseif(count($temp_kop) > 15){
        $majoritas_kop='Kecil';
    }elseif(count($temp_kop) == 15){
        $majoritas_kop='Rata';
    }
        ////Besar Kecil KEPALA
    if(count($temp_kepala) < 15){
        $majoritas_kepala='Besar';
    }elseif(count($temp_kepala) > 15){
        $majoritas_kepala='Kecil';
    }elseif(count($temp_kepala) == 15){
        $majoritas_kepala='Rata';
    }
        ////Besar Kecil EKOR
    if(count($temp_ekor) < 15){
        $majoritas_ekor='Besar';
    }elseif(count($temp_ekor) > 15){
        $majoritas_ekor='Kecil';
    }elseif(count($temp_ekor) == 15){
        $majoritas_ekor='Rata';
    }
        return view('index.japan', compact('japan','nippon','sorted','users','jpn_number','jpn_as','jpn_kop','jpn_kepala','jpn_ekor','jpn','majoritas_as','majoritas_kop','majoritas_kepala','majoritas_ekor','val_as','gg_as','gg_kop','gg_kepala','gg_ekor','arr_as','arr_kop','arr_kepala','arr_ekor'));
    }
    
    public function showhasiljapan(Request $request)
    {
        $items = $request->items ?? 10;  
        
        $japan = Japan::all()->last();

        $japans = Japan::orderBy('periode','desc')->paginate($items);

        $collection = collect($japans);

        
        return view('index.hasiljapan', compact('japan','japans','items'));
    }

    public function showhasiljapanm(Request $request)
    {
        $items = $request->items ?? 10;  
        
        $japan = Japan::all()->last();

        $japans = Japan::orderBy('periode','desc')->paginate($items);

        $collection = collect($japans);

        
        return view('index.hasiljapan-m', compact('japan','japans','users','items'));
    }

    public function showprediksijpn()
    {
        $prediksijpn = Prediksijpn::all()->last();

        $prediksijpns = Prediksijpn::all();

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

        $collection = collect($prediksijpns);
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

        return view('index.prediksijpn', compact('prediksijpn','prediksijpns', 'prediksisyd', 'prediksisyds', 'prediksicmb', 'prediksicmbs', 'prediksitw', 'prediksitws', 'prediksichn', 'prediksichns', 'prediksihk', 'prediksihks','sorted','sorted1','sorted2','sorted3','sorted4','sorted5'));
    }
    
    public function showanalisisjapan()
    {
        $japan = Japan::all()->last();

         $japans = Japan::orderBy('periode','desc')->paginate(10);

        $collection = collect($japans);
        $jpn_number = Japan::orderBy('periode','desc')->first(['number'])->paginate(10);
        $numb=substr("$jpn_number",0,1);
        $jpn_as=array();
        $jpn_kop=array();
        $jpn_kepala=array();
        $jpn_ekor=array();
        foreach($japans as $jpn){
            $jpn_as[]=substr($jpn->number,0,1);  
            $jpn_kop[]=substr($jpn->number,0,2); 
            $jpn_kepala[]=substr($jpn->number,0,3); 
            $jpn_ekor[]=substr($jpn->number,0,4);  
        }
        
        return view('index.analisisjapan', compact('japan','japans','jpn_number','numb','jpn','jpn_as','jpn_kop','jpn_kepala','jpn_ekor'));
    }
    public function searchResultJapan(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $japan = Japan::all()->last();

        $japans = Japan::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisisjapan', compact('japan','japans'));
    }
 public function showanalisisjapanm()
    {
        $japan = Japan::all()->last();

         $japans = Japan::orderBy('periode','desc')->paginate(10);

        $collection = collect($japans);
        $jpn_number = Japan::orderBy('periode','desc')->first(['number'])->paginate(10);
        $numb=substr("$jpn_number",0,1);
        $jpn_as=array();
        $jpn_kop=array();
        $jpn_kepala=array();
        $jpn_ekor=array();
        foreach($japans as $jpn){
            $jpn_as[]=substr($jpn->number,0,1);  
            $jpn_kop[]=substr($jpn->number,0,2); 
            $jpn_kepala[]=substr($jpn->number,0,3); 
            $jpn_ekor[]=substr($jpn->number,0,4);  
        }
        
        return view('index.analisisjapan-m', compact('japan','japans','jpn_number','numb','jpn','jpn_as','jpn_kop','jpn_kepala','jpn_ekor'));
    }
    public function searchResultJapanm(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $japan = Japan::all()->last();

        $japans = Japan::whereBetween('tanggal', array( $startDate , $endDate))->orderBy('periode','desc')->get();

        return view('index.analisisjapan-m', compact('japan','japans'));
    }
    public function showbukumimpi()
    {
        return view('index.bukumimpi');
    }
    public function showbukumimpim()
    {
        return view('index.bukumimpi-m', compact('bukumimpi'));
    }
    public function showcomingsoon()
    {
        return view('index.comingsoon', compact('comingsoon','comingsoons'));
    }
    public function showjadwalkeluaran()
    {
        return view('index.jadwalkeluaran');
    }
    public function showjadwalkeluaranm()
    {
        return view('index.jadwalkeluaran-m');
    }
    public function shownumbergenerator()
    {
        return view('index.numbergenerator');
    }


}
