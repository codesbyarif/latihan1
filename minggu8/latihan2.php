<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>
<body>
    <h2>Membuat perulangan tabel</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        for ($b=1; $b <= 3; $b++) { 
            # code...
            echo "<tr>";
            for ($k=1; $k <=5 ; $k++) { 
                # code...
                echo "<td> $b,$k </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>