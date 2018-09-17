@extends('alauddin020')
@section('title') Welcome @endsection
@section('content')
<section class="content blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
             @if($total>0)
                <div class="blog_medium" id="basic-datatable">
                    @foreach ($allpost as $fa)
                    <article class="post">
                        <div class="post_date">
                            <span class="day">{{ date('d', strtotime($fa->created_at))}}</span>
                            <span class="month">{{ date('M', strtotime($fa->created_at))}}</span>
                        </div>
                        <figure class="post_img">
                            <a href="#">
                                <img src="{{ asset('public/'.$fa->photo) }}" alt="blog post" height="212" width="212">
                            </a>
                        </figure>
                        <div class="post_content">
                            <div class="post_meta">
                                @if ($fa->language==0)
                                <a href="{{ route('details.post',['title' => $fa->title])}}"><h2>{{$fa->title}}</h2></a>
                                @else
                                <a href="{{ route('details.post',['title' => $fa->title])}}"><h2 id="bangla">{{ $fa->title }}</h2></a>
                                @endif
                                
                                
                                <div class="metaInfo">
                                    <span><i class="fa fa-user"></i> By <a href="#">
                                        {{$fa->name}}
                                    </a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </div>
                            @if ($fa->language==0)
                            <p>{{ $fa->description }}</p>
                            @else
                            <p id="bangla">{{ $fa->description }}</p>
                            @endif
                            <a class="btn btn-small btn-default" href="{{ route('details.post',['title' => $fa->title])}}">Read More</a>
                            
                        </div>
                    </article>
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{$allpost->links()}}
                </div>
                    @else
                    <div class="post_content">
                        <div class="post_meta">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2 id="bangla">কোন ও পোস্ট জমা নেই</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
                        <div class="widget widget_archives">
                            <div class="widget_title">
                                <h4><span>Archives</span></h4>
                            </div>
                            <ul class="archives_list list_style">
                                @foreach ($allpost as $fa)
                                <li><a href="#">{{ date('F Y', strtotime($fa->created_at))}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
                </div><!--/.row-->
                </div> <!--/.container-->
            </section>
            @endsection