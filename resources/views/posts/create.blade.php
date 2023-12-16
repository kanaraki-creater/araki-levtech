<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="タイトル">
          </div>
          <div>
              <h2 class="body">
                  <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。"></textarea>
              </h2>
          </div>
          <input type="submit" value="保存">
       </form>
    </body>
</html>