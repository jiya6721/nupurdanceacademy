<?php $this->load->view('user_panel/header');?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatanatyam Course Files</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f4e1d2;
            color: #6b2b06;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 2em;
            color: #8c3d19;
        }
        .file-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 60%;
            margin: 20px auto;
            padding: 15px;
            border: 2px solid #8c3d19;
            border-radius: 10px;
            background-color: #fff8e7;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        }
        .download-btn, .subscribe-btn {
            text-decoration: none;
            background-color: #a64d1e;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .download-btn:hover, .subscribe-btn:hover {
            background-color: #6b2b06;
        }
        .inbox-download-btn {
            text-decoration: none;
            background-color: #c06014;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .inbox-download-btn:hover {
            background-color: #8c3d19;
        }
        .note {
            font-size: 0.9em;
            color: #8c3d19;
            margin-top: 15px;
            font-style: italic;
        }
    </style>
    <script>
        function checkSubscription(courseName) {
            if (localStorage.getItem("subscribedToCourse_" + courseName)) {
                document.getElementById("subscription-message-" + courseName).innerHTML = "You have already subscribed to " + courseName + ".";
                document.getElementById("subscribe-section-" + courseName).style.display = "none";
                document.getElementById("file-container-" + courseName).style.display = "flex";
            } else {
                document.getElementById("file-container-" + courseName).style.display = "none";
            }
        }
        
        function subscribe(courseName) {
            localStorage.setItem("subscribedToCourse_" + courseName, "true");
            document.getElementById("subscription-message-" + courseName).innerHTML = "Thank you for subscribing to " + courseName + "!";
            setTimeout(() => {
                checkSubscription(courseName);
            }, 1000);
        }
    </script>
</head>
<body>
    <h1>Bharatanatyam Course Files</h1>
    
    <?php if (!empty($course->file)): ?>
        <div>
            <h2><?= htmlspecialchars($course->name) ?></h2>
            <div id="subscribe-section-<?= htmlspecialchars($course->name) ?>">
                <p id="subscription-message-<?= htmlspecialchars($course->name) ?>">Subscribe to "<?= htmlspecialchars($course->name) ?>" to access traditional Bharatanatyam learning materials.</p>
                <button class="subscribe-btn" onclick="subscribe('<?= htmlspecialchars($course->name) ?>')">Subscribe</button>
            </div>
            <div id="file-container-<?= htmlspecialchars($course->name) ?>" class="file-container" style="display:none;">
                <span><strong>File: <?= htmlspecialchars($course->name) ?></strong></span>
                <a class="inbox-download-btn" href="<?= base_url('public/uploads/course/' . $course->file) ?>" download>
                    &#x1F4E5; Download
                </a>
            </div>
            <p class="note">This file is provided according to the information from the exam center of Akhil Bharatiya Gandharva Mahavidyalaya.</p>
        </div>
    <?php else: ?>
        <p>No file found.</p>
    <?php endif; ?>
</body>
</html>