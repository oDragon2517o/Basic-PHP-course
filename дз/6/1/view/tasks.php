Задачи циклом





<h2>Список задачь</h2>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="text" placeholder="Добавьте покупку">
    <input type="submit" value="Добавить">
</form>
<br>

<?php if (isset($_SESSION['products'])): ?>
    <?php foreach ($_SESSION['products'] as $key => $product): ?>
        * <?=$product?> <a href="?controller=tasks&action=delete&key=<?=$key?>">[X]</a> <br>
    <?php endforeach; ?>
<?php else: ?>
    Нет товаров
<?php endif; ?>