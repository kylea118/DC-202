<?php


// ---------- 1. PROFILE DATA (edit these values) ----------
$fullName = "Orliennel Kyle Mula Arreglo";
$course   = "BS Information Technology (BSIT)";
$tagline  = "Second-Year BSIT Student | Guitarist | Aspiring Web Developer";
$photo    = "DSC_0458.jpg"; // Profile photo file name

$about = "I am a second-year BSIT student at Mater Dei. I am interested in building "
       . "websites and learning how things work from the ground up. Outside of school, "
       . "I play electric guitar and am slowly learning music theory one step at a time.";

// Educational background
$education = [
    [
        "school" => "Mater Dei",
        "degree" => "Bachelor of Science in Information Technology",
        "status" => "Second Year (currently enrolled)"
    ],
];

// Skills
$skills = ["Java", "HTML5", "CSS3", "PHP (beginner)", "Electric Guitar", "Music Theory"];

// Hobbies and interests
$hobbies = [
    "Playing electric guitar",
    "Studying music theory",
    "Performing with a band",
    "Building small web projects",
];

// Contact information (replace with your real details)
$email    = "kylearreglo360@gmail.com";
$phone    = "+63 993 006 1718";
$github   = "github.com/kylea118";

// Current year for the footer
$year = date("2026");

// Helper function to make output safe from HTML injection
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($fullName); ?> | Personal Profile</title>

    <style>
        /* ---------- Basic reset and typography ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            color: #333333;
            line-height: 1.6;
        }

        /* ---------- Header ---------- */
        .site-header {
            background-color: #1f3b4d;
            color: #ffffff;
            text-align: center;
            padding: 40px 20px;
        }

        .site-header h1 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .tagline {
            font-size: 0.95rem;
            opacity: 0.85;
        }

        /* ---------- Layout container ---------- */
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Grid: one column on phones, two columns on larger screens */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 700px) {
            .grid {
                grid-template-columns: 1fr 1fr;
            }
            .full-width {
                grid-column: 1 / -1;
            }
        }

        /* ---------- Card style ---------- */
        .card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 25px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        /* Hover effect: card lifts slightly */
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 1.2rem;
            color: #1f3b4d;
            border-bottom: 2px solid #d9e2e8;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        /* ---------- Profile card ---------- */
        .profile-card {
            text-align: center;
        }

        .profile-photo {
            width: 180px;
            height: 180px;
            object-fit: cover;
            object-position: center top;
            border-radius: 50%;
            border: 4px solid #d9e2e8;
            margin-bottom: 15px;
            transition: border-color 0.2s ease;
        }

        .profile-photo:hover {
            border-color: #3d7a99;
        }

        .profile-card h2 {
            border: none;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .course {
            color: #666666;
            font-size: 0.95rem;
        }

        /* ---------- Lists ---------- */
        .education-item + .education-item {
            margin-top: 15px;
        }

        .education-item h3 {
            font-size: 1rem;
        }

        .education-item p {
            font-size: 0.9rem;
            color: #555555;
        }

        /* Skill tags */
        .tag-list {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag-list li {
            background-color: #e8f0f5;
            color: #1f3b4d;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background-color 0.2s ease;
        }

        .tag-list li:hover {
            background-color: #3d7a99;
            color: #ffffff;
        }

        /* Simple bullet list for hobbies */
        .plain-list {
            list-style: none;
        }

        .plain-list li {
            padding: 6px 0;
            border-bottom: 1px dashed #e0e0e0;
        }

        .plain-list li:last-child {
            border-bottom: none;
        }

        /* ---------- Contact ---------- */
        .contact-list {
            list-style: none;
        }

        .contact-list li {
            margin-bottom: 8px;
        }

        .contact-list span {
            font-weight: bold;
            display: inline-block;
            width: 70px;
        }

        .contact-list a {
            color: #3d7a99;
            text-decoration: none;
        }

        .contact-list a:hover {
            text-decoration: underline;
        }

        /* ---------- Footer ---------- */
        .site-footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #777777;
            font-size: 0.85rem;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>

    <!-- ========== PAGE HEADER ========== -->
    <header class="site-header">
        <h1><?php echo e($fullName); ?></h1>
        <p class="tagline"><?php echo e($tagline); ?></p>
    </header>

    <main class="container">
        <div class="grid">

            <!-- ========== PROFILE PHOTO + NAME ========== -->
            <section class="card profile-card full-width">
                <img class="profile-photo"
                     src="<?php echo e($photo); ?>"
                     alt="Photo of <?php echo e($fullName); ?> playing electric guitar">
                <h2><?php echo e($fullName); ?></h2>
                <p class="course"><?php echo e($course); ?></p>
            </section>

            <!-- ========== ABOUT ME ========== -->
            <section class="card">
                <h2>About Me</h2>
                <p><?php echo e($about); ?></p>
            </section>

            <!-- ========== EDUCATIONAL BACKGROUND ========== -->
            <section class="card">
                <h2>Educational Background</h2>
                <?php foreach ($education as $item): ?>
                    <div class="education-item">
                        <h3><?php echo e($item["school"]); ?></h3>
                        <p><?php echo e($item["degree"]); ?></p>
                        <p><?php echo e($item["status"]); ?></p>
                    </div>
                <?php endforeach; ?>
            </section>

            <!-- ========== SKILLS ========== -->
            <section class="card">
                <h2>Skills</h2>
                <ul class="tag-list">
                    <?php foreach ($skills as $skill): ?>
                        <li><?php echo e($skill); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <!-- ========== HOBBIES AND INTERESTS ========== -->
            <section class="card">
                <h2>Hobbies and Interests</h2>
                <ul class="plain-list">
                    <?php foreach ($hobbies as $hobby): ?>
                        <li><?php echo e($hobby); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <!-- ========== CONTACT INFORMATION ========== -->
            <section class="card full-width">
                <h2>Contact Information</h2>
                <ul class="contact-list">
                    <li><span>Email:</span> <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></li>
                    <li><span>Phone:</span> <?php echo e($phone); ?></li>
                    <li><span>GitHub:</span> <a href="https://<?php echo e($github); ?>" target="_blank"><?php echo e($github); ?></a></li>
                </ul>
            </section>

        </div>
    </main>

    <!-- ========== PAGE FOOTER ========== -->
    <footer class="site-footer">
        <p>&copy; <?php echo e($year); ?> <?php echo e($fullName); ?>. Built with PHP, HTML, and CSS.</p>
    </footer>

</body>
</html>
