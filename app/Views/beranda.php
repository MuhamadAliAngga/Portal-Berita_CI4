<?= $this->extend('layout_beranda') ?>

<?= $this->section('content') ?>


<body>
   <header class="header">
    <a href="#" class="logo">
        <img src="/image/java.png" alt="Logo Java">
    </a>

    <h1>Dunia<span>Coding</span></h1>

    <nav class="navbar">
        <a href="#home">Smester 1</a>
        <a href="#about">Smester 2</a>
        <a href="#menu">Smester 3</a>
        <a href="#product">Smester 4</a>
        <a href="#review">Smester 5</a>
        <a href="#contact">Smester 6</a>
        <a href="#blogs">Smester 7</a>
        <a href="#blogs">Smester 8</a>
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
<section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
<section class="menu" id="menu">
    <h1 class="heading">Pemograman<span> II</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Pengenalan Framework</h3>
        </div>
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Tentang CI4</h3>
        </div>
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Instalasi</h3>
        </div>
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Membuat Database</h3>
        </div>
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Tutorial CI4</h3>
        </div>
        <div class="box">
            <img src="/image/java.png" alt="" >
            <h3>Project</h3>
        </div>
    </div>
</section>
<!--MENU SECTION END-->


<!--PRODUK SECTION START-->
<section class="products" id="products">
    <h1 class="heading">our <span>product</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="java.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$18.00 <span>$80.77</span></div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="java.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$18.00 <span>$80.77</span></div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="java.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$18.00 <span>$80.77</span></div>
            </div>
        </div>
    </div>
</section>
<!--PRODUK SECTION END-->


<!--REVIEW SECTION START-->
<section class="review" id="review">
    <h1 class="heading">customer <span>review</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="java.png" alt="" class="quote">
            <p>jjbjh  hhdbsfhf sdf dfv dfv sdfv sdfv sdf vsdf vsd vsdvsdgb db sfdbg sf bgs b sdg bdg bsd gb sdb sdgb sdg bsd gb sd 
                dfb sdgbf sdb sd bsdbsd bds bd sb sdgbdgbcdf bvaeds df vsdfse rg se sdf vsd fvsts dfv sdfv sdvs f sdf sdf sdfv sdf vsdf 
                dfv sdf sdf vsdf vsd vdfvv </p>
            <img src="java.png" alt="" class="user">
            <h3>jhon shon</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    <div class="box">
        <img src="java.png" alt="" class="quote">
        <p>jjbjh  hhdbsfhf sdf dfv dfv sdfv sdfv sdf vsdf vsd vsdvsdgb db sfdbg sf bgs b sdg bdg bsd gb sdb sdgb sdg bsd gb sd 
            dfb sdgbf sdb sd bsdbsd bds bd sb sdgbdgbcdf bvaeds df vsdfse rg se sdf vsd fvsts dfv sdfv sdvs f sdf sdf sdfv sdf vsdf 
            dfv sdf sdf vsdf vsd vdfvv </p>
        <img src="java.png" alt="" class="user">
        <h3>jhon shon</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>
    <div class="box">
        <img src="java.png" alt="" class="quote">
        <p>jjbjh  hhdbsfhf sdf dfv dfv sdfv sdfv sdf vsdf vsd vsdvsdgb db sfdbg sf bgs b sdg bdg bsd gb sdb sdgb sdg bsd gb sd 
            dfb sdgbf sdb sd bsdbsd bds bd sb sdgbdgbcdf bvaeds df vsdfse rg se sdf vsd fvsts dfv sdfv sdvs f sdf sdf sdfv sdf vsdf 
            dfv sdf sdf vsdf vsd vdfvv </p>
        <img src="java.png" alt="" class="user">
        <h3>jhon shon</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>
</div>
</section>
<!--REVIEW SECTION END-->


<!--CONTACT SECTION START-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63446.25087615887!2d106.47896286198467!3d-6.343422823357335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e420831a08f0f57%3A0x3d08fd03799a5d69!2sSuka%20Manah%2C%20Kec.%20Jambe%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1717254495516!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="">
            <h3>get in touch</h3>
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
            <input class="btn" type="submit" value="contact now">
        </form>
    </div>
</section>
<!--CONTACT SECTION END-->


<!--FOOTER SECTION START-->
<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>
    <div class="links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Menu</a>
        <a href="#">Product</a>
        <a href="#">Review</a>
        <a href="#">Contact</a>
        <a href="#">Blogs</a>
    </div>
    <div class="credit">created by <span>Aryo FF</span></div>
</section>
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
document.querySelector('#search-btn').onclick = () =>{
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