<x-app-layout>
    <div class="py-12 lg:pl-64">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

                    <div class="mb-4">
                        <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Tambah Buku Baru
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Terbit</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Stok</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($books as $book)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->judul }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->penulis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->kategori }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ date('d-M-Y', strtotime($book->tahun_terbit)) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->jumlah_stok }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $book->status === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $book->status === 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->deskripsi }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('books.show', $book->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Lihat</a>
                                        <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
