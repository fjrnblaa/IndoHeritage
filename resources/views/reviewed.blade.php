<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Testimonials Section | CodingNepal</title>
    <link rel="stylesheet" href="css/reviewedStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    @foreach ($review as $review)
        <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>{{$review->review}}</p>
        <div class="content">
            <div class="info">
            <div class="name">{{$review->name}}</div>
            </div>
        </div>
        </div>
    @endforeach
  </div>
</body>
</html>