<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    </head>
    <body>
        <h1>SAHEED SOLUTION</h1><br>

        <h2>WELCOME TO SAHEED SOLUTION</h2>
        <!-- create a solution that contains the followim form fields -->
<!--        IndexNumber (string)-->
<!--        FullNames (string)-->
<!--        Email (string)-->
<!--        CurrentLocation (string)-->
<!--        HighestLevelOfEducation (dropdown)-->
<!--        DutyStation (dropdown)-->
<!--        AvailabilityForRemoteWork (bool)-->
<!--        Software Expertise (dropdown)-->
<!--        Software Expertise Level (dropdown)-->
<!--        Language (dropdown)-->
<!--        Level of Responsibility (dropdown)-->
<!--        Years of Experience (dropdown)-->
        -->
    <form>
        <label for="IndexNumber">Index Number</label><br>
        <input type="text" id="IndexNumber" name="IndexNumber"><br>
        <label for="FullNames">Full Names</label><br>
        <input type="text" id="FullNames" name="FullNames"><br>
        <label for="Email">Email</label><br>
        <input type="text" id="Email" name="Email"><br>
        <label for="CurrentLocation">Current Location</label><br>
        <input type="text" id="CurrentLocation" name="CurrentLocation"><br>
        <label for="HighestLevelOfEducation">Highest Level Of Education</label><br>
        <select id="HighestLevelOfEducation" name="HighestLevelOfEducation">
            <option value="High School">High School</option>
            <option value="Diploma">Diploma</option>
            <option value="Degree">Degree</option>
            <option value="Masters">Masters</option>
            <option value="PhD">PhD</option>
        </select><br>
        <label for="DutyStation">Duty Station</label><br>
        <select id="DutyStation" name="DutyStation">
            <option value="Accra">Accra</option>
            <option value="Kumasi">Kumasi</option>
            <option value="Takoradi">Takoradi</option>
            <option value="Tamale">Tamale</option>
            <option value="Ho">Ho</option>
        </select><br>
        <label for="AvailabilityForRemoteWork">Availability For Remote Work</label><br>
        <input type="checkbox" id="AvailabilityForRemoteWork" name="AvailabilityForRemoteWork"><br>
        <label for="SoftwareExpertise">Software Expertise</label><br>
        <select id="SoftwareExpertise" name="SoftwareExpertise">
            <option value="Frontend">Frontend</option>
            <option value="Backend">Backend</option>
            <option value="Fullstack">Fullstack</option>
            <option value="Mobile">Mobile</option>
            <option value="DevOps">DevOps</option>
        </select><br>
        <label for="SoftwareExpertiseLevel">Software Expert</label><br>
        <select id="SoftwareExpertiseLevel" name="SoftwareExpertiseLevel">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
            <option value="Expert">Expert</option>
        </select><br>
        <label for="Language">Language</label><br>
        <select id="Language" name="Language">
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Spanish">Spanish</option>
            <option value="Chinese">Chinese</option>
            <option value="Arabic">Arabic</option>
        </select><br>
        <label for="LevelOfResponsibility">Level Of Responsibility</label><br>
        <select id="LevelOfResponsibility" name="LevelOfResponsibility">
            <option value="Junior">Junior</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Senior">Senior</option>
            <option value="Lead">Lead</option>
            <option value="Manager">Manager</option>
        </select><br>
        <label for="YearsOfExperience">Years Of Experience</label><br>
        <select id="YearsOfExperience" name="YearsOfExperience">
            <option value="1-3">1-3</option>
            <option value="4-6">4-6</option>
            <option value="7-9">7-9</option>
            <option value="10-12">10-12</option>
            <option value="13+">13+</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
    </body>
</html>