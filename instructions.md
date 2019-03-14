#Goal:
Design an app that gets the weather from a certain location.

Only query every hour for new weather updates. Instead of doing a query each time, use redis to cache the response. 

Another good problem - make an API with a redis cache. Dark sky limits the number of requests in a day. 

Don’t waste our precious API calls on something we have already received. 

Redis is an in memory data store, and you can save things. Its most basic features are basic. 

Good for auto expiring cache entries. Have it expire after a certain time. Have it expire after a certain amount of time. 

Only keep this value around for 20 minutes. 


Redis is cool to see how you can get around the free api request things. 

This is server side caching. Implemented a cache. 

Redis is super fast. Speed on cache vs going to dark sky. 

Run redis in a docker container. 6739 or something. 

Redis is an open source software application. 

The overarching problem is that we are super cheap and we want to make as few dark sky requests as possible. 

Switch to weather underground seamlessly. 

We want to get the weather from multiple providers. take the average temperature. Getting it from multiple places, consolidating it from different domains. 

Memcached is an equivalent to redis. It is an in memory data store. Redis is more popular. 