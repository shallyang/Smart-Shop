@extends('homes.muban')
@section('title','常见问题')
@section('content')
<div class="help">
	<div class="container"> 
		<h3 class="w3ls-title w3ls-title1">常见问题解答</h3>  
		<div class="faq-w3agile"> 
			<h5>10条最常见问题</h5>
			<ul class="faq">
				<li class="item1"><a href="#" title="click here" class="">下单后可以修改订单吗？</a>
					<ul style="display: none;">
						<li class="subitem1"><p> 由Smart发货的自营（非自提）订单，在订单打印之前可以修改，打开“我的订单”，进入您想修改的“订单详情”页面，点击“修改订单”即可，若没有修改订单按钮，则表示订单无法修改。当然,您也可以联系我们的客服修改</p></li>										
					</ul>
				</li>
				<li class="item2"><a href="#" title="click here" class="">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices ?</a>
					<ul style="display: none;">
						<li class="subitem1"><p> 1. 订单提交成功后，您可取消Smart自营商品订单及部分第三方卖家出售的商品订单，订单取消申请一旦提交成功，将无法进行任何修改或恢复，请您谨慎操作。<br />2. 提交订单取消申请后，系统会确认包裹位置，拦截成功之后会为您办理退款。若订单取消失败，订单会继续为您配送，您可根据需要签收或拒收。<br />3.  订单若包含赠品、加价购、满减、东券、套装等促销活动商品，若主商品订单取消，关联促销商品也将取消。<br />4.  已收货的订单，请申请返修/退换货。</p></li>										
					</ul>
				</li>
				<li class="item3"><a href="#" title="click here" class="">Smart承诺</a>
					<ul style="display: none;">
						<li class="subitem1"><p>1. 我们秉承质优价低、放心满意的销售理念为您服务。我们所出售的商品均为正品行货，与您亲临商场选购的商品一样享受相同的质量保证；含有质量保证书的商品按照保证书的承诺执行，其它商品按国家有关规定执行。 <br />2. 我们承诺在运输“保价费”上永久免费，在配送环节上承担保险费用，运输过程的风险一律由Smart承担，客户收到货物如果有损坏、遗失等情形，只要当场提出声明，并进行相关举证，Smart将按照正常售后退换货程序予以先行处理。<br /> 3. 我们承诺通过我司提供的网上支付平台支付，为客户承担全额手续费，但由于客户原因取消正常状态下的订单要求款项返还时（做Smart帐户余额除外），则由客户承担相关手续费；货物打包不收取任何包装费。</p></li>										
					</ul>
				</li>
				<li class="item4"><a href="#" title="click here" class="">如何注册Smart账户?</a>
					<ul style="display: none;">
						<li class="subitem1"><p>若您还没有Smart账号，请点击注册，详细操作步骤如下： <br />1. 打开Smart首页，在右上方，点击“免费注册”按钮；<br />2. 进入到注册页面，请填写您的邮箱、手机等信息完成注册；<br />3. 注册成功后，请完成账户安全验证，来提高您的账户安全等级。</p></li>										
					</ul>
				</li> 
				<li class="item5"><a href="#" title="click here">刚刚我下了订单，我想查询下我的订单，如何查询？</a>
					<ul style="display: none;">
						<li class="subitem1"><p>在Smart首页点击右上角【我的订单】即可查询到下单记录。</p></li>										
					</ul>
				</li>
				<li class="item6"><a href="#" title="click here" class="">为什么我的订单状态一直没有变化？</a>
					<ul style="display: none;">
						<li class="subitem1"><p>可能是由于快递暂时未录入信息导致，若长时间没有更新，请直接联系客服帮您处理。</p></li>										
					</ul>
				</li>
				<li class="item7"><a href="#" title="click here" class="">为什么我的订单无法点击确认收货？</a>
					<ul style="display: none;">
						<li class="subitem1"><p>自营配送订单，无需您点击确认收货，系统配送完成后会自动完成。</p></li>										
					</ul>
				</li>
				<li class="item8"><a href="#" title="click here">付款以后可以当场验收商品吗？</a>
					<ul style="display: none;">
						<li class="subitem1"><p>您付款签收后，可以当场验收商品，如商品本身有问题请您在“我的Smart”中提交退换货申请，将有专业售后人员为您解决。</p></li>										
					</ul>
				</li>
				<li class="item9"><a href="#" title="click here">价格说明</a>
					<ul style="display: none;">
						<li class="subitem1"><p>Smart价：Smart价为商品的销售价，是您最终决定是否购买商品的依据。<br />划线价：商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在Smart平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。<br />折扣：如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。</p></li>										
					</ul>
				</li>
				<li class="item10"><a href="#" title="click here" class="">订单已提交成功，什么时候可以发货？</a>
					<ul style="display: none;">
						<li class="subitem1"><p>现货订单，付款后Smart自营发货时间大部分预计在24小时内（具体以订单跟踪信息实际发货时间为准），商品从Smart库房出库，在Smart配送范围内的由Smart安排配送，超出范围的将视情况安排第三方快递公司配送。</p></li>										
					</ul>
				</li> 
			</ul>
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs --> 
		</div> 
	</div>
</div>
@endsection