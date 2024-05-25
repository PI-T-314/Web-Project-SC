<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Collins - CATCHING FIRE</title>
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
                    CATCHING FIRE
                    <span id="icon"><i class='bx bxs-sun' style="color: white;"></i></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-s-11 intro">
                <div class="awards">
                    <img src="images/Catching_fire_c.jpg" class="poster" alt="">
                    <img src="images/CatchingFireMovieTieInCover-197x300.jpg" class="poster" alt="">
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
                            <input type="hidden" name="post_name_txt" value="catchingFire">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 3 ORDER BY created_at DESC";
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
                            #1 USA TODAY BESTSELLER
                        </p><br>
                        <p class="ranks">
                            #1 NEW YORK TIMES BESTSELLER
                        </p><br>
                        <p class="ranks">
                            #1 WALL STREET JOURNAL BESTSELLER
                        </p><br>
                        <p class="ranks">
                            #1 PUBLISHERS WEEKLY BESTSELLER
                        </p><br>
                        <p class="ranks">
                            A NEW YORK TIMES EDITORS' CHOICE
                        </p><br>
                        <p class="ranks">
                            TIME MAGAZINE
                            TOP 10 FICTION BOOKS OF 2009
                        </p><br>
                        <p class="ranks">
                            PUBLISHERS WEEKLY'S BEST BOOKS OF 2009:
                            CHILDREN'S FICTION
                        </p><br>
                        <p class="ranks">
                            A PEOPLE MAGAZINE (TOP 10) BEST BOOK OF 2009
                        </p><br>
                        <p class="ranks">
                            A LOS ANGELES TIMES BEST CHILDREN'S BOOK OF 2009
                        </p><br>
                        <p class="ranks">
                            A BOOKLIST EDITORS' CHOICE, 2009
                        </p><br>
                        <p class="ranks">
                            A KIRKUS BEST BOOK OF 2009
                        </p><br>
                        <p class="ranks">
                            AN AMERICAN LIBRARY ASSOCIATION
                            BEST BOOKS FOR YOUNG ADULTS SELECTION
                        </p><br>
                        <p class="ranks">
                            #1 YALSA'S TEENS' TOP TEN, 2010
                        </p><br>
                        <p class="ranks">
                            NYPL "STUFF FOR THE TEEN AGE" LIST, 2010
                        </p><br>
                        <p class="ranks">
                            2010 CHILDREN'S CHOICE BOOK AWARD
                            TEEN CHOICE BOOK OF THE YEAR WINNER
                            AUTHOR OF THE YEAR NOMINEE
                        </p><br>
                        <p class="ranks">
                            2010 INDIES CHOICE AWARD WINNER--YOUNG ADULT
                        </p><br>
                        <p class="ranks">
                            TOP 10 ON THE FALL 2009 CHILDREN'S INDIE NEXT LIST
                        </p><br>
                        <p class="ranks">
                            BARNES & NOBLE BEST TEEN BOOKS OF 2009
                        </p><br>
                        <p class="ranks">
                            BORDERS BEST BOOKS OF 2009: TEENS
                        </p><br>
                        <p class="ranks">
                            AMAZON BEST BOOKS OF 2009:
                            TOP 100 EDITORS' PICK
                            TOP 10 BOOKS: TEENS
                        </p><br>
                        <hr width="70%">
                        <p class="review">
                            "Collins has done that rare thing. She has written a sequel that improves upon the first book."
                            <br><br>
                            <span class="signature">--The New York Times, Gabrielle Zevin</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Again, Collins' crystalline, unadorned prose provides an open window to perfect pacing and
                            electrifying world-building, but what's even more remarkable is that aside from being
                            tremendously action-packed sf thrillers, these books are also brimming with potent themes of
                            morality, obedience, sacrifice, redemption, love, law, and, above all, survival. Honestly, this
                            book only needs to be good enough to satisfy its legions of fans. Fortunately, it's great. And
                            if you were dying to find out what happens after the last book, get ready for pure torture
                            awaiting the next."
                            <br><br>
                            <span class="signature">--Booklist, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Whereas Katniss kills with finesse, Collins writes with raw power...The Hunger Games and
                            Catching Fire expose children to exactly the kind of violence we usually shield them from. But
                            that just goes to show how much adults forget about what it's like to be a child. Kids are
                            physical creatures, and they're not stupid. They know all about violence and power and raw
                            emotions. What's really scary is when adults pretend that such things don't exist."
                            <br><br>
                            <span class="signature">--Time Magazine</span><br><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Gladiator" meets "Project Runway" in Suzanne Collins's gripping dystopian novel "The Hunger
                            Games" and its new sequel, "Catching Fire." Collins has joined J.K. Rowling and Stephenie Meyer
                            as a writer of children's books that adults are eager to read."
                            <br><br>
                            <span class="signature">--Bloomberg.com</span><br><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "...doesn't disappoint when it segues into the pulse-pounding action readers have come to
                            expect. Characters from the previous volume reappear to good effect: Katniss's stylist, Cinna,
                            proves he's about more than fashion; Haymitch becomes more dimensional. But the star remains
                            Katniss, whose bravery, honesty and wry cynicism carry the narrative...Collins has also created
                            an exquisitely tense romantic triangle for her heroine...by book's end (and it's a cliffhanger),
                            readers will be picking sides—Peeta or Gale?"
                            <br><br>
                            <span class="signature">--Publishers Weekly, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Stellar, imaginative writing."
                            <br><br>
                            <span class="signature">--Los Angeles Times</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Beyond the expert world building, the acute social commentary and the large cast of fully
                            realized characters, there's action, intrigue, romance and some amount of hope in a story
                            readers will find completely engrossing. Collins weaves in enough background for this novel to
                            stand alone, but it will be a far richer experience for those who have read the first
                            installment and come to love Katniss, Peeta, Haymitch and the rest of the desperate residents of
                            this dystopia. A humdinger of a cliffhanger will leave readers clamoring for volume three."
                            <br><br>
                            <span class="signature">--Kirkus Reviews, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "...this sequel has enough action to please Hunger Games fans and leaves enough questions
                            tantalizingly unanswered for readers to be desperate for the next installment."
                            <br><br>
                            <span class="signature">--School Library Journal, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Collins ratchets up the tension in the second book in the Hunger Games trilogy. With a host of
                            well-drawn new secondary characters and more lives on the line, this will keep readers of all
                            ages up long past their bedtimes."
                            <br><br>
                            <span class="signature">--Romantic Times Book Reviews, ****1/2 STARS</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Collins has once again delivered a page-turning blend of plot and character with an inventive
                            setting and provocative themes."
                            <br><br>
                            <span class="signature">--The Horn Book Magazine</span><br>
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
                <a href="gregorBane.php">GREGOR AND THE PROPHECY OF BANE</a>
                <p>
                    “Yessss!”<br>
                    --Kirkus Reviews
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