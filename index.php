<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DevMarket</title>
    </head>

    <body>
        <header>
            <div>
                <a href="index.php">
                    <img src="images/logo.jpg" alt="Логотип">
                    DevMarket
                </a>
            </div>

            <nav>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="products.php">Каталог</a>
                <a href="contacts.php">Контакты</a>
            </nav>

            <!-- Позже: поиск, корзина, профиль и кнопка входа -->
        </header>

        <main>
            <section>
                <div>
                    <p>Маркетплейс для разработчиков</p>

                    <h1>Всё для разработки в одном месте</h1>

                    <p>
                        Техника, аксессуары, книги и другие товары
                        для комфортной работы и развития в IT.
                    </p>

                    <a href="products.php">Перейти в каталог</a>
                    <a href="about.php">Узнать больше</a>

                    <div>
                        <p>Быстрая доставка</p>
                        <p>Проверенные товары</p>
                        <p>Поддержка 24/7</p>
                    </div>
                </div>

                <div>
                    <img src="images/hero.png" alt="Рабочее место разработчика">
                </div>
            </section>


            <section>
                <h2>Популярные категории</h2>

                <div>
                    <a href="products.php?category=laptops">
                        <article>
                            <img src="images/laptops.jpg" alt="Ноутбуки">
                            <h3>Ноутбуки</h3>
                        </article>
                    </a>

                    <a href="products.php?category=accessories">
                        <article>
                            <img src="images/accessories.jpg" alt="Аксессуары">
                            <h3>Аксессуары</h3>
                        </article>
                    </a>

                    <a href="products.php?category=books">
                        <article>
                            <img src="images/books.jpg" alt="Книги">
                            <h3>Книги</h3>
                        </article>
                    </a>
                </div>
            </section>


            <section>
                <h2>Популярные товары</h2>

                <div>
                    <article>
                        <img src="images/product1.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=1">Подробнее</a>
                    </article>

                    <article>
                        <img src="images/product2.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=2">Подробнее</a>
                    </article>

                    <article>
                        <img src="images/product3.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=3">Подробнее</a>
                    </article>

                    <article>
                        <img src="images/product4.jpg" alt="Название товара">
                        <h3>Название товара</h3>
                        <p>Категория</p>
                        <p>Цена</p>
                        <a href="product.php?id=4">Подробнее</a>
                    </article>
                </div>
            </section>


            <section>
                <h2>Развивайся вместе с DevMarket</h2>

                <p>
                    DevMarket объединяет полезные товары и инструменты
                    для разработчиков в одном месте.
                </p>

                <a href="about.php">О DevMarket</a>
            </section>
        </main>


        <footer>
            <div>
                <a href="index.php">
                    <img src="images/logo.jpg" alt="Логотип">
                    DevMarket
                </a>
            </div>

            <nav>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="products.php">Каталог</a>
                <a href="contacts.php">Контакты</a>
            </nav>

            <!-- Позже: соц. сети -->

            <p>© 2026 DevMarket. Все права защищены.</p>
        </footer>
    </body>
</html>