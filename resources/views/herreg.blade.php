<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Her-Registrasi') }}
        </h3>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center items-center">
            {{ __('Pilih Status Akademik') }}
        </h2>
        <p class="flex justify-center items-center">Silakan pilih salah satu status akademik berikut untuk semester ini</p>
        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <div class="flex flex-col w-full space-y-4">
                        <div class="bg-blue-900 overflow-hidden shadow-sm sm:rounded-lg w-full h-48 flex justify-center items-center">
                            <div class="p-4 text-white text-3xl">
                                {{ __("Aktif") }}
                            </div>
                            <div class="p-4 text-white text-1xl">
                                <p>Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi Isian Rencana Studi (IRS).</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="bg-blue-900 overflow-hidden shadow-sm sm:rounded-lg w-full h-48 flex justify-center items-center">
                        <div class="p-4 text-white text-3xl">
                            {{ __("Cuti") }}
                        </div>
                        <div class="p-4 text-white text-1xl">
                            <p>Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa Undip.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Kotak besar di bawah kedua kolom -->
                <div class="bg-blue-800 overflow-hidden shadow-sm sm:rounded-lg w-full h-48 mt-4">
                    <div class="p-4 text-white text-3xl">
                        {{ __("Her-Registrasi") }}
                    </div>
                    <div class="p-4 text-white text-3x1">
                        <p>Informasi lebih lanjut mengenai her-registrasi, atau mekanisme serta pengajuan penangguhan pembayaran dapat ditanyakan melalui Biro Administrasi Akademik (BAA) atau program studi masing-masing.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
