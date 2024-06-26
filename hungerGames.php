<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Collins - THE HUNGER GAMES</title>
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
                    THE HUNGER GAMES
                    <span id="icon"><i class='bx bxs-sun' style="color: white;"></i></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-s-11 intro">
                <div class="awards">
                    <img src="images/Hg--jacket.jpg" alt="" class="poster">
                    <img src="images/notable-removebg-preview.png" alt="">
                    <img src="images/The-Hunger-Games-Movie-Tie-In-Edition.jpg" class="poster" alt="">

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
                            <input type="hidden" name="post_name_txt" value="hungerGames">
                            <input type="submit" class="cmntSubmit">
                        </form><br>
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "suzzanecollinsdb");

                            $query = "SELECT * FROM comments WHERE book_id = 10 ORDER BY created_at DESC";
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
                            #1 NEW YORK TIMES BESTSELLER
                        </p><br>
                        <p class="ranks">
                            #1 USA TODAY BESTSELLER
                        </p><br>
                        <p class="ranks">
                            WALL STREET JOURNAL BESTSELLER
                        </p><br>
                        <p class="ranks">
                            PUBLISHERS WEEKLY BESTSELLER
                        </p><br>
                        <p class="ranks">
                            PUBLISHERS WEEKLY'S BEST BOOKS OF 2008:
                            CHILDREN'S FICTION
                        </p><br>
                        <p class="ranks">
                            NEW YORK TIMES NOTABLE CHILDREN'S BOOK OF 2008
                        </p><br>
                        <p class="ranks">
                            AN AMERICAN LIBRARY ASSOCIATION
                            TOP TEN BEST BOOKS FOR YOUNG ADULTS SELECTION
                        </p><br>
                        <p class="ranks">
                            AN ALA NOTABLE CHILDREN'S BOOK
                        </p><br>
                        <p class="ranks">
                            2009 ALA AMELIA BLOOMER PROJECT LIST
                        </p><br>
                        <p class="ranks">
                            #1 ON WINTER '08/'09 CHILDREN'S INDIE NEXT LIST
                        </p><br>
                        <p class="ranks">
                            INDIES CHOICE--BEST INDIE YOUNG ADULT BUZZ BOOK HONOR
                        </p><br>
                        <p class="ranks">
                            2008 CYBIL AWARD--FANTASY & SCIENCE FICTION
                        </p><br>
                        <p class="ranks">
                            2009 CHILDREN'S CHOICE BOOK AWARD
                            TEEN CHOICE BOOK OF THE YEAR FINALIST
                        </p><br>
                        <p class="ranks">
                            YALSA'S TEENS' TOP TEN, 2009
                        </p><br>
                        <p class="ranks">
                            NYPL "STUFF FOR THE TEEN AGE" LIST, 2009
                        </p><br>
                        <p class="ranks">
                            CCBC CHOICES 2009
                        </p><br>
                        <p class="ranks">
                            A NEW YORK TIMES EDITORS' CHOICE
                        </p><br>
                        <p class="ranks">
                            A KIRKUS BEST BOOK OF 2008
                        </p><br>
                        <p class="ranks">
                            A HORN BOOK FANFARE
                        </p><br>
                        <p class="ranks">
                            SCHOOL LIBRARY JOURNAL BEST BOOKS Of 2008
                        </p><br>
                        <p class="ranks">
                            A BOOKLIST EDITORS' CHOICE, 2008
                        </p><br>
                        <p class="ranks">
                            LA TIMES FAVORITE CHILDREN'S BOOKS, 2008
                        </p><br>
                        <p class="ranks">
                            BARNES & NOBLE BEST BOOKS OF 2008
                            FOR TEENS AND KIDS
                        </p><br>
                        <p class="ranks">
                            BORDERS BEST BOOKS OF 2008: TEENS
                        </p><br>
                        <p class="ranks">
                            AMAZON BEST BOOKS OF 2008:
                            TOP 100 EDITORS' PICK
                            TOP 10 BOOKS: TEENS
                        </p><br>

                        <hr width="70%">
                        <p class="review">
                            "What happens if we choose entertainment over humanity? In Collins's world, we'll be obsessed
                            with grooming, we'll talk funny, and all our sentences will end with the same rise as questions.
                            When Katniss is sent to stylists to be made more telegenic before she competes, she stands naked
                            in front of them, strangely unembarrassed. "They're so unlike people that I'm no more
                            self-conscious than if a trio of oddly colored birds were pecking around my feet," she thinks.
                            In order not to hate these creatures who are sending her to her death, she imagines them as
                            pets. It isn't just the contestants who risk the loss of their humanity. It is all who watch."
                            <br><br>
                            <span class="signature">--Publishers Weekly, Megan Whalen Turner, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "...brilliantly plotted and perfectly paced...a futuristic novel every bit as good and as
                            allegorically rich as Scott Westerfeld's 'Uglies' books."
                            <br><br>
                            <span class="signature">--The New York Times, John Green</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "[The Hunger Games] is a violent, jarring, speed-rap of a novel that generates nearly constant
                            suspense...I couldn't stop reading it."
                            <br><br>
                            <span class="signature">--Stephen King, Entertainment Weekly Review</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "...enthralling, imaginative and creepy..."
                            <br><br>
                            <span class="signature">--Los Angeles Times</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Collins's characters are completely realistic and sympathetic as they form alliances and
                            friendships in the face of overwhelming odds; the plot is tense, dramatic, and engrossing. This
                            book will definitely resonate with the generation raised on reality shows like "Survivor" and
                            "American Gladiator."
                            <br><br>
                            <span class="signature">--School Library Journal, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "[A] plot-driven blend of suspense, science fiction, and romance."
                            <br><br>
                            <span class="signature">--USA Today</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "The plot is front and center here—the twists and turns are addictive, particularly when the
                            romantic subplot ups the ante—yet the Capitol's oppression and exploitation of the districts
                            always simmers just below the surface, waiting to be more fully explored in future volumes.
                            Collins has written a compulsively readable blend of science fiction, survival story, unlikely
                            romance, and social commentary."
                            <br><br>
                            <span class="signature">--Horn Book, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Populated by three dimensional characters, this is a superb tale of physical adventure,
                            political suspense, and romance."
                            <br><br>
                            <span class="signature">--Booklist, STARRED REVIEW</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "I was so obsessed with this book that I had to take it with me out to dinner and hide it under
                            the edge of the table so I wouldn't have to stop reading. The story kept me up for several
                            nights in a row, because even after I was finished, I just lay in bed wide awake thinking about
                            it...The Hunger Games is amazing."
                            <br><br>
                            <span class="signature">--Stephenie Meyer</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "[A] stylish postmodern 'Lost' in direct collision with 'Lord of the Flies.'"
                            <br><br>
                            <span class="signature">--The Wall Street Journal, Katie Roiphe</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Themes of government control, "big brother," and personal independence are explored amidst a
                            thrilling adventure that will appeal to science fiction, survival, and adventure readers. The
                            suspense of this powerful novel will keep the reader glued to the page long after bedtime."
                            <br><br>
                            <span class="signature">--VOYA, Deborah L. Dubois</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "The Hunger Games is as close to perfect an adventure novel as I've ever read. I could not put
                            it down. Collins has transformed the ancient Labyrinth myth into a terrifyingly believable tale
                            of future America. Readers will be hungry for more."
                            <br><br>
                            <span class="signature"> --Rick Riordan</span><br>
                        </p>
                        <hr width="70%">
                        <p class="review">
                            "Impressive world-building, breathtaking action and clear philosophical concerns make this
                            volume, the beginning of a planned trilogy, as good as The Giver and more exciting."
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
                <a href="mockingJay.php">MOCKINGJAY</a>
                <p>
                    "...every bit as original and thought provoking, as The Hunger Games. Wow."<br>
                    --Los Angeles Times
                </p><br>
                <a href="catchingFire.php">CATCHING FIRE</a>
                <p>
                    “...doesn’t disappoint when it segues into the pulse-pounding action readers have come to expect.”
                    --Publishers Weekly, STARRED REVIEW
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