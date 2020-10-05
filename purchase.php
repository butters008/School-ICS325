<!-- 
    Things I need to do in assignment 3:
        1: I need to add a functionaility to add books to some type of cart, than have it calculate the total for buying the books
            1a: (Done) Adding more books
            1b: (Done) Being able to add books to cart for checkout
            1c: (Done) Adding all of the prices of the selected books
        2: Add discounts depending on the amount of books he is buying
            2a: (Done) If there are between 2 - 4 books, add 10%
            2b: (Done) If there are between 5 - 7 books, add 20% and the previous 10% for books 2-4
            3b: (Done) If there are more than 8 books, add 30%, and add 20% for 5-7 and 10% for 2-4
        3: Complete checkout
            3a: (Done) Adding all the books in cart before discount
            3b: (Done) Showing new price with all discounts
            3c: (Done) Asking for purchaser's name
        4: Output to text file:
            4a: (Inprogress) Have website create text file called purchases.txt
            4b: (Inprogress) Have the text file include name, books, and total amount
 -->
 <?php
    include "book.php";
 ?>
 <style>
    #mainHeader{
        text-align: center; 
        margin-left: auto;
        margin-right: auto;
    }

    #navigation{
        background-color: lightgray;
        width: 200px;
        height: 175px;
    }

</style>
<html>
    <head>
        <!-- Having to do inline CSS since this is not working for some reason -->
        <!-- TODO: Fix this link to the stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <main class="main">
        <!-- This is where we are going to choose if someone is going to buy or rent a ebook -->
        <div id="mainHeader">
            <!-- The main title in a page -->
            <h3>e-Book Purchase Checkout</h3>
            <div id="navigation" style ="float: left;">
                <!-- We are going to combine the rent and purchases into one page -->
                <h5>Pages</h5> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="leave_review.php">Leave a Review</a></li>
                </ul>
            </div><!-- End of Navigation -->

            <!-- This is where we are choose to either rent or purchase -->
            <ul>
                <li><a href="rent.php">Rent</a></li>
            </ul>
        </div><!-- End of mainHeader -->

        <!-- This is will be section where it contains the UI for the checkbook -->
        <section class="chechoutProcess" 
            style ="margin-left: auto;
                    margin-right: auto;
                    background-color: lightgray;
                    width: 70%; ">
            <form>
                <table class="bookList"             
                    style ="margin-left: auto;
                            margin-right: auto; ">
                        <!-- HEADER -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Book Title</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
<!-- BOOKS -> Hardcoded in per assignment's request -->

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
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name"><br><br>
                        <tfoot>
                            <tr>   
                                <th>Person's Name</th>
                                <th id="showName"></th>
                            </tr>
                            <tr>
                                <th>Total Amount</th>
                                <th>Discount 1</th>
                                <th>Discount 2</th>
                                <th>Discount 3</th>
                                <th>Final Price</th>
                            </tr>
                            <tr>
                                <th id="totalAmt"></th>
                                <th id="dicountAmt1"></th>
                                <th id="dicountAmt2"></th>
                                <th id="dicountAmt3"></th>
                                <th id="newAmt"></th>
                            </tr>
                        </tfoot>
                        
                    </table>
                    <!-- <input type="submit" name="submit" value="Submit"> -->
                    <!-- <p id="showName"></p> -->
                    <p id="totalAmt"></p>
                    <p id="dicountAmt1"></p>
                    <p id="newAmt"></p>
                    <button id="textBtn" >submit order</button>
                </form>
        </section>    

    </main>


<script>
    //console.log(document.getElementById("bookName1").innerHTML); //works
    var bookName1 = document.getElementById("bookName1").innerHTML;
    var bookName2 = document.getElementById("bookName2").innerHTML;
    var bookName3 = document.getElementById("bookName3").innerHTML;
    var bookName4 = document.getElementById("bookName4").innerHTML;
    var bookName5 = document.getElementById("bookName5").innerHTML;
    var bookName6 = document.getElementById("bookName6").innerHTML;
    var bookName7 = document.getElementById("bookName7").innerHTML;
    var bookName8 = document.getElementById("bookName8").innerHTML;
    var bookName9 = document.getElementById("bookName9").innerHTML;
    var bookName10 = document.getElementById("bookName10").innerHTML;

    var userName = document.getElementById("name");
    console.log(userName);

    var price = 7.99;
    var totalPrice = 0;
    var bookNames = [];
    var bookCount = 0;
    var discount1 = 0;
    var discount2 = 0;
    var discount3 = 0;
    var finalPrice = 0;

    document.getElementById("textBtn").onclick = function() {textFile()};

    function textFile(){
        var userName = document.getElementById("name").value;
        console.log(userName);
        
        if (document.getElementById("book1").checked == true){
            totalPrice += price;            
            bookNames.push(bookName1);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book2").checked == true){
            totalPrice += price;            
            bookNames.push(bookName2);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book3").checked == true){
            totalPrice += price;            
            bookNames.push(bookName3);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book4").checked == true){
            totalPrice += price;            
            bookNames.push(bookName4);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book5").checked == true){
            totalPrice += price;            
            bookNames.push(bookName5);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book6").checked == true){
            totalPrice += price;            
            bookNames.push(bookName6);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book7").checked == true){
            totalPrice += price;            
            bookNames.push(bookName7);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book8").checked == true){
            totalPrice += price;            
            bookNames.push(bookName8);
            bookCount++;
            processDeal(bookCount);   
        }
        if (document.getElementById("book9").checked == true){
            totalPrice += price;            
            bookNames.push(bookName9);
            bookCount++;
            processDeal(bookCount);
        }
        if (document.getElementById("book10").checked == true){
            totalPrice += price;            
            bookNames.push(bookName10);
            bookCount++;
            processDeal(bookCount);
        }


        document.body.innerHTML += bookNames.toString();
        console.log(totalPrice);
        console.log(bookCount);
        console.log(userName);
        document.getElementById("totalAmt").innerHTML += totalPrice.toString();
        document.getElementById("showName").innerHTML += userName;
        document.getElementById("dicountAmt1").innerHTML += discount1;
        document.getElementById("dicountAmt2").innerHTML += discount2;
        document.getElementById("dicountAmt3").innerHTML += discount3;

        finalPrice = totalPrice - discount1 - discount2 - discount3;
        document.getElementById("newAmt").innerHTML += finalPrice;

        <?php 
            $myfile = fopen("purchases.txt", "w") or die("Unable to open file!");
            fwrite($myfile, "Keith Butterfield");
            fclose($myfile);
        ?>
    }

    function processDeal(bookCount){
        if (bookCount >= 2 && bookCount <= 4){
            var discount = .1;
            discount1 = totalPrice * discount;
            console.log("Inside process deal " + bookCount);
            
        }
        else if (bookCount >= 5 && bookCount <= 7){
            var discount = .2;
            discount2 = totalPrice * discount;
            console.log("Inside process deal " + bookCount);
            
        }
        else if (bookCount >= 8){
            var discount = .3;
            discount3 = totalPrice * discount;
            console.log("Inside process deal " + bookCount);   
        }       
    }

</script>
    </body>
</html>