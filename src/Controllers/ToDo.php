<?php

namespace ToDo\Controllers;

class ToDo extends BaseController
{

    /**
     * @param int $page
     */
    public function getTasksList(int $page = 0)
    {
        $this->container->twig->display('tasks_list.html.twig', [

        ]);
    }
}
