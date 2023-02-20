<?php
session_start();
ob_start();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Anthony Duclair Foundation</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel='stylesheet' href='css/epy-style.css' />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <?php if ($_SERVER['REQUEST_URI'] == "/event.php") { ?>
        <style>
            .section-padding {
                padding-top: 30px;
            }

            .gallery-section {
                position: relative;
                z-index: 1;
            }

            .btn {
                padding: 10px 20px;
                margin: 5px 4px 4px 0;
                display: inline-block;
                color: #003;
                background: #eee;
                border: 1px solid #f44336;
                transition: all 0.4s;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 500;
            }

            .btn:hover,
            .btn-active {
                background: #f44336;
                color: #fff;
                -webkit-transform: translateY(3px);
                -ms-transform: translateY(3px);
                transform: translateY(3px);
            }

            .gallery {
                display: flex;
                justify-content: center;
                width: fit-content;
                max-width: 1400px;
                flex-wrap: wrap;
                margin: 25px auto;
                /* gap: 14px; */
            }

            .gallery a {
                display: flex;
            }

            .gallery img {
                width: 320px;
                height: 220px;
                object-fit: cover;
                transition: 0.3s ease-in-out;
                border-radius: 12px;
                overflow: hidden;
                margin: 10px 10px;
            }

            .gallery img:hover {
                transform: scale(1.1);
            }

            .sets .hide,
            .sets .pophide {
                width: 0%;
                opacity: 0;
            }

            .closeBtn {
                position: absolute;
                font-size: 22px;
                font-weight: 500;
                right: 25px;
                top: 25px;
                color: white;
                transition: 0.5s linear;
                padding: 8px 40px;
                border-radius: 25px;
                background: transparent;
                outline-offset: -6px;
                outline: 2px solid #fff;
            }

            .closeBtn:hover {
                cursor: pointer;
                background: white;
                color: black;
                outline: 2px solid #000;
            }

            .openDiv {
                width: 100%;
                height: 100vh;
                background: #000000e7;
                position: fixed;
                top: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                left: 0;
                z-index: 9999;
            }

            .imgPreview {
                width: 70%;
                object-fit: scale-down;
                max-height: 40vw;
                height: auto;
            }

            .prevButton,
            .nextButton {
                transition: 1s linear;
                padding: 10px 35px;
                font-size: 18px;
                border: none;
                color: white;
                background: #0005;
                border-radius: 10px;
                border: 1px solid white;
                margin: 10px;
            }

            .prevButton:hover,
            .nextButton:hover {
                background: #fff;
                color: black;
            }

            /* resposive CSS Code */
            @media (max-width: 991px) {
                .section-padding {
                    padding-top: 50px;
                }
            }

            @media (max-width: 767px) {
                .title {
                    font-size: 36px;
                }

                .gallery img {
                    margin: 8px 8px;
                    width: 300px;
                }

                .closeBtn {
                    padding: 6px 25px;
                }
            }

            @media (max-width: 540px) {
                .section-padding {
                    padding-top: 30px;
                }

                .gallery img {
                    margin: 8px 6px;
                    width: 100%;
                }

                .closeBtn {
                    font-size: 18px;
                    border-radius: 15px;
                }

                .imgPreview {
                    width: 90%;
                    max-height: 50vh;
                    height: auto;
                }
            }
        </style>
    <?php } ?>
</head>