<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Collins - GREGOR AND THE PROPHECY OF BANE</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class='bx bx-right-arrow' id="open"></i>
        <i class='bx bx-left-arrow' id="close"></i>
    </label>
    <nav>
        <div class="head">
            Suzanne Collins
        </div>
        <ul>
            <li><a href="index.html"><i class='bx bx-home-alt-2'></i>Home</a></li>
            <li><a href="works.html"><i class='bx bx-book-open'></i>Works</a></li>
            <li><a href="biography.html"><i class='bx bx-face'></i>Biography</a></li>
            <li><a href="interview.html"><i class='bx bx-microphone'></i>Interview</a></li>
            <li><a href="store.html"><i class='bx bx-cart'></i>Store</a></li>
        </ul>
    </nav>
    <div class="content">
        <div class="row">
            <div class="header">
                <h1 class="title">
                    GREGOR AND THE PROPHECY OF BANE
                    <span id="icon"><i class='bx bxs-sun' style="color: white;"></i></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-s-11 intro">
                <div class="awards">
                    <img src="images/Gregor_2_Cover.jpg" class="poster" alt="">
                    <img src="images/The_Underland_Chronciles-Gregor_and_the_Prophecy_of_Bane-_HB.jpg" class="poster" alt="">
                </div>

            </div>
        </div>
        <br><br>
        <div class="row main">
            <div class="col-7 col-s-11 mainInfo">
                <center>
                    <div class="switch">
                        <button type="button" class="switchInfo" onclick="showInfo()">Check Info</button>
                        <button type="button" class="switchCmnt" onclick="showCmnts()">Check Comments</button>
                    </div><br><br>
                    <div class="cmntSection">
                        <form action="postCmnt_action.php" method="post">
                            <input type="text" class="cmntInput" name="cmnt_txt" placeholder="Enter Comnment..." required>
                            <input type="hidden" name="post_name_txt" value="gregorBane">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 5 ORDER BY created_at DESC";
                            $result = mysqli_query($con, $query);

                            while($row = mysqli_fetch_assoc($result)){
                                echo"
                                <hr width='70%'>
                                <p class='review'>
                                    ".$row['comment_text']."<span class='signature'>".$row['created_at']."</span>
                                </p><br><br>
                                ";
                            }
                        ?>
                    </div>
                    <div class="infoSection">
                        <p class="ranks">
                            A NEW YORK TIMES BESTSELLING SERIES
                        </p><br>
                        <p class="ranks">
                            A BOOK SENSE BESTSELLING SERIES
                        </p><br>
                        <p class="ranks">
                            A BOOK SENSE CHILDREN'S PICK
                        </p><br>
                        <p class="ranks">
                            2005 CONNECTICUT BOOK AWARD FINALIST--CHILDREN'S LITERATURE
                        </p><br>

                        <hr width="70%">
                        <p class="review">
                            "Collins crafts another edge-of-the-seat quest... Gregor's resolution of the prophecy will
                            surprise and delight readers--who will be equally delighted to see a new prophecy in Gregor's
                            luggage when he returns home. Yessss!"
                            <br><br>
                            <span class="signature">--Kirkus Reviews</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "...fans will not be disappointed with this exciting, action-packed sequel, whose ending
                            suggests more adventures to come."
                            <br><br>
                            <span class="signature">--Booklist</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "As in the first book, the questers face adventure, danger, death, loss, and change on their
                            journey, and the surprising conclusion leaves room for another sequel. Interpersonal conflict
                            and old enmities among the well-developed characters add depth, and the hazards and beauties of
                            the subterranean Underland are fully realized and clearly presented. An urgent mood and a sense
                            of impending danger are conveyed. This is a strong choice for fantasy fans, including reluctant
                            readers, even if they're not familiar with Gregor's first adventure."
                            <br><br>
                            <span class="signature">--School Library Journal</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Along with many Underlanders [rats notwithstanding], Gregor's fans will cheer the promise of
                            future visits."
                            <br><br>
                            <span class="signature">--The Horn Book Magazine</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Danger abounds, calling for courage and ingenuity. Gregor consistently makes the right choices
                            and triumphs. Fast-paced adventure and endearing characters make this book an excellent
                            selection for younger fantasy readers."
                            <br><br>
                            <span class="signature">--VOYA</span><br>
                        </p>
                        <hr width="70%">
                    </div>
                </center>
            </div>
            <div class="col-3 col-s-11 sideInfo">
                <h1>Selected Works</h1>
                <hr><br>
                <h2>PICTURE BOOK</h2>
                <a href="yotj.php">YEAR OF THE JUNGLE</a>
                <p>"Important and necessary."<br>
                    --Kirkus Reviews, STARRED REVIEW
                </p><br>
                <a href="charlie.php">WHEN CHARLIE MCBBUTTON LOST POWER</a>
                <p>
                    "A clever, humorous story in rhyme"<br>
                    --School Library Journal
                </p><br><br>
                <h2>SCI-FI</h2>
                <a href="mockingJay.php">MOCKINGJAY</a>
                <p>
                    "...every bit as original and thought provoking, as The Hunger Games. Wow."<br>
                    --Los Angeles Times
                </p><br>
                <a href="catchingFire.php">CATCHING FIRE</a>
                <p>
                    “...doesn’t disappoint when it segues into the pulse-pounding action readers have come to expect.”
                    --Publishers Weekly, STARRED REVIEW
                </p><br>
                <a href="hungerGames.php">THE HUNGER GAMES</a>
                <p>“...a superb tale of physical adventure, political suspense, and romance."<br>
                    --Booklist, STARRED REVIEW
                </p><br><br>
                <h2>FANTASY</h2>
                <a href="gregorOverlander.php">GREGOR THE OVERLANDER</a>
                <p>
                    “...readers will likely find [the Underland] to be a fantastically engaging place.”<br>
                    --Publishers Weekly, STARRED REVIEW
                </p><br>
                <a href="gregorCurse.php">GREGOR AND THE CURSE OF THE WARMBLOODS</a>
                <p>
                    “...immensely readable installment..."<br>
                    --The Horn Book Magazine
                </p><br>
                <a href="gregorSecret.php">GREGOR AND THE MARKS OF SECRET</a>
                <p>
                    "...will leave readers gasping..."<br>
                    --Kirkus Reviews, STARRED REVIEW
                </p><br>
                <a href="gregorClaw.php">GREGOR AND THE CODE OF CLAW</a>
                <p>
                    "...excellent acquisition for any library."<br>
                    -VOYA
                </p><br><br>
                <h1>QUICK LINKS</h1>
                <hr><br>
                <a href="https://export.scholastic.com/en" target="new">Scholastic</a><br>
                <a href="https://www.penguin.com/" target="new">Penguin Group</a><br>
                <a href="https://www.npr.org/2005/07/25/4646599/adventures-to-read-all-through-the-summer"
                    target="new">NPR</a><br>
                <a href="https://penguinrandomhouseaudio.com/" target="new">Listening Library</a><br>
                <a href="https://www.indiebound.org/" target="new">Indie Bound</a><br>
                <a href="https://www.barnesandnoble.com/" target="new">Barnes & Noble</a><br>
                <a href="https://www.booksamillion.com/" target="new">Books-A-Million</a><br>
                <a href="https://www.amazon.com/" target="new">Amazon</a><br>
                <a href="https://authorsguild.org/" target="new">Authors Guild</a><br>
            </div>
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>