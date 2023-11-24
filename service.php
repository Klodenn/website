<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="service.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="find_a_jobs.php">Find a Jobs</a>
        <a href="about.php">About</a>
        <a href="reviews.php">Reviews</a>
        <a href="contact.php">Contact</a>
    </div>

    <h1>SERVICE CREW</h1>
    <div class="tab">
        <button class="tablinks" onmouseover="openCity(event, 'Company')">Company</button>
        <button class="tablinks" onmouseover="openCity(event, 'Location')">Location</button>
        <button class="tablinks" onmouseover="openCity(event, 'Description')">Description</button>
    </div>

    <div id="Company" class="tabcontent">
        <h3>Company</h3>
        <img src="pics/mcdo.png" alt="McDonalds Logo">
        <p>McDonalds</p>
    </div>

    <div id="Location" class="tabcontent">
        <h3>Location</h3>
        <img src="pics/map.png" alt="Map Image">
        <p>R.P. Amurao Ave., Municipal Government Bldg., Brgy. Poblacion 4202 Mabini, Philippines</p>
    </div>

    <div id="Description" class="tabcontent">
        <h3>Description</h3>
        <p>*18y/o and above</p>
        <p>*At least Highschool Graduate (non K-12), SHS Grad </p>
        <p>*With or Without Experience</p>
    </div>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>

</html>