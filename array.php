<?php 
    include "header.php"; 
    global $db;
?>

<?php 
    echo "This is the array page<br><br>";

    $bookArray = [
        "Tolkien1" => "Lord of the Rings Fellowship of the Ring",
        "Tolkien2" => "Lord of the Rings The Two Towers",
        "Tolkien3" => "Lord of the Rings Return of the King",
        "Tolkien4" => "The Hobbit",
        "God" => "The Holy Bible",
        "Lucas" => "Star Wars Episode IV A New Hope",
        "Clancey1" => "Tom Clancey Patriots Game",        
        "Clancey2" => "Tom Clancey The Hunt for the Red October",
    ];
    
    print_r($bookArray);
    echo "<br><br><br>";
    rsort($bookArray);
    print_r($bookArray);
?>
        
<?php include "footer.php";?>