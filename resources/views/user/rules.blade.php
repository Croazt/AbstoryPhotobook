@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center mb-12">
            <h1 class="sec-title">Upload Rules</h1>
        </div>
        
        <div class="pl-12 pr-12">
            <div class="mt-5">
                <h1 class="font-bold mb-2">1. Judul Album</h1>
                <p class="font-regular">Perhatikan penulisan judul album, mulai dari ejaan dan penggunaan huruf kapital. Judul ini yang akan digunakan sebagai tulisan di cover album.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 2. Jenis Tulisan atau Font</h1>
                <p class="font-regular">Jika memiliki request khusus untuk jenis tulisan atau font yang ingin digunakan, bisa ditulisankan
dengan detail nama font-nya di kolom request. Jika tidak ada request, maka pihak Abstory akan
memilihkan font yang sesuai.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 3. Penambahan Caption</h1>
                <p class="font-regular">Jika ingin menambahkan caption secara detail pada suatu foto, bisa dituliskan pada kolom request
berupa nomer foto dan caption-nya. Jika ingin memasukkan caption secara random, bisa di-list caption-nya
pada kolom request. Detail lainnya dapat juga ditambahkan pada kolom request.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 4. Pemilihan Foto Cover</h1>
                <p class="font-regular">Jika ingin menggunakan foto secagai cover photobook, maka file yang di-upload dapat diberi nama “cover”.
Jika ingin cover penuh dengan foto, disarankan bentuk foto (landscape/portrait) mengikuti bentuk photobook.
Jika ingin menggunakan kompilasi beberapa foto, beri nama file foto dengan “cover1”, “cover2”, dst.Boleh menambahkan referensi cover ke dalam upload file atau menuliskan detail request untuk cover. Selebihnya, pihak Abstory akan mengusahakan pilihan yang terbaik. </p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 5. Urutan Foto</h1>
                <p class="font-regular">Jika foto yang ingin dicetak berurutan, maka ubah penamaan file sesuai urutan sebelum di-upload
(contoh: “1”, “2”, “3”, dst). Jika foto yang diupload tidak memiliki format urutan yang sesuai,
maka pihak Abstory akan menyusun foto dengan pilihan terbaik.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 6. Kualitas Foto</h1>
                <p class="font-regular">Untuk hasil cetak yang maksimal, disarankan foto yang di-upload memiliki ukuran minimal 500kb atau dapat
mencoba untuk zoom foto sebesar 3x dan foto masih terlihat bagus. Foto yang di-upload ke pihak Abstory
akan diusahakan atur sebaik mungkin untuk hasil tetap maksimal, namun complain yang masuk akibat
keteledoran customer, pihak Abstory tidak bertanggung jawab. </p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 7. Design Photobook</h1>
                <p class="font-regular">Design photobook dapat memilih clean design, referensi design (upload referensi dengan nama “referensi design”),
atau diserahkan sepenuhnya ke pihak Abstory untuk dibuatkan yang terbaik.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 8. Request Lain</h1>
                <p class="font-regular">Request lain seperti detail layout yang diinginkan, referensi warna yang ingin digunakan, dan lainnya
dapat dituliskan pada kolom request.</p>
            </div>
            <div class="mt-5">
                <h1 class="font-bold mb-2"> 9. Ketentuan Revisi </h1>
                <p class="font-regular">Setelah mendapat preview photobook pertama, silahkan dicek sebaik mungkin. Kemudian masukkan revisi-revisi yang
ingin dilakukan berbentuk point-point pada kolom revisi yang nanti disediakan. Pastika seluruh revisi sudah tertulis,
karena revisi photobook hanya diberikan 1x kesempatan.</p>
            </div>
        </div>

        <div class="mb-12 mt-12 flex items-center">
            <div class="mx-auto">
                <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-48 rounded-md text-white uppercase">Back</button>
            </div>
        </div>

</section>

@endsection