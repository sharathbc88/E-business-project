<?php
include_once('config.php');


function display_jewelry($sql_result)
{
    print "<table border = 1>\n";

    //get field names
    print "<tr>\n";
    while ($field = $sql_result -> fetch_field()){
        $fieldname = strtoupper($field->name);
        print "  <th>$fieldname</th>\n";
    } // end while
    print "</tr>\n\n";

    //get row data as an associative array
    while ($row = $sql_result -> fetch_assoc()){
        print "<tr>\n";
        //look at each field
        $id = $row["id"];
        $name = $row["name"];
        $price = number_format($row["price"],2);
        $description = $row["description"];

        print "  <td><a href='jewelry_details.php?id=$id&name=$name' title='Book Details'>$id</a></td>\n";
        if($id)
            print "  <td>$id</td>\n";
        else
            print "&nbsp;";
        if($name)
            print "  <td>$name</td>\n";
        else
            print "&nbsp;";
        print " <td>$price</td>\n";
        if($description)
            print "  <td>$description</td>\n";
        else
            print "<td>&nbsp;</td>\n";
        print "</tr>\n\n";
    }// end while

    print "</table>\n";
//    print "<h2>Back to <a href='categories.php'>Categories</a> page</h2>\n";
}
function display_jewelry_detail($sql_result)
{

    print "<table border = 1>\n";

    //get field names
    print "<tr>\n";
    while ($field = $sql_result -> fetch_field()){
        $fieldname = strtoupper($field->name);
        if($fieldname != "CATID" and $fieldname != "CATNAME")
            print "  <th>$fieldname</th>\n";
    } // end while
    //additional name for a new column to display images
    print "  <th>IMAGE</th>\n";
    print "</tr>\n\n";

    //get row data as an associative array
    if ($row = $sql_result -> fetch_assoc()){
        //look at each field
        $id = $row["id"];
        $name = $row["name"];
        $price = number_format($row["price"],2);
        $description = $row["description"];

    }

    print "<tr>\n";

    //output
    print "  <td>$id</td>\n";
    if($name)
        print "  <td>$name</td>\n";
    else
        print "&nbsp;";

    print " <td>$price</td>\n";

    if($description)
        print "  <td>$description</td>\n";
    else
        print "<td>&nbsp;</td>\n";

    if (@file_exists('assets/img/jewelry/'.$id.'.jpg'))
    {
        $imagepath = 'assets/img/jewelry/'.$id.'.jpg' ;
        print "  <td align=center><img src = $imagepath width=60 height=60></td>\n";
    }
    else
    {
        print "&nbsp;";
    }

    print "</tr>\n\n";
    print "</table>\n";

//    print "<h2>Back to <a href='books.php?catid=$catid&catname=$catname' title='Books'>$catname</a> page</h2>\n";
}
