@extends('layouts.index')

@section('bukumimpi')
<?php function get_script() { ?>
  <style type="text/css">
/*Form styles*/
.styled fieldset, .styled fieldset ol, .styled fieldset li {border: none; padding: 0; margin: 0;}
.styled {font-family: Arial, sans-serif; font-size: 15px; color: #333;}
.styled fieldset {padding: 20px 0}
.styled input.text-input {background: none; border: 1px solid #ccc; padding: 5px; width: 246px; font-size: 16px; line-height: 1em;}
</style>
<?php } ?>  
<div class="row visible-sm visible-xs">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>BUKU MIMPI</h3>
                  </div>  
                    
                </div>
                
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <form id="live-search" action="" class="styled" method="post">
                            <fieldset>
                                <input type="text" class="text-input" id="filter" value="" />
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
                
                <ul class="list-group commentlist" id="contact-list" style="max-height: 620px; overflow: hidden;">
                    <li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-0.jpg" alt="00" class="img-responsive" />
                            <span class="name hide">mimpi 00 penyair - tapir - kupas kelapa - sempritan - tanggalan - pindah rumah - bulan - kumbokarno</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-1.jpg" alt="01" class="img-responsive" />
                            <span class="name hide">mimpi 01 - setan - ikan bandeng - jual ikan - jambu mete - tangan - obor - batara kala</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-2.jpg" alt="02" class="img-responsive" />
                            <span class="name hide">mimpi 02 - sarjana - bekicot - lompat tinggi - wortel - jangkar - sandal - batara bromo</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-3.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 03 - orang mati - angsa - lompat galah - sawi - kaki - cemburu - subali</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-4.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 04 - kwan im - balon - petai - lompat jauh - kangkung - merak - baca buku - dewi ratih</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-5.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 05 - kepala rampok - singa - jemur baju - loncat indah - kayu manis - merica - kereta api - garu langit</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-6.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 06 - dewi bulan - kelinci - bantuan - renang - kapas - boneka - daun teh - dewi seri</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-7.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 07 - pelayan - babi - kapal keruk - perahu layar - bawang - pancing - arang - sulastri</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-8.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 08 - maling kecil - macan - terlanggar - motor boot - kecubung - daun sop - pasar - t.mariam</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-9.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 09 - jendral - kerbau - jala - mendayung - kates - pinang - gadis - bima</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-10.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 10 - kelenteng - kelabang - bir - menyelam - kelapa - rileks - panjat pohon - sembahyang</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-11.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 11 - menteri serakah - anjing - jamur - lari cepat - kipas - kerudung - sapu - sengkuni</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-12.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 12 - penasihat perang - kuda - lemon - lari gawang - bola lampu - luku - air panas - wibisana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-13.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 13 - penjaga pintu - gajah - sarang burung - lari estafet - keris - kipas angin - cuci rambut - prabu kesa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-14.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 14 - potong babi - unta - beras - tolak peluru - jembatan - kentang - spet - jaya langsuan</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-15.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 15 - hakim - tikus - lengkuas - lempar martil - kantor pos - karantina - skrup - kresna</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-16.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 16 - sakit gudik - tawon - durian - lempar cakram - nenas - surat - pohon pisang - jembawan</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-17.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 17 - pemadat - bangau - aren - lempar lembing - durian - telepon - api - buto terong</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-18.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 18 - kas uang - kucing - lombok - polo air - kantor polisi - parang - jual es - bisma</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-19.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 19 - cewek metropolitan - kupu kupu - lotre - sepak bola - srikaya - cabut gigi - ban sepeda - banowati</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-20.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 20 - istri sejati - lalat - kedai tuak - bola volley - ban mobil - bermesraan - palu - satyawati</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-21.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 21 - pelacur umum - walet - memotret - bulu tangkis - kapak - bayam - permen - lesmanawati</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-22.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 22 - peti mati - capung - cuci muka - tennis - terong - buah kana cina - harmonika - sembadra</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-23.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 23 - setan gantung - kera - potong ayam - bola basket - pisang - bedak - piano - wilkampana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-24.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 24 - sumber air - kodok - bersolek - ping pong - wortel - kelentang - sikat gigi - dewa ruci</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-25.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 25 - menantu raja - rajawali - menelepon - bola kasti - jagung - memasak - pasta gigi - kangsa dewa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-26.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 26 - raja - naga - kebaya - hockey - ganggang - uang logam - mesin jahit - samiaji</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-27.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 27 - wanita cantik - kura kura - otak - billiard - sabun bubuk - bidan - isi minyak - dewi supraba</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-28.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 28 - pemotong kuku - ayam - pala - menembak - tomat - montir - jarum - raden nakula</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-29.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 29 - pendeta sakti - belut - truk barang - panahan - kursi - uang perak - koran - sidi wacana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-30.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 30 - nelayan - ikan mas - tas - angkat besi - belimbing - pembunuh - wc - nagatamala</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-31.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 31 - kelamin - udang - cari uang - senam - sangkar - jas hujan - cacing pita - yuyu rumpung</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-32.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 32 - ahli nujum - ular - cari kerang - yudo - kamar mandi - sarang lebah - tali - abiyasa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-33.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 33 - pengemis - laba laba - uang - gulat - sabun - gigi - tahu - petruk</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-34.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 34 - orang buta - rusa - jelarut - silat - jamu - paru paru - merpati - destarata</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-35.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 35 - wanita - kambing - boncengan - tinju - lambung - batu - jalan jalan - drupadi</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-36.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 36 - pendeta wanita - musang - apotik - balapan sepeda - manggis - sekop - kacamata - sayempraba</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-37.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 37 - si bungkuk - ikan gabus - bra - balapan mobil - anggur - pacaran - truk - gareng</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-38.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 38 - putra raja - cendrawasih - hamil - balapan motor - tong - kapal perang - engsel - utari</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-39.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 39 - kekasih - kalajengking - balapan kuda - topi - bemo - kedelai - marasoma</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-40.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 40 - penolong - gelatik - jual jagung - golf - peci - duku - tang - widura</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-41.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 41 - pahlawan - kepiting - berkuda - lilin - paku - sabuk - warsaya</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-42.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 42 - jejaka tua - buaya - marinir - berjalan - catur - pakis - dokter - widakta</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-43.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 43 - janda muda - ikan suro - bom - anggar - mawar - langsat - grendel - sembadra</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-44.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 44 - brandal - badak - gadung - ski air - sisir - kuaci - seruling - citraksa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-45.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 45 - pengembara - banteng - mata mata - terbang layang - kendi - tas - ketupat - rama</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-46.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 46 - nenek moyang - orang utan - tukar ban - terjun bebas - toko - rumah sakit - sikat - hyang wenang</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-47.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 47 - banci - keladi - zebra - upacara bendera - hotel - tangga - sirkus - stuna</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-48.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 48 - si ceroboh - landak - labu - main catur - bioskop - garuk - botol obat - dasamuka</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-49.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 49 - drakula - kelelawar - orang beranak - mendaki gunung - cetok - lipstik - rok - betara durga</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-50.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi 50- orang eskimo - beruang - daun sirih - pembawa obor - pacul - guru - jual sate - bagong</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-51.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 51 - ahli filsafat - kerang - lonceng - patel lele - tebu - celana - rapat kerja - narada</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-52.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 52 - raja laut - ikan paus - buah nona - main tali - dompet - minum racun - matahari - antasena</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-53.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 53 - penjual silat - ikan duri - garam - akrobat - rambutan - kirim surat - taxi - abimanyu</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-54.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 54 - raja kera - lele - kursi malas - sepatu roda - kalung - juara - dokar - hanoman </span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-55.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 55 - pertapa - kangguru - memetik daun - kasti - gelang - di kelenteng - pengaron - raden seta</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-56.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 56 - budak - ikan duyung - makan durian - kasti - kenangan - cikar - bengkung - raden seta</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-57.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 57 - anak sakti - ulat sutra - kunyit - layang layang - sepatu - jual bakso - tempat tidur - gatot kaca</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-58.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 58 - penari - cumi cumi - hantu - kelereng - sekolahan - pacuan kuda - rumah - selir</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-59.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 59 - putra raja - kakak tua - kaos - dakon - kedondong - jam dinding - kencur - raden lesmana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-60.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 60 - kepala polisi - cicak - pot bunga - karambol - delima - curi ayam - handuk - sentiyaki - </span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-61.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 61 - pedagang - kecoa - gendongan - mayat - kacamata - buku - roti - baladewa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-62.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 62 - pagoda - walang kadung - meriam - petan - termos - terhalang - selendang - sapta arga - </span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-63.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 63 - pendekar wanita - kumbang - belanja - treksando - bantal - jendela - talas - larasati</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-64.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 64 - dewa uang - kuda laut - ronggeng - bandulan - apel - guling - kecambah - batara indra</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-65.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 65 - raja setan - hiu - jipang - kayang - klompen - petromak - hisap candu - kalasrenggi</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-66.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 66 - dewa bumi - jerapah - sawatan - potong padi - sukun - korek ubi - gelas - antaboga</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-67.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 67 - penjual daging - burung unta - korek api - egrang - sendok - hadiah kekasih - kacang panjang - abilawa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-68.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 68 - pembuat pedang - burung hantu - naik jambe - ubi - garpu - pisau - sapi duel - cepot</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-69.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 69 - pencari jejak - mimi - gunung - engklek - gunting - tukang jam - peti mati - antareja</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-70.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 70 - panglima - keledai - tarik tambang - lampu minyak - rumah makan - ubi kayu - d karno</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-71.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 71 - pemburu - macan tutul - kemeja - loncat karet - sumur - kacang goreng - pistol mainan - pandu</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-72.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 72 - dewa langit - ikan dorang - menanam kelapa - sepak kenchi - kran air - arloji - tugu - batara guru</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-73.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 73 - tuan tanah - semut - ballpen - sempritan - anting anting - kemoceng - bintang - dursasana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-74.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 74 - bajak laut - pinguin - kenari - ketapel - gentong - radio - kamera - indrajit</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-75.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 75 - suami istri - bebek - kuini - balapan lari - nangka - jatuh - lemari - ratih kamajaya</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-76.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 76 - jendral wanita - nyamuk - kasur - teplekan - timbangan - mata - ambil air - srikandi</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-77.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 77 - walikota - penyu - cincin - bermain bekel - payung - pare - anjing bercinta - togog</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-78.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 78 - orang kaya - ikan gergaji - wajan - balapan becak - semangka - ketumbar - jual obat - lesmana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-79.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 79 - jendral serakah - orong orong - jagung - panco - jeruk bali - main main - kompor - suyudana</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-80.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 80 - kepala desa - bajing - pensil - apollo - bunga - ceret - siram sayur - semar</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-81.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 81 - penipu - kancil - janur aren - menyulam - cangkir - dam damkan - hidung - aswatama</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-82.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 82 - gembala sapi - kuda nil - lilin - kartu as - berlian - telinga - lencana - udawa -</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-83.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 83 - ibu suri - ikan layur - buncis - dadu - pipa - kumis - berkasihan - dewi kunti</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-84.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 84 - buddha - kalkun - bibir - koprol - kacang - berkunjung - kol - bagaspati</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-85.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 85 - penyihir wanita - jangkrik - rotan - latihan hansip - teratai - pintu - naik kapal - sarpakenaka</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-86.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 86 - pencabut nyawa - ikan sampan - dapat lencana - gerak badan - salak - rokok - timun - yamadipati </span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-87.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 87 - orang gila - burung betet - bengkuang - kerja bakti - botol - toilet - naik pesawat - burisrawa</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-88.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 88 - dewi naga - domba - bawang - balapan karung - jeruk manis - piring - meluku - wilutama</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-89.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 89 - pemabuk - ikan bendera - lampu merah - tambal ban - jeruk keprok - berciuman - ember - boma nara</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-90.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 90 - tahanan - trenggiling - ke pasar - perempatan jalan - sawah - berjudi - pil - shinta</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-91.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 91 - siluman air - serigala - tanam padi - ambulance - bambu - toples - kedai samsu - witaksini</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-92.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 92 - pendekar kipas besi - ikan tenggiri - kain - garis finish - alpukat - sarung - sabun - siti sundari</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-93.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 93 - penjilat - babi hutan - perahu - larangan - kaos kaki - jengkol - pondok - durna </span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-94.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 94 - kwan kong - ikan kakap - tidur - pemandian - jambu - jahit baju - pena - prabu salya</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-95.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 95 - petani - perkutut - pisau cukur - jalan raya - ceret listrik - menanam padi - kunci - irawan</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-96.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 96 - prajurit - ikan nus - selimut - laut - mangga - minyak angin - ayam betina - citrayuda</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-97.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 97 - raksasa - tokek - ambil kelapa - kaki brankas - sirsak - lemari es - tuli - prahasta</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-98.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 98 - penjaga malam - tongkol - kupas kelapa - kecelakaan - lengkeng - televisi - ubi obat - dewi trijata</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li><li class="list-group-item bg-white">
                        <div class="col-xs-12">
                            <img src="images/buku-mimpi/buku-mimpi-99.jpg" alt="Scott Stevens" class="img-responsive" />
                            <span class="name hide">mimpi - 99 - hidung belang - burung jalak - sawo - kodak - meja - bayi - menenun - arjuna</span><br/>
                        </div>
                        
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
  </div>
    
    


        
      </div>
    
                  
<?php get_script(); ?>
                </div>   <!-- end body -->   
          </div>
        </div>

@endsection
