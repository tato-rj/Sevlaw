<div>
	<div data-toggle="modal" data-target="#video1-modal" class="video-container cursor-pointer d-flex flex-center shadow w-100 mb-4 bg-align-center" style="background-image: url({{asset('images/backgrounds/video2.jpg')}}); height: 180px;">
		<div class="play-icon">@fa(['icon' => 'play-circle', 'size' => '4x', 'mr' => 0, 'color' => 'primary'])</div>
	</div>

	<div data-toggle="modal" data-target="#video2-modal" class="video-container cursor-pointer d-flex flex-center shadow w-100 bg-align-center" style="background-image: url({{asset('images/backgrounds/video1.jpg')}}); height: 180px;">
		<div class="play-icon">@fa(['icon' => 'play-circle', 'size' => '4x', 'mr' => 0, 'color' => 'white'])</div>
	</div>
</div>

<div class="modal fade" id="video1-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 rounded-0 bg-transparent">
      <div class="modal-body p-0">
		<video class="w-100 h-100" controls>
		  <source src="{{asset('videos/video 1.mp4')}}" type="video/mp4">
		</video>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="video2-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 rounded-0 bg-transparent">
      <div class="modal-body p-0">
		<video class="w-100 h-100" controls>
		  <source src="{{asset('videos/video 2.mp4')}}" type="video/mp4">
		</video>
      </div>
    </div>
  </div>
</div>