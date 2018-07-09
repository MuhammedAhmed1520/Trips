<div id="slideshow">
    <div class="fullwidthbanner-container">
        <div class="revolution-slider" style="height: 0; overflow: hidden;">
            <ul>    <!-- SLIDE  -->
                @foreach($sliders as $slider)
                <!-- Slide1 -->
                <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="{{Request::root()}}/public/uploads/slider/{{$slider->photo}}">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>