



<!-- Part of this code was taken from previous class ICS311 and from online
Dani Krossing's youtube channel to display the information 
link: https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37 -->
<?php
    include_once 'db_credentials.php';
    //session_start();
?>
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
                    <thead>
                        <tr>
                            <th>Book ID</th>
                            <th>Book Title</th>
                            <th>Rent Cost</th>
                            <th>Start Rent Date</th>
                            <th>End Rent Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Book ID</th>
                            <th>Book Title</th>
                            <th>Rent Cost</th>
                            <th>Start Rent Date</th>
                            <th>End Rent Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                            
                            $sql = "SELECT * FROM books;";
                            $result = mysqli_query($conn, $sql);
                            $resultsCheck = mysqli_num_rows($result);

                            if($resultsCheck > 0){
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr> 
                                            <td><a href="book_checkout.php?book_id='.$row['book_id'].'" ?><b>'.$row["book_id"].'</b></td>
                                            <td><a href="book_checkout.php?book_id='.$row['book_id'].'" ?><b>'.$row["book_name"].'</b></td>
                                            <td>'.$row["amount_due"].'</td>
                                            <td>'.$row["start_date"].'</td>
                                            <td>'.$row["end_date"].'</td>
                                        </tr>';            
                                }
                            }                
                           $result->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>