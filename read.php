<?php
$file = fopen("data.csv", "r");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録データ一覧</title>
    <style>
        body {
            background-color: #e0f7fa;
            color: #006064;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
            background: #ffffff;
        }

        th,
        td {
            border: 1px solid #006064;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #b2ebf2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #004d4d;
        }
    </style>
</head>

<body>
    <h1>登録データ一覧</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>メール</th>
            <th>備考</th>
        </tr>
        <?php
        while (($line = fgetcsv($file)) !== FALSE) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($line[0], ENT_QUOTES, 'UTF-8') . "</td>";
            echo "<td>" . htmlspecialchars($line[1], ENT_QUOTES, 'UTF-8') . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($line[2], ENT_QUOTES, 'UTF-8')) . "</td>";
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>
</body>

</html>