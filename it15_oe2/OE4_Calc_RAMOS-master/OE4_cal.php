<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
if($operator=="√" )
{
$res= sqrt($n1);
}
if($operator=="%" )
{
$res= $n1 % $n2;
}

 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==0)
{
echo "<scrip language=javascript>
}
}
?>