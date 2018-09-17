@extends('alauddin020')
@section('title') {{$details->title}} @endsection
@section('content')
	<section class="content blog">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_single">
							<article class="post">
								<figure class="post_img">
									<a href="#">
										<img src="{{ asset('public/'.$details->photo) }}" 
										alt="{{$details->title}}" style="height: 320px;width: 630px" >
									</a>
								</figure>
								<div class="post_date">
									<span class="day">{{ date('d', strtotime($details->created_at))}}</span>
									<span class="month">{{ date('M', strtotime($details->created_at))}}</span>
								</div>
								<div class="post_content">
									<div class="post_meta">
										@if ($details->language==0)
                                            <h2>{{$details->title}}</h2>
                                        @else
                                            <h2 id="bangla">{{ $details->title }}</h2>
                                        @endif
										<div class="metaInfo">
											<span><i class="fa fa-calendar"></i> <a href="#">
												{{ date('d F Y', strtotime($details->created_at))}}</a> </span>
											<span><i class="fa fa-user"></i> By <a href="#">{{$details->name}}</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Emin</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>
									</div>
									
									<blockquote class="default">
										@if ($details->language==0)
                                            {{$details->description}}
                                        @else
                                            <p id="bangla">{{ $details->description }}</p>
                                        @endif
									</blockquote>
								</div>
								<ul class="shares">
									<li class="shareslabel"><h3>Share This Story</h3></li>
									<li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>
									<li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>
									<li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>
									<li><a class="pinterest" href="#" data-placement="bottom" data-toggle="tooltip" title="Pinterest"></a></li>
									<li><a class="yahoo" href="#" data-placement="bottom" data-toggle="tooltip" title="Yahoo"></a></li>
									<li><a class="linkedin" href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"></a></li>
								</ul>
							</article>
							<div class="about_author">
								<div class="author_desc" style="padding: 11px 0;background: rgba(255,255,255,.15);">
									<img src="{{ asset('public/'.$details->image) }}" alt="about author" style="height: 50px;width: 50px">
									<ul class="author_social">
										<li><a class="fb" target="_blank" href="http://www.facebook.com/{{$details->username}}" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twtr" target="_blank" href="http://www.twitter.com/{{$details->username}}" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a class="skype" href="{{$details->username}}" data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="author_bio">
									<h3 class="author_name"><a href="#">{{$details->name}}</a></h3>
									<h5>CEO at <a href="#">IT</a></h5>
									<p class="author_det">
										Software Engineer
									</p>
								</div>
							</div>
						</div>

						<!--News Comments-->
                        <div class="news_comments">
                            <div class="dividerHeading">
                                <h4><span>Comments (6)</span></h4>
                            </div>
                            <div id="comment">
                                <ul id="comment-list">
                                    <li class="comment">
                                        <div class="avatar"><img alt="" src="{{ asset('public/images/blog/avatar_1.png') }}" class="avatar"></div>
                                        <div class="comment-container">
                                            <h4 class="comment-author"><<span><a href="#">John Smith</a>
                                            </span></h4>
                                            <div class="comment-meta"><a href="#" class="comment-date link-style1">February 22, 2014</a><a class="comment-reply-link link-style3" href="#respond">Reply &raquo;</a></div>
                                            <div class="comment-body">
                                                <p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /#comments -->
                            <div class="dividerHeading">
                                <h4><span>Leave a comment</span></h4>
                                </div>

                            <div class="comment_form">
                               <div class="row">
                                   <div class="col-sm-4">
                                       <input class="col-lg-4 col-md-4 form-control" name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" placeholder="Name" >
                                   </div>
                                   <div class="col-sm-4">
                                       <input class="col-lg-4 col-md-4 form-control" name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" placeholder="E-mail">
                                   </div>
                                   <div class="col-sm-4">
                                       <input class="col-lg-4 col-md-4 form-control" name="url" type="text" id="url" size="30" onfocus="if(this.value == 'Url') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Url'; }" value="Url" placeholder="Url">
                                   </div>
                               </div>
                            </div>
                            <div class="comment-box row">
                                <div class="col-sm-12">
                                    <p>
                                        <textarea name="comments" class="form-control" rows="6" cols="40" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" placeholder="Message">Message</textarea>
                                    </p>
                                </div>
                            </div>

                            <a class="btn btn-lg btn-default" href="#">Post Comment</a>
                        </div>
				    </div>

					<!--Sidebar Widget-->
					<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
						<div class="sidebar">
							<div class="widget widget_search">
								<div class="site-search-area">
									<form method="get" id="site-searchform" action="#">
										<div>
											<input class="input-text" name="s" id="s" placeholder="Enter Search keywords..." type="text" />
											<input id="searchsubmit" value="Search" type="submit" />
										</div>
									</form>
								</div><!-- end site search -->
							</div>
							
							<div class="widget widget_categories">
								<div class="widget_title">
									<h4><span>Categories</span></h4>
									</div>
								<ul class="arrows_list list_style">
									<li><a href="#"> Grapic Design (10)</a></li>
									<li><a href="#"> Web Design & Development (25)</a></li>
									<li><a href="#"> Photography (29)</a></li>
									<li><a href="#"> Custom Illustrations (19)</a></li>
									<li><a href="#"> Wordpress Themes(38)</a></li>
									<li><a href="#"> Videography (33)</a></li>
								</ul>
							</div>
							
							<div class="widget widget_about">
								<div class="widget_title">
									<h4><span>Basic Text Widget</span></h4>
									</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

                            <div class="velocity-tab sidebar-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">Popular</a></li>
                                    <li class=""><a href="#Recent" data-toggle="tab">Recent</a></li>
                                    <li class="last-tab"><a href="#Comment" data-toggle="tab"><i class="fa fa-comments-o"></i></a></li>
                                </ul>

                                <div  class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_1.png" alt="" /></a></span>
                                                <a href="#">Publishing packag esanse web page editos</a>
                                                <i>October 09, 2014</i>
                                            </li>
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_2.png" alt="" /></a></span>
                                                <a href="#">Sublishing packag esanse web page editos</a>
                                                <i>October 08, 2014</i>
                                            </li>
                                            <li class="last-tab">
                                                <span><a href="#"><img src="images/content/recent_3.png" alt="" /></a></span>
                                                <a href="#">Mublishing packag esanse web page editos</a>
                                                <i>October 07, 2014</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="Recent">
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_4.png" alt="" /></a></span>
                                                <a href="#">Various versions has evolved over the years</a>
                                                <i>October 18, 2014</i>
                                            </li>
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_5.png" alt="" /></a></span>
                                                <a href="#">Rarious versions has evolve over the years</a>
                                                <i>October 17, 2014</i>
                                            </li>
                                            <li class="last-tab">
                                                <span><a href="#"><img src="images/content/recent_6.png" alt="" /></a></span>
                                                <a href="#">Marious versions has evolven over the years</a>
                                                <i>October 16, 2014</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade">
                                        <ul class="comments">
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_3.png" alt="#"></a>
                                                <p><strong><a href="#">Prambose</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_1.png" alt="#"></a>
                                                <p><strong><a href="#">Makaroni</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_2.png" alt="#"></a>
                                                <p><strong><a href="#">Prambanan</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

							<div class="widget widget_tags">
								<div class="widget_title">
									<h4><span>Tags Widget</span></h4>
								</div>
								<ul class="tags">
									<li><a href="#"><b>business</b></a></li>
									<li><a href="#">corporate</a></li>
									<li><a href="#">css3</a></li>
									<li><a href="#"><b>html5</b></a></li>
									<li><a href="#">javascript</a></li>
									<li><a href="#"><b>jquery</b></a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#"><b>mysql</b></a></li>
									<li><a href="#">portfolio</a></li>
									<li><a href="#">premium</a></li>
									<li><a href="#">responsive</a></li>
									<li><a href="#"><b>theme</b></a></li>
									<li><a href="#"><b>Best jQuery</b></a></li>
								</ul>
							</div>
							
							<div class="widget widget_archives">
								<div class="widget_title">
									<h4><span>Archives</span></h4>
								</div>
								<ul class="archives_list list_style">
									<li><a href="#"> November 2014</a></li>
									<li><a href="#"> October 2014</a></li>
									<li><a href="#"> September 2014</a></li>
									<li><a href="#"> August 2014</a></li>
									<li><a href="#"> July 2014</a></li>
									<li><a href="#"> June 2014</a></li>
									<li><a href="#"> May 2014</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
@endsection