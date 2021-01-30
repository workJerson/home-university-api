# Endpoints


## api/forgot-password




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/forgot-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-forgot-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"></code></pre>
</div>
<div id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password"></code></pre>
</div>
<form id="form-POSTapi-forgot-password" data-method="POST" data-path="api/forgot-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-forgot-password" onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-forgot-password" onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-forgot-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/forgot-password</code></b>
</p>
</form>


## api/reset-password




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-reset-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"></code></pre>
</div>
<div id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password"></code></pre>
</div>
<form id="form-POSTapi-reset-password" data-method="POST" data-path="api/reset-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-reset-password" onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-reset-password" onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-reset-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/reset-password</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/course" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/course"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-course" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-course"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-course"></code></pre>
</div>
<div id="execution-error-GETapi-course" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-course"></code></pre>
</div>
<form id="form-GETapi-course" data-method="GET" data-path="api/course" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-course', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-course" onclick="tryItOut('GETapi-course');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-course" onclick="cancelTryOut('GETapi-course');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-course" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/course</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/course" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/course"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-course" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-course"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-course"></code></pre>
</div>
<div id="execution-error-POSTapi-course" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-course"></code></pre>
</div>
<form id="form-POSTapi-course" data-method="POST" data-path="api/course" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-course', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-course" onclick="tryItOut('POSTapi-course');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-course" onclick="cancelTryOut('POSTapi-course');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-course" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/course</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/course/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/course/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Course] in",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 368,
    "trace": [
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 317,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-course--course-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-course--course-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-course--course-"></code></pre>
</div>
<div id="execution-error-GETapi-course--course-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-course--course-"></code></pre>
</div>
<form id="form-GETapi-course--course-" data-method="GET" data-path="api/course/{course}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-course--course-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-course--course-" onclick="tryItOut('GETapi-course--course-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-course--course-" onclick="cancelTryOut('GETapi-course--course-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-course--course-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/course/{course}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course" data-endpoint="GETapi-course--course-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/course/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/course/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-course--course-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-course--course-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-course--course-"></code></pre>
</div>
<div id="execution-error-PUTapi-course--course-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-course--course-"></code></pre>
</div>
<form id="form-PUTapi-course--course-" data-method="PUT" data-path="api/course/{course}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-course--course-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-course--course-" onclick="tryItOut('PUTapi-course--course-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-course--course-" onclick="cancelTryOut('PUTapi-course--course-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-course--course-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/course/{course}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/course/{course}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course" data-endpoint="PUTapi-course--course-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/course/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/course/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-course--course-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-course--course-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-course--course-"></code></pre>
</div>
<div id="execution-error-DELETEapi-course--course-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-course--course-"></code></pre>
</div>
<form id="form-DELETEapi-course--course-" data-method="DELETE" data-path="api/course/{course}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-course--course-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-course--course-" onclick="tryItOut('DELETEapi-course--course-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-course--course-" onclick="cancelTryOut('DELETEapi-course--course-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-course--course-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/course/{course}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course" data-endpoint="DELETEapi-course--course-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-news" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-news"></code></pre>
</div>
<div id="execution-error-GETapi-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-news"></code></pre>
</div>
<form id="form-GETapi-news" data-method="GET" data-path="api/news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-news" onclick="tryItOut('GETapi-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-news" onclick="cancelTryOut('GETapi-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/news</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-news" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-news"></code></pre>
</div>
<div id="execution-error-POSTapi-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-news"></code></pre>
</div>
<form id="form-POSTapi-news" data-method="POST" data-path="api/news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-news" onclick="tryItOut('POSTapi-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-news" onclick="cancelTryOut('POSTapi-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/news</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/news/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/news/nisi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-news--news-"></code></pre>
</div>
<div id="execution-error-GETapi-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-news--news-"></code></pre>
</div>
<form id="form-GETapi-news--news-" data-method="GET" data-path="api/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-news--news-" onclick="tryItOut('GETapi-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-news--news-" onclick="cancelTryOut('GETapi-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="GETapi-news--news-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/news/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/news/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-news--news-"></code></pre>
</div>
<div id="execution-error-PUTapi-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-news--news-"></code></pre>
</div>
<form id="form-PUTapi-news--news-" data-method="PUT" data-path="api/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-news--news-" onclick="tryItOut('PUTapi-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-news--news-" onclick="cancelTryOut('PUTapi-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/news/{news}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="PUTapi-news--news-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/news/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/news/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-news--news-"></code></pre>
</div>
<div id="execution-error-DELETEapi-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-news--news-"></code></pre>
</div>
<form id="form-DELETEapi-news--news-" data-method="DELETE" data-path="api/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-news--news-" onclick="tryItOut('DELETEapi-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-news--news-" onclick="cancelTryOut('DELETEapi-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="DELETEapi-news--news-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/program" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/program"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-program" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-program"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-program"></code></pre>
</div>
<div id="execution-error-GETapi-program" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-program"></code></pre>
</div>
<form id="form-GETapi-program" data-method="GET" data-path="api/program" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-program', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-program" onclick="tryItOut('GETapi-program');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-program" onclick="cancelTryOut('GETapi-program');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-program" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/program</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/program" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/program"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-program" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-program"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-program"></code></pre>
</div>
<div id="execution-error-POSTapi-program" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-program"></code></pre>
</div>
<form id="form-POSTapi-program" data-method="POST" data-path="api/program" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-program', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-program" onclick="tryItOut('POSTapi-program');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-program" onclick="cancelTryOut('POSTapi-program');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-program" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/program</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/program/esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/program/esse"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-program--program-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-program--program-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-program--program-"></code></pre>
</div>
<div id="execution-error-GETapi-program--program-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-program--program-"></code></pre>
</div>
<form id="form-GETapi-program--program-" data-method="GET" data-path="api/program/{program}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-program--program-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-program--program-" onclick="tryItOut('GETapi-program--program-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-program--program-" onclick="cancelTryOut('GETapi-program--program-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-program--program-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/program/{program}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>program</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="program" data-endpoint="GETapi-program--program-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/program/deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/program/deserunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-program--program-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-program--program-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-program--program-"></code></pre>
</div>
<div id="execution-error-PUTapi-program--program-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-program--program-"></code></pre>
</div>
<form id="form-PUTapi-program--program-" data-method="PUT" data-path="api/program/{program}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-program--program-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-program--program-" onclick="tryItOut('PUTapi-program--program-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-program--program-" onclick="cancelTryOut('PUTapi-program--program-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-program--program-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/program/{program}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/program/{program}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>program</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="program" data-endpoint="PUTapi-program--program-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/program/a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/program/a"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-program--program-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-program--program-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-program--program-"></code></pre>
</div>
<div id="execution-error-DELETEapi-program--program-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-program--program-"></code></pre>
</div>
<form id="form-DELETEapi-program--program-" data-method="DELETE" data-path="api/program/{program}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-program--program-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-program--program-" onclick="tryItOut('DELETEapi-program--program-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-program--program-" onclick="cancelTryOut('DELETEapi-program--program-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-program--program-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/program/{program}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>program</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="program" data-endpoint="DELETEapi-program--program-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/school" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/school"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-school" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-school"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-school"></code></pre>
</div>
<div id="execution-error-GETapi-school" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-school"></code></pre>
</div>
<form id="form-GETapi-school" data-method="GET" data-path="api/school" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-school', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-school" onclick="tryItOut('GETapi-school');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-school" onclick="cancelTryOut('GETapi-school');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-school" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/school</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/school" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/school"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-school" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-school"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-school"></code></pre>
</div>
<div id="execution-error-POSTapi-school" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-school"></code></pre>
</div>
<form id="form-POSTapi-school" data-method="POST" data-path="api/school" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-school', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-school" onclick="tryItOut('POSTapi-school');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-school" onclick="cancelTryOut('POSTapi-school');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-school" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/school</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/school/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/school/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-school--school-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-school--school-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-school--school-"></code></pre>
</div>
<div id="execution-error-GETapi-school--school-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-school--school-"></code></pre>
</div>
<form id="form-GETapi-school--school-" data-method="GET" data-path="api/school/{school}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-school--school-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-school--school-" onclick="tryItOut('GETapi-school--school-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-school--school-" onclick="cancelTryOut('GETapi-school--school-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-school--school-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/school/{school}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>school</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="school" data-endpoint="GETapi-school--school-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/school/tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/school/tempore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-school--school-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-school--school-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-school--school-"></code></pre>
</div>
<div id="execution-error-PUTapi-school--school-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-school--school-"></code></pre>
</div>
<form id="form-PUTapi-school--school-" data-method="PUT" data-path="api/school/{school}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-school--school-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-school--school-" onclick="tryItOut('PUTapi-school--school-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-school--school-" onclick="cancelTryOut('PUTapi-school--school-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-school--school-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/school/{school}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/school/{school}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>school</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="school" data-endpoint="PUTapi-school--school-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/school/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/school/accusantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-school--school-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-school--school-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-school--school-"></code></pre>
</div>
<div id="execution-error-DELETEapi-school--school-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-school--school-"></code></pre>
</div>
<form id="form-DELETEapi-school--school-" data-method="DELETE" data-path="api/school/{school}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-school--school-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-school--school-" onclick="tryItOut('DELETEapi-school--school-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-school--school-" onclick="cancelTryOut('DELETEapi-school--school-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-school--school-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/school/{school}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>school</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="school" data-endpoint="DELETEapi-school--school-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/student" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/student"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-student" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-student"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-student"></code></pre>
</div>
<div id="execution-error-GETapi-student" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-student"></code></pre>
</div>
<form id="form-GETapi-student" data-method="GET" data-path="api/student" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-student', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-student" onclick="tryItOut('GETapi-student');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-student" onclick="cancelTryOut('GETapi-student');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-student" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/student</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/student" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/student"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-student" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-student"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-student"></code></pre>
</div>
<div id="execution-error-POSTapi-student" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-student"></code></pre>
</div>
<form id="form-POSTapi-student" data-method="POST" data-path="api/student" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-student', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-student" onclick="tryItOut('POSTapi-student');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-student" onclick="cancelTryOut('POSTapi-student');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-student" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/student</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/student/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/student/labore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-student--student-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-student--student-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-student--student-"></code></pre>
</div>
<div id="execution-error-GETapi-student--student-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-student--student-"></code></pre>
</div>
<form id="form-GETapi-student--student-" data-method="GET" data-path="api/student/{student}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-student--student-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-student--student-" onclick="tryItOut('GETapi-student--student-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-student--student-" onclick="cancelTryOut('GETapi-student--student-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-student--student-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/student/{student}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>student</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student" data-endpoint="GETapi-student--student-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/student/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/student/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-student--student-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-student--student-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-student--student-"></code></pre>
</div>
<div id="execution-error-PUTapi-student--student-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-student--student-"></code></pre>
</div>
<form id="form-PUTapi-student--student-" data-method="PUT" data-path="api/student/{student}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-student--student-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-student--student-" onclick="tryItOut('PUTapi-student--student-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-student--student-" onclick="cancelTryOut('PUTapi-student--student-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-student--student-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/student/{student}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/student/{student}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>student</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student" data-endpoint="PUTapi-student--student-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/student/possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/student/possimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-student--student-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-student--student-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-student--student-"></code></pre>
</div>
<div id="execution-error-DELETEapi-student--student-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-student--student-"></code></pre>
</div>
<form id="form-DELETEapi-student--student-" data-method="DELETE" data-path="api/student/{student}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-student--student-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-student--student-" onclick="tryItOut('DELETEapi-student--student-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-student--student-" onclick="cancelTryOut('DELETEapi-student--student-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-student--student-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/student/{student}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>student</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student" data-endpoint="DELETEapi-student--student-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/testimonial" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/testimonial"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-testimonial" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-testimonial"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-testimonial"></code></pre>
</div>
<div id="execution-error-GETapi-testimonial" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-testimonial"></code></pre>
</div>
<form id="form-GETapi-testimonial" data-method="GET" data-path="api/testimonial" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-testimonial', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-testimonial" onclick="tryItOut('GETapi-testimonial');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-testimonial" onclick="cancelTryOut('GETapi-testimonial');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-testimonial" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/testimonial</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/testimonial" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/testimonial"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-testimonial" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-testimonial"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-testimonial"></code></pre>
</div>
<div id="execution-error-POSTapi-testimonial" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-testimonial"></code></pre>
</div>
<form id="form-POSTapi-testimonial" data-method="POST" data-path="api/testimonial" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-testimonial', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-testimonial" onclick="tryItOut('POSTapi-testimonial');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-testimonial" onclick="cancelTryOut('POSTapi-testimonial');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-testimonial" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/testimonial</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/testimonial/fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/testimonial/fuga"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-testimonial--testimonial-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-testimonial--testimonial-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-testimonial--testimonial-"></code></pre>
</div>
<div id="execution-error-GETapi-testimonial--testimonial-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-testimonial--testimonial-"></code></pre>
</div>
<form id="form-GETapi-testimonial--testimonial-" data-method="GET" data-path="api/testimonial/{testimonial}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-testimonial--testimonial-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-testimonial--testimonial-" onclick="tryItOut('GETapi-testimonial--testimonial-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-testimonial--testimonial-" onclick="cancelTryOut('GETapi-testimonial--testimonial-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-testimonial--testimonial-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/testimonial/{testimonial}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>testimonial</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="testimonial" data-endpoint="GETapi-testimonial--testimonial-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://home-university-api.test/api/testimonial/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/testimonial/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-testimonial--testimonial-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-testimonial--testimonial-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-testimonial--testimonial-"></code></pre>
</div>
<div id="execution-error-PUTapi-testimonial--testimonial-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-testimonial--testimonial-"></code></pre>
</div>
<form id="form-PUTapi-testimonial--testimonial-" data-method="PUT" data-path="api/testimonial/{testimonial}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-testimonial--testimonial-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-testimonial--testimonial-" onclick="tryItOut('PUTapi-testimonial--testimonial-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-testimonial--testimonial-" onclick="cancelTryOut('PUTapi-testimonial--testimonial-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-testimonial--testimonial-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/testimonial/{testimonial}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/testimonial/{testimonial}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>testimonial</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="testimonial" data-endpoint="PUTapi-testimonial--testimonial-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://home-university-api.test/api/testimonial/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/testimonial/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-testimonial--testimonial-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-testimonial--testimonial-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-testimonial--testimonial-"></code></pre>
</div>
<div id="execution-error-DELETEapi-testimonial--testimonial-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-testimonial--testimonial-"></code></pre>
</div>
<form id="form-DELETEapi-testimonial--testimonial-" data-method="DELETE" data-path="api/testimonial/{testimonial}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-testimonial--testimonial-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-testimonial--testimonial-" onclick="tryItOut('DELETEapi-testimonial--testimonial-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-testimonial--testimonial-" onclick="cancelTryOut('DELETEapi-testimonial--testimonial-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-testimonial--testimonial-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/testimonial/{testimonial}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>testimonial</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="testimonial" data-endpoint="DELETEapi-testimonial--testimonial-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/auth/login




> Example request:

```bash
curl -X POST \
    "http://home-university-api.test/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</div>
<form id="form-POSTapi-auth-login" data-method="POST" data-path="api/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-login" onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-login" onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/login</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "psgcCode": "010000000",
        "regDesc": "REGION I (ILOCOS REGION)",
        "regCode": 1,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 2,
        "psgcCode": "020000000",
        "regDesc": "REGION II (CAGAYAN VALLEY)",
        "regCode": 2,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 3,
        "psgcCode": "030000000",
        "regDesc": "REGION III (CENTRAL LUZON)",
        "regCode": 3,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 4,
        "psgcCode": "040000000",
        "regDesc": "REGION IV-A (CALABARZON)",
        "regCode": 4,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 5,
        "psgcCode": "170000000",
        "regDesc": "REGION IV-B (MIMAROPA)",
        "regCode": 17,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 6,
        "psgcCode": "050000000",
        "regDesc": "REGION V (BICOL REGION)",
        "regCode": 5,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 7,
        "psgcCode": "060000000",
        "regDesc": "REGION VI (WESTERN VISAYAS)",
        "regCode": 6,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 8,
        "psgcCode": "070000000",
        "regDesc": "REGION VII (CENTRAL VISAYAS)",
        "regCode": 7,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 9,
        "psgcCode": "080000000",
        "regDesc": "REGION VIII (EASTERN VISAYAS)",
        "regCode": 8,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 10,
        "psgcCode": "090000000",
        "regDesc": "REGION IX (ZAMBOANGA PENINSULA)",
        "regCode": 9,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 11,
        "psgcCode": "100000000",
        "regDesc": "REGION X (NORTHERN MINDANAO)",
        "regCode": 10,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 12,
        "psgcCode": "110000000",
        "regDesc": "REGION XI (DAVAO REGION)",
        "regCode": 11,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 13,
        "psgcCode": "120000000",
        "regDesc": "REGION XII (SOCCSKSARGEN)",
        "regCode": 12,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 14,
        "psgcCode": "130000000",
        "regDesc": "NATIONAL CAPITAL REGION (NCR)",
        "regCode": 13,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 15,
        "psgcCode": "140000000",
        "regDesc": "CORDILLERA ADMINISTRATIVE REGION (CAR)",
        "regCode": 14,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 16,
        "psgcCode": "150000000",
        "regDesc": "AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)",
        "regCode": 15,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 17,
        "psgcCode": "160000000",
        "regDesc": "REGION XIII (Caraga)",
        "regCode": 16,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    }
]
```
<div id="execution-results-GETapi-settings-regions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-regions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-regions"></code></pre>
</div>
<div id="execution-error-GETapi-settings-regions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-regions"></code></pre>
</div>
<form id="form-GETapi-settings-regions" data-method="GET" data-path="api/settings/regions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-regions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-regions" onclick="tryItOut('GETapi-settings-regions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-regions" onclick="cancelTryOut('GETapi-settings-regions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-regions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/regions</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/regions/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/regions/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Region] sunt",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 368,
    "trace": [
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 317,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\XLOG User\\Desktop\\Jerson\\Laravel\\home-university-api\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-settings-regions--region-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-regions--region-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-regions--region-"></code></pre>
</div>
<div id="execution-error-GETapi-settings-regions--region-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-regions--region-"></code></pre>
</div>
<form id="form-GETapi-settings-regions--region-" data-method="GET" data-path="api/settings/regions/{region}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-regions--region-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-regions--region-" onclick="tryItOut('GETapi-settings-regions--region-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-regions--region-" onclick="cancelTryOut('GETapi-settings-regions--region-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-regions--region-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/regions/{region}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="region" data-endpoint="GETapi-settings-regions--region-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/provinces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/provinces"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "psgcCode": "012800000",
        "provDesc": "ILOCOS NORTE",
        "regCode": 1,
        "provCode": 128,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 2,
        "psgcCode": "012900000",
        "provDesc": "ILOCOS SUR",
        "regCode": 1,
        "provCode": 129,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 3,
        "psgcCode": "013300000",
        "provDesc": "LA UNION",
        "regCode": 1,
        "provCode": 133,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 4,
        "psgcCode": "015500000",
        "provDesc": "PANGASINAN",
        "regCode": 1,
        "provCode": 155,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 5,
        "psgcCode": "020900000",
        "provDesc": "BATANES",
        "regCode": 2,
        "provCode": 209,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 6,
        "psgcCode": "021500000",
        "provDesc": "CAGAYAN",
        "regCode": 2,
        "provCode": 215,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 7,
        "psgcCode": "023100000",
        "provDesc": "ISABELA",
        "regCode": 2,
        "provCode": 231,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 8,
        "psgcCode": "025000000",
        "provDesc": "NUEVA VIZCAYA",
        "regCode": 2,
        "provCode": 250,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 9,
        "psgcCode": "025700000",
        "provDesc": "QUIRINO",
        "regCode": 2,
        "provCode": 257,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 10,
        "psgcCode": "030800000",
        "provDesc": "BATAAN",
        "regCode": 3,
        "provCode": 308,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 11,
        "psgcCode": "031400000",
        "provDesc": "BULACAN",
        "regCode": 3,
        "provCode": 314,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 12,
        "psgcCode": "034900000",
        "provDesc": "NUEVA ECIJA",
        "regCode": 3,
        "provCode": 349,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 13,
        "psgcCode": "035400000",
        "provDesc": "PAMPANGA",
        "regCode": 3,
        "provCode": 354,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 14,
        "psgcCode": "036900000",
        "provDesc": "TARLAC",
        "regCode": 3,
        "provCode": 369,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 15,
        "psgcCode": "037100000",
        "provDesc": "ZAMBALES",
        "regCode": 3,
        "provCode": 371,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 16,
        "psgcCode": "037700000",
        "provDesc": "AURORA",
        "regCode": 3,
        "provCode": 377,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 17,
        "psgcCode": "041000000",
        "provDesc": "BATANGAS",
        "regCode": 4,
        "provCode": 410,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 18,
        "psgcCode": "042100000",
        "provDesc": "CAVITE",
        "regCode": 4,
        "provCode": 421,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 19,
        "psgcCode": "043400000",
        "provDesc": "LAGUNA",
        "regCode": 4,
        "provCode": 434,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 20,
        "psgcCode": "045600000",
        "provDesc": "QUEZON",
        "regCode": 4,
        "provCode": 456,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 21,
        "psgcCode": "045800000",
        "provDesc": "RIZAL",
        "regCode": 4,
        "provCode": 458,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 22,
        "psgcCode": "174000000",
        "provDesc": "MARINDUQUE",
        "regCode": 17,
        "provCode": 1740,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 23,
        "psgcCode": "175100000",
        "provDesc": "OCCIDENTAL MINDORO",
        "regCode": 17,
        "provCode": 1751,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 24,
        "psgcCode": "175200000",
        "provDesc": "ORIENTAL MINDORO",
        "regCode": 17,
        "provCode": 1752,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 25,
        "psgcCode": "175300000",
        "provDesc": "PALAWAN",
        "regCode": 17,
        "provCode": 1753,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 26,
        "psgcCode": "175900000",
        "provDesc": "ROMBLON",
        "regCode": 17,
        "provCode": 1759,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 27,
        "psgcCode": "050500000",
        "provDesc": "ALBAY",
        "regCode": 5,
        "provCode": 505,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 28,
        "psgcCode": "051600000",
        "provDesc": "CAMARINES NORTE",
        "regCode": 5,
        "provCode": 516,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 29,
        "psgcCode": "051700000",
        "provDesc": "CAMARINES SUR",
        "regCode": 5,
        "provCode": 517,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 30,
        "psgcCode": "052000000",
        "provDesc": "CATANDUANES",
        "regCode": 5,
        "provCode": 520,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 31,
        "psgcCode": "054100000",
        "provDesc": "MASBATE",
        "regCode": 5,
        "provCode": 541,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 32,
        "psgcCode": "056200000",
        "provDesc": "SORSOGON",
        "regCode": 5,
        "provCode": 562,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 33,
        "psgcCode": "060400000",
        "provDesc": "AKLAN",
        "regCode": 6,
        "provCode": 604,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 34,
        "psgcCode": "060600000",
        "provDesc": "ANTIQUE",
        "regCode": 6,
        "provCode": 606,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 35,
        "psgcCode": "061900000",
        "provDesc": "CAPIZ",
        "regCode": 6,
        "provCode": 619,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 36,
        "psgcCode": "063000000",
        "provDesc": "ILOILO",
        "regCode": 6,
        "provCode": 630,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 37,
        "psgcCode": "064500000",
        "provDesc": "NEGROS OCCIDENTAL",
        "regCode": 6,
        "provCode": 645,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 38,
        "psgcCode": "067900000",
        "provDesc": "GUIMARAS",
        "regCode": 6,
        "provCode": 679,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 39,
        "psgcCode": "071200000",
        "provDesc": "BOHOL",
        "regCode": 7,
        "provCode": 712,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 40,
        "psgcCode": "072200000",
        "provDesc": "CEBU",
        "regCode": 7,
        "provCode": 722,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 41,
        "psgcCode": "074600000",
        "provDesc": "NEGROS ORIENTAL",
        "regCode": 7,
        "provCode": 746,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 42,
        "psgcCode": "076100000",
        "provDesc": "SIQUIJOR",
        "regCode": 7,
        "provCode": 761,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 43,
        "psgcCode": "082600000",
        "provDesc": "EASTERN SAMAR",
        "regCode": 8,
        "provCode": 826,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 44,
        "psgcCode": "083700000",
        "provDesc": "LEYTE",
        "regCode": 8,
        "provCode": 837,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 45,
        "psgcCode": "084800000",
        "provDesc": "NORTHERN SAMAR",
        "regCode": 8,
        "provCode": 848,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 46,
        "psgcCode": "086000000",
        "provDesc": "SAMAR (WESTERN SAMAR)",
        "regCode": 8,
        "provCode": 860,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 47,
        "psgcCode": "086400000",
        "provDesc": "SOUTHERN LEYTE",
        "regCode": 8,
        "provCode": 864,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 48,
        "psgcCode": "087800000",
        "provDesc": "BILIRAN",
        "regCode": 8,
        "provCode": 878,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 49,
        "psgcCode": "097200000",
        "provDesc": "ZAMBOANGA DEL NORTE",
        "regCode": 9,
        "provCode": 972,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 50,
        "psgcCode": "097300000",
        "provDesc": "ZAMBOANGA DEL SUR",
        "regCode": 9,
        "provCode": 973,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 51,
        "psgcCode": "098300000",
        "provDesc": "ZAMBOANGA SIBUGAY",
        "regCode": 9,
        "provCode": 983,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 52,
        "psgcCode": "099700000",
        "provDesc": "CITY OF ISABELA",
        "regCode": 9,
        "provCode": 997,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 53,
        "psgcCode": "101300000",
        "provDesc": "BUKIDNON",
        "regCode": 10,
        "provCode": 1013,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 54,
        "psgcCode": "101800000",
        "provDesc": "CAMIGUIN",
        "regCode": 10,
        "provCode": 1018,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 55,
        "psgcCode": "103500000",
        "provDesc": "LANAO DEL NORTE",
        "regCode": 10,
        "provCode": 1035,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 56,
        "psgcCode": "104200000",
        "provDesc": "MISAMIS OCCIDENTAL",
        "regCode": 10,
        "provCode": 1042,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 57,
        "psgcCode": "104300000",
        "provDesc": "MISAMIS ORIENTAL",
        "regCode": 10,
        "provCode": 1043,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 58,
        "psgcCode": "112300000",
        "provDesc": "DAVAO DEL NORTE",
        "regCode": 11,
        "provCode": 1123,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 59,
        "psgcCode": "112400000",
        "provDesc": "DAVAO DEL SUR",
        "regCode": 11,
        "provCode": 1124,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 60,
        "psgcCode": "112500000",
        "provDesc": "DAVAO ORIENTAL",
        "regCode": 11,
        "provCode": 1125,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 61,
        "psgcCode": "118200000",
        "provDesc": "COMPOSTELA VALLEY",
        "regCode": 11,
        "provCode": 1182,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 62,
        "psgcCode": "118600000",
        "provDesc": "DAVAO OCCIDENTAL",
        "regCode": 11,
        "provCode": 1186,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 63,
        "psgcCode": "124700000",
        "provDesc": "COTABATO (NORTH COTABATO)",
        "regCode": 12,
        "provCode": 1247,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 64,
        "psgcCode": "126300000",
        "provDesc": "SOUTH COTABATO",
        "regCode": 12,
        "provCode": 1263,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 65,
        "psgcCode": "126500000",
        "provDesc": "SULTAN KUDARAT",
        "regCode": 12,
        "provCode": 1265,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 66,
        "psgcCode": "128000000",
        "provDesc": "SARANGANI",
        "regCode": 12,
        "provCode": 1280,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 67,
        "psgcCode": "129800000",
        "provDesc": "COTABATO CITY",
        "regCode": 12,
        "provCode": 1298,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 68,
        "psgcCode": "133900000",
        "provDesc": "NCR, CITY OF MANILA, FIRST DISTRICT",
        "regCode": 13,
        "provCode": 1339,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 69,
        "psgcCode": "133900000",
        "provDesc": "CITY OF MANILA",
        "regCode": 13,
        "provCode": 1339,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 70,
        "psgcCode": "137400000",
        "provDesc": "NCR, SECOND DISTRICT",
        "regCode": 13,
        "provCode": 1374,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 71,
        "psgcCode": "137500000",
        "provDesc": "NCR, THIRD DISTRICT",
        "regCode": 13,
        "provCode": 1375,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 72,
        "psgcCode": "137600000",
        "provDesc": "NCR, FOURTH DISTRICT",
        "regCode": 13,
        "provCode": 1376,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 73,
        "psgcCode": "140100000",
        "provDesc": "ABRA",
        "regCode": 14,
        "provCode": 1401,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 74,
        "psgcCode": "141100000",
        "provDesc": "BENGUET",
        "regCode": 14,
        "provCode": 1411,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 75,
        "psgcCode": "142700000",
        "provDesc": "IFUGAO",
        "regCode": 14,
        "provCode": 1427,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 76,
        "psgcCode": "143200000",
        "provDesc": "KALINGA",
        "regCode": 14,
        "provCode": 1432,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 77,
        "psgcCode": "144400000",
        "provDesc": "MOUNTAIN PROVINCE",
        "regCode": 14,
        "provCode": 1444,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 78,
        "psgcCode": "148100000",
        "provDesc": "APAYAO",
        "regCode": 14,
        "provCode": 1481,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 79,
        "psgcCode": "150700000",
        "provDesc": "BASILAN",
        "regCode": 15,
        "provCode": 1507,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 80,
        "psgcCode": "153600000",
        "provDesc": "LANAO DEL SUR",
        "regCode": 15,
        "provCode": 1536,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 81,
        "psgcCode": "153800000",
        "provDesc": "MAGUINDANAO",
        "regCode": 15,
        "provCode": 1538,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 82,
        "psgcCode": "156600000",
        "provDesc": "SULU",
        "regCode": 15,
        "provCode": 1566,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 83,
        "psgcCode": "157000000",
        "provDesc": "TAWI-TAWI",
        "regCode": 15,
        "provCode": 1570,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 84,
        "psgcCode": "160200000",
        "provDesc": "AGUSAN DEL NORTE",
        "regCode": 16,
        "provCode": 1602,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 85,
        "psgcCode": "160300000",
        "provDesc": "AGUSAN DEL SUR",
        "regCode": 16,
        "provCode": 1603,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 86,
        "psgcCode": "166700000",
        "provDesc": "SURIGAO DEL NORTE",
        "regCode": 16,
        "provCode": 1667,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 87,
        "psgcCode": "166800000",
        "provDesc": "SURIGAO DEL SUR",
        "regCode": 16,
        "provCode": 1668,
        "created_at": "2021-01-27T14:25:07.000000Z",
        "updated_at": "2021-01-27T14:25:07.000000Z"
    },
    {
        "id": 88,
        "psgcCode": "168500000",
        "provDesc": "DINAGAT ISLANDS",
        "regCode": 16,
        "provCode": 1685,
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    }
]
```
<div id="execution-results-GETapi-settings-provinces" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-provinces"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-provinces"></code></pre>
</div>
<div id="execution-error-GETapi-settings-provinces" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-provinces"></code></pre>
</div>
<form id="form-GETapi-settings-provinces" data-method="GET" data-path="api/settings/provinces" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-provinces', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-provinces" onclick="tryItOut('GETapi-settings-provinces');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-provinces" onclick="cancelTryOut('GETapi-settings-provinces');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-provinces" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/provinces</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/provinces/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/provinces/recusandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-settings-provinces--province-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-provinces--province-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-provinces--province-"></code></pre>
</div>
<div id="execution-error-GETapi-settings-provinces--province-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-provinces--province-"></code></pre>
</div>
<form id="form-GETapi-settings-provinces--province-" data-method="GET" data-path="api/settings/provinces/{province}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-provinces--province-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-provinces--province-" onclick="tryItOut('GETapi-settings-provinces--province-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-provinces--province-" onclick="cancelTryOut('GETapi-settings-provinces--province-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-provinces--province-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/provinces/{province}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>province</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="province" data-endpoint="GETapi-settings-provinces--province-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "psgcCode": 12801000,
        "citymunDesc": "ADAMS",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012801",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 2,
        "psgcCode": 12802000,
        "citymunDesc": "BACARRA",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012802",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 3,
        "psgcCode": 12803000,
        "citymunDesc": "BADOC",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012803",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 4,
        "psgcCode": 12804000,
        "citymunDesc": "BANGUI",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012804",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 5,
        "psgcCode": 12805000,
        "citymunDesc": "CITY OF BATAC",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012805",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 6,
        "psgcCode": 12806000,
        "citymunDesc": "BURGOS",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012806",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 7,
        "psgcCode": 12807000,
        "citymunDesc": "CARASI",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012807",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 8,
        "psgcCode": 12808000,
        "citymunDesc": "CURRIMAO",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012808",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 9,
        "psgcCode": 12809000,
        "citymunDesc": "DINGRAS",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012809",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 10,
        "psgcCode": 12810000,
        "citymunDesc": "DUMALNEG",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012810",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 11,
        "psgcCode": 12811000,
        "citymunDesc": "BANNA (ESPIRITU)",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012811",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 12,
        "psgcCode": 12812000,
        "citymunDesc": "LAOAG CITY (Capital)",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012812",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 13,
        "psgcCode": 12813000,
        "citymunDesc": "MARCOS",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012813",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 14,
        "psgcCode": 12814000,
        "citymunDesc": "NUEVA ERA",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012814",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 15,
        "psgcCode": 12815000,
        "citymunDesc": "PAGUDPUD",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012815",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 16,
        "psgcCode": 12816000,
        "citymunDesc": "PAOAY",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012816",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 17,
        "psgcCode": 12817000,
        "citymunDesc": "PASUQUIN",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012817",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 18,
        "psgcCode": 12818000,
        "citymunDesc": "PIDDIG",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012818",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 19,
        "psgcCode": 12819000,
        "citymunDesc": "PINILI",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012819",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 20,
        "psgcCode": 12820000,
        "citymunDesc": "SAN NICOLAS",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012820",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 21,
        "psgcCode": 12821000,
        "citymunDesc": "SARRAT",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012821",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 22,
        "psgcCode": 12822000,
        "citymunDesc": "SOLSONA",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012822",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 23,
        "psgcCode": 12823000,
        "citymunDesc": "VINTAR",
        "regDesc": "01",
        "provCode": 128,
        "citymunCode": "012823",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 24,
        "psgcCode": 12901000,
        "citymunDesc": "ALILEM",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012901",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 25,
        "psgcCode": 12902000,
        "citymunDesc": "BANAYOYO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012902",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 26,
        "psgcCode": 12903000,
        "citymunDesc": "BANTAY",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012903",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 27,
        "psgcCode": 12904000,
        "citymunDesc": "BURGOS",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012904",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 28,
        "psgcCode": 12905000,
        "citymunDesc": "CABUGAO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012905",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 29,
        "psgcCode": 12906000,
        "citymunDesc": "CITY OF CANDON",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012906",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 30,
        "psgcCode": 12907000,
        "citymunDesc": "CAOAYAN",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012907",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 31,
        "psgcCode": 12908000,
        "citymunDesc": "CERVANTES",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012908",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 32,
        "psgcCode": 12909000,
        "citymunDesc": "GALIMUYOD",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012909",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 33,
        "psgcCode": 12910000,
        "citymunDesc": "GREGORIO DEL PILAR (CONCEPCION)",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012910",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 34,
        "psgcCode": 12911000,
        "citymunDesc": "LIDLIDDA",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012911",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 35,
        "psgcCode": 12912000,
        "citymunDesc": "MAGSINGAL",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012912",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 36,
        "psgcCode": 12913000,
        "citymunDesc": "NAGBUKEL",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012913",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 37,
        "psgcCode": 12914000,
        "citymunDesc": "NARVACAN",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012914",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 38,
        "psgcCode": 12915000,
        "citymunDesc": "QUIRINO (ANGKAKI)",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012915",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 39,
        "psgcCode": 12916000,
        "citymunDesc": "SALCEDO (BAUGEN)",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012916",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 40,
        "psgcCode": 12917000,
        "citymunDesc": "SAN EMILIO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012917",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 41,
        "psgcCode": 12918000,
        "citymunDesc": "SAN ESTEBAN",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012918",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 42,
        "psgcCode": 12919000,
        "citymunDesc": "SAN ILDEFONSO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012919",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 43,
        "psgcCode": 12920000,
        "citymunDesc": "SAN JUAN (LAPOG)",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012920",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 44,
        "psgcCode": 12921000,
        "citymunDesc": "SAN VICENTE",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012921",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 45,
        "psgcCode": 12922000,
        "citymunDesc": "SANTA",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012922",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 46,
        "psgcCode": 12923000,
        "citymunDesc": "SANTA CATALINA",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012923",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 47,
        "psgcCode": 12924000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012924",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 48,
        "psgcCode": 12925000,
        "citymunDesc": "SANTA LUCIA",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012925",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 49,
        "psgcCode": 12926000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012926",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 50,
        "psgcCode": 12927000,
        "citymunDesc": "SANTIAGO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012927",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 51,
        "psgcCode": 12928000,
        "citymunDesc": "SANTO DOMINGO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012928",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 52,
        "psgcCode": 12929000,
        "citymunDesc": "SIGAY",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012929",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 53,
        "psgcCode": 12930000,
        "citymunDesc": "SINAIT",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012930",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 54,
        "psgcCode": 12931000,
        "citymunDesc": "SUGPON",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012931",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 55,
        "psgcCode": 12932000,
        "citymunDesc": "SUYO",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012932",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 56,
        "psgcCode": 12933000,
        "citymunDesc": "TAGUDIN",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012933",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 57,
        "psgcCode": 12934000,
        "citymunDesc": "CITY OF VIGAN (Capital)",
        "regDesc": "01",
        "provCode": 129,
        "citymunCode": "012934",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 58,
        "psgcCode": 13301000,
        "citymunDesc": "AGOO",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013301",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 59,
        "psgcCode": 13302000,
        "citymunDesc": "ARINGAY",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013302",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 60,
        "psgcCode": 13303000,
        "citymunDesc": "BACNOTAN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013303",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 61,
        "psgcCode": 13304000,
        "citymunDesc": "BAGULIN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013304",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 62,
        "psgcCode": 13305000,
        "citymunDesc": "BALAOAN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013305",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 63,
        "psgcCode": 13306000,
        "citymunDesc": "BANGAR",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013306",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 64,
        "psgcCode": 13307000,
        "citymunDesc": "BAUANG",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013307",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 65,
        "psgcCode": 13308000,
        "citymunDesc": "BURGOS",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013308",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 66,
        "psgcCode": 13309000,
        "citymunDesc": "CABA",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013309",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 67,
        "psgcCode": 13310000,
        "citymunDesc": "LUNA",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013310",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 68,
        "psgcCode": 13311000,
        "citymunDesc": "NAGUILIAN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013311",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 69,
        "psgcCode": 13312000,
        "citymunDesc": "PUGO",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013312",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 70,
        "psgcCode": 13313000,
        "citymunDesc": "ROSARIO",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013313",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 71,
        "psgcCode": 13314000,
        "citymunDesc": "CITY OF SAN FERNANDO (Capital)",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013314",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 72,
        "psgcCode": 13315000,
        "citymunDesc": "SAN GABRIEL",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013315",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 73,
        "psgcCode": 13316000,
        "citymunDesc": "SAN JUAN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013316",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 74,
        "psgcCode": 13317000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013317",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 75,
        "psgcCode": 13318000,
        "citymunDesc": "SANTOL",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013318",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 76,
        "psgcCode": 13319000,
        "citymunDesc": "SUDIPEN",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013319",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 77,
        "psgcCode": 13320000,
        "citymunDesc": "TUBAO",
        "regDesc": "01",
        "provCode": 133,
        "citymunCode": "013320",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 78,
        "psgcCode": 15501000,
        "citymunDesc": "AGNO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015501",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 79,
        "psgcCode": 15502000,
        "citymunDesc": "AGUILAR",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015502",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 80,
        "psgcCode": 15503000,
        "citymunDesc": "CITY OF ALAMINOS",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015503",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 81,
        "psgcCode": 15504000,
        "citymunDesc": "ALCALA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015504",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 82,
        "psgcCode": 15505000,
        "citymunDesc": "ANDA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015505",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 83,
        "psgcCode": 15506000,
        "citymunDesc": "ASINGAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015506",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 84,
        "psgcCode": 15507000,
        "citymunDesc": "BALUNGAO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015507",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 85,
        "psgcCode": 15508000,
        "citymunDesc": "BANI",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015508",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 86,
        "psgcCode": 15509000,
        "citymunDesc": "BASISTA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015509",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 87,
        "psgcCode": 15510000,
        "citymunDesc": "BAUTISTA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015510",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 88,
        "psgcCode": 15511000,
        "citymunDesc": "BAYAMBANG",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015511",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 89,
        "psgcCode": 15512000,
        "citymunDesc": "BINALONAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015512",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 90,
        "psgcCode": 15513000,
        "citymunDesc": "BINMALEY",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015513",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 91,
        "psgcCode": 15514000,
        "citymunDesc": "BOLINAO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015514",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 92,
        "psgcCode": 15515000,
        "citymunDesc": "BUGALLON",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015515",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 93,
        "psgcCode": 15516000,
        "citymunDesc": "BURGOS",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015516",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 94,
        "psgcCode": 15517000,
        "citymunDesc": "CALASIAO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015517",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 95,
        "psgcCode": 15518000,
        "citymunDesc": "DAGUPAN CITY",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015518",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 96,
        "psgcCode": 15519000,
        "citymunDesc": "DASOL",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015519",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 97,
        "psgcCode": 15520000,
        "citymunDesc": "INFANTA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015520",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 98,
        "psgcCode": 15521000,
        "citymunDesc": "LABRADOR",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015521",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 99,
        "psgcCode": 15522000,
        "citymunDesc": "LINGAYEN (Capital)",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015522",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 100,
        "psgcCode": 15523000,
        "citymunDesc": "MABINI",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015523",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 101,
        "psgcCode": 15524000,
        "citymunDesc": "MALASIQUI",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015524",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 102,
        "psgcCode": 15525000,
        "citymunDesc": "MANAOAG",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015525",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 103,
        "psgcCode": 15526000,
        "citymunDesc": "MANGALDAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015526",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 104,
        "psgcCode": 15527000,
        "citymunDesc": "MANGATAREM",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015527",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 105,
        "psgcCode": 15528000,
        "citymunDesc": "MAPANDAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015528",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 106,
        "psgcCode": 15529000,
        "citymunDesc": "NATIVIDAD",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015529",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 107,
        "psgcCode": 15530000,
        "citymunDesc": "POZORRUBIO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015530",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 108,
        "psgcCode": 15531000,
        "citymunDesc": "ROSALES",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015531",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 109,
        "psgcCode": 15532000,
        "citymunDesc": "SAN CARLOS CITY",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015532",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 110,
        "psgcCode": 15533000,
        "citymunDesc": "SAN FABIAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015533",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 111,
        "psgcCode": 15534000,
        "citymunDesc": "SAN JACINTO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015534",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 112,
        "psgcCode": 15535000,
        "citymunDesc": "SAN MANUEL",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015535",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 113,
        "psgcCode": 15536000,
        "citymunDesc": "SAN NICOLAS",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015536",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 114,
        "psgcCode": 15537000,
        "citymunDesc": "SAN QUINTIN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015537",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 115,
        "psgcCode": 15538000,
        "citymunDesc": "SANTA BARBARA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015538",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 116,
        "psgcCode": 15539000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015539",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 117,
        "psgcCode": 15540000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015540",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 118,
        "psgcCode": 15541000,
        "citymunDesc": "SISON",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015541",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 119,
        "psgcCode": 15542000,
        "citymunDesc": "SUAL",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015542",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 120,
        "psgcCode": 15543000,
        "citymunDesc": "TAYUG",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015543",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 121,
        "psgcCode": 15544000,
        "citymunDesc": "UMINGAN",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015544",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 122,
        "psgcCode": 15545000,
        "citymunDesc": "URBIZTONDO",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015545",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 123,
        "psgcCode": 15546000,
        "citymunDesc": "CITY OF URDANETA",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015546",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 124,
        "psgcCode": 15547000,
        "citymunDesc": "VILLASIS",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015547",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 125,
        "psgcCode": 15548000,
        "citymunDesc": "LAOAC",
        "regDesc": "01",
        "provCode": 155,
        "citymunCode": "015548",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 126,
        "psgcCode": 20901000,
        "citymunDesc": "BASCO (Capital)",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020901",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 127,
        "psgcCode": 20902000,
        "citymunDesc": "ITBAYAT",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020902",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 128,
        "psgcCode": 20903000,
        "citymunDesc": "IVANA",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020903",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 129,
        "psgcCode": 20904000,
        "citymunDesc": "MAHATAO",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020904",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 130,
        "psgcCode": 20905000,
        "citymunDesc": "SABTANG",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020905",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 131,
        "psgcCode": 20906000,
        "citymunDesc": "UYUGAN",
        "regDesc": "02",
        "provCode": 209,
        "citymunCode": "020906",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 132,
        "psgcCode": 21501000,
        "citymunDesc": "ABULUG",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021501",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 133,
        "psgcCode": 21502000,
        "citymunDesc": "ALCALA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021502",
        "created_at": "2021-01-27T14:25:08.000000Z",
        "updated_at": "2021-01-27T14:25:08.000000Z"
    },
    {
        "id": 134,
        "psgcCode": 21503000,
        "citymunDesc": "ALLACAPAN",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021503",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 135,
        "psgcCode": 21504000,
        "citymunDesc": "AMULUNG",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021504",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 136,
        "psgcCode": 21505000,
        "citymunDesc": "APARRI",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021505",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 137,
        "psgcCode": 21506000,
        "citymunDesc": "BAGGAO",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021506",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 138,
        "psgcCode": 21507000,
        "citymunDesc": "BALLESTEROS",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021507",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 139,
        "psgcCode": 21508000,
        "citymunDesc": "BUGUEY",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021508",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 140,
        "psgcCode": 21509000,
        "citymunDesc": "CALAYAN",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021509",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 141,
        "psgcCode": 21510000,
        "citymunDesc": "CAMALANIUGAN",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021510",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 142,
        "psgcCode": 21511000,
        "citymunDesc": "CLAVERIA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021511",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 143,
        "psgcCode": 21512000,
        "citymunDesc": "ENRILE",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021512",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 144,
        "psgcCode": 21513000,
        "citymunDesc": "GATTARAN",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021513",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 145,
        "psgcCode": 21514000,
        "citymunDesc": "GONZAGA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021514",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 146,
        "psgcCode": 21515000,
        "citymunDesc": "IGUIG",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021515",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 147,
        "psgcCode": 21516000,
        "citymunDesc": "LAL-LO",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021516",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 148,
        "psgcCode": 21517000,
        "citymunDesc": "LASAM",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021517",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 149,
        "psgcCode": 21518000,
        "citymunDesc": "PAMPLONA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021518",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 150,
        "psgcCode": 21519000,
        "citymunDesc": "PEÑABLANCA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021519",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 151,
        "psgcCode": 21520000,
        "citymunDesc": "PIAT",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021520",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 152,
        "psgcCode": 21521000,
        "citymunDesc": "RIZAL",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021521",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 153,
        "psgcCode": 21522000,
        "citymunDesc": "SANCHEZ-MIRA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021522",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 154,
        "psgcCode": 21523000,
        "citymunDesc": "SANTA ANA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021523",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 155,
        "psgcCode": 21524000,
        "citymunDesc": "SANTA PRAXEDES",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021524",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 156,
        "psgcCode": 21525000,
        "citymunDesc": "SANTA TERESITA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021525",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 157,
        "psgcCode": 21526000,
        "citymunDesc": "SANTO NIÑO (FAIRE)",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021526",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 158,
        "psgcCode": 21527000,
        "citymunDesc": "SOLANA",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021527",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 159,
        "psgcCode": 21528000,
        "citymunDesc": "TUAO",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021528",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 160,
        "psgcCode": 21529000,
        "citymunDesc": "TUGUEGARAO CITY (Capital)",
        "regDesc": "02",
        "provCode": 215,
        "citymunCode": "021529",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 161,
        "psgcCode": 23101000,
        "citymunDesc": "ALICIA",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023101",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 162,
        "psgcCode": 23102000,
        "citymunDesc": "ANGADANAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023102",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 163,
        "psgcCode": 23103000,
        "citymunDesc": "AURORA",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023103",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 164,
        "psgcCode": 23104000,
        "citymunDesc": "BENITO SOLIVEN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023104",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 165,
        "psgcCode": 23105000,
        "citymunDesc": "BURGOS",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023105",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 166,
        "psgcCode": 23106000,
        "citymunDesc": "CABAGAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023106",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 167,
        "psgcCode": 23107000,
        "citymunDesc": "CABATUAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023107",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 168,
        "psgcCode": 23108000,
        "citymunDesc": "CITY OF CAUAYAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023108",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 169,
        "psgcCode": 23109000,
        "citymunDesc": "CORDON",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023109",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 170,
        "psgcCode": 23110000,
        "citymunDesc": "DINAPIGUE",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023110",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 171,
        "psgcCode": 23111000,
        "citymunDesc": "DIVILACAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023111",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 172,
        "psgcCode": 23112000,
        "citymunDesc": "ECHAGUE",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023112",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 173,
        "psgcCode": 23113000,
        "citymunDesc": "GAMU",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023113",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 174,
        "psgcCode": 23114000,
        "citymunDesc": "ILAGAN CITY (Capital)",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023114",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 175,
        "psgcCode": 23115000,
        "citymunDesc": "JONES",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023115",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 176,
        "psgcCode": 23116000,
        "citymunDesc": "LUNA",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023116",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 177,
        "psgcCode": 23117000,
        "citymunDesc": "MACONACON",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023117",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 178,
        "psgcCode": 23118000,
        "citymunDesc": "DELFIN ALBANO (MAGSAYSAY)",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023118",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 179,
        "psgcCode": 23119000,
        "citymunDesc": "MALLIG",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023119",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 180,
        "psgcCode": 23120000,
        "citymunDesc": "NAGUILIAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023120",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 181,
        "psgcCode": 23121000,
        "citymunDesc": "PALANAN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023121",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 182,
        "psgcCode": 23122000,
        "citymunDesc": "QUEZON",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023122",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 183,
        "psgcCode": 23123000,
        "citymunDesc": "QUIRINO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023123",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 184,
        "psgcCode": 23124000,
        "citymunDesc": "RAMON",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023124",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 185,
        "psgcCode": 23125000,
        "citymunDesc": "REINA MERCEDES",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023125",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 186,
        "psgcCode": 23126000,
        "citymunDesc": "ROXAS",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023126",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 187,
        "psgcCode": 23127000,
        "citymunDesc": "SAN AGUSTIN",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023127",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 188,
        "psgcCode": 23128000,
        "citymunDesc": "SAN GUILLERMO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023128",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 189,
        "psgcCode": 23129000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023129",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 190,
        "psgcCode": 23130000,
        "citymunDesc": "SAN MANUEL",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023130",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 191,
        "psgcCode": 23131000,
        "citymunDesc": "SAN MARIANO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023131",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 192,
        "psgcCode": 23132000,
        "citymunDesc": "SAN MATEO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023132",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 193,
        "psgcCode": 23133000,
        "citymunDesc": "SAN PABLO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023133",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 194,
        "psgcCode": 23134000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023134",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 195,
        "psgcCode": 23135000,
        "citymunDesc": "CITY OF SANTIAGO",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023135",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 196,
        "psgcCode": 23136000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023136",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 197,
        "psgcCode": 23137000,
        "citymunDesc": "TUMAUINI",
        "regDesc": "02",
        "provCode": 231,
        "citymunCode": "023137",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 198,
        "psgcCode": 25001000,
        "citymunDesc": "AMBAGUIO",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025001",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 199,
        "psgcCode": 25002000,
        "citymunDesc": "ARITAO",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025002",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 200,
        "psgcCode": 25003000,
        "citymunDesc": "BAGABAG",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025003",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 201,
        "psgcCode": 25004000,
        "citymunDesc": "BAMBANG",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025004",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 202,
        "psgcCode": 25005000,
        "citymunDesc": "BAYOMBONG (Capital)",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025005",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 203,
        "psgcCode": 25006000,
        "citymunDesc": "DIADI",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025006",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 204,
        "psgcCode": 25007000,
        "citymunDesc": "DUPAX DEL NORTE",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025007",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 205,
        "psgcCode": 25008000,
        "citymunDesc": "DUPAX DEL SUR",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025008",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 206,
        "psgcCode": 25009000,
        "citymunDesc": "KASIBU",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025009",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 207,
        "psgcCode": 25010000,
        "citymunDesc": "KAYAPA",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025010",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 208,
        "psgcCode": 25011000,
        "citymunDesc": "QUEZON",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025011",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 209,
        "psgcCode": 25012000,
        "citymunDesc": "SANTA FE",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025012",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 210,
        "psgcCode": 25013000,
        "citymunDesc": "SOLANO",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025013",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 211,
        "psgcCode": 25014000,
        "citymunDesc": "VILLAVERDE",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025014",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 212,
        "psgcCode": 25015000,
        "citymunDesc": "ALFONSO CASTANEDA",
        "regDesc": "02",
        "provCode": 250,
        "citymunCode": "025015",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 213,
        "psgcCode": 25701000,
        "citymunDesc": "AGLIPAY",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025701",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 214,
        "psgcCode": 25702000,
        "citymunDesc": "CABARROGUIS (Capital)",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025702",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 215,
        "psgcCode": 25703000,
        "citymunDesc": "DIFFUN",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025703",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 216,
        "psgcCode": 25704000,
        "citymunDesc": "MADDELA",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025704",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 217,
        "psgcCode": 25705000,
        "citymunDesc": "SAGUDAY",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025705",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 218,
        "psgcCode": 25706000,
        "citymunDesc": "NAGTIPUNAN",
        "regDesc": "02",
        "provCode": 257,
        "citymunCode": "025706",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 219,
        "psgcCode": 30801000,
        "citymunDesc": "ABUCAY",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030801",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 220,
        "psgcCode": 30802000,
        "citymunDesc": "BAGAC",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030802",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 221,
        "psgcCode": 30803000,
        "citymunDesc": "CITY OF BALANGA (Capital)",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030803",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 222,
        "psgcCode": 30804000,
        "citymunDesc": "DINALUPIHAN",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030804",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 223,
        "psgcCode": 30805000,
        "citymunDesc": "HERMOSA",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030805",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 224,
        "psgcCode": 30806000,
        "citymunDesc": "LIMAY",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030806",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 225,
        "psgcCode": 30807000,
        "citymunDesc": "MARIVELES",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030807",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 226,
        "psgcCode": 30808000,
        "citymunDesc": "MORONG",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030808",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 227,
        "psgcCode": 30809000,
        "citymunDesc": "ORANI",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030809",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 228,
        "psgcCode": 30810000,
        "citymunDesc": "ORION",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030810",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 229,
        "psgcCode": 30811000,
        "citymunDesc": "PILAR",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030811",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 230,
        "psgcCode": 30812000,
        "citymunDesc": "SAMAL",
        "regDesc": "03",
        "provCode": 308,
        "citymunCode": "030812",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 231,
        "psgcCode": 31401000,
        "citymunDesc": "ANGAT",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031401",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 232,
        "psgcCode": 31402000,
        "citymunDesc": "BALAGTAS (BIGAA)",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031402",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 233,
        "psgcCode": 31403000,
        "citymunDesc": "BALIUAG",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031403",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 234,
        "psgcCode": 31404000,
        "citymunDesc": "BOCAUE",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031404",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 235,
        "psgcCode": 31405000,
        "citymunDesc": "BULACAN",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031405",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 236,
        "psgcCode": 31406000,
        "citymunDesc": "BUSTOS",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031406",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 237,
        "psgcCode": 31407000,
        "citymunDesc": "CALUMPIT",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031407",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 238,
        "psgcCode": 31408000,
        "citymunDesc": "GUIGUINTO",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031408",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 239,
        "psgcCode": 31409000,
        "citymunDesc": "HAGONOY",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031409",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 240,
        "psgcCode": 31410000,
        "citymunDesc": "CITY OF MALOLOS (Capital)",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031410",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 241,
        "psgcCode": 31411000,
        "citymunDesc": "MARILAO",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031411",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 242,
        "psgcCode": 31412000,
        "citymunDesc": "CITY OF MEYCAUAYAN",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031412",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 243,
        "psgcCode": 31413000,
        "citymunDesc": "NORZAGARAY",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031413",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 244,
        "psgcCode": 31414000,
        "citymunDesc": "OBANDO",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031414",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 245,
        "psgcCode": 31415000,
        "citymunDesc": "PANDI",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031415",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 246,
        "psgcCode": 31416000,
        "citymunDesc": "PAOMBONG",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031416",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 247,
        "psgcCode": 31417000,
        "citymunDesc": "PLARIDEL",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031417",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 248,
        "psgcCode": 31418000,
        "citymunDesc": "PULILAN",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031418",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 249,
        "psgcCode": 31419000,
        "citymunDesc": "SAN ILDEFONSO",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031419",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 250,
        "psgcCode": 31420000,
        "citymunDesc": "CITY OF SAN JOSE DEL MONTE",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031420",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 251,
        "psgcCode": 31421000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031421",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 252,
        "psgcCode": 31422000,
        "citymunDesc": "SAN RAFAEL",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031422",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 253,
        "psgcCode": 31423000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031423",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 254,
        "psgcCode": 31424000,
        "citymunDesc": "DOÑA REMEDIOS TRINIDAD",
        "regDesc": "03",
        "provCode": 314,
        "citymunCode": "031424",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 255,
        "psgcCode": 34901000,
        "citymunDesc": "ALIAGA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034901",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 256,
        "psgcCode": 34902000,
        "citymunDesc": "BONGABON",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034902",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 257,
        "psgcCode": 34903000,
        "citymunDesc": "CABANATUAN CITY",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034903",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 258,
        "psgcCode": 34904000,
        "citymunDesc": "CABIAO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034904",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 259,
        "psgcCode": 34905000,
        "citymunDesc": "CARRANGLAN",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034905",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 260,
        "psgcCode": 34906000,
        "citymunDesc": "CUYAPO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034906",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 261,
        "psgcCode": 34907000,
        "citymunDesc": "GABALDON (BITULOK & SABANI)",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034907",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 262,
        "psgcCode": 34908000,
        "citymunDesc": "CITY OF GAPAN",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034908",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 263,
        "psgcCode": 34909000,
        "citymunDesc": "GENERAL MAMERTO NATIVIDAD",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034909",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 264,
        "psgcCode": 34910000,
        "citymunDesc": "GENERAL TINIO (PAPAYA)",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034910",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 265,
        "psgcCode": 34911000,
        "citymunDesc": "GUIMBA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034911",
        "created_at": "2021-01-27T14:25:09.000000Z",
        "updated_at": "2021-01-27T14:25:09.000000Z"
    },
    {
        "id": 266,
        "psgcCode": 34912000,
        "citymunDesc": "JAEN",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034912",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 267,
        "psgcCode": 34913000,
        "citymunDesc": "LAUR",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034913",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 268,
        "psgcCode": 34914000,
        "citymunDesc": "LICAB",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034914",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 269,
        "psgcCode": 34915000,
        "citymunDesc": "LLANERA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034915",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 270,
        "psgcCode": 34916000,
        "citymunDesc": "LUPAO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034916",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 271,
        "psgcCode": 34917000,
        "citymunDesc": "SCIENCE CITY OF MUÑOZ",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034917",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 272,
        "psgcCode": 34918000,
        "citymunDesc": "NAMPICUAN",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034918",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 273,
        "psgcCode": 34919000,
        "citymunDesc": "PALAYAN CITY (Capital)",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034919",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 274,
        "psgcCode": 34920000,
        "citymunDesc": "PANTABANGAN",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034920",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 275,
        "psgcCode": 34921000,
        "citymunDesc": "PEÑARANDA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034921",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 276,
        "psgcCode": 34922000,
        "citymunDesc": "QUEZON",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034922",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 277,
        "psgcCode": 34923000,
        "citymunDesc": "RIZAL",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034923",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 278,
        "psgcCode": 34924000,
        "citymunDesc": "SAN ANTONIO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034924",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 279,
        "psgcCode": 34925000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034925",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 280,
        "psgcCode": 34926000,
        "citymunDesc": "SAN JOSE CITY",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034926",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 281,
        "psgcCode": 34927000,
        "citymunDesc": "SAN LEONARDO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034927",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 282,
        "psgcCode": 34928000,
        "citymunDesc": "SANTA ROSA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034928",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 283,
        "psgcCode": 34929000,
        "citymunDesc": "SANTO DOMINGO",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034929",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 284,
        "psgcCode": 34930000,
        "citymunDesc": "TALAVERA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034930",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 285,
        "psgcCode": 34931000,
        "citymunDesc": "TALUGTUG",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034931",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 286,
        "psgcCode": 34932000,
        "citymunDesc": "ZARAGOZA",
        "regDesc": "03",
        "provCode": 349,
        "citymunCode": "034932",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 287,
        "psgcCode": 35401000,
        "citymunDesc": "ANGELES CITY",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035401",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 288,
        "psgcCode": 35402000,
        "citymunDesc": "APALIT",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035402",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 289,
        "psgcCode": 35403000,
        "citymunDesc": "ARAYAT",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035403",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 290,
        "psgcCode": 35404000,
        "citymunDesc": "BACOLOR",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035404",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 291,
        "psgcCode": 35405000,
        "citymunDesc": "CANDABA",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035405",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 292,
        "psgcCode": 35406000,
        "citymunDesc": "FLORIDABLANCA",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035406",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 293,
        "psgcCode": 35407000,
        "citymunDesc": "GUAGUA",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035407",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 294,
        "psgcCode": 35408000,
        "citymunDesc": "LUBAO",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035408",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 295,
        "psgcCode": 35409000,
        "citymunDesc": "MABALACAT CITY",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035409",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 296,
        "psgcCode": 35410000,
        "citymunDesc": "MACABEBE",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035410",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 297,
        "psgcCode": 35411000,
        "citymunDesc": "MAGALANG",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035411",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 298,
        "psgcCode": 35412000,
        "citymunDesc": "MASANTOL",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035412",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 299,
        "psgcCode": 35413000,
        "citymunDesc": "MEXICO",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035413",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 300,
        "psgcCode": 35414000,
        "citymunDesc": "MINALIN",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035414",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 301,
        "psgcCode": 35415000,
        "citymunDesc": "PORAC",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035415",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 302,
        "psgcCode": 35416000,
        "citymunDesc": "CITY OF SAN FERNANDO (Capital)",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035416",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 303,
        "psgcCode": 35417000,
        "citymunDesc": "SAN LUIS",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035417",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 304,
        "psgcCode": 35418000,
        "citymunDesc": "SAN SIMON",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035418",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 305,
        "psgcCode": 35419000,
        "citymunDesc": "SANTA ANA",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035419",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 306,
        "psgcCode": 35420000,
        "citymunDesc": "SANTA RITA",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035420",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 307,
        "psgcCode": 35421000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035421",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 308,
        "psgcCode": 35422000,
        "citymunDesc": "SASMUAN (Sexmoan)",
        "regDesc": "03",
        "provCode": 354,
        "citymunCode": "035422",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 309,
        "psgcCode": 36901000,
        "citymunDesc": "ANAO",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036901",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 310,
        "psgcCode": 36902000,
        "citymunDesc": "BAMBAN",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036902",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 311,
        "psgcCode": 36903000,
        "citymunDesc": "CAMILING",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036903",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 312,
        "psgcCode": 36904000,
        "citymunDesc": "CAPAS",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036904",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 313,
        "psgcCode": 36905000,
        "citymunDesc": "CONCEPCION",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036905",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 314,
        "psgcCode": 36906000,
        "citymunDesc": "GERONA",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036906",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 315,
        "psgcCode": 36907000,
        "citymunDesc": "LA PAZ",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036907",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 316,
        "psgcCode": 36908000,
        "citymunDesc": "MAYANTOC",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036908",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 317,
        "psgcCode": 36909000,
        "citymunDesc": "MONCADA",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036909",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 318,
        "psgcCode": 36910000,
        "citymunDesc": "PANIQUI",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036910",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 319,
        "psgcCode": 36911000,
        "citymunDesc": "PURA",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036911",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 320,
        "psgcCode": 36912000,
        "citymunDesc": "RAMOS",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036912",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 321,
        "psgcCode": 36913000,
        "citymunDesc": "SAN CLEMENTE",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036913",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 322,
        "psgcCode": 36914000,
        "citymunDesc": "SAN MANUEL",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036914",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 323,
        "psgcCode": 36915000,
        "citymunDesc": "SANTA IGNACIA",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036915",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 324,
        "psgcCode": 36916000,
        "citymunDesc": "CITY OF TARLAC (Capital)",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036916",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 325,
        "psgcCode": 36917000,
        "citymunDesc": "VICTORIA",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036917",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 326,
        "psgcCode": 36918000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "03",
        "provCode": 369,
        "citymunCode": "036918",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 327,
        "psgcCode": 37101000,
        "citymunDesc": "BOTOLAN",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037101",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 328,
        "psgcCode": 37102000,
        "citymunDesc": "CABANGAN",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037102",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 329,
        "psgcCode": 37103000,
        "citymunDesc": "CANDELARIA",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037103",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 330,
        "psgcCode": 37104000,
        "citymunDesc": "CASTILLEJOS",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037104",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 331,
        "psgcCode": 37105000,
        "citymunDesc": "IBA (Capital)",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037105",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 332,
        "psgcCode": 37106000,
        "citymunDesc": "MASINLOC",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037106",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 333,
        "psgcCode": 37107000,
        "citymunDesc": "OLONGAPO CITY",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037107",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 334,
        "psgcCode": 37108000,
        "citymunDesc": "PALAUIG",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037108",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 335,
        "psgcCode": 37109000,
        "citymunDesc": "SAN ANTONIO",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037109",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 336,
        "psgcCode": 37110000,
        "citymunDesc": "SAN FELIPE",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037110",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 337,
        "psgcCode": 37111000,
        "citymunDesc": "SAN MARCELINO",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037111",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 338,
        "psgcCode": 37112000,
        "citymunDesc": "SAN NARCISO",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037112",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 339,
        "psgcCode": 37113000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037113",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 340,
        "psgcCode": 37114000,
        "citymunDesc": "SUBIC",
        "regDesc": "03",
        "provCode": 371,
        "citymunCode": "037114",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 341,
        "psgcCode": 37701000,
        "citymunDesc": "BALER (Capital)",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037701",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 342,
        "psgcCode": 37702000,
        "citymunDesc": "CASIGURAN",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037702",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 343,
        "psgcCode": 37703000,
        "citymunDesc": "DILASAG",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037703",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 344,
        "psgcCode": 37704000,
        "citymunDesc": "DINALUNGAN",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037704",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 345,
        "psgcCode": 37705000,
        "citymunDesc": "DINGALAN",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037705",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 346,
        "psgcCode": 37706000,
        "citymunDesc": "DIPACULAO",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037706",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 347,
        "psgcCode": 37707000,
        "citymunDesc": "MARIA AURORA",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037707",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 348,
        "psgcCode": 37708000,
        "citymunDesc": "SAN LUIS",
        "regDesc": "03",
        "provCode": 377,
        "citymunCode": "037708",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 349,
        "psgcCode": 41001000,
        "citymunDesc": "AGONCILLO",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041001",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 350,
        "psgcCode": 41002000,
        "citymunDesc": "ALITAGTAG",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041002",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 351,
        "psgcCode": 41003000,
        "citymunDesc": "BALAYAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041003",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 352,
        "psgcCode": 41004000,
        "citymunDesc": "BALETE",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041004",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 353,
        "psgcCode": 41005000,
        "citymunDesc": "BATANGAS CITY (Capital)",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041005",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 354,
        "psgcCode": 41006000,
        "citymunDesc": "BAUAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041006",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 355,
        "psgcCode": 41007000,
        "citymunDesc": "CALACA",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041007",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 356,
        "psgcCode": 41008000,
        "citymunDesc": "CALATAGAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041008",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 357,
        "psgcCode": 41009000,
        "citymunDesc": "CUENCA",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041009",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 358,
        "psgcCode": 41010000,
        "citymunDesc": "IBAAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041010",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 359,
        "psgcCode": 41011000,
        "citymunDesc": "LAUREL",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041011",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 360,
        "psgcCode": 41012000,
        "citymunDesc": "LEMERY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041012",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 361,
        "psgcCode": 41013000,
        "citymunDesc": "LIAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041013",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 362,
        "psgcCode": 41014000,
        "citymunDesc": "LIPA CITY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041014",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 363,
        "psgcCode": 41015000,
        "citymunDesc": "LOBO",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041015",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 364,
        "psgcCode": 41016000,
        "citymunDesc": "MABINI",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041016",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 365,
        "psgcCode": 41017000,
        "citymunDesc": "MALVAR",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041017",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 366,
        "psgcCode": 41018000,
        "citymunDesc": "MATAASNAKAHOY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041018",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 367,
        "psgcCode": 41019000,
        "citymunDesc": "NASUGBU",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041019",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 368,
        "psgcCode": 41020000,
        "citymunDesc": "PADRE GARCIA",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041020",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 369,
        "psgcCode": 41021000,
        "citymunDesc": "ROSARIO",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041021",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 370,
        "psgcCode": 41022000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041022",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 371,
        "psgcCode": 41023000,
        "citymunDesc": "SAN JUAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041023",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 372,
        "psgcCode": 41024000,
        "citymunDesc": "SAN LUIS",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041024",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 373,
        "psgcCode": 41025000,
        "citymunDesc": "SAN NICOLAS",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041025",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 374,
        "psgcCode": 41026000,
        "citymunDesc": "SAN PASCUAL",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041026",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 375,
        "psgcCode": 41027000,
        "citymunDesc": "SANTA TERESITA",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041027",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 376,
        "psgcCode": 41028000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041028",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 377,
        "psgcCode": 41029000,
        "citymunDesc": "TAAL",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041029",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 378,
        "psgcCode": 41030000,
        "citymunDesc": "TALISAY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041030",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 379,
        "psgcCode": 41031000,
        "citymunDesc": "CITY OF TANAUAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041031",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 380,
        "psgcCode": 41032000,
        "citymunDesc": "TAYSAN",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041032",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 381,
        "psgcCode": 41033000,
        "citymunDesc": "TINGLOY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041033",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 382,
        "psgcCode": 41034000,
        "citymunDesc": "TUY",
        "regDesc": "04",
        "provCode": 410,
        "citymunCode": "041034",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 383,
        "psgcCode": 42101000,
        "citymunDesc": "ALFONSO",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042101",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 384,
        "psgcCode": 42102000,
        "citymunDesc": "AMADEO",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042102",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 385,
        "psgcCode": 42103000,
        "citymunDesc": "BACOOR CITY",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042103",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 386,
        "psgcCode": 42104000,
        "citymunDesc": "CARMONA",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042104",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 387,
        "psgcCode": 42105000,
        "citymunDesc": "CAVITE CITY",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042105",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 388,
        "psgcCode": 42106000,
        "citymunDesc": "CITY OF DASMARIÑAS",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042106",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 389,
        "psgcCode": 42107000,
        "citymunDesc": "GENERAL EMILIO AGUINALDO",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042107",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 390,
        "psgcCode": 42108000,
        "citymunDesc": "GENERAL TRIAS",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042108",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 391,
        "psgcCode": 42109000,
        "citymunDesc": "IMUS CITY",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042109",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 392,
        "psgcCode": 42110000,
        "citymunDesc": "INDANG",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042110",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 393,
        "psgcCode": 42111000,
        "citymunDesc": "KAWIT",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042111",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 394,
        "psgcCode": 42112000,
        "citymunDesc": "MAGALLANES",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042112",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 395,
        "psgcCode": 42113000,
        "citymunDesc": "MARAGONDON",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042113",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 396,
        "psgcCode": 42114000,
        "citymunDesc": "MENDEZ (MENDEZ-NUÑEZ)",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042114",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 397,
        "psgcCode": 42115000,
        "citymunDesc": "NAIC",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042115",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 398,
        "psgcCode": 42116000,
        "citymunDesc": "NOVELETA",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042116",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 399,
        "psgcCode": 42117000,
        "citymunDesc": "ROSARIO",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042117",
        "created_at": "2021-01-27T14:25:10.000000Z",
        "updated_at": "2021-01-27T14:25:10.000000Z"
    },
    {
        "id": 400,
        "psgcCode": 42118000,
        "citymunDesc": "SILANG",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042118",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 401,
        "psgcCode": 42119000,
        "citymunDesc": "TAGAYTAY CITY",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042119",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 402,
        "psgcCode": 42120000,
        "citymunDesc": "TANZA",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042120",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 403,
        "psgcCode": 42121000,
        "citymunDesc": "TERNATE",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042121",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 404,
        "psgcCode": 42122000,
        "citymunDesc": "TRECE MARTIRES CITY (Capital)",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042122",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 405,
        "psgcCode": 42123000,
        "citymunDesc": "GEN. MARIANO ALVAREZ",
        "regDesc": "04",
        "provCode": 421,
        "citymunCode": "042123",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 406,
        "psgcCode": 43401000,
        "citymunDesc": "ALAMINOS",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043401",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 407,
        "psgcCode": 43402000,
        "citymunDesc": "BAY",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043402",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 408,
        "psgcCode": 43403000,
        "citymunDesc": "CITY OF BIÑAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043403",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 409,
        "psgcCode": 43404000,
        "citymunDesc": "CABUYAO CITY",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043404",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 410,
        "psgcCode": 43405000,
        "citymunDesc": "CITY OF CALAMBA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043405",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 411,
        "psgcCode": 43406000,
        "citymunDesc": "CALAUAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043406",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 412,
        "psgcCode": 43407000,
        "citymunDesc": "CAVINTI",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043407",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 413,
        "psgcCode": 43408000,
        "citymunDesc": "FAMY",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043408",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 414,
        "psgcCode": 43409000,
        "citymunDesc": "KALAYAAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043409",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 415,
        "psgcCode": 43410000,
        "citymunDesc": "LILIW",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043410",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 416,
        "psgcCode": 43411000,
        "citymunDesc": "LOS BAÑOS",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043411",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 417,
        "psgcCode": 43412000,
        "citymunDesc": "LUISIANA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043412",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 418,
        "psgcCode": 43413000,
        "citymunDesc": "LUMBAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043413",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 419,
        "psgcCode": 43414000,
        "citymunDesc": "MABITAC",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043414",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 420,
        "psgcCode": 43415000,
        "citymunDesc": "MAGDALENA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043415",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 421,
        "psgcCode": 43416000,
        "citymunDesc": "MAJAYJAY",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043416",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 422,
        "psgcCode": 43417000,
        "citymunDesc": "NAGCARLAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043417",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 423,
        "psgcCode": 43418000,
        "citymunDesc": "PAETE",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043418",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 424,
        "psgcCode": 43419000,
        "citymunDesc": "PAGSANJAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043419",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 425,
        "psgcCode": 43420000,
        "citymunDesc": "PAKIL",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043420",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 426,
        "psgcCode": 43421000,
        "citymunDesc": "PANGIL",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043421",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 427,
        "psgcCode": 43422000,
        "citymunDesc": "PILA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043422",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 428,
        "psgcCode": 43423000,
        "citymunDesc": "RIZAL",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043423",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 429,
        "psgcCode": 43424000,
        "citymunDesc": "SAN PABLO CITY",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043424",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 430,
        "psgcCode": 43425000,
        "citymunDesc": "CITY OF SAN PEDRO",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043425",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 431,
        "psgcCode": 43426000,
        "citymunDesc": "SANTA CRUZ (Capital)",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043426",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 432,
        "psgcCode": 43427000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043427",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 433,
        "psgcCode": 43428000,
        "citymunDesc": "CITY OF SANTA ROSA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043428",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 434,
        "psgcCode": 43429000,
        "citymunDesc": "SINILOAN",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043429",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 435,
        "psgcCode": 43430000,
        "citymunDesc": "VICTORIA",
        "regDesc": "04",
        "provCode": 434,
        "citymunCode": "043430",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 436,
        "psgcCode": 45601000,
        "citymunDesc": "AGDANGAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045601",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 437,
        "psgcCode": 45602000,
        "citymunDesc": "ALABAT",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045602",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 438,
        "psgcCode": 45603000,
        "citymunDesc": "ATIMONAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045603",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 439,
        "psgcCode": 45605000,
        "citymunDesc": "BUENAVISTA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045605",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 440,
        "psgcCode": 45606000,
        "citymunDesc": "BURDEOS",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045606",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 441,
        "psgcCode": 45607000,
        "citymunDesc": "CALAUAG",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045607",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 442,
        "psgcCode": 45608000,
        "citymunDesc": "CANDELARIA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045608",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 443,
        "psgcCode": 45610000,
        "citymunDesc": "CATANAUAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045610",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 444,
        "psgcCode": 45615000,
        "citymunDesc": "DOLORES",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045615",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 445,
        "psgcCode": 45616000,
        "citymunDesc": "GENERAL LUNA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045616",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 446,
        "psgcCode": 45617000,
        "citymunDesc": "GENERAL NAKAR",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045617",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 447,
        "psgcCode": 45618000,
        "citymunDesc": "GUINAYANGAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045618",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 448,
        "psgcCode": 45619000,
        "citymunDesc": "GUMACA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045619",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 449,
        "psgcCode": 45620000,
        "citymunDesc": "INFANTA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045620",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 450,
        "psgcCode": 45621000,
        "citymunDesc": "JOMALIG",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045621",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 451,
        "psgcCode": 45622000,
        "citymunDesc": "LOPEZ",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045622",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 452,
        "psgcCode": 45623000,
        "citymunDesc": "LUCBAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045623",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 453,
        "psgcCode": 45624000,
        "citymunDesc": "LUCENA CITY (Capital)",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045624",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 454,
        "psgcCode": 45625000,
        "citymunDesc": "MACALELON",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045625",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 455,
        "psgcCode": 45627000,
        "citymunDesc": "MAUBAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045627",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 456,
        "psgcCode": 45628000,
        "citymunDesc": "MULANAY",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045628",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 457,
        "psgcCode": 45629000,
        "citymunDesc": "PADRE BURGOS",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045629",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 458,
        "psgcCode": 45630000,
        "citymunDesc": "PAGBILAO",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045630",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 459,
        "psgcCode": 45631000,
        "citymunDesc": "PANUKULAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045631",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 460,
        "psgcCode": 45632000,
        "citymunDesc": "PATNANUNGAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045632",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 461,
        "psgcCode": 45633000,
        "citymunDesc": "PEREZ",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045633",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 462,
        "psgcCode": 45634000,
        "citymunDesc": "PITOGO",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045634",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 463,
        "psgcCode": 45635000,
        "citymunDesc": "PLARIDEL",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045635",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 464,
        "psgcCode": 45636000,
        "citymunDesc": "POLILLO",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045636",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 465,
        "psgcCode": 45637000,
        "citymunDesc": "QUEZON",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045637",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 466,
        "psgcCode": 45638000,
        "citymunDesc": "REAL",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045638",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 467,
        "psgcCode": 45639000,
        "citymunDesc": "SAMPALOC",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045639",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 468,
        "psgcCode": 45640000,
        "citymunDesc": "SAN ANDRES",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045640",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 469,
        "psgcCode": 45641000,
        "citymunDesc": "SAN ANTONIO",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045641",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 470,
        "psgcCode": 45642000,
        "citymunDesc": "SAN FRANCISCO (AURORA)",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045642",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 471,
        "psgcCode": 45644000,
        "citymunDesc": "SAN NARCISO",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045644",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 472,
        "psgcCode": 45645000,
        "citymunDesc": "SARIAYA",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045645",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 473,
        "psgcCode": 45646000,
        "citymunDesc": "TAGKAWAYAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045646",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 474,
        "psgcCode": 45647000,
        "citymunDesc": "CITY OF TAYABAS",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045647",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 475,
        "psgcCode": 45648000,
        "citymunDesc": "TIAONG",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045648",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 476,
        "psgcCode": 45649000,
        "citymunDesc": "UNISAN",
        "regDesc": "04",
        "provCode": 456,
        "citymunCode": "045649",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 477,
        "psgcCode": 45801000,
        "citymunDesc": "ANGONO",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045801",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 478,
        "psgcCode": 45802000,
        "citymunDesc": "CITY OF ANTIPOLO",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045802",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 479,
        "psgcCode": 45803000,
        "citymunDesc": "BARAS",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045803",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 480,
        "psgcCode": 45804000,
        "citymunDesc": "BINANGONAN",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045804",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 481,
        "psgcCode": 45805000,
        "citymunDesc": "CAINTA",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045805",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 482,
        "psgcCode": 45806000,
        "citymunDesc": "CARDONA",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045806",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 483,
        "psgcCode": 45807000,
        "citymunDesc": "JALA-JALA",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045807",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 484,
        "psgcCode": 45808000,
        "citymunDesc": "RODRIGUEZ (MONTALBAN)",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045808",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 485,
        "psgcCode": 45809000,
        "citymunDesc": "MORONG",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045809",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 486,
        "psgcCode": 45810000,
        "citymunDesc": "PILILLA",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045810",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 487,
        "psgcCode": 45811000,
        "citymunDesc": "SAN MATEO",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045811",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 488,
        "psgcCode": 45812000,
        "citymunDesc": "TANAY",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045812",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 489,
        "psgcCode": 45813000,
        "citymunDesc": "TAYTAY",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045813",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 490,
        "psgcCode": 45814000,
        "citymunDesc": "TERESA",
        "regDesc": "04",
        "provCode": 458,
        "citymunCode": "045814",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 491,
        "psgcCode": 174001000,
        "citymunDesc": "BOAC (Capital)",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174001",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 492,
        "psgcCode": 174002000,
        "citymunDesc": "BUENAVISTA",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174002",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 493,
        "psgcCode": 174003000,
        "citymunDesc": "GASAN",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174003",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 494,
        "psgcCode": 174004000,
        "citymunDesc": "MOGPOG",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174004",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 495,
        "psgcCode": 174005000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174005",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 496,
        "psgcCode": 174006000,
        "citymunDesc": "TORRIJOS",
        "regDesc": "17",
        "provCode": 1740,
        "citymunCode": "174006",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 497,
        "psgcCode": 175101000,
        "citymunDesc": "ABRA DE ILOG",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175101",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 498,
        "psgcCode": 175102000,
        "citymunDesc": "CALINTAAN",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175102",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 499,
        "psgcCode": 175103000,
        "citymunDesc": "LOOC",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175103",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 500,
        "psgcCode": 175104000,
        "citymunDesc": "LUBANG",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175104",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 501,
        "psgcCode": 175105000,
        "citymunDesc": "MAGSAYSAY",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175105",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 502,
        "psgcCode": 175106000,
        "citymunDesc": "MAMBURAO (Capital)",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175106",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 503,
        "psgcCode": 175107000,
        "citymunDesc": "PALUAN",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175107",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 504,
        "psgcCode": 175108000,
        "citymunDesc": "RIZAL",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175108",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 505,
        "psgcCode": 175109000,
        "citymunDesc": "SABLAYAN",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175109",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 506,
        "psgcCode": 175110000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175110",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 507,
        "psgcCode": 175111000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "17",
        "provCode": 1751,
        "citymunCode": "175111",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 508,
        "psgcCode": 175201000,
        "citymunDesc": "BACO",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175201",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 509,
        "psgcCode": 175202000,
        "citymunDesc": "BANSUD",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175202",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 510,
        "psgcCode": 175203000,
        "citymunDesc": "BONGABONG",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175203",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 511,
        "psgcCode": 175204000,
        "citymunDesc": "BULALACAO (SAN PEDRO)",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175204",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 512,
        "psgcCode": 175205000,
        "citymunDesc": "CITY OF CALAPAN (Capital)",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175205",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 513,
        "psgcCode": 175206000,
        "citymunDesc": "GLORIA",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175206",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 514,
        "psgcCode": 175207000,
        "citymunDesc": "MANSALAY",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175207",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 515,
        "psgcCode": 175208000,
        "citymunDesc": "NAUJAN",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175208",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 516,
        "psgcCode": 175209000,
        "citymunDesc": "PINAMALAYAN",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175209",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 517,
        "psgcCode": 175210000,
        "citymunDesc": "POLA",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175210",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 518,
        "psgcCode": 175211000,
        "citymunDesc": "PUERTO GALERA",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175211",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 519,
        "psgcCode": 175212000,
        "citymunDesc": "ROXAS",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175212",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 520,
        "psgcCode": 175213000,
        "citymunDesc": "SAN TEODORO",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175213",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 521,
        "psgcCode": 175214000,
        "citymunDesc": "SOCORRO",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175214",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 522,
        "psgcCode": 175215000,
        "citymunDesc": "VICTORIA",
        "regDesc": "17",
        "provCode": 1752,
        "citymunCode": "175215",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 523,
        "psgcCode": 175301000,
        "citymunDesc": "ABORLAN",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175301",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 524,
        "psgcCode": 175302000,
        "citymunDesc": "AGUTAYA",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175302",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 525,
        "psgcCode": 175303000,
        "citymunDesc": "ARACELI",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175303",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 526,
        "psgcCode": 175304000,
        "citymunDesc": "BALABAC",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175304",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 527,
        "psgcCode": 175305000,
        "citymunDesc": "BATARAZA",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175305",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 528,
        "psgcCode": 175306000,
        "citymunDesc": "BROOKE'S POINT",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175306",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 529,
        "psgcCode": 175307000,
        "citymunDesc": "BUSUANGA",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175307",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 530,
        "psgcCode": 175308000,
        "citymunDesc": "CAGAYANCILLO",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175308",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 531,
        "psgcCode": 175309000,
        "citymunDesc": "CORON",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175309",
        "created_at": "2021-01-27T14:25:11.000000Z",
        "updated_at": "2021-01-27T14:25:11.000000Z"
    },
    {
        "id": 532,
        "psgcCode": 175310000,
        "citymunDesc": "CUYO",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175310",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 533,
        "psgcCode": 175311000,
        "citymunDesc": "DUMARAN",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175311",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 534,
        "psgcCode": 175312000,
        "citymunDesc": "EL NIDO (BACUIT)",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175312",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 535,
        "psgcCode": 175313000,
        "citymunDesc": "LINAPACAN",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175313",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 536,
        "psgcCode": 175314000,
        "citymunDesc": "MAGSAYSAY",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175314",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 537,
        "psgcCode": 175315000,
        "citymunDesc": "NARRA",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175315",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 538,
        "psgcCode": 175316000,
        "citymunDesc": "PUERTO PRINCESA CITY (Capital)",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175316",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 539,
        "psgcCode": 175317000,
        "citymunDesc": "QUEZON",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175317",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 540,
        "psgcCode": 175318000,
        "citymunDesc": "ROXAS",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175318",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 541,
        "psgcCode": 175319000,
        "citymunDesc": "SAN VICENTE",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175319",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 542,
        "psgcCode": 175320000,
        "citymunDesc": "TAYTAY",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175320",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 543,
        "psgcCode": 175321000,
        "citymunDesc": "KALAYAAN",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175321",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 544,
        "psgcCode": 175322000,
        "citymunDesc": "CULION",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175322",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 545,
        "psgcCode": 175323000,
        "citymunDesc": "RIZAL (MARCOS)",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175323",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 546,
        "psgcCode": 175324000,
        "citymunDesc": "SOFRONIO ESPAÑOLA",
        "regDesc": "17",
        "provCode": 1753,
        "citymunCode": "175324",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 547,
        "psgcCode": 175901000,
        "citymunDesc": "ALCANTARA",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175901",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 548,
        "psgcCode": 175902000,
        "citymunDesc": "BANTON",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175902",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 549,
        "psgcCode": 175903000,
        "citymunDesc": "CAJIDIOCAN",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175903",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 550,
        "psgcCode": 175904000,
        "citymunDesc": "CALATRAVA",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175904",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 551,
        "psgcCode": 175905000,
        "citymunDesc": "CONCEPCION",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175905",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 552,
        "psgcCode": 175906000,
        "citymunDesc": "CORCUERA",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175906",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 553,
        "psgcCode": 175907000,
        "citymunDesc": "LOOC",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175907",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 554,
        "psgcCode": 175908000,
        "citymunDesc": "MAGDIWANG",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175908",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 555,
        "psgcCode": 175909000,
        "citymunDesc": "ODIONGAN",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175909",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 556,
        "psgcCode": 175910000,
        "citymunDesc": "ROMBLON (Capital)",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175910",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 557,
        "psgcCode": 175911000,
        "citymunDesc": "SAN AGUSTIN",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175911",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 558,
        "psgcCode": 175912000,
        "citymunDesc": "SAN ANDRES",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175912",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 559,
        "psgcCode": 175913000,
        "citymunDesc": "SAN FERNANDO",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175913",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 560,
        "psgcCode": 175914000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175914",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 561,
        "psgcCode": 175915000,
        "citymunDesc": "SANTA FE",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175915",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 562,
        "psgcCode": 175916000,
        "citymunDesc": "FERROL",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175916",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 563,
        "psgcCode": 175917000,
        "citymunDesc": "SANTA MARIA (IMELDA)",
        "regDesc": "17",
        "provCode": 1759,
        "citymunCode": "175917",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 564,
        "psgcCode": 50501000,
        "citymunDesc": "BACACAY",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050501",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 565,
        "psgcCode": 50502000,
        "citymunDesc": "CAMALIG",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050502",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 566,
        "psgcCode": 50503000,
        "citymunDesc": "DARAGA (LOCSIN)",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050503",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 567,
        "psgcCode": 50504000,
        "citymunDesc": "GUINOBATAN",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050504",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 568,
        "psgcCode": 50505000,
        "citymunDesc": "JOVELLAR",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050505",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 569,
        "psgcCode": 50506000,
        "citymunDesc": "LEGAZPI CITY (Capital)",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050506",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 570,
        "psgcCode": 50507000,
        "citymunDesc": "LIBON",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050507",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 571,
        "psgcCode": 50508000,
        "citymunDesc": "CITY OF LIGAO",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050508",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 572,
        "psgcCode": 50509000,
        "citymunDesc": "MALILIPOT",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050509",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 573,
        "psgcCode": 50510000,
        "citymunDesc": "MALINAO",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050510",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 574,
        "psgcCode": 50511000,
        "citymunDesc": "MANITO",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050511",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 575,
        "psgcCode": 50512000,
        "citymunDesc": "OAS",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050512",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 576,
        "psgcCode": 50513000,
        "citymunDesc": "PIO DURAN",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050513",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 577,
        "psgcCode": 50514000,
        "citymunDesc": "POLANGUI",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050514",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 578,
        "psgcCode": 50515000,
        "citymunDesc": "RAPU-RAPU",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050515",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 579,
        "psgcCode": 50516000,
        "citymunDesc": "SANTO DOMINGO (LIBOG)",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050516",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 580,
        "psgcCode": 50517000,
        "citymunDesc": "CITY OF TABACO",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050517",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 581,
        "psgcCode": 50518000,
        "citymunDesc": "TIWI",
        "regDesc": "05",
        "provCode": 505,
        "citymunCode": "050518",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 582,
        "psgcCode": 51601000,
        "citymunDesc": "BASUD",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051601",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 583,
        "psgcCode": 51602000,
        "citymunDesc": "CAPALONGA",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051602",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 584,
        "psgcCode": 51603000,
        "citymunDesc": "DAET (Capital)",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051603",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 585,
        "psgcCode": 51604000,
        "citymunDesc": "SAN LORENZO RUIZ (IMELDA)",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051604",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 586,
        "psgcCode": 51605000,
        "citymunDesc": "JOSE PANGANIBAN",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051605",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 587,
        "psgcCode": 51606000,
        "citymunDesc": "LABO",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051606",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 588,
        "psgcCode": 51607000,
        "citymunDesc": "MERCEDES",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051607",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 589,
        "psgcCode": 51608000,
        "citymunDesc": "PARACALE",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051608",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 590,
        "psgcCode": 51609000,
        "citymunDesc": "SAN VICENTE",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051609",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 591,
        "psgcCode": 51610000,
        "citymunDesc": "SANTA ELENA",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051610",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 592,
        "psgcCode": 51611000,
        "citymunDesc": "TALISAY",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051611",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 593,
        "psgcCode": 51612000,
        "citymunDesc": "VINZONS",
        "regDesc": "05",
        "provCode": 516,
        "citymunCode": "051612",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 594,
        "psgcCode": 51701000,
        "citymunDesc": "BAAO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051701",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 595,
        "psgcCode": 51702000,
        "citymunDesc": "BALATAN",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051702",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 596,
        "psgcCode": 51703000,
        "citymunDesc": "BATO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051703",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 597,
        "psgcCode": 51704000,
        "citymunDesc": "BOMBON",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051704",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 598,
        "psgcCode": 51705000,
        "citymunDesc": "BUHI",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051705",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 599,
        "psgcCode": 51706000,
        "citymunDesc": "BULA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051706",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 600,
        "psgcCode": 51707000,
        "citymunDesc": "CABUSAO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051707",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 601,
        "psgcCode": 51708000,
        "citymunDesc": "CALABANGA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051708",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 602,
        "psgcCode": 51709000,
        "citymunDesc": "CAMALIGAN",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051709",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 603,
        "psgcCode": 51710000,
        "citymunDesc": "CANAMAN",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051710",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 604,
        "psgcCode": 51711000,
        "citymunDesc": "CARAMOAN",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051711",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 605,
        "psgcCode": 51712000,
        "citymunDesc": "DEL GALLEGO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051712",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 606,
        "psgcCode": 51713000,
        "citymunDesc": "GAINZA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051713",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 607,
        "psgcCode": 51714000,
        "citymunDesc": "GARCHITORENA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051714",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 608,
        "psgcCode": 51715000,
        "citymunDesc": "GOA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051715",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 609,
        "psgcCode": 51716000,
        "citymunDesc": "IRIGA CITY",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051716",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 610,
        "psgcCode": 51717000,
        "citymunDesc": "LAGONOY",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051717",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 611,
        "psgcCode": 51718000,
        "citymunDesc": "LIBMANAN",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051718",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 612,
        "psgcCode": 51719000,
        "citymunDesc": "LUPI",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051719",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 613,
        "psgcCode": 51720000,
        "citymunDesc": "MAGARAO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051720",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 614,
        "psgcCode": 51721000,
        "citymunDesc": "MILAOR",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051721",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 615,
        "psgcCode": 51722000,
        "citymunDesc": "MINALABAC",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051722",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 616,
        "psgcCode": 51723000,
        "citymunDesc": "NABUA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051723",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 617,
        "psgcCode": 51724000,
        "citymunDesc": "NAGA CITY",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051724",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 618,
        "psgcCode": 51725000,
        "citymunDesc": "OCAMPO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051725",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 619,
        "psgcCode": 51726000,
        "citymunDesc": "PAMPLONA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051726",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 620,
        "psgcCode": 51727000,
        "citymunDesc": "PASACAO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051727",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 621,
        "psgcCode": 51728000,
        "citymunDesc": "PILI (Capital)",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051728",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 622,
        "psgcCode": 51729000,
        "citymunDesc": "PRESENTACION (PARUBCAN)",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051729",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 623,
        "psgcCode": 51730000,
        "citymunDesc": "RAGAY",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051730",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 624,
        "psgcCode": 51731000,
        "citymunDesc": "SAGÑAY",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051731",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 625,
        "psgcCode": 51732000,
        "citymunDesc": "SAN FERNANDO",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051732",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 626,
        "psgcCode": 51733000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051733",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 627,
        "psgcCode": 51734000,
        "citymunDesc": "SIPOCOT",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051734",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 628,
        "psgcCode": 51735000,
        "citymunDesc": "SIRUMA",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051735",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 629,
        "psgcCode": 51736000,
        "citymunDesc": "TIGAON",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051736",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 630,
        "psgcCode": 51737000,
        "citymunDesc": "TINAMBAC",
        "regDesc": "05",
        "provCode": 517,
        "citymunCode": "051737",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 631,
        "psgcCode": 52001000,
        "citymunDesc": "BAGAMANOC",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052001",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 632,
        "psgcCode": 52002000,
        "citymunDesc": "BARAS",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052002",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 633,
        "psgcCode": 52003000,
        "citymunDesc": "BATO",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052003",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 634,
        "psgcCode": 52004000,
        "citymunDesc": "CARAMORAN",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052004",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 635,
        "psgcCode": 52005000,
        "citymunDesc": "GIGMOTO",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052005",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 636,
        "psgcCode": 52006000,
        "citymunDesc": "PANDAN",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052006",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 637,
        "psgcCode": 52007000,
        "citymunDesc": "PANGANIBAN (PAYO)",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052007",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 638,
        "psgcCode": 52008000,
        "citymunDesc": "SAN ANDRES (CALOLBON)",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052008",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 639,
        "psgcCode": 52009000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052009",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 640,
        "psgcCode": 52010000,
        "citymunDesc": "VIGA",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052010",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 641,
        "psgcCode": 52011000,
        "citymunDesc": "VIRAC (Capital)",
        "regDesc": "05",
        "provCode": 520,
        "citymunCode": "052011",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 642,
        "psgcCode": 54101000,
        "citymunDesc": "AROROY",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054101",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 643,
        "psgcCode": 54102000,
        "citymunDesc": "BALENO",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054102",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 644,
        "psgcCode": 54103000,
        "citymunDesc": "BALUD",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054103",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 645,
        "psgcCode": 54104000,
        "citymunDesc": "BATUAN",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054104",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 646,
        "psgcCode": 54105000,
        "citymunDesc": "CATAINGAN",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054105",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 647,
        "psgcCode": 54106000,
        "citymunDesc": "CAWAYAN",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054106",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 648,
        "psgcCode": 54107000,
        "citymunDesc": "CLAVERIA",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054107",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 649,
        "psgcCode": 54108000,
        "citymunDesc": "DIMASALANG",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054108",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 650,
        "psgcCode": 54109000,
        "citymunDesc": "ESPERANZA",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054109",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 651,
        "psgcCode": 54110000,
        "citymunDesc": "MANDAON",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054110",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 652,
        "psgcCode": 54111000,
        "citymunDesc": "CITY OF MASBATE (Capital)",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054111",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 653,
        "psgcCode": 54112000,
        "citymunDesc": "MILAGROS",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054112",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 654,
        "psgcCode": 54113000,
        "citymunDesc": "MOBO",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054113",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 655,
        "psgcCode": 54114000,
        "citymunDesc": "MONREAL",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054114",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 656,
        "psgcCode": 54115000,
        "citymunDesc": "PALANAS",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054115",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 657,
        "psgcCode": 54116000,
        "citymunDesc": "PIO V. CORPUZ (LIMBUHAN)",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054116",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 658,
        "psgcCode": 54117000,
        "citymunDesc": "PLACER",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054117",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 659,
        "psgcCode": 54118000,
        "citymunDesc": "SAN FERNANDO",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054118",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 660,
        "psgcCode": 54119000,
        "citymunDesc": "SAN JACINTO",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054119",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 661,
        "psgcCode": 54120000,
        "citymunDesc": "SAN PASCUAL",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054120",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 662,
        "psgcCode": 54121000,
        "citymunDesc": "USON",
        "regDesc": "05",
        "provCode": 541,
        "citymunCode": "054121",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 663,
        "psgcCode": 56202000,
        "citymunDesc": "BARCELONA",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056202",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 664,
        "psgcCode": 56203000,
        "citymunDesc": "BULAN",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056203",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 665,
        "psgcCode": 56204000,
        "citymunDesc": "BULUSAN",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056204",
        "created_at": "2021-01-27T14:25:12.000000Z",
        "updated_at": "2021-01-27T14:25:12.000000Z"
    },
    {
        "id": 666,
        "psgcCode": 56205000,
        "citymunDesc": "CASIGURAN",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056205",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 667,
        "psgcCode": 56206000,
        "citymunDesc": "CASTILLA",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056206",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 668,
        "psgcCode": 56207000,
        "citymunDesc": "DONSOL",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056207",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 669,
        "psgcCode": 56208000,
        "citymunDesc": "GUBAT",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056208",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 670,
        "psgcCode": 56209000,
        "citymunDesc": "IROSIN",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056209",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 671,
        "psgcCode": 56210000,
        "citymunDesc": "JUBAN",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056210",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 672,
        "psgcCode": 56211000,
        "citymunDesc": "MAGALLANES",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056211",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 673,
        "psgcCode": 56212000,
        "citymunDesc": "MATNOG",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056212",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 674,
        "psgcCode": 56213000,
        "citymunDesc": "PILAR",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056213",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 675,
        "psgcCode": 56214000,
        "citymunDesc": "PRIETO DIAZ",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056214",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 676,
        "psgcCode": 56215000,
        "citymunDesc": "SANTA MAGDALENA",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056215",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 677,
        "psgcCode": 56216000,
        "citymunDesc": "CITY OF SORSOGON (Capital)",
        "regDesc": "05",
        "provCode": 562,
        "citymunCode": "056216",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 678,
        "psgcCode": 60401000,
        "citymunDesc": "ALTAVAS",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060401",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 679,
        "psgcCode": 60402000,
        "citymunDesc": "BALETE",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060402",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 680,
        "psgcCode": 60403000,
        "citymunDesc": "BANGA",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060403",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 681,
        "psgcCode": 60404000,
        "citymunDesc": "BATAN",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060404",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 682,
        "psgcCode": 60405000,
        "citymunDesc": "BURUANGA",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060405",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 683,
        "psgcCode": 60406000,
        "citymunDesc": "IBAJAY",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060406",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 684,
        "psgcCode": 60407000,
        "citymunDesc": "KALIBO (Capital)",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060407",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 685,
        "psgcCode": 60408000,
        "citymunDesc": "LEZO",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060408",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 686,
        "psgcCode": 60409000,
        "citymunDesc": "LIBACAO",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060409",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 687,
        "psgcCode": 60410000,
        "citymunDesc": "MADALAG",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060410",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 688,
        "psgcCode": 60411000,
        "citymunDesc": "MAKATO",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060411",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 689,
        "psgcCode": 60412000,
        "citymunDesc": "MALAY",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060412",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 690,
        "psgcCode": 60413000,
        "citymunDesc": "MALINAO",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060413",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 691,
        "psgcCode": 60414000,
        "citymunDesc": "NABAS",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060414",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 692,
        "psgcCode": 60415000,
        "citymunDesc": "NEW WASHINGTON",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060415",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 693,
        "psgcCode": 60416000,
        "citymunDesc": "NUMANCIA",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060416",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 694,
        "psgcCode": 60417000,
        "citymunDesc": "TANGALAN",
        "regDesc": "06",
        "provCode": 604,
        "citymunCode": "060417",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 695,
        "psgcCode": 60601000,
        "citymunDesc": "ANINI-Y",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060601",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 696,
        "psgcCode": 60602000,
        "citymunDesc": "BARBAZA",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060602",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 697,
        "psgcCode": 60603000,
        "citymunDesc": "BELISON",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060603",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 698,
        "psgcCode": 60604000,
        "citymunDesc": "BUGASONG",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060604",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 699,
        "psgcCode": 60605000,
        "citymunDesc": "CALUYA",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060605",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 700,
        "psgcCode": 60606000,
        "citymunDesc": "CULASI",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060606",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 701,
        "psgcCode": 60607000,
        "citymunDesc": "TOBIAS FORNIER (DAO)",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060607",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 702,
        "psgcCode": 60608000,
        "citymunDesc": "HAMTIC",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060608",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 703,
        "psgcCode": 60609000,
        "citymunDesc": "LAUA-AN",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060609",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 704,
        "psgcCode": 60610000,
        "citymunDesc": "LIBERTAD",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060610",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 705,
        "psgcCode": 60611000,
        "citymunDesc": "PANDAN",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060611",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 706,
        "psgcCode": 60612000,
        "citymunDesc": "PATNONGON",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060612",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 707,
        "psgcCode": 60613000,
        "citymunDesc": "SAN JOSE (Capital)",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060613",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 708,
        "psgcCode": 60614000,
        "citymunDesc": "SAN REMIGIO",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060614",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 709,
        "psgcCode": 60615000,
        "citymunDesc": "SEBASTE",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060615",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 710,
        "psgcCode": 60616000,
        "citymunDesc": "SIBALOM",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060616",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 711,
        "psgcCode": 60617000,
        "citymunDesc": "TIBIAO",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060617",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 712,
        "psgcCode": 60618000,
        "citymunDesc": "VALDERRAMA",
        "regDesc": "06",
        "provCode": 606,
        "citymunCode": "060618",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 713,
        "psgcCode": 61901000,
        "citymunDesc": "CUARTERO",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061901",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 714,
        "psgcCode": 61902000,
        "citymunDesc": "DAO",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061902",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 715,
        "psgcCode": 61903000,
        "citymunDesc": "DUMALAG",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061903",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 716,
        "psgcCode": 61904000,
        "citymunDesc": "DUMARAO",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061904",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 717,
        "psgcCode": 61905000,
        "citymunDesc": "IVISAN",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061905",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 718,
        "psgcCode": 61906000,
        "citymunDesc": "JAMINDAN",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061906",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 719,
        "psgcCode": 61907000,
        "citymunDesc": "MA-AYON",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061907",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 720,
        "psgcCode": 61908000,
        "citymunDesc": "MAMBUSAO",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061908",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 721,
        "psgcCode": 61909000,
        "citymunDesc": "PANAY",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061909",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 722,
        "psgcCode": 61910000,
        "citymunDesc": "PANITAN",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061910",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 723,
        "psgcCode": 61911000,
        "citymunDesc": "PILAR",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061911",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 724,
        "psgcCode": 61912000,
        "citymunDesc": "PONTEVEDRA",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061912",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 725,
        "psgcCode": 61913000,
        "citymunDesc": "PRESIDENT ROXAS",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061913",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 726,
        "psgcCode": 61914000,
        "citymunDesc": "ROXAS CITY (Capital)",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061914",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 727,
        "psgcCode": 61915000,
        "citymunDesc": "SAPI-AN",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061915",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 728,
        "psgcCode": 61916000,
        "citymunDesc": "SIGMA",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061916",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 729,
        "psgcCode": 61917000,
        "citymunDesc": "TAPAZ",
        "regDesc": "06",
        "provCode": 619,
        "citymunCode": "061917",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 730,
        "psgcCode": 63001000,
        "citymunDesc": "AJUY",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063001",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 731,
        "psgcCode": 63002000,
        "citymunDesc": "ALIMODIAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063002",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 732,
        "psgcCode": 63003000,
        "citymunDesc": "ANILAO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063003",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 733,
        "psgcCode": 63004000,
        "citymunDesc": "BADIANGAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063004",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 734,
        "psgcCode": 63005000,
        "citymunDesc": "BALASAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063005",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 735,
        "psgcCode": 63006000,
        "citymunDesc": "BANATE",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063006",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 736,
        "psgcCode": 63007000,
        "citymunDesc": "BAROTAC NUEVO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063007",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 737,
        "psgcCode": 63008000,
        "citymunDesc": "BAROTAC VIEJO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063008",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 738,
        "psgcCode": 63009000,
        "citymunDesc": "BATAD",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063009",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 739,
        "psgcCode": 63010000,
        "citymunDesc": "BINGAWAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063010",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 740,
        "psgcCode": 63012000,
        "citymunDesc": "CABATUAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063012",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 741,
        "psgcCode": 63013000,
        "citymunDesc": "CALINOG",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063013",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 742,
        "psgcCode": 63014000,
        "citymunDesc": "CARLES",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063014",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 743,
        "psgcCode": 63015000,
        "citymunDesc": "CONCEPCION",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063015",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 744,
        "psgcCode": 63016000,
        "citymunDesc": "DINGLE",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063016",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 745,
        "psgcCode": 63017000,
        "citymunDesc": "DUEÑAS",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063017",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 746,
        "psgcCode": 63018000,
        "citymunDesc": "DUMANGAS",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063018",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 747,
        "psgcCode": 63019000,
        "citymunDesc": "ESTANCIA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063019",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 748,
        "psgcCode": 63020000,
        "citymunDesc": "GUIMBAL",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063020",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 749,
        "psgcCode": 63021000,
        "citymunDesc": "IGBARAS",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063021",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 750,
        "psgcCode": 63022000,
        "citymunDesc": "ILOILO CITY (Capital)",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063022",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 751,
        "psgcCode": 63023000,
        "citymunDesc": "JANIUAY",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063023",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 752,
        "psgcCode": 63025000,
        "citymunDesc": "LAMBUNAO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063025",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 753,
        "psgcCode": 63026000,
        "citymunDesc": "LEGANES",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063026",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 754,
        "psgcCode": 63027000,
        "citymunDesc": "LEMERY",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063027",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 755,
        "psgcCode": 63028000,
        "citymunDesc": "LEON",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063028",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 756,
        "psgcCode": 63029000,
        "citymunDesc": "MAASIN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063029",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 757,
        "psgcCode": 63030000,
        "citymunDesc": "MIAGAO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063030",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 758,
        "psgcCode": 63031000,
        "citymunDesc": "MINA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063031",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 759,
        "psgcCode": 63032000,
        "citymunDesc": "NEW LUCENA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063032",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 760,
        "psgcCode": 63034000,
        "citymunDesc": "OTON",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063034",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 761,
        "psgcCode": 63035000,
        "citymunDesc": "CITY OF PASSI",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063035",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 762,
        "psgcCode": 63036000,
        "citymunDesc": "PAVIA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063036",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 763,
        "psgcCode": 63037000,
        "citymunDesc": "POTOTAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063037",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 764,
        "psgcCode": 63038000,
        "citymunDesc": "SAN DIONISIO",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063038",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 765,
        "psgcCode": 63039000,
        "citymunDesc": "SAN ENRIQUE",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063039",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 766,
        "psgcCode": 63040000,
        "citymunDesc": "SAN JOAQUIN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063040",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 767,
        "psgcCode": 63041000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063041",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 768,
        "psgcCode": 63042000,
        "citymunDesc": "SAN RAFAEL",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063042",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 769,
        "psgcCode": 63043000,
        "citymunDesc": "SANTA BARBARA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063043",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 770,
        "psgcCode": 63044000,
        "citymunDesc": "SARA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063044",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 771,
        "psgcCode": 63045000,
        "citymunDesc": "TIGBAUAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063045",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 772,
        "psgcCode": 63046000,
        "citymunDesc": "TUBUNGAN",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063046",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 773,
        "psgcCode": 63047000,
        "citymunDesc": "ZARRAGA",
        "regDesc": "06",
        "provCode": 630,
        "citymunCode": "063047",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 774,
        "psgcCode": 64501000,
        "citymunDesc": "BACOLOD CITY (Capital)",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064501",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 775,
        "psgcCode": 64502000,
        "citymunDesc": "BAGO CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064502",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 776,
        "psgcCode": 64503000,
        "citymunDesc": "BINALBAGAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064503",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 777,
        "psgcCode": 64504000,
        "citymunDesc": "CADIZ CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064504",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 778,
        "psgcCode": 64505000,
        "citymunDesc": "CALATRAVA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064505",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 779,
        "psgcCode": 64506000,
        "citymunDesc": "CANDONI",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064506",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 780,
        "psgcCode": 64507000,
        "citymunDesc": "CAUAYAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064507",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 781,
        "psgcCode": 64508000,
        "citymunDesc": "ENRIQUE B. MAGALONA (SARAVIA)",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064508",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 782,
        "psgcCode": 64509000,
        "citymunDesc": "CITY OF ESCALANTE",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064509",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 783,
        "psgcCode": 64510000,
        "citymunDesc": "CITY OF HIMAMAYLAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064510",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 784,
        "psgcCode": 64511000,
        "citymunDesc": "HINIGARAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064511",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 785,
        "psgcCode": 64512000,
        "citymunDesc": "HINOBA-AN (ASIA)",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064512",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 786,
        "psgcCode": 64513000,
        "citymunDesc": "ILOG",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064513",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 787,
        "psgcCode": 64514000,
        "citymunDesc": "ISABELA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064514",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 788,
        "psgcCode": 64515000,
        "citymunDesc": "CITY OF KABANKALAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064515",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 789,
        "psgcCode": 64516000,
        "citymunDesc": "LA CARLOTA CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064516",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 790,
        "psgcCode": 64517000,
        "citymunDesc": "LA CASTELLANA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064517",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 791,
        "psgcCode": 64518000,
        "citymunDesc": "MANAPLA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064518",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 792,
        "psgcCode": 64519000,
        "citymunDesc": "MOISES PADILLA (MAGALLON)",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064519",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 793,
        "psgcCode": 64520000,
        "citymunDesc": "MURCIA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064520",
        "created_at": "2021-01-27T14:25:13.000000Z",
        "updated_at": "2021-01-27T14:25:13.000000Z"
    },
    {
        "id": 794,
        "psgcCode": 64521000,
        "citymunDesc": "PONTEVEDRA",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064521",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 795,
        "psgcCode": 64522000,
        "citymunDesc": "PULUPANDAN",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064522",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 796,
        "psgcCode": 64523000,
        "citymunDesc": "SAGAY CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064523",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 797,
        "psgcCode": 64524000,
        "citymunDesc": "SAN CARLOS CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064524",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 798,
        "psgcCode": 64525000,
        "citymunDesc": "SAN ENRIQUE",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064525",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 799,
        "psgcCode": 64526000,
        "citymunDesc": "SILAY CITY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064526",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 800,
        "psgcCode": 64527000,
        "citymunDesc": "CITY OF SIPALAY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064527",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 801,
        "psgcCode": 64528000,
        "citymunDesc": "CITY OF TALISAY",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064528",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 802,
        "psgcCode": 64529000,
        "citymunDesc": "TOBOSO",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064529",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 803,
        "psgcCode": 64530000,
        "citymunDesc": "VALLADOLID",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064530",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 804,
        "psgcCode": 64531000,
        "citymunDesc": "CITY OF VICTORIAS",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064531",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 805,
        "psgcCode": 64532000,
        "citymunDesc": "SALVADOR BENEDICTO",
        "regDesc": "06",
        "provCode": 645,
        "citymunCode": "064532",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 806,
        "psgcCode": 67901000,
        "citymunDesc": "BUENAVISTA",
        "regDesc": "06",
        "provCode": 679,
        "citymunCode": "067901",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 807,
        "psgcCode": 67902000,
        "citymunDesc": "JORDAN (Capital)",
        "regDesc": "06",
        "provCode": 679,
        "citymunCode": "067902",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 808,
        "psgcCode": 67903000,
        "citymunDesc": "NUEVA VALENCIA",
        "regDesc": "06",
        "provCode": 679,
        "citymunCode": "067903",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 809,
        "psgcCode": 67904000,
        "citymunDesc": "SAN LORENZO",
        "regDesc": "06",
        "provCode": 679,
        "citymunCode": "067904",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 810,
        "psgcCode": 67905000,
        "citymunDesc": "SIBUNAG",
        "regDesc": "06",
        "provCode": 679,
        "citymunCode": "067905",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 811,
        "psgcCode": 71201000,
        "citymunDesc": "ALBURQUERQUE",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071201",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 812,
        "psgcCode": 71202000,
        "citymunDesc": "ALICIA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071202",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 813,
        "psgcCode": 71203000,
        "citymunDesc": "ANDA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071203",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 814,
        "psgcCode": 71204000,
        "citymunDesc": "ANTEQUERA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071204",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 815,
        "psgcCode": 71205000,
        "citymunDesc": "BACLAYON",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071205",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 816,
        "psgcCode": 71206000,
        "citymunDesc": "BALILIHAN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071206",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 817,
        "psgcCode": 71207000,
        "citymunDesc": "BATUAN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071207",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 818,
        "psgcCode": 71208000,
        "citymunDesc": "BILAR",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071208",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 819,
        "psgcCode": 71209000,
        "citymunDesc": "BUENAVISTA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071209",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 820,
        "psgcCode": 71210000,
        "citymunDesc": "CALAPE",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071210",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 821,
        "psgcCode": 71211000,
        "citymunDesc": "CANDIJAY",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071211",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 822,
        "psgcCode": 71212000,
        "citymunDesc": "CARMEN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071212",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 823,
        "psgcCode": 71213000,
        "citymunDesc": "CATIGBIAN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071213",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 824,
        "psgcCode": 71214000,
        "citymunDesc": "CLARIN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071214",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 825,
        "psgcCode": 71215000,
        "citymunDesc": "CORELLA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071215",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 826,
        "psgcCode": 71216000,
        "citymunDesc": "CORTES",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071216",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 827,
        "psgcCode": 71217000,
        "citymunDesc": "DAGOHOY",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071217",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 828,
        "psgcCode": 71218000,
        "citymunDesc": "DANAO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071218",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 829,
        "psgcCode": 71219000,
        "citymunDesc": "DAUIS",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071219",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 830,
        "psgcCode": 71220000,
        "citymunDesc": "DIMIAO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071220",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 831,
        "psgcCode": 71221000,
        "citymunDesc": "DUERO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071221",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 832,
        "psgcCode": 71222000,
        "citymunDesc": "GARCIA HERNANDEZ",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071222",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 833,
        "psgcCode": 71223000,
        "citymunDesc": "GUINDULMAN",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071223",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 834,
        "psgcCode": 71224000,
        "citymunDesc": "INABANGA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071224",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 835,
        "psgcCode": 71225000,
        "citymunDesc": "JAGNA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071225",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 836,
        "psgcCode": 71226000,
        "citymunDesc": "JETAFE",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071226",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 837,
        "psgcCode": 71227000,
        "citymunDesc": "LILA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071227",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 838,
        "psgcCode": 71228000,
        "citymunDesc": "LOAY",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071228",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 839,
        "psgcCode": 71229000,
        "citymunDesc": "LOBOC",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071229",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 840,
        "psgcCode": 71230000,
        "citymunDesc": "LOON",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071230",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 841,
        "psgcCode": 71231000,
        "citymunDesc": "MABINI",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071231",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 842,
        "psgcCode": 71232000,
        "citymunDesc": "MARIBOJOC",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071232",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 843,
        "psgcCode": 71233000,
        "citymunDesc": "PANGLAO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071233",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 844,
        "psgcCode": 71234000,
        "citymunDesc": "PILAR",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071234",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 845,
        "psgcCode": 71235000,
        "citymunDesc": "PRES. CARLOS P. GARCIA (PITOGO)",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071235",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 846,
        "psgcCode": 71236000,
        "citymunDesc": "SAGBAYAN (BORJA)",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071236",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 847,
        "psgcCode": 71237000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071237",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 848,
        "psgcCode": 71238000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071238",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 849,
        "psgcCode": 71239000,
        "citymunDesc": "SEVILLA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071239",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 850,
        "psgcCode": 71240000,
        "citymunDesc": "SIERRA BULLONES",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071240",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 851,
        "psgcCode": 71241000,
        "citymunDesc": "SIKATUNA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071241",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 852,
        "psgcCode": 71242000,
        "citymunDesc": "TAGBILARAN CITY (Capital)",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071242",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 853,
        "psgcCode": 71243000,
        "citymunDesc": "TALIBON",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071243",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 854,
        "psgcCode": 71244000,
        "citymunDesc": "TRINIDAD",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071244",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 855,
        "psgcCode": 71245000,
        "citymunDesc": "TUBIGON",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071245",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 856,
        "psgcCode": 71246000,
        "citymunDesc": "UBAY",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071246",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 857,
        "psgcCode": 71247000,
        "citymunDesc": "VALENCIA",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071247",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 858,
        "psgcCode": 71248000,
        "citymunDesc": "BIEN UNIDO",
        "regDesc": "07",
        "provCode": 712,
        "citymunCode": "071248",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 859,
        "psgcCode": 72201000,
        "citymunDesc": "ALCANTARA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072201",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 860,
        "psgcCode": 72202000,
        "citymunDesc": "ALCOY",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072202",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 861,
        "psgcCode": 72203000,
        "citymunDesc": "ALEGRIA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072203",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 862,
        "psgcCode": 72204000,
        "citymunDesc": "ALOGUINSAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072204",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 863,
        "psgcCode": 72205000,
        "citymunDesc": "ARGAO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072205",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 864,
        "psgcCode": 72206000,
        "citymunDesc": "ASTURIAS",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072206",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 865,
        "psgcCode": 72207000,
        "citymunDesc": "BADIAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072207",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 866,
        "psgcCode": 72208000,
        "citymunDesc": "BALAMBAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072208",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 867,
        "psgcCode": 72209000,
        "citymunDesc": "BANTAYAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072209",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 868,
        "psgcCode": 72210000,
        "citymunDesc": "BARILI",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072210",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 869,
        "psgcCode": 72211000,
        "citymunDesc": "CITY OF BOGO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072211",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 870,
        "psgcCode": 72212000,
        "citymunDesc": "BOLJOON",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072212",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 871,
        "psgcCode": 72213000,
        "citymunDesc": "BORBON",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072213",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 872,
        "psgcCode": 72214000,
        "citymunDesc": "CITY OF CARCAR",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072214",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 873,
        "psgcCode": 72215000,
        "citymunDesc": "CARMEN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072215",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 874,
        "psgcCode": 72216000,
        "citymunDesc": "CATMON",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072216",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 875,
        "psgcCode": 72217000,
        "citymunDesc": "CEBU CITY (Capital)",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072217",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 876,
        "psgcCode": 72218000,
        "citymunDesc": "COMPOSTELA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072218",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 877,
        "psgcCode": 72219000,
        "citymunDesc": "CONSOLACION",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072219",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 878,
        "psgcCode": 72220000,
        "citymunDesc": "CORDOVA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072220",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 879,
        "psgcCode": 72221000,
        "citymunDesc": "DAANBANTAYAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072221",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 880,
        "psgcCode": 72222000,
        "citymunDesc": "DALAGUETE",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072222",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 881,
        "psgcCode": 72223000,
        "citymunDesc": "DANAO CITY",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072223",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 882,
        "psgcCode": 72224000,
        "citymunDesc": "DUMANJUG",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072224",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 883,
        "psgcCode": 72225000,
        "citymunDesc": "GINATILAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072225",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 884,
        "psgcCode": 72226000,
        "citymunDesc": "LAPU-LAPU CITY (OPON)",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072226",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 885,
        "psgcCode": 72227000,
        "citymunDesc": "LILOAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072227",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 886,
        "psgcCode": 72228000,
        "citymunDesc": "MADRIDEJOS",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072228",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 887,
        "psgcCode": 72229000,
        "citymunDesc": "MALABUYOC",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072229",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 888,
        "psgcCode": 72230000,
        "citymunDesc": "MANDAUE CITY",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072230",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 889,
        "psgcCode": 72231000,
        "citymunDesc": "MEDELLIN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072231",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 890,
        "psgcCode": 72232000,
        "citymunDesc": "MINGLANILLA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072232",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 891,
        "psgcCode": 72233000,
        "citymunDesc": "MOALBOAL",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072233",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 892,
        "psgcCode": 72234000,
        "citymunDesc": "CITY OF NAGA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072234",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 893,
        "psgcCode": 72235000,
        "citymunDesc": "OSLOB",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072235",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 894,
        "psgcCode": 72236000,
        "citymunDesc": "PILAR",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072236",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 895,
        "psgcCode": 72237000,
        "citymunDesc": "PINAMUNGAHAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072237",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 896,
        "psgcCode": 72238000,
        "citymunDesc": "PORO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072238",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 897,
        "psgcCode": 72239000,
        "citymunDesc": "RONDA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072239",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 898,
        "psgcCode": 72240000,
        "citymunDesc": "SAMBOAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072240",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 899,
        "psgcCode": 72241000,
        "citymunDesc": "SAN FERNANDO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072241",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 900,
        "psgcCode": 72242000,
        "citymunDesc": "SAN FRANCISCO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072242",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 901,
        "psgcCode": 72243000,
        "citymunDesc": "SAN REMIGIO",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072243",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 902,
        "psgcCode": 72244000,
        "citymunDesc": "SANTA FE",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072244",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 903,
        "psgcCode": 72245000,
        "citymunDesc": "SANTANDER",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072245",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 904,
        "psgcCode": 72246000,
        "citymunDesc": "SIBONGA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072246",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 905,
        "psgcCode": 72247000,
        "citymunDesc": "SOGOD",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072247",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 906,
        "psgcCode": 72248000,
        "citymunDesc": "TABOGON",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072248",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 907,
        "psgcCode": 72249000,
        "citymunDesc": "TABUELAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072249",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 908,
        "psgcCode": 72250000,
        "citymunDesc": "CITY OF TALISAY",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072250",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 909,
        "psgcCode": 72251000,
        "citymunDesc": "TOLEDO CITY",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072251",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 910,
        "psgcCode": 72252000,
        "citymunDesc": "TUBURAN",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072252",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 911,
        "psgcCode": 72253000,
        "citymunDesc": "TUDELA",
        "regDesc": "07",
        "provCode": 722,
        "citymunCode": "072253",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 912,
        "psgcCode": 74601000,
        "citymunDesc": "AMLAN (AYUQUITAN)",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074601",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 913,
        "psgcCode": 74602000,
        "citymunDesc": "AYUNGON",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074602",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 914,
        "psgcCode": 74603000,
        "citymunDesc": "BACONG",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074603",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 915,
        "psgcCode": 74604000,
        "citymunDesc": "BAIS CITY",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074604",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 916,
        "psgcCode": 74605000,
        "citymunDesc": "BASAY",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074605",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 917,
        "psgcCode": 74606000,
        "citymunDesc": "CITY OF BAYAWAN (TULONG)",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074606",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 918,
        "psgcCode": 74607000,
        "citymunDesc": "BINDOY (PAYABON)",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074607",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 919,
        "psgcCode": 74608000,
        "citymunDesc": "CANLAON CITY",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074608",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 920,
        "psgcCode": 74609000,
        "citymunDesc": "DAUIN",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074609",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 921,
        "psgcCode": 74610000,
        "citymunDesc": "DUMAGUETE CITY (Capital)",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074610",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 922,
        "psgcCode": 74611000,
        "citymunDesc": "CITY OF GUIHULNGAN",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074611",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 923,
        "psgcCode": 74612000,
        "citymunDesc": "JIMALALUD",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074612",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 924,
        "psgcCode": 74613000,
        "citymunDesc": "LA LIBERTAD",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074613",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 925,
        "psgcCode": 74614000,
        "citymunDesc": "MABINAY",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074614",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 926,
        "psgcCode": 74615000,
        "citymunDesc": "MANJUYOD",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074615",
        "created_at": "2021-01-27T14:25:14.000000Z",
        "updated_at": "2021-01-27T14:25:14.000000Z"
    },
    {
        "id": 927,
        "psgcCode": 74616000,
        "citymunDesc": "PAMPLONA",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074616",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 928,
        "psgcCode": 74617000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074617",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 929,
        "psgcCode": 74618000,
        "citymunDesc": "SANTA CATALINA",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074618",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 930,
        "psgcCode": 74619000,
        "citymunDesc": "SIATON",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074619",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 931,
        "psgcCode": 74620000,
        "citymunDesc": "SIBULAN",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074620",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 932,
        "psgcCode": 74621000,
        "citymunDesc": "CITY OF TANJAY",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074621",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 933,
        "psgcCode": 74622000,
        "citymunDesc": "TAYASAN",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074622",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 934,
        "psgcCode": 74623000,
        "citymunDesc": "VALENCIA (LUZURRIAGA)",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074623",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 935,
        "psgcCode": 74624000,
        "citymunDesc": "VALLEHERMOSO",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074624",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 936,
        "psgcCode": 74625000,
        "citymunDesc": "ZAMBOANGUITA",
        "regDesc": "07",
        "provCode": 746,
        "citymunCode": "074625",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 937,
        "psgcCode": 76101000,
        "citymunDesc": "ENRIQUE VILLANUEVA",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076101",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 938,
        "psgcCode": 76102000,
        "citymunDesc": "LARENA",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076102",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 939,
        "psgcCode": 76103000,
        "citymunDesc": "LAZI",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076103",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 940,
        "psgcCode": 76104000,
        "citymunDesc": "MARIA",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076104",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 941,
        "psgcCode": 76105000,
        "citymunDesc": "SAN JUAN",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076105",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 942,
        "psgcCode": 76106000,
        "citymunDesc": "SIQUIJOR (Capital)",
        "regDesc": "07",
        "provCode": 761,
        "citymunCode": "076106",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 943,
        "psgcCode": 82601000,
        "citymunDesc": "ARTECHE",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082601",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 944,
        "psgcCode": 82602000,
        "citymunDesc": "BALANGIGA",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082602",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 945,
        "psgcCode": 82603000,
        "citymunDesc": "BALANGKAYAN",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082603",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 946,
        "psgcCode": 82604000,
        "citymunDesc": "CITY OF BORONGAN (Capital)",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082604",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 947,
        "psgcCode": 82605000,
        "citymunDesc": "CAN-AVID",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082605",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 948,
        "psgcCode": 82606000,
        "citymunDesc": "DOLORES",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082606",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 949,
        "psgcCode": 82607000,
        "citymunDesc": "GENERAL MACARTHUR",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082607",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 950,
        "psgcCode": 82608000,
        "citymunDesc": "GIPORLOS",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082608",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 951,
        "psgcCode": 82609000,
        "citymunDesc": "GUIUAN",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082609",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 952,
        "psgcCode": 82610000,
        "citymunDesc": "HERNANI",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082610",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 953,
        "psgcCode": 82611000,
        "citymunDesc": "JIPAPAD",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082611",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 954,
        "psgcCode": 82612000,
        "citymunDesc": "LAWAAN",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082612",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 955,
        "psgcCode": 82613000,
        "citymunDesc": "LLORENTE",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082613",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 956,
        "psgcCode": 82614000,
        "citymunDesc": "MASLOG",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082614",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 957,
        "psgcCode": 82615000,
        "citymunDesc": "MAYDOLONG",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082615",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 958,
        "psgcCode": 82616000,
        "citymunDesc": "MERCEDES",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082616",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 959,
        "psgcCode": 82617000,
        "citymunDesc": "ORAS",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082617",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 960,
        "psgcCode": 82618000,
        "citymunDesc": "QUINAPONDAN",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082618",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 961,
        "psgcCode": 82619000,
        "citymunDesc": "SALCEDO",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082619",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 962,
        "psgcCode": 82620000,
        "citymunDesc": "SAN JULIAN",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082620",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 963,
        "psgcCode": 82621000,
        "citymunDesc": "SAN POLICARPO",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082621",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 964,
        "psgcCode": 82622000,
        "citymunDesc": "SULAT",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082622",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 965,
        "psgcCode": 82623000,
        "citymunDesc": "TAFT",
        "regDesc": "08",
        "provCode": 826,
        "citymunCode": "082623",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 966,
        "psgcCode": 83701000,
        "citymunDesc": "ABUYOG",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083701",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 967,
        "psgcCode": 83702000,
        "citymunDesc": "ALANGALANG",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083702",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 968,
        "psgcCode": 83703000,
        "citymunDesc": "ALBUERA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083703",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 969,
        "psgcCode": 83705000,
        "citymunDesc": "BABATNGON",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083705",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 970,
        "psgcCode": 83706000,
        "citymunDesc": "BARUGO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083706",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 971,
        "psgcCode": 83707000,
        "citymunDesc": "BATO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083707",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 972,
        "psgcCode": 83708000,
        "citymunDesc": "CITY OF BAYBAY",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083708",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 973,
        "psgcCode": 83710000,
        "citymunDesc": "BURAUEN",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083710",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 974,
        "psgcCode": 83713000,
        "citymunDesc": "CALUBIAN",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083713",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 975,
        "psgcCode": 83714000,
        "citymunDesc": "CAPOOCAN",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083714",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 976,
        "psgcCode": 83715000,
        "citymunDesc": "CARIGARA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083715",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 977,
        "psgcCode": 83717000,
        "citymunDesc": "DAGAMI",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083717",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 978,
        "psgcCode": 83718000,
        "citymunDesc": "DULAG",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083718",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 979,
        "psgcCode": 83719000,
        "citymunDesc": "HILONGOS",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083719",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 980,
        "psgcCode": 83720000,
        "citymunDesc": "HINDANG",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083720",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 981,
        "psgcCode": 83721000,
        "citymunDesc": "INOPACAN",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083721",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 982,
        "psgcCode": 83722000,
        "citymunDesc": "ISABEL",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083722",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 983,
        "psgcCode": 83723000,
        "citymunDesc": "JARO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083723",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 984,
        "psgcCode": 83724000,
        "citymunDesc": "JAVIER (BUGHO)",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083724",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 985,
        "psgcCode": 83725000,
        "citymunDesc": "JULITA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083725",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 986,
        "psgcCode": 83726000,
        "citymunDesc": "KANANGA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083726",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 987,
        "psgcCode": 83728000,
        "citymunDesc": "LA PAZ",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083728",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 988,
        "psgcCode": 83729000,
        "citymunDesc": "LEYTE",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083729",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 989,
        "psgcCode": 83730000,
        "citymunDesc": "MACARTHUR",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083730",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 990,
        "psgcCode": 83731000,
        "citymunDesc": "MAHAPLAG",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083731",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 991,
        "psgcCode": 83733000,
        "citymunDesc": "MATAG-OB",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083733",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 992,
        "psgcCode": 83734000,
        "citymunDesc": "MATALOM",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083734",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 993,
        "psgcCode": 83735000,
        "citymunDesc": "MAYORGA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083735",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 994,
        "psgcCode": 83736000,
        "citymunDesc": "MERIDA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083736",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 995,
        "psgcCode": 83738000,
        "citymunDesc": "ORMOC CITY",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083738",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 996,
        "psgcCode": 83739000,
        "citymunDesc": "PALO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083739",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 997,
        "psgcCode": 83740000,
        "citymunDesc": "PALOMPON",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083740",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 998,
        "psgcCode": 83741000,
        "citymunDesc": "PASTRANA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083741",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 999,
        "psgcCode": 83742000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083742",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1000,
        "psgcCode": 83743000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083743",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1001,
        "psgcCode": 83744000,
        "citymunDesc": "SANTA FE",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083744",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1002,
        "psgcCode": 83745000,
        "citymunDesc": "TABANGO",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083745",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1003,
        "psgcCode": 83746000,
        "citymunDesc": "TABONTABON",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083746",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1004,
        "psgcCode": 83747000,
        "citymunDesc": "TACLOBAN CITY (Capital)",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083747",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1005,
        "psgcCode": 83748000,
        "citymunDesc": "TANAUAN",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083748",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1006,
        "psgcCode": 83749000,
        "citymunDesc": "TOLOSA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083749",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1007,
        "psgcCode": 83750000,
        "citymunDesc": "TUNGA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083750",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1008,
        "psgcCode": 83751000,
        "citymunDesc": "VILLABA",
        "regDesc": "08",
        "provCode": 837,
        "citymunCode": "083751",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1009,
        "psgcCode": 84801000,
        "citymunDesc": "ALLEN",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084801",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1010,
        "psgcCode": 84802000,
        "citymunDesc": "BIRI",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084802",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1011,
        "psgcCode": 84803000,
        "citymunDesc": "BOBON",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084803",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1012,
        "psgcCode": 84804000,
        "citymunDesc": "CAPUL",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084804",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1013,
        "psgcCode": 84805000,
        "citymunDesc": "CATARMAN (Capital)",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084805",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1014,
        "psgcCode": 84806000,
        "citymunDesc": "CATUBIG",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084806",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1015,
        "psgcCode": 84807000,
        "citymunDesc": "GAMAY",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084807",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1016,
        "psgcCode": 84808000,
        "citymunDesc": "LAOANG",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084808",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1017,
        "psgcCode": 84809000,
        "citymunDesc": "LAPINIG",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084809",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1018,
        "psgcCode": 84810000,
        "citymunDesc": "LAS NAVAS",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084810",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1019,
        "psgcCode": 84811000,
        "citymunDesc": "LAVEZARES",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084811",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1020,
        "psgcCode": 84812000,
        "citymunDesc": "MAPANAS",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084812",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1021,
        "psgcCode": 84813000,
        "citymunDesc": "MONDRAGON",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084813",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1022,
        "psgcCode": 84814000,
        "citymunDesc": "PALAPAG",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084814",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1023,
        "psgcCode": 84815000,
        "citymunDesc": "PAMBUJAN",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084815",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1024,
        "psgcCode": 84816000,
        "citymunDesc": "ROSARIO",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084816",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1025,
        "psgcCode": 84817000,
        "citymunDesc": "SAN ANTONIO",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084817",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1026,
        "psgcCode": 84818000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084818",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1027,
        "psgcCode": 84819000,
        "citymunDesc": "SAN JOSE",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084819",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1028,
        "psgcCode": 84820000,
        "citymunDesc": "SAN ROQUE",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084820",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1029,
        "psgcCode": 84821000,
        "citymunDesc": "SAN VICENTE",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084821",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1030,
        "psgcCode": 84822000,
        "citymunDesc": "SILVINO LOBOS",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084822",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1031,
        "psgcCode": 84823000,
        "citymunDesc": "VICTORIA",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084823",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1032,
        "psgcCode": 84824000,
        "citymunDesc": "LOPE DE VEGA",
        "regDesc": "08",
        "provCode": 848,
        "citymunCode": "084824",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1033,
        "psgcCode": 86001000,
        "citymunDesc": "ALMAGRO",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086001",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1034,
        "psgcCode": 86002000,
        "citymunDesc": "BASEY",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086002",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1035,
        "psgcCode": 86003000,
        "citymunDesc": "CALBAYOG CITY",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086003",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1036,
        "psgcCode": 86004000,
        "citymunDesc": "CALBIGA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086004",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1037,
        "psgcCode": 86005000,
        "citymunDesc": "CITY OF CATBALOGAN (Capital)",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086005",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1038,
        "psgcCode": 86006000,
        "citymunDesc": "DARAM",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086006",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1039,
        "psgcCode": 86007000,
        "citymunDesc": "GANDARA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086007",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1040,
        "psgcCode": 86008000,
        "citymunDesc": "HINABANGAN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086008",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1041,
        "psgcCode": 86009000,
        "citymunDesc": "JIABONG",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086009",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1042,
        "psgcCode": 86010000,
        "citymunDesc": "MARABUT",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086010",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1043,
        "psgcCode": 86011000,
        "citymunDesc": "MATUGUINAO",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086011",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1044,
        "psgcCode": 86012000,
        "citymunDesc": "MOTIONG",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086012",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1045,
        "psgcCode": 86013000,
        "citymunDesc": "PINABACDAO",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086013",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1046,
        "psgcCode": 86014000,
        "citymunDesc": "SAN JOSE DE BUAN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086014",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1047,
        "psgcCode": 86015000,
        "citymunDesc": "SAN SEBASTIAN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086015",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1048,
        "psgcCode": 86016000,
        "citymunDesc": "SANTA MARGARITA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086016",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1049,
        "psgcCode": 86017000,
        "citymunDesc": "SANTA RITA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086017",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1050,
        "psgcCode": 86018000,
        "citymunDesc": "SANTO NIÑO",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086018",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1051,
        "psgcCode": 86019000,
        "citymunDesc": "TALALORA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086019",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1052,
        "psgcCode": 86020000,
        "citymunDesc": "TARANGNAN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086020",
        "created_at": "2021-01-27T14:25:15.000000Z",
        "updated_at": "2021-01-27T14:25:15.000000Z"
    },
    {
        "id": 1053,
        "psgcCode": 86021000,
        "citymunDesc": "VILLAREAL",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086021",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1054,
        "psgcCode": 86022000,
        "citymunDesc": "PARANAS (WRIGHT)",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086022",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1055,
        "psgcCode": 86023000,
        "citymunDesc": "ZUMARRAGA",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086023",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1056,
        "psgcCode": 86024000,
        "citymunDesc": "TAGAPUL-AN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086024",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1057,
        "psgcCode": 86025000,
        "citymunDesc": "SAN JORGE",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086025",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1058,
        "psgcCode": 86026000,
        "citymunDesc": "PAGSANGHAN",
        "regDesc": "08",
        "provCode": 860,
        "citymunCode": "086026",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1059,
        "psgcCode": 86401000,
        "citymunDesc": "ANAHAWAN",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086401",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1060,
        "psgcCode": 86402000,
        "citymunDesc": "BONTOC",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086402",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1061,
        "psgcCode": 86403000,
        "citymunDesc": "HINUNANGAN",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086403",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1062,
        "psgcCode": 86404000,
        "citymunDesc": "HINUNDAYAN",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086404",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1063,
        "psgcCode": 86405000,
        "citymunDesc": "LIBAGON",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086405",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1064,
        "psgcCode": 86406000,
        "citymunDesc": "LILOAN",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086406",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1065,
        "psgcCode": 86407000,
        "citymunDesc": "CITY OF MAASIN (Capital)",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086407",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1066,
        "psgcCode": 86408000,
        "citymunDesc": "MACROHON",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086408",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1067,
        "psgcCode": 86409000,
        "citymunDesc": "MALITBOG",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086409",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1068,
        "psgcCode": 86410000,
        "citymunDesc": "PADRE BURGOS",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086410",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1069,
        "psgcCode": 86411000,
        "citymunDesc": "PINTUYAN",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086411",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1070,
        "psgcCode": 86412000,
        "citymunDesc": "SAINT BERNARD",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086412",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1071,
        "psgcCode": 86413000,
        "citymunDesc": "SAN FRANCISCO",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086413",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1072,
        "psgcCode": 86414000,
        "citymunDesc": "SAN JUAN (CABALIAN)",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086414",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1073,
        "psgcCode": 86415000,
        "citymunDesc": "SAN RICARDO",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086415",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1074,
        "psgcCode": 86416000,
        "citymunDesc": "SILAGO",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086416",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1075,
        "psgcCode": 86417000,
        "citymunDesc": "SOGOD",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086417",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1076,
        "psgcCode": 86418000,
        "citymunDesc": "TOMAS OPPUS",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086418",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1077,
        "psgcCode": 86419000,
        "citymunDesc": "LIMASAWA",
        "regDesc": "08",
        "provCode": 864,
        "citymunCode": "086419",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1078,
        "psgcCode": 87801000,
        "citymunDesc": "ALMERIA",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087801",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1079,
        "psgcCode": 87802000,
        "citymunDesc": "BILIRAN",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087802",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1080,
        "psgcCode": 87803000,
        "citymunDesc": "CABUCGAYAN",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087803",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1081,
        "psgcCode": 87804000,
        "citymunDesc": "CAIBIRAN",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087804",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1082,
        "psgcCode": 87805000,
        "citymunDesc": "CULABA",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087805",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1083,
        "psgcCode": 87806000,
        "citymunDesc": "KAWAYAN",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087806",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1084,
        "psgcCode": 87807000,
        "citymunDesc": "MARIPIPI",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087807",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1085,
        "psgcCode": 87808000,
        "citymunDesc": "NAVAL (Capital)",
        "regDesc": "08",
        "provCode": 878,
        "citymunCode": "087808",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1086,
        "psgcCode": 97201000,
        "citymunDesc": "DAPITAN CITY",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097201",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1087,
        "psgcCode": 97202000,
        "citymunDesc": "DIPOLOG CITY (Capital)",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097202",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1088,
        "psgcCode": 97203000,
        "citymunDesc": "KATIPUNAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097203",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1089,
        "psgcCode": 97204000,
        "citymunDesc": "LA LIBERTAD",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097204",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1090,
        "psgcCode": 97205000,
        "citymunDesc": "LABASON",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097205",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1091,
        "psgcCode": 97206000,
        "citymunDesc": "LILOY",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097206",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1092,
        "psgcCode": 97207000,
        "citymunDesc": "MANUKAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097207",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1093,
        "psgcCode": 97208000,
        "citymunDesc": "MUTIA",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097208",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1094,
        "psgcCode": 97209000,
        "citymunDesc": "PIÑAN (NEW PIÑAN)",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097209",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1095,
        "psgcCode": 97210000,
        "citymunDesc": "POLANCO",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097210",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1096,
        "psgcCode": 97211000,
        "citymunDesc": "PRES. MANUEL A. ROXAS",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097211",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1097,
        "psgcCode": 97212000,
        "citymunDesc": "RIZAL",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097212",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1098,
        "psgcCode": 97213000,
        "citymunDesc": "SALUG",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097213",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1099,
        "psgcCode": 97214000,
        "citymunDesc": "SERGIO OSMEÑA SR.",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097214",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1100,
        "psgcCode": 97215000,
        "citymunDesc": "SIAYAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097215",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1101,
        "psgcCode": 97216000,
        "citymunDesc": "SIBUCO",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097216",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1102,
        "psgcCode": 97217000,
        "citymunDesc": "SIBUTAD",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097217",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1103,
        "psgcCode": 97218000,
        "citymunDesc": "SINDANGAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097218",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1104,
        "psgcCode": 97219000,
        "citymunDesc": "SIOCON",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097219",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1105,
        "psgcCode": 97220000,
        "citymunDesc": "SIRAWAI",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097220",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1106,
        "psgcCode": 97221000,
        "citymunDesc": "TAMPILISAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097221",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1107,
        "psgcCode": 97222000,
        "citymunDesc": "JOSE DALMAN (PONOT)",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097222",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1108,
        "psgcCode": 97223000,
        "citymunDesc": "GUTALAC",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097223",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1109,
        "psgcCode": 97224000,
        "citymunDesc": "BALIGUIAN",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097224",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1110,
        "psgcCode": 97225000,
        "citymunDesc": "GODOD",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097225",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1111,
        "psgcCode": 97226000,
        "citymunDesc": "BACUNGAN (Leon T. Postigo)",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097226",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1112,
        "psgcCode": 97227000,
        "citymunDesc": "KALAWIT",
        "regDesc": "09",
        "provCode": 972,
        "citymunCode": "097227",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1113,
        "psgcCode": 97302000,
        "citymunDesc": "AURORA",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097302",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1114,
        "psgcCode": 97303000,
        "citymunDesc": "BAYOG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097303",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1115,
        "psgcCode": 97305000,
        "citymunDesc": "DIMATALING",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097305",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1116,
        "psgcCode": 97306000,
        "citymunDesc": "DINAS",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097306",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1117,
        "psgcCode": 97307000,
        "citymunDesc": "DUMALINAO",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097307",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1118,
        "psgcCode": 97308000,
        "citymunDesc": "DUMINGAG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097308",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1119,
        "psgcCode": 97311000,
        "citymunDesc": "KUMALARANG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097311",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1120,
        "psgcCode": 97312000,
        "citymunDesc": "LABANGAN",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097312",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1121,
        "psgcCode": 97313000,
        "citymunDesc": "LAPUYAN",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097313",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1122,
        "psgcCode": 97315000,
        "citymunDesc": "MAHAYAG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097315",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1123,
        "psgcCode": 97317000,
        "citymunDesc": "MARGOSATUBIG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097317",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1124,
        "psgcCode": 97318000,
        "citymunDesc": "MIDSALIP",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097318",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1125,
        "psgcCode": 97319000,
        "citymunDesc": "MOLAVE",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097319",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1126,
        "psgcCode": 97322000,
        "citymunDesc": "PAGADIAN CITY (Capital)",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097322",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1127,
        "psgcCode": 97323000,
        "citymunDesc": "RAMON MAGSAYSAY (LIARGO)",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097323",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1128,
        "psgcCode": 97324000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097324",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1129,
        "psgcCode": 97325000,
        "citymunDesc": "SAN PABLO",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097325",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1130,
        "psgcCode": 97327000,
        "citymunDesc": "TABINA",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097327",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1131,
        "psgcCode": 97328000,
        "citymunDesc": "TAMBULIG",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097328",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1132,
        "psgcCode": 97330000,
        "citymunDesc": "TUKURAN",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097330",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1133,
        "psgcCode": 97332000,
        "citymunDesc": "ZAMBOANGA CITY",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097332",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1134,
        "psgcCode": 97333000,
        "citymunDesc": "LAKEWOOD",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097333",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1135,
        "psgcCode": 97337000,
        "citymunDesc": "JOSEFINA",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097337",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1136,
        "psgcCode": 97338000,
        "citymunDesc": "PITOGO",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097338",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1137,
        "psgcCode": 97340000,
        "citymunDesc": "SOMINOT (DON MARIANO MARCOS)",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097340",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1138,
        "psgcCode": 97341000,
        "citymunDesc": "VINCENZO A. SAGUN",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097341",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1139,
        "psgcCode": 97343000,
        "citymunDesc": "GUIPOS",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097343",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1140,
        "psgcCode": 97344000,
        "citymunDesc": "TIGBAO",
        "regDesc": "09",
        "provCode": 973,
        "citymunCode": "097344",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1141,
        "psgcCode": 98301000,
        "citymunDesc": "ALICIA",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098301",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1142,
        "psgcCode": 98302000,
        "citymunDesc": "BUUG",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098302",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1143,
        "psgcCode": 98303000,
        "citymunDesc": "DIPLAHAN",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098303",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1144,
        "psgcCode": 98304000,
        "citymunDesc": "IMELDA",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098304",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1145,
        "psgcCode": 98305000,
        "citymunDesc": "IPIL (Capital)",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098305",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1146,
        "psgcCode": 98306000,
        "citymunDesc": "KABASALAN",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098306",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1147,
        "psgcCode": 98307000,
        "citymunDesc": "MABUHAY",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098307",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1148,
        "psgcCode": 98308000,
        "citymunDesc": "MALANGAS",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098308",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1149,
        "psgcCode": 98309000,
        "citymunDesc": "NAGA",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098309",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1150,
        "psgcCode": 98310000,
        "citymunDesc": "OLUTANGA",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098310",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1151,
        "psgcCode": 98311000,
        "citymunDesc": "PAYAO",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098311",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1152,
        "psgcCode": 98312000,
        "citymunDesc": "ROSELLER LIM",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098312",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1153,
        "psgcCode": 98313000,
        "citymunDesc": "SIAY",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098313",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1154,
        "psgcCode": 98314000,
        "citymunDesc": "TALUSAN",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098314",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1155,
        "psgcCode": 98315000,
        "citymunDesc": "TITAY",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098315",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1156,
        "psgcCode": 98316000,
        "citymunDesc": "TUNGAWAN",
        "regDesc": "09",
        "provCode": 983,
        "citymunCode": "098316",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1157,
        "psgcCode": 99701000,
        "citymunDesc": "CITY OF ISABELA",
        "regDesc": "09",
        "provCode": 997,
        "citymunCode": "099701",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1158,
        "psgcCode": 101301000,
        "citymunDesc": "BAUNGON",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101301",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1159,
        "psgcCode": 101302000,
        "citymunDesc": "DAMULOG",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101302",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1160,
        "psgcCode": 101303000,
        "citymunDesc": "DANGCAGAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101303",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1161,
        "psgcCode": 101304000,
        "citymunDesc": "DON CARLOS",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101304",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1162,
        "psgcCode": 101305000,
        "citymunDesc": "IMPASUG-ONG",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101305",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1163,
        "psgcCode": 101306000,
        "citymunDesc": "KADINGILAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101306",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1164,
        "psgcCode": 101307000,
        "citymunDesc": "KALILANGAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101307",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1165,
        "psgcCode": 101308000,
        "citymunDesc": "KIBAWE",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101308",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1166,
        "psgcCode": 101309000,
        "citymunDesc": "KITAOTAO",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101309",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1167,
        "psgcCode": 101310000,
        "citymunDesc": "LANTAPAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101310",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1168,
        "psgcCode": 101311000,
        "citymunDesc": "LIBONA",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101311",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1169,
        "psgcCode": 101312000,
        "citymunDesc": "CITY OF MALAYBALAY (Capital)",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101312",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1170,
        "psgcCode": 101313000,
        "citymunDesc": "MALITBOG",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101313",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1171,
        "psgcCode": 101314000,
        "citymunDesc": "MANOLO FORTICH",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101314",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1172,
        "psgcCode": 101315000,
        "citymunDesc": "MARAMAG",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101315",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1173,
        "psgcCode": 101316000,
        "citymunDesc": "PANGANTUCAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101316",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1174,
        "psgcCode": 101317000,
        "citymunDesc": "QUEZON",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101317",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1175,
        "psgcCode": 101318000,
        "citymunDesc": "SAN FERNANDO",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101318",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1176,
        "psgcCode": 101319000,
        "citymunDesc": "SUMILAO",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101319",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1177,
        "psgcCode": 101320000,
        "citymunDesc": "TALAKAG",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101320",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1178,
        "psgcCode": 101321000,
        "citymunDesc": "CITY OF VALENCIA",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101321",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1179,
        "psgcCode": 101322000,
        "citymunDesc": "CABANGLASAN",
        "regDesc": "10",
        "provCode": 1013,
        "citymunCode": "101322",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1180,
        "psgcCode": 101801000,
        "citymunDesc": "CATARMAN",
        "regDesc": "10",
        "provCode": 1018,
        "citymunCode": "101801",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1181,
        "psgcCode": 101802000,
        "citymunDesc": "GUINSILIBAN",
        "regDesc": "10",
        "provCode": 1018,
        "citymunCode": "101802",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1182,
        "psgcCode": 101803000,
        "citymunDesc": "MAHINOG",
        "regDesc": "10",
        "provCode": 1018,
        "citymunCode": "101803",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1183,
        "psgcCode": 101804000,
        "citymunDesc": "MAMBAJAO (Capital)",
        "regDesc": "10",
        "provCode": 1018,
        "citymunCode": "101804",
        "created_at": "2021-01-27T14:25:16.000000Z",
        "updated_at": "2021-01-27T14:25:16.000000Z"
    },
    {
        "id": 1184,
        "psgcCode": 101805000,
        "citymunDesc": "SAGAY",
        "regDesc": "10",
        "provCode": 1018,
        "citymunCode": "101805",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1185,
        "psgcCode": 103501000,
        "citymunDesc": "BACOLOD",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103501",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1186,
        "psgcCode": 103502000,
        "citymunDesc": "BALOI",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103502",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1187,
        "psgcCode": 103503000,
        "citymunDesc": "BAROY",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103503",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1188,
        "psgcCode": 103504000,
        "citymunDesc": "ILIGAN CITY",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103504",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1189,
        "psgcCode": 103505000,
        "citymunDesc": "KAPATAGAN",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103505",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1190,
        "psgcCode": 103506000,
        "citymunDesc": "SULTAN NAGA DIMAPORO (KAROMATAN)",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103506",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1191,
        "psgcCode": 103507000,
        "citymunDesc": "KAUSWAGAN",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103507",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1192,
        "psgcCode": 103508000,
        "citymunDesc": "KOLAMBUGAN",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103508",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1193,
        "psgcCode": 103509000,
        "citymunDesc": "LALA",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103509",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1194,
        "psgcCode": 103510000,
        "citymunDesc": "LINAMON",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103510",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1195,
        "psgcCode": 103511000,
        "citymunDesc": "MAGSAYSAY",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103511",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1196,
        "psgcCode": 103512000,
        "citymunDesc": "MAIGO",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103512",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1197,
        "psgcCode": 103513000,
        "citymunDesc": "MATUNGAO",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103513",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1198,
        "psgcCode": 103514000,
        "citymunDesc": "MUNAI",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103514",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1199,
        "psgcCode": 103515000,
        "citymunDesc": "NUNUNGAN",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103515",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1200,
        "psgcCode": 103516000,
        "citymunDesc": "PANTAO RAGAT",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103516",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1201,
        "psgcCode": 103517000,
        "citymunDesc": "POONA PIAGAPO",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103517",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1202,
        "psgcCode": 103518000,
        "citymunDesc": "SALVADOR",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103518",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1203,
        "psgcCode": 103519000,
        "citymunDesc": "SAPAD",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103519",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1204,
        "psgcCode": 103520000,
        "citymunDesc": "TAGOLOAN",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103520",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1205,
        "psgcCode": 103521000,
        "citymunDesc": "TANGCAL",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103521",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1206,
        "psgcCode": 103522000,
        "citymunDesc": "TUBOD (Capital)",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103522",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1207,
        "psgcCode": 103523000,
        "citymunDesc": "PANTAR",
        "regDesc": "10",
        "provCode": 1035,
        "citymunCode": "103523",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1208,
        "psgcCode": 104201000,
        "citymunDesc": "ALORAN",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104201",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1209,
        "psgcCode": 104202000,
        "citymunDesc": "BALIANGAO",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104202",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1210,
        "psgcCode": 104203000,
        "citymunDesc": "BONIFACIO",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104203",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1211,
        "psgcCode": 104204000,
        "citymunDesc": "CALAMBA",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104204",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1212,
        "psgcCode": 104205000,
        "citymunDesc": "CLARIN",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104205",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1213,
        "psgcCode": 104206000,
        "citymunDesc": "CONCEPCION",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104206",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1214,
        "psgcCode": 104207000,
        "citymunDesc": "JIMENEZ",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104207",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1215,
        "psgcCode": 104208000,
        "citymunDesc": "LOPEZ JAENA",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104208",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1216,
        "psgcCode": 104209000,
        "citymunDesc": "OROQUIETA CITY (Capital)",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104209",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1217,
        "psgcCode": 104210000,
        "citymunDesc": "OZAMIS CITY",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104210",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1218,
        "psgcCode": 104211000,
        "citymunDesc": "PANAON",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104211",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1219,
        "psgcCode": 104212000,
        "citymunDesc": "PLARIDEL",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104212",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1220,
        "psgcCode": 104213000,
        "citymunDesc": "SAPANG DALAGA",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104213",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1221,
        "psgcCode": 104214000,
        "citymunDesc": "SINACABAN",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104214",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1222,
        "psgcCode": 104215000,
        "citymunDesc": "TANGUB CITY",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104215",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1223,
        "psgcCode": 104216000,
        "citymunDesc": "TUDELA",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104216",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1224,
        "psgcCode": 104217000,
        "citymunDesc": "DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)",
        "regDesc": "10",
        "provCode": 1042,
        "citymunCode": "104217",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1225,
        "psgcCode": 104301000,
        "citymunDesc": "ALUBIJID",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104301",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1226,
        "psgcCode": 104302000,
        "citymunDesc": "BALINGASAG",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104302",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1227,
        "psgcCode": 104303000,
        "citymunDesc": "BALINGOAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104303",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1228,
        "psgcCode": 104304000,
        "citymunDesc": "BINUANGAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104304",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1229,
        "psgcCode": 104305000,
        "citymunDesc": "CAGAYAN DE ORO CITY (Capital)",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104305",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1230,
        "psgcCode": 104306000,
        "citymunDesc": "CLAVERIA",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104306",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1231,
        "psgcCode": 104307000,
        "citymunDesc": "CITY OF EL SALVADOR",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104307",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1232,
        "psgcCode": 104308000,
        "citymunDesc": "GINGOOG CITY",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104308",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1233,
        "psgcCode": 104309000,
        "citymunDesc": "GITAGUM",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104309",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1234,
        "psgcCode": 104310000,
        "citymunDesc": "INITAO",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104310",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1235,
        "psgcCode": 104311000,
        "citymunDesc": "JASAAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104311",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1236,
        "psgcCode": 104312000,
        "citymunDesc": "KINOGUITAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104312",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1237,
        "psgcCode": 104313000,
        "citymunDesc": "LAGONGLONG",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104313",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1238,
        "psgcCode": 104314000,
        "citymunDesc": "LAGUINDINGAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104314",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1239,
        "psgcCode": 104315000,
        "citymunDesc": "LIBERTAD",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104315",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1240,
        "psgcCode": 104316000,
        "citymunDesc": "LUGAIT",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104316",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1241,
        "psgcCode": 104317000,
        "citymunDesc": "MAGSAYSAY (LINUGOS)",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104317",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1242,
        "psgcCode": 104318000,
        "citymunDesc": "MANTICAO",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104318",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1243,
        "psgcCode": 104319000,
        "citymunDesc": "MEDINA",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104319",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1244,
        "psgcCode": 104320000,
        "citymunDesc": "NAAWAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104320",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1245,
        "psgcCode": 104321000,
        "citymunDesc": "OPOL",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104321",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1246,
        "psgcCode": 104322000,
        "citymunDesc": "SALAY",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104322",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1247,
        "psgcCode": 104323000,
        "citymunDesc": "SUGBONGCOGON",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104323",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1248,
        "psgcCode": 104324000,
        "citymunDesc": "TAGOLOAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104324",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1249,
        "psgcCode": 104325000,
        "citymunDesc": "TALISAYAN",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104325",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1250,
        "psgcCode": 104326000,
        "citymunDesc": "VILLANUEVA",
        "regDesc": "10",
        "provCode": 1043,
        "citymunCode": "104326",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1251,
        "psgcCode": 112301000,
        "citymunDesc": "ASUNCION (SAUG)",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112301",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1252,
        "psgcCode": 112303000,
        "citymunDesc": "CARMEN",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112303",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1253,
        "psgcCode": 112305000,
        "citymunDesc": "KAPALONG",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112305",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1254,
        "psgcCode": 112314000,
        "citymunDesc": "NEW CORELLA",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112314",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1255,
        "psgcCode": 112315000,
        "citymunDesc": "CITY OF PANABO",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112315",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1256,
        "psgcCode": 112317000,
        "citymunDesc": "ISLAND GARDEN CITY OF SAMAL",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112317",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1257,
        "psgcCode": 112318000,
        "citymunDesc": "SANTO TOMAS",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112318",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1258,
        "psgcCode": 112319000,
        "citymunDesc": "CITY OF TAGUM (Capital)",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112319",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1259,
        "psgcCode": 112322000,
        "citymunDesc": "TALAINGOD",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112322",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1260,
        "psgcCode": 112323000,
        "citymunDesc": "BRAULIO E. DUJALI",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112323",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1261,
        "psgcCode": 112324000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "11",
        "provCode": 1123,
        "citymunCode": "112324",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1262,
        "psgcCode": 112401000,
        "citymunDesc": "BANSALAN",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112401",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1263,
        "psgcCode": 112402000,
        "citymunDesc": "DAVAO CITY",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112402",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1264,
        "psgcCode": 112403000,
        "citymunDesc": "CITY OF DIGOS (Capital)",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112403",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1265,
        "psgcCode": 112404000,
        "citymunDesc": "HAGONOY",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112404",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1266,
        "psgcCode": 112406000,
        "citymunDesc": "KIBLAWAN",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112406",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1267,
        "psgcCode": 112407000,
        "citymunDesc": "MAGSAYSAY",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112407",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1268,
        "psgcCode": 112408000,
        "citymunDesc": "MALALAG",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112408",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1269,
        "psgcCode": 112410000,
        "citymunDesc": "MATANAO",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112410",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1270,
        "psgcCode": 112411000,
        "citymunDesc": "PADADA",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112411",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1271,
        "psgcCode": 112412000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112412",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1272,
        "psgcCode": 112414000,
        "citymunDesc": "SULOP",
        "regDesc": "11",
        "provCode": 1124,
        "citymunCode": "112414",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1273,
        "psgcCode": 112501000,
        "citymunDesc": "BAGANGA",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112501",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1274,
        "psgcCode": 112502000,
        "citymunDesc": "BANAYBANAY",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112502",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1275,
        "psgcCode": 112503000,
        "citymunDesc": "BOSTON",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112503",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1276,
        "psgcCode": 112504000,
        "citymunDesc": "CARAGA",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112504",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1277,
        "psgcCode": 112505000,
        "citymunDesc": "CATEEL",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112505",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1278,
        "psgcCode": 112506000,
        "citymunDesc": "GOVERNOR GENEROSO",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112506",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1279,
        "psgcCode": 112507000,
        "citymunDesc": "LUPON",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112507",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1280,
        "psgcCode": 112508000,
        "citymunDesc": "MANAY",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112508",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1281,
        "psgcCode": 112509000,
        "citymunDesc": "CITY OF MATI (Capital)",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112509",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1282,
        "psgcCode": 112510000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112510",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1283,
        "psgcCode": 112511000,
        "citymunDesc": "TARRAGONA",
        "regDesc": "11",
        "provCode": 1125,
        "citymunCode": "112511",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1284,
        "psgcCode": 118201000,
        "citymunDesc": "COMPOSTELA",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118201",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1285,
        "psgcCode": 118202000,
        "citymunDesc": "LAAK (SAN VICENTE)",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118202",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1286,
        "psgcCode": 118203000,
        "citymunDesc": "MABINI (DOÑA ALICIA)",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118203",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1287,
        "psgcCode": 118204000,
        "citymunDesc": "MACO",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118204",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1288,
        "psgcCode": 118205000,
        "citymunDesc": "MARAGUSAN (SAN MARIANO)",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118205",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1289,
        "psgcCode": 118206000,
        "citymunDesc": "MAWAB",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118206",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1290,
        "psgcCode": 118207000,
        "citymunDesc": "MONKAYO",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118207",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1291,
        "psgcCode": 118208000,
        "citymunDesc": "MONTEVISTA",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118208",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1292,
        "psgcCode": 118209000,
        "citymunDesc": "NABUNTURAN (Capital)",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118209",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1293,
        "psgcCode": 118210000,
        "citymunDesc": "NEW BATAAN",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118210",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1294,
        "psgcCode": 118211000,
        "citymunDesc": "PANTUKAN",
        "regDesc": "11",
        "provCode": 1182,
        "citymunCode": "118211",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1295,
        "psgcCode": 118601000,
        "citymunDesc": "DON MARCELINO",
        "regDesc": "11",
        "provCode": 1186,
        "citymunCode": "118601",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1296,
        "psgcCode": 118602000,
        "citymunDesc": "JOSE ABAD SANTOS (TRINIDAD)",
        "regDesc": "11",
        "provCode": 1186,
        "citymunCode": "118602",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1297,
        "psgcCode": 118603000,
        "citymunDesc": "MALITA",
        "regDesc": "11",
        "provCode": 1186,
        "citymunCode": "118603",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1298,
        "psgcCode": 118604000,
        "citymunDesc": "SANTA MARIA",
        "regDesc": "11",
        "provCode": 1186,
        "citymunCode": "118604",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1299,
        "psgcCode": 118605000,
        "citymunDesc": "SARANGANI",
        "regDesc": "11",
        "provCode": 1186,
        "citymunCode": "118605",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1300,
        "psgcCode": 124701000,
        "citymunDesc": "ALAMADA",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124701",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1301,
        "psgcCode": 124702000,
        "citymunDesc": "CARMEN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124702",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1302,
        "psgcCode": 124703000,
        "citymunDesc": "KABACAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124703",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1303,
        "psgcCode": 124704000,
        "citymunDesc": "CITY OF KIDAPAWAN (Capital)",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124704",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1304,
        "psgcCode": 124705000,
        "citymunDesc": "LIBUNGAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124705",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1305,
        "psgcCode": 124706000,
        "citymunDesc": "MAGPET",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124706",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1306,
        "psgcCode": 124707000,
        "citymunDesc": "MAKILALA",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124707",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1307,
        "psgcCode": 124708000,
        "citymunDesc": "MATALAM",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124708",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1308,
        "psgcCode": 124709000,
        "citymunDesc": "MIDSAYAP",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124709",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1309,
        "psgcCode": 124710000,
        "citymunDesc": "M'LANG",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124710",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1310,
        "psgcCode": 124711000,
        "citymunDesc": "PIGKAWAYAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124711",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1311,
        "psgcCode": 124712000,
        "citymunDesc": "PIKIT",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124712",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1312,
        "psgcCode": 124713000,
        "citymunDesc": "PRESIDENT ROXAS",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124713",
        "created_at": "2021-01-27T14:25:17.000000Z",
        "updated_at": "2021-01-27T14:25:17.000000Z"
    },
    {
        "id": 1313,
        "psgcCode": 124714000,
        "citymunDesc": "TULUNAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124714",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1314,
        "psgcCode": 124715000,
        "citymunDesc": "ANTIPAS",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124715",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1315,
        "psgcCode": 124716000,
        "citymunDesc": "BANISILAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124716",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1316,
        "psgcCode": 124717000,
        "citymunDesc": "ALEOSAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124717",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1317,
        "psgcCode": 124718000,
        "citymunDesc": "ARAKAN",
        "regDesc": "12",
        "provCode": 1247,
        "citymunCode": "124718",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1318,
        "psgcCode": 126302000,
        "citymunDesc": "BANGA",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126302",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1319,
        "psgcCode": 126303000,
        "citymunDesc": "GENERAL SANTOS CITY (DADIANGAS)",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126303",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1320,
        "psgcCode": 126306000,
        "citymunDesc": "CITY OF KORONADAL (Capital)",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126306",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1321,
        "psgcCode": 126311000,
        "citymunDesc": "NORALA",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126311",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1322,
        "psgcCode": 126312000,
        "citymunDesc": "POLOMOLOK",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126312",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1323,
        "psgcCode": 126313000,
        "citymunDesc": "SURALLAH",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126313",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1324,
        "psgcCode": 126314000,
        "citymunDesc": "TAMPAKAN",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126314",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1325,
        "psgcCode": 126315000,
        "citymunDesc": "TANTANGAN",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126315",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1326,
        "psgcCode": 126316000,
        "citymunDesc": "T'BOLI",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126316",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1327,
        "psgcCode": 126317000,
        "citymunDesc": "TUPI",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126317",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1328,
        "psgcCode": 126318000,
        "citymunDesc": "SANTO NIÑO",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126318",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1329,
        "psgcCode": 126319000,
        "citymunDesc": "LAKE SEBU",
        "regDesc": "12",
        "provCode": 1263,
        "citymunCode": "126319",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1330,
        "psgcCode": 126501000,
        "citymunDesc": "BAGUMBAYAN",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126501",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1331,
        "psgcCode": 126502000,
        "citymunDesc": "COLUMBIO",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126502",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1332,
        "psgcCode": 126503000,
        "citymunDesc": "ESPERANZA",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126503",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1333,
        "psgcCode": 126504000,
        "citymunDesc": "ISULAN (Capital)",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126504",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1334,
        "psgcCode": 126505000,
        "citymunDesc": "KALAMANSIG",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126505",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1335,
        "psgcCode": 126506000,
        "citymunDesc": "LEBAK",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126506",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1336,
        "psgcCode": 126507000,
        "citymunDesc": "LUTAYAN",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126507",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1337,
        "psgcCode": 126508000,
        "citymunDesc": "LAMBAYONG (MARIANO MARCOS)",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126508",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1338,
        "psgcCode": 126509000,
        "citymunDesc": "PALIMBANG",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126509",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1339,
        "psgcCode": 126510000,
        "citymunDesc": "PRESIDENT QUIRINO",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126510",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1340,
        "psgcCode": 126511000,
        "citymunDesc": "CITY OF TACURONG",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126511",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1341,
        "psgcCode": 126512000,
        "citymunDesc": "SEN. NINOY AQUINO",
        "regDesc": "12",
        "provCode": 1265,
        "citymunCode": "126512",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1342,
        "psgcCode": 128001000,
        "citymunDesc": "ALABEL (Capital)",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128001",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1343,
        "psgcCode": 128002000,
        "citymunDesc": "GLAN",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128002",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1344,
        "psgcCode": 128003000,
        "citymunDesc": "KIAMBA",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128003",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1345,
        "psgcCode": 128004000,
        "citymunDesc": "MAASIM",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128004",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1346,
        "psgcCode": 128005000,
        "citymunDesc": "MAITUM",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128005",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1347,
        "psgcCode": 128006000,
        "citymunDesc": "MALAPATAN",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128006",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1348,
        "psgcCode": 128007000,
        "citymunDesc": "MALUNGON",
        "regDesc": "12",
        "provCode": 1280,
        "citymunCode": "128007",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1349,
        "psgcCode": 129804000,
        "citymunDesc": "COTABATO CITY",
        "regDesc": "12",
        "provCode": 1298,
        "citymunCode": "129804",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1350,
        "psgcCode": 133901000,
        "citymunDesc": "TONDO I \/ II",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133901",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1351,
        "psgcCode": 133902000,
        "citymunDesc": "BINONDO",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133902",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1352,
        "psgcCode": 133903000,
        "citymunDesc": "QUIAPO",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133903",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1353,
        "psgcCode": 133904000,
        "citymunDesc": "SAN NICOLAS",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133904",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1354,
        "psgcCode": 133905000,
        "citymunDesc": "SANTA CRUZ",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133905",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1355,
        "psgcCode": 133906000,
        "citymunDesc": "SAMPALOC",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133906",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1356,
        "psgcCode": 133907000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133907",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1357,
        "psgcCode": 133908000,
        "citymunDesc": "ERMITA",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133908",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1358,
        "psgcCode": 133909000,
        "citymunDesc": "INTRAMUROS",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133909",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1359,
        "psgcCode": 133910000,
        "citymunDesc": "MALATE",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133910",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1360,
        "psgcCode": 133911000,
        "citymunDesc": "PACO",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133911",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1361,
        "psgcCode": 133912000,
        "citymunDesc": "PANDACAN",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133912",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1362,
        "psgcCode": 133913000,
        "citymunDesc": "PORT AREA",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133913",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1363,
        "psgcCode": 133914000,
        "citymunDesc": "SANTA ANA",
        "regDesc": "13",
        "provCode": 1339,
        "citymunCode": "133914",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1364,
        "psgcCode": 137401000,
        "citymunDesc": "CITY OF MANDALUYONG",
        "regDesc": "13",
        "provCode": 1374,
        "citymunCode": "137401",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1365,
        "psgcCode": 137402000,
        "citymunDesc": "CITY OF MARIKINA",
        "regDesc": "13",
        "provCode": 1374,
        "citymunCode": "137402",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1366,
        "psgcCode": 137403000,
        "citymunDesc": "CITY OF PASIG",
        "regDesc": "13",
        "provCode": 1374,
        "citymunCode": "137403",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1367,
        "psgcCode": 137404000,
        "citymunDesc": "QUEZON CITY",
        "regDesc": "13",
        "provCode": 1374,
        "citymunCode": "137404",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1368,
        "psgcCode": 137405000,
        "citymunDesc": "CITY OF SAN JUAN",
        "regDesc": "13",
        "provCode": 1374,
        "citymunCode": "137405",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1369,
        "psgcCode": 137501000,
        "citymunDesc": "CALOOCAN CITY",
        "regDesc": "13",
        "provCode": 1375,
        "citymunCode": "137501",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1370,
        "psgcCode": 137502000,
        "citymunDesc": "CITY OF MALABON",
        "regDesc": "13",
        "provCode": 1375,
        "citymunCode": "137502",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1371,
        "psgcCode": 137503000,
        "citymunDesc": "CITY OF NAVOTAS",
        "regDesc": "13",
        "provCode": 1375,
        "citymunCode": "137503",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1372,
        "psgcCode": 137504000,
        "citymunDesc": "CITY OF VALENZUELA",
        "regDesc": "13",
        "provCode": 1375,
        "citymunCode": "137504",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1373,
        "psgcCode": 137601000,
        "citymunDesc": "CITY OF LAS PIÑAS",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137601",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1374,
        "psgcCode": 137602000,
        "citymunDesc": "CITY OF MAKATI",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137602",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1375,
        "psgcCode": 137603000,
        "citymunDesc": "CITY OF MUNTINLUPA",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137603",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1376,
        "psgcCode": 137604000,
        "citymunDesc": "CITY OF PARAÑAQUE",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137604",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1377,
        "psgcCode": 137605000,
        "citymunDesc": "PASAY CITY",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137605",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1378,
        "psgcCode": 137606000,
        "citymunDesc": "PATEROS",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137606",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1379,
        "psgcCode": 137607000,
        "citymunDesc": "TAGUIG CITY",
        "regDesc": "13",
        "provCode": 1376,
        "citymunCode": "137607",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1380,
        "psgcCode": 140101000,
        "citymunDesc": "BANGUED (Capital)",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140101",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1381,
        "psgcCode": 140102000,
        "citymunDesc": "BOLINEY",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140102",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1382,
        "psgcCode": 140103000,
        "citymunDesc": "BUCAY",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140103",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1383,
        "psgcCode": 140104000,
        "citymunDesc": "BUCLOC",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140104",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1384,
        "psgcCode": 140105000,
        "citymunDesc": "DAGUIOMAN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140105",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1385,
        "psgcCode": 140106000,
        "citymunDesc": "DANGLAS",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140106",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1386,
        "psgcCode": 140107000,
        "citymunDesc": "DOLORES",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140107",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1387,
        "psgcCode": 140108000,
        "citymunDesc": "LA PAZ",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140108",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1388,
        "psgcCode": 140109000,
        "citymunDesc": "LACUB",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140109",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1389,
        "psgcCode": 140110000,
        "citymunDesc": "LAGANGILANG",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140110",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1390,
        "psgcCode": 140111000,
        "citymunDesc": "LAGAYAN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140111",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1391,
        "psgcCode": 140112000,
        "citymunDesc": "LANGIDEN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140112",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1392,
        "psgcCode": 140113000,
        "citymunDesc": "LICUAN-BAAY (LICUAN)",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140113",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1393,
        "psgcCode": 140114000,
        "citymunDesc": "LUBA",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140114",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1394,
        "psgcCode": 140115000,
        "citymunDesc": "MALIBCONG",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140115",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1395,
        "psgcCode": 140116000,
        "citymunDesc": "MANABO",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140116",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1396,
        "psgcCode": 140117000,
        "citymunDesc": "PEÑARRUBIA",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140117",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1397,
        "psgcCode": 140118000,
        "citymunDesc": "PIDIGAN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140118",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1398,
        "psgcCode": 140119000,
        "citymunDesc": "PILAR",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140119",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1399,
        "psgcCode": 140120000,
        "citymunDesc": "SALLAPADAN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140120",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1400,
        "psgcCode": 140121000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140121",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1401,
        "psgcCode": 140122000,
        "citymunDesc": "SAN JUAN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140122",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1402,
        "psgcCode": 140123000,
        "citymunDesc": "SAN QUINTIN",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140123",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1403,
        "psgcCode": 140124000,
        "citymunDesc": "TAYUM",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140124",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1404,
        "psgcCode": 140125000,
        "citymunDesc": "TINEG",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140125",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1405,
        "psgcCode": 140126000,
        "citymunDesc": "TUBO",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140126",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1406,
        "psgcCode": 140127000,
        "citymunDesc": "VILLAVICIOSA",
        "regDesc": "14",
        "provCode": 1401,
        "citymunCode": "140127",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1407,
        "psgcCode": 141101000,
        "citymunDesc": "ATOK",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141101",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1408,
        "psgcCode": 141102000,
        "citymunDesc": "BAGUIO CITY",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141102",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1409,
        "psgcCode": 141103000,
        "citymunDesc": "BAKUN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141103",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1410,
        "psgcCode": 141104000,
        "citymunDesc": "BOKOD",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141104",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1411,
        "psgcCode": 141105000,
        "citymunDesc": "BUGUIAS",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141105",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1412,
        "psgcCode": 141106000,
        "citymunDesc": "ITOGON",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141106",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1413,
        "psgcCode": 141107000,
        "citymunDesc": "KABAYAN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141107",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1414,
        "psgcCode": 141108000,
        "citymunDesc": "KAPANGAN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141108",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1415,
        "psgcCode": 141109000,
        "citymunDesc": "KIBUNGAN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141109",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1416,
        "psgcCode": 141110000,
        "citymunDesc": "LA TRINIDAD (Capital)",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141110",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1417,
        "psgcCode": 141111000,
        "citymunDesc": "MANKAYAN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141111",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1418,
        "psgcCode": 141112000,
        "citymunDesc": "SABLAN",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141112",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1419,
        "psgcCode": 141113000,
        "citymunDesc": "TUBA",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141113",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1420,
        "psgcCode": 141114000,
        "citymunDesc": "TUBLAY",
        "regDesc": "14",
        "provCode": 1411,
        "citymunCode": "141114",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1421,
        "psgcCode": 142701000,
        "citymunDesc": "BANAUE",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142701",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1422,
        "psgcCode": 142702000,
        "citymunDesc": "HUNGDUAN",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142702",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1423,
        "psgcCode": 142703000,
        "citymunDesc": "KIANGAN",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142703",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1424,
        "psgcCode": 142704000,
        "citymunDesc": "LAGAWE (Capital)",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142704",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1425,
        "psgcCode": 142705000,
        "citymunDesc": "LAMUT",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142705",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1426,
        "psgcCode": 142706000,
        "citymunDesc": "MAYOYAO",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142706",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1427,
        "psgcCode": 142707000,
        "citymunDesc": "ALFONSO LISTA (POTIA)",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142707",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1428,
        "psgcCode": 142708000,
        "citymunDesc": "AGUINALDO",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142708",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1429,
        "psgcCode": 142709000,
        "citymunDesc": "HINGYON",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142709",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1430,
        "psgcCode": 142710000,
        "citymunDesc": "TINOC",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142710",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1431,
        "psgcCode": 142711000,
        "citymunDesc": "ASIPULO",
        "regDesc": "14",
        "provCode": 1427,
        "citymunCode": "142711",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1432,
        "psgcCode": 143201000,
        "citymunDesc": "BALBALAN",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143201",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1433,
        "psgcCode": 143206000,
        "citymunDesc": "LUBUAGAN",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143206",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1434,
        "psgcCode": 143208000,
        "citymunDesc": "PASIL",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143208",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1435,
        "psgcCode": 143209000,
        "citymunDesc": "PINUKPUK",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143209",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1436,
        "psgcCode": 143211000,
        "citymunDesc": "RIZAL (LIWAN)",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143211",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1437,
        "psgcCode": 143213000,
        "citymunDesc": "CITY OF TABUK (Capital)",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143213",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1438,
        "psgcCode": 143214000,
        "citymunDesc": "TANUDAN",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143214",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1439,
        "psgcCode": 143215000,
        "citymunDesc": "TINGLAYAN",
        "regDesc": "14",
        "provCode": 1432,
        "citymunCode": "143215",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1440,
        "psgcCode": 144401000,
        "citymunDesc": "BARLIG",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144401",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1441,
        "psgcCode": 144402000,
        "citymunDesc": "BAUKO",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144402",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1442,
        "psgcCode": 144403000,
        "citymunDesc": "BESAO",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144403",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1443,
        "psgcCode": 144404000,
        "citymunDesc": "BONTOC (Capital)",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144404",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1444,
        "psgcCode": 144405000,
        "citymunDesc": "NATONIN",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144405",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1445,
        "psgcCode": 144406000,
        "citymunDesc": "PARACELIS",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144406",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1446,
        "psgcCode": 144407000,
        "citymunDesc": "SABANGAN",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144407",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1447,
        "psgcCode": 144408000,
        "citymunDesc": "SADANGA",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144408",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1448,
        "psgcCode": 144409000,
        "citymunDesc": "SAGADA",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144409",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1449,
        "psgcCode": 144410000,
        "citymunDesc": "TADIAN",
        "regDesc": "14",
        "provCode": 1444,
        "citymunCode": "144410",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1450,
        "psgcCode": 148101000,
        "citymunDesc": "CALANASAN (BAYAG)",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148101",
        "created_at": "2021-01-27T14:25:18.000000Z",
        "updated_at": "2021-01-27T14:25:18.000000Z"
    },
    {
        "id": 1451,
        "psgcCode": 148102000,
        "citymunDesc": "CONNER",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148102",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1452,
        "psgcCode": 148103000,
        "citymunDesc": "FLORA",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148103",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1453,
        "psgcCode": 148104000,
        "citymunDesc": "KABUGAO (Capital)",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148104",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1454,
        "psgcCode": 148105000,
        "citymunDesc": "LUNA",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148105",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1455,
        "psgcCode": 148106000,
        "citymunDesc": "PUDTOL",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148106",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1456,
        "psgcCode": 148107000,
        "citymunDesc": "SANTA MARCELA",
        "regDesc": "14",
        "provCode": 1481,
        "citymunCode": "148107",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1457,
        "psgcCode": 150702000,
        "citymunDesc": "CITY OF LAMITAN",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150702",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1458,
        "psgcCode": 150703000,
        "citymunDesc": "LANTAWAN",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150703",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1459,
        "psgcCode": 150704000,
        "citymunDesc": "MALUSO",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150704",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1460,
        "psgcCode": 150705000,
        "citymunDesc": "SUMISIP",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150705",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1461,
        "psgcCode": 150706000,
        "citymunDesc": "TIPO-TIPO",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150706",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1462,
        "psgcCode": 150707000,
        "citymunDesc": "TUBURAN",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150707",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1463,
        "psgcCode": 150708000,
        "citymunDesc": "AKBAR",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150708",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1464,
        "psgcCode": 150709000,
        "citymunDesc": "AL-BARKA",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150709",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1465,
        "psgcCode": 150710000,
        "citymunDesc": "HADJI MOHAMMAD AJUL",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150710",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1466,
        "psgcCode": 150711000,
        "citymunDesc": "UNGKAYA PUKAN",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150711",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1467,
        "psgcCode": 150712000,
        "citymunDesc": "HADJI MUHTAMAD",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150712",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1468,
        "psgcCode": 150713000,
        "citymunDesc": "TABUAN-LASA",
        "regDesc": "15",
        "provCode": 1507,
        "citymunCode": "150713",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1469,
        "psgcCode": 153601000,
        "citymunDesc": "BACOLOD-KALAWI (BACOLOD GRANDE)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153601",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1470,
        "psgcCode": 153602000,
        "citymunDesc": "BALABAGAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153602",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1471,
        "psgcCode": 153603000,
        "citymunDesc": "BALINDONG (WATU)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153603",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1472,
        "psgcCode": 153604000,
        "citymunDesc": "BAYANG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153604",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1473,
        "psgcCode": 153605000,
        "citymunDesc": "BINIDAYAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153605",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1474,
        "psgcCode": 153606000,
        "citymunDesc": "BUBONG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153606",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1475,
        "psgcCode": 153607000,
        "citymunDesc": "BUTIG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153607",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1476,
        "psgcCode": 153609000,
        "citymunDesc": "GANASSI",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153609",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1477,
        "psgcCode": 153610000,
        "citymunDesc": "KAPAI",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153610",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1478,
        "psgcCode": 153611000,
        "citymunDesc": "LUMBA-BAYABAO (MAGUING)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153611",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1479,
        "psgcCode": 153612000,
        "citymunDesc": "LUMBATAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153612",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1480,
        "psgcCode": 153613000,
        "citymunDesc": "MADALUM",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153613",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1481,
        "psgcCode": 153614000,
        "citymunDesc": "MADAMBA",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153614",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1482,
        "psgcCode": 153615000,
        "citymunDesc": "MALABANG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153615",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1483,
        "psgcCode": 153616000,
        "citymunDesc": "MARANTAO",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153616",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1484,
        "psgcCode": 153617000,
        "citymunDesc": "MARAWI CITY (Capital)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153617",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1485,
        "psgcCode": 153618000,
        "citymunDesc": "MASIU",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153618",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1486,
        "psgcCode": 153619000,
        "citymunDesc": "MULONDO",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153619",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1487,
        "psgcCode": 153620000,
        "citymunDesc": "PAGAYAWAN (TATARIKAN)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153620",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1488,
        "psgcCode": 153621000,
        "citymunDesc": "PIAGAPO",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153621",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1489,
        "psgcCode": 153622000,
        "citymunDesc": "POONA BAYABAO (GATA)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153622",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1490,
        "psgcCode": 153623000,
        "citymunDesc": "PUALAS",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153623",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1491,
        "psgcCode": 153624000,
        "citymunDesc": "DITSAAN-RAMAIN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153624",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1492,
        "psgcCode": 153625000,
        "citymunDesc": "SAGUIARAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153625",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1493,
        "psgcCode": 153626000,
        "citymunDesc": "TAMPARAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153626",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1494,
        "psgcCode": 153627000,
        "citymunDesc": "TARAKA",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153627",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1495,
        "psgcCode": 153628000,
        "citymunDesc": "TUBARAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153628",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1496,
        "psgcCode": 153629000,
        "citymunDesc": "TUGAYA",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153629",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1497,
        "psgcCode": 153630000,
        "citymunDesc": "WAO",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153630",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1498,
        "psgcCode": 153631000,
        "citymunDesc": "MAROGONG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153631",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1499,
        "psgcCode": 153632000,
        "citymunDesc": "CALANOGAS",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153632",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1500,
        "psgcCode": 153633000,
        "citymunDesc": "BUADIPOSO-BUNTONG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153633",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1501,
        "psgcCode": 153634000,
        "citymunDesc": "MAGUING",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153634",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1502,
        "psgcCode": 153635000,
        "citymunDesc": "PICONG (SULTAN GUMANDER)",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153635",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1503,
        "psgcCode": 153636000,
        "citymunDesc": "LUMBAYANAGUE",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153636",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1504,
        "psgcCode": 153637000,
        "citymunDesc": "BUMBARAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153637",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1505,
        "psgcCode": 153638000,
        "citymunDesc": "TAGOLOAN II",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153638",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1506,
        "psgcCode": 153639000,
        "citymunDesc": "KAPATAGAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153639",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1507,
        "psgcCode": 153640000,
        "citymunDesc": "SULTAN DUMALONDONG",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153640",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1508,
        "psgcCode": 153641000,
        "citymunDesc": "LUMBACA-UNAYAN",
        "regDesc": "15",
        "provCode": 1536,
        "citymunCode": "153641",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1509,
        "psgcCode": 153801000,
        "citymunDesc": "AMPATUAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153801",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1510,
        "psgcCode": 153802000,
        "citymunDesc": "BULDON",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153802",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1511,
        "psgcCode": 153803000,
        "citymunDesc": "BULUAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153803",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1512,
        "psgcCode": 153805000,
        "citymunDesc": "DATU PAGLAS",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153805",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1513,
        "psgcCode": 153806000,
        "citymunDesc": "DATU PIANG",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153806",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1514,
        "psgcCode": 153807000,
        "citymunDesc": "DATU ODIN SINSUAT (DINAIG)",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153807",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1515,
        "psgcCode": 153808000,
        "citymunDesc": "SHARIFF AGUAK (MAGANOY) (Capital)",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153808",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1516,
        "psgcCode": 153809000,
        "citymunDesc": "MATANOG",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153809",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1517,
        "psgcCode": 153810000,
        "citymunDesc": "PAGALUNGAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153810",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1518,
        "psgcCode": 153811000,
        "citymunDesc": "PARANG",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153811",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1519,
        "psgcCode": 153812000,
        "citymunDesc": "SULTAN KUDARAT (NULING)",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153812",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1520,
        "psgcCode": 153813000,
        "citymunDesc": "SULTAN SA BARONGIS (LAMBAYONG)",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153813",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1521,
        "psgcCode": 153814000,
        "citymunDesc": "KABUNTALAN (TUMBAO)",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153814",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1522,
        "psgcCode": 153815000,
        "citymunDesc": "UPI",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153815",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1523,
        "psgcCode": 153816000,
        "citymunDesc": "TALAYAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153816",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1524,
        "psgcCode": 153817000,
        "citymunDesc": "SOUTH UPI",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153817",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1525,
        "psgcCode": 153818000,
        "citymunDesc": "BARIRA",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153818",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1526,
        "psgcCode": 153819000,
        "citymunDesc": "GEN. S. K. PENDATUN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153819",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1527,
        "psgcCode": 153820000,
        "citymunDesc": "MAMASAPANO",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153820",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1528,
        "psgcCode": 153821000,
        "citymunDesc": "TALITAY",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153821",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1529,
        "psgcCode": 153822000,
        "citymunDesc": "PAGAGAWAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153822",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1530,
        "psgcCode": 153823000,
        "citymunDesc": "PAGLAT",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153823",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1531,
        "psgcCode": 153824000,
        "citymunDesc": "SULTAN MASTURA",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153824",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1532,
        "psgcCode": 153825000,
        "citymunDesc": "GUINDULUNGAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153825",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1533,
        "psgcCode": 153826000,
        "citymunDesc": "DATU SAUDI-AMPATUAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153826",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1534,
        "psgcCode": 153827000,
        "citymunDesc": "DATU UNSAY",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153827",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1535,
        "psgcCode": 153828000,
        "citymunDesc": "DATU ABDULLAH SANGKI",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153828",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1536,
        "psgcCode": 153829000,
        "citymunDesc": "RAJAH BUAYAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153829",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1537,
        "psgcCode": 153830000,
        "citymunDesc": "DATU BLAH T. SINSUAT",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153830",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1538,
        "psgcCode": 153831000,
        "citymunDesc": "DATU ANGGAL MIDTIMBANG",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153831",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1539,
        "psgcCode": 153832000,
        "citymunDesc": "MANGUDADATU",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153832",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1540,
        "psgcCode": 153833000,
        "citymunDesc": "PANDAG",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153833",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1541,
        "psgcCode": 153834000,
        "citymunDesc": "NORTHERN KABUNTALAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153834",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1542,
        "psgcCode": 153835000,
        "citymunDesc": "DATU HOFFER AMPATUAN",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153835",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1543,
        "psgcCode": 153836000,
        "citymunDesc": "DATU SALIBO",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153836",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1544,
        "psgcCode": 153837000,
        "citymunDesc": "SHARIFF SAYDONA MUSTAPHA",
        "regDesc": "15",
        "provCode": 1538,
        "citymunCode": "153837",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1545,
        "psgcCode": 156601000,
        "citymunDesc": "INDANAN",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156601",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1546,
        "psgcCode": 156602000,
        "citymunDesc": "JOLO (Capital)",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156602",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1547,
        "psgcCode": 156603000,
        "citymunDesc": "KALINGALAN CALUANG",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156603",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1548,
        "psgcCode": 156604000,
        "citymunDesc": "LUUK",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156604",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1549,
        "psgcCode": 156605000,
        "citymunDesc": "MAIMBUNG",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156605",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1550,
        "psgcCode": 156606000,
        "citymunDesc": "HADJI PANGLIMA TAHIL (MARUNGGAS)",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156606",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1551,
        "psgcCode": 156607000,
        "citymunDesc": "OLD PANAMAO",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156607",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1552,
        "psgcCode": 156608000,
        "citymunDesc": "PANGUTARAN",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156608",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1553,
        "psgcCode": 156609000,
        "citymunDesc": "PARANG",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156609",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1554,
        "psgcCode": 156610000,
        "citymunDesc": "PATA",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156610",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1555,
        "psgcCode": 156611000,
        "citymunDesc": "PATIKUL",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156611",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1556,
        "psgcCode": 156612000,
        "citymunDesc": "SIASI",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156612",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1557,
        "psgcCode": 156613000,
        "citymunDesc": "TALIPAO",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156613",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1558,
        "psgcCode": 156614000,
        "citymunDesc": "TAPUL",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156614",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1559,
        "psgcCode": 156615000,
        "citymunDesc": "TONGKIL",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156615",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1560,
        "psgcCode": 156616000,
        "citymunDesc": "PANGLIMA ESTINO (NEW PANAMAO)",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156616",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1561,
        "psgcCode": 156617000,
        "citymunDesc": "LUGUS",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156617",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1562,
        "psgcCode": 156618000,
        "citymunDesc": "PANDAMI",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156618",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1563,
        "psgcCode": 156619000,
        "citymunDesc": "OMAR",
        "regDesc": "15",
        "provCode": 1566,
        "citymunCode": "156619",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1564,
        "psgcCode": 157001000,
        "citymunDesc": "PANGLIMA SUGALA (BALIMBING)",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157001",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1565,
        "psgcCode": 157002000,
        "citymunDesc": "BONGAO (Capital)",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157002",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1566,
        "psgcCode": 157003000,
        "citymunDesc": "MAPUN (CAGAYAN DE TAWI-TAWI)",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157003",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1567,
        "psgcCode": 157004000,
        "citymunDesc": "SIMUNUL",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157004",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1568,
        "psgcCode": 157005000,
        "citymunDesc": "SITANGKAI",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157005",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1569,
        "psgcCode": 157006000,
        "citymunDesc": "SOUTH UBIAN",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157006",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1570,
        "psgcCode": 157007000,
        "citymunDesc": "TANDUBAS",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157007",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1571,
        "psgcCode": 157008000,
        "citymunDesc": "TURTLE ISLANDS",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157008",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1572,
        "psgcCode": 157009000,
        "citymunDesc": "LANGUYAN",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157009",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1573,
        "psgcCode": 157010000,
        "citymunDesc": "SAPA-SAPA",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157010",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1574,
        "psgcCode": 157011000,
        "citymunDesc": "SIBUTU",
        "regDesc": "15",
        "provCode": 1570,
        "citymunCode": "157011",
        "created_at": "2021-01-27T14:25:19.000000Z",
        "updated_at": "2021-01-27T14:25:19.000000Z"
    },
    {
        "id": 1575,
        "psgcCode": 160201000,
        "citymunDesc": "BUENAVISTA",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160201",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1576,
        "psgcCode": 160202000,
        "citymunDesc": "BUTUAN CITY (Capital)",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160202",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1577,
        "psgcCode": 160203000,
        "citymunDesc": "CITY OF CABADBARAN",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160203",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1578,
        "psgcCode": 160204000,
        "citymunDesc": "CARMEN",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160204",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1579,
        "psgcCode": 160205000,
        "citymunDesc": "JABONGA",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160205",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1580,
        "psgcCode": 160206000,
        "citymunDesc": "KITCHARAO",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160206",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1581,
        "psgcCode": 160207000,
        "citymunDesc": "LAS NIEVES",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160207",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1582,
        "psgcCode": 160208000,
        "citymunDesc": "MAGALLANES",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160208",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1583,
        "psgcCode": 160209000,
        "citymunDesc": "NASIPIT",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160209",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1584,
        "psgcCode": 160210000,
        "citymunDesc": "SANTIAGO",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160210",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1585,
        "psgcCode": 160211000,
        "citymunDesc": "TUBAY",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160211",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1586,
        "psgcCode": 160212000,
        "citymunDesc": "REMEDIOS T. ROMUALDEZ",
        "regDesc": "16",
        "provCode": 1602,
        "citymunCode": "160212",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1587,
        "psgcCode": 160301000,
        "citymunDesc": "CITY OF BAYUGAN",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160301",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1588,
        "psgcCode": 160302000,
        "citymunDesc": "BUNAWAN",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160302",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1589,
        "psgcCode": 160303000,
        "citymunDesc": "ESPERANZA",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160303",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1590,
        "psgcCode": 160304000,
        "citymunDesc": "LA PAZ",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160304",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1591,
        "psgcCode": 160305000,
        "citymunDesc": "LORETO",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160305",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1592,
        "psgcCode": 160306000,
        "citymunDesc": "PROSPERIDAD (Capital)",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160306",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1593,
        "psgcCode": 160307000,
        "citymunDesc": "ROSARIO",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160307",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1594,
        "psgcCode": 160308000,
        "citymunDesc": "SAN FRANCISCO",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160308",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1595,
        "psgcCode": 160309000,
        "citymunDesc": "SAN LUIS",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160309",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1596,
        "psgcCode": 160310000,
        "citymunDesc": "SANTA JOSEFA",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160310",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1597,
        "psgcCode": 160311000,
        "citymunDesc": "TALACOGON",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160311",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1598,
        "psgcCode": 160312000,
        "citymunDesc": "TRENTO",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160312",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1599,
        "psgcCode": 160313000,
        "citymunDesc": "VERUELA",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160313",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1600,
        "psgcCode": 160314000,
        "citymunDesc": "SIBAGAT",
        "regDesc": "16",
        "provCode": 1603,
        "citymunCode": "160314",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1601,
        "psgcCode": 166701000,
        "citymunDesc": "ALEGRIA",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166701",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1602,
        "psgcCode": 166702000,
        "citymunDesc": "BACUAG",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166702",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1603,
        "psgcCode": 166704000,
        "citymunDesc": "BURGOS",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166704",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1604,
        "psgcCode": 166706000,
        "citymunDesc": "CLAVER",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166706",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1605,
        "psgcCode": 166707000,
        "citymunDesc": "DAPA",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166707",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1606,
        "psgcCode": 166708000,
        "citymunDesc": "DEL CARMEN",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166708",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1607,
        "psgcCode": 166710000,
        "citymunDesc": "GENERAL LUNA",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166710",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1608,
        "psgcCode": 166711000,
        "citymunDesc": "GIGAQUIT",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166711",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1609,
        "psgcCode": 166714000,
        "citymunDesc": "MAINIT",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166714",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1610,
        "psgcCode": 166715000,
        "citymunDesc": "MALIMONO",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166715",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1611,
        "psgcCode": 166716000,
        "citymunDesc": "PILAR",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166716",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1612,
        "psgcCode": 166717000,
        "citymunDesc": "PLACER",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166717",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1613,
        "psgcCode": 166718000,
        "citymunDesc": "SAN BENITO",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166718",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1614,
        "psgcCode": 166719000,
        "citymunDesc": "SAN FRANCISCO (ANAO-AON)",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166719",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1615,
        "psgcCode": 166720000,
        "citymunDesc": "SAN ISIDRO",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166720",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1616,
        "psgcCode": 166721000,
        "citymunDesc": "SANTA MONICA (SAPAO)",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166721",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1617,
        "psgcCode": 166722000,
        "citymunDesc": "SISON",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166722",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1618,
        "psgcCode": 166723000,
        "citymunDesc": "SOCORRO",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166723",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1619,
        "psgcCode": 166724000,
        "citymunDesc": "SURIGAO CITY (Capital)",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166724",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1620,
        "psgcCode": 166725000,
        "citymunDesc": "TAGANA-AN",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166725",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1621,
        "psgcCode": 166727000,
        "citymunDesc": "TUBOD",
        "regDesc": "16",
        "provCode": 1667,
        "citymunCode": "166727",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1622,
        "psgcCode": 166801000,
        "citymunDesc": "BAROBO",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166801",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1623,
        "psgcCode": 166802000,
        "citymunDesc": "BAYABAS",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166802",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1624,
        "psgcCode": 166803000,
        "citymunDesc": "CITY OF BISLIG",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166803",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1625,
        "psgcCode": 166804000,
        "citymunDesc": "CAGWAIT",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166804",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1626,
        "psgcCode": 166805000,
        "citymunDesc": "CANTILAN",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166805",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1627,
        "psgcCode": 166806000,
        "citymunDesc": "CARMEN",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166806",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1628,
        "psgcCode": 166807000,
        "citymunDesc": "CARRASCAL",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166807",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1629,
        "psgcCode": 166808000,
        "citymunDesc": "CORTES",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166808",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1630,
        "psgcCode": 166809000,
        "citymunDesc": "HINATUAN",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166809",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1631,
        "psgcCode": 166810000,
        "citymunDesc": "LANUZA",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166810",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1632,
        "psgcCode": 166811000,
        "citymunDesc": "LIANGA",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166811",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1633,
        "psgcCode": 166812000,
        "citymunDesc": "LINGIG",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166812",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1634,
        "psgcCode": 166813000,
        "citymunDesc": "MADRID",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166813",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1635,
        "psgcCode": 166814000,
        "citymunDesc": "MARIHATAG",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166814",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1636,
        "psgcCode": 166815000,
        "citymunDesc": "SAN AGUSTIN",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166815",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1637,
        "psgcCode": 166816000,
        "citymunDesc": "SAN MIGUEL",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166816",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1638,
        "psgcCode": 166817000,
        "citymunDesc": "TAGBINA",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166817",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1639,
        "psgcCode": 166818000,
        "citymunDesc": "TAGO",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166818",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1640,
        "psgcCode": 166819000,
        "citymunDesc": "CITY OF TANDAG (Capital)",
        "regDesc": "16",
        "provCode": 1668,
        "citymunCode": "166819",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1641,
        "psgcCode": 168501000,
        "citymunDesc": "BASILISA (RIZAL)",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168501",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1642,
        "psgcCode": 168502000,
        "citymunDesc": "CAGDIANAO",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168502",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1643,
        "psgcCode": 168503000,
        "citymunDesc": "DINAGAT",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168503",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1644,
        "psgcCode": 168504000,
        "citymunDesc": "LIBJO (ALBOR)",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168504",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1645,
        "psgcCode": 168505000,
        "citymunDesc": "LORETO",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168505",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1646,
        "psgcCode": 168506000,
        "citymunDesc": "SAN JOSE (Capital)",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168506",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    },
    {
        "id": 1647,
        "psgcCode": 168507000,
        "citymunDesc": "TUBAJON",
        "regDesc": "16",
        "provCode": 1685,
        "citymunCode": "168507",
        "created_at": "2021-01-27T14:25:20.000000Z",
        "updated_at": "2021-01-27T14:25:20.000000Z"
    }
]
```
<div id="execution-results-GETapi-settings-cities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-cities"></code></pre>
</div>
<div id="execution-error-GETapi-settings-cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-cities"></code></pre>
</div>
<form id="form-GETapi-settings-cities" data-method="GET" data-path="api/settings/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-cities" onclick="tryItOut('GETapi-settings-cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-cities" onclick="cancelTryOut('GETapi-settings-cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-cities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/cities</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/settings/cities/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/settings/cities/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-settings-cities--city-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings-cities--city-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-cities--city-"></code></pre>
</div>
<div id="execution-error-GETapi-settings-cities--city-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-cities--city-"></code></pre>
</div>
<form id="form-GETapi-settings-cities--city-" data-method="GET" data-path="api/settings/cities/{city}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-cities--city-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings-cities--city-" onclick="tryItOut('GETapi-settings-cities--city-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings-cities--city-" onclick="cancelTryOut('GETapi-settings-cities--city-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings-cities--city-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/cities/{city}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="GETapi-settings-cities--city-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://home-university-api.test/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://home-university-api.test/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v8.25.0 (PHP v7.4.9)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



