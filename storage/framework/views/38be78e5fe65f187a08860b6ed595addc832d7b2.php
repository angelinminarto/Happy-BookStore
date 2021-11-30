<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Happy Book Store</title>
    <link rel="stylesheet" href=<?php echo e(url("style/style.css")); ?>>
</head>
<body>
    <div class="page">
        <div class="menu1">
            <h1 style="text-align: center; font-size: 40px; color: #f33; font-style: normal; padding: 2px;">Happy Book Store</h1>
        </div>

        <div class="menu2">
            <div class="itemmenu"><a href="/index">Home</a></div>
            <div class="itemmenu"><li class="dropdown"><a href="#">Category</a>
                <ul class="content-dropdown">
                    <li><a href="/fiction">Fiction</a></li>
                    <li><a href="/science">Science</a></li>
                    <li><a href="/computer">Computer</a></li>
                </ul>
            </div>
            <div class="itemmenu"><a href="/contact">Contact</a></div>
            <div class="itemmenu"><a href="/about us">About Us</a></div>
        </div>
    </div>

    <div class="page"></div>
    

    <div class="contentDetail">
        <p>
            <center><header>Book Detail</header></center>
        </p>
    </div>

        <div class="row">
            <div class="column">
                <img src="https://cdn.gramedia.com/uploads/items/9786230029189_Cov_Semua_Bisa_Menjadi_Programmer_Mobile_dengan_Kivy_Python_Basic__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Analisis_Jaringan_Media_Sosial___Dasar-DasarAplikasi_Metode__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Manajemn_keuangan__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786025213526_kisi_kisi_pendalaman_materi_CAT__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Front_Cover_-_Whats_So_Wrong_About_Your_Self_Healing_1__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/img20211115_14072745__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230029134_Cov_Kumpulan_Latihan_PHP__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786236133071__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/John_Lennon__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9790801869678__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Trik_Cepat_Kuasai_Bahasa_Korea__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Trik_Cepat_Kuasai_Bahasa_Mandarin__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Matematika_Lanjut_Untuk_Ilmu_Fisika_Dan_Teknik__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786027760431__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/img20210609_13535574__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Analisis_Data_Penelitian_Kualitatif__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230029127_A_Man_His_Cat_5__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786232542228__w149_hauto.jpg">
            </div>
            
            <div class="column">
                <img src="https://cdn.gramedia.com/uploads/items/Screenshot_20211019-114701_Gmail__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/721010646_Cov_Conan_The_Raven_03_Page_1__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230305115_The_Apothecary_Diaries3-BOOKPAPER_OK-1__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230028939_Ajin_16__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230305924_RE_ZERO_3_1__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Kkpk_Deluxe__The_Girls_Beat__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230028380_JOB_Akulah_Ahlinya_Robot__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/9786230029059_Cov_Seraph_of_the_end_21__w149_hauto.jpg">
                <img src="https://cdn.gramedia.com/uploads/items/Biokimia_Farmasi__w149_hauto.jpg">
            </div>
        </div>
    
        <button onclick="one()">1</button>
    <button onclick="two()">2</button>
    <button onclick="four()">4</button>
    
    <script>
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");
    
    // Declare a "loop" variable
    var i;
    
    // Full-width images
    function one() {
      for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "100%";
      }
    }
    
    // Two images side by side
    function two() {
      for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "50%";
      }
    }
    
    // Four images side by side
    function four() {
      for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "25%";
      }
    }
    </script>

    <div class="content">
        <div class="barang">
            <table border="0" align="center" cellpadding="18px">
                <tr>
                    <td><img src="https://ebooks.gramedia.com/ebook-covers/31755/big_covers/ID_MIZ2016MTH03DDADT1_B.jpg" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://cf.shopee.co.id/file/a69815ff0cf8d9ee043d3645f9b1901e" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://miro.medium.com/max/318/1*z7_D-zRx3-owismQrD-MTA.jpeg" alt="">
                    <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://cdn.gramedia.com/uploads/items/9786230020995_The_Quintessential_Quintuplets_07__w150_hauto.jpg" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://noviaelma5.files.wordpress.com/2016/01/milea.jpg" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://cdn.gramedia.com/uploads/items/9786230005862_Cov_Hanako_07__w150_hauto.jpg" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                    <td><img src="https://cdn.gramedia.com/uploads/items/dikta_dan_hukum__w150_hauto.jpg" alt="">
                        <input type="submit" value="Details" class="button">
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <div class="footer">
        <center>
            <p>© Happy Book Store 2021</p>
        </center>
    </div>
</body>
</html><?php /**PATH D:\Other\B_Semester 5\Exams\Web Programming\UTS\2301850550_Angelin Minarto_Jawaban Web Prog\Code\WEB-UTS\resources\views/detail.blade.php ENDPATH**/ ?>