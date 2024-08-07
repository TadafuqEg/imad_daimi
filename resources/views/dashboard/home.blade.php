@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard home')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
            <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
            </div>
            
            </div>
            <div style="color:#fff;text-align:center;">
                <canvas id="canvas" width="900" height="800" style="color:#fff;text-align:center;"></canvas>
              </div>
        
        </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
      
  @endsection
  @push('scripts')
<script>

    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");

    ctx.font = "75px sans-serif"; // Set the font family to sans-serif
ctx.strokeStyle = "white"; // Set the stroke color to white
ctx.lineWidth = 3; // Set the stroke width if needed
ctx.strokeText("Welcome To Dashboard", 50, 90);
  
</script>
@endpush
