<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course File</title>
    <style>
        .file-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .download-btn {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .download-btn:hover {
            background-color: #0056b3;
        }
        .download-btn i {
            font-size: 18px;
        }
        .inbox-download-btn {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .inbox-download-btn:hover {
            background-color: #218838;
        }
        .inbox-download-btn i {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Course File</h1>
    <?php if (!empty($course->file)): ?>
        <div class="file-container">
            <span><strong>File: <?= htmlspecialchars($course->name) ?></strong></span>
            <a class="inbox-download-btn" href="<?= base_url('public/uploads/course/' . $course->file) ?>" download>
                <i>&#x1F4E5;</i>
            </a>
        </div>
    <?php else: ?>
        <p>No file found.</p>
    <?php endif; ?>
</body>
</html>
