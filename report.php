<?php
require 'config.php' ;

if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("Location: login.php");
    exit();
}    

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $officename = $_POST["officeName"];
        $adhikaridetails = $_POST["adhikariDetails"];
        $phonenumber = $_POST["phoneNumber"];
        $totaldocuments = $_POST["totalDocuments"];
        $bilingualdocuments = $_POST["bilingualDocuments"];
        $englishdocuments = $_POST["englishDocuments"];
        $hindiletters = $_POST["hindiLetters"];
        $hindianswers = $_POST["hindiAnswers"];
        $englishanswers = $_POST["englishAnswers"];
        $expectedanswers = $_POST["expectedAnswers"];
        $response1 = $_POST["response1"];
        $response2 = $_POST["response2"];
        $response3 = $_POST["response3"];
        $response4 = $_POST["response4"];
        $response5 = $_POST["response5"];
        $response6 = $_POST["response6"];
        $response7 = $_POST["response7"];
        $response8 = $_POST["response8"];
        $sent1 = $_POST["sent1"];
        $sent2 = $_POST["sent2"];
        $sent3 = $_POST["sent3"];
        $sent4 = $_POST["sent4"];
        $sent5 = $_POST["sent5"];
        $sent6 = $_POST["sent6"];
        $sent7 = $_POST["sent7"];
        $sent8 = $_POST["sent8"];
        $sent9 = $_POST["sent9"];
        $hindicomments = $_POST["hindiComments"];
        $englishcomments = $_POST["englishComments"];
        $totalcomments = $_POST["totalComments"];
        $committeemeetingdate = $_POST["committeeMeetingDate"];
        $centralofficemeetingdate = $_POST["centralOfficeMeetingDate"];
        $subordinatecommitteecount = $_POST["subordinateCommitteeCount"];
        $quarterlymeetingscount = $_POST["quarterlyMeetingsCount"];
        $meetingproceedingsinhindi = $_POST["meetingProceedingsInHindi"];
        $hindiadvisorycommitteemeetingDate = $_POST["hindiAdvisoryCommitteeMeetingDate"];
        $notableachievements = $_POST["notableAchievements"];
        $chairmanname = $_POST["chairmanName"];
        $designation = $_POST["designation"];
        $PHnumber = $_POST["PHnumber"];
        $faxnumber = $_POST["faxNumber"];
        $emailaddress = $_POST["emailAddress"];

        $sql = "INSERT INTO rajbhasha_reports (user_id, office_name, adhikari_details, phone_number, total_documents, bilingual_documents, english_documents, hindi_letters, hindi_answers, english_answers, expected_answers, response1, response2, response3, response4, response5, response6, response7, response8, sent1, sent2, sent3, sent4, sent5, sent6, sent7, sent8, sent9, hindi_comments, english_comments, total_comments, committee_meeting_date, central_office_meeting_date, subordinate_committee_count, quarterly_meetings_count, meeting_proceedings_in_hindi, hindi_advisory_committee_meeting_date, notable_achievements, chairman_name, designation, ph_number, fax_number, email_address) VALUES ('$user_id', '$officename', '$adhikaridetails', '$phonenumber','$totaldocuments', '$bilingualdocuments', '$englishdocuments', '$hindiletters', '$hindianswers', '$englishanswers', '$expectedanswers', '$response1', '$response2', '$response3', '$response4', '$response5', '$response6', '$response7', '$response8', '$sent1', '$sent2', '$sent3', '$sent4', '$sent5', '$sent6', '$sent7', '$sent8', '$sent9', '$hindicomments', '$englishcomments', '$totalcomments', '$committeemeetingdate', '$centralofficemeetingdate', '$subordinatecommitteecount', '$quarterlymeetingscount', '$meetingproceedingsinhindi', '$hindiadvisorycommitteemeetingDate', '$notableachievements', '$chairmanname', '$designation', '$PHnumber', '$faxnumber', '$emailaddress')";
        if(mysqli_query($conn, $sql)){
            header("Location: success_page.php"); 
            exit();
        }else{
            echo "Report submission failed.";
        }
     }
}
$conn->close(); 
?>


<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>राजभाषा त्रैमासिक रिपोर्ट</title>
   <style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-color: #f9f9f9;
}


div {
  max-width: 600px;
  margin: 30px auto;
  padding: 20px;
  background-color: #ffffff ;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

h1 {
  color: black;
  font-size: 36px;
  text-align: center;
  margin-bottom: 30px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  text-decoration: underline;
}


#successMessage {
  background-color: rgb(135, 187, 235);
  color: white;
  font-weight: bold;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

input[type="text"],
input[type="date"],
textarea,
select{
  width: 90%;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.1);
  color: #444;
}

textarea {
  resize: vertical;
}

label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.834);
}

button[type="submit"] {
  background-color: blue;
  color: black;
  padding: 12px 250px;
  text-align: center;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: rgba(255, 255, 255, 0.863);
}

section {
  margin-bottom: 30px;
}

table {
  border-collapse: collapse;
  width: 95%;
}

th, td {
  padding: 30px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}


</style>
</head>
<body>
    <div>
        <h1>केंद्रीय सरकार के मंत्रालय/विभागो/संबंध व अधिनस्थ कार्यलायो/सार्वजनिक छेत्र के उपक्रमो/स्वयत्त निकायो आदि में राजभाषा हिंदी के प्रगामी प्रयोग से संबंधित तिमाही प्रगति रिपोर्ट</h1>
        <form id="rajBhashaForm" action="report.php" method="post" enctype="multipart/form-data" >
            <section class="section1">
                <h2>भाग-1 (प्रत्येक तिमाही में भरा जाए)</h2>
                <label for="officeName">कार्यालय का नाम और पूरा पता </label>

                <br>
                <br/>

                <input type="text" name="officeName" id="officeName" required>

                <br>
                <br/>

                <label for="adhikariDetails">संबंधित राजभाषा अधिकारी का फोन नं.:एस.टी.डी कोड</label>

                <br>
                <br/>
       
                <input type="text" name="adhikariDetails" id="adhikariDetails" required>

                <br>
                <br/>

                <label for="phoneNumber">फ़ोन नं.</label>

                <br>
                <br/>

                <input type="text" name="phoneNumber" id="phoneNumber" required>
    
            </section>

            <section>
                <h3>1. राजभाषा अधिनियम 1963 की धारा 3(3) के अंतगर्त जारी कागज़ात* की स्थिति</h3>
                <label for="totalDocuments">(क) जारी काग़जात की कुल संख्या</label>

                <br>
                <br/>

                <input type="text" name="totalDocuments" id="totalDocuments" required>
                
                <br>
                <br/>

                <label for="bilingualDocuments">(ख) दविभाषी रूप से जारी कागज़ात की संख्या</label>

                <br>
                <br/>

                <input type="text" name="bilingualDocuments" id="bilingualDocuments" required>
                
                <br>
                <br/>

                <label for="englishDocuments">(ग) केवल अंग्रेजी में जारी किये गए कागज़ात</label>

                <br>
                <br/>

                <input type="text" name="englishDocuments" id="englishDocuments" required>
            
            </section>

            <section>
                <h3>2. हिंदी में प्राप्त पत्रो की स्थिती (राजभाषा नियम-5)</h3>
                <label for="hindiLetters">(क) हिंदी में प्राप्त कुल पत्रो की संख्या</label>

                <br>
                <br/>

                <input type="text" name="hindiLetters" id="hindiLetters" required>
                
                <br>
                <br/>

                <label for="hindiAnswers">(ख) इनमें से कितने के उत्तर हिंदी में दिए गए हैं</label>

                <br>
                <br/>

                <input type="text" name="hindiAnswers" id="hindiAnswers" required>
              
                <br>
                <br/>

                <label for="englishAnswers">(ग) इनमें से कितने के उत्तर अंग्रेजी में दिए गए हैं</label>

                <br>
                <br/>

                <input type="text" name="englishAnswers" id="englishAnswers" required>
                
                <br>
                <br/>

                <label for="expectedAnswers">(घ) इनमें से कितनो के उत्तर दिए जाना अपेक्षित नहीं थे</label>

                <br>
                <br/>

                <input type="text" name="expectedAnswers" id="expectedAnswers" required>
                
            </section>

            <section>
                <h3>3. हिंदी में प्राप्त पत्रों के उत्तर हिंदी में दिए जाने की स्थिती (केवल 'क' एवं 'ख' क्षेत्र में स्थित कार्यालयों के लिए)</h3>

                <table border="1">
                    <tbody>
                        <tr>
                            <td rowspan="2"></td>
                            <td>अंग्रेजी में प्राप्त पत्रों की संख्या</td>
                            <td>इनमें से कितने के उत्तर हिंदी में दिए गए</td>
                            <td>इनमें से कितने के उत्तर अंग्रेजी में दिए गए</td>
                            <td>इनमें से कितनो के उत्तर दिए जाना अपेक्षित नहीं थे</td>
                           
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>'क' छेत्र को</td>
                            <td><input type="text" name="response1" id="response1" required></td>
                           
                            <td><input type="text" name="response2" id="response2" required></td>
                            
                            <td><input type="text" name="response3" id="response3" required></td>
                            
                            <td><input type="text" name="response4" id="response4" required></td>
                          
                        </tr>
                        <tr>
                            <td>'ख' छेत्र को</td>
                            <td><input type="text" name="response5" id="response5" required></td>
                           
                            <td><input type="text" name="response6" id="response6" required></td>
                           
                            <td><input type="text" name="response7" id="response7" required></td>
                            
                            <td><input type="text" name="response8" id="response8" required></td>
                         
                        </tr>
                    </tbody>
                    
                </table>
            </section>

            <section>
                <h3>4. भेजे गए कुल पत्रों का ब्यौरा:-</h3>
                <table border="1">
                    <tbody>
                        <tr>
                            <td rowspan="2"></td>
                            <td>हिंदी में</td>
                            <td>अंग्रेजी में</td>
                            <td>भेजे गए पत्रों की संख्या</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>'क' छेत्र को</td>
                            <td><input type="text" name="sent1" id="sent1" required></td>
                           
                            <td><input type="text" name="sent2" id="sent2" required></td>
                          
                            <td><input type="text" name="sent3" id="sent3" required></td>
                            
                        </tr>
                        <tr>
                            <td>'ख' छेत्र को</td>
                            <td><input type="text" name="sent4" id="sent4" required></td>
                           
                            <td><input type="text" name="sent5" id="sent5" required></td>
                           
                            <td><input type="text" name="sent6" id="sent6" required></td>
                           
                        </tr>
                        <tr>
                            <td>'ग' छेत्र को</td>
                            <td><input type="text" name="sent7" id="sent7" required></td>
                           
                            <td><input type="text" name="sent8" id="sent8" required></td>
                          
                            <td><input type="text" name="sent9" id="sent9" required></td>
                           
                        </tr>
                    </tbody>
                </table>
            </section>
            

            <section>
                <h3>5. (तिमाही के दौरान) फ़ाइलों/दस्तावेजों पर लिखी गई टिप्पणियां</h3>
                <label for="hindiComments">हिंदी में लिखी गई टिप्पणियों के पृष्ठों की संख्या</label>

                <br>
                <br/>

                <input type="text" name="hindiComments" id="hindiComments" required>
               
                <br>
                <br/>

                <label for="englishComments">अंग्रेजी में लिखी गई टिप्पणियों के पृष्ठों की संख्या</label>

                <br>
                <br/>

                <input type="text" name="englishComments" id="englishComments" required>
               
                <br>
                <br/>

                <label for="totalComments">कुल टिप्पणियों के पृष्ठों की संख्या</label>

                <br>
                <br/>

                <input type="text" name="totalComments" id="totalComments" required>
                
                <br>
                <br/>
            
            <section>
                <div>

                    <p> * पृष्ठों की संख्या की गणना पूर्ण अंक एवं आधा अंक में ही की जाए</p>
                   
                    
                </div>

            </section>    

            </section>

            <section>
                <h3>6. हिंदी कार्यशालाएं</h3>

                <br>
                <br/>

                <p>नोट:-  कार्यालय के समस्त कार्मिकों को 2 वर्ष में कम से कम एक बार प्रशिक्षित किया जाना आवश्यक है</p>
            </section>

            <br>
            <br/>

            <section>
                <label for="committeeMeetingDate">7. विभागीय संगठनीय राजभाषा कार्यान्वयन समिति की बैठक के आयोजन की तिथि</label>

                <br>
                <br/>

                <input type="date" name="committeeMeetingDate" id="committeeMeetingDate" required>
               
                <br>
                <br/>

                <label for="centralOfficeMeetingDate">(क) राजभाषा कार्यान्वयन समिति की बैठक की तिथि (केंद्रीय प्रधान कार्यालय की)</label>

                <br>
                <br/>

                <input type="date" name="centralOfficeMeetingDate" id="centralOfficeMeetingDate" required>
     
                <br>
                <br/>

                <label for="subordinateCommitteeCount">(ख) अधीनस्थ कार्यालयों में गठित राजभाषा कार्यान्वयन समितियों की संख्या</label>

                <br>
                <br/>

                <input type="text" name="subordinateCommitteeCount" id="subordinateCommitteeCount" required>
              
                <br>
                <br/>

                <label for="quarterlyMeetingsCount">(ग) इस तिमाही में आयोजित बैठकों की संख्या</label>

                <br>
                <br/>

                <input type="text" name="quarterlyMeetingsCount" id="quarterlyMeetingsCount" required>
                
                <br>
                <br/>

                <label for="meetingProceedingsInHindi">(घ) बैठकों से संबंधित कार्य सूची और कार्यव्रतत क्या हिंदी में जारी किए गए</label>

                <br>
                <br/>

                <select name="meetingProceedingsInHindi" id="meetingProceedingsInHindi" required>
                    <option value="YES">हाँ</option>
                    <option value="NO">नहीं</option>
                </select>    
            </section>

            <br>
            <br/>

            <section>
                <label for="hindiAdvisoryCommitteeMeetingDate">8. हिंदी सलाहकार समिति की बैठक के आयोजन की तिथि (केवल मंत्रालयों/विभागों के लिए)</label>

                <br>
                <br/>

                <input type="date" name="hindiAdvisoryCommitteeMeetingDate" id="hindiAdvisoryCommitteeMeetingDate" required>
             
            </section>

            <br>
            <br/>

            <section>
                <label for="notableAchievements">9. तिमाही में किए गए उल्लेखनीय कार्य उपलब्धियों का संक्षिप्त विवरण (अधिकतम 250 कैरेक्टर)</label>

                <br>
                <br/>

                <textarea maxlength="250" name="notableAchievements" id="notableAchievements" required></textarea>
                
            </section>

            <br>
            <br/>

            <p>
                उल्लिखित सूचना उपलब्ध अभिलेखों के आधार पर बनाई गई हैं तथा मेरी जानकारी के अनुसार सही है |
            </p>

            <br>
            <br/>

            <section>
                <div>
                     <!-- <label for="Signature">मंत्रालय/विभाग/संगठन की राजभाषा कार्यान्वयन समिति के अध्यक्ष के हस्ताक्षर</label>

                    <br>
                    <br/>

                    <input type="file" name="Signature" id="Signature" required>
                    <br>
                    <br/>   -->
                    <label for="chairmanName">अध्यक्ष का नाम</label>

                    <br>
                    <br/>

                    <input type="text" name="chairmanName" id="chairmanName" required>
                    
                    <br>
                    <br/>

                    <label for="designation">पदनाम</label>

                    <br>
                    <br/>

                    <input type="text" name="designation" id="designation" required>
                    
                    <br>
                    <br/>

                    <label for="PHnumber">फ़ोन नम्बर</label>

                    <br>
                    <br/>

                    <input type="text" name="PHnumber" id="PHnumber" required>
                   
                    <br>
                    <br/>

                    <label for="faxNumber">फैक्स नंबर</label>

                    <br>
                    <br/>

                    <input type="text" name="faxNumber" id="faxNumber" required>
                 
                    <br>
                    <br/>

                    <label for="emailAddress">ई-मेल का पता</label>

                    <br>
                    <br/>

                    <input type="text" name="emailAddress" id="emailAddress" required>
                   

                </div>
            </section>

            <br>
            <br/>

            <div>
                <p>
                    नोट:- कोई भी कॉलम खाली न छोड़ा जाए और सूचना स्पष्ट रूप से दी जाए |
                </p>
            </div>
            <button type="submit">Submit</button>
        </form>       
    </div>
</body>
</html>  