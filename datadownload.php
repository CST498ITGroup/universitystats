<?php
 
// force download of CSV
// simulate file handle w/ php://output, direct to output (from http://www.php.net/manual/en/function.fputcsv.php#72428)
// (could alternately write to memory handle & read from stream, this seems more direct)
// headers from http://us3.php.net/manual/en/function.readfile.php
header('Content-Description: File Transfer');
header('Content-Type: application/csv');
header("Content-Disposition: attachment; filename=page-data-export.csv");
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

$handle = fopen('php://output', 'w');
ob_clean(); // clean slate

$user = 'root';
$password = 'root';
$host = 'localhost';
$port = 8889;
$dbname="capstoneProject";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)	or die ('Could not connect to the database server' . mysqli_connect_error());

$state = $_POST['state'];
$type = $_POST['type'];

$headers = ['University Name', 
            'State', 
            'Type',
            'Applications Received',
            'Applications Accepted',
            'New Students Enrolled',
            'Students in Top 10%',
            'Students in Top 25%',
            'FT Undergrads',
            'PT Undergrads',
            'In-State Tuition',
            'Out-of-State Tuition',
            'Room',
            'Board',
            'Additional Fees',
            'Book Cost',
            'Personal Cost',
            'Faculty with PhD %',
            'Student-Faculty Ratio',
            'Graduation Rate %'];
// MySQL Query for data selection
$sql = "SELECT `College Name`, `State`, 
        IF(`Public1orPrivate2`=1, 'Public', 'Private') AS 'Public_Private', `NumberOfApplicationsReceived`,`NumberOfApplicationsAccepted`,`NumberOfNewStudentsEnrolled`,`PercentOfStudentsFromTop10Percent`,`PercentOfStudentsFromTop25Percent`,`NumberFullTimeUndergrad`,`NumberPartTimeUndergrad`,`InStateTuition`,`OutOfStateTuition`,`Room`,`Board`,`AdditionalFees`,`EstimatedBookCosts`,`EstimatedPersonalCosts`,`PercentOfFacutlyWithPhD`,`StudentFacultyRatio`,`GraduationRate`
        FROM `universities` 
        WHERE State='$state' AND Public1orPrivate2='$type'";

// Query result
$result = $con->query($sql);

 while($row = mysqli_fetch_row($result))
          {
          parse_str("data=$sql");
        
          fputcsv($handle, $row);   // direct to buffered output
          }

ob_flush(); // dump buffer
fclose($handle);
die();		
// client should see download prompt and page remains where it was    

$con->close();

?>