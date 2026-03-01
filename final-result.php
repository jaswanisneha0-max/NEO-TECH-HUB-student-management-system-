<?php
session_start();

$questions = [ 
 [
        "question" => "What does CPU stand for?",
        "options" => ["Central Processing Unit", "Computer Personal Unit", "Control Panel Unit", "Central Performance Utility"],
        "answer" => "Central Processing Unit"
    ],
    [
        "question" => "Which is an output device?",
        "options" => ["Scanner", "Printer", "Keyboard", "Mouse"],
        "answer" => "Printer"
    ],
    [
        "question" => "HTML stands for?",
        "options" => ["HyperText Markup Language", "Hyper Transfer Machine Language", "HighText Modern Language", "None of these"],
        "answer" => "HyperText Markup Language"
    ],
    [
        "question" => "Shortcut for Copy in Windows?",
        "options" => ["Ctrl + C", "Ctrl + X", "Ctrl + V", "Ctrl + Z"],
        "answer" => "Ctrl + C"
    ],
    [
        "question" => "What is RAM?",
        "options" => ["Read Access Memory", "Random Access Memory", "Run Accept Memory", "Ready Access Machine"],
        "answer" => "Random Access Memory"
    ],
   [
        'question' => "Q6. What is the full form of RAM?",
        'options' => ["Read Access Memory", "Random Access Memory", "Run Accept Memory", "Ready Access Machine"],
        'answer' => "Random Access Memory"
    ],
    [
        'question' => "Q7. Which one is a web browser?",
        'options' => ["Google Chrome", "MS Word", "Notepad", "Paint"],
        'answer' => "Google Chrome"
    ],
    [
        'question' => "Q8. Which programming language is used for web?",
        'options' => ["HTML", "C", "Python", "COBOL"],
        'answer' => "HTML"
    ],
    [
        'question' => "Q9. Default file extension for Excel?",
        'options' => [".xls", ".docx", ".ppt", ".txt"],
        'answer' => ".xls"
    ],
    [
        'question' => "Q10. Which button is used to start computer?",
        'options' => ["Shift", "Caps Lock", "Power", "Ctrl"],
        'answer' => "Power"
    ],
    [
        'question' => "Q11. Who is the father of Computer?",
        'options' => ["Charles Babbage", "Alan Turing", "Dennis Ritchie", "Bill Gates"],
        'answer' => "Charles Babbage"
    ],
    [
        'question' => "Q12. PDF stands for?",
        'options' => ["Portable Document Format", "Print Document File", "Portable Data Format", "None"],
        'answer' => "Portable Document Format"
    ],
    [
        'question' => "Q13. What does URL stand for?",
        'options' => ["Uniform Resource Locator", "Universal Return Link", "Uniform Return Locator", "None"],
        'answer' => "Uniform Resource Locator"
    ],
    [
        'question' => "Q14. MS Word is used for?",
        'options' => ["Drawing", "Typing", "Browsing", "Programming"],
        'answer' => "Typing"
    ],
    [
        'question' => "Q15. Which is not a search engine?",
        'options' => ["Google", "Yahoo", "Bing", "Facebook"],
        'answer' => "Facebook"
    ],
    [
        'question' => "Q16. What is the extension of image file?",
        'options' => [".png", ".exe", ".html", ".doc"],
        'answer' => ".png"
    ],
    [
        'question' => "Q17. 1 Byte = ?",
        'options' => ["4 bits", "8 bits", "16 bits", "32 bits"],
        'answer' => "8 bits"
    ],
    [
        'question' => "Q18. What is phishing?",
        'options' => ["Stealing passwords", "Spamming emails", "Making websites", "Typing fast"],
        'answer' => "Stealing passwords"
    ],
    [
        'question' => "Q19. Google Drive is used for?",
        'options' => ["Editing images", "Cloud storage", "Video calling", "Programming"],
        'answer' => "Cloud storage"
    ],
    [
        'question' => "Q20. Shortcut for Paste?",
        'options' => ["Ctrl + V", "Ctrl + P", "Ctrl + C", "Ctrl + X"],
        'answer' => "Ctrl + V"
    ],
    [
        'question' => "Q21. Which is not a programming language?",
        'options' => ["Python", "Java", "MS Word", "C++"],
        'answer' => "MS Word"
    ],
    [
        'question' => "Q22. Which one is used for video calling?",
        'options' => ["Zoom", "Excel", "WordPad", "WinRAR"],
        'answer' => "Zoom"
    ],
    [
        'question' => "Q23. Which key is used to delete?",
        'options' => ["Ctrl", "Del", "Alt", "Shift"],
        'answer' => "Del"
    ],
    [
        'question' => "Q24. Which is not an OS?",
        'options' => ["Windows", "Linux", "macOS", "Google Chrome"],
        'answer' => "Google Chrome"
    ],
    [
        'question' => "Q25. Which one is a spreadsheet software?",
        'options' => ["MS Excel", "MS Word", "Notepad", "Tally"],
        'answer' => "MS Excel"
    ],
    [
        'question' => "Q26. Which is antivirus software?",
        'options' => ["Photoshop", "Quick Heal", "Notepad", "Paint"],
        'answer' => "Quick Heal"
    ],
    [
        'question' => "Q27. What is email?",
        'options' => ["Text editor", "Electronic mail", "Programming language", "Game"],
        'answer' => "Electronic mail"
    ],
    [
        'question' => "Q28. Which key is used to cancel?",
        'options' => ["Esc", "Enter", "Ctrl", "Tab"],
        'answer' => "Esc"
    ],
    [
        'question' => "Q29. Ctrl + Z is for?",
        'options' => ["Redo", "Copy", "Undo", "Paste"],
        'answer' => "Undo"
    ],
    [
        'question' => "Q30. What is the full form of USB?",
        'options' => ["Universal Serial Bus", "Unified Service Block", "Universal Service Base", "None"],
        'answer' => "Universal Serial Bus"
    ],
    [
        'question' => "Q31. What is the default browser in Windows?",
        'options' => ["Internet Explorer", "Chrome", "Firefox", "Safari"],
        'answer' => "Internet Explorer"
    ],
    [
        'question' => "Q32. What is Google Docs used for?",
        'options' => ["Drawing", "Spreadsheets", "Document Editing", "Gaming"],
        'answer' => "Document Editing"
    ],
    [
        'question' => "Q33. Which is a presentation tool?",
        'options' => ["MS PowerPoint", "MS Word", "Tally", "Adobe Reader"],
        'answer' => "MS PowerPoint"
    ],
    [
        'question' => "Q34. What is Excel used for?",
        'options' => ["Typing", "Creating tables & graphs", "Reading books", "Making images"],
        'answer' => "Creating tables & graphs"
    ],
    [
        'question' => "Q35. Which of the following is storage?",
        'options' => ["Hard Disk", "Monitor", "Keyboard", "Speaker"],
        'answer' => "Hard Disk"
    ],
    [
        'question' => "Q36. What does LAN stand for?",
        'options' => ["Local Area Network", "Long Area Network", "Large Access Network", "Logical Access Network"],
        'answer' => "Local Area Network"
    ],
    [
        'question' => "Q37. What is a domain name?",
        'options' => ["Website address", "Email subject", "Coding format", "Password"],
        'answer' => "Website address"
    ],
    [
        'question' => "Q38. Which is a cloud-based email?",
        'options' => ["Gmail", "MS Word", "Chrome", "Excel"],
        'answer' => "Gmail"
    ],
    [
        'question' => "Q39. Which app is for spreadsheet?",
        'options' => ["Excel", "Word", "PowerPoint", "Edge"],
        'answer' => "Excel"
    ],
    [
        'question' => "Q40. Which is not a computer part?",
        'options' => ["Mouse", "CPU", "Monitor", "Pencil"],
        'answer' => "Pencil"
    ],
    [
        'question' => "Q41. What is software?",
        'options' => ["Hardware", "Programs and OS", "Wires", "CPU"],
        'answer' => "Programs and OS"
    ],
    [
        'question' => "Q42. Ctrl + S is used for?",
        'options' => ["Save", "Search", "Start", "Shutdown"],
        'answer' => "Save"
    ],
    [
        'question' => "Q43. Which app is used for coding?",
        'options' => ["VS Code", "Word", "Excel", "Paint"],
        'answer' => "VS Code"
    ],
    [
        'question' => "Q44. Which of these is a database?",
        'options' => ["MySQL", "Notepad", "Chrome", "Firefox"],
        'answer' => "MySQL"
    ],
    [
        'question' => "Q45. Which is not a cloud platform?",
        'options' => ["AWS", "Google Drive", "Dropbox", "MS Paint"],
        'answer' => "MS Paint"
    ],
    [
        'question' => "Q46. What is AI?",
        'options' => ["Artificial Intelligence", "Auto Input", "All Information", "None"],
        'answer' => "Artificial Intelligence"
    ],
    [
        'question' => "Q47. Which is a file format?",
        'options' => [".jpg", ".run", ".exe", ".bin"],
        'answer' => ".jpg"
    ],
    [
        'question' => "Q48. Which icon closes a window?",
        'options' => ["X", "-", "+", "□"],
        'answer' => "X"
    ],
    [
        'question' => "Q49. Software to compress files?",
        'options' => ["WinRAR", "Paint", "Word", "Excel"],
        'answer' => "WinRAR"
    ],
    [
        'question' => "Q50. Used to listen to audio?",
        'options' => ["Speaker", "Monitor", "Mouse", "Keyboard"],
        'answer' => "Speaker"
    ],

];

// Store total questions count
$totalQuestions = count($questions);

// Initialize session on first load
if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
    $_SESSION['answers'] = [];
}

// Save previous answer if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected = $_POST['answer'] ?? null;
    
    if ($_SESSION['question_index'] < $totalQuestions) {
        $_SESSION['answers'][$_SESSION['question_index']] = $selected; // ✅ fixed: store selected, not $totalQuestions
        $_SESSION['question_index']++;
    }
}

// Check if exam is over
if ($_SESSION['question_index'] >= $totalQuestions) {
    echo "<div class='container'>";
    echo "<h2>✅ Exam Completed</h2>";

    // Calculate score
    $score = 0;
    foreach ($_SESSION['answers'] as $i => $answer) {
         if (trim(strtolower($answer)) == trim(strtolower($questions[$i]['answer']))) {
            $score++;
        }
    }

    // Display result
    echo "<h3>Your Score: $score / $totalQuestions</h3>";
    if ($score >= 25) {
        echo "<p style='color: green; font-weight: bold;'>✅ You Passed the Exam!</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>❌ You Failed the Exam. Better Luck Next Time!</p>";
    }
    echo '<form method="post"><button type="submit" name="restart" class="btn restart">Restart Exam</button></form>';
    echo "<a href='student-dashboard.php'><button class='btn back'>Back</button></a>";
    echo "</div>";

    if (isset($_POST['restart'])) {
        session_destroy();
        header("Location: final-result.php");
        exit;
    }
    exit;
}

$current = $questions[$_SESSION['question_index']];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
    <style>
        /* ==== GLOBAL STYLES ==== */
        body {
            font-family: "Segoe UI", "Roboto", sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #f1f8ff);
            color: #333;
            margin: 0;
            padding: 20px;
        }

        /* ==== CONTAINER ==== */
        .container {
            max-width: 800px;
            background: #ffffff;
            margin: auto;
            padding: 35px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: transform 0.2s ease;
        }

        .container:hover {
            transform: translateY(-3px);
        }

        /* ==== HEADINGS ==== */
        h2 {
            text-align: center;
            font-size: 26px;
            color: #0d47a1;
            margin-bottom: 25px;
            font-weight: 700;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* ==== QUESTION BOX ==== */
        .qa-box {
            background: #f8faff;
            padding: 15px;
            margin-bottom: 18px;
            border-left: 5px solid #0d47a1;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .your-answer {
            color: #c62828;
            font-weight: 600;
        }

        .correct-answer {
            color: #2e7d32;
            font-weight: 600;
        }

        /* ==== FORM & LABELS ==== */
        form {
            margin-top: 25px;
        }

        label {
            display: block;
            margin: 12px 0;
            background: #f5f7fa;
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 17px;
            cursor: pointer;
            border: 1px solid #e0e0e0;
            transition: all 0.25s ease-in-out;
        }

        label:hover {
            background-color: #e3f2fd;
            border-color: #90caf9;
        }

        input[type="radio"] {
            margin-right: 12px;
            accent-color: #0d47a1;
        }

        /* ==== BUTTONS ==== */
        button {
            padding: 12px 28px;
            margin-top: 25px;
            background: linear-gradient(135deg, #1976d2, #0d47a1);
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
            transition: all 0.25s ease;
        }

        button:hover {
            background: linear-gradient(135deg, #1565c0, #0b3c91);
            transform: translateY(-2px);
        }

        .btn.back {
            background: linear-gradient(135deg, #757575, #424242);
            margin-left: 10px;
        }

        .btn.back:hover {
            background: linear-gradient(135deg, #616161, #212121);
        }

        .btn.restart {
            background: linear-gradient(135deg, #2e7d32, #1b5e20);
        }

        .btn.restart:hover {
            background: linear-gradient(135deg, #256628, #144d18);
        }

        /* ==== RESPONSIVE ==== */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }

            label {
                font-size: 16px;
            }

            button {
                width: 100%;
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Question <?php echo $_SESSION['question_index'] + 1; ?> of <?php echo $totalQuestions; ?></h2>
    <form method="post">
        <p><strong><?php echo $current['question']; ?></strong></p>
        <?php foreach ($current['options'] as $option): ?>
            <label>
                <input type="radio" name="answer" value="<?php echo $option; ?>" required>
                <?php echo $option; ?>
            </label>
        <?php endforeach; ?>
        <button type="submit">Save & Next</button>
        <button type="button" class='btn back' onclick="window.location.href='student-dashboard.php'">Back</button>
    </form>
</div>
</body>
</html>
