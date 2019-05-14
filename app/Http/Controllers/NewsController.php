<?php

namespace App\Http\Controllers;

Use Feeds;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $feed = Feeds::make([
            //Official Social Media
            'https://newsroom.fb.com/feed/',
            'https://www.facebook.com/business/news/rss',
            'https://blog.linkedin.com/topics.rss.html',
            'https://newsroom.pinterest.com/en/feed/posts.xml',

            //Google
            'https://www.blogger.com/feeds/32069983/posts/default',
            'https://www.blogger.com/feeds/1090964379634258791/posts/default',
            'https://www.blog.google/products/ads/rss/',
            'https://www.blog.google/products/marketingplatform/360/rss/',

            //Tech Blogs
            'https://9to5mac.com/guides/whatsapp/feed/',
            'https://9to5mac.com/guides/facebook/feed/',
            'https://9to5mac.com/guides/instagram/feed/',
            'https://9to5mac.com/guides/twitter/feed/',
            'https://9to5mac.com/guides/linkedin/feed/',

            'https://9to5google.com/guides/whatsapp/feed/',
            'https://9to5google.com/guides/facebook/feed/',
            'https://9to5google.com/guides/instagram/feed/',
            'https://9to5google.com/guides/twitter/feed/',
            'https://9to5google.com/guides/linkedin/feed/',

            //Others
            'https://www.marketingweek.com/feed/',
            'http://feeds.searchengineland.com/searchengineland',
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
            'https://yoast.com/seo-blog/feed/',
            'https://www.theverge.com/rss/facebook/index.xml',
            'https://www.theverge.com/rss/google/index.xml',
            'https://www.adweek.com/feed/',
            'https://www.admonsters.com/feed/',
            'http://feeds2.feedburner.com/ad-exchange-news',
            'https://www.adteachings.com/rss',
            'http://davetrott.co.uk/feed/',
            'https://www.creativereview.co.uk/feed/',
            'https://feeds2.feedburner.com/itsnicethat/SlXC',
            'https://www.fastcompany.com/co-design/rss',
            'https://www.moderncopywriter.com/feed/',
            'http://feedpress.me/mozblog',
            'https://blog.hubspot.com/marketing/rss.xml',
            'https://www.semrush.com/blog/feed/',
            'https://www.adweek.com/agencyspy/feed/',
            'http://feeds.feedburner.com/GreatAds',
            'https://www.adsoftheworld.com/node/feed',
            'https://mashable.com/category/social-media/feed/'
        ], 3, true);
    
        $data = array(
          'items'     => $feed->get_items(),
        );

        return view('news.index', $data);
    }
}
