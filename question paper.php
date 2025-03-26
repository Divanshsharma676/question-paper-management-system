<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Papers - BCA, MCA, B-Tech, M-Tech</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('backk.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            width: 80%;
            max-width: 800px;
        }

        h1, h2 {
            color: #fff;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            margin-bottom: 15px;
        }

        .question-section, .bca-semester {
            display: none;
            margin-top: 20px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 10px;
        }

        .back-btn {
            display: block;
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li a {
            color: #ffd700;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Course</h1>
        <label for="question-paper">Choose Your Course:</label>
        <select id="question-paper" onchange="showSection()">
            <option value="">-- Select --</option>
            <option value="bca">BCA</option>
            <option value="mca">MCA</option>
            <option value="btech">B-Tech</option>
            <option value="mtech">M-Tech</option>
        </select>

        <div id="bca" class="question-section">
            <h2>BCA Question Papers</h2>
            <p>Select a semester to view question papers.</p>
            <label for="bca-semester">Choose Semester:</label>
            <select id="bca-semester" onchange="showBcaSemester()">
                <option value="">-- Select Semester --</option>
                <option value="sem1">Semester 1</option>
                <option value="sem2">Semester 2</option>
                <option value="sem3">Semester 3</option>
                <option value="sem4">Semester 4</option>
                <option value="sem5">Semester 5</option>
                <option value="sem6">Semester 6</option>
            </select>

            <div id="sem1" class="bca-semester">
                <h2>BCA Semester 1 Question Papers</h2>
                <ul>
                    <li><a href="C:\xampp\htdocs\project\papers\maths 1 {1st sem}.pdf" download>MATH</a></li>
                    <li><a href="english_1st_sem.pdf" download>ENGLISH</a></li>
                    <li><a href="maths_1_1st_sem.pdf" download>Computetr Fundamental</a></li>
                    <li><a href="english_1st_sem.pdf" download>C programming</a></li>
                    <li><a href="maths_1_1st_sem.pdf" download>Office Automation</a></li>
                    <li><a href="english_1st_sem.pdf" download>EVS</a></li>
                </ul>
            </div>
            
            <div id="sem2" class="bca-semester">
                <h2>BCA Semester 2 Question Papers</h2>
                <ul>
                    <li><a href="c_programming_2nd_sem.pdf" download>C Programming</a></li>
                    <li><a href="data_structures_2nd_sem.pdf" download>Data Structures</a></li>
                </ul>
            </div>

            <a href="#" class="back-btn" onclick="goBack()">Go Back</a>
        </div>
    </div>

    <script>
        function showSection() {
            var selectedValue = document.getElementById("question-paper").value;
            var sections = document.querySelectorAll(".question-section");
            sections.forEach(section => section.style.display = "none");
            
            if (selectedValue) {
                document.getElementById(selectedValue).style.display = "block";
            }
        }

        function showBcaSemester() {
            var selectedSemester = document.getElementById("bca-semester").value;
            var semesters = document.querySelectorAll(".bca-semester");
            semesters.forEach(semester => semester.style.display = "none");
            
            if (selectedSemester) {
                document.getElementById(selectedSemester).style.display = "block";
            }
        }

        function goBack() {
            var sections = document.querySelectorAll(".question-section");
            sections.forEach(section => section.style.display = "none");
            
            var semesters = document.querySelectorAll(".bca-semester");
            semesters.forEach(semester => semester.style.display = "none");
            
            document.getElementById("question-paper").value = "";
            document.getElementById("bca-semester").value = "";
        }
    </script>
</body>
</html>
