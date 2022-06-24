<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Json table data</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <div class="container mt-5">
  <div class="row">
   <div class="col-3"></div>
   <div class="col-6 d-flex justify-content-center flex-column">
    <h1 class="text-center my-5">Item List!</h1>
    @foreach($collection as $item)
    <ul class="d-flex justify-content-center flex-column">
     <li>{{ $item->label }}</li>
     @if(!empty($item->children))
     @foreach ($item->children as $child)
     <ul>
      <li>{{ $child->label }}</li>
      @if(!empty($child->children))
      @foreach($child->children as $three)
      <ul>
       <li>{{ $three->label }}</li>
       @if (!empty($three->children))
       @foreach($three->children as $four)
       <ul>
        <li>{{ $four->label }}</li>
        @if(!empty($four->children))
        @foreach($four->five as $five)
        <ul>
         <li>{{ $five->label }}</li>
         @if(!empty($five->children))
         @foreach($five->six as $six)
         <li>{{ $six->label }}</li>
         @endforeach
         @endif
        </ul>
        @endforeach
        @endif
       </ul>
       @endforeach
       @endif
      </ul>
      @endforeach
      @endif
     </ul>
     @endforeach
     @endif
    </ul>
    @endforeach

   </div>
   <div class="col-3"></div>
  </div>
 </div>
 <!-- <div class="container mt-5">
  <div class="row">
   <h1 class="text-center">Item List!</h1>
   <ul>
    @foreach ($collection as $item)
    <li></li>
    @endforeach
   </ul>
  </div>
 </div> -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>