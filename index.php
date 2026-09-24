<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DevMarket</title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <header>
            <div class="header-container">

                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="Логотип DevMarket">
                    DevMarket
                </a>

                <nav class="header-nav">
                    <a href="index.php">Главная</a>
                    <a href="about.php">О нас</a>
                    <a href="products.php">Каталог</a>
                    <a href="contacts.php">Контакты</a>
                </nav>

                <!-- Позже: поиск, корзина, профиль и кнопка входа -->

            </div>
        </header>


        <main>

            <!-- Главный экран -->
            <section class="hero">
                <div class="hero-container">

                    <div class="hero-content">

                        <p class="hero-label">
                            Маркетплейс для разработчиков
                        </p>

                        <h1>Всё для разработки в одном месте</h1>

                        <p class="hero-description">
                            Техника, аксессуары, книги и другие товары
                            для комфортной работы и развития в IT.
                        </p>

                        <div class="hero-buttons">
                            <a href="products.php" class="button button-primary">Перейти в каталог</a>
                            <a href="about.php" class="button button-secondary">Узнать больше</a>
                        </div>

                        <div class="hero-features">
                            <p>Быстрая доставка</p>
                            <p>Проверенные товары</p>
                            <p>Поддержка 24/7</p>
                        </div>

                    </div>

                    <div class="hero-image">
                        <img src="images/hero.png" alt="Рабочее место разработчика">
                    </div>

                </div>
            </section>


            <!-- Категории -->
            <section class="categories">

                <h2>Популярные категории</h2>

                <div class="categories-grid">

                    <a href="products.php?category=laptops" class="category-card">
                        <article>
                            <img src="images/laptops.png" alt="Ноутбуки">
                            <h3>Ноутбуки</h3>
                        </article>
                    </a>

                    <a href="products.php?category=accessories" class="category-card">
                        <article>
                            <img src="images/accessories.png" alt="Аксессуары">
                            <h3>Аксессуары</h3>
                        </article>
                    </a>

                    <a href="products.php?category=books" class="category-card">
                        <article>
                            <img src="images/books.png" alt="Книги">
                            <h3>Книги</h3>
                        </article>
                    </a>

                </div>
            </section>


            <!-- Популярные товары -->
            <section class="popular">

                <h2>Популярные товары</h2>

                <div class="products-grid">

                    <article class="product-card">
                        <img src="images/product1.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=1">Подробнее</a>
                    </article>

                    <article class="product-card">
                        <img src="images/product2.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=2">Подробнее</a>
                    </article>

                    <article class="product-card">
                        <img src="images/product3.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=3">Подробнее</a>
                    </article>

                    <article class="product-card">
                        <img src="images/product4.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=4">Подробнее</a>
                    </article>

                </div>
            </section>


            <!-- О DevMarket -->
            <section class="about">

                <div class="about-container">

                    <h2>Развивайся вместе с DevMarket</h2>

                    <p>
                        DevMarket объединяет полезные товары и инструменты
                        для разработчиков в одном месте.
                    </p>

                    <a href="about.php">О DevMarket</a>

                </div>

            </section>

        </main>


        <footer>

            <div class="footer-container">

                <a href="index.php" class="footer-logo">
                    <img src="images/logo.jpg" alt="Логотип DevMarket">
                    DevMarket
                </a>

                <nav class="footer-nav">
                    <a href="index.php">Главная</a>
                    <a href="about.php">О нас</a>
                    <a href="products.php">Каталог</a>
                    <a href="contacts.php">Контакты</a>
                </nav>

                <!-- Позже: соц. сети -->

                <p class="copyright">
                    © 2026 DevMarket. Все права защищены.
                </p>

            </div>

        </footer>

    </body>
</html>