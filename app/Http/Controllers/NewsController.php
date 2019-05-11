<?php

namespace App\Http\Controllers;

Use Feeds;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $feed = Feeds::make([
            //Facebook Newsroom
            'https://newsroom.fb.com/feed/',
            'https://www.facebook.com/business/news/rss',

            //Google
            // 'https://www.blogger.com/feeds/3580069/posts/default',
            'https://www.blogger.com/feeds/32069983/posts/default',
            'https://www.blogger.com/feeds/1090964379634258791/posts/default',
            'https://www.blog.google/products/ads/rss/',
            'https://www.blog.google/products/marketingplatform/360/rss/',

            //LinkedIn
            'https://blog.linkedin.com/topics.rss.html',

            //Pinterest
            'https://newsroom.pinterest.com/en/feed/posts.xml',

            //Others
            'https://www.marketingweek.com/feed/',
            'http://feeds.searchengineland.com/searchengineland',
            'http://feeds.seroundtable.com/SearchEngineRoundtable1',
            'https://www.socialmediaexaminer.com/feed/',
            'https://socialmediaexplorer.com/feed/',
            'https://www.socialbakers.com/blog/rss',
            'https://sproutsocial.com/insights/feed/',
            'https://feed.martech.zone/',
            'https://adespresso.com/feed/',
            // 'https://blogs.adobe.com/digitalmarketing/feed/',
            'https://backlinko.com/blog/feed',
            'https://coschedule.com/feed/',
            'https://digiday.com/feed/',
            'https://blog.globalwebindex.com/feed/',
            'https://influencermarketinghub.com/feed/',
            'https://www.marketingcharts.com/feed',
            'http://feeds.marketingland.com/mktingland',
            'https://blog.marketo.com/feed',
            'http://feedpress.me/searchenginejournal',
            'https://searchenginewatch.com/feed/',
            // 'http://www.thesempost.com/feed/',
            'https://yoast.com/seo-blog/feed/',

            //The Verge
            'https://www.theverge.com/rss/facebook/index.xml',
            'https://www.theverge.com/rss/google/index.xml'
        ], 3, true);
    
        $data = array(
          'items'     => $feed->get_items(),
        );

        return view('news.index', $data);
    }
}
