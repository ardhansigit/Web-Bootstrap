 <?php include 'koneksi.php'; 



$sql = "SELECT map_name, win_rate FROM map";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $labels[] = $row['map_name'];
    $data[] = $row['win_rate'];
  }
}

echo json_encode([
  "labels" => $labels,
  "data" => $data
]);

$conn->close();
?>
