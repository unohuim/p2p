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
<body class="bg-gradient-to-b from-[#001F3F] via-[#003366] to-white text-white min-h-screen font-sans">

  <div class="max-w-6xl mx-auto px-6 py-16">
    <div class="flex flex-col items-center text-center">
      <div class="relative w-40 h-40 mb-6 transition-transform duration-300 hover:scale-110">
        <img src="/img/p2plogo.jpg" alt="P2P Logo" class="absolute inset-0 w-full h-full object-contain rounded-full shadow-2xl bg-white p-2">
      </div>

      <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-yellow-100 drop-shadow-xl">
        Take Your Fantasy Game to the Pros
      </h1>
      <p class="mt-4 text-xl md:text-2xl text-gray-200 max-w-3xl">
        Dive into a next-gen dynasty league where you manage both NHL vets and emerging prospects. If you're serious about fantasy hockey, welcome home.
      </p>
    </div>

    <div class="mt-12 text-gray-100 space-y-6 text-lg md:text-xl leading-relaxed">
      <p>
        Draft, trade, and develop players in a fully immersive franchise experience. Whether you're scouting a junior phenom or trading for a proven leader, every decision shapes your legacy.
      </p>
      <p>
        Prospects2Pro features two separate drafts—one for proven stars, another for tomorrow’s legends. Manage your cap, make smart trades, and dominate year after year.
      </p>
      <p>
        Backed by a veteran commissioner team and an active Discord community, P2P delivers a professional-grade league built by fanatics, for fanatics.
      </p>
    </div>

    <div class="mt-10 bg-yellow-400 text-gray-900 text-2xl font-bold py-4 px-6 inline-block rounded-xl shadow-xl text-center transition-transform duration-300 hover:scale-105">
      $1,000 Cash Prize for the Champion
    </div>

    <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-6">
      <a href="https://discord.gg/RC2A5cxG" target="_blank"
         class="px-8 py-4 bg-blue-700 hover:bg-blue-800 text-white text-lg font-bold rounded-full shadow-lg transition duration-300 transform hover:scale-105">
        Join Discord
      </a>
      <span class="text-white text-lg">Registration closes <span class="font-semibold text-yellow-200">August 10th</span></span>
    </div>
  </div>

  <div class="mt-24 text-center text-sm text-gray-400">
    &copy; <?php echo date('Y'); ?> Prospects2Pro. All rights reserved.
  </div>

</body>
</html>
