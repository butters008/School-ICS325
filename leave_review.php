<?php 
    include 'books.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <section class="main">
        <div id="mainHeader">
            <!-- The main title in a page -->
            <div class="title">
            <img style="height: 200px; width: 100%;"src="Images/books.jpg" alt="">
            <div id="titleText">Reviews for e-Books</div>

            <br/><br/>
            <div id="navigation">
                <!-- We are going to combine the rent and purchases into one page -->
                <h5>Pages</h5>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="purchase.php">Purchase a Book</a></li>
                    <li><a href="rent.php">Rent a Book</a></li>
                    <li><a href="leave_review.php" class="active">Leave a Review</a></li>
                <ul>
                
            </div><!-- End of Navigation -->

            <!-- Take this out for review and for rent and purchase pages -->
        </div>
        <?php 
            
        ?>
    </section>
    </body>
</html>