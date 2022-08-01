<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Invitation</title>
    <style>
        .button {
  background-color: aqua;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
</head>
<body style="text-align:center">
    <p>Hi we are from biddahpith.com Your Friend @if($invitation->user_id ) {{$invitation->user->name }} @endif have invited you to participate this exam hope you will enjoy it !!</p>
    <table style="width: 600px;">
        <thead>
            <tr>
                
                <th>Exam Name</th>
                <th>Exam Thumbnail</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td>{{$invitation->exam->exam_title}}</td>
                    <td><img src="{{asset('assets/img/examthumbnail')}}/{{$invitation->exam->exam_thumbnail}}" width="100" /></td>
                </tr>
        </tbody>
    </table>
    <a href="{{$invitation->invitation_link}}"><button class="button">Participate Now</button></a>
</body>
</html>