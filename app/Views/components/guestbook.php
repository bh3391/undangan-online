<div class="mt-20 pt-20 text-center mx-auto px-2">

    <div class="flex flex-col text-center w-full mb-12">
        <h1 data-aos="fade-left "data-aos-duration="2000"class=" mt-20 mx-auto Ephesis text-7xl font-weight-bold">Buku Tamu</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base p-3"> Ucapkan Selamat Kepada Praja & Anik</p>
    </div>
    <form data-aos="fade-left "data-aos-duration="2000">
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
                <select required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="kehadiran" id="Hadir">
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
            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim Ucapan</button>
        </div>
        <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Lihat Semua Ucapan</button>
        </div>
    </div>