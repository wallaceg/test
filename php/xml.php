<?php
$entity = new stdClass();
$entity->id = 1;
$entity->description = 'entity 1';

$entity->sub_entity = new stdClass();
$entity->sub_entity->id = 2;
$entity->sub_entity->description = 'entity 2';

$entity->sub_entity->sub_sub_entity = new stdClass();
$entity->sub_entity->sub_sub_entity->id = 3;
$entity->sub_entity->sub_sub_entity->description = 'entity 3';

$entity->sub_entity2 = new stdClass();
$entity->sub_entity2->id = 4;
$entity->sub_entity2->description = 'entity 4';

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><' . get_class($entity) . '></' . get_class($entity) . '>');

create_xml($xml, $entity);

echo $xml->asXML();

header('Content-Type: application/xml; charset=utf-8');

function create_xml(&$xml, $entity){  
  foreach ($entity as $key => $value){
    if(is_object($value)){
      $node = $xml->addChild($key);
      create_xml($node, $value);
    } else {
      $xml->addChild($key, $value);
    }
  }
  return $xml;
}




/*$xml->addChild('datetime', date('Y-m-d H:i:s'));

$person = $xml->addChild('person');

$person->addChild('firstname', 'Someone');

$person->addChild('secondname', 'Something');

$person->addChild('telephone', '123456789');
$person->addChild('email', 'me@something.com');
$address = $person->addchild('address');
$address->addchild('homeaddress', 'Andersgatan 2, 432 10 Goteborg');
$address->addChild('workaddress', 'Andersgatan 3, 432 10 Goteborg');
*/