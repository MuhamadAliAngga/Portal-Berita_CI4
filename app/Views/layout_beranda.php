<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root
{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg: #f0f0f0;
    --border:0.2rem solid #0074D9;
    --borderr:0.2rem solid #1E90FF;

}
*
{
    font-size: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    transition: .2s linear;
}
html, body
{
    font-size: 62.5%;
    padding: 0%;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
    background: #CFD8DC;
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
        padding: 9%;
}

.heading1 {
    margin-top: -150px;
    text-align: center;
    color: black;
    padding-bottom: 3rem;
    font-size: 4rem;
    font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Times New Roman', Times, serif;
    letter-spacing: 2px; /* Menambahkan jarak antar huruf */
    line-height: 1; /* Menyesuaikan ketinggian baris */
}
.heading {
    margin-top: -1px;
    text-align: center;
    color: black;
    padding-bottom: 3rem;
    font-size: 4rem;
    font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Times New Roman', Times, serif;
    letter-spacing: 2px; /* Menambahkan jarak antar huruf */
    line-height: 1; /* Menyesuaikan ketinggian baris */
}

.heading span {
    color: #0074D9;
    font-weight: bold;
    font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Times New Roman', Times, serif;
    letter-spacing: 1px; /* Menyesuaikan jarak antar huruf */
}

.btn
{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    font-family: 'Times New Roman', Times, serif;
    color: #fff;
    background: #0074D9;
    cursor: pointer;
}
.btn:hover
{
   background: #1E90FF;
   color: #fff; 
}


/*--------HEADER--------*/
.header 
{
    background-color: #CFD8DC;
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
.header .logo img
{
    height: 6rem;
}
.header h1 
{
    font-size: 30px;
    color: #0074D9;
    cursor: pointer;
    margin-left: -20px; 
}
.header span:hover
{
    color: red;
}
/*--------HEADER--------*/


/*--------CAROUSEL--------*/
.carousel .carousel-item {
  height: 47rem;
  background: #000;
  color: white;
  position: relative;
  background-position: center;
  background-size: cover;
}

.overlay-image {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  background-position: center;
  background-size: cover;
  z-index: 1;
  opacity: 0.5;

}
.container {
  z-index: 2;
}

.container h1 {
  position: relative;
  color: white;
  margin-top: 27%;
  font-size: 5rem;
  padding: 1rem;
  font-family: 'Times New Roman', Times, serif;
  font-weight: bold;
  z-index: 3;
}

.container h1::before {
  content: '';
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 110%;
  height: 150%;
  background: black;
  filter: blur(20px);
  z-index: -1;
}
        .carousel-control-prev,
        .carousel-control-next {
          width: 50px; /* Width of the control */
          height: 430px; /* Height of the control */
        }

           
/*--------CAROUSEL--------*/




/*--------DIV NAVBAR--------*/
.header .navbar {
    margin-left: 20px;
    justify-content: flex-end;
    font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Times New Roman', Times, serif;
}
.header .navbar a {
    margin: 1rem;
    font-size: 1.6rem;
    color: #0074D9;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
}


/*--------DIV ICON--------*/
.header .icon div
{
    color: #0074D9;
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
    background: #0074D9;
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
    color: #0074D9;
    padding: 11rem;
    text-transform: none;
}
.header .search-form label
{
    cursor: pointer;
    font-size: 2.2rem;
    margin-left: 1.5rem;
    color: #0074D9;
}
.header .search-form label:hover
{
    color: var(--main-color);
}



/*--------SECTION MENU--------*/
.blogs .box-container
{
    margin-top: -15px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 1.5rem;
}
.blogs .box-container .box
{
    padding: 3rem;
    text-align: center;
    border: grey;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 1);
    border-radius: 5px;
    margin-top: 15px;
}
.blogs .box-container .box:hover
{
    background: #0074D9;
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
.blogs .box-container .box .content h3
{
    color: black;
    object-fit: cover;
    font-size: 3rem;
    padding: 1rem 0;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}
.blogs .box-container .box .content h3:hover
{
    color: white;
    font-size: 3rem;
    padding: 1rem 0;
}
.blogs .box-container .box .content span
{
    color: var(--main-color);
    display: block;
    padding-top: 1rem;
    font-size: 2rem;
}

/*--------SECTION CONTACT--------*/
.contact .row {
    display: flex;
    background: var(--black);
    flex-wrap: wrap;
    gap: 1rem;
    
}
.contact .row form {
    flex: 1 1 45rem;
    padding: 5rem 2rem;
    text-align: center;
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
    color: #0074D9;
    font-size: 2rem;
    padding-left: 2rem;
}
.contact .row form .inputBox input {
    width: 100%;
    padding: 2rem;
    font-size: 1.7rem;
    color: #fff;
    background: none;
}


/*--------SECTION FOOTER--------*/
footer {
    margin-top: -70px;
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
        font-weight: bold; /* Menambahkan tebal pada teks */
        font-family: 'Times New Roman', Times, serif;
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
        font-family: 'Times New Roman', Times, serif;
         font-weight: bold; /* Menambahkan tebal pada teks */
    }

    .footer .credit span {
        color: #1E90FF;
        font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Times New Roman', Times, serif;
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
    </style>
</head>

<body>


        <?= $this->renderSection('content') ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

