<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <h1>Bobs auto parts</h1>
    <h2>order result</h2>
    <?php
    $tireqty=$_REQUEST["tireqty"];
    $oilqty=$_REQUEST["oilqty"];
    $sparkqty=$_REQUEST["sparkqty"];
    echo "<p>Order processed</p>";//hahaha
    echo "hello";#sajalsjd
    /*
    echo "<p>order processed at ";
    echo date("H:i, jS F Y");
    echo "</p>";
*/
    //date()函数
    echo "<p> order processed at ".date("H:i, jS F Y")."</p>";//H代表小时，i代表分钟，j代表日期，S代表后最th，F代表月份，Y代表年
    //php变量必须以$开头
    // echo $trieqty;//简短风格
    // echo $_GET["tireqty"];//中等风格，推荐风格
    // echo "<p>".$_REQUEST["oilqty"]."</p>";//无论使用哪种提交方式，都可以一这种方法获得变量
    echo $tireqty."tires"."<br/>";//字符串链接
    echo $oilqty."oilqty"."<br/>";
    echo "$oilqty.oilqty<br/>";//在双引号中引用获得变量
    echo '$oilqty.oilqty<br/>';//在单引号引用只能一字符创方式呈现
    $totalqty=0;
    $amout=0.00;
    $hah=0;
    $jj=1.9;
    // $totalqty=(float)$totalqty;
    echo $hah."<br/>";
    echo $totalqty."<br/>";
    echo $jj."<br/>";
    echo (integer)$jj."<br/>";//类型转化

    //可变变量
    // $varname="tireqty";
    // $$varname=5;
    // echo $tireqty."<br/>";

    //声明和使用常量,常量名称通常写，便于区分
    define("TIRE",100);
    define("OIL",10);
    define("SPATK",4);
    echo TIRE."<br/>";
    // echo phpinfo();//显示php预定义的常量和变量

    $a="2ui";
    $b="3ko";
    echo $a+$b."<br/>";//开头没有数字的字符串将转化为0

    //前置递增与后置递增的区别
    $c=2;
    echo $c++."<br/>";
    echo $c."<br/>";
    $d=2;
    echo ++$d."<br/>";

    //引用操作符
    $e=9;
    $f=&$e;
    $f=8;
    echo $e."<br/>";

    $g=@(100/0);//抑制错与弹出
    echo $g."<br/>";

    // $out=`dir c:`;//执行操作符
    // echo "<pre>".$out."</pre>";

    $amout=$tireqty*TIRE+$oilqty*OIL+$sparkqty*SPATK;
    $totalqty=$tireqty+$oilqty+$sparkqty;

    echo "</p>totalqty: $totalqty</p>";
    echo "<p>amount: $amout</p>";

    //gettype()和settype()
    echo gettype($e)."<br/>";
    echo gettype($jj)."<br/>";
    settype($jj,"integer");
    echo gettype($jj)."<br/>";

    //特定检测函数
    $aa="aa";
    $arr=22;
    // echo is_string($aa)."<br/>";
    // echo is_array($arr)."<br/>";

    //检测变量状态
    echo isset($aa)."jaja"."<br/>";
    echo isset($sjdisa)."<br/>";
    echo empty($sjdisa);
   


    ?>
</body>
</html>