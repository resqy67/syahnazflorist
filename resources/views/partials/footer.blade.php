<footer class="relative w-full mb-2 mt-20">
    <div class="w-full px-8 mx-auto max-w-7xl">
        <div class="grid justify-between grid-cols-1 gap-4 md:grid-cols-2">
            <div class="grid grid-cols-1 gap-4">
                <diV class="flex items-center" >
                    <img src="{{ asset('logo.png') }}" alt="Syanaz Florist Logo" class="h-32 w-32">
                    <div class="flex flex-col">
                        <h5 class="text-xl font-semibold text-slate-800">
                            Syahnaz Florist
                        </h5>
                        <h5 class="text-sm font-thin text-slate-800">
                            Karangan Bunga Balikpapan
                        </h5>
                    </div>
                </diV>
                <p class="text-slate-600 mb-4">
                    Syahnaz Florist adalah toko bunga yang berlokasi di Balikpapan, Kalimantan Timur. Kami menyediakan berbagai macam karangan bunga untuk berbagai keperluan.
                </p>
            </div>
                    {{-- <img src="{{ asset('logo.png') }}" alt="Syanaz Florist Logo" class="h-32 w-full"> --}}
            <div class="grid justify-between grid-cols-3 gap-4">
                <ul>
                    <p class="block mb-1 text-base font-semibold  text-slate-800">
                        Beranda
                    </p>
                    <li>
                        <a href="/products"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Kontak Kami
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#testimonial"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Testimoni
                        </a>
                    </li> --}}
                </ul>
                <ul>
                    <p class="block mb-1 text-base font-semibold text-slate-800">
                        Kategori Produk
                    </p>
                    @foreach ($categories as $category )
                        <li>
                            <a href="/products?category={{ $category->slug }}"
                                class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                    {{-- <li>
                        <a href="/products?category=1"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Papan Bunga Duka Cita
                        </a>
                    </li>
                    <li>
                        <a href="/products?category=2"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Papan Bunga Selamat & Sukses
                        </a>
                    </li>
                    <li>
                        <a href="/products?category=3"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Papan Bunga Ulang Tahun
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block text-slate-700 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Papan Bunga Wisuda
                        </a>
                    </li> --}}
                </ul>
                <ul>
                    <p class="block mb-1 text-base font-semibold text-slate-800">
                        Sosial Media Kami
                    </p>
                    {{-- <li>
                        <div
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Jl. D.I Panjaitan, RT.28/RW.no 2, Sumber Rejo, Kec. Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76124
                        </div>
                    </li> --}}
                    <li>
                        <a href="https://www.facebook.com/mira.amanda.56884"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Facebook
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/karanganbungabalikpapan88/"
                            class="block text-slate-600 py-1 hover:text-slate-500 focus:text-slate-500 text-sm">
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="flex flex-col items-center justify-center w-full py-4 mt-12 border-t border-slate-200 md:flex-row md:justify-between">
            <p class="block mb-4 text-sm text-center text-slate-500 md:mb-0">
                Copyright © 2024
                <a href="https://syahnazflorist.com/">Syahnaz Florist Karangan Bunga Balikpapan</a>. All
                Rights Reserved.
            </p>
            <div class="flex gap-4 text-slate-600 sm:justify-center">
                <a href="https://www.facebook.com/mira.amanda.56884" class="block transition-opacity text-inherit hover:opacity-80">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/karanganbungabalikpapan88/" class="block transition-opacity text-inherit hover:opacity-80">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
