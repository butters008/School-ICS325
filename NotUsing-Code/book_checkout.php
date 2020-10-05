<?php
    include_once 'db_credentials.php';
    global $book;
    global $book_id;

    if(isset($_GET['book_id'])){ 
        $book_id = mysqli_real_escape_string($conn, $_GET['book_id']); 
        
        $sql = "SELECT * FROM books WHERE book_id = $book_id";
        $result = mysqli_query($conn, $sql);
        $book = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">
            <div>
                <h5>Pages</h5><!--TODO: Going to have to redo this for future assignments--> 
                <ul class="navigation">
                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="leave_review.php">Leave a Review</a></li>
                </ul>
            </div>
        <?php if($book): ?>
            <h3 style = "color: #01B0F1;">Book  Checkout</h3>
            <p><b>Name of the Book: </b><?php echo $book['book_name']; ?></p>
            <p><b>Amount to rent book: </b><?php echo $book['amount_due'] + $book['amount_due']*.08; ?></p>
            
            <!-- Going to have to redo the time for entering time -->
            <p>
                <b>Start of rent time: </b>
                <?php 
                    //echo $book['start_date']; 
                    echo date("m/d/Y");
                ?>
            </p>
            <p>
                <b>End of rent time: </b>
                <?php 
                    //echo $book['end_date'];
                    //This idea came from W3 schools
                    $startdate=strtotime(date("m/d/Y"));
                    $enddate=strtotime("+1 weeks", $startdate);
                    
                    while ($startdate < $enddate) {
                      //echo date("M d", $startdate) . "<br>";
                      $startdate = strtotime("+1 week", $startdate);
                    }
                    echo date("m/d/Y", $startdate)
                ?>
            </p>
            <!-- Submit button does nothing currently -->
            <button>Submit</button>
            <?php else: ?>
                <h5>Error - Book not found.</h5>
            <?php endif ?>
        </div>
    </body>
</html>