<?php
    
class Stats
{
    /**
     * Getting all stats
     *
     */
    static public function all()
    {
        global $db;
        $pages = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."posts WHERE type = 'page'"));
        $result['pages'] = $pages[0]['COUNT(*)'];
        $news = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."posts WHERE type = 'news'"));
        $result['news'] = $news[0]['COUNT(*)'];
        $cats = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."categories"));
        $result['categories'] = $cats[0]['COUNT(*)'];
        $users = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."users"));
        $result['users'] = $users[0]['COUNT(*)'];
        $comments = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."comments"));
        $result['comments'] = $comments[0]['COUNT(*)'];
        return $result;
    }
}

?>