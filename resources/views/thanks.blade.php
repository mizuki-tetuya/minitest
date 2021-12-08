<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>お問い合わせありがとうございます。</p>
  <table>
    @foreach($items as $item)
    <tr>
      <td>
        {{$item->content}}
      </td>
      <td>
        {{$item->mail}}
      </td>
    </tr>
    @endforeach
  </table>
  <div>
    <a href="/">トップへ戻る</a>
  </div>
</body>
</html>