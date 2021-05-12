<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        商品追加<br>
        <br>
        <form method="POST" action="pro_add_check.php">
            商品名を入力して下さい<br>
            <input type="text" name="name" style="width:200px"><br>
            価格を入力してください<br>
            <input type="text" name="price" style="width:100px"><br>
            <br>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK">
        </form>
    </body>
</html>