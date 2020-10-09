<?php 
    echo"<html>
    <head>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
    <section class='main'>
        <div id='mainHeader'>
            <!-- The main title in a page -->
            <div class='title'>
            <img style='height: 200px; width: 100%;'src='Images/books.jpg' alt=''>
            <div id='titleText'>e-Book Home Page</div>

            <br/><br/>
            <div id='navigation'>
                <!-- We are going to combine the rent and purchases into one page -->
                <h5>Pages</h5>
                <ul>
                    <li><a href='index.php' class='active'>Home</a></li>
                    <li><a href='purchase.php'>Purchase a Book</a></li>
                    <li><a href='rent.php'>Rent a Book</a></li>
                    <li><a href='leave_review.php'>Leave a Review</a></li>
                <ul>
                
            </div><!-- End of Navigation -->";
?>