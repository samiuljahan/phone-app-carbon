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

        #nextButton, #secondNextButton {
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
        #box3, #box6, #box7, #box8, #box9, #box10 {
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
                    <p>Do not worry, we are not storing any personal data - this just allows us to calculate how much you and your friends can help with climate change.</p>
                </div>
                <div class="info-box" id="box6">
                    <p>Which of these describes you?</p>
                </div>
                <div class="dropdown-container">
                    <select class="dropdown" id="descriptionSelect">
                        <option value="" selected="">Please choose</option>
                        <option value="secondary">Secondary School (11 - 16yrs)</option>
                        <option value="A-level or college">A-level or College (16-18yrs)</option>
                        <option value="university">University Student  (18-22yrs)</option>
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
                    <p>If Every other <span id="user-type">university School</span> Pupil in <span id="area-type">Crawcrook and Greenside</span> is also using their phone for 
                    <span id = "indivdual-hour">8 hours</span> a day, together you 
                    Are causing <span id = "total-hour">3179.00</span> Tonnes.</p>
                </div>
                <div class="info-box" id="box11">
                    <p>Thats the same as <span id="car-num">500</span> average UK cars produced.</p>
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

        document.getElementById('secondNextButton').addEventListener('click', function() {
            var area = document.getElementById('areaSelect').value;
            var city = document.getElementById('citySelect').value;
            var description = document.getElementById('descriptionSelect').value;
            var individualConsumption = durationSelect.value;
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'script.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onload = function() {
                if (this.status >= 200 && this.status < 300) {
                    // Handle success
                    var integerValue = 0;
                    var individualHourConsumptionText = durationSelect.options[durationSelect.selectedIndex].textContent;
                    var descriptionSelectText = descriptionSelect.options[descriptionSelect.selectedIndex].textContent;
                    var areaSelectText = areaSelect.options[areaSelect.selectedIndex].textContent;
                    //var totalConsumption = this.responseText * individualConsumption;
                    var responseData = JSON.parse(xhr.responseText);
                    console.log("resposne data ", responseData);
                    //var matches = responseData.car_comparison.match(/\d+/);
		    var matches = responseData.car_comparison.match(/[\d,]+(?:\.\d+)?/);
		    console.log("matches data ", matches);
                    // Check if an integer was found
                    if (matches) {
                        // Convert the matched string to an integer
			    //integerValue = parseInt(matches[0], 10);
			    integerValue = matches[0];

                        // Log the extracted integer
                        console.log("Extracted integer:", integerValue);
                    } else {
                        console.log("No integer found in the text.");
                    }

                    changeScreen('screen3');
                    document.getElementById("tonn-value").textContent = individualConsumption;
                    document.getElementById("indivdual-hour").textContent = individualHourConsumptionText;
                    document.getElementById("total-hour").textContent = responseData.total_consumption;
                    document.getElementById("user-type").textContent = descriptionSelectText;
                    document.getElementById("area-type").textContent = areaSelectText;
                    if (integerValue !== 0) {
                        document.getElementById("car-num").textContent = integerValue;
                    }
                    //console.log('totalConsumption is ' + totalConsumption);

                } else {
                    // Handle error
                    console.error(this.statusText);
                }
            };
            
            xhr.onerror = function() {
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

    </script>
</body>
</html>
