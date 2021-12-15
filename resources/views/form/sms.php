<?php require_once "../inc/header.php"; ?>
<?php if (isset($_GET['StudentClass']) && isset($_GET['date_month'])) {
    $StudentClass = $_GET['StudentClass'];
    $date_month = $_GET['date_month'];
    $month = explode('-', $date_month);
    $month = $month[0] . '-' . $month[1];
    ?>
<a style="margin-bottom:12px;" class="btn btn-info mt-5" href="<?php echo $rootDomain; ?>Attendance/Monthly/<?php echo $StudentClass . '/' . $month; ?>"> Go Bank</a>
<?php
$sql = $conn->query("SELECT * FROM `attendance` WHERE `studentClass` LIKE '$StudentClass' AND `AttendaceDate` LIKE '$date_month' AND `attendenceValue` LIKE 'Absent'");
$sql2 = $conn->query("SELECT * FROM `attendance` WHERE `studentClass` LIKE '$StudentClass' AND `AttendaceDate` LIKE '$date_month'");
$sql3 = $conn->query("SELECT * FROM `attendance` WHERE `studentClass` LIKE '$StudentClass' AND `AttendaceDate` LIKE '$date_month' AND `SmsStatus` LIKE 'Published'");
$count = $sql->num_rows;
$count2 = $sql2->num_rows;
$count3 = $sql3->num_rows;
if ($count3) {
    echo '<div class="alert alert-danger alert-dismissible" role="alert"><strong>Sms Already Successfully Sent ! <a  href="' .
        $rootDomain .
        'Attendance/Monthly/' .
        $StudentClass .
        '/' .
        $month .
        '"> Go Bank</a> </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
} else {
    $counter = 1;
    if ($count) {
        while ($row = $sql->fetch_object()) {
            $phone = $row->phoneNumber . ",";
            $to = "$phone";
            $token = "26ec0f5a47f19074d240c7020e80483e";
            $message = "hello all";
            $url = "http://api.greenweb.com.bd/api2.php";
            $data = [
                'to' => "$to",
                'message' => "$message",
                'token' => "$token",
            ]; // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
            //Result
            $smsresult;
            echo '<div class="alert alert-success alert-dismissible" role="alert"><strong>' .
                $counter .
                ' : ' .
                $smsresult .
                '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            //Error Display
            curl_error($ch);
            $counter++;
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert"><strong>No Absent Student Found !</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    while ($rows = $sql2->fetch_object()) {
        $id = $rows->id;
        $sqlUpdate = $conn->query("UPDATE `attendance` SET `SmsStatus` = 'Published' WHERE `attendance`.`id` = $id");
    }
}
} ?>
<?php require_once '../inc/footer.php'; ?>
