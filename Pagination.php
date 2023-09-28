<?php

$data = range(1, 200);

$itemsPerPage = 10;

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

$totalPages = ceil(count($data) / $itemsPerPage);

$startIndex = ($current_page - 1) * $itemsPerPage;
$endIndex = $startIndex + $itemsPerPage - 1;

echo "Current_Page>>>>>".$current_page;
echo "<br/><br/>";
echo 'Count(data)>>>>>'.count($data);
echo "<br/><br/>";
echo "Current_Page - 1>>>>>".$current_page - 1;
echo "<br/><br/>";
echo "Current_Page - 1 * ItemsPerPage>>>>>".($current_page - 1) * $itemsPerPage;
echo "<br/><br/>";
echo "StartIndex + ItemPerpage - 1>>>>>>>".$startIndex + $itemsPerPage - 1;
echo "<br/><br/>";


echo "<h1>Pagination Example</h1>";
echo "<ul>";
for ($i = $startIndex; $i <= $endIndex && $i < count($data); $i++) {
    echo "<li>{$data[$i]}</li>";
}
echo "</ul>";

echo "<div class='pagination'>";
for ($page = 1; $page <= $totalPages; $page++) {
    if ($page == $current_page) {
        echo "<span class='current'>$page</span>";
    } else {
        echo "<a href='?page=$page'>$page</a>";
    }
}
echo "</div>";
?>