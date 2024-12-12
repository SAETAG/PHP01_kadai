<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>送信画面</title>
    <style>
        body {
            background-color: #e0f7fa;
            /* 薄い青系背景色 */
            color: #006064;
            /* 文字色を青系 */
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 5px;
            border: 1px solid #006064;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #006064;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        button {
            background-color: #006064;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004d4d;
        }
    </style>
</head>

<body>
    <form action="write.php" method="post">
        <label>名前：<input type="text" name="name"></label><br>
        <label>メール：<input type="text" name="email"></label><br>
        <label>備考：<textarea name="memo" cols="30" rows="10"></textarea></label><br>
        <button type="submit">送信</button>
    </form>
</body>

</html>