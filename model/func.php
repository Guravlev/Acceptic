<?php
function about_user($db){

    $query = $db->query("SELECT * FROM auth_login ORDER BY id ");
    $result = mysqli_query($db, $query);

    if(!$result)
        die(mysqli_error($db));

    $n = mysqli_num_rows($result);
    $auth_login = array();

    for ($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $auth_login[] = $row;
    }

    return $auth_login;
}
function info_get($db, $id_article){

    $query =  $db->query("SELECT * FROM auth_login WHERE id='%d'", (int)$id_article);
    $result = mysqli_query($db, $query);

    if (!$result)
        die(mysqli_error($db));

    $article = mysqli_fetch_assoc($result);

    return $article;
}

function info_edit($db, $id, $name, $email){

    $name= trim($name);
    $email = trim($email);
    $id = (int)$id;

    $sql =  $db->query("UPDATE auth_login SET name='%s', email='%s' WHERE id=%d");

    $query = sprintf($sql, mysqli_real_escape_string($db, $name),
        mysqli_real_escape_string($db, $email ),
        $id);
    $result = mysqli_query($db, $query);
    if (!$result)
        die(mysqli_error($db));
    return mysqli_affected_rows($db);
}
