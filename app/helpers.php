<?php

function maxStr($variable, $maxStr){
    if (strlen($variable) > $maxStr) {
        return substr($variable, 0, $maxStr)."...";
    } else {
        return $variable;
    };
};

function nbPosts($variable){
    if (count($variable) !== 0){
        return count($variable);
    };
};

?>