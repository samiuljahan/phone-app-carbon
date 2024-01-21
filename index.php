<?php
// Database connection configuration
include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your SPA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        header {
            margin-top: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
        }

        .video-container {
            width: 100%;
            max-width: 560px;
        }

        .video {
            width: 100%;
        }

        .info-box-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            width: 100%;
            max-width: 560px;
            margin: 10px;
        }

        .info-box {
            background-color: #306e8a;
            width: 100%;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            text-align: center;
        }

        .dropdown-container {
            width: 100%;
            max-width: 560px;
            margin-top: 20px;
        }

        .dropdown {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #306e8a;
            border-radius: 10px;
        }

        #nextButton,
        #secondNextButton {
            background-color: #306e8a;
            color: white;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            width: 100%;
            max-width: 560px;
            margin-top: 20px;
            border-radius: 10px;
            opacity: 0.5;
            pointer-events: none;
        }

        #nextButton.active {
            opacity: 1;
            pointer-events: auto;
        }

        #secondNextButton.active {
            opacity: 1;
            pointer-events: auto;
        }

        #box3,
        #box6,
        #box7,
        #box8,
        #box9,
        #box10 {
            background-color: #F58B28;
        }

        #box11 {
            background-color: #000000;
        }


        footer {
            text-align: center;
            padding: 10px;
            color: white;
            background-color: #F58B28;
            width: 100%;
            /* position: fixed; */
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
    </header>
    <main>
        <div class="screen" id="screen1">
            <!-- Screen 1 content -->
            <div class="video-container">
                <video class="video" width="560" height="315" controls>
                    <source src="sample-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="info-box-container">
                <div class="info-box" id="box1">
                    <p>Do you know smartphones increase climate change?</p>
                </div>
                <div class="info-box" id="box2">
                    <p>Want to know how much yours does - and know you can help?</p>
                </div>
                <div class="info-box" id="box3">
                    <p>How long each day do you use it?</p>
                </div>
            </div>
            <div class="dropdown-container">
                <select class="dropdown" id="durationSelect">
                    <option value="0">Please choose</option>
                    <?php
                    // Fetch data from the 'carbon_footprint' table
                    $sql = "SELECT action, cd_equivalent_tonn FROM carbon_footprint";
                    $result = $conn->query($sql);


                    // Check if there are rows in the result
                    
                    if ($result->num_rows > 0) {
                        // Output the dropdown options
                        while ($row = $result->fetch_assoc()) {
                            $action = $row["action"];
                            $cd_equivalent_tonn = $row["cd_equivalent_tonn"];
                            echo '<option value="' . $cd_equivalent_tonn . '">' . $action . '</option>';
                        }
                    } else {
                        echo "No data available.";
                    }
                    $conn->close();

                    ?>
                </select>
            </div>
            <button id="nextButton" style="width: 50%;" disabled>Next</button>
        </div>
        <div class="screen" id="screen2">
            <div class="video-container">
                <video class="video" width="560" height="315" controls>
                    <source src="sample-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- Screen 2 content -->
            <div class="info-box-container">
                <div class="info-box" id="box4">
                    <p>Now we are going to ask you 3 simple questions.</p>
                </div>
                <div class="info-box" id="box5">
                    <p>Do not worry, we are not storing any personal data - this just allows us to calculate how much
                        you and your friends can help with climate change.</p>
                </div>
                <div class="info-box" id="box6">
                    <p>Which of these describes you?</p>
                </div>
                <div class="dropdown-container">
                    <select class="dropdown" id="descriptionSelect">
                        <option value="" selected="">Please choose</option>
                        <option value="secondary">Secondary School (11 - 16yrs)</option>
                        <option value="A-level or college">A-level or College (16-18yrs)</option>
                        <option value="university">University Student (18-22yrs)</option>
                    </select>
                </div>
                <div class="info-box" id="box7">
                    <p>which is your town/city?</p>
                </div>
                <div class="dropdown-container">
                    <select class="dropdown" id="citySelect">
                        <option value="" selected="">Please choose</option>
                        <option value="Gateshead">Gateshead</option>
                        <option value="Newcastle upon Tyne">Newcastle</option>
                        <option value="North Tyneside">North Tyneside</option>
                        <option value="South Tyneside">South Tyneside</option>
                        <option value="Sunderland">Sunderland</option>
                    </select>
                </div>
                <div class="info-box" id="box8">
                    <p>which is your area?</p>
                </div>
                <div class="dropdown-container">
                    <select class="dropdown" id="areaSelect">
                        <option value="" selected="">Please choose</option>
                    </select>
                </div>
                <button id="secondNextButton" style="width: 50%;" disabled>Next</button>


                <!-- Add more info-boxes as needed -->
            </div>
        </div>
        <div class="screen" id="screen3">
            <!-- Screen 3 content -->
            <div class="info-box-container">
                <div class="info-box" id="box9">
                    <p>Your Phone is causing <span id="tonn-value">11</span> Tonnes of greenhouse gas each year.</p>
                </div>
                <div class="info-box" id="box10">
                    <p>If Every other <span id="user-type">university School</span> Pupil in <span
                            id="area-type">Crawcrook and Greenside</span> is also using their phone for
                        <span id="indivdual-hour">8 hours</span> a day, together you
                        Are causing <span id="total-hour">3179.00</span> Tonnes.
                    </p>
                </div>
                <div class="info-box" id="box11">
                    <p id="emission-info"></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p><a href="about.html" style="color: white; text-decoration: none;">About Blue Sky</a></p>
    </footer>
    <script>
        const durationSelect = document.getElementById('durationSelect');
        const descriptionSelect = document.getElementById('descriptionSelect');
        const citySelect = document.getElementById('citySelect');
        const areaSelect = document.getElementById('areaSelect');
        const nextButton = document.getElementById('nextButton');
        const secondNextButton = document.getElementById('secondNextButton');

        durationSelect.addEventListener('change', () => {
            if (durationSelect.value !== "0") {
                nextButton.classList.add('active');
                nextButton.disabled = false;
            } else {
                nextButton.classList.remove('active');
                nextButton.disabled = true;
            }
        });

        areaSelect.addEventListener('change', () => {
            if (areaSelect.value !== "0" && citySelect.value !== "0" && descriptionSelect.value !== "0") {
                secondNextButton.classList.add('active');
                secondNextButton.disabled = false;
            } else {
                secondNextButton.classList.remove('active');
                secondNextButton.disabled = true;
            }
        });

        document.getElementById('secondNextButton').addEventListener('click', function () {
            var area = document.getElementById('areaSelect').value;
            var city = document.getElementById('citySelect').value;
            var description = document.getElementById('descriptionSelect').value;
            var individualConsumption = durationSelect.value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'script.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (this.status >= 200 && this.status < 300) {
                    // Handle success
                    var integerValue = 0;
                    var text = '';
                    var individualHourConsumptionText = durationSelect.options[durationSelect.selectedIndex].textContent;
                    var descriptionSelectText = descriptionSelect.options[descriptionSelect.selectedIndex].textContent;
                    var areaSelectText = areaSelect.options[areaSelect.selectedIndex].textContent;
                    //var totalConsumption = this.responseText * individualConsumption;
                    var responseData = JSON.parse(xhr.responseText);
                    var numValue = responseData.total_consumption;
                    let resultText = calculateCarImpact(numValue);
                    console.log("resposne data is ", responseData);
                    console.log("text data is ", resultText);
                    //var matches = responseData.car_comparison.match(/\d+/);
                    // var matches = responseData.car_comparison.match(/[\d,]+(?:\.\d+)?/);
                    // console.log("matches data ", matches);
                    // // Check if an integer was found
                    // if (matches) {
                    //     // Convert the matched string to an integer
                    //     //integerValue = parseInt(matches[0], 10);
                    //     integerValue = matches[0];

                    //     // Log the extracted integer
                    //     console.log("Extracted integer:", integerValue);
                    // } else {
                    //     console.log("No integer found in the text.");
                    // }

                    changeScreen('screen3');
                    document.getElementById("tonn-value").textContent = individualConsumption;
                    document.getElementById("indivdual-hour").textContent = individualHourConsumptionText;
                    document.getElementById("total-hour").textContent = responseData.total_consumption;
                    document.getElementById("user-type").textContent = descriptionSelectText;
                    document.getElementById("area-type").textContent = areaSelectText;
                    //if (integerValue !== 0) {
                    document.getElementById("emission-info").textContent = resultText;
                    //}
                    //console.log('totalConsumption is ' + totalConsumption);

                } else {
                    // Handle error
                    console.error(this.statusText);
                }
            };

            xhr.onerror = function () {
                console.error(this.statusText);
            };

            xhr.send('area=' + encodeURIComponent(area) +
                '&city=' + encodeURIComponent(city) +
                '&description=' + encodeURIComponent(description) +
                '&individualConsumption=' + encodeURIComponent(individualConsumption));
        });


        // Add an event listener to citySelect
        citySelect.addEventListener('change', () => {
            const selectedCity = citySelect.value;

            // Send the selectedCity to the PHP backend and retrieve ward_names
            fetch(`backend.php?city=${selectedCity}`)
                .then((response) => response.json())
                .then((data) => {
                    // Clear previous options in areaSelect
                    areaSelect.innerHTML = '';

                    // Populate areaSelect with retrieved ward_names
                    data.forEach((ward) => {
                        const option = document.createElement('option');
                        option.value = ward;
                        option.textContent = ward;
                        areaSelect.appendChild(option);
                    });
                })
                .catch((error) => {
                    console.error('Error is:', error);
                });
        });

        // Function to change screens and handle navigation
        function changeScreen(screenId) {
            const screens = document.querySelectorAll('.screen');
            screens.forEach(screen => {
                screen.style.display = 'none';
            });
            const currentScreen = document.getElementById(screenId);
            currentScreen.style.display = 'block';
            // Push the new state to the browser's history
            window.history.pushState({ screenId }, '', `?screen=${screenId}`);
        }

        // Function to handle back button click
        window.onpopstate = function (event) {
            if (event.state && event.state.screenId) {
                changeScreen(event.state.screenId);
            }
        };

        // Initialize the first screen
        changeScreen('screen1');

        // Add event listener for the "Next" button click
        const nextButton2 = document.getElementById('nextButton');
        nextButton2.addEventListener('click', function () {
            changeScreen('screen2'); // Change to screen 2 on "Next" button click
        });


        function calculateCarImpact(numValue) {
            let text = "";

            switch (true) {
                case numValue >= 0.5 && numValue <= 0.99:
                    text = "That's about the same as taking an average car off the road for 5 weeks"
                    break;
                case numValue >= 1 && numValue <= 1.49:
                    text = "That's about the same as taking an average car off the road for two-and-a-half months";
                    break;
                case numValue >= 1.5 && numValue <= 1.99:
                    text = "That's about the same as taking an average car off the road for about four months";
                    break;
                case numValue >= 2 && numValue <= 2.49:
                    text = "That's about the same as taking an average car off the road for almost six months";
                    break;
                case numValue >= 2.5 && numValue <= 2.99:
                    text = "That's about the same as taking an average car off the road for just over six months";
                    break;
                case numValue >= 3 && numValue <= 3.49:
                    text = "That's about the same as taking an average car off the road for eight months";
                    break;
                case numValue >= 3.5 && numValue <= 3.99:
                    text = "That's about the same as taking an average car off the road for nine months";
                    break;
                case numValue >= 4 && numValue <= 4.49:
                    text = "That's about the same as taking an average car off the road for almost 11 months";
                    break;
                case numValue >= 4.5 && numValue <= 4.99:
                    text = "That's about the same as taking an average car off the road for a whole year";
                    break;
                case numValue >= 5 && numValue <= 5.49:
                    text = "That's about the same as taking an average car off the road for a year and one month";
                    break;
                case numValue >= 5.5 && numValue <= 5.99:
                    text = "That's about the same as taking an average car off the road for almost a year and a quarter";
                    break;
                case numValue >= 6 && numValue <= 6.49:
                    text = "That's about the same as taking an average car off the road for a year and four months";
                    break;
                case numValue >= 6.5 && numValue <= 6.99:
                    text = "That's about the same as taking an average car off the road for a year and five months";
                    break;
                case numValue >= 7 && numValue <= 7.49:
                    text = "That's about the same as taking an average car off the road for a year and a half";
                    break;
                case numValue >= 7.5 && numValue <= 7.99:
                    text = "That's about the same as taking an average car off the road for a year and seven months";
                    break;
                case numValue >= 8 && numValue <= 8.49:
                    text = "That's about the same as taking an average car off the road for almost 22 months";
                    break;
                case numValue >= 8.5 && numValue <= 8.99:
                    text = "That's about the same as taking an average car off the road for about 23 months";
                    break;
                case numValue >= 9 && numValue <= 9.49:
                    text = "That's about the same as taking two average cars off the road for a year";
                    break;
                case numValue >= 9.5 && numValue <= 9.99:
                    text = "That's about the same as taking two average cars off the road for a year and one month";
                    break;
                case numValue >= 10 && numValue <= 10.99:
                    text = "That's about the same as taking two average cars off the road for a year and a month";
                    break;
                case numValue >= 11 && numValue <= 11.99:
                    text = "That's about the same as taking two average cars off the road for over 13 months";
                    break;
                case numValue >= 12 && numValue <= 12.99:
                    text = "That's about the same as taking two average cars off the road for just over a year and four months";
                    break;
                case numValue >= 13 && numValue <= 13.99:
                    text = "That's about the same as taking two average cars off the road for a year and five months";
                    break;
                case numValue >= 14 && numValue <= 14.99:
                    text = "That's about the same as taking two average cars off the road for about 18 months";
                    break;
                case numValue >= 15 && numValue <= 15.99:
                    text = "That's about the same as taking three average cars off the road for a year and a month";
                    break;
                case numValue >= 16 && numValue <= 16.99:
                    text = "That's about the same as taking three average cars off the road for a year and two months";
                    break;
                case numValue >= 17 && numValue <= 17.99:
                    text = "That's about the same as taking three average cars off the road for a year and a quarter";
                    break;
                case numValue >= 18 && numValue <= 18.99:
                    text = "That's about the same as taking four average cars off the road for a year";
                    break;
                case numValue >= 19 && numValue <= 19.99:
                    text = "That's about the same as taking four average cars off the road for just over a year";
                    break;
                case numValue >= 20 && numValue <= 20.99:
                    text = "That's about the same as taking four average cars off the road for a year  and six weeks";
                    break;
                case numValue >= 25 && numValue <= 29.99:
                    text = "That's about the same as taking five average cars off the road for just over 13 months";
                    break;
                case numValue >= 30 && numValue <= 34.99:
                    text = "That's about the same as taking six average cars off the road for 13 months";
                    break;
                case numValue >= 35 && numValue <= 39.99:
                    text = "That's about the same as taking seven average cars off the road for almost a year";
                    break;
                case numValue >= 40 && numValue <= 44.99:
                    text = "That's about the same as taking nine average cars off the road for a year";
                    break;
                case numValue >= 45 && numValue <= 49.99:
                    text = "That's about the same as taking 10 average cars off the road for a year";
                    break;
                case numValue >= 50 && numValue <= 54.99:
                    text = "That's about the same as taking 11 average cars off the road for a year";
                    break;
                case numValue >= 55 && numValue <= 59.99:
                    text = "That's about the same as taking 12 average cars off the road for a year";
                    break;
                case numValue >= 60 && numValue <= 64.99:
                    text = "That's about the same as taking 13 average cars off the road for a year";
                    break;
                case numValue >= 65 && numValue <= 69.99:
                    text = "That's about the same as taking 14 average cars off the road for just over a year";
                    break;
                case numValue >= 70 && numValue <= 74.99:
                    text = "That's about the same as taking 15 average cars off the road for just over a year";
                    break;
                case numValue >= 75 && numValue <= 79.99:
                    text = "That's about the same as taking 17 average cars off the road for a year";
                    break;
                case numValue >= 80 && numValue <= 84.99:
                    text = "That's about the same as taking 18 average cars off the road for a year";
                    break;
                case numValue >= 85 && numValue <= 89.99:
                    text = "That's about the same as taking 19 average cars off the road for a year";
                    break;
                case numValue >= 90 && numValue <= 94.99:
                    text = "That's about the same as taking 20 average cars off the road for a year";
                    break;
                case numValue >= 95 && numValue <= 99.99:
                    text = "That's about the same as taking 21 average cars off the road for a year";
                    break;
                case numValue >= 100 && numValue <= 109.99:
                    text = "That's about the same as taking 22 average cars off the road for a year";
                    break;
                case numValue >= 110 && numValue <= 119.99:
                    text = "That's about the same as taking 24 average cars off the road for a year";
                    break;
                case numValue >= 120 && numValue <= 129.99:
                    text = "That's about the same as taking 26 average cars off the road for a year";
                    break;
                case numValue >= 130 && numValue <= 139.99:
                    text = "That's about the same as taking 29 average cars off the road for a year";
                    break;
                case numValue >= 140 && numValue <= 149.99:
                    text = "That's about the same as taking 31 average cars off the road for a year";
                    break;
                case numValue >= 150 && numValue <= 159.99:
                    text = "That's about the same as taking 33 average cars off the road for a year";
                    break;
                case numValue >= 160 && numValue <= 169.99:
                    text = "That's about the same as taking 35 average cars off the road for just over a year";
                    break;
                case numValue >= 170 && numValue <= 179.99:
                    text = "That's about the same as taking 38 average cars off the road for a year";
                    break;
                case numValue >= 180 && numValue <= 189.99:
                    text = "That's about the same as taking 40 average cars off the road for a year";
                    break;
                case numValue >= 190 && numValue <= 199.99:
                    text = "That's about the same as taking 42 average cars off the road for a year";
                    break;
                case numValue >= 200 && numValue <= 249.99:
                    text = "That's about the same as taking 45 average cars off the road for a year";
                    break;
                case numValue >= 250 && numValue <= 299.99:
                    text = "That's about the same as taking 55 average cars off the road for a year";
                    break;
                case numValue >= 300 && numValue <= 349.99:
                    text = "That's about the same as taking 70 average cars off the road for a year";
                    break;
                case numValue >= 350 && numValue <= 399.99:
                    text = "That's about the same as taking 80 average cars off the road for a year";
                    break;
                case numValue >= 400 && numValue <= 449.99:
                    text = "That's about the same as taking 90 average cars off the road for a year";
                    break;
                case numValue >= 450 && numValue <= 499.99:
                    text = "That's about the same as taking 100 average cars off the road for a year";
                    break;
                case numValue >= 500 && numValue <= 549.99:
                    text = "That's about the same as taking 110 average cars off the road for a year";
                    break;
                case numValue >= 550 && numValue <= 599.99:
                    text = "That's about the same as taking 120 average cars off the road for a year";
                    break;
                case numValue >= 600 && numValue <= 649.99:
                    text = "That's about the same as taking 130 average cars off the road for a year";
                    break;
                case numValue >= 650 && numValue <= 699.99:
                    text = "That's about the same as taking 150 average cars off the road for a year";
                    break;
                case numValue >= 700 && numValue <= 749.99:
                    text = "That's about the same as taking 160 average cars off the road for a year";
                    break;
                case numValue >= 750 && numValue <= 799.99:
                    text = "That's about the same as taking 170 average cars off the road for a year";
                    break;
                case numValue >= 800 && numValue <= 849.99:
                    text = "That's about the same as taking 180 average cars off the road for a year";
                    break;
                case numValue >= 850 && numValue <= 899.99:
                    text = "That's about the same as taking 190 average cars off the road for a year";
                    break;
                case numValue >= 900 && numValue <= 949.99:
                    text = "That's about the same as taking 200 average cars off the road for a year";
                    break;
                case numValue >= 950 && numValue <= 999.99:
                    text = "That's about the same as taking 210 average cars off the road for a year";
                    break;
                case numValue >= 1000 && numValue <= 1999.99:
                    text = "That's about the same as taking 220 average cars off the road for a year";
                    break;
                case numValue >= 2000 && numValue <= 2999.99:
                    text = "That's about the same as taking 450 average cars off the road for a year";
                    break;
                case numValue >= 3000 && numValue <= 3999.99:
                    text = "That's about the same as taking 670 average cars off the road for a year";
                    break;
                case numValue >= 4000 && numValue <= 4999.99:
                    text = "That's about the same as taking 890 average cars off the road for a year";
                    break;
                case numValue >= 5000 && numValue <= 5999.99:
                    text = "That's about the same as taking 1,100 average cars off the road for a year";
                    break;
                case numValue >= 6000 && numValue <= 6999.99:
                    text = "That's about the same as taking 1,300 average cars off the road for a year";
                    break;
                case numValue >= 7000 && numValue <= 7999.99:
                    text = "That's about the same as taking 1,600 average cars off the road for a year";
                    break;
                case numValue >= 8000 && numValue <= 8999.99:
                    text = "That's about the same as taking 1,800 average cars off the road for a year";
                    break;
                case numValue >= 9000 && numValue <= 9999.99:
                    text = "That's about the same as taking 2,000 average cars off the road for a year";
                    break;
                case numValue >= 10000 && numValue <= 14999.99:
                    text = "That's about the same as taking 2,200 average cars off the road for a year";
                    break;
                case numValue >= 15000 && numValue <= 19999.99:
                    text = "That's about the same as taking 3,300 average cars off the road for a year";
                    break;
                case numValue >= 20000 && numValue <= 24999.99:
                    text = "That's about the same as taking 4,500 average cars off the road for a year";
                    break;
                case numValue >= 25000 && numValue <= 29999.99:
                    text = "That's about the same as taking 5,500 average cars off the road for a year";
                    break;
                case numValue >= 30000 && numValue <= 34999.99:
                    text = "That's about the same as taking 6,700 average cars off the road for a year";
                    break;
                case numValue >= 35000 && numValue <= 39999.99:
                    text = "That's about the same as taking 7,800 average cars off the road for a year";
                    break;
                case numValue >= 40000 && numValue <= 44999.99:
                    text = "That's about the same as taking 8,900 average cars off the road for a year";
                    break;
                case numValue >= 45000 && numValue <= 49999.99:
                    text = "That's about the same as taking 10,000 average cars off the road for a year";
                    break;
                case numValue >= 50000 && numValue <= 54999.99:
                    text = "That's about the same as taking 11,000 average cars off the road for a year";
                    break;
                case numValue >= 55000 && numValue <= 59999.99:
                    text = "That's about the same as taking 12,000 average cars off the road for a year";
                    break;
                case numValue >= 60000 && numValue <= 64999.99:
                    text = "That's about the same as taking 13,300 average cars off the road for a year";
                    break;
                case numValue >= 65000 && numValue <= 69999.99:
                    text = "That's about the same as taking 14,500 average cars off the road for a year";
                    break;
                case numValue >= 70000 && numValue <= 74999.99:
                    text = "That's about the same as taking 15,600 average cars off the road for a year";
                    break;
                case numValue >= 75000 && numValue <= 79999.99:
                    text = "That's about the same as taking 16,700 average cars off the road for a year";
                    break;
                case numValue >= 80000 && numValue <= 84999.99:
                    text = "That's about the same as taking 17,800 average cars off the road for a year";
                    break;
                case numValue >= 85000 && numValue <= 89999.99:
                    text = "That's about the same as taking 18,900 average cars off the road for a year";
                    break;
                case numValue >= 90000 && numValue <= 94999.99:
                    text = "That's about the same as taking 20,000 average cars off the road for a year";
                    break;
                case numValue >= 95000 && numValue <= 99999.99:
                    text = "That's about the same as taking 21,000 average cars off the road for a year";
                    break;
                case numValue >= 100000 && numValue <= 149999.99:
                    text = "That's about the same as taking 22,000 average cars off the road for a year";
                    break;
                case numValue >= 150000 && numValue <= 199999.99:
                    text = "That's about the same as taking 33,000 average cars off the road for a year";
                    break;
                case numValue >= 200000 && numValue <= 249999.99:
                    text = "That's about the same as taking 44,000 average cars off the road for a year";
                    break;
                case numValue >= 250000 && numValue <= 299999.99:
                    text = "That's about the same as taking 55,000 average cars off the road for a year";
                    break;
                case numValue >= 300000 && numValue <= 349999.99:
                    text = "That's about the same as taking 66,000 average cars off the road for a year";
                    break;
                case numValue >= 350000 && numValue <= 399999.99:
                    text = "That's about the same as taking 78,000 average cars off the road for a year";
                    break;
                case numValue >= 400000 && numValue <= 449999.99:
                    text = "That's about the same as taking 89,000 average cars off the road for a year";
                    break;
                case numValue >= 450000 && numValue <= 499999.99:
                    text = "That's about the same as taking 100,000 average cars off the road for a year";
                    break;
                case numValue >= 500000 && numValue <= 549999.99:
                    text = "That's about the same as taking 111,000 average cars off the road for a year";
                    break;
                case numValue >= 550000 && numValue <= 599999.99:
                    text = "That's about the same as taking 122,000 average cars off the road for a year";
                    break;
                case numValue >= 600000 && numValue <= 649999.99:
                    text = "That's about the same as taking 133,000 average cars off the road for a year";
                    break;
                case numValue >= 650000 && numValue <= 699999.99:
                    text = "That's about the same as taking 145,000 average cars off the road for a year";
                    break;
                case numValue >= 700000 && numValue <= 749999.99:
                    text = "That's about the same as taking 155,000 average cars off the road for a year";
                    break;
                case numValue >= 750000 && numValue <= 799999.99:
                    text = "That's about the same as taking 167,000 average cars off the road for a year";
                    break;
                case numValue >= 800000 && numValue <= 849999.99:
                    text = "That's about the same as taking 178,000 average cars off the road for a year";
                    break;
                case numValue >= 850000 && numValue <= 899999.99:
                    text = "That's about the same as taking 189,000 average cars off the road for a year";
                    break;
                case numValue >= 900000 && numValue <= 949999.99:
                    text = "That's about the same as taking 200,000 average cars off the road for a year";
                    break;
                case numValue >= 950000 && numValue <= 999999.99:
                    text = "That's about the same as taking 211,000 average cars off the road for a year";
                    break;
                case numValue >= 1000000 && numValue <= 1000000.01:
                    text = "That's about the same as taking 222,000 average cars off the road for a year";
                    break;
                default:
                    break;
            }

            return text;
        }

    </script>
</body>

</html>