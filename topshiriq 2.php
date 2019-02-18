
<?php
 echo    '<h1>'.'<center>'.'2 topshiriq'. '</center>'.'</h1>';
$ishchilar = [

    'Sarvar',

    'Islom',

    'Shoxrux'
   
];
$malumotlar= [

     
     ['ismi' => 'Sarvar', 'ish turi' => 'kunduzgi', 'oyligi' => '1200000',],

     ['ismi' => 'Islom', 'ish turi' => 'kechgi', 'oyligi' => '1300000',],
    
     ['ismi' => 'Shoxrux', 'ish turi' => 'kunduzgi', 'oyligi' => '1500000',],
];
echo '<table style="border-collapse: collapse; width:30%">';
echo '<tr><td><b>Nomi</b></td><td><b>Ish turi</b></td><td><b>Oyligi</b></td></tr>';
for ($index = 0; $index < count($malumotlar); $index++) {
	echo '<tr>';

    echo '  <td>   ' . $malumotlar[$index]  ['ismi'].'    </td> ';

    echo '  <td>  ' . $malumotlar[$index]['ish turi'] .' </td> ';

    echo '  <td>  '.$malumotlar[$index]['oyligi'].' </td> ';

};
