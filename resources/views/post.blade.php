@include('layouts.header')

<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s"> {{$post->title}} </h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.9s">Vestibulum at aliquam lorem</h3>
          </div>
			</div>

		</div>
	</div>		
</section>
<!-- Single Post section
================================================== -->
<section id="single-post">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="2.3s">
         	  <div class="blog-thumb">
         		   
         		   <h1>{{$post->title}}</h1>
         			    <div class="post-format">
						        <span>By <a href="#">Elon Musk</a></span>
						        <span><i class="fa fa-date"></i> {{$post->created_at->diffForHumans()}}</span>
                 </div>
                 {!! $post->body !!}
               <img src=" {{asset('storage/'.$post->image)}} " class="img-responsive post-image" alt="Blog">
               
               

               <div class="blog-comment">
                 <h3>Comments</h3>
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src=" {{asset('images/comment1.jpg')}} " class="img-responsive" alt="blog">
                       </div>
                      <div class="media-body">
                        <h4 class="media-heading">Jenne leon</h4>
                        <h5>5 June 2016, Sunday</h5>
                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                      </div>
                    </div>
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src="{{asset('images/comment2.jpg')}}" class="img-responsive" alt="blog">
                       </div>
                      <div class="media-body">
                        <h4 class="media-heading">Jenne leon</h4>
                        <h5>4 June 2016, Saturday</h5>
                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                      </div>
                    </div>
               </div>

               <div class="blog-comment-form">
                  <h3>Leave a comment</h3>
                    <form action="#" method="post">
                      <input type="text" class="form-control" placeholder="Name" name="name" required>
                      <input type="email" class="form-control" placeholder="Email" name="email" required>
                      <textarea class="form-control" placeholder="Comment" rows="5" name"Your Comments" required id="comment"></textarea>
                      <div class="contact-submit">
                      	<input name="submit" type="submit" class="form-control" id="submit" value="Submit a comment">
                      </div>
                   </form>
               </div>
         	  </div>
		    </div>

      </div>
   </div>
</section>

@include('layouts.footer')