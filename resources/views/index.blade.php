<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card">
    @if(count($errors)>0)
    <ul>
      @foreach($errors as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="/natsuki" method="post">
      @csrf
      <div class="name-card">
        <div class="name">氏名</div>
        <input type="text" class="content">
      </div>
      <div class="mail-card">
        <div class="address">メールアドレス</div>
        <input type="text" class="mail">
      </div>
      <button>送信する</button>
    </form>
  </div>
</body>
</html>