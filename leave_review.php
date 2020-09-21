<?php
    include_once 'db_credentials.php';
    $sql = "SELECT * FROM books;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    global $book;
    global $book_id;
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="main">
            <h3>Reviews</h3>
            <h5>Pages</h5><!--TODO: Going to have to redo this for future assignments--> 
            <ul>
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="book_checkout.php">Book Checkout</a></li> -->
            </ul>
            <div class="main right-content">
                
            <form action="leave_review.php" method="get">
                <label for="books">Choose a book:</label>
                    <select name="book_id" id="books">
                        <option value="1"><?php $book_id = 1?>Book 1</option>
                        <option value="2"><?php $book_id = 2?>Book 2</option>
                        <option value="3"><?php $book_id = 3?>Book 3</option>
                        <option value="4"><?php $book_id = 4?>Book 4</option>
                    </select> 
                    <br><br>
                <input type="submit" value="Select Book">
            </form>

            <?php 
                if(isset($_GET['book_id'])){ 
                    $book_id = mysqli_real_escape_string($conn, $_GET['book_id']); 
                        
                    $sql = "SELECT * FROM books WHERE book_id = $book_id";
                    $result = mysqli_query($conn, $sql);
                    $book = mysqli_fetch_assoc($result);
                
                    mysqli_free_result($result);
                    mysqli_close($conn);
                } 
                               
                if($book): 
            ?>
                <h3 style = "color: #01B0F1;">Book  Review</h3>
                <form action="submit_review.php" method="post">
                    <p><b>Name of the Book: </b><?php echo $book['book_name']; ?></p>
                    <label for="fname">Username for review:</label><br>
                        <input type="text" id="fname" name="fname"><br><br>
                    <textarea name="review_text" rows="10" cols="30">Leave review here...</textarea>

                    <br/><br/>
                    <input type="submit" value="Submit">
                    <br/><br/>
                </form>                     
            <?php else: ?>
                <h5>Error - Book not found.</h5>
            <?php endif ?>
        
        </div>
        </section>
    </body>
</html>