 <?php
  $employees = array();
  $employees [] = array(
  'name' => 'Albert',
  'age' => '34',
  'salary' => "$10000"
  );
  $employees [] = array(
  'name' => 'Claud',
  'age' => '20',
  'salary' => "$2000"
  );
  
  $doc = new DOMDocument();
  $doc->formatOutput = true;
  
  $r = $doc->createElement( "employees" );
  $doc->appendChild( $r );
  
  foreach( $employees as $employee )
  {
  $b = $doc->createElement( "employee" );
  
  $name = $doc->createElement( "name" );
  $name->appendChild(
  $doc->createTextNode( $employee['name'] )
  );
  $b->appendChild( $name );
  
  $age = $doc->createElement( "age" );
  $age->appendChild(
  $doc->createTextNode( $employee['age'] )
  );
  $b->appendChild( $age );
  
  $salary = $doc->createElement( "salary" );
  $salary->appendChild(
  $doc->createTextNode( $employee['salary'] )
  );
  $b->appendChild( $salary );
  
  $r->appendChild( $b );
  }
  
  echo $doc->saveXML();
  $doc->save("write.xml")
  ?> 
