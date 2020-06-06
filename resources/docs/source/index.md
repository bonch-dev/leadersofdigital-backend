---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Auth


Class AuthController
<!-- START_732e3cdeb6f37fe89645fc5f1583fbee -->
## Redirect the user to the Provider authentication page. Точка входа логинки

> Example request:

```bash
curl -X GET \
    -G "http://localhost/provider/vkontakte?callback_url=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/provider/vkontakte"
);

let params = {
    "callback_url": "quibusdam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET provider/{provider}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `provider` |  required  | Provider, needed to auth. Подставить "vkontakte".
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `callback_url` |  required  | Url, which need to redirect after Socialite login.

<!-- END_732e3cdeb6f37fe89645fc5f1583fbee -->

<!-- START_d13b0a9474a479be736af884e72a9773 -->
## Obtain the user information from the Provider. Это колбек, сюда не лезьте.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/provider/1/callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/provider/1/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET provider/{provider}/callback`


<!-- END_d13b0a9474a479be736af884e72a9773 -->

#Comment


Class CommentController
<!-- START_fe1751e75f4a4aa096e4355447bc5e8c -->
## Down karma to comment

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/comments/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/comments/{comment}/karmaUp`


<!-- END_fe1751e75f4a4aa096e4355447bc5e8c -->

<!-- START_04d72c1cf5f64ed8b5903288b9d0031a -->
## Up karma to comment

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/comments/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/comments/{comment}/karmaDown`


<!-- END_04d72c1cf5f64ed8b5903288b9d0031a -->

#Event


Class EventController
<!-- START_e59bc0d6c63548c8e901a7058dc2d963 -->
## Store comment about event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "text": "Bla-bla-bla-bla-string"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": null,
        "user": {
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": []
        },
        "text": "Bla-bla-bla-bla-string",
        "karma": 0,
        "karmed": 0
    }
}
```

### HTTP Request
`POST api/events/{event}/comment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `text` | string |  required  | Text of comment.
    
<!-- END_e59bc0d6c63548c8e901a7058dc2d963 -->

<!-- START_4b2f9b1c7c2e39989b6f10e228397c2d -->
## Karma up event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/events/{event}/karmaUp`


<!-- END_4b2f9b1c7c2e39989b6f10e228397c2d -->

<!-- START_7b475ebb9bcd98371752157178aabdb1 -->
## Karma down event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/events/{event}/karmaDown`


<!-- END_7b475ebb9bcd98371752157178aabdb1 -->

<!-- START_355d5dac7d3e804f83d5690f40b6f874 -->
## Rate event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/events/{event}/rate`


<!-- END_355d5dac7d3e804f83d5690f40b6f874 -->

<!-- START_02e29414b7211eeccb73592e76801925 -->
## Unrate event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events/1/unrate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
1
```

### HTTP Request
`POST api/events/{event}/unrate`


<!-- END_02e29414b7211eeccb73592e76801925 -->

<!-- START_742a1cbd4a274c7269f0db99a704ff41 -->
## Display a listing of the events.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "title": "Gryphon. 'Then, you know,' said Alice, who felt very lonely and low-spirited. In a minute or two, and the arm that was linked into hers began to cry again. 'You ought to eat the comfits: this caused.",
            "description": "We must have imitated somebody else's hand,' said the cook. The King looked anxiously at the March Hare. Visit either you like: they're both mad.' 'But I don't know,' he went on, 'and most things.",
            "phone": "923.725.6324 x80448",
            "place": "2019 Abbott Glens\nLornastad, AL 75965",
            "user": {
                "name": "Mr. Lester Maggio",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 806,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": true,
            "photos": [],
            "comments": [
                {
                    "id": 1,
                    "user": {
                        "name": "Mr. Lester Maggio",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 806,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 1,
                    "karmed": 1
                }
            ]
        },
        {
            "id": 2,
            "title": "I!' he replied. 'We quarrelled last March--just before HE went mad, you know--' (pointing with his tea spoon at the righthand bit again, and the pair of the ground, Alice soon began talking to him,'.",
            "description": "Cheshire Cat: now I shall have somebody to talk about her repeating 'YOU ARE OLD, FATHER WILLIAM,' to the porpoise, \"Keep back, please: we don't want to be?' it asked. 'Oh, I'm not looking for eggs.",
            "phone": "+1.763.337.6641",
            "place": "3025 Domenico Green\nDickiburgh, WA 11466-9400",
            "user": {
                "name": "Prof. Kelly Hagenes",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 519,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 2,
                    "user": {
                        "name": "Prof. Kelly Hagenes",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 519,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        },
        {
            "id": 3,
            "title": "The Mouse looked at Alice. 'It must have a prize herself, you know,' the Hatter with a sudden leap out of a feather flock together.\"' 'Only mustard isn't a letter, after all: it's a French mouse.",
            "description": "Dinah my dear! Let this be a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the Queen said to herself, and shouted out, 'You'd better not do that again!' which.",
            "phone": "986.884.1906 x79494",
            "place": "263 Fletcher Field Suite 566\nSawaynport, FL 34914-6718",
            "user": {
                "name": "Elmer Leannon",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 604,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 3,
                    "user": {
                        "name": "Elmer Leannon",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 604,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        },
        {
            "id": 4,
            "title": "Lizard, who seemed to be a letter, written by the Hatter, and, just as I do,' said the Mock Turtle. 'No, no! The adventures first,' said the Duchess, 'as pigs have to fly; and the baby violently up.",
            "description": "So you see, as she swam about, trying to put his shoes off. 'Give your evidence,' said the March Hare. 'Sixteenth,' added the Hatter, with an M--' 'Why with an M--' 'Why with an M, such as.",
            "phone": "560-379-4161",
            "place": "99349 Moshe Corners Suite 913\nPort Avisborough, NM 54312",
            "user": {
                "name": "Peyton Roberts DDS",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 582,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 4,
                    "user": {
                        "name": "Peyton Roberts DDS",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 582,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        },
        {
            "id": 5,
            "title": "But her sister was reading, but it is.' 'Then you should say \"With what porpoise?\"' 'Don't you mean that you never to lose YOUR temper!' 'Hold your tongue!' said the Hatter. He came in sight of the.",
            "description": "As for pulling me out of sight; and an Eaglet, and several other curious creatures. Alice led the way, and nothing seems to grin, How neatly spread his claws, And welcome little fishes in With.",
            "phone": "1-249-246-8079 x75483",
            "place": "590 Rolfson Spurs Suite 832\nOkunevamouth, UT 25244-8010",
            "user": {
                "name": "Mr. Sigmund Schumm II",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 336,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 5,
                    "user": {
                        "name": "Mr. Sigmund Schumm II",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 336,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/events?page=1",
        "last": "http:\/\/localhost\/api\/events?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/events",
        "per_page": 15,
        "to": 5,
        "total": 5
    }
}
```

### HTTP Request
`GET api/events`


<!-- END_742a1cbd4a274c7269f0db99a704ff41 -->

<!-- START_de3413bf02c9bb71627fa96e1c1c409f -->
## Store a newly created event in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum",
    "place": "Moscow City"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ],
        "phone": [
            "The phone field is required."
        ]
    }
}
```

### HTTP Request
`POST api/events`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | Title of event.
        `description` | string |  required  | Description of event.
        `place` | string |  optional  | Place address or name of evenet.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_de3413bf02c9bb71627fa96e1c1c409f -->

<!-- START_379a3beb17bbb91528d80d8507f69655 -->
## Display the specified event.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "title": "Gryphon. 'Then, you know,' said Alice, who felt very lonely and low-spirited. In a minute or two, and the arm that was linked into hers began to cry again. 'You ought to eat the comfits: this caused.",
        "description": "We must have imitated somebody else's hand,' said the cook. The King looked anxiously at the March Hare. Visit either you like: they're both mad.' 'But I don't know,' he went on, 'and most things.",
        "phone": "923.725.6324 x80448",
        "place": "2019 Abbott Glens\nLornastad, AL 75965",
        "user": {
            "name": "Mr. Lester Maggio",
            "birthday_at": null,
            "photo": "",
            "vk": "",
            "rank": 1,
            "karma": 806,
            "entities": []
        },
        "karma": 0,
        "karmed": 0,
        "rate": null,
        "rated": true,
        "photos": [],
        "comments": [
            {
                "id": 1,
                "user": {
                    "name": "Mr. Lester Maggio",
                    "birthday_at": null,
                    "photo": "",
                    "vk": "",
                    "rank": 1,
                    "karma": 806,
                    "entities": []
                },
                "text": "random_text",
                "karma": 1,
                "karmed": 1
            }
        ]
    }
}
```

### HTTP Request
`GET api/events/{event}`


<!-- END_379a3beb17bbb91528d80d8507f69655 -->

<!-- START_d16967fd1d3d935666f7e8112a1a4451 -->
## Update the specified event in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum",
    "place": "Moscow City"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "This action is unauthorized."
}
```

### HTTP Request
`PUT api/events/{event}`

`PATCH api/events/{event}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  optional  | Title of event.
        `description` | string |  optional  | Description of event.
        `place` | string |  optional  | Place address or name of evenet.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_d16967fd1d3d935666f7e8112a1a4451 -->

#Initiative


Class InitiativeController
<!-- START_1c7707699c1bced2a59fe182141c35df -->
## Rate up initiative

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/initiatives/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Initiative] 1"
}
```

### HTTP Request
`POST api/initiatives/{initiative}/rate`


<!-- END_1c7707699c1bced2a59fe182141c35df -->

<!-- START_84abc5315e7eca6d9ebed66f84ded57e -->
## Unrate initiative

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/initiatives/1/unrate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Initiative] 1"
}
```

### HTTP Request
`POST api/initiatives/{initiative}/unrate`


<!-- END_84abc5315e7eca6d9ebed66f84ded57e -->

<!-- START_8186890a1d298052163f998945711a33 -->
## Display a listing of the Initiatives.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/initiatives" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/initiatives?page=1",
        "last": "http:\/\/localhost\/api\/initiatives?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/initiatives",
        "per_page": 15,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/initiatives`


<!-- END_8186890a1d298052163f998945711a33 -->

<!-- START_845982b7fd343cc0372db96eb1bebcc3 -->
## Store a newly created Initiative in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/initiatives" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool initiative",
    "description": "All need to eat bubblegums!",
    "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
    "objective": "Bubblegums for everyone",
    "goals": "Give bubblegum to me, to you and to bonch.dev",
    "geography": "whole world",
    "result": "bonch.dev lopnet",
    "additional": "Why I need to comment it?"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": null,
        "user": {
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": []
        },
        "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
        "title": "My cool initiative",
        "description": "All need to eat bubblegums!",
        "objective": "Bubblegums for everyone",
        "goals": "Give bubblegum to me, to you and to bonch.dev",
        "geography": "whole world",
        "result": "bonch.dev lopnet",
        "additional": "Why I need to comment it?",
        "rate": null,
        "rated": false,
        "status": "running"
    }
}
```

### HTTP Request
`POST api/initiatives`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | Title of initiative.
        `description` | string |  required  | Description of initiative.
        `video_url` | string |  required  | Url to youtube.com of video.
        `objective` | string |  required  | Objective of initiative.
        `goals` | string |  required  | Goals of initiative.
        `geography` | string |  required  | Geography of your initiative.
        `result` | string |  required  | Result when initiative end's.
        `additional` | string |  optional  | Some comments of initiative.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_845982b7fd343cc0372db96eb1bebcc3 -->

<!-- START_da8896bd7ca97f16dc5fb07db82242a6 -->
## Display the specified Initiative.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/initiatives/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Initiative] 1"
}
```

### HTTP Request
`GET api/initiatives/{initiative}`


<!-- END_da8896bd7ca97f16dc5fb07db82242a6 -->

<!-- START_67346ec0dfdddc8eddeadb8fa3727bb1 -->
## Update the specified resource in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/initiatives/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool initiative",
    "description": "All need to eat bubblegums!",
    "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
    "objective": "Bubblegums for everyone",
    "goals": "Give bubblegum to me, to you and to bonch.dev",
    "geography": "whole world",
    "result": "bonch.dev lopnet",
    "additional": "Why I need to comment it?"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Initiative] 1"
}
```

### HTTP Request
`PUT api/initiatives/{initiative}`

`PATCH api/initiatives/{initiative}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  optional  | Title of initiative.
        `description` | string |  optional  | Description of initiative.
        `video_url` | string |  optional  | Url to youtube.com of video.
        `objective` | string |  optional  | Objective of initiative.
        `goals` | string |  optional  | Goals of initiative.
        `geography` | string |  optional  | Geography of your initiative.
        `result` | string |  optional  | Result when initiative end's.
        `additional` | string |  optional  | Some comments of initiative.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_67346ec0dfdddc8eddeadb8fa3727bb1 -->

#Media


API for management medias (images)

Class MediaController
<!-- START_5900363c9d9cf8069f0abf41866a659f -->
## Store single media file

> Example request:

```bash
curl -X POST \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "file": [
            "The file field is required."
        ]
    }
}
```

### HTTP Request
`POST api/media`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `file` | image |  required  | Image need to be upload to server.
    
<!-- END_5900363c9d9cf8069f0abf41866a659f -->

<!-- START_bb5530c02c7579ae6874d5b27b986ee3 -->
## Store media files

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "files": [
            "The files field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/media`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | array |  required  | Array of files (images) what need to be uploaded to server.
        `files.*` | image |  required  | Image need to be upload to server.
    
<!-- END_bb5530c02c7579ae6874d5b27b986ee3 -->

#Other


<!-- START_4dfafe7f87ec132be3c8990dd1fa9078 -->
## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET sanctum/csrf-cookie`


<!-- END_4dfafe7f87ec132be3c8990dd1fa9078 -->

#Post


Class PostController
<!-- START_2e801dd71d2d900d8da8bd55f490d9a8 -->
## Store comment about event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/posts/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "text": "Bla-bla-bla-bla-string"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`POST api/posts/{post}/comment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `text` | string |  required  | Text of comment.
    
<!-- END_2e801dd71d2d900d8da8bd55f490d9a8 -->

<!-- START_59dc0f1a6838e9d2431348c32ba37f35 -->
## Karma up post

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/posts/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`POST api/posts/{post}/karmaUp`


<!-- END_59dc0f1a6838e9d2431348c32ba37f35 -->

<!-- START_5c3a52895f8ead1583ef6d922f6cd01f -->
## Karma down post

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/posts/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`POST api/posts/{post}/karmaDown`


<!-- END_5c3a52895f8ead1583ef6d922f6cd01f -->

<!-- START_da50450f1df5336c2a14a7a368c5fb9c -->
## Display a listing of the Posts.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/posts?page=1",
        "last": "http:\/\/localhost\/api\/posts?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/posts",
        "per_page": 15,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/posts`


<!-- END_da50450f1df5336c2a14a7a368c5fb9c -->

<!-- START_ea8d166c68ec035668ea724e12cafa45 -->
## Store a newly created Post in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool post",
    "text": "I eating bubblegum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (201):

```json
{
    "data": {
        "id": 5,
        "user": {
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": []
        },
        "title": "My cool post",
        "text": "I eating bubblegum",
        "photos": [],
        "comments": []
    }
}
```

### HTTP Request
`POST api/posts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | Title of post.
        `text` | string |  required  | Text of post.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_ea8d166c68ec035668ea724e12cafa45 -->

<!-- START_726b7bf93b3209836a1cbcda5b3b6703 -->
## Display the specified Post.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`GET api/posts/{post}`


<!-- END_726b7bf93b3209836a1cbcda5b3b6703 -->

<!-- START_6d1dfaf5fa710725519375063e4e9db0 -->
## Update the specified resource in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

let body = {
    "title": "My cool post",
    "text": "I eating bubblegum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`PUT api/posts/{post}`

`PATCH api/posts/{post}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  optional  | Title of post.
        `text` | string |  optional  | Text of post.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_6d1dfaf5fa710725519375063e4e9db0 -->

#User


Class UserController
<!-- START_8d1e53fcf4d2d02a6144ed392de856bf -->
## Display info about me

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Gosha Kargin",
        "birthday_at": null,
        "photo": "",
        "vk": "https:\/\/vk.com\/id49879593",
        "influence": 0,
        "rank": 1,
        "karma": 0,
        "entities": []
    }
}
```

### HTTP Request
`GET api/users/me`


<!-- END_8d1e53fcf4d2d02a6144ed392de856bf -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|nsW8cNWdGCqE1YFxTbWlhwlfjur5s3pE1rA5bHQOx7VwKyQKBFL5D9l4ybuthp9ff00GHa1umGNnvjvo",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Mr. Sigmund Schumm II",
        "birthday_at": null,
        "photo": "",
        "vk": "",
        "influence": 3,
        "rank": 1,
        "karma": 336,
        "entities": [
            {
                "id": 5,
                "type": "event",
                "user_id": 1,
                "title": "But her sister was reading, but it is.' 'Then you should say \"With what porpoise?\"' 'Don't you mean that you never to lose YOUR temper!' 'Hold your tongue!' said the Hatter. He came in sight of the.",
                "description": "As for pulling me out of sight; and an Eaglet, and several other curious creatures. Alice led the way, and nothing seems to grin, How neatly spread his claws, And welcome little fishes in With.",
                "karma": 0,
                "rate": 0,
                "created_at": "2020-06-06T15:53:50.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->


