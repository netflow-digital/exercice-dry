<?php

class Router
{
    private $page;
    public function __construct()
    {
        //permet d'accéder dans les méthodes à $page
        $this->page = $page = isset($_GET["page"]) ? $_GET["page"] : "accueil";
    }
    public function getPage(): string
    {
        return $this->page;
    }

    public function includeTemplate()
    {
        if (file_exists(PAGES . $this->page . ".php")) {
            include PAGES . $this->page . ".php";
        } else {
            include PAGES . "page404.php";
        }
    }
}
