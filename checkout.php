<!-- Part of this code was taken from previous class ICS311 and from online
Dani Krossing's youtube channel to display the information 
link: https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37 -->

<style>
    #mainHeader{
        text-align: center; 
        margin-left: auto;
        margin-right: auto;
    }

    #navigation{
        background-color: lightgray;
        width: 100px;
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
            <h3>e-Book Chechout Process</h3>
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
                <li><a href="purchase.php">Buy</a></li>
                <li><a href="rent.php">Rent</a></li>
            </ul>
        </div><!-- End of mainHeader -->

        <!-- This is will be section where it contains the UI for the checkbook -->
        <section class="chechoutProcess" 
            style ="margin-left: auto;
                    margin-right: auto;
                    background-color: lightgray;
                    width: 70%; ">
            <form action="POST">
                <table class="bookList"             
                    style ="margin-left: auto;
                            margin-right: auto; ">
                    </table>
                </form>
        </section>    

    </main>
    </body>
</html>