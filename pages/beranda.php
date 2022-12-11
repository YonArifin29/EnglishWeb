<?php
    $template = "dashboard";
    $title = "Contoh";
    $beranda = "active";
    $konten = "
        <div class='row'>
            <div class='ml-5 container'>
                <p class='paragraf'>
                    Delapan jenis kata di atas dalam bahasa Inggris disebut <b>The Eight Part Of Speach (Delapan Bagian Tata bahasa).</b> 
                </p>
                <p class='paragraf'>
                    Kedelapan kata inilah yang digunakan untuk menyusun kalimat bahasa Inggris. Dan kedelapan jenis kata ini harus diletakan secara tepat di dalam kalimat bahasa Inggris agar kalimat yang disusun memiliki maksud atau arti yang jelas.
                </p>
                <p>Contoh:</p>
                <div class='ml-3'>
                    <ul>
                        <li>I had left my house yesterday.<br> = Saya telah meninggalkan rumah kemarin.</li>
                    </ul>
                </div>
                <p class='paragraf'>
                    Apabila kalimat tersebut diuraikan menurut jenis katanya akan diperoleh sebagai berikut :
                </p>
                <ul class='ml-5'>
                        <li><i>I</i> = saya, adalah Kata Ganti (Pronoun)</li>
                        <li><i>had</i> = telah, adalah Kata Kerja Bantu (Auxiliary)</li>
                        <li><i>left</i> = meninggalkan, adalah Kata Kerja (Verb)</li>
                        <li><i>my</i> = saya, adalah Kata Ganti (Pronoun)</li>
                        <li><i>house</i> = rumah, adalah Kata Benda (Noun)</li>
                        <li><i>yesterday</i> = kemarin, adalah Kata Keterangan (Adverb)</li>
                </ul>
                    <p class='paragraf'>
                        Untuk lebih memperjelas uraian diatas, maka selanjutnya akan dibahas dalam pelajaran pokok pada bab-bab selanjutnya.
                    </p>
            </div>
        </div>
        <div class='row'>
            <div class='ml-5'>
                ".createTabl1("1. Noun", "(Kata Benda)")."
                ".createTabl1("2. Adjective", "(Kata Sifat)")."
                ".createTabl1("3. Verb", "(Kata Kerja)")."
                ".createTabl1("4. Pronoun", "(Kata Ganti)")."
                ".createTabl1("5. Adverb", "(Kata Keterangan)")."
                ".createTabl1("6. Preposition", "(Kata Depan)")."
                ".createTabl1("7. Conjunction", "((Kata Penghubung)")."
                ".createTabl1("8. Interjection", "(Kata Seru)")."   
            </div>
        </div>
    ";
?>