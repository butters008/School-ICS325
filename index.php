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

    <tbody>
        <tr><!-- book_id = 1 -->
            <th style="height: 175px;"><img style="width: 125px; height: 150px;" class="bookPic" src="Images/1.jpg" alt="Lord of the Rings: Fellowship of the Ring"></th>
            <th>Lord of the Rings: Fellowship of the Ring</th>
            <th>JRR Tolkien</th>
        </tr>
        <tr>  <!-- book_id = 2 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/2.jpg" alt="Lord of the Rings: The Two Towers"></th>
            <th>Lord of the Rings: The Two Towers</th>
            <th>JRR Tolkien</th>
        </tr>
        <tr>  <!-- book_id = 3 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/3.jpg" alt="Lord of the Rings: Return of the King"></th>
            <th>Lord of the Rings: Return of the King</th>
            <th>JRR Tolkien</th>
        </tr>
        <tr>  <!-- book_id = 4 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/4.jpg" alt="The Hobbit"></th>                        
            <th>The Hobbit</th>
            <th>JRR Tolkien</th>
        </tr>
        <tr>  <!-- book_id = 5 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/5.jpg" alt="The Holy Bible"></th>
            <th>The Holy Bible</th>
            <th>God and People</th>
        </tr>
        <tr>  <!-- book_id = 6 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/6.jpg" alt="Star Wars A New Hope"></th>
            <th>Star Wars Episode IV: A New Hope</th>
            <th>George Lucas</th>
        </tr>
        <tr>  <!-- book_id = 7 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/7.jpg" alt="Tom Clancey: Patriot's Game"></th>
            <th>Tom Clancey: Patriot's Game</th>
            <th>Tom Clancey</th>
        </tr>
        <tr>  <!-- book_id = 8 -->
            <th><img style="width: 125px; height: 150px;" class="bookPic" src="Images/8.png" alt="Tom Clancey: The Hunt for the Red October"></th>
            <th>Tom Clancey: The Hunt for the Red October</th>
            <th>Tom Clancey</th>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th></th><!--This is for the image-->
            <th>Book Title</th>
            <th>Book Author</th>
        </tr>
    </tfoot>
</table>
        
<?php include "footer.php";?>