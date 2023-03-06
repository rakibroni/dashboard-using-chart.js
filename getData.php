<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "thesis_project");

$list_value = 'attendance';
if (!empty($_POST["list_value"])) {
	$list_value = $_POST["list_value"];
}

$sqlQuery = "SELECT student_name," . $list_value . " FROM student_attendance_grade ORDER BY id";
$result = mysqli_query($conn, $sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
