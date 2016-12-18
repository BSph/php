<?php

class Helper
{
    public function cutString($txt, $id)
    {
        if (strlen($txt) > 150){
            $txt = substr($txt, 0, 150);
            $space = strrpos($txt, ' ');
            $txt = substr($txt, 0, $space);
            $txt .='...';
            return $txt.'<br><a href="?page=actualites&amp;id='.$id.'">Lire la suite</a>';
        }
        else {
            return $txt;
        }
    }
}
