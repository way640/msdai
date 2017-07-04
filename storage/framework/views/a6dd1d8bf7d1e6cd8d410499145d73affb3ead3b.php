<?php $__env->startSection('content'); ?>
<!--main-------------------------------------------------------------------------------------------------------------->

<!--banner-----轮播图---------------------------------------------------------------------------------------->

<div id="banner" >
    <img id="imgs" src="/image/focus1.gif">
        <div id="xd">
            <span class="xd2">●</span>
            <span class="xd1">●</span>
            <span class="xd1">●</span>
            <span class="xd1">●</span>
        </div>
</div>
<script>
var timer=setInterval("AutoPlay()",1300);//全局变量，定义定时器，每隔1300毫秒执行一次AutoPlay()函数
var p=1;//全局变量，存储当前播放的第几张图片
var xdspan=document.getElementById("xd").getElementsByTagName("span");//获取xd下的所有span标签
var xdspanlength=xdspan.length;//获取span标签的数量
for(var i=0;i<xdspanlength;i++){
    xdspan.item(i).onclick=function(){//通过for循环为所有span标签添加点击事件
        for(var i=0;i<xdspanlength;i++){//通过for循环为所有span标签设置class="xd1"
            xdspan.item(i).className="xd1";
            }
        this.className="xd2";//设置点击的span标签class="xd2"
        for(var i=0;i<xdspanlength;i++){
            if(xdspan.item(i).className=="xd2"){//通过for循环判断当前点击的是第几个小圆点，然后修改图片地址
                document.getElementById("imgs").src='/image/focus'+(i+1)+'.gif';
                p=i+1;////全局变量，存储当前播放的第几张图片，以便从当前图片开始播放下一张图片
                }
            }
        }
    }
function AutoPlay(){//自动播放函数
    if(p>=5){p=1;}//只有4张图片，当p大于等于4时就从第一张图片开始
    for(var i=0;i<xdspanlength;i++){//通过for循环为所有span标签设置class="xd1"
            xdspan.item(i).className="xd1";
            }
    xdspan.item(p-1).className="xd2";//设置当前播放的span标签class="xd2"
    document.getElementById("imgs").src='/image/focus'+p+'.gif';//修改图片地址
    p++;
    }
document.getElementById("banner").onmouseover=function(){clearInterval(timer);}//当鼠标移入轮播区域时，停止自动播放
document.getElementById("banner").onmouseout=function(){timer=setInterval("AutoPlay()",1300);}//当鼠标移出轮播区域时，继续自动播放
</script>

<!--announcement------------------------------------------------------------------------------------------------------>
    <div class="announcement">
        <p>最新公告</p>
        <a href="#"><span>关于中国民生银行P2P网络资金存管系统部分时间段无法使用的重要通知</span></a>
        <a href="#" style="float:right;">更多</a>
    </div>
    
<div class="main">
        <div class="title">
            <h1>固收理财</h1>
            <p>盒子正在努力审核项目，预计项目发布时间 <span>10:00</span> , <span>13:00</span> , <span>16:00</span> , <span>20:00</span>，其余时间与周末随机发标。</p>
            <a href="#">更多</a>
        </div>
        <div class="regular">
            <a class="regular-thear" href="#">
                <ol>
                    <li>产品丰富</li>
                    <li>期限多样</li>
                    <li>尽职风控</li>
                    <li style="font-size:12px;">更多固收理财> </li>
                </ol>
            </a>
            <ul>
                <li style="background-image:url(image/icon-xplan.png)">
                    <a href="#">车辆周转贷 1188989-1-1</a>
                    <p>一次还本付息</p>
                    <meter max="100" min="0" value="26" high="66" low="33" optimum="1"></meter>
                    <figcaption>160,000.00 / 61.20 万</figcaption>
                    <div class="earnings">
                        <h2>7.5+2</h2>
                        <h2>2</h2>
                        <h3>年化利率(%)</h3>
                        <h3>项目期限(月)</h3>
                    </div>
                    <a class="tender" href="#">立即投标</a>
                </li>
                <li>
                    <a href="#">项目集 160413-14</a>
                    <p>一次还本付息</p>
                    <meter max="100" min="0" value="40" high="66" low="33" optimum="1"></meter>
                    <figcaption>1,827,027.24 / 442.18 万</figcaption>
                    <div class="earnings">
                        <h2>7.5+2</h2>
                        <h2>2</h2>
                        <h3>年化利率(%)</h3>
                        <h3>项目期限(月)</h3>
                    </div>
                    <a class="tender" href="#">立即投标</a>
                </li>
                <li>
                    <a href="#">房产周转贷 1194661-1-1</a>
                    <p>一次还本付息</p>
                    <meter max="100" min="0" value="1" high="66" low="33" optimum="1"></meter>
                    <figcaption>28,945.30 / 267.00 万</figcaption>
                    <div class="earnings">
                        <h2>7.5+2</h2>
                        <h2>2</h2>
                        <h3>年化利率(%)</h3>
                        <h3>项目期限(月)</h3>
                    </div>
                    <a class="tender" href="#">立即投标</a>
                </li>
                <li style="border-right:none;">
                    <a href="#">房产抵押贷 1169506-1-2</a>
                    <p>一次还本付息</p>
                    <meter max="100" min="0" value="66" high="66" low="33" optimum="1"></meter>
                    <figcaption>959,174.59 / 144.73 万</figcaption>
                    <div class="earnings">
                        <h2>7.5+2</h2>
                        <h2>2</h2>
                        <h3>年化利率(%)</h3>
                        <h3>项目期限(月)</h3>
                    </div>
                    <a class="tender" href="#">立即投标</a>
                </li>
            </ul>
        </div>
        
        <div class="title">
            <h1>贵金属理财</h1>
            <a href="#">更多</a>
        </div>
        <div class="fund" >
            <a class="fund-thear" href="#">
                <ol>
                    <li>紧随市场</li>
                    <li>海量牛基</li>
                    <li>热点聚集</li>
                    <li style="font-size:12px;">更多基金理财> </li>
                </ol>
            </a>
            <ul>
                <div id='goldbox'>
                    
                </div>
          </ul>
        </div>
        

        <div class="title">
            <h1>锦囊</h1>
            <a href="#">更多</a>
        </div>
        <div class="pocket">
            <a class="pocket-thear" href="#">
                <ol>
                    <li>大咖云集</li>

                    <li>见微知著</li>
                    <li>智慧投资</li>
                    <li style="font-size:12px;">更多锦囊> </li>
                </ol>
            </a>
            <ul>

                <div id='pbox'>
                
                </div>

            </ul>
        </div>
    </div>

<!--row--------------------------------------------------------------------------------------------------------------->
    <div class="row">
        <ul>
            <li>
                <h1>极速开户</h1>

              <p>超低佣金，实时美股行情</p>
              <img src="image/stock.png" />
              <figcaption>股票</figcaption>
              <a href="#">查看详情</a>

          </li>
            <li>
              <h1>长期趋势</h1>

                <p>价值投资</p>
              <img src="image/invest.png" />
              <figcaption>前沿投资</figcaption>
              <a href="#">查看详情</a>
          </li>
            <li style="border-right:none;">

              <h1>在线贷款</h1>

                <p>无抵押、10分钟放款</p>
              <img src="image/second.png" />
              <figcaption>读秒</figcaption>
              <a href="#">查看详情</a>
          </li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Home.title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>