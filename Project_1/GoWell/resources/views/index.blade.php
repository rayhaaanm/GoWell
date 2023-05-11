<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoWell: Your Daily Support</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
</head>
<body>
    <script src="js/index.js"></script>
    <header>
        <div class="logo">
            <span id="Go">Go</span><span id="Well">Well</span>
        </div>
        <nav class="navigation">
            <a href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#count">Count</a>
            <a href="#about-us">About Us</a>
            <a href="/login">Log In</a>
        </nav>
    </header>
    <div class="section-1" id="home">
        <img src="images/foto.png">
        <div class="Logo2">
            <span id="Go">Go</span><span id="Well">Well</span>
            <div class="tagline">
                your daily support
            </div>
        </div>
    </div>
    <div class="section-2" id="news">
        <center>
            News
        </center>
        <div class="container-news">
            <div class="box-news">
                <div class="thumbnail">
                    <img src="images/cover_article.png">
                </div>
                <div class="isi">
                    <center>
                        Judul Berita
                    </center>
                    headline dari paragraf berita yg isinya gatau nanti apa pokok ada isinya lah liat aja nanti
                </div>
            </div>
            <div class="box-news">
                <div class="thumbnail">
                    <img src="images/cover_article.png">
                </div>
                <div class="isi">
                    <center>
                        Judul Berita
                    </center>
                    headline dari paragraf berita yg isinya gatau nanti apa pokok ada isinya lah liat aja nanti
                </div>
            </div>
            <div class="box-news">
                <div class="thumbnail">
                    <img src="images/cover_article.png">
                </div>
                <div class="isi">
                    <center>
                        Judul Berita
                    </center>
                    headline dari paragraf berita yg isinya gatau nanti apa pokok ada isinya lah liat aja nanti
                </div>
            </div>
            <div class="box-news">
                <div class="thumbnail">
                    <img src="images/cover_article.png">
                </div>
                <div class="isi">
                    <center>
                        Judul Berita
                    </center>
                    headline dari paragraf berita yg isinya gatau nanti apa pokok ada isinya lah liat aja nanti
                </div>
            </div>
            <div class="box-news">
                <div class="thumbnail">
                    <img src="images/cover_article.png">
                </div>
                <div class="isi">
                    <center>
                        Judul Berita
                    </center>
                    headline dari paragraf berita yg isinya gatau nanti apa pokok ada isinya lah liat aja nanti
                </div>
            </div>

        </div>
    </div>
    <div class="section-3" id="count">
        <center>
            <p>Input your Weight and Height to Analyze</p>
            <div class="container-count">
                <div class="box-count">
                    <form name="ffrom">
                        <input type="text" name="Tinggi" placeholder="Height " class="form">
                        <input type="text" name="Berat"  placeholder="Weight " class="form">
                        <input type="button" value="Count" onclick="hitungBeratBadanIdeal()" id="Count">
                        <input type="reset" value="Reset" id="Hitung-reset">
                        </form>
                </div>
                <div class="box-count">
                    <form name="fr" id="fr">
                        Result
                    <textarea name="Hasil"></textarea>
                    <input type="reset" value="Reset" id="Hasil-reset">
                    </form>
                </div>
                
            </div>
        </center>
    </div>
    <div class="section-4" id="about-us">
        <div class="about-us-text">
            <h1>About Us</h1>
            Muammar Qois Al Qorni dan Rayhan Azazaka Firdaus Mahasiswa S-1 <br> Sistem Informasi 
            Universitas Airlangga. Projek Pemrograman Website <br> (Praktikum) dengan Dosen Pengampu Bapak Faried Effendy
        </div>
        <img  src="./images/bg-about-us.svg">
    </div>
</body>
</html>