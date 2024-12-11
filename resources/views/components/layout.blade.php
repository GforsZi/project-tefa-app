<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$tittle}}</title>
    <link
      rel="stylesheet"
      href="{{asset('resource/bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}"
      type="text/css"
      media="all"
    />
  </head>
  <body>
    {{$slot}}
  </body>
  <script
      src="{{asset('resource/bootstrap/bootstrap-5.3.3-dist/js/bootstrap.min.js')}}"
      type="text/javascript"
      charset="utf-8"
  ></script>
</html>