

<?php $__env->startSection('title', 'Mufidah Erisa Ramadhani - Web Developer'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero-section vh-100 d-flex align-items-center" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 text-center text-lg-start" data-aos="fade-right">
                <h1 class="display-3 fw-bold text-white animate-fade-down">Mufidah Erisa Ramadhani</h1>
                <p class="lead text-white-50 my-4 animate-fade-up">I am passionate about web development and enjoy sharing my
              knowledge with others. From mastering Next.js to designing
              beautiful interfaces with Tailwind, let's embark on this learning
              journey and build something great together!</p>
                <a href="#projects" class="btn btn-primary btn-lg rounded-pill px-4 me-2 animate-bounce">Lihat Proyek Saya</a>
                <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4 animate-bounce-delay">Hubungi Saya</a>
            </div>
            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-delay="200">
                <div class="profile-image-container animate-float">
                    <img src="<?php echo e(asset('images/fida3.jpg')); ?>" alt="Profile Picture" class="img-fluid profile-photo shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="about">
    <div class="container">
        <div class="text-center mb-5 animate-fade-up">
            <h2 class="fw-bold">Tentang Saya</h2>
            <p class="text-muted">Perjalanan dan keahlian yang saya miliki.</p>
        </div>
        <div class="row align-items-center">
 
            <div class="col-lg-5 mb-4 mb-lg-0 animate-zoom-in">
                <div class="profile-photo-wrapper mx-auto" style="max-width: 300px; border-radius: 50%; overflow: hidden;">
                    <img src="<?php echo e(asset('images/fida2.jpg')); ?>" alt="Profile Picture" class="img-fluid profile-photo shadow-lg">
                </div>
            </div>

            <div class="col-lg-7 animate-fade-left">
                <h3 class="fw-light mb-3">Membangun Dunia Digital dari Setiap Ide yang Tercipta</h3>
                <p class="text-muted mb-4">
                    Saya adalah seorang Web Developer dengan fokus backend Laravel dan juga mahir frontend development. Saya menyukai tantangan membangun aplikasi yang <strong>estetik, cepat, responsif, dan user-friendly</strong>. Kode yang bersih dan terstruktur menjadi prioritas saya untuk menciptakan pengalaman pengguna yang luar biasa.  
                    Saya senang mengubah ide menjadi solusi digital nyata, mulai dari logika sistem backend hingga antarmuka interaktif di frontend.
                </p>

                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <div class="service-card p-4 border rounded shadow-sm hover-scale transition bg-white">
                            <i class="fas fa-code fa-2x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Backend Development</h5>
                            <p class="small text-muted">Membangun fondasi digital yang kuat melalui integrasi sistem dan desain database yang elegan.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="service-card p-4 border rounded shadow-sm hover-scale transition bg-white">
                            <i class="fas fa-layer-group fa-2x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Frontend Integration</h5>
                            <p class="small text-muted">Menyatukan estetika dan fungsionalitas untuk menciptakan website yang responsif dan berkesan.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="service-card p-4 border rounded shadow-sm hover-scale transition bg-white">
                            <i class="fas fa-mobile-alt fa-2x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Mobile Friendly</h5>
                            <p class="small text-muted">Membuat aplikasi web dan mobile yang tetap nyaman di semua perangkat.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="service-card p-4 border rounded shadow-sm hover-scale transition bg-white">
                            <i class="fas fa-lightbulb fa-2x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Problem Solving</h5>
                            <p class="small text-muted">Cepat menemukan solusi teknis dengan logika dan analisa yang tepat.</p>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>

<section class="py-5 bg-light" id="skills">
    <div class="container">
        <div class="text-center mb-5 animate-fade-up">
            <h2 class="fw-bold">Keahlian Saya</h2>
            <p class="text-muted">Teknologi dan tools yang saya kuasai.</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <?php
                $skills = ['Laravel','PHP','JavaScript','MySQL','HTML','CSS','Tailwind','Flutter'];
            ?>
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="skill-tag text-white px-4 py-2 rounded shadow-sm animate-scale transition" 
                     style="background: linear-gradient(135deg,#ff7eb9,#ff4da6);"
                     onclick="toggleSkillColor(this)">
                    <?php echo e($skill); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<style>
.profile-photo-wrapper {
    transition: transform 0.3s ease;
}
.profile-photo-wrapper:hover {
    transform: scale(1.05);
}

.hover-scale {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-scale:hover {
    transform: translateY(-5px) scale(1.03);
    box-shadow: 0 15px 25px rgba(0,0,0,0.15);
}
</style>


<section class="py-5" id="projects">
    <div class="container">
        <div class="text-center mb-5 animate-fade-up">
            <h2 class="fw-bold">Project Saya</h2>
            <p class="text-muted">Beberapa pekerjaan yang telah saya selesaikan.</p>
        </div>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 col-md-6 mb-4 animate-zoom-in">
                    <div class="card project-card h-100">
                        <div class="project-image-wrapper">
                            <img src="<?php echo e(asset('storage/' . $project->image)); ?>" class="card-img-top project-img" alt="<?php echo e($project->title); ?>"
                                 data-bs-toggle="modal" data-bs-target="#projectModal<?php echo e($project->id); ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo e($project->title); ?></h5>
                            <p class="card-text text-muted"><?php echo e(Str::limit($project->description, 100)); ?></p>
                            <!-- Read More button -->
                            <button class="btn btn-link p-0 mt-2" data-bs-toggle="modal" data-bs-target="#projectModal<?php echo e($project->id); ?>">
                                Read More &rarr;
                            </button>
                        </div>
                        <?php if($project->url): ?>
                        <div class="card-footer bg-transparent border-0 text-end pb-3">
                            <a href="<?php echo e($project->url); ?>" target="_blank" class="btn btn-sm btn-primary animate-glow">
                                Live Site <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                
                <div class="modal fade" id="projectModal<?php echo e($project->id); ?>" tabindex="-1" aria-labelledby="projectModalLabel<?php echo e($project->id); ?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold" id="projectModalLabel<?php echo e($project->id); ?>"><?php echo e($project->title); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="<?php echo e(asset('storage/' . $project->image)); ?>" class="img-fluid mb-3" alt="<?php echo e($project->title); ?>">
                        <p class="text-muted"><?php echo e($project->description); ?></p>
                      </div>
                      <?php if($project->url): ?>
                      <div class="modal-footer border-0">
                        <a href="<?php echo e($project->url); ?>" target="_blank" class="btn btn-primary">
                          Kunjungi Live Site <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php $__currentLoopData = [1,2,3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $images = ['project1.jpg','project2.jpg','project3.jpg'];
                        $titles = ['Proyek Pertama','Proyek Kedua','Proyek Ketiga'];
                        $descriptions = [
                            "Proyek ini merupakan eksperimen interaktif berbasis HTML, CSS, dan JavaScript dengan tema animasi Toy Story. Saya membuat antarmuka yang menampilkan tombol VISIBLE, INCREASE, dan DECREASE untuk mengontrol elemen secara dinamis di dalam halaman. Fokus utama proyek ini adalah menghadirkan tampilan yang menyenangkan sekaligus memperdalam pemahaman saya tentang manipulasi DOM dan interaktivitas berbasis JavaScript.",
                            "Proyek ini saya buat menggunakan Flutter dengan konsep navigasi antar layar (Bottom Navigation Bar). Aplikasi ini menampilkan berbagai tampilan (screen) dengan gambar kucing yang berbeda pada setiap halamannya. Melalui proyek ini, saya belajar mengimplementasikan widget, state management sederhana, serta navigasi antar halaman di Flutter. Fokus utamanya adalah menciptakan antarmuka yang lembut, responsif, dan mudah digunakan.",
                            "Proyek ini saya buat menggunakan Next.js sebagai bagian dari tugas sekolah di SMK Telkom Makassar. Website ini dirancang untuk membantu proses perizinan BK (Bimbingan Konseling) secara digital. Melalui proyek ini, saya belajar bagaimana membangun aplikasi web dinamis dengan sistem autentikasi, navigasi antar halaman, dan pengelolaan data pengguna. Tujuan utama dari proyek ini adalah mempermudah siswa dalam mengajukan izin serta memudahkan guru BK dalam memantau dan memproses pengajuan izin secara efisien."
                        ];
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4 animate-zoom-in">
                        <div class="card project-card h-100">
                            <div class="project-image-wrapper">
                                <img src="<?php echo e(asset('images/' . $images[$i-1])); ?>" class="card-img-top project-img" alt="<?php echo e($titles[$i-1]); ?>"
                                     data-bs-toggle="modal" data-bs-target="#defaultModal<?php echo e($i); ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo e($titles[$i-1]); ?></h5>
                                <p class="card-text text-muted"><?php echo e(Str::limit($descriptions[$i-1], 100)); ?></p>
                                <button class="btn btn-link p-0 mt-2" data-bs-toggle="modal" data-bs-target="#defaultModal<?php echo e($i); ?>">
                                    Read More &rarr;
                                </button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="modal fade" id="defaultModal<?php echo e($i); ?>" tabindex="-1" aria-labelledby="defaultModalLabel<?php echo e($i); ?>" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold" id="defaultModalLabel<?php echo e($i); ?>"><?php echo e($titles[$i-1]); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="<?php echo e(asset('images/' . $images[$i-1])); ?>" class="img-fluid mb-3" alt="<?php echo e($titles[$i-1]); ?>">
                            <p class="text-muted"><?php echo e($descriptions[$i-1]); ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
.project-image-wrapper {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.project-image-wrapper img {
    transition: transform 0.3s ease;
}

.project-image-wrapper:hover img {
    transform: scale(1.05);
}

.btn-link {
    font-size: 0.9rem;
    text-decoration: underline;
    color: #ef84c9;
}
</style>

<section id="contact" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase text-primary animate-fade-down">Hubungi Saya</h2>
      <p class="text-muted fs-5 animate-fade-up">
        Ayo <span class="fw-semibold text-dark">berkolaborasi</span> atau sekadar <span class="fw-semibold text-dark">menyapa</span>!  
        Saya selalu terbuka untuk ide baru dan proyek menarik.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="p-4 bg-white shadow-lg rounded-4 animate-zoom-in">
          <?php echo csrf_field(); ?>
            <div class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label fw-semibold">Nama Anda</label>
              <input type="text" class="form-control rounded-3 border-0 shadow-sm" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label fw-semibold">Email Anda</label>
              <input type="email" class="form-control rounded-3 border-0 shadow-sm" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="col-12">
              <label for="subject" class="form-label fw-semibold">Subjek</label>
              <input type="text" class="form-control rounded-3 border-0 shadow-sm" id="subject" name="subject" placeholder="Masukkan subjek" required>
            </div>
            <div class="col-12">
              <label for="message" class="form-label fw-semibold">Pesan</label>
              <textarea class="form-control rounded-3 border-0 shadow-sm" id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
            </div>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill shadow-sm hover-glow">
              <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<style>
@keyframes toast-in {
  0% { transform: translateY(-50px) scale(0.8); opacity: 0; }
  100% { transform: translateY(0) scale(1); opacity: 1; }
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
}

.animate-bounce {
  animation: bounce 1s infinite;
}

#successToast {
  background: linear-gradient(90deg, #28a745, #218838);
  color: #fff;
  animation: toast-in 0.5s ease-out;
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); 

  const container = document.getElementById('successToastContainer');
  container.style.display = 'block';

  setTimeout(() => {
    hideToast();
  }, 3000);

  this.reset();
});

function hideToast() {
  const container = document.getElementById('successToastContainer');
  container.style.display = 'none';
}
</script>


<script>
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    var toastEl = document.getElementById('successToast');
    var toast = new bootstrap.Toast(toastEl);
    toast.show();

    
    this.reset();
  });
</script>


<style>
  .hover-glow:hover {
    box-shadow: 0 0 20px rgba(0, 123, 255, 0.5);
    transform: scale(1.05);
    transition: all 0.3s ease;
  }

  .animate-fade-down {
    animation: fadeDown 1s ease-in-out;
  }

  .animate-fade-up {
    animation: fadeUp 1s ease-in-out;
  }

  .animate-zoom-in {
    animation: zoomIn 1s ease;
  }

  @keyframes fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes zoomIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
  }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

body {
    font-family: 'Poppins', sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, #000000 0%, #ff69b4 50%, #ff1493 100%);
    color: white;
}
.profile-image-container {
    position: relative;
    padding: 1rem;
    border: 2px solid rgba(255, 182, 193, 0.4);
    border-radius: 50%;
}
.profile-image-container img {
    border: 5px solid #000000;
}

.profile-photo {
    border-radius: 50% / 40%;
    border: 4px solid #000;
    padding: 5px;
    background: radial-gradient(circle at center, #ff8acb, #ff1493);
    width: 100%;
    height: auto;
    object-fit: cover;
    box-shadow: 0 0 20px rgba(255, 20, 147, 0.3);
    display: block;
    max-width: 380px;
    margin: 0 auto;
}

.profile-image-container {
    background: radial-gradient(circle at center, rgba(255,192,203,0.3), transparent 70%);
    border-radius: 50% / 40%;
    padding: 10px;
}

section {
    overflow: hidden;
    padding: 80px 0;
}
.bg-light {
    background-color: #ffe4f1 !important;
}

@keyframes fadeDown {from {opacity: 0; transform: translateY(-30px);} to {opacity: 1; transform: translateY(0);}}
@keyframes fadeUp {from {opacity: 0; transform: translateY(30px);} to {opacity: 1; transform: translateY(0);}}
@keyframes fadeLeft {from {opacity: 0; transform: translateX(30px);} to {opacity: 1; transform: translateX(0);}}
@keyframes zoomIn {from {opacity: 0; transform: scale(0.8);} to {opacity: 1; transform: scale(1);}}
@keyframes float {0%, 100% {transform: translateY(0);} 50% {transform: translateY(-10px);}}
@keyframes glow {0%, 100% {box-shadow: 0 0 10px #ff69b4;} 50% {box-shadow: 0 0 20px #ff1493;}}

.animate-fade-down {animation: fadeDown 1s ease forwards;}
.animate-fade-up {animation: fadeUp 1s ease forwards;}
.animate-fade-left {animation: fadeLeft 1s ease forwards;}
.animate-zoom-in {animation: zoomIn 1s ease forwards;}
.animate-zoom-in-delay {animation: zoomIn 1.2s ease forwards;}
.animate-float {animation: float 4s ease-in-out infinite;}
.animate-bounce {animation: float 3s ease-in-out infinite;}
.animate-bounce-delay {animation: float 3s ease-in-out 1s infinite;}
.animate-scale:hover {transform: scale(1.1);}
.animate-glow:hover {animation: glow 1.5s infinite alternate;}

.service-card {
    background: rgba(255, 182, 193, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 192, 203, 0.4);
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(255, 105, 180, 0.3);
}
.skill-tag {
    background-color: #ffb6c1;
    color: #000;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}
.skill-tag:hover {
    background-color: #ff1493;
    color: white;
    transform: scale(1.05);
}
.project-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease-in-out;
}
.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(255,20,147,0.25);
}
.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 20, 147, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.4s ease;
}
.project-card:hover .project-overlay {
    opacity: 1;
}
.form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 105, 180, 0.25);
    border-color: #ff69b4;
}
.btn-primary {
    background-color: #ff1493;
    border-color: #ff1493;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    background-color: #ff69b4;
    border-color: #ff69b4;
    transform: translateY(-2px);
}
.btn-outline-light:hover {
    background-color: #fff;
    color: #ff1493;
}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH G:\portofolio-app\resources\views/home.blade.php ENDPATH**/ ?>