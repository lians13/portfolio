<header>
    <div class="top">
        <a class="logo_img" href="./">
            <img src="https://i.imgur.com/e9GZaP4.png">
        </a>
        <div class="searchbar">
            <div class="bar">
                <span class="typing" style="font-size:1em;">
                    <?php echo ucfirst($_GET['category']);?>
                </span>
            </div>
            <svg class="search_img" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18" height="18" viewBox="0 0 24 24" stroke-width="3" stroke="rgb(150, 150, 150)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
        </div>
        <div style="flex-grow: 1;"></div>
        <nav>
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
            <button class="contact_btn" data-clipboard-target="#mail" id="copy">Contact</button>
        </nav>
        <div class="menu">
            <div class="sort">
                <div class="title">
                    <p>Skill</p>
                    <div></div>
                </div>
                <div class="box">
                    <div class="item"><img src="./assets/images/skills/html.png"><p>Html</p></div>
                    <div class="item"><img src="./assets/images/skills/css.png"><p>Css</p></div>
                    <div class="item"><img src="./assets/images/skills/js.png"><p>JavaScript</p></div>
                    <div class="item"><img src="./assets/images/skills/csharp.png"><p>C#</p></div>
                    <div class="item"><img src="../assets/images/skills/unity.png"><p>Unity</p></div>
                    <div class="item"><img src="./assets/images/skills/maya.png"><p>Maya</p> </div>
                    <div class="item"><img src="./assets/images/skills/photoshop.png"><p>Photoshop</p></div>
                    <div class="item"><img src="./assets/images/skills/illustrator.png"><p>Illustrator</p></div>
                    <div class="item"><img src="./assets/images/skills/aftereffect.png"><p>AfterEffect</p></div>
                </div>
            </div>
            <div class="sort">
                <div class="title"><p>Contact</p><div></div></div>
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
    </div>
    <div class="optionbar">
        <div class="bar">
            <a class="option <?php if($_GET['category'] =='experience'):echo 'active'; endif?>" href="./info.php?category=experience">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-analytics" width="18" height="18" viewBox="0 0 24 24" stroke-width="1" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <line x1="9" y1="17" x2="9" y2="12" />
                    <line x1="12" y1="17" x2="12" y2="16" />
                    <line x1="15" y1="17" x2="15" y2="14" />
                </svg>
                <span style="padding-left: 7px;">Experience</span>
            </a>
            <a class="option <?php if($_GET['category'] =='portfolio'):echo 'active'; endif?>" href="./info.php?category=portfolio">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="18" height="18" viewBox="0 0 24 24" stroke-width="1" stroke="#333" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <line x1="3" y1="6" x2="3" y2="19" />
                    <line x1="12" y1="6" x2="12" y2="19" />
                    <line x1="21" y1="6" x2="21" y2="19" />
                </svg>
                <span style="padding-left: 7px;">Portfolio</span>
            </a>
            <a class="option <?php if($_GET['category'] =='skill'):echo 'active'; endif?>" href="./info.php?category=skill">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brush" width="18" height="18" viewBox="0 0 24 24" stroke-width="1" stroke="#333" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                    <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                    <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                    <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
                </svg>
                <span style="padding-left: 7px;">Skill</span>
            </a>
            <a class="option <?php if($_GET['category'] =='license'):echo 'active'; endif?>" href="./info.php?category=license">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="18" height="18" viewBox="0 0 24 24" stroke-width="1" stroke="#333" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="15" cy="15" r="3" />
                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                    <line x1="6" y1="9" x2="18" y2="9" />
                    <line x1="6" y1="12" x2="9" y2="12" />
                    <line x1="6" y1="15" x2="8" y2="15" />
                </svg>
                <span style="padding-left: 7px;">License</span>
            </a>
        </div>
    </div>
</header>