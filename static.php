//static basic in php
<?php
function hello(){
    static $x=0;
    echo $x;
    $x++;
}
function jj(){
    $g="kkk";
    echo $g;
}
function kk(){
    static $y="pp";      // static so value does not resets  // if it is not static ! never sticks with pp
    echo $y;    
    $y=$y."!";
}
hello();
hello();
hello();
jj();
kk();
kk();
kk();
kk();
?>