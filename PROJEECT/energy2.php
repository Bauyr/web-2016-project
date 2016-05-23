-<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Parallax Global | Energy</title>

    <!--Link to external CSS stylesheets-->
    <link href="css/style.css" rel="stylesheet">
    <!--Link to Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
	<!--Links to JavaScript Files-->
	<script language="javascript" type="text/javascript" src="scripts/jquery-1.11.1.js"></script>
	<script src="scripts/stickyNavScript.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=geometry"></script>
	<script src="scripts/script.js"></script>
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
                        <a href="energy.php" tabindex="4" title="Logout" target="_self">Logout</a>
                    </li>
                    <li>
                        <a href="index2.php" tabindex="1" title="Home" target="_self">Home</a>
                    </li>
                    <li>
                        <a href="about2.php" tabindex="2" title="About Parallax" target="_self">About</a>
                    </li>
                    <li>
                        <a href="parallax-way2.php" tabindex="3" title="The Parallax Way" target="_self">The Parallax Way</a>
                    </li>
                    <li>
                        <a class="current" href="energy2.php" tabindex="4" title="Energy Holdings" target="_self">Energy Holdings</a>
                    </li>
                </ul>
            </nav>
            <!--End nav-->
        </header>
        <!--End header-->


        <!--Begin featureImage-->
        <img class="featureImage" src="images/featureImage-Energy_v2.jpg" alt="Parallax Global Consulting">
        <img class="featureImageText" src="images/featureImageText-Energy.png">
        <!--End featureImage-->


        <!--Begin main-->
        <main>
            <h1>Mexican Oil Reserves</h1>
            <p>Mexico recently completed a new assessment of its oil reserves and estimated proven and probable oil reserves at approximately 18.7 billion barrels. Mexico’s earlier assessment in 2007 estimated reserves at approximately 12.4 billion barrels in all country resources, but in 2011, the estimate was revised to 15.7 billion barrels to reflect additional exploration findings. Discoveries in the Sigsbee Field increase this figure by an additional 3 billion barrels.</p>

            <h2>Sigsbee Field</h2>
            <p>The Sigsbee Field is one of the largest gas and crude oil fields in the Gulf of Mexico, with new advances in seismic imaging and drilling leading to the discovery of this new field. This offshore oil field is located approximately 150 km southeast from the city of Matamoros on the east coast of Mexico in what is often referred to as the “Grand Canyon under the sea.” Covering an area 30 by 15 square kilometers (12 by 5.8 sq. mi), the Sigsbee discovery is estimated to contain 1.2 trillion cubic meters (42 trillion cubic feet) of gas and up to 3 billion barrels of liquid crude oil. At its largest point, the field contains a gas column that is being drilled in water that is more than 2,000 meters deep. To date, the field has been drilled to a depth of 5,861 meters. Mexico and the United States are involved negotiations to secure access to this source of oil and gas.</p>
			
			<div id="mapCalculator">
        <b>Start:</b>
        <select id="start" onchange="calcRoute()">
            <option value="24.126208, -97.741941">Ojeda Processing Plant</option>
            <option value="25.685376, -94.909758">Arana Spar</option>
            <option value="22.277888, -94.787785">Quiroga Rig</option>
            <option value="23.272791, -92.991155">Orizba Rig</option>
        </select>
        <b>End:</b>
        <select id="end" onchange="calcRoute()">
            <option value="24.126208, -97.741941">Ojeda Processing Plant</option>
            <option value="25.685376, -94.909758">Arana Spar</option>
            <option value="22.277888, -94.787785">Quiroga Rig</option>
            <option value="23.272791, -92.991155">Orizba Rig</option>
        </select>
		<b>Distance:
        <span id="calcDistanceOutput"></span>
    </b>
    </div>
            <div id="map-canvas"></div>

            <h2>Four Integral Components</h2>
            <p>The Sigsbee Field is comprised of the following four integral components: Ojeda, Arana, Quiroga, and Orizba. These components are responsible for the production, processing and transportation of oil and gas from the field.</p>

            <div id="Ojeda" class="infoBox">
                <h3>Ojeda Oil and Gas Processing Plant</h3>
                <img class="floatRightImg" src="images/ojeda.jpg" alt="Ojeda Oil and Gas Processing Plant">
                <div>
                    <p>Ojeda is an oil and gas processing plant located 32km (20 mi) northeast of San Fernando, Mexico. The facility is 19 km (12 mi) wide and 21 km (13 mi) long. Constructed in 1989, Ojeda is one of the largest crude oil and gas processing plant facilities in Mexico. The city of San Fernando is the main transport hub of Ojeda oil from the Gulf of Mexico Sigsbee field to inner-lying cities within the country.</p>
                    <small><a href="#mapCalculator" title="Go Back" target="_self">Go Back</a></small>
                </div>
            </div>

            <div id="Arana" class="infoBox">
                <h3>Arana Spar</h3>
                <img class="floatRightImg" src="images/arana.jpg" alt="Arana Oil Platform">
                <div>
                    <p>Arana spar is located on the maritime border between Mexico and the United States, approximately 120 kilometers (75 mi) west of Matamoros. Arana is the second highest producing in the field, behind Quiroga, and is the primary tie-in point connecting the field to Ojeda processing plant. Arana produced 4.6 tons of crude oil in 2010.</p>
                    <small><a href="#mapCalculator" title="Go Back" target="_self">Go Back</a></small>
                </div>
            </div>

            <div id="Quiroga" class="infoBox">
                <h3>Quiroga Rig</h3>
                <img class="floatRightImg" src="images/quiroga.jpg" alt="Quiroga Oil Platform">
                <div>
                    <p>The Quiroga is the highest producing component of the Sigsbee Field, with more than a third of the discovered natural resources being drilled and produced from four wells. The offshore oil rig – a semi-submersible – is located south of the Arana spar and southwest of the Orizba, tying into the Arana to transport crude oil production back to the Ojeda plant, The Quiroga produced over 5.4 tons of crude oil in 2010, with production continuing to increase at a steady rate as additional wells are added and new techniques such as water injections, are used to stimulate production.</p>
                    <small><a href="#mapCalculator" title="Go Back" target="_self">Go Back</a></small>
                </div>
            </div>

            <div id="Orizba" class="infoBox">
                <h3>Orizba Rig</h3>
                <img class="floatRightImg" src="images/orizba.jpg" alt="Orizba Oil and Gas Platform">
                <div>
                    <p>The Orizba is an ultra deepwater drillship equipped to drill in 3,048 m (10,000 ft) of water, situated directly over the deepest part of the valley along which Sigsbee field is located. At its largest point, the reservoir contains a gas column 1,450 meters (4,760 ft.) deep with a 200 meters (660 ft.) deep oil rim below it. The Orizba is located directly over this gas column. It is estimated the gas column contains approximately 1.2 trillion cubic meters (42 trillion cubic feet) of gas, and the Orizba is set to produce this gas as well as more than 4.2 tons of crude oil per year.</p>
                    <small><a href="#mapCalculator" title="Go Back" target="_self">Go Back</a></small>
                </div>
            </div>
        </main>
        <!--End main-->


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
