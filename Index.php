</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Micro+5+Charted&family=Pixelify+Sans:wght@400..700&display=swap"
        rel="stylesheet">
    <title>Trang Chủ</title>
</head>

<body>
    <div class="header">
        <div class="navbar">
            <div class="icon">
                <img src="icon.png" alt="">
            </div>
            <div class="homePage">
                <a href="">Infinity Jump</a>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="" class="navMenu">Trang Chủ</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="navMenu">Liên Hệ</a>
                        <a href="#" class="navMenu"></a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <div class="body">
        <p></p>
    </div>
    <div id="wrapper">

        <!-- Button chuyển sang index.html -->
        <button onclick="goToIndex()">Play Games</button>

        <script>
        // Hàm chuyển trang
        function goToIndex() {
            window.location.href = "Game/index.html";
        }
        </script>

    </div>
</body>

</html>