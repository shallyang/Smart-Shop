@extends('homes.muban')
@section('title','Smart-正品低价、品质保障、配送及时、轻松购物！')
@section('content')
<div class="banner">
	<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
		<!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active"><!-- First-Slide -->
                <img src="/images/lunbo4.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <a href="/goods/index/50"><h3 data-animation="animated flipInX">时尚前沿春季新款</h3></a>
                    <h4 data-animation="animated flipInX">NEW FASHION</h4>
                </div>
            </div>  
            <div class="item"> <!-- Second-Slide -->
                <img src="/images/lunbo2.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <a href="/goods/index/37"><h3 data-animation="animated fadeInDown">春潮焕新季，时尚轻奢范</h3></a>
                    <h4 data-animation="animated fadeInUp">没有丑男人只有懒男人</h4>
                </div>
            </div>

            <div class="item"><!-- Third-Slide -->
                <img src="/images/lunbo3.jpg" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <a href="/goods/index/46"><h3 data-animation="animated fadeInLeft">打造不一样的女王范</h3></a>
                    <h4 data-animation="animated flipInX">美丽是你自己的</h4>
                </div>
            </div>
        </div> 
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
			<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> 
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
    </div>
	<script src="js/custom.js"></script>
</div>
@endsection