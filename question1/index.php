<?php
class Employee extends ArrayObject
{
    public function displayAsTable()
    {
        echo "<table style='border: 1px solid black'>";
        foreach ($this as $key => $value) {
            echo 
            "<tr style='border: 1px solid black'>
                <td style='font-weight: bold; border: 1px solid black' >{$key} :</td>
                <td style='border: 1px solid black'>{$value}</td>
            </tr>";
        }
        echo "</table>";
    }
}

$myArrayObject = new Employee();
$myArrayObject->offsetSet('Name', 'Mazherul Islam');
$myArrayObject->offsetSet('Email', 'mazherulislam6@gmail.com');
$myArrayObject->offsetSet('gender', 'Male');
$myArrayObject->offsetSet('phone', '01875936621');
$myArrayObject->displayAsTable();
