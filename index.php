<?php

namespace Prabhu\Ros;

function conn($sname,$username,$password,$db,$check){
$conn=new \mysqli($sname,$username,$password,$db);
if($conn->connect_error)
{
echo "connection error:".$conn->connect_error;
}
else if($check){
    echo "connected";

}


}




?>