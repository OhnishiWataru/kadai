@extends('layouts.front')

@section('content')
<body>
  <center>
    <h2 class="2">Myプロフィール</h2>
    <table border="1" width="200" height="200">
      <div class="text col-md-6">
        <td class="date">
          @foreach($profiles as $profile)
        </td>
      </div>
        {{ $profile->updated_at->format('Y年m月d日') }}
      <tr class="center">
        <td>氏名</td>
        <td>{{ $profile->name }}</td>
      </tr>
      <tr class="center">
        <td>性別</td>
        <td>{{ $profile->gender }}</td>
      </tr>
      <tr class="center">
        <td>趣味</td>
        <td>{{ $profile->hobby }}</td>
      </tr>
      <tr class="center">
        <td>自己紹介</td>
        <td>{{ $profile->introduction }}</td>
      </tr>
      @endforeach
    </table>
  </center>
</body>
@endsection
