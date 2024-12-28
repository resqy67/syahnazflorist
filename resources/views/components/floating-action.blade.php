<div class="fixed bottom-5 right-5 z-[1100]">
    <div x-data="{ open: false }">
        <!-- Button -->
        <button @click="open = !open" class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none transition duration-300 ease-in-out transform hover:scale-110">
            <img src="{{ asset('icons8-whatsapp-24.png') }}" alt="WhatsApp" class="w-6 h-6 mr-3">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.627 0-12 5.373-12 12 0 6.627 5.373 12 12 12 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12zm-.184 18.228c-2.322 0-4.584-.896-6.248-2.592-.488-.504-.952-1.064-1.368-1.672-.352-.472-.688-1.088-.856-1.728-.048-.16-.104-.256-.088-.416 0-.128.024-.208.064-.304.04-.112.08-.216.128-.32.216-.536.56-.992 1.008-1.32.4-.288.848-.528 1.336-.672.136-.048.264-.08.392-.088.176-.016.352.016.536.08.352.128.688.328 1 .56.2.152.416.296.608.464.232.2.44.408.624.624.256.288.464.608.648.944.28.504.472 1.04.592 1.6.072.352.176.68.336 1.016.048.12.104.232.168.336.048.072.112.128.16.192.16.216.4.384.688.448.352.08.736.088 1.112-.024.288-.08.568-.2.848-.32.368-.16.744-.328 1.12-.496.224-.096.432-.2.64-.312.208-.112.384-.264.584-.384.104-.064.208-.104.312-.168.128-.072.256-.16.368-.232.072-.048.128-.104.192-.16.08-.072.152-.136.224-.208.08-.08.152-.16.216-.24.064-.088.128-.176.192-.264.104-.136.208-.288.304-.432.112-.176.224-.352.336-.536.12-.2.224-.424.328-.64.032-.072.064-.144.096-.216.056-.112.096-.224.144-.336.032-.072.064-.144.096-.224.048-.112.104-.224.136-.336.024-.072.056-.136.08-.208.016-.08.04-.16.048-.24.016-.128.032-.256.032-.384.016-.304.024-.6-.024-.896-.048-.36-.16-.72-.304-1.08-.128-.312-.296-.616-.512-.912-.048-.064-.096-.128-.144-.192-.056-.064-.12-.128-.176-.192-.048-.064-.096-.128-.152-.192-.128-.16-.256-.32-.4-.464-.048-.048-.112-.096-.16-.144-.08-.08-.168-.152-.24-.224-.152-.144-.312-.28-.472-.408-.136-.112-.272-.224-.416-.32-.152-.104-.304-.2-.456-.296-.272-.168-.544-.312-.824-.448-.208-.104-.424-.184-.632-.272-.128-.048-.248-.096-.368-.144-.272-.112-.544-.2-.832-.296-.128-.048-.272-.08-.4-.128-.064-.024-.128-.032-.192-.048-.304-.096-.6-.176-.896-.256-.128-.032-.256-.072-.384-.096-.288-.056-.568-.128-.848-.16-.128-.016-.256-.024-.384-.048-.336-.064-.68-.096-1.024-.096z"/>
            </svg> --}}
        </button>

        <!-- Dropdown -->
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="absolute bottom-16 right-0 bg-white shadow-lg rounded-lg w-72">
            <div class="bg-green-500 p-4 rounded-t-lg">
                <p class="text-white font-bold">Sedang mencari bunga papan?</p>
            </div>
            <div class="flex flex-col space-y-4 mt-2 p-4">
                <!-- Contact 1 -->
                <a href="https://wa.me/6289513688170?text={{ urlencode('Halo, saya ingin memesan karangan bunga') }}%0AMohon informasi lebih lanjut.%0A{{ urlencode(url('products/')) }}" target="_blank" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded transition duration-300 ease-in-out">
                    <img src="{{ asset('whatsapp.png') }}" alt="CS 1" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold">CS 1</p>
                        <p class="text-green-500">Available</p>
                        <p class="text-sm text-gray-500">+62 895-1368-8170</p>
                    </div>
                </a>
                <!-- Contact 2 -->
                <a href="https://wa.me/6282252924080?text={{ urlencode('Halo, saya ingin memesan karangan bunga') }}%0AMohon informasi lebih lanjut.%0A{{ urlencode(url('products/')) }}" target="_blank" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded transition duration-300 ease-in-out">
                    <img src="{{ asset('whatsapp.png') }}" alt="CS 2" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold">CS 2</p>
                        <p class="text-green-500">Available</p>
                        <p class="text-sm text-gray-500">+62 822-5292-4080</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
