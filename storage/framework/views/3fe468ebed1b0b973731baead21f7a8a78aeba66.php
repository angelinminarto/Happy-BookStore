<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Happy Book Store</title>
    <link rel="stylesheet" href=<?php echo e(url("style/style.css")); ?>>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
</head>
<body>
    <div class="page">
        <div class="menu1">
            <h1 style="text-align: center; font-size: 40px; color: #fff; font-style: normal; padding: 2px;">Happy Book Store</h1>
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

    <div class="Booklist">
        <Center>
            <p>Book List</p>
        </Center>>
    </div>
    <Center>
        <div class="bag-atas">
            <table>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                </tr>
               
                <tr>
                  <td><a href="/detail" title="Book Detail">Fiction 1</a></td>
                  <td>Someone Who Cares</td>
                </tr>
                <tr>
                  <td><a href="/detail" title="Book Detail">Fiction 2</a></td>
                  <td>Someone Who Cares</td>
                </tr>
                  <tr>
                  <td><a href="/detail" title="Book Detail">Fiction 3</a></td>
                  <td>Someone Who Cares</td>
                </tr>
                <tr>
                    <td><a href="/detail" title="Book Detail">Science 1</a></td>
                    <td>Someone Who Cares</td>
                  </tr>
                  <tr>
                    <td><a href="/detail" title="Book Detail">Science 2</a></td>
                    <td>Someone Who Cares</td>
                  </tr>
            </table>
                <div class="wp-pagenavi">
                <button><a href="a">Previous</a></button>
                <button><a href="2">Next</a>></button>
                </div>
        </div>
    </Center>
    <!-- <div class="bag-atas">
        <div class="slider">
            <ul>
                <li>
                    <a href="index.html" target="_blank">
                        <img src="https://www.nicepng.com/png/detail/422-4227051_header-banner-discount-card-design-sample.png" alt="Images 1" height="350px" width="100%">
                    </a>
                </li>
            </ul>
        </div>
    </div> -->



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
</html><?php /**PATH D:\Other\B_Semester 5\Exams\Web Programming\UTS\2301850550_Angelin Minarto_Jawaban Web Prog\Code\WEB-UTS\resources\views/index.blade.php ENDPATH**/ ?>