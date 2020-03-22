<?php

namespace App\Http\Controllers\Api\v1;

use Feeds;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedController extends Controller
{
    public function feed()
    {
        $feed = Feeds::make('https://dev98.de/feed/');
        $items = $feed->get_items();

        $articles = [];
        foreach ($items as $item) {
            $article = [
                'id' => $item->get_item_tags('com-wordpress:feed-additions:1', 'post-id')[0]['data'],
                'title' => $item->get_title(),
                'description' => str_replace("Read More", "", $item->get_description()),
                'content' => $item->get_content(),
                'author' => $item->get_author()->name,
                'date' => date('Y-m-d', strtotime($item->get_date()))
            ];

            array_push($articles, $article);
        }

        return $articles;
    }

    public function article($id)
    {
        $feed = Feeds::make('https://dev98.de/feed/');
        $items = $feed->get_items();

        $article = [];
        foreach ($items as $item) {
            if ($item->get_item_tags('com-wordpress:feed-additions:1', 'post-id')[0]['data'] == $id) {
                $article = [
                    'id' => $item->get_item_tags('com-wordpress:feed-additions:1', 'post-id')[0]['data'],
                    'title' => $item->get_title(),
                    'description' => str_replace("Read More", "", $item->get_description()),
                    'content' => $item->get_content(),
                    'author' => $item->get_author()->name,
                    'date' => date('Y-m-d', strtotime($item->get_date()))
                ];

                break;
            }
        }

        return $article;
    }
}
