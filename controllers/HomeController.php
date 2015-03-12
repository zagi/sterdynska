<?php

Class HomeController
{
    public function index()
    {
        App::render('welcome.twig');
    }
}