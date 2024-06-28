<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        list-style: none;
        text-decoration: none;
    }

    header {
        background-color: #010E51;
        padding: 10px 20px;
        margin: 0px;
        width: 100%;
        height: 100%;
    }

    header a {
        color: white;
        text-decoration: none;
    }

    header ul {
        display: flex;
        list-style-type: none;
        padding: 0;
    }

    header ul li {
        margin: 0 15px;
    }

    .container-header {

        display: flex;
        justify-content: space-between;


    }


    .one {
        margin-top: 12px;
        width: 30%;
        margin-left: 50px;
    }

    .one-two {
        display: flex;
        gap: 19%;
    }

    .one a {
        font-size: 23px;
    }

    .menu-header {
        margin-top: 20px;
        display: flex;
        gap: 1%;
    }



    .three {
        width: 30%;
    }

    .three ul li a {
        color: white;
    }

    .auth-menu {
        list-style: none;
        padding: 0;
        margin: 13px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .auth-menu li {
        margin-right: 0;
        /* Khoảng cách giữa các thẻ li */
    }

    .auth-menu li:last-child {
        margin-right: 0;
        /* Bỏ khoảng cách bên phải của phần tử cuối cùng */
    }

    .vertical-line {
        width: 2px;
        /* Chiều rộng của đường thẳng */
        height: 30px;
        /* Chiều cao của đường thẳng, điều chỉnh theo nhu cầu */
        background-color: white;
        /* Màu nền của đường thẳng */
    }

    body {
        font-family: Arial, sans-serif;
        /* Đặt kiểu chữ Arial cho toàn bộ trang */
    }

    .hamburger-menu {
        display: none;
        flex-direction: column;
        cursor: pointer;
    }

    .hamburger-menu span {
        width: 25px;
        height: 3px;
        background: white;
        margin: 3px 0;
    }

    .show-menu {
        display: none;
        flex-direction: column;
        cursor: pointer;
        position: fixed;
        left: -100%;
        top: 0;
        width: 250px;
        height: 100%;
        background: #010E51;
        transition: left 0.3s ease;
        padding: 20px;
    }

    .show-menu.show {
        display: flex;
        left: 0;
    }

    .show-menu.show li {
        margin: 10px;
    }

    .close-menu {
        display: none;
        font-size: 24px;
        color: white;
        align-self: flex-end;
        cursor: pointer;
        margin-bottom: 10px;
    }
    .close-menu2{
        display: none;
        font-size: 24px;
        color: white;
        align-self: flex-end;
        cursor: pointer;
        margin-bottom: 10px;
    }
    .menu-header li:first-child{
        font-size: 20px;
        font-weight: bold;
        margin-right: 25%;
    }

    @media only screen and (max-width: 600px) {
        header {
            width: 100%;
        }

        .container-header {
            align-items: flex-start;
            gap: 25%;
        }

        .one {
            margin-left: 250px;
            margin-bottom: 2px;
        }

        .two {
            margin-left: 0;
            margin-top: 10px;
        }

        .menu-header {
            flex-direction: column;
        }

        .menu-header li {
            margin-right: 0;
            margin-bottom: 10px;
        }

        .menu-header {
            display: none;
            flex-direction: column;
            width: 100%;
            background: #010E51;
            position: absolute;
            top: 50px;
            left: 0;
        }

        .hamburger-menu {
            display: flex;
            margin-top: 5px;
            margin-left: 40px;
        }

        .three {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .auth-menu li {
            margin-right: 0;
            margin-left: 10px;
        }

        .close-menu {
            display: block;
        }
        .close-menu2 {
            display: block;
            margin-left: 200px;
            font-size: 30px;
            font-weight: bold;
        }
    }

    @media only screen and (max-width: 1023px) {}
</style>

<header>

    <div class="container-header">
        <div class="one-two">
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="show-menu">
                <span class="close-menu">&times;</span>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Bookmark</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Register</a></li>
            </ul>
            <span class="close-menu2"><a href="">FTFV</a></span>

            <div class="two">
                <ul class="menu-header">
                    <li><a href="">FTFV</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Bookmark</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="three">
            <ul class="auth-menu">
                <li><a href="">Login</a></li>
                <li class="vertical-line"></li>
                <li><a href="">Register</a></li>
            </ul>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburger = document.querySelector('.hamburger-menu');
        const menu = document.querySelector('.show-menu');
        const closeMenu = document.querySelector('.close-menu');

        hamburger.addEventListener('click', function () {
            menu.classList.toggle('show');
        });

        closeMenu.addEventListener('click', function () {
            menu.classList.remove('show');
        });
    });
</script>