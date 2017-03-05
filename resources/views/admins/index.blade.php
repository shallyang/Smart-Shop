@extends('admins.moban')
@section('title','后台主页')
@section('content')
<div class="container">
            
	<!-- Statistics Button Container -->
	<div class="mws-stat-container clearfix">
    	
        <!-- Statistic Item -->
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-building"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Floors Climbed</span>
                <span class="mws-stat-value">324</span>
            </span>
        </a>

    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-sport"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Calories Burned</span>
                <span class="mws-stat-value down">74%</span>
            </span>
        </a>

    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-walk"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Kilometers Walked</span>
                <span class="mws-stat-value">14</span>
            </span>
        </a>
        
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-bug"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Bugs Fixed</span>
                <span class="mws-stat-value up">22%</span>
            </span>
        </a>
        
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-car"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Cars Repaired</span>
                <span class="mws-stat-value">77</span>
            </span>
        </a>
    </div>
    
    <!-- Panels Start -->
    
	<div class="mws-panel grid_5">
    	<div class="mws-panel-header">
        	<span><i class="icon-graph"></i> Charts</span>
        </div>
        <div class="mws-panel-body">
            <div id="mws-dashboard-chart" style="height: 222px; padding: 0px; position: relative;">
            	<canvas class="base" width="586" height="222"></canvas>
            	<canvas class="overlay" width="586" height="222" style="position: absolute; left: 0px; top: 0px;"></canvas>
            	<div class="tickLabels" style="font-size:smaller">
            		<div class="xAxis x1Axis" style="color:#545454">
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:-10px;top:202px;width:73px">
	            			0
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:79px;top:202px;width:73px">
	            			5
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:169px;top:202px;width:73px">
	            			10
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:259px;top:202px;width:73px">
	            			15
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:348px;top:202px;width:73px">
	            			20
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:438px;top:202px;width:73px">
	            			25
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:center;left:528px;top:202px;width:73px">
	            			30
	            		</div>
	            	</div>
	            	<div class="yAxis y1Axis" style="color:#545454">
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:187px;right:565px;width:21px">
	            			0
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:155px;right:565px;width:21px">
	            			25
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:123px;right:565px;width:21px">
	            			50
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:91px;right:565px;width:21px">
	            			75
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:58px;right:565px;width:21px">
	            			100
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:26px;right:565px;width:21px">
	            			125
	            		</div>
	            		<div class="tickLabel" style="position:absolute;text-align:right;top:-6px;right:565px;width:21px">
	            			150
	            		</div>
	            	</div>
            	</div>
           		<div class="legend">
            		<div style="position: absolute; width: 93px; height: 50px; top: 9px; right: 9px; background-color: rgb(255, 255, 255); opacity: 0.85;">

            		</div>
	            	<table style="position:absolute;top:9px;right:9px;;font-size:smaller;color:#545454">
	            		<tbody>
	            			<tr>
	            				<td class="legendColorBox">
	            					<div style="border:1px solid #ccc;padding:1px">
	            						<div style="width:4px;height:0;border:5px solid #c75d7b;overflow:hidden">
	            						</div>
	            					</div>
	            				</td>
	            				<td class="legendLabel">Page Views</td>
	            			</tr>
	            			<tr>
	            				<td class="legendColorBox">
	            					<div style="border:1px solid #ccc;padding:1px">
	            						<div style="width:4px;height:0;border:5px solid #c5d52b;overflow:hidden">
	            						</div>
	            					</div>
	            				</td>
	            				<td class="legendLabel">Sales</td>
	            			</tr>
	            		</tbody>
	            	</table>
            	</div>
        	</div>
    	</div>
	</div>
                
	<div class="mws-panel grid_3">
    	<div class="mws-panel-header">
        	<span><i class="icon-book"></i> Website Summary</span>
        </div>
        <div class="mws-panel-body no-padding">
            <ul class="mws-summary clearfix">
                <li>
                    <span class="key"><i class="icon-support"></i> Support Tickets</span>
                    <span class="val">
                        <span class="text-nowrap">332</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-certificate"></i> Commision</span>
                    <span class="val">
                        <span class="text-nowrap">71% <i class="up icon-arrow-up"></i></span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-shopping-cart"></i> This Week Sales</span>
                    <span class="val">
                        <span class="text-nowrap">144 <i class="down icon-arrow-down"></i></span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-install"></i> Cash Deposit</span>
                    <span class="val">
                        <span class="text-nowrap">$6,421</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-key"></i> Last Sign In</span>
                    <span class="val">
                        <span class="text-nowrap">September 21, 2012</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-windows"></i> Operating System</span>
                    <span class="val">
                        <span class="text-nowrap">Debian Linux</span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection