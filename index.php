<?php
// index.php
// My personal profile page
// still a beginner at php so i kept this simple

// ----- variables (basic info) -----
$name = "Kyle";
$course = "BSIT - 2nd Year";
$school = "Mater Dei College";
$photo = "profile.jpg";
$email = "kylearreglo360@email.com";
$location = "Tubigon, Bohol, Philippines";

$about = "Hi, I'm Kyle! I'm a first year BSIT student and I'm currently trying to
learn web development so I can build my own projects and eventually earn my
first income from coding. Outside of school, I also play electric guitar -
I'm self taught and I play with a band.";

// ----- education  -----
$education = array(
    "Mater Dei College" => "BSIT (Bachelor of Science in Information Technology) - 2nd Year, currently enrolled"
);

// ----- skills list -----
$skills = array(
    "HTML & CSS",
    "PHP (still learning)",
    "Java (from school)",
    "Basic data structures",
    "Guitar / self taught musician"
);

// ----- hobbies / interests list -----
$hobbies = array(
    "Playing guitar in a band",
    "Basketball",
    "Learning web development on the side",
    "Listening to music"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Personal Profile</title>

    <style>
        /* kept the css simple, no fancy animations or gradients */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
        }

        /* header section with photo and name */
        .header {
            text-align: center;
            border-bottom: 2px solid #dddddd;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #4a7a8c;
        }

        .header h1 {
            margin: 10px 0 5px 0;
        }

        .header p {
            margin: 0;
            color: #666666;
        }

        /* each info section */
        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            background-color: #4a7a8c;
            color: #ffffff;
            padding: 6px 10px;
            font-size: 18px;
        }

        .section ul {
            padding-left: 20px;
        }

        .section li {
            margin-bottom: 5px;
        }

        footer {
            text-align: center;
            font-size: 13px;
            color: #777777;
            padding: 15px 0;
        }

        /* basic responsive adjustment for small screens */
        @media (max-width: 500px) {
            .container {
                padding: 10px;
            }

            .profile-pic {
                width: 110px;
                height: 110px;
            }
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- header: photo + name + course -->
        <div class="header">
            <img src="<?php echo $photo; ?>" alt="Photo of <?php echo $name; ?>" class="profile-pic">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $course; ?> - <?php echo $school; ?></p>
        </div>

        <!-- about me -->
        <div class="section">
            <h2>About Me</h2>
            <p><?php echo nl2br($about); ?></p>
        </div>

        <!-- educational background -->
        <div class="section">
            <h2>Educational Background</h2>
            <ul>
                <?php foreach ($education as $schoolName => $details) { ?>
                    <li><strong><?php echo $schoolName; ?></strong> - <?php echo $details; ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- skills -->
        <div class="section">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill) { ?>
                    <li><?php echo $skill; ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- hobbies and interests -->
        <div class="section">
            <h2>Hobbies and Interests</h2>
            <ul>
                <?php foreach ($hobbies as $hobby) { ?>
                    <li><?php echo $hobby; ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- contact info -->
        <div class="section">
            <h2>Contact Information</h2>
            <p>Email: <?php echo $email; ?></p>
            <p>Location: <?php echo $location; ?></p>
        </div>

    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. Thanks for visiting my page!</p>
    </footer>

</body>
</html>
