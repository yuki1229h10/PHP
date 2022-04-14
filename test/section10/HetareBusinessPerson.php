<?php
require_once 'test/section10/BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson
{
    public function work(): void
    {
        parent::work();
        print 'ただし、うゔぉあ';
    }
}
