<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('/img/granja.jpg');; background-size: cover; background-position: center;"> 
    <div>
        {{ $logo }}
    </div> 

    <div 
    class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>