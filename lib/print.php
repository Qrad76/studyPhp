<?php
function print_title()
{
    $aa = isset($_GET['id']);
    if ($aa) {
        echo htmlspecialchars($_GET['id']);
    } else {
        echo "Welcome";
    }
    ;
}


function print_menu()
{
    $arrayData = scandir("./data");
    // echo var_dump($arrayData);
    $i         = 0;
    while ($i < count($arrayData)) {
        if ($arrayData[$i] != '.') {
            if ($arrayData[$i] != '..') {
                echo '<li><a href="/index.php?id=' . $arrayData[$i] . '">' . $arrayData[$i] . '</a></li>';
            }
        }
        $i++;
    }
}

function print_content()
{
    $aa = isset($_GET['id']);
    if ($aa) {
        echo file_get_contents('./data/'.htmlspecialchars($_GET['id']));
    } else {
        echo "Hello, PHP";
    }
}
?>