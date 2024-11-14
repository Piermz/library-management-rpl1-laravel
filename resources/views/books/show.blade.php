<x-app-layout>
    <section class=" dark:bg-gray-900 ">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Buku</h2>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Judul Buku</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->judul }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Penulis</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->penulis }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Kategori</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->kategori }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->tahun_terbit->format('d-m-Y') }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Jumlah Stok</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->jumlah_stok }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Status</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->status }}</p>
                </div>
                <div class="sm:col-span-2">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Deskripsi</p>
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $book->deskripsi }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ route('books.edit', $book->id) }}" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Edit Buku
                </a>
                <a href="{{ route('books.index') }}" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ml-3">
                    Kembali ke Daftar
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
