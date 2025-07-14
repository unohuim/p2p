<?php // Placeholder for future PHP logic ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prospects2Pro - Elite Fantasy Hockey</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-b from-[#001F3F] via-[#003366] to-white text-white min-h-screen font-sans bg-[url('/img/ice-texture.png')] bg-cover bg-fixed bg-center" x-data="{ mobileMenu: false }">

  <!-- Navbar -->
  <header class="bg-[#001F3F]/80 backdrop-blur-md fixed top-0 left-0 w-full z-50 shadow-lg">
  <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
    <span class="text-xs md:text-sm bg-black/60 text-white px-3 py-1 rounded">Registration closes <span class="font-semibold text-yellow-200">August 10th</span></span>
    <div class="hidden md:flex gap-6 items-center">
      <a href="#" class="text-white hover:text-yellow-300 transition">Home</a>
      <a href="https://discord.gg/RC2A5cxG" target="_blank" class="px-6 py-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold rounded-full shadow transition duration-200">Join Discord</a>
    </div>
  <div x-show="mobileMenu" x-transition class="md:hidden bg-[#001F3F] px-6 pb-4">
    <a href="#" class="block text-white py-2">Home</a>
    <a href="https://discord.gg/RC2A5cxG" target="_blank" class="block bg-blue-700 hover:bg-blue-800 text-white text-center py-2 px-4 rounded-full shadow transition">Join Discord</a>
  </div>
</header>

  <!-- Hero Section -->
    </div>
  <section class="max-w-6xl mx-auto px-6 pt-20 pb-10 text-center">
    <div class="relative w-[17rem] h-[17rem] mb-6 mx-auto transition-transform duration-300 hover:scale-110">
      <img src="/img/p2plogo.jpg" alt="P2P Logo" class="absolute inset-0 w-full h-full object-contain rounded-full shadow-2xl bg-white p-0.5">
    </div>
    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-yellow-100 drop-shadow-xl">
      Welcome to <span class="text-white">Prospects to Pros</span><br>
      The Ultimate Fantasy Hockey Experience
    </h1>
    <p class="mt-6 text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
      Dive into a next-gen dynasty league where you manage both NHL vets and emerging prospects. If you're serious about fantasy hockey, welcome home.
    </p>

    <!-- Callout Prize (Now directly under hero) -->
    <div class="mt-8">
      <div class="inline-block bg-yellow-400 text-gray-900 text-lg md:text-xl font-bold py-2 px-5 rounded-full shadow-xl transition-transform duration-300 hover:scale-105">
        $1,000 Cash Prize for the Champion
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="max-w-6xl mx-auto px-6 pb-16 text-black">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Build a Dynasty</h3>
        <p>Scout, draft, and manage stars from juniors to NHL legends across two custom drafts.</p>
      </div>
      <div class="bg-white backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Full Franchise Control</h3>
        <p>From trades to cap space, your team’s future is in your hands. Win now or rebuild smart.</p>
      </div>
      <div class="bg-white backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Community Driven</h3>
        <p>Join a passionate Discord community backed by a seasoned commissioner team.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-24 text-center text-sm text-gray-400">
    &copy; <?php echo date('Y'); ?> Prospects2Pro. All rights reserved.
  </footer>

</body>
</html>
