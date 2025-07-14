<?php // Placeholder for future PHP logic ?>
<!DOCTYPE html>
<html lang="en" x-data="{ hovered: false }" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prospects2Pro - Elite Fantasy Hockey</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-b from-[#001F3F] via-[#003366] to-white text-white min-h-screen font-sans bg-[url('/img/ice-texture.png')] bg-cover bg-fixed bg-center">

  <div class="max-w-6xl mx-auto px-6 py-16">
    <!-- Logo and Hero Section -->
    <div class="flex flex-col items-center text-center">
      <div class="relative w-52 h-52 mb-6 transition-transform duration-300 hover:scale-110">
        <img src="/img/p2plogo.jpg" alt="P2P Logo" class="absolute inset-0 w-full h-full object-contain rounded-full shadow-2xl bg-white p-2">
      </div>

      <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-yellow-100 drop-shadow-xl">
        Welcome to <span class="text-white">Prospects to Pros</span><br>
        The Ultimate Fantasy Hockey Experience
      </h1>
      <p class="mt-4 text-xl md:text-2xl text-gray-200 max-w-3xl">
        Dive into a next-gen dynasty league where you manage both NHL vets and emerging prospects. If you're serious about fantasy hockey, welcome home.
      </p>
    </div>

    <!-- Features Section -->
    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-900">
      <div class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Build a Dynasty</h3>
        <p>Scout, draft, and manage stars from juniors to NHL legends across two custom drafts.</p>
      </div>
      <div class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Full Franchise Control</h3>
        <p>From trades to cap space, your team’s future is in your hands. Win now or rebuild smart.</p>
      </div>
      <div class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105 text-center">
        <h3 class="text-2xl font-bold mb-2">Community Driven</h3>
        <p>Join a passionate Discord community backed by a seasoned commissioner team.</p>
      </div>
    </div>

    <!-- Callout Prize -->
    <div class="mt-16 text-center">
      <div class="inline-block bg-yellow-400 text-gray-900 text-2xl font-bold py-4 px-8 rounded-full shadow-xl transition-transform duration-300 hover:scale-105">
        $1,000 Cash Prize for the Champion
      </div>
    </div>

    <!-- CTA Section -->
    <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-6">
      <a href="https://discord.gg/RC2A5cxG" target="_blank"
         class="px-8 py-4 bg-blue-700 hover:bg-blue-800 text-white text-lg font-bold rounded-full shadow-lg transition duration-300 transform hover:scale-105">
        Join Discord
      </a>
      <span class="text-white text-lg">Registration closes <span class="font-semibold text-yellow-200">August 10th</span></span>
    </div>
  </div>

  <!-- Footer -->
  <div class="mt-24 text-center text-sm text-gray-400">
    &copy; <?php echo date('Y'); ?> Prospects2Pro. All rights reserved.
  </div>

</body>
</html>
