<?php
    
    $cmnt = $_POST['cmnt_txt'];
    $book = $_POST['post_name_txt'];

    $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

    $bookIdQuery = "SELECT id from books where book_name = '$book'";
    $result = mysqli_query($con, $bookIdQuery);
    $row = mysqli_fetch_assoc($result);
    $bookId = $row['id'];

    $query = "INSERT INTO comments(comment_text, book_id) VALUES ('$cmnt', '$bookId')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    header("location:".$book.".php?show_comments=true");
?>