<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Héctor Alejandro</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="text-gray-800">

  <!-- Header -->
  <header class="text-center py-20 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white shadow-lg flex flex-col items-center">
    <img src="<?php echo 'images/yo.png'; ?>" alt="Héctor Alejandro" class="w-36 h-36 rounded-full border-4 border-white mb-6 object-cover">
    <h1 class="text-5xl font-bold mb-3 drop-shadow-lg">I am Héctor Alejandro</h1>
    <p class="text-2xl mb-6 drop-shadow">Web Developer Junior</p>
    <div class="flex justify-center gap-6 text-4xl">
      <a href="https://www.linkedin.com/in/héctor-alejandro-provenzano-blanco" target="_blank" class="hover:text-blue-200 transition-colors">
        <i class="bi bi-linkedin"></i>
      </a>
      <a href="https://github.com/AlejandroProve" target="_blank" class="hover:text-gray-200 transition-colors">
        <i class="bi bi-github"></i>
      </a>
    </div>
    <div class="mt-8 animate-bounce">
      <i class="bi bi-chevron-double-down text-3xl"></i>
    </div>
  </header>

  <!-- About Me -->
  <section class="max-w-3xl mx-auto text-center py-20 bg-gray-50 rounded-xl shadow-lg my-12">
    <h2 class="text-4xl font-semibold mb-6">About Me</h2>
    <p class="text-lg leading-relaxed">
      I am a passionate junior web developer with experience in HTML, CSS, JavaScript, PHP, and Tailwind CSS. 
      I love building modern, responsive, and visually appealing websites that make an impact.
    </p>
  </section>

  <!-- Projects -->
  <section class="max-w-6xl mx-auto py-20 bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 rounded-xl my-12">
    <h2 class="text-4xl font-semibold text-center mb-12">Projects</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
      
      <!-- Project Card -->
      <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300 overflow-hidden">
        <img src="images/proyecto1.png" alt="Proyecto 1" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col">
          <h3 class="text-2xl font-bold mb-3">Calculadora JS</h3>
          <p class="flex-grow mb-4 text-gray-700">A calculator built with HTML, CSS, and JavaScript. Interactive and responsive.</p>
          <div class="flex gap-3">
            <a href="#" class="flex-1 py-2 text-center bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg shadow hover:from-blue-600 hover:to-purple-600 transition">View Project</a>
            <a href="#" class="flex-1 py-2 text-center bg-gray-200 rounded-lg hover:bg-gray-300 transition">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300 overflow-hidden">
        <img src="images/proyecto2.png" alt="Proyecto 2" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col">
          <h3 class="text-2xl font-bold mb-3">Landing Page</h3>
          <p class="flex-grow mb-4 text-gray-700">Responsive landing page built with HTML, CSS, and Bootstrap. Clean design and smooth UX.</p>
          <div class="flex gap-3">
            <a href="#" class="flex-1 py-2 text-center bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg shadow hover:from-blue-600 hover:to-purple-600 transition">View Project</a>
            <a href="#" class="flex-1 py-2 text-center bg-gray-200 rounded-lg hover:bg-gray-300 transition">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300 overflow-hidden">
        <img src="images/proyecto3.png" alt="Proyecto 3" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col">
          <h3 class="text-2xl font-bold mb-3">Portfolio PHP</h3>
          <p class="flex-grow mb-4 text-gray-700">My portfolio built with PHP and Tailwind, including a contact form with PHPMailer integration.</p>
          <div class="flex gap-3">
            <a href="#" class="flex-1 py-2 text-center bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg shadow hover:from-blue-600 hover:to-purple-600 transition">View Project</a>
            <a href="#" class="flex-1 py-2 text-center bg-gray-200 rounded-lg hover:bg-gray-300 transition">Source Code</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Contact -->
  <section class="max-w-2xl mx-auto py-20 bg-gray-100 rounded-xl shadow-lg my-12">
    <h2 class="text-4xl font-semibold text-center mb-8">Contact Me</h2>
    <form action="send_mail.php" method="POST" class="bg-white p-8 rounded-xl shadow-xl flex flex-col gap-4">
      <input type="text" name="name" placeholder="Name" class="border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      <input type="email" name="email" placeholder="Email" class="border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      <textarea name="message" placeholder="Write your message" rows="5" class="border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
      <button type="submit" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-3 rounded-lg shadow hover:from-blue-600 hover:to-purple-600 transition">Send Message</button>
    </form>

    <?php
      if(isset($_GET['success'])){
        if($_GET['success']=='1'){
          echo '<p class="text-green-600 text-center mt-4 text-lg font-semibold">Message sent successfully!</p>';
        } elseif($_GET['success']=='0'){
          echo '<p class="text-red-600 text-center mt-4 text-lg font-semibold">Error sending message.</p>';
        }
      }
    ?>
  </section>

  <!-- Footer -->
  <footer class="text-center py-8 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">
    <p>&copy; 2026 Héctor Alejandro. All rights reserved.</p>
  </footer>

</body>
</html>
