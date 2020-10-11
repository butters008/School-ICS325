<!-- // Some of this code was taken from my prior class ICS311, but I modified the code to work for this process
The code that I will be changing will be the dynaimic loading of the books from the linux server and have each book load
dynamically with only one php file.  This will help me with my group project since we are making a reciepe book and I will 
be able to store all info where I need it -->
<?php 
    include "header.php"; 
    global $db;
?>


<!-- Take this out for review and for rent and purchase pages -->
<table>
    <!-- HEADER -->
    <thead>
        <tr>
            <th></th><!--This is for the image-->
            <th>Book Title</th>
            <th>Book Author</th>

        </tr>
    </thead>
    <?php echo "testing";?>
    <tbody>
<?php 
    echo "Beginning php - before sql call";
    $sql = "SELECT * FROM books ORDER BY books.book_id ASC";
    echo "after sql call";
    // $sql = "SELECT books.author, books.name, books.bookPic, books.book_id FROM books ORDER BY books.book_id ASC";
    $result = $db->query($sql);

    echo "before IF";
    if ($result->num_rows > 0) {
        echo "inside if";
        while($row = $result->fetch_assoc()) {
            echo "inside while";
            echo '<tr>  
                    <td><img src = "Images/'.$row["books.bookPic"].'" width="200" height="200 "></td>
                    <td><a href="bookInfo.php?bookInfo='.$row['book_id'].'" ?><b>'.$row["books.name"].'</b></td>
                    <td>'.$row["books.author"].'</td> -->
                </tr>';

         }//end while
    }//end if
    else {
        echo "0 results";
    }//end else

    $result->close();
?>
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
        
<?php include "footer.php";?>