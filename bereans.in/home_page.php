<?php
	session_start();
	$xml=simplexml_load_file("index.xml");
	
	$doc = new DOMDocument();
        $doc->formatOutput = true;
        
        
        
        $index = $doc->createElement("index");
        $doc->appendChild($index);
              
	if(!empty($_FILES['image']['name'])) {
		$target = "images/";
		$target = $target."cover_pic.jpg";
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
	}
	
	$d = $doc->createElement("description");
	if($_POST['description']!="") 
		$d->appendChild($doc->createTextNode($_POST['description']));
	else 
		$d->appendChild($doc->createTextNode($xml->description));
	
	$index->appendChild($d);
	
	$t = $doc->createElement("thought");
	if($_POST['thought']!="")
		$t->appendChild($doc->createTextNode($_POST['thought']));
	else
		$t->appendChild($doc->createTextNode($xml->thought));
	$index->appendChild($t);
	
	$i = $doc->createElement("image1");       
	if($_POST['image11']!="") 
		$i->appendChild($doc->createTextNode($_POST['image11']));
	else {
		if(!empty($_FILES['image12']['name'])) {
			$target = "images/";
			$target = $target.basename( $_FILES['image12']['name']);
			move_uploaded_file($_FILES['image12']['tmp_name'], $target);
			$i->appendChild($doc->createTextNode($target));
		}	
		else
			$i->appendChild($doc->createTextNode($xml->image1));
	}
	$index->appendChild($i);
	
	$t = $doc->createElement("title1");
	if($_POST['title1']!="")
		$t->appendChild($doc->createTextNode($_POST['title1']));
	else
		$t->appendChild($doc->createTextNode($xml->title1));
	$index->appendChild($t);
		
	$d = $doc->createElement("description1");
	if($_POST['description1']!="")
		$d->appendChild($doc->createTextNode($_POST['description1']));
	else
		$d->appendChild($doc->createTextNode($xml->description1));
	$index->appendChild($d);
		
	$i = $doc->createElement("image2");       
	if($_POST['image21']!="") 
		$i->appendChild($doc->createTextNode($_POST['image21']));
	else {
		if(!empty($_FILES['image22']['name'])) {
			$target = "images/";
			$target = $target.basename( $_FILES['image22']['name']);
			move_uploaded_file($_FILES['image22']['tmp_name'], $target);
			$i->appendChild($doc->createTextNode($target));
		}	
		else
			$i->appendChild($doc->createTextNode($xml->image2));
	}
	$index->appendChild($i);
	
	$t = $doc->createElement("title2");
	if($_POST['title2']!="")
		$t->appendChild($doc->createTextNode($_POST['title2']));
	else
		$t->appendChild($doc->createTextNode($xml->title2));
	$index->appendChild($t);
	
	$d = $doc->createElement("description2");
	if($_POST['description2']!="")
		$d->appendChild($doc->createTextNode($_POST['description2']));
	else
		$d->appendChild($doc->createTextNode($xml->description2));
	$index->appendChild($d);
	
	$i = $doc->createElement("image3");       
	if($_POST['image31']!="") 
		$i->appendChild($doc->createTextNode($_POST['image31']));
	else {
		if(!empty($_FILES['image32']['name'])) {
			$target = "images/";
			$target = $target.basename( $_FILES['image32']['name']);
			move_uploaded_file($_FILES['image32']['tmp_name'], $target);
			$i->appendChild($doc->createTextNode($target));
		}	
		else
			$i->appendChild($doc->createTextNode($xml->image3));
	}
	$index->appendChild($i);
	
	$t = $doc->createElement("title3");
	if($_POST['title3']!="")
		$t->appendChild($doc->createTextNode($_POST['title3']));
	else
		$t->appendChild($doc->createTextNode($xml->title3));
	$index->appendChild($t);
		
	$d = $doc->createElement("description3");
	if($_POST['description3']!="")
		$d->appendChild($doc->createTextNode($_POST['description3']));
	else
		$d->appendChild($doc->createTextNode($xml->description3));
	$index->appendChild($d);
	
	$doc->savexml();
	$doc->save("index.xml");
	
	$_SESSION['changes'] = "Changes have been made";
	header("Location:admin.php");
?>
