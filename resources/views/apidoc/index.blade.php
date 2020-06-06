<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Auth</h1>
<p>Class AuthController</p>
<!-- START_732e3cdeb6f37fe89645fc5f1583fbee -->
<h2>Redirect the user to the Provider authentication page. Точка входа логинки</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/provider/vkontakte?callback_url=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/provider/vkontakte"
);

let params = {
    "callback_url": "sint",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET provider/{provider}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>provider</code></td>
<td>required</td>
<td>Provider, needed to auth. Подставить &quot;vkontakte&quot;.</td>
</tr>
</tbody>
</table>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>callback_url</code></td>
<td>required</td>
<td>Url, which need to redirect after Socialite login.</td>
</tr>
</tbody>
</table>
<!-- END_732e3cdeb6f37fe89645fc5f1583fbee -->
<!-- START_d13b0a9474a479be736af884e72a9773 -->
<h2>Obtain the user information from the Provider. Это колбек, сюда не лезьте.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/provider/1/callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/provider/1/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET provider/{provider}/callback</code></p>
<!-- END_d13b0a9474a479be736af884e72a9773 -->
<h1>Event</h1>
<p>Class EventController</p>
<!-- START_e59bc0d6c63548c8e901a7058dc2d963 -->
<h2>Store comment about event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"text":"Bla-bla-bla-bla-string"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "text": "Bla-bla-bla-bla-string"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events/{event}/comment</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>string</td>
<td>required</td>
<td>Text of comment.</td>
</tr>
</tbody>
</table>
<!-- END_e59bc0d6c63548c8e901a7058dc2d963 -->
<!-- START_4b2f9b1c7c2e39989b6f10e228397c2d -->
<h2>Karma up event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events/{event}/karmaUp</code></p>
<!-- END_4b2f9b1c7c2e39989b6f10e228397c2d -->
<!-- START_7b475ebb9bcd98371752157178aabdb1 -->
<h2>Karma down event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events/{event}/karmaDown</code></p>
<!-- END_7b475ebb9bcd98371752157178aabdb1 -->
<!-- START_355d5dac7d3e804f83d5690f40b6f874 -->
<h2>Rate event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events/{event}/rate</code></p>
<!-- END_355d5dac7d3e804f83d5690f40b6f874 -->
<!-- START_02e29414b7211eeccb73592e76801925 -->
<h2>Unrate event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events/1/unrate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events/{event}/unrate</code></p>
<!-- END_02e29414b7211eeccb73592e76801925 -->
<!-- START_742a1cbd4a274c7269f0db99a704ff41 -->
<h2>Display a listing of the events.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/events?page=1",
        "last": "http:\/\/localhost\/api\/events?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/events",
        "per_page": 15,
        "to": null,
        "total": 0
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/events</code></p>
<!-- END_742a1cbd4a274c7269f0db99a704ff41 -->
<!-- START_de3413bf02c9bb71627fa96e1c1c409f -->
<h2>Store a newly created event in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City","photos":[20]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum",
    "place": "Moscow City",
    "photos": [
        20
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "This action is unauthorized."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/events</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
<td>Title of event.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
<td>Description of event.</td>
</tr>
<tr>
<td><code>place</code></td>
<td>string</td>
<td>optional</td>
<td>Place address or name of evenet.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_de3413bf02c9bb71627fa96e1c1c409f -->
<!-- START_379a3beb17bbb91528d80d8507f69655 -->
<h2>Display the specified event.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/events/{event}</code></p>
<!-- END_379a3beb17bbb91528d80d8507f69655 -->
<!-- START_d16967fd1d3d935666f7e8112a1a4451 -->
<h2>Update the specified event in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool event","description":"We will eat bubblegum","place":"Moscow City","photos":[18]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool event",
    "description": "We will eat bubblegum",
    "place": "Moscow City",
    "photos": [
        18
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/events/{event}</code></p>
<p><code>PATCH api/events/{event}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>Title of event.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>optional</td>
<td>Description of event.</td>
</tr>
<tr>
<td><code>place</code></td>
<td>string</td>
<td>optional</td>
<td>Place address or name of evenet.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_d16967fd1d3d935666f7e8112a1a4451 -->
<h1>Initiative</h1>
<p>Class InitiativeController</p>
<!-- START_1c7707699c1bced2a59fe182141c35df -->
<h2>Rate up initiative</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/initiatives/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Initiative] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/initiatives/{initiative}/rate</code></p>
<!-- END_1c7707699c1bced2a59fe182141c35df -->
<!-- START_84abc5315e7eca6d9ebed66f84ded57e -->
<h2>Unrate initiative</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/initiatives/1/unrate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives/1/unrate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Initiative] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/initiatives/{initiative}/unrate</code></p>
<!-- END_84abc5315e7eca6d9ebed66f84ded57e -->
<!-- START_8186890a1d298052163f998945711a33 -->
<h2>Display a listing of the Initiatives.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/initiatives" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/initiatives</code></p>
<!-- END_8186890a1d298052163f998945711a33 -->
<!-- START_845982b7fd343cc0372db96eb1bebcc3 -->
<h2>Store a newly created Initiative in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/initiatives" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?","photos":[15]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool initiative",
    "description": "All need to eat bubblegums!",
    "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
    "objective": "Bubblegums for everyone",
    "goals": "Give bubblegum to me, to you and to bonch.dev",
    "geography": "whole world",
    "result": "bonch.dev lopnet",
    "additional": "Why I need to comment it?",
    "photos": [
        15
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "This action is unauthorized."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/initiatives</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
<td>Title of initiative.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
<td>Description of initiative.</td>
</tr>
<tr>
<td><code>video_url</code></td>
<td>string</td>
<td>required</td>
<td>Url to youtube.com of video.</td>
</tr>
<tr>
<td><code>objective</code></td>
<td>string</td>
<td>required</td>
<td>Objective of initiative.</td>
</tr>
<tr>
<td><code>goals</code></td>
<td>string</td>
<td>required</td>
<td>Goals of initiative.</td>
</tr>
<tr>
<td><code>geography</code></td>
<td>string</td>
<td>required</td>
<td>Geography of your initiative.</td>
</tr>
<tr>
<td><code>result</code></td>
<td>string</td>
<td>required</td>
<td>Result when initiative end's.</td>
</tr>
<tr>
<td><code>additional</code></td>
<td>string</td>
<td>optional</td>
<td>Some comments of initiative.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_845982b7fd343cc0372db96eb1bebcc3 -->
<!-- START_da8896bd7ca97f16dc5fb07db82242a6 -->
<h2>Display the specified Initiative.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/initiatives/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Initiative] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/initiatives/{initiative}</code></p>
<!-- END_da8896bd7ca97f16dc5fb07db82242a6 -->
<!-- START_67346ec0dfdddc8eddeadb8fa3727bb1 -->
<h2>Update the specified resource in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/initiatives/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool initiative","description":"All need to eat bubblegums!","video_url":"https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo","objective":"Bubblegums for everyone","goals":"Give bubblegum to me, to you and to bonch.dev","geography":"whole world","result":"bonch.dev lopnet","additional":"Why I need to comment it?","photos":[9]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/initiatives/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool initiative",
    "description": "All need to eat bubblegums!",
    "video_url": "https:\/\/www.youtube.com\/watch?v=Qzw6A2WC5Qo",
    "objective": "Bubblegums for everyone",
    "goals": "Give bubblegum to me, to you and to bonch.dev",
    "geography": "whole world",
    "result": "bonch.dev lopnet",
    "additional": "Why I need to comment it?",
    "photos": [
        9
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Initiative] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/initiatives/{initiative}</code></p>
<p><code>PATCH api/initiatives/{initiative}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>Title of initiative.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>optional</td>
<td>Description of initiative.</td>
</tr>
<tr>
<td><code>video_url</code></td>
<td>string</td>
<td>optional</td>
<td>Url to youtube.com of video.</td>
</tr>
<tr>
<td><code>objective</code></td>
<td>string</td>
<td>optional</td>
<td>Objective of initiative.</td>
</tr>
<tr>
<td><code>goals</code></td>
<td>string</td>
<td>optional</td>
<td>Goals of initiative.</td>
</tr>
<tr>
<td><code>geography</code></td>
<td>string</td>
<td>optional</td>
<td>Geography of your initiative.</td>
</tr>
<tr>
<td><code>result</code></td>
<td>string</td>
<td>optional</td>
<td>Result when initiative end's.</td>
</tr>
<tr>
<td><code>additional</code></td>
<td>string</td>
<td>optional</td>
<td>Some comments of initiative.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_67346ec0dfdddc8eddeadb8fa3727bb1 -->
<h1>Media</h1>
<p>API for management medias (images)</p>
<p>Class MediaController</p>
<!-- START_5900363c9d9cf8069f0abf41866a659f -->
<h2>Store single media file</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "file": [
            "The file field is required."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/media</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>file</code></td>
<td>image</td>
<td>required</td>
<td>Image need to be upload to server.</td>
</tr>
</tbody>
</table>
<!-- END_5900363c9d9cf8069f0abf41866a659f -->
<!-- START_bb5530c02c7579ae6874d5b27b986ee3 -->
<h2>Store media files</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "files": [
            "The files field is required."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/media</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>files</code></td>
<td>array</td>
<td>required</td>
<td>Array of files (images) what need to be uploaded to server.</td>
</tr>
<tr>
<td><code>files.*</code></td>
<td>image</td>
<td>required</td>
<td>Image need to be upload to server.</td>
</tr>
</tbody>
</table>
<!-- END_bb5530c02c7579ae6874d5b27b986ee3 -->
<h1>Post</h1>
<p>Class PostController</p>
<!-- START_2e801dd71d2d900d8da8bd55f490d9a8 -->
<h2>Store comment about event</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/posts/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"text":"Bla-bla-bla-bla-string"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "text": "Bla-bla-bla-bla-string"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Post] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/posts/{post}/comment</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>string</td>
<td>required</td>
<td>Text of comment.</td>
</tr>
</tbody>
</table>
<!-- END_2e801dd71d2d900d8da8bd55f490d9a8 -->
<!-- START_59dc0f1a6838e9d2431348c32ba37f35 -->
<h2>Karma up post</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/posts/1/karmaUp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/1/karmaUp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Post] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/posts/{post}/karmaUp</code></p>
<!-- END_59dc0f1a6838e9d2431348c32ba37f35 -->
<!-- START_5c3a52895f8ead1583ef6d922f6cd01f -->
<h2>Karma down post</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/posts/1/karmaDown" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/1/karmaDown"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Post] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/posts/{post}/karmaDown</code></p>
<!-- END_5c3a52895f8ead1583ef6d922f6cd01f -->
<!-- START_da50450f1df5336c2a14a7a368c5fb9c -->
<h2>Display a listing of the Posts.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/posts</code></p>
<!-- END_da50450f1df5336c2a14a7a368c5fb9c -->
<!-- START_ea8d166c68ec035668ea724e12cafa45 -->
<h2>Store a newly created Post in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool post","text":"I eating bubblegum","photos":[1]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool post",
    "text": "I eating bubblegum",
    "photos": [
        1
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "This action is unauthorized."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/posts</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
<td>Title of post.</td>
</tr>
<tr>
<td><code>text</code></td>
<td>string</td>
<td>required</td>
<td>Text of post.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_ea8d166c68ec035668ea724e12cafa45 -->
<!-- START_726b7bf93b3209836a1cbcda5b3b6703 -->
<h2>Display the specified Post.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Post] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/posts/{post}</code></p>
<!-- END_726b7bf93b3209836a1cbcda5b3b6703 -->
<!-- START_6d1dfaf5fa710725519375063e4e9db0 -->
<h2>Update the specified resource in storage.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY" \
    -d '{"title":"My cool post","text":"I eating bubblegum","photos":[12]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

let body = {
    "title": "My cool post",
    "text": "I eating bubblegum",
    "photos": [
        12
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Post] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/posts/{post}</code></p>
<p><code>PATCH api/posts/{post}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>Title of post.</td>
</tr>
<tr>
<td><code>text</code></td>
<td>string</td>
<td>optional</td>
<td>Text of post.</td>
</tr>
<tr>
<td><code>photos</code></td>
<td>array</td>
<td>optional</td>
<td>Array of used uploaded photos.</td>
</tr>
<tr>
<td><code>photos.*</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of uploaded photo.</td>
</tr>
</tbody>
</table>
<!-- END_6d1dfaf5fa710725519375063e4e9db0 -->
<h1>User</h1>
<p>Class UserController</p>
<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
<h2>Display the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\User] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users/{user}</code></p>
<!-- END_8653614346cb0e3d444d164579a0a0a2 -->
<!-- START_8d1e53fcf4d2d02a6144ed392de856bf -->
<h2>Display info about me</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/users/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQxMjVlMGZkZGVlY2U4ZjI0YWRjYzQxYWFkYWQ3YTA2MWM5NGYyZTMxOTE1ZGMxNjNmNzViZWVlM2QxZWFkZDY4OTA4NmEyNWEwZmQzMDciLCJpYXQiOjE1OTAwNzE0MTksIm5iZiI6MTU5MDA3MTQxOSwiZXhwIjoxNjIxNjA3NDE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gSjvlXnc__vIdKLDgQPx5pXZxKJ_-31UA1EOARpIW0AWbMlQISCQIMAd8FttYZrylj-VUuJCzABpd9iYOiPOZzTtixLjnQhNO88NppyGm2zrAvonpGPR1HK2E1utKiG6eH1EIT5Ynt83FrBrPEx9qc8frMXsqKCdCOxYVpmS_YuwPG4mj1IkmEbRocBPO074hgvsasuH3RTNUkF-a_Cuo2Or7p1DltlZI_1G_mQ0kOnxK-oovQ3SndZczJmXc26KO6tJzOoJFp3oyAgepGvkQrtajPw8f-ZMlTzAmMKSTQhxL17llYKuqzpClNZJRyfziMJjDChJuRDG88e2cA8lUzIESIOdqTimYjP53hGdXXjaUGlt5COtS8maR3yBYTtv_6N_WqGmq59KKfgl2W2dHyCNefRB5dVKeX8WRv2KNG1kEmGHkmpIEVy_VElNnVcKRHiWyWkUFfcA9NsOe46UDnvHrMbo08ac9nEnYkXTJxdRXuZetjmQRkoWODSRfuCnk6a03l9Jo3DxaTosV6-m905XflcFn5y9iHjd6qAU_TvXXnYzu-Em4ee6L9Iw0D2m_AWlw5sb1yXqEBaffXjGhZv121h5j25e77ftub_Yi1bo2M1Go7-9Y0JoSYrR7pOdzhhyo2t_Z40IjbnqfD0tq-cKtUB_gVtcfwbuMm1jQPY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users/me</code></p>
<!-- END_8d1e53fcf4d2d02a6144ed392de856bf -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>