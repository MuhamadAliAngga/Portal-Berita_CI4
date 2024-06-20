<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARTIKEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --main-color: #d3ad7f;
        --black: #13131a;
        --bg: #f0f0f0;
        --border: 0.2rem solid #0074D9;
        --borderr: 0.2rem solid #1E90FF;

    }

    * {
        font-size: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        transition: .2s linear;
    }

    html,
    body {
        font-size: 62.5%;
        padding: 0%;
        scroll-padding-top: 9rem;
        scroll-behavior: smooth;
        background: #CFD8DC;
        overflow-x: hidden;
    }

    html::-webkit-scrollbar-track {
        background: transparent;
    }

    html::-webkit-scrollbar-thumb {
        background: #fff;
        border-radius: 5rem;
    }

    section {
        padding: 3rem;
    }

    .heading {
        text-align: center;
        color: black;
        text-transform: uppercase;
        padding-bottom: 3.5rem;
        font-size: 4rem;
        font-weight: bold;
        /* Menambahkan tebal pada teks */
        font-family: 'Roboto', sans-serif;
        ;
        /* Contoh jenis font yang menarik */
        letter-spacing: 2px;
        /* Menambahkan jarak antar huruf */
        line-height: 1.2;
        /* Menyesuaikan ketinggian baris */
    }

    .heading span {
        color: #ffcc00;
        text-transform: uppercase;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        ;
        /* Memilih jenis font yang sama */
        letter-spacing: 1px;
        /* Menyesuaikan jarak antar huruf */
    }

    .btn {
        margin-top: 1rem;
        display: inline-block;
        padding: .9rem 3rem;
        font-size: 1.7rem;
        color: #fff;
        background: red;
        cursor: pointer;
    }

    .btn:hover {
        letter-spacing: .2rem;
    }


    /*--------HEADER--------*/
    .header {
        background-color: #CFD8DC;
        /* Warna abu-abu tua */
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.5rem;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 1);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        box-shadow: #000;
    }

    .header .logo img {
        height: 6rem;
    }

    .header h1 {
        font-size: 30px;
        color: #0074D9;
        cursor: pointer;
        margin-left: -20px;
    }

    .header span:hover {
        color: red;
    }


    /*--------DIV NAVBAR--------*/
    .header .navbar {
        margin-left: 20px;
        justify-content: flex-end;
    }

    .header .navbar a {
        margin: 1rem;
        font-size: 1.6rem;
        color: #0074D9;
        font-weight: bold;
    }


    /*--------DIV ICON--------*/
    .header .icon div {
        color: #0074D9;
        cursor: pointer;
        font-size: 2.5rem;
        margin-left: 2rem;
    }

    .header .icon div:hover {
        color: var(--main-color);
    }

    #menu-btn {
        display: none;
    }


    /*--------DIV SEARCH FORM--------*/
    .header .search-form.active {
        transform: scaleY(1);

    }

    .header .search-form {
        position: absolute;
        top: 105%;
        right: 1%;
        background: #0074D9;
        width: 50rem;
        height: 5rem;
        display: flex;
        align-items: center;
        transform: scaleY(0);
        transform-origin: top;
    }

    .header .search-form input {
        height: 100%;
        width: 100%;
        font-size: 1.6rem;
        color: #0074D9;
        padding: 11rem;
        text-transform: none;
    }

    .header .search-form label {
        cursor: pointer;
        font-size: 2.2rem;
        margin-left: 1.5rem;
        color: #0074D9;
    }

    .header .search-form label:hover {
        color: var(--main-color);
    }


    /**------MAIN SECTION------**/
    main {
        display: flex;
        margin-top: 15px;
        padding: 7%;

    }

    main article h2 {
        margin-bottom: 10px;
        font-size: 4rem;
        color: #0074D9;
    }

    main article h3 {
        margin-bottom: 10px;
        font-size: 3rem;
        color: #0074D9;
    }

    main article p {
        margin-bottom: 10px;
        line-height: 1.6;
        font-size: 1.5rem;
    }

    main .container1 article .meta {
        margin-bottom: 10px;
        color: white;
        font-size: 2rem;
        text-align: left;
        margin-left: 5px;
    }

    main .container1 article .meta i {
        margin-right: 5px;

    }

    main .container2 article .meta {
        margin-bottom: 10px;
        color: white;
        font-size: 1.5rem;
        text-align: 5px;
        margin-left: 5px;
    }

    .container1 {
        flex: 2;
        padding: 20px;
    }

    .container2 {
        flex: 1;
        padding: 20px;
        border: 2px solid grey;
        border-radius: 4px;
        margin-left: 20px;
    }

    main article .red-box {
        background: #1E90FF;
        color: white;
        padding: -10px;
        border-radius: 6px;
        margin-bottom: 20px;
    }


    /*--------FOOTER SECTION----------*/
    .footer {
        background: #CFD8DC;
        padding: 0%;
        text-align: center;
        color: var(--black);
        box-shadow: 0 1px 10px rgba(0, 0, 0, 1);
    }

    .footer .share {
        padding: 1rem 0;
        display: flex;
        justify-content: center;
        gap: 1rem;
        background-color: #CFD8DC;
        color: #ffffff;
    }

    .footer .share a {
        height: 5rem;
        width: 5rem;
        line-height: 5rem;
        font-size: 3rem;
        color: #0074D9;
        border: var(--border);
        margin: 0.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color(0.3s, color 0.3s);
    }

    .footer .share a:hover {
        background-color: #1E90FF;
        color: white;
        border: var(--borderr);

    }

    .footer .links {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        padding: 2rem 0;
        gap: 1.5rem;
        background-color: #CFD8DC;
        /* Warna abu-abu tua */
        color: #ffffff;
    }

    .footer .links a {
        padding: 0.5rem 2rem;
        color: #0074D9;
        /* Warna teks hitam */
        border: var(--border);
        font-size: 2rem;
        transition: background-color 0.3s, color 0.3s;
    }

    .footer .links a:hover {
        background-color: #1E90FF;
        color: white;
        border: var(--borderr);
    }

    .footer .credit {
        font-size: 2rem;
        background-color: #CFD8DC;
        /* Warna abu-abu tua */
        color: #ffffff;
        color: var(--black);
        /* Warna teks hitam */
        font-weight: lighter;
        padding: 1.5rem 0;
    }

    .footer .credit span {
        color: #1E90FF;
    }

    @media (max-width:991px) {
        html {
            font-size: 55%;
        }

        .header {
            padding: 1.5rem 2rem;
        }

        .header .navbar {
            position: absolute;
            top: 105%;
            right: -100%;
            background: #fff;
            width: 30rem;
            height: calc(100vh - 9.5rem);
            transition: right 0.3s ease;
        }

        .header .navbar.active {
            right: 0;
        }

        .header .navbar a {
            color: var(--black);
            display: block;
            margin: 1.5rem;
            padding: 0.5rem;
            font-size: 2rem;
        }

        .header .search-form {
            width: 90%;
            right: 2rem;
        }
    }

    @media (max-width:450px) {
        html {
            font-size: 55%;
        }
    }
</style>


<body>
    <header class="header">
        <a href="/" class="logo">
            <img src="/image/logo.png" alt="Logo Java">
        </a>
        <nav class="navbar">
            <a href="/">Home</a>
            <a href="#menu">Pemrograman</a>
            <a href="#menu">Keamanan Teknologi</a>
            <a href="#product">Seni</a>
            <a href="#review">Religi</a>
            <a href="#blogs">Gosip Mahasiswa</a>
            <a href="#blogs">Profil</a>
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

    <main>
        <div class="container1">
            <article>
                <h2><?= $artikel['judul'] ?></h2>
                <div class="red-box">
                    <p class="meta">
                        <i class="fas fa-user"></i> <?= $artikel['nama_lengkap'] ?>
                        <i class="fas fa-calendar-alt"></i>
                        <time datetime="2024-06-14"> <?= $artikel['tanggal_dibuat'] ?></time>
                        <i class="fas fa-eye"></i><?= $view_count ?>
                    </p>
                </div>
                <?= $artikel['isi'] ?>
            </article>
        </div>

        <div class="container2">
            <article>
                <h2><?= $artikel['judul'] ?></h2>
                <div class="red-box">
                    <p class="meta">
                        <i class="fas fa-user"></i> <?= $artikel['nama_lengkap'] ?>
                        <i class="fas fa-calendar-alt"></i>
                        <time datetime="2024-06-14"> <?= $artikel['tanggal_dibuat'] ?></time>
                    </p>
                </div>
                <?= $artikel['isi'] ?>
            </article>
        </div>
    </main>

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
            <a href="#menu">Keamanan Teknologi</a>
            <a href="#product">Seni</a>
            <a href="#review">Religi</a>
            <a href="#blogs">Gosip Mahasiswa</a>
            <a href="#blogs">Profil</a>
        </div>
        <div class="credit">created by <span>Aryo FF</span></div>
    </footer>
</body>

</html>