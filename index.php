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
            <div id="titleText">e-Book Home Page</div>

            <br/><br/>
            <div id="navigation">
                <!-- We are going to combine the rent and purchases into one page -->
                <h5>Pages</h5>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="purchase.php">Purchase a Book</a></li>
                    <li><a href="rent.php">Rent a Book</a></li>
                    <li><a href="leave_review.php">Leave a Review</a></li>
                <ul>
                
            </div><!-- End of Navigation -->

            <!-- Take this out for review and for rent and purchase pages -->
            <table>
                <!-- HEADER -->
                <thead>
                    <tr>
                        <th></th><!--This is for the image-->
                        <th>Book Title</th>
                        <th>Rent Amount</th>
                        <th>Purchase Amount</th>

                    </tr>
                </thead>
                <!-- BOOKS -> Hardcoded in per assignment's request -->
                <tbody>
                    <tr><!-- book_id = 1 -->
                        <th style="height: 175px;"><img class="bookPic" src="Images/fellowship.jpg" alt="Lord of the Rings: Fellowship of the Ring"></th>
                        <th>Lord of the Rings: Fellowship of the Ring</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 2 -->
                        <th><img class="bookPic" src="Images/twotowers.jpg" alt="Lord of the Rings: The Two Towers"></th>
                        <th>Lord of the Rings: The Two Towers</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 3 -->
                        <th><img class="bookPic" src="Images/returnofking.jpg" alt="Lord of the Rings: Return of the King"></th>
                        <th>Lord of the Rings: Return of the King</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 4 -->
                        <th><img class="bookPic" src="Images/hobbit.jpg" alt="The Hobbit"></th>                        
                        <th>The Hobbit</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 5 -->
                        <th><img class="bookPic" src="Images/bible.jpg" alt="The Holy Bible"></th>
                        <th>The Holy Bible</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 6 -->
                        <th><img class="bookPic" src="Images/starwarsnewhope.jpg" alt="Star Wars A New Hope"></th>
                        <th>Star Wars Episode IV: A New Hope</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 7 -->
                        <th><img class="bookPic" src="Images/patriotgame.jpg" alt="Lord of the Rings: Return of the King"></th>
                        <th>Tom Clancey: Patriot's Game</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                    <tr>  <!-- book_id = 8 -->
                        <th><img class="bookPic" src="Images/redoctober.png" alt="Lord of the Rings: Return of the King"></th>
                        <th>Tom Clancey: The Hunt for the Red October</th>
                        <th>2.99</th>
                        <th>7.99</th>
                    </tr>
                </tbody>
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
        </div>
    </section>
    </body>
</html>