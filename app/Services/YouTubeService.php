<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

class YouTubeService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setDeveloperKey('AIzaSyChSHypsiaGPUq0G6QQaIgVuYmCYJG4ucA'); // 自分の API キーに置き換えてください
    }

    public function searchVideos($query, $maxResults = 3)
    {
        $youtube = new Google_Service_YouTube($this->client);

        $params = [
            'q' => $query,
            'maxResults' => $maxResults,
        ];

        $response = $youtube->search->listSearch('id,snippet', $params);

        $videos = [];
        foreach ($response->items as $item) {
            $video = [
                'title' => $item->snippet->title,
                'thumbnail' => $item->snippet->thumbnails->default->url,
                'url' => 'https://www.youtube.com/watch?v=' . $item->id->videoId,
            ];
            $videos[] = $video;
        }

        return $videos;
    }
}
