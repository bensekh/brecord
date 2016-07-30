<?php

$json_old = '[
	{
		"no": "11115",
		"nama": "Kennedy Barnett",
		"company": "Arcu Sed Et PC",
		"country": "Mozambique",
		"point": 123
	},
	{
		"no": "28155",
		"nama": "Barrett Marsh",
		"company": "In Magna Phasellus Foundation",
		"country": "Grenada",
		"point": 123
	},
	{
		"no": "88142",
		"nama": "Meredith Harrell",
		"company": "Enim Mauris Institute",
		"country": "Peru",
		"point": 123
	},
	{
		"no": "98666",
		"nama": "Clinton Mcfadden",
		"company": "Malesuada Inc.",
		"country": "Saint Martin",
		"point": 123
	},
	{
		"no": "96581",
		"nama": "TaShya Cross",
		"company": "Faucibus Corporation",
		"country": "Botswana",
		"point": 234
	},
	{
		"no": "45484",
		"nama": "Hyatt Larsen",
		"company": "Per Inceptos Associates",
		"country": "Tonga",
		"point": 234
	},
	{
		"no": "47941",
		"nama": "Anne Evans",
		"company": "Magna Duis Limited",
		"country": "Saint Barthelemy",
		"point": 234
	},
	{
		"no": "76503",
		"nama": "Lars Castaneda",
		"company": "Mauris A Nunc Foundation",
		"country": "Saint Martin",
		"point": 234
	},
	{
		"no": "77625",
		"nama": "Aspen Camacho",
		"company": "Mauris Institute",
		"country": "Dominica",
		"point": 234
	},
	{
		"no": "25601",
		"nama": "Nevada Griffith",
		"company": "Blandit Company",
		"country": "Western Sahara",
		"point": 642
	},
	{
		"no": "19948",
		"nama": "Patricia Hammond",
		"company": "Egestas Rhoncus LLC",
		"country": "Barbados",
		"point": 642
	},
	{
		"no": "60414",
		"nama": "Bree Ratliff",
		"company": "Nullam Feugiat Institute",
		"country": "Antigua and Barbuda",
		"point": 642
	},
	{
		"no": "84395",
		"nama": "Gemma Johns",
		"company": "Porttitor Eros Nec Company",
		"country": "Slovakia",
		"point": 642
	},
	{
		"no": "20557",
		"nama": "James Mccarty",
		"company": "Fermentum Metus Consulting",
		"country": "Burundi",
		"point": 642
	},
	{
		"no": "89158",
		"nama": "Silas Melton",
		"company": "Semper Pretium Neque Incorporated",
		"country": "Bosnia and Herzegovina",
		"point": 642
	},
	{
		"no": "83448",
		"nama": "Chadwick Fitzpatrick",
		"company": "Nulla Tincidunt LLC",
		"country": "Guatemala",
		"point": 642
	}
]';

$json_new = '[
	{
		"id": "11115",
		"name": "Kennedy Barnett",
		"company": "Arcu Sed Et PC",
		"country": "Mozambique",
		"value": 432
	},
	{
		"id": "28155",
		"name": "Barrett Marsh",
		"company": "In Magna Phasellus Foundation",
		"country": "Grenada",
		"value": 432
	},
	{
		"id": "88142",
		"name": "Meredith Harrell",
		"company": "Enim Mauris Institute",
		"country": "Peru",
		"value": 95
	},
	{
		"id": "98666",
		"name": "Clinton Mcfadden",
		"company": "Malesuada Inc.",
		"country": "Saint Martin",
		"value": 95
	},
	{
		"id": "96581",
		"name": "TaShya Cross",
		"company": "Faucibus Corporation",
		"country": "Botswana",
		"value": 95
	},
	{
		"id": "76503",
		"name": "Lars Castaneda",
		"company": "Mauris A Nunc Foundation",
		"country": "Saint Martin",
		"value": 95
	},
	{
		"id": "45484",
		"name": "Hyatt Larsen",
		"company": "Per Inceptos Associates",
		"country": "Tonga",
		"value": 95
	},
	{
		"id": "47941",
		"name": "Anne Evans",
		"company": "Magna Duis Limited",
		"country": "Saint Barthelemy",
		"value": 95
	},
	{
		"id": "77625",
		"name": "Aspen Camacho",
		"company": "Mauris Institute",
		"country": "Dominica",
		"value": "900"
	},
	{
		"id": "25601",
		"name": "Nevada Griffith",
		"company": "Blandit Company",
		"country": "Western Sahara",
		"value": "900"
	},
	{
		"id": "",
		"name": "Koeshartanto",
		"company": "Brecord, Co., Inc.",
		"country": "Indonesia",
		"value": 863
	},
	{
		"id": "19948",
		"name": "Patricia Hammond",
		"company": "Egestas Rhoncus LLC",
		"country": "Barbados",
		"value": "900"
	},
	{
		"id": "60414",
		"name": "Bree Ratliff",
		"company": "Nullam Feugiat Institute",
		"country": "Antigua and Barbuda",
		"value": "900"
	},
	{
		"id": "84395",
		"name": "Gemma Johns",
		"company": "Porttitor Eros Nec Company",
		"country": "France",
		"value": "900"
	},
	{
		"id": "20557",
		"name": "James McCarty",
		"company": "Fermentum Metus Consulting",
		"country": "Burundi",
		"value": "900"
	},
	{
		"id": "29358",
		"name": "Reuben Graves",
		"company": "Diam Pellentesque Industries",
		"country": "Serbia",
		"value": "900"
	},
	{
		"id": "23696",
		"name": "Ivy Wood",
		"company": "Vestibulum Consulting",
		"country": "New Caledonia",
		"value": 863
	},
	{
		"id": "",
		"name": "Zulfiqar bin Saleh",
		"company": "Brecord, Sdn. Bhd.",
		"country": "Malaysia",
		"value": 863
	}
]';

$record_old = json_decode($json_old, true);
$record_new = json_decode($json_new, true);

include('Brecord.php');

$brecord = new Brecord();
$brecord->setOldRecord($record_old)
	->setNewRecord($record_new)
	->setUniqueKey(['no' => 'id'])
	->setFieldSet(['nama' => 'name', 'company', 'country'])
	->run();
?>
<html>
<head>
<title>Brecord Demo Page</title>
<style>
* {
	font-family: 'Verdana';
}

table {
	
}

th {
	border: 1px black solid;
	background: #AAAAAA;
}

td {
	border: 1px black solid;
}
</style>
</head>
<h1>Brecord Demo Page</h1>
<p>This page will demonstrate how Brecord detect changes between two sets of identical-column array.</p>
<p>It will detect new row added, updated row, deleted row and unchanged row.</p>
<p>It will be very useful to differentiating 2 tables.</p>
<h2>Example:</h2>
<?php
echo '<h4>This table is an old record:</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($record_old[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($record_old as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<h4>This table is an new record:</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($record_new[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($record_new as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>
<p>Then add some code:</p>
<pre>$brecord = new Brecord();
$brecord->setOldRecord($record_old) // set old record
	->setNewRecord($record_new) // set new record
	->setUniqueKey(['no' => 'id']) // set unique key on both old rec and new rec
	->setFieldSet(['nama' => 'name', 'company', 'country']) // set what field to compare
	->run();</pre>
<?php
echo '<h4>This table is a new set:</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($brecord->getNewSet()[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($brecord->getNewSet() as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<h4>This table is an old set (before update):</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($brecord->getOldSet()[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($brecord->getOldSet() as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<h4>This table is an updated set (after update):</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($brecord->getUpdatedSet()[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($brecord->getUpdatedSet() as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<h4>This table is a deleted set:</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($brecord->getDeletedSet()[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($brecord->getDeletedSet() as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<h4>This table is an unchanged set:</h4>';
echo '<table>';
echo '<tr>';
foreach(array_keys($brecord->getUnchangedSet()[0]) as $hd) {
	echo '<th>';
	echo $hd;
	echo '</th>';
}
echo '</tr>';
foreach($brecord->getUnchangedSet() as $tr) {
	echo '<tr>';
	foreach($tr as $td) {
		echo '<td>';
		echo $td;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';
echo '<p>With Brecord one can easily seperate which row are created, updated, deleted and unchanged.</p>';
echo '<p>Copyright by Bensekh &copy; 2016</p>';
?>
</html>