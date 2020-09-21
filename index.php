<!-- Part of this code was taken from previous class ICS311 and from online
Dani Krossing's youtube channel to display the information 
link: https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37 -->
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <section class="main">
            <h3>List of Books</h3>
            <h5>Pages</h5><!--TODO: Going to have to redo this for future assignments--> 
            <ul>
                <!-- <li><a href="book_checkout.php">Borrow a Book</a></li> -->
                <li><a href="leave_review.php">Leave a Review</a></li>
            </ul>
            <div class="main right-content">
                <table>
                    <!-- HEADER -->
                    <thead>
                        <tr>
                            <th>Book Title</th>
                            <th>Rent Amount</th>
                            <th>Purchase Amount</th>

                        </tr>
                    </thead>
                    <!-- BOOKS -> Hardcoded in per assignment's request -->
                    <tbody>
                        <tr>  <!-- book_id = 1 -->
                            <th>Lord of the Rings: Fellowship of the Ring</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 2 -->
                            <th>Lord of the Rings: The Two Towers</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 3 -->
                            <th>Lord of the Rings: Return of the King</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 4 -->
                            <th>The Hobbit</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 5 -->
                            <th>The Holy Bible</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 6 -->
                            <th>Star Wars Episode IV: A New Hope</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 7 -->
                            <th>Tom Clancey: Patriot's Game</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                        <tr>  <!-- book_id = 8 -->
                            <th>Tom Clancey: The Hunt for the Red October</th>
                            <th>2.99</th>
                            <th>7.99</th>
                        </tr>
                    </tbody>
                    <!-- FOOTER -->
                    <tfoot>
                        <tr>
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