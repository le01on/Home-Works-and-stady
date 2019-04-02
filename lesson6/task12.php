<?php

$array = [
    ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],
];

$newArr = array_map( function ($salery) {
    if ($salery['salery'] < 1600) {
        $salery['salery'] += 100;
    }
    return $salery;
}, $array);

$lastArr = array_map(function ($workHours) {
    if ($workHours['work_hours'] > 180) {
        $workHours['salery'] = $workHours['salery'] + $workHours['salery'] * 0.2;
    }
    return $workHours;
}, $newArr);

$firstArr = array_filter($lastArr,function ($workHours) {
    if ($workHours['work_hours'] < 160) {
        return $workHours;
    }
}
);

$secondArr = array_filter($lastArr,function ($salery) {
    if ($salery['salery'] < 2000) {
        return $salery;
    }
}
);


echo '<table cellpadding="5" cellspacing="0" border="1">';
echo "<thead>
    <tr>
        <th>Key</th>
        <th>Name</th>
        <th>Salery</th>
        <th>Work_hours</th>
    </tr>
    </thead>";
foreach ($firstArr as $key => $value) {
    echo
        "<tr><td>".$key."</td><td>".$value['name']."</td><td>".$value['salery']."</td><td>".$value['work_hours']."</td></tr>";
}
echo "</table>" . "<br>";


echo '<table cellpadding="5" cellspacing="0" border="1">';
echo "<thead>
    <tr>
         <th>Key</th>
        <th>Name</th>
        <th>Salery</th>
        <th>Work_hours</th>
    </tr>
    </thead>";
foreach ($secondArr as $key => $value) {
    echo
        "<tr><td>".$key."</td><td>".$value['name']."</td><td>".$value['salery']."</td><td>".$value['work_hours']."</td></tr>";
}
echo "</table>";































