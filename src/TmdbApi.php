<?php

namespace Moaj257\TmdbApi;

use Moaj257\TmdbApi\Repository\MovieRepository;
use Moaj257\TmdbApi\Repository\TvShowRepository;
use Moaj257\TmdbApi\Repository\TvSeasonRepository;
use Moaj257\TmdbApi\Repository\TvEpisodeRepository;
use Moaj257\TmdbApi\Repository\SearchRepository;

class TmdbApi {
    private $movieRepository;
    private $tvShowRepository;
    private $tvSeasonRepository;
    private $tvEpisodeRepository;
    private $searchRepository;

    public function __construct(
        MovieRepository $movieRepository,
        TvShowRepository $tvShowRepository,
        TvSeasonRepository $tvSeasonRepository,
        TvEpisodeRepository $tvEpisodeRepository,
        SearchRepository $searchRepository
    ) {
        $this->movieRepository = $movieRepository;
        $this->tvShowRepository = $tvShowRepository;
        $this->tvSeasonRepository = $tvSeasonRepository;
        $this->tvEpisodeRepository = $tvEpisodeRepository;
        $this->searchRepository = $searchRepository;
    }

    public function movies(): MovieRepository {
        return $this->movieRepository;
    }

    public function tvShows(): TvShowRepository {
        return $this->tvShowRepository;
    }

    public function tvSeasons(): TvSeasonRepository {
        return $this->tvSeasonRepository;
    }

    public function tvEpisodes(): TvEpisodeRepository {
        return $this->tvEpisodeRepository;
    }

    public function search(): SearchRepository {
        return $this->searchRepository;
    }
}