<?php
include 'conn.php';

$query = "SELECT name, tags, status, type, imgPath FROM projects";
$statement = $conn->prepare($query);
$statement->execute();
$projects = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($projects as &$project) {
    if (isset($project['tags'])) {
        $project['tags'] = array_map('trim', explode(',', $project['tags']));
    } else {
        $project['tags'] = [];
    }
    $project['tags'][] = $project['status'];
    $project['tags'][] = $project['type'];
}
?>
