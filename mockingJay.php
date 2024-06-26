<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Collins - MOCKINGJAY</title>
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
                    MOCKINGJAY
                    <span id="icon"><i class='bx bxs-sun' style="color: white;"></i></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-s-11 intro">
                <div class="awards">
                    <img src="images/Mockingjaycover.jpg" class="poster" alt="">
                    <img src="images/Mockingjay-Movie-Tie-In.jpg" class="poster" alt="">
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
                            <input type="hidden" name="post_name_txt" value="mockingJay">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 2 ORDER BY created_at DESC";
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
                            NEW YORK TIMES NOTABLE CHILDREN'S BOOK OF 2010
                        </p><br>
                        <p class="ranks">
                            PUBLISHERS WEEKLY'S BEST BOOKS OF 2010:
                            CHILDREN'S FICTION
                        </p><br>
                        <p class="ranks">
                            A BOOKLIST EDITORS' CHOICE, 2010
                        </p><br>
                        <p class="ranks">
                            A KIRKUS BEST BOOK OF 2010
                        </p><br>
                        <p class="ranks">
                            NPR BEST BOOKS OF 2010
                        </p><br>
                        <p class="ranks">
                            A NEW YORK TIMES EDITORS' CHOICE
                        </p><br>
                        <p class="ranks">
                            A CHRISTIAN SCIENCE MONITOR'S BEST CHILDREN'S BOOKS OF 2010
                        </p><br>
                        <p class="ranks">
                            AN IRA YOUNG ADULTS' CHOICES BOOK FOR 2011
                        </p><br>
                        <p class="ranks">
                            YALSA'S TEENS' TOP TEN, 2011
                        </p><br>
                        <p class="ranks">
                            2011 CHILDREN'S CHOICE BOOK AWARD
                            TEEN CHOICE BOOK OF THE YEAR NOMINEE
                            AUTHOR OF THE YEAR NOMINEE
                        </p><br>
                        <p class="ranks">
                            CCBC CHOICES 2011
                        </p><br>
                        <p class="ranks">
                            2011 LOCUS AWARD FINALIST
                        </p><br>
                        <p class="ranks">
                            2010 NEBULA AWARD
                            ANDRE NORTON AWARD FOR YA SCIENCE FICTION AND FANTASY NOMINEE
                        </p><br>
                        <p class="ranks">
                            BARNES & NOBLE BEST TEEN BOOKS OF 2010
                        </p><br>
                        <p class="ranks">
                            AMAZON BEST BOOKS OF 2010:
                            #3 ON CUSTOMER FAVORITES LIST
                        </p><br>
                        <hr width="70%">
                        <p class="review">
                            "At its best the trilogy channels the political passion of "1984," the memorable violence of "A
                            Clockwork Orange," the imaginative ambience of "The Chronicles of Narnia" and the detailed
                            inventiveness of "Harry Potter." The specifics of the dystopian universe, and the fabulous
                            pacing of the complicated plot, give the books their strange, dark charisma."
                            <br><br>
                            <span class="signature">--The New York Times, Katie Roiphe</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Collins does several things brilliantly, not the least of which is to provide heart-stopping
                            chapter endings that turn events on their heads and then twist them once more. But more
                            ambitious is the way she brings readers to questions and conclusions about war throughout the
                            story. There's nothing didactic here, and sometimes the rush of events even obscures what
                            message there is. Yet readers will instinctively understand what Katniss knows in her soul, that
                            war mixes all the slogans and justifications, the deceptions and plans, the causes and ideals
                            into an unsavory stew whose taste brings madness. That there is still a human spirit that yearns
                            for good is the book's primrose of hope."
                            <br><br>
                            <span class="signature">--Booklist, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "This dystopic-fantasy series, which began in 2008, has had such tremendous crossover appeal
                            that teens and parents may discover themselves vying for -- and talking about -- the family copy
                            of "Mockingjay." And there's much to talk about because this powerful novel pierces cheery
                            complacency like a Katniss-launched arrow. Look skeptically at computer and television images,
                            it suggests, be aware of spin, gaze upon the young faces of the world's soldiers. Children
                            forced to kill children? It's not just in the pages of a novel."
                            <br><br>
                            <span class="signature">--The Washington Post</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "The indelible conclusion to Suzanne Collins' Hunger Games trilogy proves once more that the
                            greatest fantasy novels hold an incandescent mirror up to reality."
                            <br><br>
                            <span class="signature">--Parade, Parade Picks</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "But being the Mockingjay comes with a price as Katniss must come to terms with how much of her
                            own humanity and sanity she can willingly sacrifice for the cause, her friends, and her family.
                            Collins is absolutely ruthless in her depictions of war in all its cruelty, violence, and loss,
                            leaving readers, in turn, repulsed, shocked, grieving and, finally, hopeful for the characters
                            they've grown to empathize with and love. Mockingjay is a fitting end to the series that began
                            with The Hunger Games (2008) and Catching Fire (2009) and will have the same lasting resonance
                            as William Golding's Lord of the Flies and Stephen King's The Stand."
                            <br><br>
                            <span class="signature">--School Library Journal</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "The final installment, the grimmest yet, is a riveting meditation on the costs of war...Clear
                            your schedule before you start: This is a powerful, emotionally exhausting final volume."
                            <br><br>
                            <span class="signature">--People Magazine,4 OUT OF 4 STARS</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "This concluding volume in Collins's Hunger Games trilogy accomplishes a rare feat, the last
                            installment being the best yet, a beautifully orchestrated and intelligent novel that succeeds
                            on every level... In short, there's something here for nearly every reader, all of it completely
                            engrossing."
                            <br><br>
                            <span class="signature">--Publishers Weekly, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Fans will be happy to hear that Mockingjay is every bit as complex and imaginative as Hunger
                            Games and Catching Fire. Collins has kicked the brutal violence up a notch in an
                            edge-of-your-seat plot that follows Katniss as she tries to fulfill her role, protect her mother
                            and sister and, in the end, finally choose between her two greatest loves. B+."
                            <br><br>
                            <span class="signature">--Entertainment Weekly</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Mockingjay" is without question the most brutal of the trilogy. Nobody emerges unscathed – very
                            bad things happen to everyone from fan favorites down to characters so minor a reader has to
                            pause and think, "Now, who was that again?" before recoiling in horror at their fate. Collins
                            doesn't take war lightly – her characters debate the morality involved in tactics used to try to
                            overthrow the rotting, immoral government, and they pay a high cost for those tactics. It is
                            also an entirely gripping read. In Katniss, Collins has crafted a heroine so fierce and
                            tenacious that this reader will follow her anywhere."
                            <br><br>
                            <span class="signature">--Christian Science Monitor</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Much of the action takes place on a battlefield akin to Iraq — where innocent civilians are
                            murdered to further a cause and each side resorts to unsavory tactics that could lead to a
                            terrorist label. More maudlin than the first two books in the series, "Mockingjay" is also the
                            most violent and bloody and, based on the actions and statements of its characters, its most
                            overtly antiwar — though not so much that it distracts from a series conclusion that is nearly
                            as shocking, and certainly every bit as original and thought provoking, as "The Hunger Games."
                            Wow."
                            <br><br>
                            <span class="signature">--Los Angeles Times</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Suspenseful... Collins' fans, grown-ups included, will race to the end."
                            <br><br>
                            <span class="signature">--USA Today</span><br><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Throughout the trilogy, Collins has asked readers to consider heavy questions. What level of
                            violence is justified to achieve needed change? How much integrity can one compromise for a just
                            end? To what extent does responsibility to others demand sacrifice of self? How much control
                            does anyone have over the construction of self? Katniss is the ideal vehicle for this dialogue,
                            her present-tense narration constantly putting her own motivations and even identity under
                            scrutiny.It's not giving away anything to reveal that Katniss will be tested sorely, that
                            allegiances will shift, that heart-thumping scenes of combat will yield to anguished reflection,
                            that she and readers will find themselves always wondering just whom to trust, that she and
                            readers will lose friends they love. In the final analysis, this is exactly the book its fans
                            have been hoping for. It will grab them and not let go, and if it leaves them with questions,
                            well, then, it's probably exactly the book Collins was hoping for, too."
                            <br><br>
                            <span class="signature">--Kirkus, STARRED REVIEW</span><br>
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