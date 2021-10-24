<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Portfolio</title>
        
        <link rel="Shortcut Icon" type="image/x-icon" href="./assets/images/ico.ico" />
        
        <meta property="og:image" content="https://i.imgur.com/e9GZaP4.png">

        <link rel="stylesheet" href="./assets/css/index_style.css" />
        
        <!-- jquery-3.6.0.min.js -->        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <!-- clipboard.js v1.7.1 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
        <style>

        </style>

    </head>
    <body>
        <section class="wrap">
            <header>
                <nav>
                    <a class="nav_btn" href="./resume.pdf" target="_blank">
                        Resume
                    </a>
                    <a class="nav_btn" href="./info.php?category=portfolio">
                        Portfolio
                    </a>
                    <div class="detail_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid-dots" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="#5f6368" fill="#5f6368" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="5" cy="5" r="1" />
                            <circle cx="12" cy="5" r="1" />
                            <circle cx="19" cy="5" r="1" />
                            <circle cx="5" cy="12" r="1" />
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="19" cy="12" r="1" />
                            <circle cx="5" cy="19" r="1" />
                            <circle cx="12" cy="19" r="1" />
                            <circle cx="19" cy="19" r="1" />
                        </svg>
                    </div>
                    <button class="contact_btn" data-clipboard-target="#mail" id="copy">
                        Contact
                    </button>
                </nav>
                <div class="menu">
                    <div class="sort">
                        <div class="title">
                            <p>Skill</p>
                            <div></div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="./assets/images/skills/html.png">
                                <p>Html</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/css.png">
                                <p>Css</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/js.png">
                                <p>JavaScript</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/csharp.png">
                                <p>C#</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/unity.png">
                                <p>Unity</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/maya.png">
                                <p>Maya</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/photoshop.png">
                                <p>Photoshop</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/illustrator.png">
                                <p>Illustrator</p>
                            </div>
                            <div class="item">
                                <img src="./assets/images/skills/aftereffect.png">
                                <p>AfterEffect</p>
                            </div>
                        </div>
                    </div>
                    <div class="sort">
                        <div class="title">
                            <p>Contact</p>
                            <div></div>
                        </div>
                        <div class="box">
                            <a class="item" href="https://mail.google.com/" target="_blank">
                                <img src="./assets/images/contact/mail.png">
                                <p>Mail</p>
                            </a>
                            <a class="item" href="https://www.facebook.com/profile.php?id=100005664107083" target="_blank">
                                <img src="./assets/images/contact/facebook.png">
                                <p>FaceBook</p>
                            </a>
                            <a class="item">
                                <img src="./assets/images/contact/twitter.png">
                                <p>Twitter</p>
                            </a>
                        </div>
                    </div>
                    <div class="sort">
                        <a class="more" href="#">More About Me</a>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="logo_img">
                    <img  src="https://i.imgur.com/e9GZaP4.png">
                </div>
                <div class="searchbar">
                    <div class="bar">
                        <span class="typing"></span>
                        <span class="flashing"></span>
                    </div>
                    <svg class="search_img" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18" height="18" viewBox="0 0 24 24" stroke-width="3" stroke="rgb(150, 150, 150)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                </div>
                <div class="searchbtns">
                    <a class="search_btn" href="./info.php?category=experience">
                        Info
                    </a>
                    <a class="search_btn" href="./info.php?category=portfolio">
                        Portfolio
                    </a>
                </div>
            </section>
            <?php include_once './assets/pages/footer.php'?>
        </section>     

    </body>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/main.js"></script>
    
</html>