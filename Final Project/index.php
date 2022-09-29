<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>VIBEZZ-Tune In Together</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>VIBEZZ</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> My Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> + Create Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpeg" alt="Alan">
                    <h5>
                        Tu hi Mera
                        <div class="subtitle">Jannat 2</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpeg" alt="Alan">
                    <h5>
                        Ajab Si
                        <div class="subtitle">Om Shanti Om</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/3.jpeg" alt="Alan">
                    <h5>
                        Arambh
                        <div class="subtitle">Arambh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/4.jpeg" alt="Alan">
                    <h5>
                        Saiyaara
                        <div class="subtitle">Ek Tha Tiger</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/5.jpeg" alt="Alan">
                    <h5>
                        Stay
                        <div class="subtitle">Justin Bieber</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/6.jpeg" alt="Alan">
                    <h5>
                        Venom
                        <div class="subtitle">Eminem</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>

            </div>
        </div>


        <div class="song_side">

            <nav>
                <ul>
                    <li>EXPLORE <span></span></li>
                    <li>MY LIBRARY</li>
                    <li></li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"><a href="API\index.php">SEARCH</a></i>
                    <!----<input type="text" placeholder="Search Music...">-->
                </div>
                <div class="user">
                    <img src="img/LOGO1.png" alt="User" title="KDS CODER">
                </div>
            </nav>

            <div class="content">
                <h1>Top 30 Hits of 2022</h1>
                <div class="buttons">
                    <button><a href="Final Project\playlist.php">PLAY</a></button>
                    <button>FOLLOW</button>
                </div>
            </div>


            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                        <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/7.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>Laaya
                            <br>
                            <div class="subtitle">Mitraaz</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/8.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                            <!-- change All id  -->
                        </div>
                        <h5>Chidiya
                            <br>
                            <div class="subtitle">Vilen</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/9.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Tu Aake Dekhle
                            <br>
                            <div class="subtitle">KING</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/10.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Lovely
                            <br>
                            <div class="subtitle">Billie Ellish</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/11.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>Ajj Din Chadheya
                            <br>
                            <div class="subtitle"></div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/12.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Arcade
                            <br>
                            <div class="subtitle"></div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/13.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Dusk Till Dawn
                            <br>
                            <div class="subtitle">ZAYN</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/14.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>Shiv Tandav Stotram
                            <br>
                            <div class="subtitle"></div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/15.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Tumhe Jo MAine Dekha
                            <br>
                            <div class="subtitle">Main Hoon Na</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                        <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="item">
                    <li>
                        <img src="img/arjit.jpg" alt="Arjit Singh" title="Arjit Singh">
                    </li>
                    <li>
                        <img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker">
                    </li>
                    <li>
                        <img src="img/atif.jpg" alt="Atif Aslam" title="Atif Aslam">
                    </li>
                    <li>
                        <img src="img/guru.jpg" alt="Guru RAndawa" title="Guru Randawa">
                    </li>
                    <li>
                        <img src="img/dhvani.jpg" alt="Dhvani" title="Dhvani">
                    </li>
                    <li>
                        <img src="img/Diljit_Dosanjh.jpg" alt="Diljit Dosanjh" title="Diljit Dosanjh">
                    </li>
                    <li>
                        <img src="img/jubin Nautiyal.jpg" alt="Jubin Nautiyal" title="Jubin Nautiyal">
                    </li>
                    <li>
                        <img src="img/neha.jpg" alt="Neha Kakker" title="Neha Kakker">
                    </li>
                    <li>
                        <img src="img/justin-bieber-lede.jpg" alt="Justin Bieber" title="Justin Bieber">
                    </li>
                    <li>
                        <img src="img/honey.jpg" alt="Honey Singh" title="Honey Singh">
                    </li>
                    <li>
                        <img src="img/akhil.jpg" alt="Akhil" title="Akhil">
                    </li>
                    <!-- change all img  -->
                </div>
            </div>
        </div>


        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/Aas.jpeg" alt="Alan" id="poster_master_play">
            <h5 id="title">Tum Hi Ho<br>
                <div class="subtitle">Aashiqui 2</div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    
    <script src="app.js"></script>
</body>

</html>