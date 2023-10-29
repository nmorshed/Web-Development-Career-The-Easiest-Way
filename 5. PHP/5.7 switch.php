<?php

$day = "Monday";


// switch ($day) {
// 	case 'Friday':
// 		echo "Off day! don't send email.";
// 		break;

// 	case 'Saturday':
// 		echo "Off day! don't send email.";
// 		break;
	
// 	default:
// 		echo "send email.";
// 		break;
// }



if ( "Friday" == $day ){
	echo "Off day! don't send email.";
}elseif ("Saturday" == $day) {
	echo "Off day! don't send email.";
}else{
	echo "send email.";
}


?>