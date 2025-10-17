<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-gray-800">Daftar Buku</h1>
      <a href="{{ route('buku.create') }}" 
         class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Tambah Buku
      </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
          <tr>
            <th class="py-3 px-4 text-left border-b">Judul</th>
            <th class="py-3 px-4 text-left border-b">Pengarang</th>
            <th class="py-3 px-4 text-center border-b">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($buku as $buku)
            <tr class="hover:bg-gray-50">
              <td class="py-3 px-4 border-b">{{ $buku->judul }}</td>
              <td class="py-3 px-4 border-b">{{ $buku->pengarang }}</td>
              <td class="py-3 px-4 border-b text-center">
                <a href="{{ route('buku.edit', $buku->id) }}" 
                   class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                <form action="{{ route('buku.destroy', $buku->id) }}" 
                      method="POST" 
                      class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" 
                          class="text-red-600 hover:text-red-800 font-medium ml-2"
                          onclick="return confirm('Yakin ingin menghapus buku ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @endforeach

          @if($buku->isEmpty())
            <tr>
              <td colspan="3" class="text-center py-4 text-gray-500">Belum ada data buku.</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
