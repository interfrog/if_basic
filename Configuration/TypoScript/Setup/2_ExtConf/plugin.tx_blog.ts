plugin.tx_blog {
    view {
        templateRootPaths.10 = {$config.pluginPath}/blog/Templates/
        partialRootPaths.10 = {$config.pluginPath}/blog/Partials/
        layoutRootPaths.10 = {$config.pluginPath}/blog/Layouts/
    }
    _LOCAL_LANG.de.widget {
    	recentPosts = Letzte Blogbeiträge
    	categories = Kategorien
    	recentComments = Letzte Kommentare
    	archive = Archiv
    	tags = Tags
    	rssFeed = RSS-Feed abonnieren
    }
    _LOCAL_LANG.en.widget {
    	recentPosts = Recent Posts
    	categories = Categories
    	recentComments = Recent Comments
    	archive = Archive
    	tags = Tags
    	rssFeed = Get RSS-Feed
    }
}