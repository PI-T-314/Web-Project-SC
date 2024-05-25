<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Collins - GREGOR AND THE CODE OF CLAW</title>
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
                    GREGOR AND THE CODE OF CLAW
                    <span id="icon"><i class='bx bxs-sun' style="color: white;"></i></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-s-11 intro">
                <div class="awards">
                    <img src="images/Gregor_5_Cover.jpg" class="poster" alt="">
                    <img src="images/notable-removebg-preview.png" alt="">
                    <img src="images/GREGOR_CLAW.jpg" class="poster" alt="">
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
                            <input type="hidden" name="post_name_txt" value="gregorClaw">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 6 ORDER BY created_at DESC";
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
                            USA TODAY BESTSELLER
                        </p><br>
                        <p class="ranks">
                            A BOOK SENSE CHILDREN'S PICK
                        </p><br>
                        <p class="ranks">
                            CCBC CHOICES 2008
                        </p><br>
                        <p class="ranks">
                            2009 ALSC NOTABLE CHILDREN'S RECORDING (audio version)
                            Read by Paul Boehmer
                        </p><br>

                        <hr width="70%">
                        <p class="review">
                            "Perhaps Collins's greatest achievement in these tales is the effortless introduction of weighty
                            geopolitical ethics into rip-roaring adventure. It seems as elusive in the Underland as up
                            above, but Gregor and his companions, including the unforgettable rat Ripred, may yet find a
                            way. The resolution is bittersweet but faintly hopeful—a fitting end for an unflinchingly gutsy
                            series whose deftly drawn characters have always lived dangerously."
                            <br><br>
                            <span class="signature">--Kirkus Reviews</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Collins delivers more of what's made this series so compelling: vivid action scenes, detailed
                            military machinations, and nuanced character development. The plot moves swiftly but with
                            deliberation, reflecting the Regalian leaders' strategic chess-game approach to the conflict. In
                            the end, though the unimaginable doesn't happen, no one is without physical and emotional scars.
                            Readers, too, will be battle-weary but buoyed by Collins's ultimate message of hope. As the
                            Underlanders would say: fly you high, Gregor."
                            <br><br>
                            <span class="signature">--The Horn Book Magazine</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Consistent quality has been a hallmark of this series. Although the story line has gradually
                            become darker, Gregor maintains his endearing qualities as a reluctant hero. His love for his
                            family and his compassion for his friends never flag. The world of Regalia, located below the
                            streets of New York City, presents a magical realm of possibilities for young readers of this
                            excellent acquisition for any library."
                            <br><br>
                            <span class="signature">--VOYA</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "A realistic conclusion, including the loss of old friends and a message about the importance of
                            peace and trust, leaves readers with a sense of optimism about the future of the Underland.
                            Friends and foes from the previous volumes reappear here, and Gregor's self-doubts and changing
                            relationship with Luxa add to his depth as a protagonist. Fans of the series will find much to
                            appreciate, from an enigmatic prophecy to the complex rat Ripred, and they'll be drawn in by
                            Collins's tight pacing and sense of urgency."
                            <br><br>
                            <span class="signature">--School Library Journal</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Another outstanding, riveting Gregor fantasy."
                            <br><br>
                            <span class="signature">--Midwest Book Review</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "The book is fast-paced, easy to read and contains plenty of battle scene and gore for young
                            readers. But it also deals with a boy suddenly forced to make major decisions and face the true
                            and terrible realism of war. The so-called "traitor rat," Ripred reappears and we learn the
                            story behind his decision to join the forces opposed to The Bane. I find Ripred to be one of the
                            most fascinating characters in the book.
                            Armchair Interviews says: Fans of the earlier four books will find plenty of enjoy with this
                            one.."
                            <br><br>
                            <span class="signature">--Armchair Interviews</span><br>
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