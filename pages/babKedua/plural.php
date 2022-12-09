<?php
    $template = "dashboard";
    $title = "singular noun";
    $active2 = 'active';
    $activeNoun = 'active';
    $activePlural = 'active';
    $judul = "";
    $judul2 = "SINGULAR AND PLURAL NOUN";
    $hal = 8;
    $tombol = "
        <div class='btn btn-secondary btn-sm mb-2'>
            <a class='text-reset'href='?page=babKedua/singular'>Sebelumnya</a>
        </div>
        <div class='btn btn-primary btn-sm ml-5 mb-2'>
            <a class='text-reset'href='#'>Selanjutnya</a>
        </div>
    ";
    $konten = "
        <div class='row'>
            <div class='contain'>
                <p class='ml-2'><b>2. Plural Noun (Kata Benda Jamak)</b></p>
                <p class='ml-4 paragraf'>
                    <i>Plural Noun</i> adalah kata benda yang digunakan untuk menunjukan bahwa benda tersebut lebih dari satu. Pada umumnya dibentuk dari kata benda tunggal dengan memberikan tambahan <i>e/es</i> pada kata bendanya.<br>
                    Contoh :
                    <div class='ml-5'>
                        books (beberapa buku); cars (beberapa mobil); five pens (lima buah pena); buses (beberapa bis); dan lain-lain.<br>
                        Bentuk plural noun tidak disertai oleh article <i>a</i> atau <i>an</i>, tetapi disertai article <i>the.</i>
                    </div><br>
                   <span class='ml-4'> Contoh :</span>
                    <div class='ml-5'>
                        <ul>
                            <li>
                                There are <i>the books</i> on the table.<br>
                                = Ada beberapa buku di atas meja.
                            </li>
                        </ul>
                    </div>
                    <div  class='ml-4 paragraf'>
                        Apabila bentuk plural noun digunakan bersama kata kerja, maka kata kerjanya harus dalam bentuk jamak, tidak mendapatakan tambahan <i>e/es</i>. Atau dapat digunakan kata kerja bantu <i>are</i> dan <i>were</i>.
                    </div><br>
                    <span class='ml-4'> Contoh :</span>
                    <div class='ml-5'>
                        <ul>
                            <li>
                                He <i>has</i> five <i>horses</i>.<br>
                                = Dia mempunyai lima kuda ekor.
                            </li>
                            <li>
                                There <i>are</i> two <i>pencils</i>.<br>
                                = Ada dua buah pensil .
                            </li>
                        </ul>
                    </div>
                </p>
                <p class='ml-4 paragraf'>
                    Ada beberpa cara yang digunakan untuk membentuk plural noun (kata benda jamak) yaitu :
                    <ol type='a'>
                        <li>
                            Dengan menambahkan akhiran <i>-s</i> pada kata benda tunggal.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("door", "door<i>s</i>", "= pintu")."
                                ".createTableRow("pen", "pen<i>s</i>", "= pena")."
                                ".createTableRow("pencil", "pencil<i>s</i>", "= pensil")."
                                ".createTableRow("umbrella", "umbrella<i>s</i>", "= payung")."
                                ".createTableRow("book", "book<i>s</i>", "= buku")."
                                ".createTableRow("car", "car<i>s</i>", "= mobil")."
                                ".createTableRow("teacher", "teacher<i>s</i>", "= guru")."
                                ".createTableRow("friend", "friend<i>s</i>", "= teman")."
                                ".createTableRow("lawyer", "lawyer<i>s</i>", "= pengaacara")."
                                ".createTableRow("flower", "flower<i>s</i>", "= bunga")."
                                ".createTableRow("student", "student<i>s</i>", "= pelajar")."
                                ".createTableRow("hand", "hand<i>s</i>", "= tangan")."
                                ".createTableRow("school", "school<i>s</i>", "= sekolah")."
                                ".createTableRow("house", "house<i>s</i>", "= rumah")."
                                ".createTableRow("cat", "cat<i>s</i>", "= kucing")."
                                ".createTableRow("bird", "bird<i>s</i>", "= burung")."
                                ".createTableRow("tree", "tree<i>s</i>", "= pohon")." 
                            </table>
                        </li>
                        <li>
                            Dengan menambahkan akhiran <i>-es</i> pada kata benda tunggal yang berahiran huruf <i>-s, -ss, -x, -z, -ch</i> dan <i>-sh</i>.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("bus", "bus<i>es</i>", "= bis")."
                                ".createTableRow("ass", "ass<i>es</i>", "= keledai")."
                                ".createTableRow("class", "class<i>es</i>", "= kelas")."
                                ".createTableRow("glass", "glass<i>es</i>", "= gelas")."
                                ".createTableRow("box", "box<i>es</i>", "= kotak")."
                                ".createTableRow("brush", "brush<i>es</i>", "= sikat")."
                                ".createTableRow("watch", "watch<i>es</i>", "= alroji")."
                                ".createTableRow("bench", "bench<i>es</i>", "= bangku")."
                                ".createTableRow("bush", "bush<i>es</i>", "= semak")."
                            </table>
                        </li>
                        <li>
                            Dengan menambahkan akhiran <i>-es</i> pada kata benda tunggal yang berahiran huruf <i>-o</i>.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("buffalo", "buffalo<i>es</i>", "= kerbau")."
                                ".createTableRow("manggo", "manggo<i>es</i>", "= mangga")."
                                ".createTableRow("hero", "hero<i>es</i>", "= pahlawan")."
                                ".createTableRow("potato", "potato<i>es</i>", "= kentang")."
                                ".createTableRow("volcano", "volcano<i>es</i>", "= gunung berapi")."
                                ".createTableRow("motto", "motto<i>es</i>", "= semboyan")."
                                ".createTableRow("tornado", "tornado<i>es</i>", "= angin topan")."
                            </table>
                            <b>Catatan :</b><br>
                            Ada beberapa kata benda tunggal yang berahiran dengan huruf <i>-o</i> tetapi bentuk jamaknya hanya ditambahkan ahiran <i>-s</i> saja.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("piano", "piano<i>s</i>", "= piano")."
                                ".createTableRow("bamboo", "bamboo<i>s</i>", "= bambu")."
                                ".createTableRow("radio", "radio<i>s</i>", "= radio")."
                                ".createTableRow("solo", "solo<i>s</i>", "= nyanyian tunggal")."
                                ".createTableRow("dynamo", "dynamo<i>s</i>", "= dinamo")."
                                ".createTableRow("folio", "folio<i>s</i>", "= folio")."
                                ".createTableRow("photo", "photo<i>s</i>", "= foto")."
                            </table>
                        </li>
                        <li>
                            Mengubah akhiran <i>-y</i> yang diawali oleh huruf mati (konsonan) pada kata benda tunggal menjadi akhiran <i>i</i> dan kemudian ditambah <i>es</i>.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("lady", "lad<i>ies</i>", "= gadis")."
                                ".createTableRow("army", "arm<i>ies</i>", "= tentara")."
                                ".createTableRow("baby", "bab<i>ies</i>", "= bayi")."
                                ".createTableRow("beauty", "beaut<i>ies</i>", "= perempuan cantik")."
                                ".createTableRow("library", "librar<i>ies</i>", "= perpustakaan")."
                                ".createTableRow("country", "countr<i>ies</i>", "= negara")."
                                ".createTableRow("city", "cit<i>ies</i>", "= kota")."
                                ".createTableRow("fly", "fl<i>ies</i>", "= lalat")."
                                ".createTableRow("copy", "cop<i>ies</i>", "= salinan")."
                                ".createTableRow("duty", "dut<i>ies</i>", "= tugas")."
                                ".createTableRow("enemy", "enem<i>ies</i>", "= musuh")."
                                ".createTableRow("factory", "factor<i>ies</i>", "= pabrik")."
                            </table>
                            Apabila kata benda tunggalnya berakhiran dengan huruf <i>-y</i> yang diawali oleh huruf (vokal), maka bentuk kata benda jamaknya cukup ditambahkan dengan akhiran <i>-s</i>.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("boy", "boy<i>s</i>", "= anak laki-laki")."
                                ".createTableRow("toy", "toy<i>s</i>", "= mainan")."
                                ".createTableRow("key", "key<i>s</i>", "= kunci")."
                                ".createTableRow("day", "day<i>s</i>", "= hari")."
                                ".createTableRow("monkey", "monkey<i>s</i>", "= kera")."
                                ".createTableRow("donkey", "donkey<i>s</i>", "= keledai")."
                                ".createTableRow("alley", "alley<i>s</i>", "= lorong")."
                                ".createTableRow("play", "play<i>s</i>", "= permainan")."
                                ".createTableRow("valley", "valley<i>s</i>", "= lembah")."
                                ".createTableRow("way", "way<i>s</i>", "= jalan")."
                            </table>
                            <b>Catatan :</b><br>
                            Sedangkan pada kata benda tunggal yang berakhiran dengan <i>-quy</i>, kata benda jamaknya dibentuk dengan mengubah akhiran <i>-y</i> menjadi <i>-i</i> dan ditambah <i>-es</i>.<br>
                            <b>Contoh :</b><br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("coloquy", "coloqu<i>ies</i>", "= seminar")."
                            </table>
                        </li>
                        <li>
                            Mengubah akhiran <i>-f</i> atau <i>-fe</i> pada kata benda tunggal menjadi <i>-ves</i> pada kata benda jamak.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("knife", "kni<i>ves</i>", "= pisau")."
                                ".createTableRow("loaf", "loa<i>ves</i>", "= sepotong roti")."
                                ".createTableRow("wolf", "wol<i>ves</i>", "= serigala")."
                                ".createTableRow("thief", "thie<i>ves</i>", "= pencuri")."
                                ".createTableRow("wife", "wi<i>ves</i>", "= istri")."
                                ".createTableRow("calf", "cal<i>ves</i>", "= anak sapi")."
                                ".createTableRow("elf", "el<i>ves</i>", "= peri")."
                            </table>
                            <b>Catatan :</b><br>
                            Tetapi ada beberapa kata benda tunggal yang berakhiran <i>-f</i> atau <i>-fe</i>, hanya ditambah dengan <i>-s</i> saja dalam membentuk kata benda jamaknya.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("proof", "proof<i>s</i>", "= bukti")."
                                ".createTableRow("chief", "chief<i>s</i>", "= kepala")."
                                ".createTableRow("cliff", "cliff<i>s</i>", "= karang")."
                                ".createTableRow("roof", "roof<i>s</i>", "= atap")."
                                ".createTableRow("safe", "safe<i>s</i>", "= lemari besi")."
                                ".createTableRow("hoof", "hoof<i>s</i>", "= kuku kuda")."
                                ".createTableRow("gulf", "gulf<i>s</i>", "= teluk")."
                                ".createTableRow("scarf", "scarf<i>s</i>", "= selendang")."   
                            </table>
                        </li>
                        <li>
                            Beberapa kata benda mempunyai bentuk jamak yang sama dengan bentuk kata benda tunggalnya.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("deer", "<i>deer</i>", "= rusa")."
                                ".createTableRow("sheep", "<i>sheep</i>", "= biri-biri")."
                                ".createTableRow("fish", "<i>fish</i>", "= ikan")."
                                ".createTableRow("fruit", "<i>fruit</i>", "= buah-buahan")."
                                ".createTableRow("food", "<i>food</i>", "= makanan")."
                                ".createTableRow("dozen", "<i>dozen</i>", "= selusin")."
                                ".createTableRow("swine", "<i>swine</i>", "= babi")."
                            </table>
                            <b>Catatan :</b><br>
                            Kata benda nama bangsa (proper noun) yang berakhiran dengan huruf <i>-se</i>, <i>-ss</i>, atau <i>-sh</i> baik perorangan atau kelompok mempunyai bentuk jamak dan tunggal yang sama.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("Swiss", "<i>Swiss</i>", "= orang Swiss")."
                                ".createTableRow("Balinese", "<i>Balinese</i>", "= orang Bali")."
                                ".createTableRow("Chinese", "<i>Chinese</i>", "= orang Cina")."
                                ".createTableRow("Javanese", "<i>Javanese</i>", "= orang Jawa")."
                                ".createTableRow("English", "<i>English</i>", "= orang Inggris")."
                                ".createTableRow("Japanese", "<i>Japanese</i>", "= orang Jepang")."
                            </table>
                        </li>
                        <li>
                            Beberapa kata benda selalu berbentuk jamak, tidak memiliki bentuk tunggal.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("shoes", "<i>shoes</i>", "= sepatu")."
                                ".createTableRow("socks", "<i>socks</i>", "= kaus kaki")."
                                ".createTableRow("stoking", "<i>stoking</i>", "= kaus kaki perempuan")."
                                ".createTableRow("arms", "<i>arms</i>", "= senjata")."
                                ".createTableRow("pliers", "<i>pliers</i>", "= catut")."
                                ".createTableRow("riches", "<i>riches</i>", "= kekayaan")."
                                ".createTableRow("glasses", "<i>glasses</i>", "= kaca mata")."
                                ".createTableRow("trousers", "<i>trousers</i>", "= celana panjang")."
                            </table>
                        </li>
                        <li>
                            Beberapa kata benda tunggal memiliki bentuk jamak yang tidak beraturan (Irregular Plural Form).<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("man", "<i>men</i>", "= orang laki-laki")."
                                ".createTableRow("woman", "<i>women</i>", "= orang perempuan")."
                                ".createTableRow("foot", "<i>feet</i>", "= kaki")."
                                ".createTableRow("tooth", "<i>teeth</i>", "= gigi")."
                                ".createTableRow("goose", "<i>geese</i>", "= angsa")."
                                ".createTableRow("louse", "<i>lice</i>", "= kutu")."
                                ".createTableRow("mouse", "<i>mice</i>", "= tikus")."
                                ".createTableRow("ox", "<i>oxen</i>", "= sapi jantan")."
                                ".createTableRow("child", "<i>children</i>", "= anak kecil")."
                                ".createTableRow("brother", "<i>brethren</i>", "= saudara")."
                                ".createTableRow("cow", "<i>kine</i>", "= sapi")."  
                            </table>
                        </li>
                        <li>
                            Apabila kata benda tunggalnya berbentuk majemuk atau gabungan kata (compound noun), maka kata benda jamaknya dibentuk dengan menambahkan akhiran <i>-s</i> pada kata dasarnya.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("father in law", "<i>fathers in law</i>", "= ayah mertua")."
                                ".createTableRow("mother in law", "<i>mothers in law</i>", "= ibu mertua")."
                                ".createTableRow("son in law", "<i>sons in law</i>", "= menantu laki-laki")."
                                ".createTableRow("step son", "<i>step sons</i>", "= anak tiri laki-laki")."
                                ".createTableRow("step daughter", "<i>step daughters</i>", "= anak tiri perempuan")."
                                ".createTableRow("brother in law", "<i>brothers in law</i>", "= ipar laki-laki")."
                                ".createTableRow("sister in law", "<i>sisters in law</i>", "= ipar perempuan")."
                                ".createTableRow("court martial", "<i>courts martial</i>", "= mahkamah militer")."
                                ".createTableRow("maid servant", "<i>maid servants</i>", "= pelayan perempuan")."
                                ".createTableRow("girl firiend", "<i>girl firiends</i>", "= teman atau pacar wanita")."
                                ".createTableRow("book warp", "<i>book warps</i>", "= sampul buku")."
                            </table>
                        </li>
                        <li>
                            Beberapa kata benda tunggal yang berasal dari bahasa asing (selain bahasa Inggris) mempunyai dua buah bentuk jamak (satu yang telah dirubah menjadi bahasa Inggris dan yang lainya dari bahasa asing itu sendiri).<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("antenna", "antenae", "= kumis serangga")."
                                ".createTableRow("", "<i>antenas</i>", "= antena")."
                                ".createTableRow("appendix", "appendices", "= usus buntu")."
                                ".createTableRow("", "<i>appendixes</i>", "= tambahan")."
                                ".createTableRow("aquarium", "aquaria", "= kolam kaca")."
                                ".createTableRow("", "<i>aquariums</i>", "= kolam kaca")."
                                ".createTableRow("curriculum", "curricula", "= kurikulum")."
                                ".createTableRow("", "<i>curriculums</i>", "= kurikulum")."
                                ".createTableRow("formula", "formulae", "= rumus")."
                                ".createTableRow("", "<i>formulas</i>", "= rumus")."
                                ".createTableRow("maximum", "maxima", "= maksimum")."
                                ".createTableRow("", "<i>maximums</i>", "= maksimum")."
                                ".createTableRow("medium", "media", "= perantara")."
                                ".createTableRow("", "<i>mediums</i>", "= perantara")."
                                ".createTableRow("minimum", "minima", "= minimum")."
                                ".createTableRow("", "<i>minimums</i>", "= minimum")."
                                ".createTableRow("index", "indices<i></i>", "= penunjuk")."
                                ".createTableRow("", "<i>indexes</i>", "= indeks")."
                            </table>
                        </li>
                        <li>
                            Beberapa kata benda tunggal yang berasal dari bahasa asing mempunyai bentuk jamak dalam bahasa asing tersebut.<br>
                            <table cellpadding='5'>
                                ".createTableRow("<b>Tunggal</b>", "<b>Jamak</b>", "<b>Arti</b>")."
                                ".createTableRow("alga", "<i>algae</i>", "= ganggang")."
                                ".createTableRow("alumna", "<i>alumnae</i>", "= lulusan")."
                                ".createTableRow("bacteria", "<i>bacterium</i>", "= kuman")."
                                ".createTableRow("erratum", "<i>errata</i>", "= ralat")."
                                ".createTableRow("alumnus", "<i>alumni</i>", "= lulusan")."
                                ".createTableRow("criterion", "<i>criteria</i>", "= kriteria")."
                            </table>
                        </li>
                    <ol>
                </p>
            </div>
        </div>
    ";
?>