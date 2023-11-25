<?php

session_start();
    include("../connection.php");
    include("../config.php");
    $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:../filipinobela.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/florante_laura_quiz_styles.css">
        
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Korido 24 - Pagsusulit</title>

    <link rel="shortcut icon" type="images/png" href="../images/FL.png">

</head>

<body>
    <div id="quiz-container">
        <div id="header">
            <h1><center>Pagsusulit sa Korido 24 - Florante at Laura</u></center></h1>
        </div>
    
        <h2 class="panuto_form"></i>PANUTO: PILIIN ANG WASTONG SAGOT SA BAWAT PAHAYAG.</h2><br>
        
        <div id="alert-message" style="display: none;"></div>

        <div id="question" class="quiz_form"></div>
            <form id="quiz-form" >
                
                <div id="options" class="quiz_form" required></div>

                <button type="submit">Ipasa</button><br><br>
                
                <div class="button-container">
                    <a href="../florante_laura.php" class="back_btn">Bumalik sa Nobela</a>
                </div>
            
            </form>

        <div id="result"></div>
        	<div id="message"></div>

    </div>

     <script>
        const questions = [
            {
                question: "Pinili ni Laura na mapugutan ng ulo kaysa tanggapin ang pag-ibig ng pinuno ng mga moro.",
                options: ["Maalalahanin", "Matapang", "Matapat"],
                answer: "Matapang"
            },
            {
                question: "Ang taludtod na nagsasaad na iginagalang ni Florante si Laura.",
                options: ["Aking dali-daling kinalag sa kamay ang lubid na walang awa t pitagan", "Dito nakatanggap ng lunas ng titig", "Mga daliri ko’y naaalalang-alang madampi sa balat ng kagalang-galang"],
                answer: "Mga daliri ko’y naaalalang-alang madampi sa balat ng kagalang-galang"
            },
            {
                question: "Ang sinabi ni Laurang “sintang Florante” ay nagpapahiwatig na siya’y.",
                options: ["Humahanga kay Florante", "May pagkagusto kay Florante", "May pagmamahal kay Florante"],
                answer: "May pagmamahal kay Florante"
            },
            {
                question: "Isang ugali ni Adolfo ang pinagmumulan ng kanyang kasamaan.",
                options: ["Mapagkunwari", "Pagkamainggitin", "Pagkamaramdamin"],
                answer: "Pagkamainggitin"
            },
            {
                question: "Ito ang Gobernador o birey ng mga Moro.",
                options: ["Adolfo", "Emir", "Medialuna"],
                answer: "Emir"
            }
        ];

        const quizContainer = document.getElementById("quiz-container");
        const questionDiv = document.getElementById("question");
        const optionsDiv = document.getElementById("options");
        const resultDiv = document.getElementById("result");
        const quizForm = document.getElementById("quiz-form");

        let shuffledQuestions = shuffleArray(questions);
        let currentQuestionIndex = 0;
        let score = 0;

        function shuffleArray(array) {
            const shuffled = [...array];
            for (let i = shuffled.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
            }
            return shuffled;
        }

        function displayQuestion() {
            const questionObj = shuffledQuestions[currentQuestionIndex];
            questionDiv.textContent = questionObj.question;

            optionsDiv.innerHTML = "";
            questionObj.options.forEach((option, index) => {
                const label = document.createElement("label");
                const radio = document.createElement("input");
                radio.type = "radio";
                radio.name = "answer";
                radio.value = option;
                radio.required = true; // Add the required attribute
                radio.addEventListener("change", () => {
                    // Remove "selected" class from all labels
                    document.querySelectorAll("label").forEach(label => {
                        label.classList.remove("selected");
                    });

                    // Add "selected" class to the clicked label
                    label.classList.add("selected");
                });

                label.appendChild(radio);
                label.appendChild(document.createTextNode(option));
                optionsDiv.appendChild(label);
            });
        }

        function checkAnswer() {
            const selectedOption = document.querySelector('input[name="answer"]:checked');
            if (!selectedOption) {
                return;
            }

            const userAnswer = selectedOption.value;
            const correctAnswer = shuffledQuestions[currentQuestionIndex].answer;
            const alertMessageDiv = document.getElementById("alert-message");

            if (userAnswer === correctAnswer) {
                score++;
                // Display correct alert
                showAlert("Wasto!", "green");
            } else {
                // Display incorrect alert
                showAlert(`Di-Wasto!`, "red");
            }

            currentQuestionIndex++;

            if (currentQuestionIndex < shuffledQuestions.length) {
                displayQuestion();
            } else {
                showResult();
            }
        }

        // Function to display a custom alert aligned to the right
        function showAlert(message, color) {
            const alertMessageDiv = document.getElementById("alert-message");
            alertMessageDiv.textContent = message;
            alertMessageDiv.style.color = color;
            alertMessageDiv.style.display = "block";
            alertMessageDiv.style.textAlign = "center"; 
            alertMessageDiv.style.marginBottom = "10px"; 
            alertMessageDiv.style.fontSize = "20px"; 

            // Hide the alert after a certain time (e.g., 2 seconds)
            setTimeout(() => {
                alertMessageDiv.style.display = "none";
            }, 2000);
        }

        function showResult() {
            quizForm.style.display = "none";
            const percentageScore = (score / shuffledQuestions.length) * 100;
            resultDiv.innerHTML = `
                <p><h2>Tapos na ang pagsusulit!</h2></p>
                <p style='font-size:27px; color:black; margin-top:20px'>Ang iyong marka: ${score}/${shuffledQuestions.length}</p>
                <p style='font-size:27px; color:black; margin-top:20px'>Porsyento: ${percentageScore.toFixed(2)}%</p>
            `;

            // Clear the question display and the options display
            questionDiv.textContent = "";
            optionsDiv.textContent = "";

            // Remove question and options box styles
            questionDiv.style.display = "none";
            optionsDiv.style.display = "none";

            // Hide the "PANUTO" text
            const panutoText = document.querySelector(".panuto_form");
            panutoText.classList.add("hidden");

            // Display score message
            const messageDiv = document.getElementById("message");
            let message = "";
            let messageColor = "";
            if (percentageScore >= 90) {
                message = "PAGBATI! Ikaw ay nakakuha ng perpektong marka.";
                messageColor = "green";
            } else if (percentageScore >= 50 && percentageScore < 90) {
                message = "Malapit ka nang makakuha ng perpektong marka. Ipagpatuloy.";
                messageColor = "#B3541E";
            } else {
                message = "Paumanhin ngunit kailangan mong gumugol ng mas maraming oras sa pagbabasa sa kabanatang ito. Subukan muli.";
                messageColor = "#ff1818";
            }

		    const messageContent = `<h1 style='font-weight:bold;font-size;35px;margin-top:30px;color:${messageColor};'>${message}</h1>`;
            const restartButton = document.createElement("a");
            restartButton.href = "quiz_24.php"; // Replace with the actual href link
            restartButton.textContent = "Subukan Muli";

            // Apply CSS styles to the restart button
            restartButton.style.display = "block";
            restartButton.style.fontSize = "1.1rem";
            restartButton.style.marginTop = "20px";
            restartButton.style.backgroundColor = "#ffa343";
            restartButton.style.color = "black";
            restartButton.style.border = "none";
            restartButton.style.padding = "10px 20px";
            restartButton.style.cursor = "pointer";
            restartButton.style.borderRadius = "5px";
            restartButton.style.textDecoration = "none"; // Remove underline for link
            restartButton.style.textAlign = "center"; // Center the text horizontally
            
            const backButton = document.createElement("a");
            backButton.href = "../florante_laura.php"; // Replace with the actual href link
            backButton.textContent = "Bumalik sa Nobela";
            
            // Apply CSS styles to the back button
            backButton.style.display = "block";
            backButton.style.fontSize = "1.1rem";
            backButton.style.marginTop = "10px";
            backButton.style.backgroundColor = "#e25822";
            backButton.style.color = "black";
            backButton.style.border = "none";
            backButton.style.padding = "10px 20px";
            backButton.style.cursor = "pointer";
            backButton.style.borderRadius = "5px";
            backButton.style.textDecoration = "none"; // Remove underline for link
            backButton.style.textAlign = "center"; // Center the text horizontally

            // Add event listeners for hover effect
            backButton.addEventListener("mouseenter", () => {
                backButton.style.backgroundColor = "#cb410b";
                backButton.style.color = "white";
            });
            backButton.addEventListener("mouseleave", () => {
                backButton.style.backgroundColor = "#e25822";
            });
            restartButton.addEventListener("mouseenter", () => {
                restartButton.style.backgroundColor = "#e08d3c";
                restartButton.style.color = "white";    
            });
            restartButton.addEventListener("mouseleave", () => {
                restartButton.style.backgroundColor = "#ffa343";
            });

            messageDiv.innerHTML = messageContent;
            messageDiv.appendChild(restartButton);
            messageDiv.appendChild(backButton);

		}

        quizForm.addEventListener("submit", function (event) {
            event.preventDefault();
            checkAnswer();
        });

        displayQuestion();
    </script>
</body>
</html>
