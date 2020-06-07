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
    -G "http://localhost/provider/vkontakte?callback_url=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/provider/vkontakte"
);

let params = {
    "callback_url": "odio",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/provider/1/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои комментарии"
}
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/comments/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои комментарии"
}
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": [
                {
                    "id": 1,
                    "type": "event",
                    "user_id": 1,
                    "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                    "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 2,
                    "type": "event",
                    "user_id": 1,
                    "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                    "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 3,
                    "type": "event",
                    "user_id": 1,
                    "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                    "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 4,
                    "type": "event",
                    "user_id": 1,
                    "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                    "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 5,
                    "type": "event",
                    "user_id": 1,
                    "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                    "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "text": "Bla-bla-bla-bla-string",
        "karma": 0,
        "karmed": 0,
        "created_at": null,
        "updated_at": null
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
}
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
}
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
}
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
            "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
            "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
            "phone": "+1 (201) 781-1530",
            "place": "9218 Zulauf Haven\nRebekaton, DE 31366",
            "user": {
                "id": 1,
                "name": "Gosha Kargin",
                "birthday_at": null,
                "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                "vk": "https:\/\/vk.com\/id49879593",
                "rank": 1,
                "karma": 0,
                "entities": [],
                "created_at": "2020-06-06T19:20:17.000000Z",
                "updated_at": "2020-06-06T19:20:17.000000Z"
            },
            "karma": 0,
            "karmed": 0,
            "rate": 0,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 1,
                    "user": {
                        "id": 1,
                        "name": "Gosha Kargin",
                        "birthday_at": null,
                        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                        "vk": "https:\/\/vk.com\/id49879593",
                        "rank": 1,
                        "karma": 0,
                        "entities": [],
                        "created_at": "2020-06-06T19:20:17.000000Z",
                        "updated_at": "2020-06-06T19:20:17.000000Z"
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-07T00:14:40.000000Z",
            "updated_at": "2020-06-07T00:14:40.000000Z"
        },
        {
            "id": 2,
            "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
            "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
            "phone": "579-922-9226 x3604",
            "place": "61649 Windler Greens Apt. 937\nMartinburgh, TN 95921",
            "user": {
                "id": 1,
                "name": "Gosha Kargin",
                "birthday_at": null,
                "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                "vk": "https:\/\/vk.com\/id49879593",
                "rank": 1,
                "karma": 0,
                "entities": [],
                "created_at": "2020-06-06T19:20:17.000000Z",
                "updated_at": "2020-06-06T19:20:17.000000Z"
            },
            "karma": 0,
            "karmed": 0,
            "rate": 0,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 2,
                    "user": {
                        "id": 1,
                        "name": "Gosha Kargin",
                        "birthday_at": null,
                        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                        "vk": "https:\/\/vk.com\/id49879593",
                        "rank": 1,
                        "karma": 0,
                        "entities": [],
                        "created_at": "2020-06-06T19:20:17.000000Z",
                        "updated_at": "2020-06-06T19:20:17.000000Z"
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-07T00:14:40.000000Z",
            "updated_at": "2020-06-07T00:14:40.000000Z"
        },
        {
            "id": 3,
            "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
            "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
            "phone": "(929) 305-5419 x7516",
            "place": "525 Wisozk Brook Suite 380\nMcKenzietown, AL 43878-4872",
            "user": {
                "id": 1,
                "name": "Gosha Kargin",
                "birthday_at": null,
                "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                "vk": "https:\/\/vk.com\/id49879593",
                "rank": 1,
                "karma": 0,
                "entities": [],
                "created_at": "2020-06-06T19:20:17.000000Z",
                "updated_at": "2020-06-06T19:20:17.000000Z"
            },
            "karma": 0,
            "karmed": 0,
            "rate": 0,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 3,
                    "user": {
                        "id": 1,
                        "name": "Gosha Kargin",
                        "birthday_at": null,
                        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                        "vk": "https:\/\/vk.com\/id49879593",
                        "rank": 1,
                        "karma": 0,
                        "entities": [],
                        "created_at": "2020-06-06T19:20:17.000000Z",
                        "updated_at": "2020-06-06T19:20:17.000000Z"
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-07T00:14:40.000000Z",
            "updated_at": "2020-06-07T00:14:40.000000Z"
        },
        {
            "id": 4,
            "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
            "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
            "phone": "745.557.9724",
            "place": "20331 Nienow Ranch Apt. 144\nNorth Henderson, CO 02878-5634",
            "user": {
                "id": 1,
                "name": "Gosha Kargin",
                "birthday_at": null,
                "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                "vk": "https:\/\/vk.com\/id49879593",
                "rank": 1,
                "karma": 0,
                "entities": [],
                "created_at": "2020-06-06T19:20:17.000000Z",
                "updated_at": "2020-06-06T19:20:17.000000Z"
            },
            "karma": 0,
            "karmed": 0,
            "rate": 0,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 4,
                    "user": {
                        "id": 1,
                        "name": "Gosha Kargin",
                        "birthday_at": null,
                        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                        "vk": "https:\/\/vk.com\/id49879593",
                        "rank": 1,
                        "karma": 0,
                        "entities": [],
                        "created_at": "2020-06-06T19:20:17.000000Z",
                        "updated_at": "2020-06-06T19:20:17.000000Z"
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-07T00:14:40.000000Z",
            "updated_at": "2020-06-07T00:14:40.000000Z"
        },
        {
            "id": 5,
            "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
            "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
            "phone": "301-348-6653 x63898",
            "place": "86314 Mina Plain Apt. 518\nNicklausburgh, NM 10505",
            "user": {
                "id": 1,
                "name": "Gosha Kargin",
                "birthday_at": null,
                "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                "vk": "https:\/\/vk.com\/id49879593",
                "rank": 1,
                "karma": 0,
                "entities": [],
                "created_at": "2020-06-06T19:20:17.000000Z",
                "updated_at": "2020-06-06T19:20:17.000000Z"
            },
            "karma": 0,
            "karmed": 0,
            "rate": 0,
            "rated": false,
            "photos": [],
            "comments": [
                {
                    "id": 5,
                    "user": {
                        "id": 1,
                        "name": "Gosha Kargin",
                        "birthday_at": null,
                        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                        "vk": "https:\/\/vk.com\/id49879593",
                        "rank": 1,
                        "karma": 0,
                        "entities": [],
                        "created_at": "2020-06-06T19:20:17.000000Z",
                        "updated_at": "2020-06-06T19:20:17.000000Z"
                    },
                    "text": "random_text",
                    "karma": 0,
                    "karmed": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-07T00:14:40.000000Z",
            "updated_at": "2020-06-07T00:14:40.000000Z"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
        "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
        "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
        "phone": "+1 (201) 781-1530",
        "place": "9218 Zulauf Haven\nRebekaton, DE 31366",
        "user": {
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "rank": 1,
            "karma": 0,
            "entities": [],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "karma": 0,
        "karmed": 0,
        "rate": 0,
        "rated": false,
        "photos": [],
        "comments": [
            {
                "id": 1,
                "user": {
                    "id": 1,
                    "name": "Gosha Kargin",
                    "birthday_at": null,
                    "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                    "vk": "https:\/\/vk.com\/id49879593",
                    "rank": 1,
                    "karma": 0,
                    "entities": [],
                    "created_at": "2020-06-06T19:20:17.000000Z",
                    "updated_at": "2020-06-06T19:20:17.000000Z"
                },
                "text": "random_text",
                "karma": 0,
                "karmed": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            }
        ],
        "created_at": "2020-06-07T00:14:40.000000Z",
        "updated_at": "2020-06-07T00:14:40.000000Z"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City"}'

```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "title": "My cool event",
        "description": "We will eat bubblegum",
        "phone": "+1 (201) 781-1530",
        "place": "Moscow City",
        "user": {
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "rank": 1,
            "karma": 0,
            "entities": [],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "karma": 0,
        "karmed": 0,
        "rate": 0,
        "rated": false,
        "photos": [],
        "comments": [
            {
                "id": 1,
                "user": {
                    "id": 1,
                    "name": "Gosha Kargin",
                    "birthday_at": null,
                    "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
                    "vk": "https:\/\/vk.com\/id49879593",
                    "rank": 1,
                    "karma": 0,
                    "entities": [],
                    "created_at": "2020-06-06T19:20:17.000000Z",
                    "updated_at": "2020-06-06T19:20:17.000000Z"
                },
                "text": "random_text",
                "karma": 0,
                "karmed": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            }
        ],
        "created_at": "2020-06-07T00:14:40.000000Z",
        "updated_at": "2020-06-07T00:29:14.000000Z"
    }
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": [
                {
                    "id": 1,
                    "type": "event",
                    "user_id": 1,
                    "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                    "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 2,
                    "type": "event",
                    "user_id": 1,
                    "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                    "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 3,
                    "type": "event",
                    "user_id": 1,
                    "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                    "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 4,
                    "type": "event",
                    "user_id": 1,
                    "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                    "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 5,
                    "type": "event",
                    "user_id": 1,
                    "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                    "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
        "title": "My cool initiative",
        "description": "All need to eat bubblegums!",
        "objective": "Bubblegums for everyone",
        "goals": "Give bubblegum to me, to you and to bonch.dev",
        "geography": "whole world",
        "result": "bonch.dev lopnet",
        "additional": "Why I need to comment it?",
        "rate": 0,
        "rated": false,
        "status": "running",
        "created_at": null,
        "updated_at": null
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?"}'

```

```javascript
const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \

```

```javascript
const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
        "id": 1,
        "user": {
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": [
                {
                    "id": 1,
                    "type": "event",
                    "user_id": 1,
                    "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                    "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 2,
                    "type": "event",
                    "user_id": 1,
                    "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                    "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 3,
                    "type": "event",
                    "user_id": 1,
                    "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                    "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 4,
                    "type": "event",
                    "user_id": 1,
                    "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                    "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 5,
                    "type": "event",
                    "user_id": 1,
                    "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                    "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "title": "My cool post",
        "text": "I eating bubblegum",
        "photos": [],
        "comments": [],
        "created_at": "2020-06-07T00:29:16.000000Z",
        "updated_at": "2020-06-07T00:29:16.000000Z"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool post","text":"I eating bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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

#Question


Class QuestionController
<!-- START_00fdf626b100d30bcd150746166ee0e9 -->
## Store comment about event

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"text":"Bla-bla-bla-bla-string"}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
            "id": 1,
            "name": "Gosha Kargin",
            "birthday_at": null,
            "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
            "vk": "https:\/\/vk.com\/id49879593",
            "influence": 0,
            "rank": 1,
            "karma": 0,
            "entities": [
                {
                    "id": 1,
                    "type": "event",
                    "user_id": 1,
                    "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                    "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 2,
                    "type": "event",
                    "user_id": 1,
                    "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                    "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 3,
                    "type": "event",
                    "user_id": 1,
                    "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                    "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 4,
                    "type": "event",
                    "user_id": 1,
                    "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                    "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                },
                {
                    "id": 5,
                    "type": "event",
                    "user_id": 1,
                    "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                    "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                    "karma": 0,
                    "rate": 0,
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:14:40.000000Z",
                    "updated_at": "2020-06-07T00:14:40.000000Z"
                }
            ],
            "created_at": "2020-06-06T19:20:17.000000Z",
            "updated_at": "2020-06-06T19:20:17.000000Z"
        },
        "text": "Bla-bla-bla-bla-string",
        "karma": 0,
        "karmed": 0,
        "created_at": null,
        "updated_at": null
    }
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Вы не можете голосовать за свои инициативы или обращения"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"question_item_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/answer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
            "title": "Non consequatur sit omnis consequatur quia non. Nemo incidunt quidem voluptatem quaerat molestias. Omnis est autem qui et accusamus soluta sit.",
            "description": "Et quis et ullam similique dolor quia. Ut nemo minus nostrum modi libero tenetur. Inventore nam est consequatur voluptatem atque voluptas.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [
                {
                    "text": "Illum aliquam eius sit nostrum exercitationem minima ut. Qui quidem sit impedit corrupti in. Ullam doloremque amet vel veniam. Temporibus perferendis amet non.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Laboriosam cumque velit ullam occaecati dolorem officia dignissimos magni. Fuga et molestias eligendi.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Tempora dicta aspernatur dolor. Reprehenderit ea ea impedit perspiciatis et ut. Sit non autem dolores sed. Qui et magni dignissimos vero.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                }
            ],
            "end_at": "2020-06-12T00:16:08.000000Z",
            "created_at": "2020-06-07T00:16:08.000000Z",
            "updated_at": "2020-06-07T00:16:08.000000Z"
        },
        {
            "title": "Pariatur quis ratione doloribus ad at dolores. Ut corrupti tenetur totam. Voluptatem autem animi dolore eos laudantium voluptatem ut architecto. Dolores et veniam nostrum et placeat ut.",
            "description": "Quibusdam maxime et harum et fugit autem molestiae. Quam nulla omnis distinctio recusandae laborum. Cumque id corrupti qui incidunt eaque est ab.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [
                {
                    "text": "Et numquam eaque eius praesentium. Excepturi sed nemo mollitia consequuntur. Dolores esse repellat atque iste unde blanditiis impedit.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Est reiciendis occaecati reprehenderit fuga quia veritatis ab. Et autem ipsum delectus deserunt. Sit ea magnam sapiente est sit error id. Repellendus tempora adipisci omnis possimus dolores.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:09.000000Z",
                    "updated_at": "2020-06-07T00:16:09.000000Z"
                },
                {
                    "text": "At est eos est odit. Impedit amet consequatur dolorum praesentium dolores. Sint neque harum ipsam mollitia consequatur.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:09.000000Z",
                    "updated_at": "2020-06-07T00:16:09.000000Z"
                }
            ],
            "end_at": "2020-06-12T00:16:08.000000Z",
            "created_at": "2020-06-07T00:16:08.000000Z",
            "updated_at": "2020-06-07T00:16:08.000000Z"
        },
        {
            "title": "Et quae maiores maxime et. Qui eum ea odio voluptatum voluptatem et. Reiciendis illum repellendus error animi illum sint blanditiis voluptas.",
            "description": "Ut voluptatem at et beatae nam corrupti. Suscipit corrupti nihil mollitia facere nam. Qui blanditiis est eum mollitia exercitationem quam minus.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [
                {
                    "text": "Fugiat perferendis et iste. Debitis vel magni amet molestiae ut quo mollitia. Aut quod eum eius corporis. Qui et commodi vitae tenetur assumenda. Aliquid qui ex nihil.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Voluptatem facilis quia officiis porro quia ullam. Inventore animi est cum quibusdam dignissimos optio odio. Assumenda itaque fuga aut sed autem.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Consequatur fuga sint qui unde illum aperiam suscipit. Error architecto recusandae ducimus vel illo. Placeat et pariatur sint tempore nam reiciendis id dicta. Eum similique animi iure dolores.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                }
            ],
            "end_at": "2020-06-12T00:16:08.000000Z",
            "created_at": "2020-06-07T00:16:08.000000Z",
            "updated_at": "2020-06-07T00:16:08.000000Z"
        },
        {
            "title": "Id ducimus ratione eum. Minima facilis et at mollitia. Culpa eum ad inventore. Saepe modi et ea. Corporis atque ab sed voluptas sit veniam. Adipisci ab quas autem qui quo nihil.",
            "description": "Placeat qui sapiente eos maxime. Blanditiis officiis sint sed voluptatum perspiciatis voluptatum. Molestiae quidem enim molestiae consequatur.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [
                {
                    "text": "Similique nesciunt amet asperiores excepturi. Dicta nostrum laudantium dolore illum vero ullam. Tenetur voluptatem tenetur nobis molestias illum consequatur. Voluptatibus fugit sint qui et.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Suscipit blanditiis aliquid harum molestiae quas dolorem. Corrupti est aut numquam explicabo eos.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Officiis et dolorum adipisci occaecati est repudiandae. Reiciendis quas architecto reprehenderit molestias ut neque. Nesciunt aut labore voluptates dolorem soluta id.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                }
            ],
            "end_at": "2020-06-12T00:16:08.000000Z",
            "created_at": "2020-06-07T00:16:08.000000Z",
            "updated_at": "2020-06-07T00:16:08.000000Z"
        },
        {
            "title": "Id et maxime illum dolorem. Ducimus voluptatum optio est voluptatem. Beatae sed aut omnis laborum qui. Culpa pariatur iure repellat.",
            "description": "Explicabo pariatur assumenda minima perferendis iste possimus. Non quia aperiam voluptas dolore quisquam voluptatum.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [
                {
                    "text": "Natus voluptas et neque aliquid ipsum. Provident natus tenetur distinctio consequatur ullam cupiditate. Voluptas delectus repellendus et voluptatem ut qui deleniti.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Et aut culpa minus esse. Ut maxime accusantium dicta quis dolorum voluptates eum. Expedita minima quisquam enim accusamus repellendus sit.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                },
                {
                    "text": "Veniam ut ipsam vero voluptas ut vero vel. Consequatur voluptatum ipsa quia enim corrupti beatae. Autem quo atque totam sed rerum. Possimus harum voluptatibus aut qui quo quo.",
                    "votes_count": 0,
                    "votes_sum": 0,
                    "created_at": "2020-06-07T00:16:08.000000Z",
                    "updated_at": "2020-06-07T00:16:08.000000Z"
                }
            ],
            "end_at": "2020-06-12T00:16:08.000000Z",
            "created_at": "2020-06-07T00:16:08.000000Z",
            "updated_at": "2020-06-07T00:16:08.000000Z"
        },
        {
            "title": "Et consequatur dolores ut voluptates qui quo et. Dolores consequatur minima quaerat praesentium. Sed ratione vitae et ipsa omnis quo.",
            "description": "Dolorum corrupti autem ipsum molestiae dicta veniam. Totam totam repellat aut expedita voluptas in. Temporibus dolore rerum autem est.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:15:43.000000Z",
            "created_at": "2020-06-07T00:15:44.000000Z",
            "updated_at": "2020-06-07T00:15:44.000000Z"
        },
        {
            "title": "Blanditiis qui eligendi culpa soluta ratione. Error qui quis quo nostrum. Ut vel quam illum est et omnis.",
            "description": "Sunt doloremque et iste praesentium. Architecto animi illum eius labore ut. Maiores et non illum aut quia. Eos praesentium cum velit blanditiis.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:15:43.000000Z",
            "created_at": "2020-06-07T00:15:44.000000Z",
            "updated_at": "2020-06-07T00:15:44.000000Z"
        },
        {
            "title": "Labore velit ut ut ipsam labore est vero. Et maiores laborum doloremque ut. Omnis facilis consequatur sed natus vitae.",
            "description": "Voluptatem repellendus voluptas ut nihil aut. Dolore a eum sint nihil. Dolorem in dolore est quod.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:15:43.000000Z",
            "created_at": "2020-06-07T00:15:43.000000Z",
            "updated_at": "2020-06-07T00:15:43.000000Z"
        },
        {
            "title": "Nesciunt accusantium ut et ad. Laborum aspernatur molestiae sed minima. Quos expedita sint et dolorum. Et ex fugiat et laudantium sequi.",
            "description": "Vel aut rerum impedit. Earum quos assumenda reprehenderit vitae qui praesentium quis. Tempora qui est ut. Neque ex quis doloremque deserunt voluptatibus voluptatibus a.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:15:43.000000Z",
            "created_at": "2020-06-07T00:15:43.000000Z",
            "updated_at": "2020-06-07T00:15:43.000000Z"
        },
        {
            "title": "Et architecto suscipit dicta quisquam nulla. Qui iste blanditiis libero temporibus. Cumque et reiciendis et rerum aut velit vel.",
            "description": "Cum et quia quasi nam vel impedit. Incidunt debitis id possimus molestiae. Sed ut accusantium sed. Quo laborum aut possimus nulla eaque labore.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:15:43.000000Z",
            "created_at": "2020-06-07T00:15:43.000000Z",
            "updated_at": "2020-06-07T00:15:43.000000Z"
        },
        {
            "title": "Officiis necessitatibus nam fuga non vel. Rem aut quaerat molestiae. Doloribus deleniti qui fuga.",
            "description": "Omnis perspiciatis sunt iusto qui dolorem. Alias eaque voluptatem expedita officia at excepturi. Sunt voluptatem accusantium dolores cum hic mollitia eveniet.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:14:49.000000Z",
            "created_at": "2020-06-07T00:14:49.000000Z",
            "updated_at": "2020-06-07T00:14:49.000000Z"
        },
        {
            "title": "Aut ut enim ex ea dolor ducimus. Omnis delectus sed ea consequuntur. Aut eius unde modi quis id aliquid eligendi. Autem incidunt est neque aut magnam autem.",
            "description": "Et laudantium aut qui corporis aliquam. Ex ipsam quo exercitationem nihil soluta deleniti iure. Amet sint maxime unde architecto aut qui. Consequuntur pariatur quis ea nihil unde ex ipsa.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:14:49.000000Z",
            "created_at": "2020-06-07T00:14:49.000000Z",
            "updated_at": "2020-06-07T00:14:49.000000Z"
        },
        {
            "title": "Illo est deserunt suscipit voluptas ea porro ducimus culpa. Ea repudiandae est doloribus optio et dolores voluptatibus. Ut animi quia laborum pariatur hic.",
            "description": "Laudantium nesciunt iusto pariatur. Eligendi voluptatem at odit consequatur itaque vitae. Maiores illum adipisci sit aut. Architecto est facere veritatis dolores. Suscipit earum inventore tenetur.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:14:49.000000Z",
            "created_at": "2020-06-07T00:14:49.000000Z",
            "updated_at": "2020-06-07T00:14:49.000000Z"
        },
        {
            "title": "Consequuntur nostrum nihil eligendi incidunt voluptatem optio ea. Recusandae cumque ut numquam dolorem. Et voluptas et alias aliquid voluptatum eveniet impedit. Dicta occaecati inventore eos sit.",
            "description": "Suscipit doloribus culpa deleniti qui. Et voluptatem ut est.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:14:49.000000Z",
            "created_at": "2020-06-07T00:14:49.000000Z",
            "updated_at": "2020-06-07T00:14:49.000000Z"
        },
        {
            "title": "Ratione non possimus quia molestiae. Molestiae est modi molestiae est adipisci nulla quia. In molestiae provident tenetur est qui assumenda non. Enim optio in necessitatibus dolores hic voluptatem.",
            "description": "Ea cumque voluptas quis. Odio sunt minus officia et quia quod. Magnam distinctio facere fugit saepe quam est ut qui.",
            "karma": 0,
            "karmed": 0,
            "votes_count": 0,
            "votes_sum": 0,
            "voted": false,
            "comments": [],
            "question_items": [],
            "end_at": "2020-06-12T00:14:49.000000Z",
            "created_at": "2020-06-07T00:14:49.000000Z",
            "updated_at": "2020-06-07T00:14:49.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/questions?page=1",
        "last": "http:\/\/localhost\/api\/questions?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/questions",
        "per_page": 15,
        "to": 15,
        "total": 15
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","end_at":"2020-06-08 20:20:00","items":[{"text":"Goot text"}]}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
        "title": "Officiis necessitatibus nam fuga non vel. Rem aut quaerat molestiae. Doloribus deleniti qui fuga.",
        "description": "Omnis perspiciatis sunt iusto qui dolorem. Alias eaque voluptatem expedita officia at excepturi. Sunt voluptatem accusantium dolores cum hic mollitia eveniet.",
        "karma": 0,
        "karmed": 0,
        "votes_count": 0,
        "votes_sum": 0,
        "voted": false,
        "comments": [],
        "question_items": [],
        "end_at": "2020-06-12T00:14:49.000000Z",
        "created_at": "2020-06-07T00:14:49.000000Z",
        "updated_at": "2020-06-07T00:14:49.000000Z"
    }
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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


> Example response (200):

```json
{
    "data": {
        "title": "Officiis necessitatibus nam fuga non vel. Rem aut quaerat molestiae. Doloribus deleniti qui fuga.",
        "description": "We will eat bubblegum",
        "karma": 0,
        "karmed": 0,
        "votes_count": 0,
        "votes_sum": 0,
        "voted": false,
        "comments": [],
        "question_items": [],
        "end_at": "2020-06-12T00:14:49.000000Z",
        "created_at": "2020-06-07T00:14:49.000000Z",
        "updated_at": "2020-06-07T00:29:22.000000Z"
    }
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
        "name": "Gosha Kargin",
        "birthday_at": null,
        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
        "vk": "https:\/\/vk.com\/id49879593",
        "influence": 0,
        "rank": 1,
        "karma": 0,
        "entities": [
            {
                "id": 1,
                "type": "event",
                "user_id": 1,
                "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 2,
                "type": "event",
                "user_id": 1,
                "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 3,
                "type": "event",
                "user_id": 1,
                "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 4,
                "type": "event",
                "user_id": 1,
                "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 5,
                "type": "event",
                "user_id": 1,
                "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            }
        ],
        "created_at": "2020-06-06T19:20:17.000000Z",
        "updated_at": "2020-06-06T19:20:17.000000Z"
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
    -H "Authorization: Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 2|uvlx7CKJUkTTLjujjEcU8Bsf8jg4VUUA6i9uwRe0v5T8MeKQVXWFjFaM2GhLbsg99Q5rj0kU1w4Cc5rY",
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
        "name": "Gosha Kargin",
        "birthday_at": null,
        "photo": "https:\/\/sun9-24.userapi.com\/c638130\/v638130974\/60fa9\/wyEsaKT3baU.jpg?ava=1",
        "vk": "https:\/\/vk.com\/id49879593",
        "influence": 0,
        "rank": 1,
        "karma": 0,
        "entities": [
            {
                "id": 1,
                "type": "event",
                "user_id": 1,
                "title": "Knave. The Knave of Hearts, carrying the King's crown on a summer day: The Knave did so, very carefully, with one eye; but to get very tired of this. I vote the young lady to see what was on the.",
                "description": "ME, and told me he was gone, and, by the end of the cakes, and was going to dive in among the distant green leaves. As there seemed to be rude, so she went on, half to itself, 'Oh dear! Oh dear! I'd.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 2,
                "type": "event",
                "user_id": 1,
                "title": "Bill!' then the Mock Turtle went on. 'I do,' Alice said to herself, as she wandered about in all directions, tumbling up against each other; however, they got thrown out to be no chance of this, so.",
                "description": "Alice. 'I'm glad they don't seem to put down the bottle, saying to herself, and began by producing from under his arm a great deal to ME,' said the Hatter: 'but you could keep it to her lips. 'I.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 3,
                "type": "event",
                "user_id": 1,
                "title": "I don't like them raw.' 'Well, be off, and had to pinch it to be said. At last the Mouse, frowning, but very politely: 'Did you say things are \"much of a muchness\"--did you ever see you again, you.",
                "description": "The further off from England the nearer is to find that she never knew so much about a foot high: then she heard something like this:-- 'Fury said to the Mock Turtle angrily: 'really you are very.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 4,
                "type": "event",
                "user_id": 1,
                "title": "The Cat's head with great emphasis, looking hard at Alice the moment she quite forgot how to begin.' He looked anxiously at the window, she suddenly spread out her hand in her head, she tried hard.",
                "description": "I should be raving mad--at least not so mad as it could go, and making quite a conversation of it in a solemn tone, only changing the order of the Gryphon, and all must have been was not quite sure.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            },
            {
                "id": 5,
                "type": "event",
                "user_id": 1,
                "title": "Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no sorrow, you know. Come on!' So they got their tails in their mouths.",
                "description": "The master was an old conger-eel, that used to it in large letters. It was the King; and the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at it again: but.",
                "karma": 0,
                "rate": 0,
                "votes_count": 0,
                "votes_sum": 0,
                "created_at": "2020-06-07T00:14:40.000000Z",
                "updated_at": "2020-06-07T00:14:40.000000Z"
            }
        ],
        "created_at": "2020-06-06T19:20:17.000000Z",
        "updated_at": "2020-06-06T19:20:17.000000Z"
    }
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->


