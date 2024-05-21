<?php
require 'config.php';

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    // Retrieve reports for the logged-in user
    $sql = "SELECT * FROM rajbhasha_reports WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error retrieving reports: " . mysqli_error($conn);
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
    <style>

        body {
            font-family: Arial, sans-serif;
        }

        h2{
            text-align: center;
            font-weight: bolder;
            font-size: 50px;
            font-family:'Times New Roman', Times, serif;
            background-color:#f44336 ; 
            padding: 20px;
            border: 2px solid #f44336; 
            color: white; 
            
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td{
            border: 5px solid darkcyan;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #AAABB8;
            color: black;
            font-size: 20px;
            font-weight: bold;
        }
        td{
            background-color: #AAABB8;
            font-size: 20px;
            
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <h2 class="head">Reports</h2>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Report ID</th>";
    echo "<th>कार्यालय का नाम और पूरा पता</th>";
    echo "<th>संबंधित राजभाषा अधिकारी का फोन नं.:एस.टी.डी कोड</th>";
    echo "<th>फ़ोन नं.</th>";
    echo "<th>जारी काग़जात की कुल संख्या</th>";
    echo "<th>दविभाषी रूप से जारी कागज़ात की संख्या</th>";
    echo "<th>केवल अंग्रेजी में जारी किये गए कागज़ात</th>";
    echo "<th>हिंदी में प्राप्त कुल पत्रो की संख्या</th>";
    echo "<th>इनमें से कितने के उत्तर हिंदी में दिए गए</th>";
    echo "<th>इनमें से कितने के उत्तर अंग्रेजी में दिए गए</th>";
    echo "<th>इनमें से कितनो के उत्तर दिए जाना अपेक्षित नहीं थे</th>";
    echo "<th>अंग्रेजी में प्राप्त पत्रों की संख्या</th>";
    echo "<th>इनमें से कितने के उत्तर हिंदी में दिए गए</th>";
    echo "<th>इनमें से कितने के उत्तर अंग्रेजी में दिए गए</th>";
    echo "<th>इनमें से कितनो के उत्तर दिए जाना अपेक्षित नहीं थे</th>";
    echo "<th>अंग्रेजी में प्राप्त पत्रों की संख्या</th>";
    echo "<th>इनमें से कितने के उत्तर हिंदी में दिए गए</th>";
    echo "<th>इनमें से कितने के उत्तर अंग्रेजी में दिए गए</th>";
    echo "<th>इनमें से कितनो के उत्तर दिए जाना अपेक्षित नहीं थे</th>";
    echo "<th>हिंदी में</th>";
    echo "<th>अंग्रेजी में</th>";
    echo "<th>भेजे गए पत्रों की संख्या</th>";
    echo "<th>हिंदी में</th>";
    echo "<th>अंग्रेजी में</th>";
    echo "<th>भेजे गए पत्रों की संख्या</th>";
    echo "<th>हिंदी में</th>";
    echo "<th>अंग्रेजी में/th>";
    echo "<th>भेजे गए पत्रों की संख्या</th>";
    echo "<th>हिंदी में लिखी गई टिप्पणियों के पृष्ठों की संख्या</th>";
    echo "<th>अंग्रेजी में लिखी गई टिप्पणियों के पृष्ठों की संख्या</th>";
    echo "<th>कुल टिप्पणियों के पृष्ठों की संख्या</th>";
    echo "<th>विभागीय संगठनीय राजभाषा कार्यान्वयन समिति की बैठक के आयोजन की तिथि</th>";
    echo "<th>राजभाषा कार्यान्वयन समिति की बैठक की तिथि (केंद्रीय प्रधान कार्यालय की)</th>";
    echo "<th>अधीनस्थ कार्यालयों में गठित राजभाषा कार्यान्वयन समितियों की संख्या</th>";
    echo "<th>इस तिमाही में आयोजित बैठकों की संख्या</th>";
    echo "<th>बैठकों से संबंधित कार्य सूची और कार्यव्रतत क्या हिंदी में जारी किए गए</th>";
    echo "<th>हिंदी सलाहकार समिति की बैठक के आयोजन की तिथि (केवल मंत्रालयों/विभागों के लिए)</th>";
    echo "<th>तिमाही में किए गए उल्लेखनीय कार्य उपलब्धियों का संक्षिप्त विवरण (अधिकतम 250 कैरेक्टर)</th>";
    echo "<th>अध्यक्ष का नाम</th>";
    echo "<th>पदनाम</th>";
    echo "<th>फ़ोन नम्बर</th>";
    echo "<th>फैक्स नंबर</th>";
    echo "<th>ई-मेल का पता</th>";
    echo "</tr>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["report_id"] . "</td>";
        echo "<td>" . $row["office_name"] . "</td>";
        echo "<td>" . $row["adhikari_details"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["total_documents"] . "</td>";
        echo "<td>" . $row["bilingual_documents"] . "</td>";
        echo "<td>" . $row["english_documents"] . "</td>";
        echo "<td>" . $row["hindi_letters"] . "</td>";
        echo "<td>" . $row["hindi_answers"] . "</td>";
        echo "<td>" . $row["english_answers"] . "</td>";
        echo "<td>" . $row["expected_answers"] . "</td>";
        echo "<td>" . $row["response1"] . "</td>";
        echo "<td>" . $row["response2"] . "</td>";
        echo "<td>" . $row["response3"] . "</td>";
        echo "<td>" . $row["response4"] . "</td>";
        echo "<td>" . $row["response5"] . "</td>";
        echo "<td>" . $row["response6"] . "</td>";
        echo "<td>" . $row["response7"] . "</td>";
        echo "<td>" . $row["response8"] . "</td>";
        echo "<td>" . $row["sent1"] . "</td>";
        echo "<td>" . $row["sent2"] . "</td>";
        echo "<td>" . $row["sent3"] . "</td>";
        echo "<td>" . $row["sent4"] . "</td>";
        echo "<td>" . $row["sent5"] . "</td>";
        echo "<td>" . $row["sent6"] . "</td>";
        echo "<td>" . $row["sent7"] . "</td>";
        echo "<td>" . $row["sent8"] . "</td>";
        echo "<td>" . $row["sent9"] . "</td>";
        echo "<td>" . $row["hindi_comments"] . "</td>";
        echo "<td>" . $row["english_comments"] . "</td>";
        echo "<td>" . $row["total_comments"] . "</td>";
        echo "<td>" . $row["committee_meeting_date"] . "</td>";
        echo "<td>" . $row["central_office_meeting_date"] . "</td>";
        echo "<td>" . $row["subordinate_committee_count"] . "</td>";
        echo "<td>" . $row["quarterly_meetings_count"] . "</td>";
        echo "<td>" . $row["meeting_proceedings_in_hindi"] . "</td>";
        echo "<td>" . $row["hindi_advisory_committee_meeting_date"] . "</td>";
        echo "<td>" . $row["notable_achievements"] . "</td>";
        echo "<td>" . $row["chairman_name"] . "</td>";
        echo "<td>" . $row["designation"] . "</td>";
        echo "<td>" . $row["ph_number"] . "</td>";
        echo "<td>" . $row["fax_number"] . "</td>";
        echo "<td>" . $row["email_address"] . "</td>";
         // ... display other report details
        echo "</tr>";
    }

    echo "</table>";

    ?>
   
</body>
</html>


<?php
mysqli_close($conn);
?>
