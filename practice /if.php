<?php
$numoftshirt=6;
$numbofjean=10;

if (($numoftshirt>5)&&($numbofjean>8))
{
    echo '25% discount';

}
else if (($numoftshirt>3)||($numbofjean>5))
{
    echo '15%discount';
}
else if (($numoftshirt>2)||($numbofjean>4))
{
    echo '5%';
}
else
{
    echo 'no discount';
}

?>