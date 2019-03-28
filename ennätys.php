<?php

function newFeedback($name, $email, $message, $puh)
{
    define('XML_FILE', 'ennätyslista.xml');
    
    if (file_exists(XML_FILE)) {
        $xml = simplexml_load_file(XML_FILE);   
    }  else {
        return false;
    }

    $uusi_rivi = $xml->addChild('rivi');
    $uusi_rivi->addChild('name', $name);
    $uusi_rivi->addChild('email', $email);
    $uusi_rivi->addChild('message', $message);
    $uusi_rivi->addChild('puh', $puh);
    
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save(XML_FILE);
    
    return true;
}


