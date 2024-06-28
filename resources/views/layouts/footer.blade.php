<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        list-style: none;
        text-decoration: none;
    }

    .container-footer {
        display: flex;
        margin-left: 5%;
        gap: 10%;
    }

    a {
        text-decoration: none;
        color: #000;
    }

    .content-footer2 {
        display: flex;
        gap: 30%;
        margin-right: 5%;
    }

    .ftfv {
        font-size: 23px;
        font-weight: bold;
        margin-bottom: 50px;
    }

    li {
        list-style: none;
    }

    footer {
        margin-top: 30px;
        font-family: Arial, sans-serif;
        /* Đặt kiểu chữ Arial cho toàn bộ trang */
    }

    .content-footer2 ul li {
        margin-bottom: 35px;
        font-weight: bold;
        /* Khoảng cách dưới giữa các thẻ li */
    }

    .content-footer3 ul li {
        margin-bottom: 35px;
    }


    .content-footer1 ul li:nth-child(2) {
        font-weight: bold;
        color: rgba(192, 192, 192);
        text-decoration: underline;
    }

    .content-footer1 ul li:nth-child(3) {

        color: rgba(192, 192, 192);
    }

    .content-footer1 ul li a {
        color: rgba(192, 192, 192);
    }

    .content-footer2 ul li:last-child {
        margin-bottom: 0;
        /* Bỏ khoảng cách dưới của phần tử cuối cùng */
    }

    .content-footer2 ul li:first-child {
        color: rgba(192, 192, 192);
        /* Màu trắng mờ cho thẻ li đầu tiên */
    }

    .content-footer3 ul li:first-child {
        color: rgba(192, 192, 192);
        /* Màu trắng mờ cho thẻ li đầu tiên */
    }

    .no-border {
        border: none;
        /* Loại bỏ viền */
        outline: none;
        /* Loại bỏ viền khi focus */
        font-size: 16px;
        /* Đặt kích thước chữ */
        border-bottom: 1px solid black;
        margin-left: -2px;

        margin-right: 3%;
    }

    button {
        border: none;
        /* Loại bỏ viền */
        outline: none;
        /* Loại bỏ viền khi focus */
        font-size: 16px;
        /* Đặt kích thước chữ */
        background-color: transparent;
        /* Loại bỏ màu nền */
        color: black;
        /* Đặt màu chữ */
        cursor: pointer;
        /* Con trỏ chuột khi di chuyển qua nút */
        border-bottom: 1px solid black;
        font-weight: bold;
    }

    .footer2 {
        margin-top: 190px;
    }

    .footer2 h5 {
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 60px;
    }

    @media only screen and (max-width: 600px) {
        .no-border::placeholder  {
            font-size: 12px;
        }

        .container-footer {
            flex-direction: column;
            align-items: flex-start;
            padding: 10px;
        }

        .content-footer2 {
            flex-direction: column;
        }

        .content-footer2 ul {
            margin-right: 0;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .content-footer3 ul {
            margin-top: 20px;
        }

        .content-footer3 ul li {
            margin-bottom: 35px;
        }

        .content-footer3 input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
        }

        .content-footer3 button {
            width: 100%;
            margin-bottom: 10px;
        }
    }
    @media only screen and (max-width: 1023px) {

    }
</style>
<footer>
    <div class="container-footer">
        <div class="content-footer1">
            <ul>
                <li class="ftfv">FTFV.</li>
                <li><a href="https://chinaetravel.com/china-project/ftfv/">Chinaetravel</a></li>
                <li>Powered By Koson Technology</li>
            </ul>

        </div>
        <div class="content-footer2">
            <ul>
                <li>Links</li>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Bookmark</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul>
                <li>Help</li>
                <li><a href="https://www.facebook.com/kosontechnology?mibextid=ZbWKwL">Facebook</a></li>
                <li><a href="https://www.instagram.com/kosontechnology/?igshid=OGQ2MjdiOTE%3D">Instagram</a></li>
                <li><a href="https://api.whatsapp.com/message/2ZNWJPVTBXP4J1?autoload=1&app_absent=0">WhatsApp</a></li>
            </ul>
        </div>
        <div class="content-footer3">
            <ul>
                <li>Newsletter</li>
                <li style="display: flex;">
                    <input type="text" class="no-border" placeholder="Enter Your Email Address">
                    <button>SUBSCRIBE</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer2">
        <hr>
        <h5>2024 FTFV. All rights reverved</h5>
    </div>
</footer>