<!-- Part of this code was taken from previous class ICS311 and from online
Dani Krossing's youtube channel to display the information 
link: https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37 -->
<?php
    //declaring variables
    global $book_id; //dont need global on this one
    global $book_name;
    //$book_name = "Lord of the Rings: Fellowship of the Ring";
    global $book_rent;
    global $book_buy;

    echo $book_id;
    switch($book_id){
        case 1:
            echo "case 1";
            $book_name = "Lord of the Rings: Fellowship of the Ring";
            break;
        default: 
            echo "Error - Book not in list";
    }

?>
<!-- 
    Things I need to do in assignment 3:
        1: I need to add a functionaility to add books to some type of cart, than have it calculate the total for buying the books
            1a: (Inprogress) Adding more books
            1b: (Inprogress) Being able to add books to cart for checkout
            1c: (Inprogress) Adding all of the prices of the selected books
        2: Add discounts depending on the amount of books he is buying
            2a: (Inprogress) If there are between 2 - 4 books, add 10%
            2b: (Inprogress) If there are between 5 - 7 books, add 20% and the previous 10% for books 2-4
            3b: (Inprogress) If there are more than 8 books, add 30%, and add 20% for 5-7 and 10% for 2-4
        3: Complete checkout
            3a: (Inprogress) Adding all the books in cart before discount
            3b: (Inprogress) Showing new price with all discounts
            3c: (Inprogress) Asking for purchaser's name
        4: Output to text file:
            4a: 
 -->

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
                <li><a href="index.php">Home</a></li>
                <li><a href="leave_review.php">Leave a Review</a></li>
            </ul>
            



            <form action="checkout.php" method="get">
                <label for="books">Choose a book:</label>
                    <select name="book_id" id="books">
                        <option value="1"><?php $book_id = 1?>Lord of the Rings: Fellowship Of The Ring</option>
                        <option value="2"><?php $book_id = 2?>Lord of the Rings: The Two Towers</option>
                        <option value="3"><?php $book_id = 3?>Lord of the Rings: Return of the King</option>
                        <option value="4"><?php $book_id = 4?>The Hobbit</option>
                        <option value="5"><?php $book_id = 5?>The Holy Bible</option>
                        <option value="6"><?php $book_id = 6?>Star Wars Episode IV: A New Hope</option>
                        <option value="7"><?php $book_id = 7?>Tom Clancey: Patriot's Game</option>
                        <option value="8"><?php $book_id = 8?>Tom Clancey: The Hunt for the Red October</option>
                    </select> 
                    <br><br>
                <input type="submit" value="Select Book">
            </form>

<?php 
    $animals = array('--Select Animal--', 'Cat', 'Dog', 'Cow');
    $selected_key = $_POST['animal'];
    $selected_val = $animals[$_POST['animal']];
?>



            <div class="main right-content">
                <form action="POST">
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
                                <th><?php echo $book_name;?></th>
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
                </form>
            </div>
        </section>
    </body>
</html>