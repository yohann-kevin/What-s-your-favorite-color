<?php
function red() {
        global $bdd;

        $u = $bdd->query('SELECT number FROM colors WHERE id = 1');

        $u = $u->fetch();

        return $u;
}

function blue() {
    global $bdd;

    $v = $bdd->query('SELECT number FROM colors WHERE id = 2');

    $v = $v->fetch();

    return $v;
}

function yellow() {
    global $bdd;

    $w = $bdd->query('SELECT number FROM colors WHERE id = 3');

    $w = $w->fetch();

    return $w;
}

function green() {
    global $bdd;

    $x = $bdd->query('SELECT number FROM colors WHERE id = 4');

    $x = $x->fetch();

    return $x;
}

function purple() {
    global $bdd;

    $y = $bdd->query('SELECT number FROM colors WHERE id = 5');

    $y = $y->fetch();

    return $y;
}

function orange() {
    global $bdd;

    $z = $bdd->query('SELECT number FROM colors WHERE id = 6');

    $z = $z->fetch();

    return $z;
}