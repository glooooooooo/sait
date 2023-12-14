<?php
include "DataBase.php";
$res = mysqli_query($link, "SELECT * FROM igruhi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\css1.css">
    <script src="script.js" defer></script>
    <title>Магазин мягких игрушек</title>
</head>
<body>
    <header>
        <nav>
            <img src="https://sun9-26.userapi.com/impg/uQv-tlI3n0zoYu0ZPMzDByHUr9y5C4_UfCa1NA/dRWbKbcbs-g.jpg?size=228x168&quality=96&sign=04dc243efd541829f6aa610aa3d68bd5&type=album" alt="лого">
        </nav>
        <div class="header-content">
            <h1>obnimashkin’s</h1>
            <ul>
                <li><a href="kon.php">О нас</a></li>
                <form action="tovar.php" method="post" class="login-form">
                    <li><button id="lb">Добавить товар</button></li>
                </form>
                <form action="cait.php" method="post" class="login-form">
                    <li><button id="login">Выход</button></li>
                </form>
            </ul>
        </div>
    </header>

    <section class="main-content">
    <?php
                            while($cat = mysqli_fetch_assoc($res))
                            {?>
                                <article class="product">
                                <img src="https://sun9-34.userapi.com/impg/DtphBprMVdbcEWr1yfdNSziUKjR7zyvI11AvdQ/TEbcf5s6eMs.jpg?size=552x636&quality=96&sign=381e3244bb5a056ee2b7312530b907ab&type=album" alt="Мягкая игрушка 1"> 
                                <h2><?php echo $cat["name"]?></h2>
                                <p class="price"><?php echo $cat["price"]?>  руб</p>
                                <p><?php echo $cat["text"]?></p>
                            </article><?php
                            }
                        ?>
       
    </section>

    <footer>
        <p> Адрес: Аксайский проспект, 23, Аксай       Контактный номер: +79094518095        Почта: igryyyshki@gmail.com</p>
    </footer>
</body>
</html>