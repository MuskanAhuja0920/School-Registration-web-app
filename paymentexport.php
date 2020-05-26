<?php
require 'config/db.php';
//require 'PHPExcel-1.8/Classes/PHPExcel.php';

$DB_TBLName = "payment_done"; //mysqli Table Name   
$filename = "paymentdata";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create mysqli connection   
$sql = "Select * from $DB_TBLName ";
$result = mysqli_query($conn,$sql) 
or die("Couldn't execute query:<br>" . mysqli_error($conn). "<br>" . mysqli_errno($conn)); 

error_reporting(E_ALL);

 require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
 $objPHPExcel = new PHPExcel();

 // Set the active Excel worksheet to sheet 0 

$objPHPExcel->setActiveSheetIndex(0);  

// Initialise the Excel row number 

$rowCount = 1;  


//start of printing column names as names of mysqli fields  

 $column = 'A';

for ($i = 1; $i < mysqli_num_fields($result); $i++)  

{
    $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, mysqli_field_name($result,$i));
    $sheet = $objPHPExcel-> getActiveSheet();
    $sheet->getStyle('A1:B1')->getFont()->setBold(true)->setSize(16);
    
    $column++;
    
}
//setting autosize for all columns
for($col = 'A'; $col !== 'C'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setWidth(30);
      
}


//end of adding column names  
//start while loop to get data  
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
$rowCount = 2;  

while($row = mysqli_fetch_row($result))  

{  
    $column = 'A';

   for($j=1; $j<mysqli_num_fields($result);$j++)  
    {  
        if(!isset($row[$j]))  

            $value = NULL;  

        elseif ($row[$j] != "")  

            $value = strip_tags($row[$j]);  

        else  

            $value = "";  


        $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
        $column++;
    }  

    $rowCount++;
} 
//applying a colour to excel sheet
$objPHPExcel->getActiveSheet()
    ->getStyle('A1:B1')
    ->getFill()
    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
    ->getStartColor()
    ->setARGB('FF808080');
 
    // adding borders
    $styleArray = array(
        'borders' => array(
          'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
          )
        )
      );
      
      $objPHPExcel->getActiveSheet()->getStyle('A1:AK2000')->applyFromArray($styleArray);
      unset($styleArray);

// Redirect output to a client’s web browser (Excel5) 
header('Content-Type: application/vnd.ms-excel'); 
header("Content-Disposition: attachment;filename=$filename.xls"); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 


$objWriter->save('php://output');