<?php
function CekSession($password, $passForm)
{
    if ($password == $passForm)
        header('Location: index.php');
    else
        header('Location: FormLogin.php?Login=Invalid');
    exit();
}

function GetPassword($pdo, $nomor_member)
{
    $sql = "SELECT password_member FROM member WHERE nomor_member = $nomor_member";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $member = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $member;
}
