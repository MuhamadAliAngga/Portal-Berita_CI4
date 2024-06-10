<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= esc($title) ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root
{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:0.1rem solid rgba(225,225,225,.3);

}
*
{
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
html, body
{
    font-size: 62.5%;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
    background: var(--bg);
    overflow-x: hidden;
}
html::-webkit-scrollbar-track
{
    background: transparent;
}
html::-webkit-scrollbar-thumb
{
    background: #fff;
    border-radius: 5rem;
}

section
{
    padding: 3rem ;
}

.heading
{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}
.heading span
{
    color: var(--main-color);
    text-transform: uppercase;
}

.btn
{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color: #fff;
    background: red;
    cursor: pointer;
}
.btn:hover
{
   letter-spacing: .2rem; 
}


/*--------HEADER--------*/
.header {
    background: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem;
    border-bottom: 1px solid var(--main-color); /* Tambahkan garis putih di bawah header */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}
.header .logo img
{
    height: 6rem;
}


/*--------DIV NAVBAR--------*/
.header .navbar a
{
    margin: 0 1rem;
    font-size: 1.6rem;
    color: black;
}
.header .navbar a:hover
{
    color: var(--main-color);
    border-bottom: .1rem solid var(--main-color);
    padding-bottom: .5rem;
}


/*--------DIV ICON--------*/
.header .icon div
{
    color: black;
    cursor: pointer;
    font-size: 2.5rem;
    margin-left: 2rem;
}
.header .icon div:hover
{
    color: var(--main-color);
}
#menu-btn
{
    display: none;
}


/*--------DIV SEARCH FORM--------*/
.header .search-form.active
{
    transform: scaleY(1);

}
.header .search-form
{
    position: absolute;
    top: 105%;
    right: 1%;
    background: #fff;
    width: 50rem;
    height: 5rem;
    display: flex;
    align-items: center;
    transform: scaleY(0);
    transform-origin: top;
}
.header .search-form input
{
    height: 100%;
    width: 100%;
    font-size: 1.6rem;
    color: var(--black);
    padding: 1rem;
    text-transform: none;
}
.header .search-form label
{
    cursor: pointer;
    font-size: 2.2rem;
    margin-left: 1.5rem;
    color: var(--bg);
}
.header .search-form label:hover
{
    color: var(--main-color);
}


/*--------DIV CART ITEM CONTAINER--------*/
.header .cart-items-container {
    position: absolute;
    top: 105%;
    right: -100%;
    height: calc(100vh - 9.5rem);
    width: 35rem;
    background: #fff;
    padding: 0 1.5rem;
    overflow-y: auto; /* Tambahkan ini jika ingin scroll jika item banyak */
}
.header .cart-items-container.active
{
       right: 0;
}
.header .cart-items-container .cart-item {
    position: relative;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.header .cart-items-container .cart-item .fa-times{
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2rem;
    cursor: pointer;
    color: var(--black);
}
.header .cart-items-container .cart-item .fa-times:hover {
    color: var(--main-color);
}
.header .cart-items-container .cart-item img
{
    height: 7rem;
}
.header .cart-items-container .cart-item .content h3
{
    font-size: 2rem;
    color: var(--black);
    padding-bottom: .5rem;
}
.header .cart-items-container .cart-item .content .price
{
    font-size: 1.5rem; 
    color: var(--main-color);
} 
.header .cart-items-container .btn
{
    width: 100%;
    text-align: center;
}


/*--------MEDIA QUERIES--------*/
@media (max-width:991px) {
    html {
        font-size: 55%;
    }
    .header {
        padding: 1.5rem 2rem;
    }
    #menu-btn {
        display: inline-block;
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
    .header .search-form
    {
        width: 90%;
        right: 2rem;
    }
    section
    {
    padding: 2rem ;
    }
    .home
    {
        background-position: left;
        justify-content: center;
        text-align: center;
    }
    .home .conten h3
    {
        font-size: 4.5rem;
    }
    .home .conten p
    {
        font-size: 4.5rem;
    }
}
@media (max-width:450px) 
{
    html
    {
        font-size: 55%;
    }
}


/*--------SECTION HOME--------*/
.home 
{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(atas.jpeg) no-repeat;
    background-size: 100%;  /* Ganti 'cover' dengan ukuran yang lebih kecil, seperti 50% */
    background-position: center;  /* Ubah posisi menjadi 'center' untuk memastikan gambar berada di tengah */
}

.home .conten {
    align-items: center; 

}
.home .conten h1
{
    font-size: 11rem;
    color: white;
}
.home .conten span:hover
{
    color: red;
}
.home .conten p
{
    font-size: 2rem;
    font-weight: lighter;
    line-height: 1.8;
    padding: 1rem 0;
    color: white;
}


/*--------SECTION ABOUT--------*/
.about .row
{
    display: flex;
    align-items: center;
    background: var(--black);
    flex-wrap: wrap;
}
.about .row .image
{
    flex: 1 1 45rem;
}
.about .row .image img
{
    width: 100%;
}
.about .row .content
{
    flex: 1 1 45rem;
    padding: 2rem;
}
.about .row .content h3
{
    font-size: 3rem;
    color: #fff;
}
.about .row .content p
{
    font-size: 1.6rem;
    color: #ccc;
    padding: 1rem 0;
    line-height: 1.8;
}


/*--------SECTION MENU--------*/
.menu .box-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 1.5rem;
}
.menu .box-container .box
{
    padding: 5rem;
    text-align: center;
    border: var(--border);
}
.menu .box-container .box img
{
    height: 10rem;
}
.menu .box-container .box h3
{
    color: #fff;
    font-size: 2rem;
    padding: 1rem 0;
}
.menu .box-container .box .price
{
    color: #fff;
    font-size: 2.5rem;
    padding: .5rem 0;
}
.menu .box-container .box .price span
{
    font-size: 1.5rem;
    text-decoration: line-through;
    font-weight: lighter;
}
.menu .box-container .box:hover
{
    background: #ccc;
}
.menu .box-container .box:hover > *
{
    color: var(--black);
}


/*--------SECTION PRODUCT--------*/
.products .box-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem,1fr));
    gap: 1.5rem;
}
.products .box-container .box
{
    text-align: center;
    border: var(--border);
    padding: 2rem;
}
.products .box-container .box .icons a
{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border: var(--border);
    color: #fff;
    margin: .3rem;
}
.products .box-container .box .icon:hover
{
    background: var(--main-color);
}
.products .box-container .box .image
{
    padding: 2.5rem 0;
}
.products .box-container .box .image img
{
    height: 25rem;
}
.products .box-container .box .content h3
{
    color: #fff;
    font-size: 2.5rem;
}
.products .box-container .box .content .stars i
{
    font-size: 1.7rem;
    color: var(--main-color);
}
.products .box-container .box .content .price
{
    color: #fff;
    font-size: 2.5rem;
}
.products .box-container .box .content .price span
{
    text-decoration: line-through;
    font-weight: lighter;
    font-size: 1.5rem;
}


/*--------SECTION REVIEW--------*/
.review .box-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 1.5rem;
}
.review .box-container .box
{
  border: var(--border);  
  text-align: center;
  padding: 3rem 2rem;
}
.review .box-container .box p
{
    font-size: 1.6rem;
    line-height: 1.8;
    color: #ccc;
    padding: 2rem 0;
}
.review .box-container .box .user
{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}
.review .box-container .box h3
{
    padding: 1rem 0;
    font-size: 2rem;
    color: #fff;
}
.review .box-container .box .stars i
{
    font-size: 1rem;
    color: var(--main-color);
}


/*--------SECTION CONTACT--------*/
.contact .row {
    display: flex;
    background: var(--black);
    flex-wrap: wrap;
    gap: 1rem;
}

.contact .row .map {
    flex: 1 1 45rem;
    width: 100%;
    object-fit: cover;
}

.contact .row form {
    flex: 1 1 45rem;
    padding: 5rem 2rem;
    text-align: center;
}
.contact .row form h3
{
    text-transform: uppercase;
    font-size: 3.5rem;
    color: #fff;
}
.contact .row form .inputBox {
    display: flex;
    align-items: center;
    margin: 2rem;
    margin-bottom: 2rem;
    background: var(--bg);
    border: var(--border);
}
.contact .row form .inputBox span {
    color: #fff;
    font-size: 2rem;
    padding-left: 2rem;
}
.contact .row form .inputBox input {
    width: 100%;
    padding: 2rem;
    font-size: 1.7rem;
    color: #fff;
    text-transform: none;
    background: none;
}

/*--------SECTION BLOGS--------*/
.blogs .box-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 2fr));
    gap: 1rem;
}
.blogs .box-container .box
{
    border: var(--border);
}
.blogs .box-container .box .image
{
    height: 25rem;
    overflow: hidden;
    width: 100%;
}
.blogs .box-container .box .image img
{
    height: 100%;
    object-fit: cover;
    width: 100%;   
}
.blogs .box-container .box:hover .image img
{
    transform: scale(1.2);
}
.blogs .box-container .box .content 
{
    padding: 2rem;
}
.blogs .box-container .box .content .tittle
{
    font-size: 2rem;
    line-height: 1.5;
    color: #fff;
}
.blogs .box-container .box .content .tittle:hover
{
    color: var(--main-color);
}
.blogs .box-container .box .content span
{
    color: var(--main-color);
    display: block;
    padding-top: 1rem;
    font-size: 2rem;
}
.blogs .box-container .box .content p
{
    font-size: 1.6rem;
    line-height: 1.8;
    color: #ccc;
    padding: 1rem;
}
/*--------SECTION FOOTER--------*/
.footer {
    background: var(--black);
    padding: 2rem 0;
    text-align: center;
    color: #fff;
}

.footer .share {
    padding: 1rem 0;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.footer .share a {
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color: #fff;
    border: var(--border);
    margin: 0.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s, color 0.3s;
}

.footer .share a:hover {
    background-color: var(--main-color);
    color: #13131a;
}

.footer .links {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 2rem 0;
    gap: 1.5rem;
}

.footer .links a {
    padding: 0.5rem 2rem;
    color: #fff;
    border: var(--border);
    font-size: 1.6rem;
    transition: background-color 0.3s, color 0.3s;
}

.footer .links a:hover {
    background-color: var(--main-color);
    color: #13131a;
}

.footer .credit {
    font-size: 2rem;
    color: #fff;
    font-weight: lighter;
    padding: 1.5rem 0;
}

.footer .credit span {
    color: var(--main-color);
}
    </style>
</head>

<body>


        <?= $this->renderSection('content') ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>