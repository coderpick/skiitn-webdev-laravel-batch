<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class Employee
{
private $ein;
function __construct($ein)
{
if ($this->verifyEIN($ein)) {
echo "EIN verified. Finish";
}
}
protected function verifyEIN($ein)
{
return TRUE;
}
}
$employee = new Employee("123-45-6789");
?>
</body>
</html>