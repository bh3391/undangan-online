<div class="mt-5 bg-blue-100 pt-20 text-center mx-auto px-2">

    <div class="flex flex-col text-center w-full mb-12">
        <h1 data-aos="fade-left "data-aos-duration="2000"class=" mt-20 mx-auto Ephesis text-7xl font-weight-bold">Buku Tamu</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base p-3"> Ucapkan Selamat Kepada Praja & Anik</p>
    </div>
    
    <form  method="post" action="/Home/tambah" data-aos="fade-left "data-aos-duration="2000">
    <div class="flex flex-wrap -m-2 md:w-1/2 mx-auto ">
        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                <input required placeholder="Nama Lengkap . . ." type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>

        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="kehadiran" class="leading-7 text-sm text-gray-600">Konfirmasi kehadiran</label>
                <select id="kehadiran" name="kehadiran"required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="kehadiran" id="Hadir">
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Ragu-Ragu">Ragu-Ragu</option>

                </select>
            </div>
        </div>
        <div class="p-2 w-full">
            <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Ucapan</label>
                <textarea required id="message" name="message" placeholder="Tuliskan Sesuatu . . ." class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
        </div>
        </form>
        <div class="p-2 w-full">
            <button 
            
            type="submit"class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim Ucapan</button>
        </div>
        
        
    </div>
    <div id="bukutamu"class="p-2 md:w-1/4 mx-auto text-center">
            <a href="<?=base_url()?>/ucapan"class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Lihat Semua Ucapan</a>
        </div>
    <?php if (session()->getFlashdata('msg')) : ?>
            <div data-aos="fade-left" data-aos-duration="500"class="mt-5 flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-green-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        </div>
        
        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                <p class="text-sm text-gray-600 dark:text-gray-200"><?= session()->getFlashdata('msg') ?></p>
            </div>
        </div>
    </div>   
            
            <?php endif; ?>