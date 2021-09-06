@include('layouts.header')

<!-- Header section
================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">Stargazing Graphics</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s"></h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">
                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                              @foreach ($projects as $project)
                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src=" {{secure_asset('storage/'.$project->image)}} " class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="{{ route('art.show', $project->slug) }}"><i class="fa fa-link"></i></a>
                                                <h2> {{$project->title}} </h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>
                              @endforeach
                            </div>
                        </div>

               </div>

         </div>

      </div>
   </div>
</section>

@include('layouts.footer')