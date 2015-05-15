This is how to make a Curl GET Request

$parameters = array(
        "circuit" => urlencode('public'),
        "fuseaction" => urlencode('lead'),
        "Campid" => urlencode('599'),
        "Suppid" => urlencode('571'),
        "Surveyid" => urlencode('5'),
        "Title" => urlencode('Mr'),
        "Forename" => urlencode('Adrian'),
        "Surname" => urlencode('Reut'),
        "Address1" => urlencode('8%20Church%20Road%20Middlesex'),
        "Finance_Insurance_PMI_CurrentlyHave" => urlencode('Yes'),
        "Postcode" => urlencode('UB3%202LH'),
        "Finance_PMI_ThruCompany" => urlencode('lead'),
        "fuseaction" => urlencode('No'),
        "TelephoneORMobile" => urlencode('2087976760'),
        "Age_Band" => urlencode('35-39'),
    );

	$post_data = '';
   //create name value pairs seperated by &
   foreach($parameters as $k => $v) 
   { 
      $post_data .= $k . '='.$v.'&'; 
   }

   // Remove the & from the last
   $post_data2 = rtrim($post_data, '&');


    $uri = "https://cleanlead.dlg.co.uk/?";
 
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$uri.$post_data2);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, false); 
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);   
 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    $output=curl_exec($ch);
 
    curl_close($ch);

	echo $output;