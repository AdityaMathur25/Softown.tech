<?php

include('../../../links/css.php');

require('../../../db/auth_session.php');
include '../../../db/dev_check.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    /* 
       Up to you which header to send, some prefer 404 even if 
       the files does exist for security
    */
    header('HTTP/1.0 403 Forbidden', TRUE, 403);

    /* choose the appropriate page to redirect users */
    die(header('location: ../'));
}

function random_strings($length_of_string)
{

    // String of all alphanumeric character
    $str_result = '0123456789';

    // Shuffle the $str_result and returns substring
    // of specified length
    $a =  substr(
        str_shuffle($str_result),
        0,
        $length_of_string
    );
    $b = "add";
    return $b . $a;
}
if (isset($_POST["submit"])) {

    # code...

    // This function will generate
    // Random string of length 10


    ob_end_clean();
    require('../../../fpdf/fpdf.php');

    // Instantiate and use the FPDF class 
    class PDF extends FPDF
    {

        // Page header
        function Header()
        { 
            $un = $_POST['un']; 
             $payment = $_POST['mode'];
            include('../../../db/db.php');
            $amount = $_POST['amount'];
            if(!isset($_post["promo"])) {
                $promo = 'Not Applicable';
            }
            else {
                # code...
                  $promo = $_POST['promo'];
            }
          
            // $promo = $_POST['promo'] ?? 'Not Applicable';
            
            $o_id =  random_strings(10);
            include('../../../db/db.php');
            // INSERT into `purchased_products` (product_id, product_name, buyer_name ,developer_name,price,product_group) VALUES ('$id', '$soft_name', '$user','$dev','$price','$soft_type')"
            $sql = "INSERT INTO `add_balance` (`id`, `order_id`, `username`, `promocode`, `amount`, `method`, `status`) VALUES (NULL, '$o_id', '$un', '$promo', '$amount', '$mode', 'pending')";
            $records = mysqli_query($con, $sql); // fetch data from database

            // Add logo to page
            $this->SetDrawColor(64, 64, 64);
            $this->SetFillColor(200, 255, 160);
            $this->SetLineWidth(0.5);
            $this->Line(10, 14, 198, 14);
            $this->Line(10, 282, 198, 282);
            $this->SetFont("Courier", "I", 10);
            $this->Text(10, 287, "Softown.Tech");
            // $this->SetTextProp ("FOOTRNB1", 185, 287, -1, -1, 0, 0, 0,"Courier", "I", 9);  
            $this->SetTextColor(0, 0, 0);
            $this->SetFont("Times", "I", 24);
            $this->Text(15, 30, "Softown.tech Add Balance ");
            $this->Image('../../../assets/images/12.png', 60, 100, 100);
            $this->SetLineWidth(0.3);
            $this->Rect(15, 50, 180, 55, "D");
            $this->Rect(15, 50, 180, 10, "DF");
            $this->SetFont("Arial", "", 12);
            $this->Text(85, 56, "Order Information (Request)");;
            $this->SetFont("Arial", "", 9);
            $this->Text(20, 70, "Order ID : " . $o_id);
            $this->Text(20, 77, "Order Value : " . $amount);
            $this->Text(20,84, "Payment Mode : " . $payment);
            $this->Text(20, 90, "Promocode : " . $promo);  
            $this->Text(20, 96, "Username : " . $un);
            date_default_timezone_set('India/Kolkata');
$date = date('m/d/Y h:i:s a', time());   ;
            $this->Text(20, 102, "Current Date and Time : " . $date);                               

        }

        // Page footer
        function Footer()
        {

            // Position at 1.5 cm from bottom
            $this->SetY(-15);

            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);

            // Page number
            $this->Cell(0, 10, 'Page ' .
                $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    // Instantiation of FPDF class
    $pdf = new PDF();

    // Define alias for number of pages
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 14);
    $pdf->Output();
}
