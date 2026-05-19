<?php

class Core {

    public function ip () {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function refresh () {
        return '<meta http-equiv="refresh" content="0"/>';
    }

}