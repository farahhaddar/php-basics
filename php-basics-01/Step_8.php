<?php
$indexedArray = ['Egg', 'Milk', 'Cheese', 'Water', 'Pack', 'Tissues', 'Watermelon'];
echo "Hello Sir, do you have $indexedArray[0], $indexedArray[1], and $indexedArray[2]? Also if you sell fruits can I find a $indexedArray[6]? \n";

$multiDimArray = array( 'eggs'=>array( 'balade', 'mazere3' ), 'milk'=>array( 'Fresh', 'Taanayel' ), 'water-pack'=>array( 'Tanoureen', 'Reem' ) );
echo 'Hey Sir, Please I need 1 pack of '.$multiDimArray['eggs'][0].' eggs and 3 '.$multiDimArray['water-pack'][1].' Water Pack';