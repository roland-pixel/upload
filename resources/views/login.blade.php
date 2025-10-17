<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <!-- CDN TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Card Login -->
  <div class="bg-white shadow-lg rounded-2xl w-full max-w-md p-8">
    <!-- Judul -->
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login ke Akun Anda</h1>

    <!-- Form -->
    <form action="#" method="POST" class="space-y-5">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <!-- Remember me + Lupa Password -->
      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
          <span class="ml-2 text-gray-700">Ingat saya</span>
        </label>
        <a href="#" class="text-blue-600 hover:underline">Lupa password?</a>
      </div>

      <!-- Tombol -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
        Masuk
      </button>
    </form>

    <!-- Footer -->
    <p class="text-center text-sm text-gray-600 mt-6">
      Belum punya akun?
      <a href="#" class="text-blue-600 hover:underline font-medium">Daftar sekarang</a>
    </p>
  </div>

</body>
</html>
