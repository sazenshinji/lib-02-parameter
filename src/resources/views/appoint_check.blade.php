<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>appoint_check</title>
</head>

<body>

  <h1>予約確認</h1>

  <p>患者番号：{{ $person_no }}</p>
  <p>診療日：{{ $work_date ?? '未指定' }}</p>

  @if(!$work_date)
  <p>URLに ?work_date=YYYY-MM-DD を指定してください。</p>

  @elseif(!$appointment)
  <p>この日の予約はありません。</p>

  @else
  <p>あなたの診療開始時間は</p>
  <h2>{{ $appointment->care_start->format('H:i') }}</h2>
  @endif


</body>

</html>