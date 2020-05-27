@extends('layouts.main')


@section('content')
@include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
                
                <li><a href="sach-ban-chay">Tin tức</a></li>
                
                <li><strong>{{$tintuc->tieu_de_tin}}</strong><li>
                
            </ul>
        </div>
    </div>

    <section class="tzblog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-md-push-3">
                    
                    <div class="">
                        {!! $tintuc->noi_dung_chi_tiet !!}
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-md-pull-9 tzshop-aside">
                    
                    <aside class="widget_bestsellers box_collection_pr block">
                        <h4 class="title_block"> 
                            Tin mới
                        </h4>
                        <ul>
                            @foreach($tintucmoi as $item)
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