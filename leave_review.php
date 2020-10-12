<?php include "header.php"; ?>
<?php 
    $bookPicture1 = "Images/1.jpg";
    $bookName1 = "Lord of the Rings Fellowship of the Ring";
    $bookAuthor1 = "JRR Tolkien";
    $bookPlot1 = "The story follow Frodo Bagins on a epic adventure as he takes the one ring to rule them all to the cradle
    of its creation Modor.  Along the way he meets a band of unlikely travelers and forms the fellowship to complete the
    monumental task.";

    $bookPicture2 = "2.jpg";
    $bookName2 = "Lord of the Rings The Two Towers";
    $bookAuthor2 = "JRR Tolkien";

    $bookPicture3 = "3.jpg";
    $bookName3 = "Lord of the Rings Return of the King";
    $bookAuthor3 = "JRR Tolkien";

    $bookPicture4 = "4.jpg";
    $bookName4 = "The Hobbit";
    $bookAuthor4 = "JRR Tolkien";

    $bookPicture5 = "5.jpg";
    $bookName5 = "The Holy Bible";
    $bookAuthor5 = "God and people";

    $bookPicture6 = "6.jpg";
    $bookName6 = "Star Wars Episode IV A New Hope";
    $bookAuthor6 = "George Lucas";

    $bookPicture7 = "7.jpg";
    $bookName7 = "Tom Clancey Patriot Games";
    $bookAuthor7 = "Tom Clancey";

    $bookPicture8 = "8.jpg";
    $bookName8 = "Tom Clancey Hunt for the Red October";
    $bookAuthor8 = "Tom Clancey";

    echo "
    <ul id='bookInfo'>
        <li>Author: <strong>$bookAuthor1 </strong></li>
        <li>------------------------------</li>
        <li>Name: <strong>$bookName1</strong></li>
        <li>------------------------------</li>
        <li>Plot: <strong>$bookPlot1</strong></li>
        <li>------------------------------</li>
    </ul>

    <table>
    <tbody>
        <tr><!-- Book Image -->
            <th><img style='width: 200px; height: 300px;' src='$bookPicture1'></th>
        </tr>
    </tbody>

    </table>
    <br /><br /><br />
    <form class='leaveReview' ><!-- later! - action='input.php'-->
        <label for='name'>You name:</label><br>
        <input type='text' id='name' name='name'><br><br>
        <label for='bookName'>Review for:<br> <strong>$bookName1</strong></label><br><br>
        <textarea id='review' name='review' rows='10' cols='50'></textarea><br><br>
        <input type='submit' name='submit' value='Submit Review'/> 
    </form><br><br>";

    //declaring variables
    $word1 = "awful";
    $word2 = "terrible";
    $word3 = "dreadful";
    $word4 = "horrid";
    $wordCap1 = "Awful";
    $wordCap2 = "Terrible";
    $wordCap3 = "Dreadful";
    $wordCap4 = "Horrid";

    if(isset($_GET['review'])) {
        $query = $_GET['review'];
        echo "Review to be posted:<br>";
        if(strpos($query, $word1) !== false){
            $query = str_ireplace($word1, "!not good", $query);
        } 
        if(strpos($query, $word2) !== false){
            $query = str_replace($word2, "!not good", $query);
        }
        if(strpos($query, $word3) !== false){
            $query = str_replace($word3, "!not good", $query);
        }
        if(strpos($query, $word4) !== false){
            $query = str_replace($word4, "!not good", $query);
        }
        if(strpos($query, $wordCap1) !== false){
            $query = str_replace($wordCap1, "!not good", $query);
        }
        if(strpos($query, $wordCap2) !== false){
            $query = str_replace($wordCap2, "!not good", $query);
        }
        if(strpos($query, $wordCap3) !== false){
            $query = str_replace($wordCap3, "!not good", $query);
        }
        if(strpos($query, $wordCap4) !== false){
            $query = str_replace($wordCap4, "!not good", $query);
        }
        else{
            echo "Review is -> ";
            //echo $query;
        }
        echo $query;     
    }
?>
<?php include "footer.php"; ?>