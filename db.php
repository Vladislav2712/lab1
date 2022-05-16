<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=computer", "root", "");

function findProcessor($processor)
{
    global $db;
    $statement = $db->prepare("SELECT netname, motherboard, vendor, guarantee FROM computers inner join processors on FID_Processor = ID_Pocessor WHERE processors.name=?");
    $statement->execute([$processor]);
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Guarantee </th>
</tr> ";
    while ($data = $statement->fetch()) {
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> {$data['guarantee']} </th>
</tr> ";
    }
    echo "</table>";
}

function findSoftware($software)
{
    global $db;
    $statement = $db->prepare("SELECT netname, motherboard, vendor, guarantee FROM computers inner join computer_softwares on ID_Computer = FID_Computer inner join softwares on FID_Software = ID_Software WHERE softwares.name=?");
    $statement->execute([$software]);
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Guarantee </th>
</tr> ";
    while ($data = $statement->fetch()) {
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> {$data['guarantee']} </th>
</tr> ";
    }
    echo "</table>";
}

function findGuarantee()
{
    global $db;
    $statement = $db->prepare("SELECT netname, motherboard, vendor, guarantee FROM computers WHERE guarantee < ?");
    $statement->execute([date("Y-m-d")]);
    echo "Guarantee out:";
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Guarantee </th>
</tr> ";
    while ($data = $statement->fetch()) {
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> {$data['guarantee']} </th>
</tr> ";
    }
    echo "</table>";
}

