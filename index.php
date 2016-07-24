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
		"id": "76503",
		"name": "Lars Castaneda",
		"company": "Mauris A Nunc Foundation",
		"country": "Saint Martin",
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
		"name": "David Only",
		"company": "Satpam",
		"country": "Indonesia",
		"value": 863
	},
	{
		"id": "",
		"name": "Dick Doank",
		"company": "Pengamen",
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

print_r($brecord->getNewSet());
print_r($brecord->getOldSet());
print_r($brecord->getUpdatedSet());
print_r($brecord->getDeletedSet());
print_r($brecord->getUnchangedSet());