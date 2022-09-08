<?php

require "classes.php";


$attr  = new Attributes();
$style = new STYLE();
$doc   = new DOC();

$data = DOC::openHTML(
    $attr->setAttr("dir", "ltr")->setAttr("style",$style->padding('','10px','10px','10px','10px')->get())->get(),
    DOC::openHEAD(
        '',
        DOC::openTitle('', "this is first test")
    ),
    DOC::openBODY(
        '',
        DOC::openTAG(
            "h1",
            '',
            "This is first Test of This Script!"
        ),
        DOC::openTAG("br"),
        DOC::openTAG(
            "select",
            "",
            DOC::openTAG("option",'',"first option"),
            DOC::openTAG("option",'',"first option"),
            DOC::openTAG("option",'',"first option"),
            DOC::openTAG("option",'',"first option"),
            DOC::openTAG("option",'',"first option"),
        ),

        DOC::openScript("","document.log('test')")
    )
);

// Result

/** 
<html dir="ltr" style="padding : 10px 10px 10px 10px;">
<head>
    <title>this is first test</title>
</head>
<body>

<h1>This is first Test of This Script!</h1>

<br/>

<select>
    <option>first option</option>
    <option>first option</option>
    <option>first option</option>
    <option>first option</option>
    <option>first option</option>
</select>

<script>document.log('test')</script>
</body>
</html>
**/
