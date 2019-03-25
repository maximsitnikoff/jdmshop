<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>


                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Ваша имя</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"
                                               onclick="gtag('event','name', {
                                                   'event_category':'inpute'
                                               });
                                               yaCounter50815435.reachGoal ('name'); return true;"/>

                                        <p>Номер телефона</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"
                                               onclick="gtag('event','phone', {
                                                   'event_category':'inpute'
                                               });
                                               yaCounter50815435.reachGoal ('phone'); return true;"/>

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"
                                               onclick="gtag('event','comment', {
                                                   'event_category':'inpute'
                                               });
                                               yaCounter50815435.reachGoal ('comment'); return true;"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить"
                                               onclick="gtag('event','typ', {
                                                   'event_category':'button'
                                               });
                                               yaCounter50815435.reachGoal ('typ'); return true;"/>
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>