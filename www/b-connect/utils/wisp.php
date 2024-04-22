<?php
  echo "
  <!--
  <?xml version=\"1.0\" encoding=\"UTF-8\"?>
  <WISPAccessGatewayParam 
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:noNamespaceSchemaLocation=\"http://www.acmewisp.com/WISPAccessGatewayParam.xsd\">
  <AuthenticationReply>
  <MessageType>120</MessageType>
  <ResponseCode>201</ResponseCode>
  ";
  if (isset($uamsecret) && isset($userpassword) && $userpassword=="pap") {
    echo "<LoginResultsURL>http://$uamip:$uamport/login?username=$username&password=$pappassword</LoginResultsURL>";
  } else {
    echo "<LoginResultsURL>http://$uamip:$uamport/login?username=$username&response=$response&userurl=$userurl</LoginResultsURL>";
  }
  echo "</AuthenticationReply> 
  </WISPAccessGatewayParam>
  -->";
  exit(0); 

