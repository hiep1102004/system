<?php
function accoutList() {

    $accoutList = getAllAccout();

    require_once './views/accout/list.php';
}

function accoutDetail($id) {

    $accoutDetail = getAccoutDetail($id);

    require_once './views/accout/detail.php';
}