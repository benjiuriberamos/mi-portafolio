<?php

namespace App\Services;

use GuzzleHttp\Client;

class GithubService
{

    private Client $client;

    private string $base_uri = 'https://api.github.com/';

    private string $github_token;

    public function __construct() {
        $this->client = new Client(['base_uri' => $this->base_uri]);
        $this->github_token = env('GITHUB_TOKEN');
    }

    public function getRepos()
    {
        $res = $this->client->get('/user/repos', [
            'headers' => [
                'Authorization'=>'bearer '. $this->github_token,
            ],
            'query' => [
                'status'=>'public'
            ],
        ]);

        if ($res->getStatusCode() !== 200) {
            return ['msje' => 'No se ha podido obtener la información del github.'];
        }

        $data = json_decode($res->getBody()->getContents(), true);
        $data = $this->getData($data);
        return $data;
    }

    private function getData($data):array
    {
        return array_map(function($ele) {
            return [
                'name' => $ele['name'],
                'url' => $ele['html_url'],
                'language' => $ele['language'],
                'watchers' => $ele['watchers'],
            ];
        }, $data);
    }
}
