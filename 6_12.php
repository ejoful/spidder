<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 15:12
 *
 * 一个简单的表单分析器
 *
 */



/*
########################################################################
W3C? SOFTWARE NOTICE AND LICENSE
http://www.w3.org/Consortium/Legal/2002/copyright-software-20021231
This work (and included software, documentation such as READMEs, or other related items) is being
provided by the copyright holders under the following license. By obtaining, using and/or copying
this work, you (the licensee) agree that you have read, understood, and will comply with the following
terms and conditions.

Permission to copy, modify, and distribute this software and its documentation, with or without modification,
for any purpose and without fee or royalty is hereby granted, provided that you include the following on
ALL copies of the software and documentation or portions thereof, including modifications:

    1.The full text of this NOTICE in a location viewable to users of the redistributed or derivative work.

    2.Any pre-existing intellectual property disclaimers, notices, or terms and conditions. If none exist,
    the W3C Software Short Notice should be included (hypertext is preferred, text is permitted) within the
    body of any redistributed or derivative code.

    3.Notice of any changes or modifications to the files, including the date changes were made. (We recommend
    you provide URIs to the location from which the code is derived.)

THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR ANY PARTICULAR
PURPOSE OR THAT THE USE OF THE SOFTWARE OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS, COPYRIGHTS,
TRADEMARKS OR OTHER RIGHTS.

COPYRIGHT HOLDERS WILL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF
ANY USE OF THE SOFTWARE OR DOCUMENTATION.

The name and trademarks of copyright holders may NOT be used in advertising or publicity pertaining to the
software without specific, written prior permission. Title to copyright in this software and any associated
documentation will at all times remain with copyright holders.

Copyright 2007, Michael Schrenk

THIS SCRIPT IS FOR DEMONSTRATION PURPOSES ONLY!
    It is not suitable for any use other than demonstrating
    the concepts presented in Webbots, Spiders and Screen Scrapers.
########################################################################
*/?>



<?
setcookie("SET BY THIS PAGE", "This is a diagnostic cookie.");
?>
<head>
    <title>HTTP Request Diagnostic Page</title>
    <style type="text/css">
        p { color: black; font-weight: bold; font-size: 110%; font-family: arial}
        .title { color: black; font-weight: bold; font-size: 110%; font-family: arial}
        .text {font-weight: normal; font-size: 90%;}
        TD { color: black; font-size: 100%; font-family: courier; vertical-align: top;}
        .column_title { color: black; font-size: 100%; background-color: eeeeee; font-weight: bold; font-family: arial}
    </style>
</head>

<p class="title">Webbot Diagnostic Page</p>
<p class="text">This web page is a tool to diagnose webbot functionality by examining what the webbot sends to webservers.
<table border="1" cellspacing="0" cellpadding="3" width="800">
    <tr class="column_title">
        <th width="25%">Variable</th>
        <th width="75%">Value sent to server</th>
    </tr>
    <tr>
        <td>HTTP Request Method</td><td><?echo $_SERVER["REQUEST_METHOD"];?></td>
    </tr>
    <tr>
        <td>Your IP Address</td><td><?echo $_SERVER["REMOTE_ADDR"];?></td>
    </tr>
    <tr>
        <td>Server Port</td><td><?echo $_SERVER["SERVER_PORT"];?></td>
    </tr>
    <tr>
        <td>Referer</td>
        <td><?
            if(isset($_SERVER['HTTP_REFERER']))
                echo $_SERVER['HTTP_REFERER'];
            else
                echo "Null<br>";
            ?>
        </td>
    </tr>
    <tr>
        <td>Agent Name</td>
        <td><?
            if(isset($_SERVER['HTTP_USER_AGENT']))
                echo $_SERVER['HTTP_USER_AGENT'];
            else
                echo "Null<br>";
            ?>
        </td>
    </tr>
    <tr>
        <td>Get Variables</td>
        <td><?
            if(count($_GET)>0)
                var_dump($_GET);
            else
                echo "Null";
            ?>
        </td>
    </tr>
    <tr>
        <td>Post Variables</td>
        <td><?
            if(count($_POST)>0)
                var_dump($_POST);
            else
                echo "Null";
            ?>
        </td>
    </tr>
    <tr>
        <td>Cookies</td>
        <td><?
            if(count($_COOKIE)>0)
                var_dump($_COOKIE);
            else
                echo "Null";
            ?>
        </td>
    </tr>
</table>
<p class="text">This web page also sets a diagnostic cookie, which should be visible the second time you access this page.</p>










