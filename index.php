<?php

// $xmls = <<<XML

// <?xml version="1.0" encoding="UTF-8"?>
// <personnel>
//            <person>
//                        <firstName>John</firstName>
//                        <surname>Smith</surname>
//            </person>
//            <person>
//                        <firstName>Gina</firstName>
//                        <surname>Jones</surname>
//            </person>
// 	<person>
//                        <firstName>Simone</firstName>
//                        <surname>Jackson</surname>
//            </person>
// </personnel>
// XML;

$xmlstr = new SimpleXMLElement($xmls);
echo $xmlstr->personnel[0]->person;

// class Rxml 
// {
//     public function readXml ($xmls)
//     {
//     	$xmlstr = new SimpleXMLElement($xmls);
//         if ($xmlstr != '') 
//         {
//             print_r($xmlstr);
//         } 
//         else 
//         {
//           exit('Failed to open test.xml.');
//         }
//     }

// }

// $base = new Rxml();
// $base->readXml();   