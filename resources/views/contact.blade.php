@extends('layouts.app')


@section('content')
<div class="bg-green-500">
    <div class="py-12">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-white">Kontak</h2>
            <p class="text-white mt-2 text-lg">
                Hubungi kami kapan saja jika Anda memiliki pertanyaan atau membutuhkan bantuan.
            </p>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Kolom Alamat -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition duration-300">
                <div class="flex justify-center">
                    <img src="https://img.icons8.com/ios-filled/50/4caf50/google-maps-new.png" alt="Icon Lokasi" class="h-16">
                </div>
                <h3 class="font-bold text-lg mt-4 text-green-600">Alamat</h3>
                <p class="text-gray-700 mt-2 text-sm">
                    Jl. D.I Panjaitan, RT.28/RW.no 2, Sumber Rejo, Kec. Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76124
                </p>
            </div>

            <!-- Kolom Jam Buka -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition duration-300">
                <div class="flex justify-center">
                    <img src="https://img.icons8.com/ios-filled/50/4caf50/clock.png" alt="Icon Jam Buka" class="h-16">
                </div>
                <h3 class="font-bold text-lg mt-4 text-green-600">Jam Buka</h3>
                <p class="text-gray-700 mt-2 text-sm">Selalu Buka</p>
            </div>

            <!-- Kolom CS 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition duration-300">
                <div class="flex justify-center">
                    <img src="https://img.icons8.com/ios-filled/50/4caf50/whatsapp.png" alt="Icon WhatsApp" class="h-16">
                </div>
                <h3 class="font-bold text-lg mt-4 text-green-600">CS 1</h3>
                <p class="text-gray-700 mt-2 text-sm">
                    <a href="https://wa.me/6281234200848" class="text-green-500 hover:text-green-700">
                        +62 895-1368-8170
                    </a>
                </p>
            </div>

            <!-- Kolom CS 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transform transition duration-300">
                <div class="flex justify-center">
                    <img src="https://img.icons8.com/ios-filled/50/4caf50/whatsapp.png" alt="Icon WhatsApp" class="h-16">
                </div>
                <h3 class="font-bold text-lg mt-4 text-green-600">CS 2</h3>
                <p class="text-gray-700 mt-2 text-sm">
                    <a href="https://wa.me/6281226823722" class="text-green-500 hover:text-green-700">
                        +62 822-5292-4080
                    </a>
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
