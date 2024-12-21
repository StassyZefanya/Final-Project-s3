

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CertifyMe</title>

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!--feather icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--stylecss-->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>

    <!--navbar-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Certify<span>Me</span></a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>

        <?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true): ?>
            <a href="controllers/logout.php" class="login-button">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login-button">Login</a>
        <?php endif; ?>

      </div>
    </nav>
    <!--nav end-->

    <!--Hero Section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>CREATE YOUR <span>CERTIFICATE</span></h1>
        <p>Selamat Datang di Website CertifyMe!</p>
        <p>Kami Menyediakan Template Sertifikat yang Siap Digunakan.</p>
      </main>
      
      <!--LOGIN SECTION-->
      <!-- <div class="wrapper">
      <div class="form-box login">
        <h2>Login Sekarang!</h2>
        <form method="POST">
          <div class="input-box">
            <span class="icon"><i class="bi bi-user"></i></span>
            <input type="text" value="username" required>
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bi bi-shield-lock"></i></span>
            <input type="password" value="password" required>
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox"> Remember Me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="login-register">
            <p>Dont Have a Account?<a href="#" class="register-link">Register</a></p>
          </div>
        </form>
      </div>
      </div> -->
    </section>
    <!--Hero Section end-->

    <!--about section start-->
    <section id="about" class="about">
      <h2><span>ABOUT</span> US</h2>

      <div class="row">
        <div class="about-img">
          <img src="../assets/img/crtf.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>kenapa harus pakai template kami?</h3>
          <p>
            Kami menyediakan design template sertifikat event yang bisa kalian
            gunakan langsung. Kalian bisa langung menggunakan, mengubah, dan
            mendownload template yang kami sediakan. jangan takun kehabisan ide
            template, karena kami mempunyai template yang beragam.
          </p>
        </div>
      </div>
      <!--MENU SECTION START-->
    </section>
    <!--about section end-->

    <section id="menu" class="menu">
      <h2><span>DESIGN</span> TEMPLATE</h2>
      <p>Pilih Template yang Kamu Suka!</p>

      <div class="row">
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template1 -</h3>
        </div>
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template2 -</h3>
        </div>
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template3 -</h3>
        </div>
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template4 -</h3>
        </div>
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template5 -</h3>
        </div>
        <div class="menu-card">
          <img
            src="../assets/img/tmplt1.png"
            alt="contoh template"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- template6 -</h3>
        </div>
      </div>
    </section>
    <!--MENU SECTION END-->

    <!--CONTACT SECTION START-->
    <section id="contact" class="contact">
      <h2><span>CONTACT</span> US</h2>
      <p>Silahkan Hubungi Kami Untuk Mencetak Design Kamu!</p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5042485767394!2d107.29312759999995!3d-6.328644699999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977fb6f4bf2df%3A0x3f36bb06350dc901!2sTechnomart%20Galuh%20Mas!5e0!3m2!1sid!2sid!4v1730190698642!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No Handphone" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!--CONTACT SECTION END-->

    <!--FOOTER-->
    <footer>
      <div class="socials">
        <a href="#">
          <i data-feather="instagram"></i>
        </a>
        <a href="#">
          <i data-feather="facebook"></i>
        </a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Stassy Zefanya</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!--FOOTER END-->

    <!--feather icons-->
    <script>
      feather.replace();
    </script>

    <!--JS-->
    <script src="../assets/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
  </body>
</html>
