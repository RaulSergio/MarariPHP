<?php

//executa querys

function DBExecute($query){
    $link = DBConnect();
    $result = @mysqli_query($link,$query) or die(mysqli_error($link));

    DBClose($link);
    return $result;
}

//funcao de cadastro

function DBCreate($table,array $data){
    $data = DBEscape($data);

    //separa as chaves do array por virgula
    $fields = implode(', ',array_keys($data));
    $values = "'".implode("', '",$data)."'";

    $query = "INSERT INTO {$table}({$fields}) VALUES({$values})";

    return DBExecute($query);
}

// ler registros
function DBRead($table,$params = null,$fields = '*'){
    $params = ($params) ? " {$params}" : null;

    $query = "SELECT {$fields} FROM {$table}{$params}";
    $result = DBExecute($query);

    if(!mysqli_num_rows($result)){
        return false;
    }else{
        while ($res = mysqli_fetch_assoc($result)){
            $data[] = $res;
        }
        return $data;
    }


}
