<head>
      <meta charset="UTF-8">
      <title> Review Form</title>
      <link rel="stylesheet" href="css/reviewStyle.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="image-box">
        <img src="images/r.jpg" alt="">
        </div>
      <form action="{{ url('/review/input') }}">
        <div class="topic">Give Review</div>
        <div class="input-box">
          <input type="text" name="name" value="{{auth()->user()->name}}" required>
          <label>Enter your name</label>
        </div>
        {{-- <div class="input-box">
          <select name="konten" id="">
            @foreach($konten as $k)
            <option value="{{$k->id}}">{{$k->nama}}</option>
            @endforeach
          </select>
          <label>Select Konten</label>
        </div> --}}
        <div class="message-box">
          <textarea rows="1" name="review" class="auto_height" oninput="auto_height(this)"></textarea>
          <label>Enter your review</label>
        </div>
        <div class="input-box">
          <input type="submit" value="Send Message">
        </div>
      </form>
    </div>
    </div>
  </body>