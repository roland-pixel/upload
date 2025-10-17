<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Buku</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Tambah Buku</h1>

    <form action="{{ route('buku.store') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Buku</label>
        <input type="text" id="judul" name="judul" 
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" 
               placeholder="Masukkan judul buku" required>
      </div>

      <div>
        <label for="pengarang" class="block text-gray-700 font-medium mb-2">Pengarang</label>
        <input type="text" id="pengarang" name="pengarang" 
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" 
               placeholder="Masukkan nama pengarang" required>
      </div>

      <div class="flex justify-between items-center pt-4">
        <a href="{{ route('buku.index') }}" 
           class="text-gray-600 hover:text-gray-800 transition">← Kembali</a>

        <button type="submit" 
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
          Simpan
        </button>
      </div>
    </form>
  </div>

</body>
</html>
