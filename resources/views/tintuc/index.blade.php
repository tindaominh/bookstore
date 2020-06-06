@extends('layouts.main')


@section('content')
@include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
                
                <li><strong>Tin tức</strong><li>
                
            </ul>
        </div>
    </div>

    
    <section class="tzblog-wrap">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-md-push-3">
                  
                    <div class="row gird-margin">
                        @foreach($tintuc as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <article class="blog-gird-item blog-item blog-gird-item3">
                                <div class="pageblog-thumb" style="height: 200px;" >
                                    
                                    <a href="{{route('tintuc.chitiet',['id' => $item->id])}}"><img alt="{{$item->tieu_de_tin}}" src="{{asset('public/images/hinh_tin_tuc/'.$item->hinh_dai_dien)}}" /></a>
                                    
                                </div>
                                <h2><a href="{{route('tintuc.chitiet',['id' => $item->id])}}">{{$item->tieu_de_tin}}</a></h2>
                                <span class="tzblog-meta">
                                    <em><i class="fa fa-user"></i>Vũ Yến</em>
                                </span>
                                <div class="action-button-hiden">
                                    <p>  {!! $item->noi_dung_tom_tat !!} </p>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <div class="pagination-centered" style="text-align: center;">
                                {{$tintuc->links()}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-md-pull-9 tzshop-aside">
                    
                    <aside class="widget_bestsellers box_collection_pr block">
                        <h4 class="title_block"> 
                            Tin mới
                        </h4>
                        <ul>
                            @foreach($tintuc as $item)
                            <li>
                                <div class="as_bestsellers_thumb">   
                                    <a href="{{route('tintuc.chitiet',['id' => $item->id])}}"><img alt="{{$item->tieu_de_tin}}" src="{{asset('public/images/hinh_tin_tuc/'.$item->hinh_dai_dien)}}" width="120" height="85"/></a>
                                </div>
                                <div class="as_bestsellers_content">
                                    <h3><a title="" href="{{route('tintuc.chitiet',['id' => $item->id])}}">{{$item->tieu_de_tin}}</a></h3>
                                    <div class="post-date">{{($item->ngay_dang)==null?'07-05-2020':$item->ngay_dang}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </aside>

                </div>
            </div>
        </div>
    </section>
</div>


@endsection