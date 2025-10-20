<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title', 'Portofolio Saya'); ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

  <style>
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }
    :target { scroll-margin-top: 80px; }

    .navbar {
      transition: all 0.4s ease;
      background: transparent;
      backdrop-filter: none;
      animation: slideDown 1s ease-out;
    }

    .navbar.scrolled {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      box-shadow: 0 2px 10px rgba(255, 105, 180, 0.3);
    }

    @keyframes slideDown {
      0% { transform: translateY(-100%); }
      100% { transform: translateY(0); }
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.1rem;
      background: linear-gradient(90deg, #ff66b2, #f3f2f4, #ff66b2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-size: 200%;
      animation: colorFlow 5s infinite alternate;
      transition: transform 0.3s ease, filter 0.3s ease, background 0.5s ease;
    }

    .navbar-brand:hover {
      transform: scale(1.05);
      filter: drop-shadow(0 0 8px #ffb6c1);
    }

    .navbar-brand.active {
      animation: clickColor 1s ease forwards;
    }

    @keyframes colorFlow {
      0% { background-position: 0%; }
      100% { background-position: 100%; }
    }

    @keyframes clickColor {
      0% { filter: hue-rotate(0deg); }
      100% { filter: hue-rotate(360deg); }
    }

    .navbar.scrolled .navbar-brand {
      background: linear-gradient(90deg, #b43cda, #ff66b2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 0 6px rgba(180, 60, 218, 0.3));
    }

    .nav-link {
      color: #333 !important;
      font-weight: 500;
      position: relative;
      overflow: hidden;
      transition: color 0.3s;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #ff66b2;
      transition: width 0.3s;
    }

    .nav-link:hover {
      color: #ff66b2 !important;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .nav-link.active {
      color: #fff !important;
    }

    .nav-link.active::after {
      width: 100%;
      background-color: #fff;
    }

    #about {
      background: linear-gradient(135deg, #ffe6f7, #ffffff);
      color: #333;
      padding: 100px 0;
    }
    #about h2 {
      color: #ff66b2;
      font-weight: 700;
      margin-bottom: 20px;
    }
    #about p {
      font-size: 1.1rem;
      max-width: 750px;
      margin: auto;
      line-height: 1.7;
    }

    #projects {
      background: linear-gradient(135deg, #f8f9ff, #ffe6f7);
      color: #333;
      padding: 100px 0;
      position: relative;
      overflow: hidden;
    }

    #projects::before {
      content: "";
      position: absolute;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      background: radial-gradient(circle, rgba(255,192,203,0.2) 2px, transparent 2px);
      background-size: 50px 50px;
      animation: floatParticles 12s linear infinite;
    }

    @keyframes floatParticles {
      0% { transform: translate(0,0); }
      100% { transform: translate(50px,50px); }
    }

    #projects h2 {
      color: #ff66b2;
      font-weight: 700;
      margin-bottom: 40px;
    }

    .project-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      overflow: hidden;
      position: relative;
    }

    .project-card::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 4px;
      bottom: 0;
      left: 0;
      background: linear-gradient(90deg, #ff66b2, #8a2be2);
      transition: width 0.4s;
    }

    .project-card:hover::after { width: 100%; }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(255, 105, 180, 0.5);
    }

    .project-card img {
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .project-card:hover img { transform: scale(1.1); }

    .project-card .card-body {
      text-align: center;
      padding: 25px;
    }

    footer {
      background: linear-gradient(135deg, #ff66b2, #c71585);
    }
    footer p { color: #fff; }

    section[data-aos] {
      opacity: 0;
      transform: translateY(50px);
    }
    section.aos-animate {
      opacity: 1;
      transform: translateY(0);
    }

    .btn-pink {
      background: linear-gradient(to right, #ff66b2, #ff1493);
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      transition: 0.3s;
    }
    .btn-pink:hover {
      background: linear-gradient(to right, #ff1493, #ff66b2);
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(255, 105, 180, 0.4);
    }
  </style>

  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>#home" id="brandName">
        MFD. Mufidah Erisa Ramadhani
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('home')); ?>#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <footer class="text-center py-4">
    <div class="container">
      <p class="mb-0">&copy; <?php echo e(date('Y')); ?> Mufidah Erisa Ramadhani. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    const navbar = document.querySelector('.navbar');
    const brand = document.getElementById('brandName');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    brand.addEventListener('click', () => {
      brand.classList.add('active');
      setTimeout(() => brand.classList.remove('active'), 1000);
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
      });
    });
  </script>
  

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH G:\portofolio-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>