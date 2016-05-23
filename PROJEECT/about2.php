<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Parallax Global | About</title>

    <!--Link to external CSS stylesheet-->
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="lean-slider_v1.0/lean-slider.css">
    <!--Link to Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
     <script src="scripts/jquery-1.11.1.js"></script>
     <script  src="scripts/stickyNavScript.js"></script>
     <script src="lean-slider_v1.0/lean-slider.js"></script>
    
</head>


<body>
    <!--Begin wrapper-->
    <div id="wrapper">

        <!--Begin header-->
        <header>
            <div class="logo"></div>
            <!--Begin nav-->
            <nav>
                <ul>
                    <li>
                        <a href="about.php" tabindex="4" title="Logout" target="_self">Logout</a>
                    </li>
                    <li>
                        <a href="index2.php" tabindex="1" title="Home" target="_self">Home</a>
                    </li>
                    <li>
                        <a class="current2" href="about.php" tabindex="2" title="About Parallax" target="_self">About</a>
                    </li>
                    <li>
                        <a href="parallax-way2.php" tabindex="3" title="The Parallax Way" target="_self">The Parallax Way</a>
                    </li>
                    <li>
                        <a href="energy2.php" tabindex="4" title="Energy Holdings" target="_self">Energy Holdings</a>
                    </li>
                </ul>
            </nav>
            <!--End nav-->
        </header>
        <!--End header-->


        <!--Begin featureImage-->
        <img class="featureImage" src="images/featureImage-About_v2.jpg" alt="Parallax Global Consulting">
        <img class="featureImageText" src="images/featureImageText-About.png">
		
	
        <!--End featureImage-->


        <!--main-->
        <main>
            <p><b>parallax: noun \ˈpa-rə-ˌlaks\: </b>the apparent displacement or the difference in apparent direction of an object as seen from two different points not on a straight line with the object.</p>

            <h1>Our Approach</h1>
            <p>One of the primary things that stand out about Parallax Global is our unique point-of-view and approach to consulting engagements.</p>
            <p>The lens through which we view every consulting engagement is a Parallax View, which of course, as the definition of "parallax" suggests, means that we take two alternate (but not necessarily opposing) views of every problem, and compare and contrast two alternate strategies for approaching the problem. This ensures that individuals, teams and management do not become victims of their own paradigms (read Thomas Kuhn's The Structure of Scientific Revolutions for more on this), that we don't get lazy, and that we can assure our clients of the deepest and most creative approaches to their problems, every time.</p>

            <h2>A Parallax Perspective</h2>
            <p>As we use the term, we mean taking a look at a task, assignment, problem from two different points-of-view. To do this, we assign two different teams to engage with an assignment and develop their own points of view, and then present their views to three referees, who then decide, based on the information that we have, which is the better initial path to pursue. But that is only the beginning of the process.</p>
            <img class="floatRightImg" src="images/perspective.jpg" alt="The Parallax Perspective">
            <p>Throughout the engagement, we continue to use both points of view as a way of illuminating the "space between them," and achieve greater clarity of observation and effectiveness of action.</p>
            <p>In this way, we protect ourselves from falling victim to reinforcing our own paradigms.</p>
            <p>Modeled after the great Greek Philosophy, our Parallax view outlines two opposing approaches to the problems we try to collaborate with our clients and resolve. On one hand we use empiricism, viewing what we know from the physical (senses) perspective. We see, we feel, we acquire through being on the ground, talking to people, observing, touching others creations. On the other hand we use rationalism, thinking, reasoning, hypothesizing and abstracting on the way to determine possible courses of action. We also use ethics, the deep understanding of good and bad, right or wrong, just or not – in short morality.</p>
            <p>Our views, our processes and our protocols have been honed over and over again, with time, maturing and advancing over time, as we have grown as an organization. We share these with our people, we share it with our clients, and we share it with the world in our quest to Parallax things for the greater good.</p>

            <!-- Table -->
            <h3>Parallax Global Oil Resources by Region (billion barrels)</h3>
            <table>
                <tr>
                    <th>Region</th>
                    <th>2000-2005</th>
                    <th>2005-2010</th>
                    <th>2010-2013</th>
                </tr>
                <tr>
                    <td>North America</td>
                    <td>56</td>
                    <td>65</td>
                    <td>73</td>
                </tr>
                <tr class="even">
                    <td>South America</td>
                    <td>32</td>
                    <td>36</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Russia</td>
                    <td>14</td>
                    <td>24</td>
                    <td>21</td>
                </tr>
                <tr class="even">
                    <td>Middle East</td>
                    <td>19</td>
                    <td>12</td>
                    <td>8</td>
                </tr>
            </table>

            <!-- Form -->
            <h3>Join The Parallax Global Consulting Team</h3>

            <form>
                <p>Parallax Global offers their clients experienced and skilled consultants to meet their operational needs. We offer engineering expertise specifically in drilling, completions and fracture stimulation operations. In addition to engineering work, we provide consultants on location for both drilling and completion operations.</p>
                <p>If you are an engineer or a field consultant who is interested in joining Parallax Global, please fill out the contact form below.</p>

                <p>
                    <label for="text_field">First Name:</label>
                    <br>
                    <input type="text" name="first_name">
                    <br>
                    <label for="text_field">Last Name:</label>
                    <br>
                    <input type="text" name="last_name">

                </p>
                <hr>
                <p>
                    <label for="checkbox">Select Areas of Expertise:</label>
                    <br>
                    <input id="drilling" type="checkbox" name="checkboxes" value="Drilling">Drilling
                    <br>
                    <input type="checkbox" name="checkboxes" value="Engineering">Engineering
                    <br>
                    <input type="checkbox" name="checkboxes" value="Field_Consulting">Field Consulting
                </p>
                <hr>
                <p>
                    <label for="file">Upload Resume:</label>
                    <br>
                    <input class="file" type="file" name="file">
                </p>
                <hr>
                <p>
                    <label for="text_area">Additional Comments:</label>
                    <br>
                    <textarea name="text_area"></textarea>
                </p>
                <p>
                    <input class="button" type="reset" value="Clear">
                    <input class="button" type="submit" value="Submit">
                </p>
            </form>
        </main>
        <!--main-->


        <!--Begin footer-->
        <footer>
            <!--Begin blockquote-->
            <blockquote>"We believe that, while we can't create perfection, we can strive for it."</blockquote>
            <!--End blockquotee-->

            <!--Begin addresses-->
            <div class="columnWrapper">
                <div class="column">
                    <h4>London</h4>
                    <div class="address">
                        10221b Orange St., Piccadilly<br>
                        London SW1Y 4UH<br>
                        United Kingdom<br>
                        44 (20) 7939-7140<br>
                        <a href="https://www.google.com/maps/place/51%C2%B030%2736.6%22N+0%C2%B008%2706.6%22W/@51.510165,-0.135173,15z/data=!4m2!3m1!1s0x0:0x0" title="Directions" target="_blank">Directions</a><br>
                        <a href="mailto:london@icarnegie.com?Subject=More%20Info" target="_top">Contact</a>
                    </div>
                </div>
                <div class="column">
                    <h4>New York</h4>
                    <div class="address">
                        Lever House<br>
                        390 Park Avenue<br>
                        New York, NY 10022<br>
                        United States<br>
                        1 (212) 555-7272<br>
                        <a href="https://www.google.com/maps/place/40+E+73rd+St/@40.772068,-73.964603,17z/data=!4m2!3m1!1s0x89c258eb4d838235:0x2220aa41e00eb8ce" title="Directions" target="_blank">Directions</a><br>
                        <a href="mailto:newyork@icarnegie.com?Subject=More%20Info" target="_top">Contact</a>
                    </div>
                </div>
                <div class="column">
                    <h4>Paris</h4>
                    <div class="address">
                        220 Ave des Champs-Elysées<br>
                        75008 Paris<br>
                        France<br>
                        33 (1) 60-14-77-77<br>
                        <a href="https://www.google.com/maps/place/48%C2%B052%2724.0%22N+2%C2%B017%2749.6%22E/@48.873327,2.297117,15z/data=!4m2!3m1!1s0x0:0x0" title="Directions" target="_blank">Directions</a><br>
                        <a href="mailto:paris@icarnegie.com?Subject=More%20Info" target="_top">Contact</a>
                    </div>
                </div>
                <div class="column">
                    <h4>Moscow</h4>
                    <div class="address">
                        61 Tverskaya Blvd<br>
                        125009 Moscow<br>
                        Russia<br>
                        7 (495) 225-5600<br>
                        <a href="https://www.google.com/maps/place/55%C2%B046%2710.1%22N+37%C2%B035%2749.4%22E/@55.769469,37.597066,15z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0" title="Directions" target="_blank">Directions</a><br>
                        <a href="mailto:moscow@icarnegie.com?Subject=More%20Info" target="_top">Contact</a>
                    </div>
                </div>
                <div class="column">
                    <h4>Singapore</h4>
                    <div class="address">
                        5th Floor Hoon-Foi Building<br>
                        101 Queen St<br>
                        Financial District<br>
                        Singapore 19452<br>
                        Singapore<br>
                        65 (6) 335-6700<br>
                        <a href="https://www.google.com/maps/place/1%C2%B018%2704.2%22N+103%C2%B051%2716.3%22E/@1.301155,103.854528,15z/data=!4m2!3m1!1s0x0:0x0" title="Directions" target="_blank">Directions</a><br>
                        <a href="mailto:singapore@icarnegie.com?Subject=More%20Info" target="_top">Contact</a>
                    </div>
                </div>
            </div>
            <!--End addresses-->

            <p class="copyrightText">This website and its content are copyrights of Parallax Global Consulting LLC — © Parallax Global Consulting LLC 2014. All rights reserved.</p>
        </footer>
        <!--End Footer-->
    </div>
    <!--End Wrapper-->
</body>

</html>
