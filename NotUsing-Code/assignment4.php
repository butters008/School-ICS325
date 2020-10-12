<?php 
    $sql = "SELECT * FROM books ORDER BY books.book_id ASC";
    // $sql = "SELECT books.author, books.name, books.bookPic, books.book_id FROM books ORDER BY books.book_id ASC";
    $result = $db->query($sql);

    echo "before IF";
    if ($result->num_rows > 0) {
        echo "inside if";
        while($row = $result->fetch_assoc()) {
            echo '<tr>  
                    <td><img src = "Images/'.$row["bookPic"].'" width="125px" height="150px "></td>
                    <td><a href="bookInfo.php?bookInfo='.$row['book_id'].'" ?><b>'.$row["name"].'</b></td>
                    <td>'.$row["author"].'</td> 
                </tr>';

         }//end while
    }//end if
    else {
        echo "0 results";
    }//end else

    $result->close();

   
?>

<input  type='submit' value='Submit Review'>
