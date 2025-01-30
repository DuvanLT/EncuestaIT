<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'Server/database.php';
    $connection = connect();

    foreach ($_POST as $question_id => $answer) {
        $question_id = str_replace('question_', '', $question_id);
        if (is_numeric($answer)) {
            // Closed question
            $query = "INSERT INTO answer (questionId, optionId, open_answer) VALUES ('$question_id', '$answer', NULL)";
        } else {
            // Open question
            $answer = mysqli_real_escape_string($connection, $answer);
            $query = "INSERT INTO answer (questionId, optionId, open_answer) VALUES ('$question_id', NULL, '$answer')";
        }
        if (!mysqli_query($connection, $query)) {
            echo "<p>Error saving response for question $question_id: " . mysqli_error($connection) . "</p>";
        }
    }

   header('Location: thanks.html');
}
?>