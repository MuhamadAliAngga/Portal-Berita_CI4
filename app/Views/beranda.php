<?= $this->extend('layout_beranda') ?>

<?= $this->section('content') ?>


<body>
<!--HEADER SECTION START-->
<header class="header">
    <a href="/" class="logo">
        <img src="/image/logo.png" alt="Logo Java">
    </a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#menu">Pemrograman</a>
        <a href="#menu">Keamanan Teknologi</a>
        <a href="#menu">Seni</a>
        <a href="#menu">Religi</a>
        <a href="#menu">Gosip Mahasiswa</a>
        <a href="#menu">Profil</a>
        <a href="#menu">Contact</a>
    </nav>
    <div class="icon ">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
</header>
<!--HEADER SECTION END-->


<!--HOME SECTION START-->
<section id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="content text-center">
                        <h1>Pemograman<span>Coding</span></h1>
                        <p>Tingkatkan Keterampilan Koding Anda Bersama Dunia Koding</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content text-center">
                        <h1>Belajar<span>Programming</span></h1>
                        <p>Mulai dari dasar hingga mahir dengan tutorial lengkap</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content text-center">
                        <h1>Komunitas<span>Developer</span></h1>
                        <p>Bergabung dengan komunitas dan berkembang bersama</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
<!--HOME SECTION ENDS-->

<!--MENU SECTION STAR-->
<section class="blogs" id="blogs">
    <h1 class="heading">CodeIgniter<span> 4</span></h1>
    <div class="box-container">
    <?php foreach ($artikel_all as $row) : ?>
        <a href="/artikel/detail/<?= $row->id_artikel ?>">
            <div class="box">
                <div class="image">
                    <img src="<?= base_url("image/thumbnail/") . $row->thumbnail ?>" alt="">
                </div>
                <div class="content">
                    <h3><?= $row->judul ?></h3>
                </div>
            </div>
        </a> 
    <?php endforeach ?> 
    </div>
</section>
<!--MENU SECTION END-->



    <!--CONTACT SECTION START-->
    <section class="contact" id="contact">
        <h1 class="heading">Contact<span> Us</span></h1>
        <div class="row">
            <form action="">
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input class="btn" type="submit" value="Contact Now">
            </form>
        </div>
    </section>
    <!--CONTACT SECTION END-->


    <!--FOOTER SECTION START-->
    <footer class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
        <div class="links">
            <a href="/">Home</a>
            <a href="/">Pemrograman</a>
            <a href="/">Keamanan Teknologi</a>
            <a href="/">Seni</a>
            <a href="/">Religi</a>
            <a href="/">Gosip Mahasiswa</a>
            <a href="/">Profil</a>
        </div>
        <div class="credit">Created By <span>Aryo FF</span></div>
    </footer>
    <!--FOOTER SECTION END-->
    <script>
        let cartItem = document.querySelector('.cart-items-container');

        document.querySelector('#cart-btn').onclick = () => {
            cartItem.classList.toggle('active'); // Tutup navbar ketika cart item dibuka
            navbar.classList.remove('active');
            searchForm.classList.remove('active');
        }

        // Menutup form pencarian saat salah satu tombol lainnya diklik
        document.querySelector('#search-btn').onclick = () => {
            document.querySelector('.search-form').classList.toggle('active');
            navbar.classList.remove('active');
            cartItem.classList.remove('active');
            searchForm.classList.remove('active');
        }

        let searchForm = document.querySelector('.search-form');
        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            navbar.classList.remove('active');
            cartItem.classList.remove('active');
        }
        let navbar = document.querySelector('.navbar');
        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active');
            cartItem.classList.remove('active');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            searchForm.classList.remove('active');
            cartItem.classList.remove('active');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


<?= $this->endSection() ?>