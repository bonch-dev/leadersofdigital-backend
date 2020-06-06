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
    -G "http://localhost/provider/vkontakte?callback_url=molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/provider/vkontakte"
);

let params = {
    "callback_url": "molestias",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/provider/1/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
            "id": 19,
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    "message": "No query results for model [App\\RateItem]."
}
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
            "id": 3,
            "title": "Alice, she went round the table, but it all came different!' the Mock Turtle persisted. 'How COULD he turn them out of sight, he said to herself. At this the whole window!' 'Sure, it does, yer.",
            "description": "She was walking hand in hand, in couples: they were trying which word sounded best. Some of the moment they saw her, they hurried back to my right size to do that,' said the King. (The jury all.",
            "phone": "693-664-6659 x09180",
            "place": "3640 DuBuque Tunnel\nWest Jarrettown, HI 10673",
            "user": {
                "id": 16,
                "name": "Ms. Candida Halvorson",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 893,
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
                        "id": 16,
                        "name": "Ms. Candida Halvorson",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 893,
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
            "title": "But do cats eat bats? Do cats eat bats, I wonder?' Alice guessed in a rather offended tone, 'was, that the meeting adjourn, for the Duchess sang the second time round, she came up to Alice, they all.",
            "description": "And they pinched it on both sides of it; so, after hunting all about it!' and he went on, half to itself, 'Oh dear! Oh dear! I wish you wouldn't squeeze so.' said the King said gravely, 'and go on.",
            "phone": "918-937-0338",
            "place": "765 Keeling Mission\nSouth Camillastad, GA 63287",
            "user": {
                "id": 13,
                "name": "Dr. Ola Schiller",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 341,
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
                        "id": 13,
                        "name": "Dr. Ola Schiller",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 341,
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
            "title": "How the Owl had the best of educations--in fact, we went to him,' the Mock Turtle in the window, I only knew the name of the well, and noticed that they would go, and broke to pieces against one of.",
            "description": "I think I can say.' This was not here before,' said Alice,) and round the table, but it just now.' 'It's the thing at all. 'But perhaps he can't help it,' said Alice, 'we learned French and music.'.",
            "phone": "525.896.1456",
            "place": "9263 Bruen Mountain Suite 777\nNorth Hymanmouth, RI 99325-1651",
            "user": {
                "id": 6,
                "name": "Prof. Haskell Thompson I",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 407,
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
                        "id": 6,
                        "name": "Prof. Haskell Thompson I",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 407,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        },
        {
            "id": 1,
            "title": "I don't understand. Where did they live at the Mouse's tail; 'but why do you know what \"it\" means well enough, when I got up this morning? I almost think I can guess that,' she added in an offended.",
            "description": "Alice, feeling very glad to get hold of its mouth, and its great eyes half shut. This seemed to rise like a stalk out of the room. The cook threw a frying-pan after her as she swam lazily about in a.",
            "phone": "(460) 532-0462",
            "place": "87201 Kessler Stream\nFeeneyfort, GA 65472-2425",
            "user": {
                "id": 4,
                "name": "Dasia Hilpert DVM",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 755,
                "entities": []
            },
            "karma": 0,
            "karmed": 0,
            "rate": null,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 1,
                    "user": {
                        "id": 4,
                        "name": "Dasia Hilpert DVM",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 755,
                        "entities": []
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0
                }
            ]
        },
        {
            "id": 2,
            "title": "Pigeon, raising its voice to its children, 'Come away, my dears! It's high time you were INSIDE, you might like to see how he can thoroughly enjoy The pepper when he finds out who I am! But I'd.",
            "description": "ME' beautifully printed on it in large letters. It was so much frightened to say anything. 'Why,' said the Queen. 'Sentence first--verdict afterwards.' 'Stuff and nonsense!' said Alice very meekly.",
            "phone": "871-824-2434 x620",
            "place": "697 Cole Dale\nNorth Devin, KY 28343",
            "user": {
                "id": 18,
                "name": "Earline Orn",
                "birthday_at": null,
                "photo": "",
                "vk": "",
                "rank": 1,
                "karma": 667,
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
                        "id": 18,
                        "name": "Earline Orn",
                        "birthday_at": null,
                        "photo": "",
                        "vk": "",
                        "rank": 1,
                        "karma": 667,
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
        "title": "I don't understand. Where did they live at the Mouse's tail; 'but why do you know what \"it\" means well enough, when I got up this morning? I almost think I can guess that,' she added in an offended.",
        "description": "Alice, feeling very glad to get hold of its mouth, and its great eyes half shut. This seemed to rise like a stalk out of the room. The cook threw a frying-pan after her as she swam lazily about in a.",
        "phone": "(460) 532-0462",
        "place": "87201 Kessler Stream\nFeeneyfort, GA 65472-2425",
        "user": {
            "id": 4,
            "name": "Dasia Hilpert DVM",
            "birthday_at": null,
            "photo": "",
            "vk": "",
            "rank": 1,
            "karma": 755,
            "entities": []
        },
        "karma": 0,
        "karmed": 0,
        "rate": null,
        "rated": false,
        "photos": [],
        "comments": [
            {
                "id": 1,
                "user": {
                    "id": 4,
                    "name": "Dasia Hilpert DVM",
                    "birthday_at": null,
                    "photo": "",
                    "vk": "",
                    "rank": 1,
                    "karma": 755,
                    "entities": []
                },
                "text": "random_text",
                "karma": 0,
                "karmed": 0
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
            "id": 19,
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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

<!-- START_00fdf626b100d30bcd150746166ee0e9 -->
## Store comment about event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`POST api/questions/{question}/comment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `text` | string |  required  | Text of comment.
    
<!-- END_00fdf626b100d30bcd150746166ee0e9 -->

<!-- START_f9e55b88c46b05407b92e164b670c331 -->
## Karma up event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`POST api/questions/{question}/karmaUp`


<!-- END_f9e55b88c46b05407b92e164b670c331 -->

<!-- START_e3077b5fbf128812956b6ccdaf1e1ddc -->
## Karma down event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`POST api/questions/{question}/karmaDown`


<!-- END_e3077b5fbf128812956b6ccdaf1e1ddc -->

<!-- START_c0865094d4e44476b8ce26019c285d2e -->
## Answer to question

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/answer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"question_item_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/answer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
};

let body = {
    "question_item_id": 1
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`POST api/questions/{question}/answer`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `question_item_id` | integer |  required  | QuestionItem for we vote.
    
<!-- END_c0865094d4e44476b8ce26019c285d2e -->

<!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
## Display a listing of the events.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
        "first": "http:\/\/localhost\/api\/questions?page=1",
        "last": "http:\/\/localhost\/api\/questions?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/questions",
        "per_page": 15,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/questions`


<!-- END_de9212b4bd813e07f73b53cc3bd13088 -->

<!-- START_c523dae70f6c4b21420696974da0faea -->
## Store a newly created event in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","end_at":"2020-06-08 20:20:00","items":[{"text":"Goot text"}]}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum",
    "end_at": "2020-06-08 20:20:00",
    "items": [
        {
            "text": "Goot text"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
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
`POST api/questions`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | Title of event.
        `description` | string |  required  | Description of event.
        `end_at` | date |  optional  | Date, when question will end.
        `items` | array |  optional  | Array of items of questions.
        `items.*.text` | string |  optional  | Text of item question.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_c523dae70f6c4b21420696974da0faea -->

<!-- START_f605dcf2ca92a58323db87f649ac1dae -->
## Display the specified event.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`GET api/questions/{question}`


<!-- END_f605dcf2ca92a58323db87f649ac1dae -->

<!-- START_1bebccad423fb430073b434655c9df9e -->
## Update the specified event in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/questions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool event","description":"We will eat bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum"
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
    "message": "No query results for model [App\\Question] 1"
}
```

### HTTP Request
`PUT api/questions/{question}`

`PATCH api/questions/{question}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | Title of event.
        `description` | string |  required  | Description of event.
        `photos` | array |  optional  | Array of used uploaded photos.
        `photos.*` | integer |  optional  | Id of uploaded photo.
    
<!-- END_1bebccad423fb430073b434655c9df9e -->

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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
        "id": 2,
        "user": {
            "id": 19,
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
        "id": 19,
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
    -H "Authorization: Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|Sc7Jg4oNfe7euHzBMqO6212AxL42aYtb4dfu2IIsoriyLGl2tKQvzKOehP0cTENCqpbdc7fOQueeY7MB",
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
        "name": "Kavon Kunde",
        "birthday_at": null,
        "photo": "",
        "vk": "",
        "influence": 3,
        "rank": 1,
        "karma": 926,
        "entities": []
    }
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->


