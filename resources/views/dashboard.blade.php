<x-app-layout>

    <x-slot name="header">
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
        </header>
    </x-slot>
    <body>
    <div class="py-10" style="background-color:#ECF8F8;">
    <a href="{{ route('traveler') }}" :active="request()->routeIs('traveler')" class="btn">Add Traveller</a>
    <a href="{{ route('monitoring') }}" :active="request()->routeIs('monitoring')" class="btn2">Monitor Traveller</a>
    <a href="{{ route('googlePieChart') }}" :active="request()->routeIs('index')" class="btn2">View Chart</a>
    </div>
    </body>
    <div class="container">
    <div class="py-20" style="background-image: url(uploads/logo/1.png); background-size: cover; background-repeat:no-repeat;">
    <img src="/uploads/logo/2.png">
    <div class="middle">
    <div class="text"></div>
  </div>
    </div>  

    
    
</x-app-layout>

<style>
img{
    width:1000px;
    padding-left:20px;
    alignment:center;
}
body{
    text-align:center;
    justify-content:center;
    margin:0;
    padding:0;
}
.btn{
    font-family: "Roboto", sans-serif;
    margin-left:30px;
    font-size:20px;
    background:blue;
    width:200px;
    font-weight:bold;
    padding:30px;
    text-decoration:none;
    text-transform:uppercase;
    color:#fff;
    border-radius:5px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property:box-shadow, transform; 
    transition-property:box-shadow, transform; 
    
}
.btn:hover, .btn:focus, .btn:active{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform:scale(1:1);
    }
    
    .btn2{
        float:center;
    font-family: "Roboto", sans-serif;
    margin-left:25px;
    font-size:20px;
    background:blue;
    font-weight:bold;
    padding:30px;
    width:160px;
    text-decoration:none;
    text-transform:uppercase;
    color:#fff;
    border-radius:5px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property:box-shadow, transform; 
    transition-property:box-shadow, transform;
}
.btn2:hover, .btn2:focus, .btn2:active{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform:scale(1:1);
    }
    .container {
  position: relative;
  max-width: 100%;
    }
    .middle {
        position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-image: url("/uploads/logo/3.png");
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  color: white; 
  font-size: 16px;
  padding: 16px 32px;
}

</style>