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
                    <img src="images/charlie.jpg" class="poster" alt="">
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
                            <input type="hidden" name="post_name_txt" value="charlie">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 4 ORDER BY created_at DESC";
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
                        <p class="review">
                            "A clever, humorous story in rhyme. Charlie's techno-driven world comes to a crashing halt when
                            a thunderstorm causes a power outage. His mother advises, "You'll have to find something without
                            plugs to play./Read a book!/Clean your room!/Sing a song!/Model clay!" Uninspired, Charlie
                            finally remembers an old handheld video game, but the battery is missing. Desperate, he steals
                            one from his sister's talking doll and ends up in the time-out chair. Feeling remorseful when
                            the little girl starts crying, he seeks her out and the two have a grand time playing games and
                            pretending to be dragons and wizards. When the power returns, Charlie is ready to retreat to his
                            "handsets and bots" but decides that it might be fun to spend some time with his sister as well.
                            The hilarious cartoon illustrations are bold and appealing and depict the siblings' many
                            emotions with exaggerated clarity. While the mother appears only as a hand patting her panicked
                            son's head, the family dog is usually present, patiently enduring a hose-down from little Isabel
                            Jane or angrily reproving Charlie for hurting her feelings. Pair this tale with Glenn McCoy's
                            Penny Lee and Her TV (Hyperion, 2002) for a fun storytime during 'TV Turnoff Week.'"
                            <br><br>
                            <span class="signature">--School Library Journal</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Charlie loves computer games so much, he never plays with anything else - so when the power
                            goes out, he's really in the dark. His desperate search for batteries involves his sister's toys
                            and some nasty behavior before he settles down to realize what's truly important in his life.
                            Deftly written by Suzanne Collins and nicely illustrated by Mike Lester, When Charlie McButton
                            Lost Power is refreshingly original and moving!"
                            <br><br>
                            <span class="signature">--Midwest Book Review</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "A computer-game addict temporarily turns into a raving lunatic when a power failure shuts down
                            his PC, and Lester is well up to the task of portraying his breakdown. He sends red-haired
                            Charlie, pop-eyed features wildly distorted with panic, dashing after an old gameboy, then
                            brutalizing his little sister Isabel Jane's talking doll for a triple-A battery. When this
                            behavior instantly relegates him to the Time-Out Chair, Charlie yells (captured in the art by a
                            gross-looking spray of red and yellow) at Isabel Jane, which sends her away in tears—but then
                            also causes him to reflect remorsefully on how much he actually enjoys her company. Once off the
                            chair, he seeks her out for a game of hide-and-seek. Collins tells the tale in loosely written
                            verse and leaves Charlie, as the house explodes with restored light, thinking that he might go
                            play with his sibling some more before plugging in again. Unlikely to work as behavior
                            modification, but young geeks may take a break from their screens to enjoy the over-the-top
                            art."
                            <br><br>
                            <span class="signature">--Kirkus Reviews</span><br>
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