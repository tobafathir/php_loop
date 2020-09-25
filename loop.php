<?php 

// nomer 1

function satu()
{
    for($z=1;$z<=10;$z++)
    {
        if($z>3 && $z<8)
        {
            echo "";
        }else{
            echo " $z ";
        }
    }
}
satu();

echo PHP_EOL;

// nomer 2

function dua()
{
    for ($x=5;$x>=1;$x--)
    {
        if($x==5 || $x==3)
        {
            echo " $x " ;
            continue;
        }
        elseif($x<3)
        {
            echo " * " ;
        continue;
        }
        else{
        
        echo $x;
        }
    }
}

dua();

echo PHP_EOL;

// nomor 3
 function tiga()
{
    for($a=1;$a<=4;$a++)
{
    if($a %2 ==0)
    {
        echo "$a  b  ";   
    }else{
        echo " $a  a  ";
        
    }
}
}

tiga();


echo PHP_EOL;

// nomor 4
function empat()
{

    for($e=1;$e<8;$e++)
    {
        if($e>3 && $e<7)
        {
            echo " A ";
        }else{
            echo " $e ";
    }
}
}

empat();

echo PHP_EOL;

// nomer 5

function lima()
{

    for($a=4; $a>=0; $a--)
{
    
    if($a==2 || $a==0 )
     {
         echo " A ";
         continue;
        }
        echo " $a ";
    }
    
}

lima();

  echo PHP_EOL;  

// nomer 6

function enam()
{

    for($r=0;$r<=4;$r++)
    {
    if($r==0 || $r==1)
    {
        echo " A ";
        continue;
    }
    echo " $r ";
}
}

enam();





// $a=1;
// // while($a<=4)
// // {
// //     if($a %2 !==0)
// //     {
// //         echo $a."a  ";
// //     }else{
// //         echo $a."b  ";
// //     }
// //     $a++;
// // }

// do{
//     if($a %2 !==0)
//     {
//         echo $a."a  ";
//     }else{
//         echo $a."b  ";
//     }
//     $a++;
// }while($a<=4);