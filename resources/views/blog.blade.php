@include('layouts.header')



<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s">Our Blog</h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.9s">Lastest News and Articles</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Blog section
================================================== -->
<section id="blog">
   <div class="container">
      <div class="row">
       @foreach ($posts as $post)
            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="2.2s">
               <div class="blog-thumb">
                  <a href=" {{route('blog.post', $post->slug)}} "><img src=" {{secure_asset('storage/'.$post->image)}} " class="img-responsive" alt="Blog"></a>
                  <a href=""><h1 style="font-size: 13px"> {{$post->title}} </h1></a>
                     <div class="post-format"  style="font-size: 11px">
                     <span>By <a href="{{route('blog.post', $post->slug)}}">Admin</a></span>
                     <span><i class="fa fa-date"></i> {{$post->created_at->diffForHumans()}} </span>
                  </div>
                  <div class="">
                     {!! Str::limit($post->body, 100) !!}
                  </div>
                  <a href=" {{route('blog.post', $post->slug)}}" class="btn btn-default">Read More</a>
               </div>
         </div>
       @endforeach

      </div>
   </div>
</section>


@include('layouts.footer')