<?php 

$url = 'xmlfile.xml';
$xml = simplexml_load_file($url); 

class Rxml 
{
    public function readXml($url)
    {
        $filename = 'data.csv';       
        header("Content-type: text/csv");       
        header("Content-Disposition: attachment; filename=$filename");       
        $output = fopen("php://output", "w");  
        $header= ['generated id', 'first name', 'surname'];
        fputcsv($output, $header,',','"');   

    	$xml = simplexml_load_file($url);
        if ($xml  != '') 
        {
            $count = 1;
            foreach($xml->person as $getXml)
            {
                $getCount = $count ++;
                $row = array(

                    $getCount,
                    $getXml->firstName,
                    $getXml->surname
                );

                fputcsv($output, $row,',','"');
            }
        } 
        else 
        {
          exit('Failed to open xmlfile.xml.');
        }


    fclose($output);
    
    }

}

$base = new Rxml();
$base->readXml($url);   
?>