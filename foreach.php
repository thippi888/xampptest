<!DOCTYPE html>
<head></head>
<body>
<h1>kokoko</h1>
<?php

$members =[
    '本田'=>[
        'height'=>178,
        'hobby'=>'野球koko'
    ],
    '香川'=>[
        'height'=>188,
        'hobby'=>'サッカー'
    ] 
];

foreach($members as $member_1){
    foreach($member_1 as $key=>$value)
    echo $key.'は'.$value.'です';
}


?>

</body>
</html>