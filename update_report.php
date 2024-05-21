<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reportId= $_POST["reportId"]; 
    $officeName = $_POST["officeName"];
    $adhikariDetails = $_POST["adhikariDetails"];
    $phoneNumber = $_POST["phoneNumber"];
    $totalDocuments =  $_POST["totalDocuments"];
    $bilingualDocuments =  $_POST["bilingualDocuments"];
    $englishDocuments =  $_POST["englishDocuments"];
    $hindiLetters =  $_POST["hindiLetters"];
    $hindiAnswers = $_POST["hindiAnswers"];
    $englishAnswers = $_POST["englishAnswers"];
    $expectedAnswers =  $_POST["expectedAnswers"];
    $response1 = $_POST["response1"];
    $response2 =  $_POST["response2"];
    $response3 = $_POST["response3"];
    $response4 =  $_POST["response4"];
    $response5 =  $_POST["response5"];
    $response6 =  $_POST["response6"];
    $response7 =  $_POST["response7"];
    $response8 = $_POST["response8"];
    $sent1 =  $_POST["sent1"];
    $sent2 =  $_POST["sent2"];
    $sent3 =  $_POST["sent3"];
    $sent4 =  $_POST["sent4"];
    $sent5 =  $_POST["sent5"];
    $sent6 =  $_POST["sent6"];
    $sent7 =  $_POST["sent7"];
    $sent8 = $_POST["sent8"];
    $sent9 =  $_POST["sent9"];
    $hindiComments =  $_POST["hindiComments"];
    $englishComments = $_POST["englishComments"];
    $totalComments = $_POST["totalComments"];
    $committeeMeetingDate =  $_POST["committeeMeetingDate"];
    $centralOfficeMeetingDate = $_POST["centralOfficeMeetingDate"];
    $subordinateCommitteeCount =  $_POST["subordinateCommitteeCount"];
    $quarterlyMeetingsCount =  $_POST["quarterlyMeetingsCount"];
    $meetingProceedingsInHindi =  $_POST["meetingProceedingsInHindi"];
    $hindiAdvisoryCommitteeMeetingDate = $_POST["hindiAdvisoryCommitteeMeetingDate"];
    $notableAchievements = $_POST["notableAchievements"];
    $chairmanName =  $_POST["chairmanName"];
    $designation =  $_POST["designation"];
    $PHnumber = $_POST["PHnumber"];
    $faxNumber =  $_POST["faxNumber"];
    $emailAddress =  $_POST["emailAddress"];

    $sql = "UPDATE rajbhasha_reports SET office_name='$officeName', adhikari_details='$adhikariDetails' , phone_number='$phoneNumber', total_documents='$totalDocuments', bilingual_documents='$bilingualDocuments', english_documents='$englishDocuments', hindi_letters='$hindiLetters', hindi_answers='$hindiAnswers', english_answers='$englishAnswers', expected_answers='$expectedAnswers', response1='$response1', response2='$response2', response3='$response3', response4='$response4', response5='$response5', response6='$response6', response7='$response7', response8='$response8', sent1='$sent1', sent2='$sent2', sent3='$sent3', sent4='$sent4', sent5='$sent5', sent6='$sent6', sent7='$sent7', sent8='$sent8', sent9='$sent9', hindi_comments='$hindiComments', english_comments='$englishComments', total_comments='$totalComments', committee_meeting_date='$committeeMeetingDate', central_office_meeting_date='$centralOfficeMeetingDate', subordinate_committee_count='$subordinateCommitteeCount', quarterly_meetings_count='$quarterlyMeetingsCount', meeting_proceedings_in_hindi='$meetingProceedingsInHindi', hindi_advisory_committee_meeting_date='$hindiAdvisoryCommitteeMeetingDate', notable_achievements='$notableAchievements', chairman_name='$chairmanName', designation='$designation', ph_number='$PHnumber', fax_number='$faxNumber', email_address='$emailAddress' WHERE report_id = $reportId";
   
   
    if (mysqli_query($conn, $sql)) {
        // echo "";
        header("Location: view_report.php");
        exit();
    } else {
        echo "Error updating report: " . mysqli_error($conn);
    }
} else {
    // If the request method is not POST, redirect back to the view_reports.php page
    header("Location: view_report.php");
    exit();   
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>