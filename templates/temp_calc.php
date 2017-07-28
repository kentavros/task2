<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Task 2 _ Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 2 - Calculator</a>
        </div>
    </div>
</nav>
<div class="container center-block ">
    <div class="starter-template text-center">
        <h1 class="">Calculator</h1>
    </div>
    <div>
        <form role="form" class="form-inline text-center" method="post">
            <div class="form-group">
                <label for="email">Number 1</label>
                <input type="text" class="form-control" name="num1" placeholder="type number one">
            </div>
            <div class="form-group">
                <label for="pass">Number 2</label>
                <input type="text" class="form-control" name="num2" placeholder="type number two">
            </div>
            <button type="submit" class="btn btn-success">Calculate</button>
        </form>
    </div>
</div>
<?php
    if (isset($calc))
{
?>
<table class="table container" style="width: 500px">
    <tr>
        <th class="text-center" style="width: 250px">Action</th>
        <th class="text-center">Result</th>
    </tr>
    <tr>
        <td>Number 1</td><td><?=$calc->getNum1();?></td>
    </tr>
    <tr>
        <td>Number 2</td><td><?=$calc->getNum2();?></td></td>
    </tr>
    <tr>
        <td>Plus</td><td><?=$calc->plus();?></td></td>
    </tr>
    <tr>
        <td>Minus Num1 - Num2</td><td><?=$minusResult[INDEX_RESULT1];?></td></td>
    </tr>
    <tr>
        <td>Minus Num2 - Num1</td><td><?=$minusResult[INDEX_RESULT2];?></td></td>
    </tr>
    <tr>
        <td>Multiplication</td><td><?=$calc->multipl();?></td></td>
    </tr>
    <tr>
        <td>Devide Num1 / Num2</td><td><?=$devideResult[INDEX_RESULT1];?></td></td>
    </tr>
    <tr>
        <td>Devide Num2 / Num1</td><td><?=$devideResult[INDEX_RESULT2];?></td></td>
    </tr>
    <tr>
        <td>Sqrt Num1 </td><td><?=$sqrtResult[INDEX_RESULT1];?></td></td>
    </tr>
    <tr>
        <td>Sqrt Num2</td><td><?=$sqrtResult[INDEX_RESULT2];?></td></td>
    </tr>
    <tr>
        <td>Percent Num1 </td><td><?=$percentResult[INDEX_RESULT1];?></td></td>
    </tr>
    <tr>
        <td>Percent Num2</td><td><?=$percentResult[INDEX_RESULT2];?></td></td>
    </tr>
    <tr>
        <td>Save value to memory</td><td><?=$save;?></td></td>
    </tr>
    <tr>
        <td>Get value to memory</td><td><?=$calc->getMR();?></td></td>
    </tr>
    <tr>
        <td>Add value to memory</td><td><?=$calc->addM($add);?></td></td>
    </tr>
    <tr>
        <td>Add value to memory</td><td><?=$calc->minusM($minusM);?></td></td>
    </tr>
    <tr>
        <td>Clear memory</td><td><?=$calc->cleanM;?></td></td>
    </tr>

</table>


<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>