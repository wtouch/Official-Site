'use strict';

/* Services */

angular.module('myApp.services', [])
    .service('blogAPI', function($http, $q) {
        var _posts;

        /* Get all posts */
        this.getPosts = function() {
            var deferred = $q.defer();
            $http.get('data/posts.js').success(function(posts) {
                _posts = posts;
                deferred.resolve(posts);
            }).error(function() {
                deferred.reject('Error occured while fetching posts');
            });

            return deferred.promise;
        };

        /* Get single post with provided id */
        this.getPost = function(id) {
            var deferred = $q.defer();

            if (_posts) {
                deferred.resolve(_findPost(id));
            } else {
                this.getPosts().then(function(posts) {
                    deferred.resolve(_findPost(id));
                }, function() {
                    deferred.reject('Error occured while fetching post with id ' + id);
                });
            }

            return deferred.promise;
        };

        this.getPostsByCategory = function(category) {
            var deferred = $q.defer();
            if (_posts) {
                deferred.resolve(_filterByCategory(category));
            } else {
                this.getPosts().then(function() {
                    deferred.resolve(_filterByCategory(category));
                }, function() {
                    deferred.reject('Error occured while fetching posts with category ' + category);
                });
            }

            return deferred.promise;
        };

        /* Helper functions */

        function _findPost(id) {
            var index, length, post;
            for (index = 0, length = _posts.length; index < length; index++) {
                if (id === _posts[index].id) {
                    post = _posts[index];
                    break;
                }
            }
            return post;
        }

        function _filterByCategory(category) {
            return _posts.filter(function(post) {
                return post.category === category;
            });
        }
    })
    .value('version', '0.1');