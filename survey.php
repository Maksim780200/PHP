<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Опитування</title>
</head>
<body>
    <h2>Анкета опитування: Використання комп'ютерних мереж</h2>

    <form action="save.php" method="POST">
        <label>Ваше ім’я:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>1. Як часто ви користуєтесь інтернетом?</label><br>
        <select name="q1">
            <option>Кожен день</option>
            <option>Кілька разів на тиждень</option>
            <option>Рідко</option>
        </select><br><br>

        <label>2. Який тип мережі ви використовуєте найчастіше?</label><br>
        <select name="q2">
            <option>Wi-Fi</option>
            <option>Мобільний інтернет</option>
            <option>Ethernet</option>
        </select><br><br>

        <label>3. Ваш відгук про якість інтернету:</label><br>
        <textarea name="q3"></textarea><br><br>

        <button type="submit">Надіслати</button>
    </form>

</body>
</html>