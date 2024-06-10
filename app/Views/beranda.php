<?= $this->extend('layout_beranda') ?>

<?= $this->section('content') ?>


<body>
   <header class="header">
    <a href="#" class="logo">
        <img src="java.png" alt="Logo">
    </a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#product">Product</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
        <a href="#blogs">Blogs</a>
    </nav>
    <div class="icon ">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="java.png" alt="">
            <div class="content">
                <h3>Cart Item 01</h3>
                <div class="price">19$</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="java.png" alt="">
            <div class="content">
                <h3>Cart Item 01</h3>
                <div class="price">19$</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="java.png" alt="">
            <div class="content">
                <h3>Cart Item 01</h3>
                <div class="price">19$</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="java.png" alt="">
            <div class="content">
                <h3>Cart Item 01</h3>
                <div class="price">19$</div>
            </div>
        </div>
        <a href="#" class="btn">Checkout Now</a>
    </div>
   </header>
<!--HEADER SECTION END-->


<!--HOME SECTION START-->
<section class="home" id="home">
    <div class="conten">
        <h1>Dunia<span>Coding</span></h1>
        <p>Tingkatkan Keterampilan Koding Anda Bersama Dunia Koding</p>
            <a href="#" class="btn">Learn Now</a>
    </div>
</section>
<!--HOME SECTION ENDS--> 


<!--ABOUT SECTION STAR-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="image">
            <img src="java.png" alt="">
        </div>
        <div class="content">
            <h3>what makes our coffee special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac scelerisque felis.UHDGUG  EFU UEGF UY EFG EUFYGOUW UG EFUG EUYGO EWUGFOERY GF FOYU G FO FYEF U UWGEFU GOF AOW FO FOA WG OEF O F</p>
            <p>Phasellus at dui in lectus pulvinar mollis. Cras feJHBDFUBDOU  OFE GOUY O FOAWG FUYGEUYGWE   FG UG FUWE GFO GF FOUYGEW FUGF OUWE GFOYGE FOUGOFUWGOUYGEOF  OUYUF OE FEWGF OUEWG O EFrmentum felis ut odio suscipit blandit.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>
</section>
<!--ABOUT SECTION END-->


<!--MENU SECTION STAR-->
<section class="menu" id="menu">
    <h1 class="heading">our <span>menu</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="java.png" alt="" >
            <h3>teasty and healty</h3>
            <div class="price">$20.00 <span>$30.00</span></div>
            <a href="#" class="btn">add to cart</a>
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


<!--BLOGS SECTION START-->
<section class="blogs" id="blogs">
    <h1 class="heading">our <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="aa.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="tittle">Aryo Fadillah Pradana</a>
                <span>Front End</span>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="angga.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="tittle">Muhammad Ali Angga</a>
                <span>Back End</span>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="ramzi.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="tittle">Ahmar Ramzi Sanjaya</a>
                <span>Back End</span>
                <a href="ahmar.kelaspagi.my.id" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="warni.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="tittle">Warni</a>
                <span>Back End</span>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="hawasi.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="tittle">Siti Hawasi</a>
                <span>Front End</span>
                <a href="Hawasih.kelaspagi.my.id" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>
<!--BLOGS SECTION END-->


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
   <script src="script.js"></script>
</body>
</html>


<?= $this->endSection() ?>