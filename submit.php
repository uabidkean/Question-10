<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    
    // Process the data, like storing it in a database, or send an email, etc.
    // This is where you would put your logic to add the book to the library collection

    // For demonstration, let's just display the data
    echo "Request Received:<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Title: " . htmlspecialchars($title) . "<br>";
    echo "Author: " . htmlspecialchars($author) . "<br>";
    echo "Genre: " . htmlspecialchars($genre) . "<br>";
} else {
    // Not a POST request, navigate back to form or handle accordingly
    header('Location: index.html');
    exit;
}
?> 

