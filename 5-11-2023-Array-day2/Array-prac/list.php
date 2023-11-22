<?php
$asghar = ['asghar', 'web developer'];
$ali = ['ali', 'web designer'];
list($asghar, $ali) = [$ali, $asghar];


foreach ($asghar as $key => $value) {
    echo $value . '<br>';
}






// $employer = [
//     [1, 'Asghar', 'Web developer', '8500'],
//     [2, 'Ahmed', 'Web designer', '8500'],
//     [3, 'Ali', 'software eng', '8500'],
//     [4, 'qasim', 'web contenter', '8500'],
//     [5, 'faraz', 'Web developer', '8500'],
//     [6, 'Gul', 'Web developer', '8500'],
//     [7, 'Faisal', 'Web developer', '8500'],
//     [8, 'mehmmod', 'Web developer', '8500'],
//     [9, 'Afzal', 'Web developer', '8500'],
//     [10, 'Asghar', 'Web developer', '8500'],
//     [11, 'Asghar', 'Web developer', '8500'],
//     [12, 'Asghar', 'Web developer', '8500'],
//     [13, 'Asghar', 'Web developer', '8500'],
//     [14, 'Asghar', 'Web developer', '8500'],
//     [15, 'Asghar', 'Web developer', '8500'],


// // ];
// foreach ($employer as list($id, $name, $passion, $sallery, )) {
//     echo "<table border='2'cellpadding='5px' cellspacing='0px'>";
//     echo "<tr>
//  <td>$id</td>  <td>$name</td>  <td>$passion</td>  <td>$sallery </td>
//  </tr>";
//     echo "</table>";
// }

?>