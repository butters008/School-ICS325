<?php
    include_once 'db_credentials.php';
    //session_start();
    
    $sql = "SELECT books.book_name, books.amount_due, books.start_date, books.end_date FROM books;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="main">
            <h3>Book</h3>
            <div class="main right-content">
            </div>
        </section>
    </body>
</html>