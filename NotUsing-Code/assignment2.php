



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



<?php

        //book 11
        echo "<tr>  
            <th><input type='checkbox' id='book11' name='book1'></th> <th>"; 
            echo "{$book11_name}";
            echo "</th> <th>"; 
            echo "{$book11_price} </th> 
        </tr> ";
        //book 12
        echo "<tr>  
            <th><input type='checkbox' id='book12' name='book1'></th> <th>"; 
            echo "{$book12_name}";
            echo "</th> <th>"; 
            echo "{$book12_price} </th> 
        </tr> ";
        //book 13
        echo "<tr>  
            <th><input type='checkbox' id='book13' name='book1'></th> <th>"; 
            echo "{$book13_name}";
            echo "</th> <th>"; 
            echo "{$book13_price} </th> 
        </tr> ";
        //book 14
        echo "<tr>  
            <th><input type='checkbox' id='book14' name='book1'></th> <th>"; 
            echo "{$book14_name}";
            echo "</th> <th>"; 
            echo "{$book14_price} </th> 
        </tr> ";
        //book 15
        echo "<tr>  
            <th><input type='checkbox' id='book15' name='book1'></th> <th>"; 
            echo "{$book15_name}";
            echo "</th> <th>"; 
            echo "{$book15_price} </th> 
        </tr> ";
        //book 16
        echo "<tr>  
            <th><input type='checkbox' id='book16' name='book1'></th> <th>"; 
            echo "{$book16_name}";
            echo "</th> <th>"; 
            echo "{$book16_price} </th> 
        </tr> ";        
        //book 17
        echo "<tr>  
            <th><input type='checkbox' id='book17' name='book1'></th> <th>"; 
            echo "{$book17_name}";
            echo "</th> <th>"; 
            echo "{$book17_price} </th> 
        </tr> ";  
        //book 18
        echo "<tr>  
            <th><input type='checkbox' id='book18' name='book1'></th> <th id='bookName18>"; 
            echo "{$book18_name}";
            echo "</th> <th>"; 
            echo "{$book18_price} </th> 
        </tr> ";  
        //book 19
        echo "<tr>  
            <th><input type='checkbox' id='book19' name='book1'></th> <th id='bookName19'>"; 
            echo "{$book19_name}";
            echo "</th> <th>"; 
            echo "{$book19_price} </th> 
        </tr> ";  
?>

<?php 

    echo "<tbody>";
        //book 1
        echo "<tr>  
            <th><input type='checkbox' id='book1' name='book1'></th> <th id='bookName1'>"; 
            echo "{$book1_name}";
            echo "</th> <th>"; 
            echo "{$book1_price} </th> 
        </tr> ";
        //book 2
        echo "<tr>  
            <th><input type='checkbox' id='book2' name='book1'></th> <th id='bookName2'>"; 
            echo "{$book2_name}";
            echo "</th> <th>"; 
            echo "{$book2_price} </th> 
        </tr> ";
        //book 3
        echo "<tr>  
            <th><input type='checkbox' id='book3' name='book1'></th> <th id='bookName3'>"; 
            echo "{$book3_name}";
            echo "</th> <th>"; 
            echo "{$book3_price} </th> 
        </tr> ";
        //book 4
        echo "<tr>  
            <th><input type='checkbox' id='book4' name='book1'></th> <th id='bookName4'>"; 
            echo "{$book4_name}";
            echo "</th> <th>"; 
            echo "{$book4_price} </th> 
        </tr> ";
        //book 5
        echo "<tr>  
            <th><input type='checkbox' id='book5' name='book1'></th> <th id='bookName5'>"; 
            echo "{$book5_name}";
            echo "</th> <th>"; 
            echo "{$book5_price} </th> 
        </tr> ";
        //book 6
        echo "<tr>  
            <th><input type='checkbox' id='book6' name='book1'></th> <th id='bookName6'>"; 
            echo "{$book6_name}";
            echo "</th> <th>"; 
            echo "{$book6_price} </th> 
        </tr> ";
        //book 7
        echo "<tr>  
            <th><input type='checkbox' id='book7' name='book1'></th> <th id='bookName7'>"; 
            echo "{$book7_name}";
            echo "</th> <th>"; 
            echo "{$book7_price} </th> 
        </tr> ";
        //book 8
        echo "<tr>  
            <th><input type='checkbox' id='book8' name='book1'></th> <th id='bookName8'>"; 
            echo "{$book8_name}";
            echo "</th> <th>"; 
            echo "{$book8_price} </th> 
        </tr> ";
        //book 9
        echo "<tr>  
            <th><input type='checkbox' id='book9' name='book1'></th> <th id='bookName9'>"; 
            echo "{$book9_name}";
            echo "</th> <th>"; 
            echo "{$book9_price} </th> 
        </tr> ";
        //book 10
        echo "<tr>  
            <th><input type='checkbox' id='book10' name='book1'></th> <th id='bookName10'>"; 
            echo "{$book10_name}";
            echo "</th> <th>"; 
            echo "{$book10_price} </th> 
        </tr> ";
    
    echo "</tbody>";

?>