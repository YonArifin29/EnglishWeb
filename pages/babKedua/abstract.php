<?php
    $template = "dashboard";
    $title = "abstract noun";
    $active2 = 'active';
    $activeNoun = 'active';
    $activeAbstract = 'active';
    $judul = "";
    $judul2 = "CONCRETE AND ABSTRACT NOUN";
    $hal = 4;
    $tombol = "
        <div class='btn btn-secondary btn-sm mb-2'>
            <a class='text-reset'href='?page=babKedua/concrete'>Sebelumnya</a>
        </div>
        <div class='btn btn-primary btn-sm ml-5 mb-2'>
            <a class='text-reset'href='?page=babKedua/countable'>Selanjutnya</a>
        </div>
    ";
    $konten = "
        <div class='row'>
            <div class='contain'>
                <p class='ml-2'><b>2. Abstract Noun (Kata Benda Tak Berwujud)</b></p>
                <p class='ml-4 paragraf'>
                    <i>Abstract Noun</i> adalah kata benda yang tidak memiliki wujud, tidak dapat dilihat, diraba oleh panca indra manusia, tetapi hanya dapat dibayangkan. Pada umumnya Abstract Noun terdiri atas kata benda yang tidak dapat dihitung (Uncountable Noun).<br>
                    Misalnya : <br>
                    <div class='ml-5'>
                        love (cinta); hate (benci); courage (keberanian); friendship (persahabatan); kindnes (kebaikan) brotherhood (persaudaraan); anger (kemarahan); freedom (kemerdekaan); dan lain-lain.
                    </div>
                </p>
                <p class='ml-4 paragraf'>
                    Abstract Noun dapat dibentuk dari kata sifat (adjective), kata kerja (verb) atau kata benda (noun) itu sendiri.
                </p>
                
                <ul>
                    <li>
                        <p>
                            <b>Dari Kata Sifat</b><br>
                            <ol type='a'>
                                <li>
                                    Dengan menambahkan akhiran <i>-ness</i> pada kata sifat.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("kind", "kind<i>ness</i>", "= kebaikan")."
                                        ".createTableRow("rude", "rude<i>ness</i>", "= kekasaran")."
                                        ".createTableRow("bad", "bad<i>ness</i>", "= keburukan")."
                                        ".createTableRow("big", "big<i>ness</i>", "= kebesaran")."
                                        ".createTableRow("fat", "fat<i>ness</i>", "= kegemukan")."
                                        ".createTableRow("sick", "sick<i>ness</i>", "= penyakit")."
                                        ".createTableRow("ill", "ill<i>ness</i>", "= penyakit")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-y</i>, <i>-ty</i>, <i>-ity</i> pada kata sifat.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("able", "abil<i>ity</i>", "= kemampuan")."
                                        ".createTableRow("pure", "pur<i>ity</i>", "= kesucian")."
                                        ".createTableRow("beautiful", "beaut<i>ty</i>", "= kecantikan")."
                                        ".createTableRow("honest", "honest<i>y</i>", "= kejujuran")."
                                        ".createTableRow("cruel", "cruel<i>ty</i>", "= kekejaman")."
                                            
                                    </table>
                                </li><br>
                                <li>
                                    Kata sifat yang berahiran dengan huruf <i>-t</i> diganti dengan <i>-ce</i> atau <i>-cy</i>.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("distant", "distant<i>ce</i>", "= jarak")." 
                                        ".createTableRow("patient", "patient<i>ce</i>", "= kesabaran")." 
                                        ".createTableRow("efficient", "efficien<i>cy</i>", "= efisiensi")." 
                                        ".createTableRow("absent", "absen<i>ce</i>", "= ketidakhadiran")." 
                                        ".createTableRow("different", "differen<i>ce</i>", "= perbedaan")." 
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahlan <i>-ion</i> pada kata sifat.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("correct", "correct<i>ion</i>", "= perbaikan")." 
                                        
                                    </table>
                                </li><br>
                                <li>
                                    Ada juga beberapa kata benda yang dibentuk dari kata sifat dengan bentuk yang khusus.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("angry", "<i>anger</i>", "= kemarahan")." 
                                        ".createTableRow("deep", "<i>depth</i>", "= kedalaman")." 
                                        ".createTableRow("proud", "<i>pride</i>", "= kebanggaan")." 
                                    </table>
                                </li>
                            </ol>
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Dari Kata Kerja</b><br>
                            <ol type='a'>
                                <li>
                                    Dengan menambahkan akhiran <i>-ment</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("appoint", "appoint<i>ment</i>", "= janji")."
                                        ".createTableRow("agree", "agree<i>ment</i>", "= persetujuan")."
                                        ".createTableRow("employ", "employ<i>ment</i>", "= pekerjaan")."
                                        ".createTableRow("judge", "judge<i>ment</i>", "= keputusan")."
                                        ".createTableRow("manage", "manage<i>ment</i>", "= pengurusan")."
                                        ".createTableRow("engage", "engage<i>ment</i>", "= pertunangan")."  
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ion</i>, <i>-tion</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("act", "act<i>ion</i>", "= perbuatan")."
                                        ".createTableRow("alter", "altera<i>tion</i>", "= penggantian")."
                                        ".createTableRow("correct", "correct<i>ion</i>", "= pembetulan")."
                                        ".createTableRow("nominate", "nomina<i>tion</i>", "= pengangkatan")."
                                        ".createTableRow("promote", "promot<i>ion</i>", "= kenaikan pangkat")."
                                        ".createTableRow("describe", "descrip<i>tion</i>", "= penggambaran")."
                                        ".createTableRow("decide", "decis<i>ion</i>", "= keputusan")."  
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ation</i>, <i>-cation</i>, <i>-ition</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("compete", "compet<i>ition</i>", "= persaingan")."
                                        ".createTableRow("compose", "compos<i>ition</i>", "= karangan")."
                                        ".createTableRow("repeat", "repeat<i>ition</i>", "= pengulangan")."
                                        ".createTableRow("expect", "expect<i>ation</i>", "= pengharapan")."
                                        ".createTableRow("apply", "appli<i>cation</i>", "= lamaran")."
                                        ".createTableRow("qualify", "qualifi<i>cation</i>", "= kualifikasi")."
                                        
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ance</i>, <i>-ence</i>, pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("hinder", "hinder<i>ance</i>", "= halangan")."
                                        ".createTableRow("differ", "differ<i>ence</i>", "= perbedaan")."
                                        ".createTableRow("enter", "enter<i>ance</i>", "= jalan masuk")."
                                        ".createTableRow("appear", "appear<i>ance</i>", "= kehadiran")."
                                        ".createTableRow("attend", "attend<i>ance</i>", "= kehadiran")."
                                        ".createTableRow("confide", "confid<i>ance</i>", "= kepercayaan")."
                                        ".createTableRow("obey", "obedi<i>ence</i>", "= kepatuhan ")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-t</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("complain", "complain<i>t</i>", "= keluhan")."
                                        ".createTableRow("deceive", "decei<i>t</i>", "= penipuan")."
                                        ".createTableRow("fly", "fligh<i>t</i>", "= penerbangan")."
                                        ".createTableRow("descend", "descen<i>t</i>", "= keturunan")." 
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-y</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("deliver", "deliver<i>y</i>", "= kiriman")."
                                        ".createTableRow("injure", "injur<i>y</i>", "= luka")."
                                        ".createTableRow("discover", "discover<i>y</i>", "= penemuan")."
                                        ".createTableRow("recover", "recover<i>y</i>", "= kesembuhan")."
                                        
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-er</i>, <i>-or</i>, <i>-ar</i>, <i>-ist</i>, <i>-ant</i>, <i>-int</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("beg", "begg<i>ar</i>", "= pengemis")."
                                        ".createTableRow("compose", "compose<i>er</i>", "= pengarang")."
                                        ".createTableRow("direct", "direct<i>or</i>", "= direktur")."
                                        ".createTableRow("farm", "farm<i>er</i>", "= petani")."
                                        ".createTableRow("drive", "driv<i>er</i>", "= pengemudi")."
                                        ".createTableRow("palay", "play<i>er</i>", "= pemain")."
                                        ".createTableRow("lead", "lead<i>er</i>", "= pemimpin")."
                                        ".createTableRow("manage", "manag<i>er</i>", "= pengurus")."
                                        ".createTableRow("serve", "serv<i>ant</i>", "= pelayan")."
                                        ".createTableRow("type", "tip<i>ist</i>", "= juru ketik")."  
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-al</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("arrive", "arriv<i>al</i>", "= kedatangan")."
                                        ".createTableRow("approve", "aprrov<i>al</i>", "= pengesahan")."
                                        ".createTableRow("propose", "propos<i>al</i>", "= usulan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-age</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("carry", "carri<i>age</i>", "= gerobak angkutan")."
                                        ".createTableRow("pack", "pack<i>age</i>", "= bungkusan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ery</i>, <i>-ary</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("bribe", "brib<i>ery</i>", "= penyuapan")."
                                        ".createTableRow("rob", "robb<i>ery</i>", "= perampokan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ure</i>, <i>-ture</i>, <i>-ature</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("furnish", "furni<i>ture</i>", "= perabot rumah")."
                                        ".createTableRow("please", "pleas<i>ure</i>", "= kesenangan")."
                                        ".createTableRow("sign", "sign<i>ature</i>", "= tanda tangan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-ing</i> pada kata kerja.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("begin", "begin<i>ing</i>", "= permulaan")."
                                        ".createTableRow("build", "build<i>ing</i>", "= bangunan")."
                                        ".createTableRow("meet", "meet<i>ing</i>", "= pertemuan")."
                                        ".createTableRow("read", "read<i>ing</i>", "= bacaan")."
                                        ".createTableRow("sing", "sing<i>ing</i>", "= nyanian")."
                                        ".createTableRow("swim", "swim<i>ing</i>", "= renang")."
                                    </table>
                                </li><br>
                                <li>
                                   Ada beberapa kata kerja yang memiliki bentuk sama dengan abstract noun (kata benda tak berwujud).<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("brush", "<i>brush</i>", "= sikat")."
                                        ".createTableRow("bath", "<i>bath</i>", "= mandi")."
                                        ".createTableRow("bribe", "<i>bribe</i>", "= uang sogok")."
                                        ".createTableRow("change", "<i>change</i>", "= penukaran")."
                                        ".createTableRow("call", "<i>call</i>", "= panggilan")."
                                        ".createTableRow("drink", "<i>drink</i>", "= minuman")."
                                        ".createTableRow("debate", "<i>debate</i>", "= perdebatan")."
                                        ".createTableRow("help", "<i>help</i>", "= pertolongan")."
                                        ".createTableRow("hope", "<i>hope</i>", "= harapan")."
                                        ".createTableRow("love", "<i>love</i>", "= cinta")."
                                        ".createTableRow("play", "<i>play</i>", "= permainan")."
                                        ".createTableRow("work", "<i>work</i>", "= pekerjaan")."
                                        ".createTableRow("walk", "<i>walk</i>", "= jalan")."
                                    </table>
                                </li>
                            </ol>
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Dari Kata Benda</b><br>
                            <ol type='a'>
                                <li>
                                    Dengan menambahkan akhiran <i>-ship</i> pada kata benda.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("friend", "friend<i>ship</i>", "= persahabatan")."
                                        ".createTableRow("champion", "champion<i>ship</i>", "= kejuaraan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-hood</i> pada kata benda.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("child", "child<i>hood</i>", "= masa anak-anak")."
                                        ".createTableRow("brother", "brother<i>hood</i>", "= persaudaraan")."
                                        ".createTableRow("boy", "boy<i>hood</i>", "= masa anak-anak")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-let</i> pada kata benda.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("book", "book<i>let</i>", "= buku kecil")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-cy</i> pada kata benda.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("agen", "agen<i>cy</i>", "= perwakilan")."
                                        ".createTableRow("bankrupt", "bankrupt<i>cy</i>", "= kebangkrutan")."
                                    </table>
                                </li><br>
                                <li>
                                    Dengan menambahkan akhiran <i>-an</i>, <i>-ian</i> pada kata benda.<br>
                                    <table cellpadding='5'>
                                        ".createTableRow("library", "librari<i>an</i>", "= perpustakawan")."
                                        ".createTableRow("magic", "magic<i>ian</i>", "= pesulap")."
                                        ".createTableRow("music", "music<i>ian</i>", "= pemusik")."
                                    </table>
                                </li>
                            </ol>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    ";
?>