<?php
// Announcement details
$announcement = array(
    'message' => 'This is an important announcement for all users.',
    'startDate' => '2023-05-01',
    'endDate' => '2023-06-30'
);

// Check if the announcement should be displayed
$currentDate = date('Y-m-d');
if ($currentDate >= $announcement['startDate'] && $currentDate <= $announcement['endDate']) {
    // Generate the HTML for the announcement banner
    $announcementHtml = '<div class="announcement-banner">';
    $announcementHtml .= '  <div class="announcement-content">';
    $announcementHtml .= '    <p>' . $announcement['message'] . '</p>';
    $announcementHtml .= '    <button class="close-button">Close</button>';
    $announcementHtml .= '  </div>';
    $announcementHtml .= '</div>';
} else {
    $announcementHtml = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Noobs Unblocked Games</title>
    <link rel='icon' href="images/favicon/favicon.ico" />
</head>
<body>
    <?php echo $announcementHtml; ?>

    <div class='box'>
        <h1 class='title'>Noobs Unblocked Games</h1>
    </div>
    <div class="nav-container">
        <nav>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/'><button id="navBar">Home</button></a>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/games'><button id="navBar">Games</button></a>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/proxies'><button id="navBar">Proxies</button></a>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/hacks'><button id="navBar">Hacks</button></a>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/credits'><button id="navBar">Credits</button></a>
        <a href='https://bcrhbrhcdb.github.io/Noobs-Unblocked-Games/update-log'><button id="navBar">Updates</button></a>
    </nav>
    </div>
    <div class='box'>
        <p>Welcome to Noobs Unblocked Games! We have many games! <hr>There will be a lot of idle games! <hr>I will also have a lot of proxies, all of them being great!</p>
    </div>
<script src='script.js'></script>
</body>
</html>