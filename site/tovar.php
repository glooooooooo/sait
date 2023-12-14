<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\tovar.css">
    <script src="script.js" defer></script>
    <title>Добавление товара</title>
</head>
<body>
    <section class="main-content">
        <div class="add-product-container">
            <h2>Добавление товара</h2>
            <form action="in.php" method="post" class="add-product-form">
                <label for="productName">Название товара:</label>
                <input type="text" id="productName" name="productName" required>

                <label for="productPrice">Цена:</label>
                <input type="text" id="productPrice" name="productPrice" required>

                <label for="productDescription">Описание:</label>
                <textarea id="productDescription" name="productDescription" required></textarea>


                <button id="addProduct">Добавить товар</button>
            </form>
        </div>
    </section>
</body>
</html>