<?php

namespace Http\Controller;

class UserController {

    public function tester() {
        return $twig->render('index.html', ['name' => 'Fabien']);
    }
    
}