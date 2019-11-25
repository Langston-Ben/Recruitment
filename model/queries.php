<?php

require_once 'connections.php';

function getTest($query){
    $db = RecrConnect();
    $sql = $query;
    
    
    $stmt = $db->prepare($sql);
  //  $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
//    $stmt->bindValue($query, PDO::PARAM_STR);
    $stmt->execute();
    $reviewInfo = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    
    return $reviewInfo;
}


Function getQ1($value){
    $db = RecrConnect();
    $sql = 'Select * From Table1';
    
    
    $stmt = $db->prepare($sql);
  //  $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
//    $stmt->bindValue($query, PDO::PARAM_STR);
    $stmt->execute();
    $q1Info = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    
    return $q1Info;
}