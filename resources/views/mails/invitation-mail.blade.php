<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Invitation</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            height: 300px;
            width: 320px;
            margin: 50px auto;
            }
            .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .container {
            padding: 2px 16px;
            background-color: lightcyan;
            text-align: center;
            }
            .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 10px;
            }
img {
  border-radius: 5px 5px 0 0;
}
.button {
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button2:hover {
  background-color: #008CBA; 
  color: white; 
  border: 2px solid black;
}
    </style>
</head>
<body>
    <h1 style="margin: 100px;text-align: center;color: black;">Hi we are from https://biddhapith.com/ Your Friend @if($invitation->user_id ) {{$invitation->user->name }} @endif have invited you to participate this exam hope you will enjoy it !!</h1>
    <div class="card">
        @if($invitation->exam->exam_thumbnail)
        <img src="{{asset('assets/img/examthumbnail')}}/{{$invitation->exam->exam_thumbnail}}" alt="exam_thumbnail" style="width:100%;height: 70%;">
        @else
        <img src="{{asset('assets/img/std.jpg')}}" alt="exam_thumbnail" style="width:100%;height:70%;">
        @endif
        <div class="container">
          <b>Exam Name : </b> <p>{{$invitation->exam->exam_title}}</p>
          <a href="{{$invitation->invitation_link}}"><button class="button button2">Participate Now</button></a>
        </div>
      </div>
</body>
</html>