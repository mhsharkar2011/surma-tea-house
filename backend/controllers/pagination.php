<?php 
$num_rec_per_page = 2;
$conn = mysqli_connect('localhost', 'root', 'root', 'surma_tea'); // Corrected the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$getPage = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($getPage - 1) * $num_rec_per_page;
$sql = "SELECT * FROM tbl_testimonial LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query($conn, $sql); // Corrected the connection and query

echo '<table>';
echo '<tr><td>Title</td><td>Details</td></tr>';

while ($row = mysqli_fetch_assoc($rs_result)) { // Changed mysql_fetch_assoc to mysqli_fetch_assoc
    echo '<tr>';
    echo '<td>' . $row['title'] . '</td>';
    echo '<td>' . $row['details'] . '</td>';
    echo '</tr>';
}

echo '</table>';

$sql = "SELECT id FROM tbl_testimonial";
$rs_result = mysqli_query($conn, $sql);
$total_records = mysqli_num_rows($rs_result);
$total_pages = ceil($total_records / $num_rec_per_page);

echo "Total Pages: $total_pages";
echo "<a href='pagination.php?page=1'>" . '|<' . "</a> "; // Goto 1st page

for ($i = 1; $i <= $total_pages; $i++) { // Changed $i<$total_pages to $i<=$total_pages
    echo "<a href='pagination.php?page=$i'>$i</a> ";
}

echo "<a href='pagination.php?page=$total_pages'>" . '>|' . "</a> "; // Goto last page
?>
