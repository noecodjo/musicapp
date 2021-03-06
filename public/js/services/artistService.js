'use strict';

musicApp.factory('ArtistService', function ($http) {
  return {
    // get all the artists
    get: function () {
      return $http.get('/api/artists');
    },
    getBySlug: function (slug) {
      return $http.get('/api/artist/' + slug);
    }
  }
});