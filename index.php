<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности и таблица сравнения</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div class="container">
<h3>Таблица истинности PHP</h3>
<table class="table1"> 
    <thead>
        <tr>
            <th>
                <strong>A</strong>
            </th>
            <th>
                <strong>B</strong>
            </th>
            <th>
                <strong>!A</strong>
            </th> 
            <th>
                <strong>A || B</strong>
            </th>
            <th>
                <strong>A && B</strong>
            </th>
            <th>
                <strong>A xor B</strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="A">0</td>
            <td class="B">0</td>
            <td class="!A"><?php echo !0 ?></td>
            <td class="A||B"><?php echo 0 || 0 ?></td>
            <td class="A&&B"><?php echo 0 && 0 ?></td>
            <td class="AxorB"><?php echo 0 xor 0 ?></td>
        </tr>
        <tr>
            <td class="A">0</td>
            <td class="B">1</td>
            <td class="!A"><?php echo !0 ?></td>
            <td class="A||B"><?php echo 0 || 1 ?></td>
            <td class="A&&B"><?php echo 0 && 1 ?></td>
            <td class="AxorB"><?php echo 0 xor 1 ?></td>
        </tr>
        <tr>
            <td class="A">1</td>
            <td class="B">0</td>
            <td class="!A"><?php echo !1 ?></td>
            <td class="A||B"><?php echo 1 || 0 ?></td>
            <td class="A&&B"><?php echo 1 && 0 ?></td>
            <td class="AxorB"><?php echo 1 xor 0 ?></td>
        </tr>
        <tr>
            <td class="A">1</td>
            <td class="B">1</td>
            <td class="!A"><?php echo !1 ?></td>
            <td class="A||B"><?php echo 1 || 1 ?></td>
            <td class="A&&B"><?php echo 1 && 1 ?></td>
            <td class="AxorB"><?php echo 1 xor 1 ?></td>
        </tr>
    </tbody>

</table> 

<h3>Таблица сравнения</h3>

<table class="table2"> 
    <thead>
        <tr>
            <th>
                <strong></strong>
            </th>
            <th>
                <strong>true</strong>
            </th>
            <th>
                <strong>false</strong>
            </th> 
            <th>
                <strong>1</strong>
            </th>
            <th>
                <strong>0</strong>
            </th>
            <th>
                <strong>-1</strong>
            </th>
            <th>
                <strong>"1"</strong>
            </th>
            <th>
                <strong>null</strong>
            </th>
            <th>
                <strong>"php"</strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>true</th>
            <td><?php echo true == true ?></td>
            <td><?php echo true == false ?></td>
            <td><?php echo true == 1 ?></td>
            <td><?php echo true == 0 ?></td>
            <td><?php echo true == -1 ?></td>
            <td><?php echo true == "1" ?></td>
            <td><?php echo true == null ?></td>
            <td><?php echo true == "php" ?></td>
        </tr>
        <tr>
            <th>false</th>
            <td><?php echo false == true ?></td>
            <td><?php echo false == false ?></td>
            <td><?php echo false == 1 ?></td>
            <td><?php echo false == 0 ?></td>
            <td><?php echo false == -1 ?></td>
            <td><?php echo false == "1" ?></td>
            <td><?php echo false == null ?></td>
            <td><?php echo false == "php" ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo 1 == true ?></td>
            <td><?php echo 1 == false ?></td>
            <td><?php echo 1 == 1 ?></td>
            <td><?php echo 1 == 0 ?></td>
            <td><?php echo 1 == -1 ?></td>
            <td><?php echo 1 == "1" ?></td>
            <td><?php echo 1 == null ?></td>
            <td><?php echo 1 == "php" ?></td>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo 0 == true ?></td>
            <td><?php echo 0 == false ?></td>
            <td><?php echo 0 == 1 ?></td>
            <td><?php echo 0 == 0 ?></td>
            <td><?php echo 0 == -1 ?></td>
            <td><?php echo 0 == "1" ?></td>
            <td><?php echo 0 == null ?></td>
            <td><?php echo 0 == "php" ?></td>
        </tr>
        <tr>
            <th>-1</th>
            <td><?php echo -1 == true ?></td>
            <td><?php echo -1 == false ?></td>
            <td><?php echo -1 == 1 ?></td>
            <td><?php echo -1 == 0 ?></td>
            <td><?php echo -1 == -1 ?></td>
            <td><?php echo -1 == "1" ?></td>
            <td><?php echo -1 == null ?></td>
            <td><?php echo -1 == "php" ?></td>
        </tr>
        <tr>
            <th>"1"</th>
            <td><?php echo "1" == true ?></td>
            <td><?php echo "1" == false ?></td>
            <td><?php echo "1" == 1 ?></td>
            <td><?php echo "1" == 0 ?></td>
            <td><?php echo "1" == -1 ?></td>
            <td><?php echo "1" == "1" ?></td>
            <td><?php echo "1" == null ?></td>
            <td><?php echo "1" == "php" ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php echo null == true ?></td>
            <td><?php echo null == false ?></td>
            <td><?php echo null == 1 ?></td>
            <td><?php echo null == 0 ?></td>
            <td><?php echo null == -1 ?></td>
            <td><?php echo null == "1" ?></td>
            <td><?php echo null == null ?></td>
            <td><?php echo null == "php" ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php echo "php" == true ?></td>
            <td><?php echo "php" == false ?></td>
            <td><?php echo "php" == 1 ?></td>
            <td><?php echo "php" == 0 ?></td>
            <td><?php echo "php" == -1 ?></td>
            <td><?php echo "php" == "1" ?></td>
            <td><?php echo "php" == null ?></td>
            <td><?php echo "php" == "php" ?></td>
        </tr>                
    </tbody>
</table> 
</div>

</body>
</html>