<?php 
    include 'book.php';
?>
<!-- This is a test -->
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
        <h7>Choose a book to review</h7>
        <?php 
            // Table Header
            echo "<table>
                <thead><tr>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>
                    <form action=''>
                    <input type='text' placeholder='Search..' name='search'>
                    <button type='submit'><i class='fa fa-search'></i></button>
                </form>
                    </th>
                </tr></thead>";
            echo "";
        ?>

                <!-- BOOKS -> Hardcoded in per assignment's request -->
                <!-- FOOTER -->
                <tfoot>
                    <tr>
                        <th></th><!--This is for the image-->
                        <th>Book Title</th>
                        <th>Rent Amount</th>
                        <th>Purchase Amount</th>
                    </tr>
                </tfoot>
            </table>
       
    </section>
    </body>
</html>