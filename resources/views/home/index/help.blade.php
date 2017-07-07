@extends('Home.title')
@section('content')
<base href="{{url('')}}">
<link rel="stylesheet" href="./help/style.css" type="text/css">
<link rel="stylesheet" href="./help/modal.css" type="text/css">
<link rel="stylesheet" href="./help/mabout.css" type="text/css">
<link rel="stylesheet" href="./help/main.css" type="text/css">


<body style="background:#f6f6f6;">

<div class="container zx clearfix">
    
    <div class="zx-right float_right" style="width: 90%">
        <div class="helpbox">
            <p class="helptitle">ZDmoney金融帮助中心</p> 
            <div class="helppic  clearfix">
                <a class="xsbd" href="javascript:void(0)"></a>
                <a class="aqbz" href="javascript:void(0)"></a>
                <a class="zcrz" href="javascript:void(0)"></a>
                <a class="cztx" href="javascript:void(0)"></a>
                <a class="tzhk" href="javascript:void(0)"></a>
                <a class="zhgl helpon" href="javascript:void(0)"></a>
                <a class="jygl" href="javascript:void(0)"></a>
                <a class="mcjs" href="javascript:void(0)"></a>
                <a class="cjwt" href="javascript:void(0)"></a>
                <a class="flfg" href="javascript:void(0)"></a>
            </div>
        <div class="tabmenu">
        <!--新手必读-->  
          <div class="helpcont" style="display: none;">
             <div class="helpt" id="glwhalt" style="border:none;">
        <p class="tit">ZDmoney金融是什么？<em class="cur"></em></p>
        <p class="con" style="display:block;">ZDmoney金融(www.gljr.com)是柳州市ZDmoney金融服务有限公司独立运营的互联网金融信息服务平台。2014年6月由柳州市金融办批准成立，并与广西柳州中小企业信用担保有限公司等多家国有机构合作。由合作机构为平台发布的项目进行担保，旨在为大众实现稳健的财富增值，为中小微企业解决融资难题。平台一直坚持拥抱监管合规运营，现已与贵州银行签署资金直接存管协议。截至2017年5月23日，撮合交易总额超过21亿元，注册用户近十万人，为投资人赚取收益7523万元。ZDmoney金融已成长为柳州乃至广西领先的互联网金融信息服务平台。</p>
      </div>
       <div class="helpt">
        <p class="tit">借款人的借款成本多少？<em></em></p>
        <p class="con">&nbsp;借款人的借款成本包含“利息”和“服务费用”两部分：<br>
                      1、“利息”部分依据每个借款人的信用资质不同而异，目前通过ZDmoney金融获得借款的利息约为银行同类贷款利率的二倍，远远低于相关法规所提出的“最高不超过银行同类贷款利率的四倍”；<br>
                      2、“服务费用”的部分是ZDmoney金融为客户提供信息服务收取的服务费用，在双方自愿约定的合理范围内。借款人经过广西柳州中小企业信用担保有限公司和ZDmoney金融的双重严格审核，双方自主约定，符合借款人实际承受能力，符合法律法规。
        </p>
      </div>
            <div class="helpt" id="glms">
        <p class="tit">ZDmoney金融的模式是什么？<em></em></p>
        <p class="con">ZDmoney金融采用国有担保机构或其他合作机构对平台发布的融资项目进行本息保障，并由第三方支付企业汇付天下（全国网贷行业龙头企业）对平台往来资金进行托管支付；三层防火墙隔离系统的访问层、应用层和数据层集群；有效的入侵防范及容灾备份，确保交易数据安全无虞。<br>ZDmoney金融在法律制度框架内，合规经营，做真正的P2B互联网金融居间服务平台，尽心尽力保障投融资客户利益。<br><img src="./help/ms.png" style="padding-left:100px;">   
        </p>
      </div>
       <div class="helpt" id="xsbd">
        <p class="tit">投资者的投资会不会受ZDmoney金融运营变动的影响？<em></em></p>
        <p class="con">               
          ZDmoney金融的任何变动都不会影响投资者与融资企业或个人之间的借款协议的执行。借款企业或借款人有义务继续按照借款协议的约定，按时、足额偿还投资人的借款本金和利息。此外，借款协议中的第三方担保公司（国有担保公司或金融机构担保），仍然要履行应尽的担保职责。否则投资人有权依据借款合同的约定采取必要的法律手段追究借款企业及担保公司的法律责任。       
        </p>
      </div>
            <div class="helpt">
        <p class="tit">ZDmoney金融网站平台靠什么盈利？<em></em></p>
        <p class="con">ZDmoney金融网站是一家互联网金融服务平台,主要业务为撮合借贷双方的交易。ZDmoney金融平台的盈利模式就是收取借款方微乎其微的信息服务费。因为是微利经营，所以敬请尊贵的亲们多多关照。    
        </p>
      </div>
            <div class="helpt" id="glhf">
                <p class="tit">ZDmoney金融是合法的运营网站吗？<em></em></p>
                <p class="con">是的，您可以点击以下链接查看相关认证：<br>
                    （1）<a href="https://www.gljr.com/article/detail.html?code=event&amp;id=450" target="_blank">[信用认证]</a>；<br>
                    （2）<a href="https://ss.knet.cn/verifyseal.dll?sn=e16070145020064023imtq000000&amp;ct=df&amp;a=1&amp;pa=0.02207431010901928" target="_blank">[可信网站认证]；</a><br>
                    （3）<a href="http://v.pinpaibao.com.cn/authenticate/cert/?site=www.gljr.com&amp;at=realname" target="_blank">[安全联盟实名认证]</a>；<br>
                    （4）<a href="https://www.gljr.com/article/detail.html?code=event&amp;id=507" target="_blank">[增值电信业务经营许可证]</a>；
                </p>
            </div>
            <div class="helpt" id="glmk">
                <p class="tit">【新手必读】在ZDmoney金融投资理财有什么门槛？<em></em></p>
                <p class="con">           在ZDmoney金融投资理财的门槛较低，只要您已年满18周岁，具备一定的风险投资经验，即可注册成为ZDmoney金融的投资用户。         
                </p>
            </div>
            <div class="helpt">
                <p class="tit">ZDmoney金融资金托管模式资金流程是怎样的？<em></em></p>
                <p class="con">&nbsp;ZDmoney金融采用的资金托管及划转，由国内领先的第三方支付平台“汇付天下”负责办理。当投资人和借款人注册时，需要通过ZDmoney金融平台，登录到第三方支付“汇付天下”开通自己的资金账户。投资人充值时是将银行卡中的资金充值到其在汇付天下的账户,不是充值到ZDmoney金融的平台账户，投资人在ZDmoney金融的用户名只是起到一个资金对账作用。投资时投资的那部分资金会处于冻结状态，当投资成功或失败时，这部分资金会解冻。满标后，资金即会从投资人的账户进入借款人的账户；流标后投标资金会直接退回到投资人的账户。<br>可以看到，整个资金流动过程，资金流动并不经过ZDmoney金融平台，而是在投资人、借款人的第三方支付平台账户间直接划转。所以整个过程中ZDmoney金融是无法动用投资人和借款人的资金的。<br>
                <img src="./help/he.png" width="464" height="237" alt="ZDmoney金融"> </p>
            </div>  
            <div class="helpt">
                <p class="tit">借款人逾期了怎么办？<em></em></p>
                <p class="con">若借款人逾期，则推荐借款项目的担保机构（如：国有担保公司和担保金融机构），会代偿该期本金、收益和罚息，届时请注意查看您的账户。</p>
            </div>
            <div class="helpt" id="xsb">
                <p class="tit">什么是新手标？<em></em></p>
                <p class="con">ZDmoney金融发布的体验信用标，主要目的是让客户了解和熟悉平台投标的操作流程，以至于在投标的过程中能够顺利的完成操作。新手标只能用体验金进行投资，它的起投金额为100元，最多可投体验金视具体的新手标而定，同时投标金额必须为100的整数倍。</p>
            </div>
            <div class="helpt">
                <p class="tit">如何获得全额本息保障？<em></em></p>
                <p class="con">投资用户只要确认投过某标，就可以在该标的到期时以原定的还款方式、还款时间、还款金额，获得自己所投资的本金和收益。所有动作均由系统数据自动生成和记录。</p>
            </div>
            <div class="helpt">
            <p class="tit">ZDmoney金融有哪些理财产品？<em></em></p>
            <p class="con">
                <span style="width:180px;">产品一： 国有担保标</span><span style="width:500px;">★起投金额以具体项目规模而定  ★年化收益：9%—12%</span>
                <span style="width:100%; border-bottom:1px solid #f5f3f3;"></span>
                <span>投资期限</span>
                <span>1个月</span>
                <span>3个月</span>
                <span>6个月</span>
                <span>12个月</span><br>
                <span>年化收益</span>
                <span>9%</span>
                <span>10.5%</span>
                <span>11%</span>
                <span>12%</span>
                <span style=" width:100%; border-bottom:1px solid #f5f3f3;"></span>
                收益方式：到期还本付息/每月付息到期还本/自主月供还款    投资期限：1个月—12个月<br>
                产品特点：借款人为柳州实力雄厚、运转正常的中小微企业，经营状况保持良好，借款用于经营性周转，并根据实地调查对借款企业进行严格筛选，确保其具备良好的还款能力。同时，由国有担保公司提供本息担保，确保投资人的本金与利息安全。<br><br>
                <span style="width:200px;">产品二： 机构回购标</span><span style="width:500px;">★100元起投  ★年化收益：9%—15%</span>
                <span style="width:100%; border-bottom:1px solid #f5f3f3;"></span>
                <span>投资期限</span>
                <span>1~2个月</span>
                <span>3~4个月</span>
                <span>6个月</span>
                <span>12个月</span><br>
                <span>年化收益</span>
                <span>11%</span>
                <span>12%</span>
                <span>13%</span>
                <span>15%</span>
                <span style=" width:100%; border-bottom:1px solid #f5f3f3;"></span>
                收益方式：到期还本付息/每月付息到期还本/自主月供还款    投资期限：1个月—12个月<br>
                产品特点：ZDmoney金融通过与有实力的金融机构签订回购协议，由金融机构承诺到期债权收购并本息代偿给投资人，为投资人排除投资风险，以确保投资人的本金及利息安全。<br><br>
                <span style="width:180px;">产品三：车辆抵押标 </span><span style="width:500px;">★50元起投  ★年化收益：9%—15%</span>
                <span style="width:100%; border-bottom:1px solid #f5f3f3;"></span>
                <span>投资期限</span>
                <span>1~2个月</span>
                <span>3~4个月</span>
                <span>6个月</span>
                <span>12个月</span><br>
                <span>年化收益</span>
                <span>11%</span>
                <span>12%</span>
                <span>13%</span>
                <span>15%</span>
                <span style=" width:100%; border-bottom:1px solid #f5f3f3;"></span>
                收益方式：到期还本付息/每月付息到期还本    投资期限：1个月—12个月<br>
                产品特点：抵押物为在当地车辆管理部门办理抵押登记，进行专业评估，安装双重GPS定位系统的车辆，严格将借款额度控制在车辆市值的50%以下。若发生逾期情况，则由具备汽车经营、买卖资质的合作机构收购、处置抵押物债权，确保投资人的本金及利息安全。 
            </p>
        </div>
  </div>
    <!--安全保障--> 
    <div class="helpcont" style="display: none;">
        <div class="helpt" id="aqbz" style="border:none;">
            <p class="tit">本金和收益是否可以得到保障？<em class="cur"></em></p>
            <p class="con" style="display:block;">               
            &nbsp;&nbsp;ZDmoney金融推荐的项目投资均由国有担保公司或金融机构提供本息担保的项目，并由全国第三方支付机构龙头企业（汇付天下）对平台往来资金进行托管及划转，充分保障投资人本金及投资收益。     
            </p>
        </div>
        <div class="helpt">
            <p class="tit">如何保证用户资金安全？<em></em></p>
            <p class="con">               
            1、汇付天下资金托管及划转：ZDmoney金融与汇付天下达成合作关系，汇付天下为ZDmoney金融开设了第三方专用资金账户，汇付天下的专用资金账户可以对于平台资金流入转出进行托管及划转，确保投资人的资金安全；<br>
            2、本息担保：由国有担保公司或金融机构出具担保函，对投资人的本金和利息进行本息担保，确保交易数据安全无虞；<br>
            3、隐私安全：ZDmoney金融在任何情况下都绝不会出售、出租或以任何其他形式泄漏您的信息。您的信息按照《ZDmoney金融投资咨询服务协议》中的规定被严格保护；<br>
            4、网络安防：ZDmoney金融行业专业安全架构，让您享受银行级别的安全保障 。       
            </p>
        </div>
        <div class="helpt">
            <p class="tit">网上交易保障中心是什么？<em></em></p>
            <p class="con">投资成功后，是由互联网金融国内排名第一的第三方支付“汇付天下”把钱划转给借款人，资金从保管账户转入借款人账户后会在网上交易保障中心生成一份电子回单。这份电子回单类似于银行转账汇款单一样，有”电子签名“和“时间戳”，保障并确认资金的最终流向，让投资人对自己的每笔资金都清楚了解在什么时间，转给了谁。    
            </p>
        </div>
        <div class="helpt">
            <p class="tit">投资人的本金和收益是否可以得到保障？<em></em></p>
            <p class="con">ZDmoney金融推出的产品均是由国有担保公司或金融机构、合作小额贷款机构推荐的本息安全有保障的项目，更有国有担保公司或金融机构担保提供本息担保，和汇付天下进行资金托管及划转，充分保障投资人本金及投资收益。</p>
        </div>
    </div>
    <!--注册认证--> 
    <div class="helpcont" style="display: none;">
        <div class="helpt" style="border:none;">
            <p class="tit">如何进行实名认证？<em class="cur"></em></p>
            <p class="con" style="display:block;">               
            &nbsp;为确保投资人的资金安全，只有在完成实名认证后才能进行充值。<br>
            方法1：登录后进入“我的账户-账户管理-充值提现”，未实名认证时会触发认证。<br>
            方法2：进入“我的账户-账户管理-认证中心”后进行实名认证操作。    
            </p>
        </div>
        <div class="helpt">
            <p class="tit">为什么要进行实名认证？<em></em></p>
            <p class="con">为确保投资人的资金安全，投资人在首次充值前需完成的个人身份信息的验证。投资人可在“我的账户-账户管理-认证中心”页面完成实名认证。</p>
        </div>
        <div class="helpt" id="zcrz">
            <p class="tit">实名认证无法通过是什么原因？怎么解决？<em></em></p>
            <p class="con">ZDmoney金融实名认证与公安系统联网，如遇信息不一致，将会导致无法通过。以下几种情况，将无法自行完成实名认证：<br>
            1、名字中带有繁体字<br>
            2、曾经改过名字<br>
            3、军人转业、复员换的身份证<br>
            4、做过户籍变动<br>解决办法：将用户名、身份证正反面照片发到客服邮箱（service@goollii.com），并且在身份证上注明“仅供ZDmoney金融实名认证使用”，收到邮件后工作人员会提交后台审核认证，认证完成后再给用户回复邮件。  
            </p>
        </div>
        <div class="helpt">
            <p class="tit">实名认证成功后能修改吗？可以申请注册几个实名认证的账号？<em></em></p>
            <p class="con">实名认证成功后不能修改。每个人（同一身份证）仅可以实名认证一个账号。为确保用户更好的管理自己的账户资产，建议您谨慎填写您的认证信息。</p>
        </div>
    </div>
    <!--充值提现-->                
    <div class="helpcont" style="display:none;">
        <div class="helpt" style="border:none;">
            <p class="tit">充值收费吗？<em class="cur"></em></p>
            <p class="con" style="display:block;">               
            为保障您的资金安全，我平台一直采用“汇付天下”第三方支付机构进行资金托管，即您在ZDmoney金融平台投资理财的资金划转与结算全部由汇付天下完成。在此过程中，无论是您充值或提现，汇付天下都需收取一定比例的服务费，其中您充值的服务费一直是由我平台为您承担。但近期频繁出现恶意充值、提现等非正常交易行为，针对这一情况，我公司经慎重研究决定，对部分充值、提现行为平台不再承担由第三方收取的服务费，具体如下，敬请知悉：
            <br>1、充值日至提现日小于等于30日的，平台不为用户承担充值服务费，该费用由用户自行承担，标准为提现金额的0.15%。
            <br>2、充值日至提现日大于30日，小于等于90日的，平台为用户承担一半服务费，另一半由用户自行承担，标准为提现金额的0.075%。
            <br>3、充值日至提现日超过90日的，平台为用户全额承担服务费。
            <br>4、在我平台投资所产生的利息，提现产生的服务费由平台承担。
            <br>此新标准自2016年1月1日00:00:00起实施，用户在实施之日起充值的资金按新标准执行。
            </p>
        </div>
        <div class="helpt">
            <p class="tit">使用汇付天下快捷支付充值失败是什么原因，应该如何解决？<em></em></p>
            <p class="con">原因一：<br>提示：快捷充值后台响应失败<br>原因：卡上余额不足
            <br>原因二：<br>提示：快捷充值卡证信息验证失败<br>原因：<br>（1）卡号有误；<br>（2）办卡时，银行预留手机号有误；<br>（3）银行卡没有开通认证支付
            <br>原因三：<br>如您的充值银行卡涉及以下5家银行：平安银行、邮政储蓄银行、浦发银行、渤海银行、上海银行，除了要解决NO.2中的问题，还需要在电脑上开通无卡支付，才可以进行快捷充值。无卡支付开通地址“中国银联”https://www.95516.com/portal/open/firstStep.do
            </p>
        </div>
         <div class="helpt">
            <p class="tit">为什么要进行实名认证？<em></em></p>
            <p class="con">               
            为确保投资人的资金安全，投资人在首次充值前需完成的个人身份信息的验证。投资人可在“我的账户-账户管理-认证中心”页面完成实名认证。       
            </p>
        </div>
        <div class="helpt">
            <p class="tit">如何进行提现？<em></em></p>
            <p class="con">按照以下步骤进行提现：<br>
            1、登录后进入“我的账户”；<br>
            2、进入"我的账户"页面的"充值提现"栏，点击提现按钮；<br>
            3、选择要进行提现的银行卡并输入提现金额；<br>
            4、输入支付密码，并进行短信验证（启用短信验证时需要），完成提现申请。当认证完成后再给用户回复邮件。  
            </p>
        </div>
        <div class="helpt">
            <p class="tit">如何充值？是实时到账吗？<em></em></p>
            <p class="con">登录ZDmoney金融后进入“我的账户”选择“充值提现”，输入充值金额，选择充值方式：网上银行或快捷支付，点击“充值”跳转到汇付天下的支付网关完成充值。请投资者在充值前详细阅读“温馨提示”，ZDmoney金融在收到来自第三方支付的扣款成功通知消息后，会在您的ZDmoney金融账户余额中做记账处理。</p>
        </div>
        <div class="helpt">
            <p class="tit">提现收费吗？<em></em></p>
            <p class="con">一般取现：2元/笔，当日取现，下一个工作日到账。
                <br>快速取现：按取现金额的千分之0.5+2元/笔，工作日14：30前发起当日到账。
                <br>即时取现：按取现金额的千分之0.5+2元/笔，7*24小时即时到账。
                <br>说明：当日转入或当日充值的资金选择使用"即时取现"或"快速取现",按取现费的千分之0.5+2元/笔收取，如在节假日前一个工作日发起即时取现或快速取现,另按照取现费的千分之0.5*（节假日天数 +1）+2元/笔收取。
                <br>*取现费用由“汇付天下”收取，具体收费标准详见“汇付天下”页面提示。
            </p>
        </div>
        <div class="helpt" id="cztx">
            <p class="tit">充值/提现是否有限额？是否有次数限制？<em></em></p>
            <p class="con">ZDmoney金融对于用户的充值没有金额和次数限制，但用户在充值时的单笔限额取决于充值时所选择银行的规定。<br>ZDmoney金融对于用户的提现同样没有金额限制。</p>
        </div>
        <div class="helpt">
            <p class="tit">投资人申请提现后何时到账？<em></em></p>
            <p class="con">用户在工作日当日16:00之前申请提现的，当天到账。工作日当日16:00之后申请提现的，将于次日到账（如遇双休日或法定节假日则顺延到账时间）。</p>
        </div>
    </div>
    <!--投资回款-->                
    <div class="helpcont" style="display: none;">
        <div class="helpt" style="border:none;">
            <p class="tit">如何进行投资？<em class="cur"></em></p>
            <p class="con" style="display:block;">               
            &nbsp;按照以下步骤进行投资：<br>
            1、在ZDmoney金融上注册、通过实名认证、成功绑定银行卡；<br>
            2、点击"我的账户"页面的"充值提现"按钮给账户充值；<br>
            3、点击"我要投资"浏览"所有项目"；<br>
            4、选择投资选定的投资理财项目。
            </p>
        </div>
        <div class="helpt" id="tzhk">
            <p class="tit">投资后什么时候开始计算收益？<em></em></p>
            <p class="con"> 投资成功后立即开始计算收益。 </p>
        </div> 
        <div class="helpt">
            <p class="tit">收到还款后可以马上再投资吗？<em></em></p>
            <p class="con">可以，而且我们建议投资人在收到还款后及时地进行再次投资，确保收益的最大化。</p>
        </div>
    </div>
    <!--账户管理-->                
    <div class="helpcont" style="">
        <div class="helpt" id="zhgl" style="border:none;">
            <p class="tit">我的账户里有哪些信息？<em class="cur"></em></p>
            <p class="con" style="display:block;"> 我的账户可以看到：账户管理、投资管理、借款管理、基本设置等信息。</p>
        </div>
        <div class="helpt">
            <p class="tit">账户总资产如何统计？<em></em></p>
            <p class="con"> 账户总资产 = 可用余额 + 投资中冻结金额 + 提现中冻结金额 + 待收本金 + 待收收益</p>
        </div>
    </div>
    <!--交易管理-->                
    <div class="helpcont" style="display: none;">
        <div class="helpt" id="jygl" style="border:none;">
            <p class="tit">ZDmoney金融上各种手续费收费标准？<em class="cur"></em></p>
            <p class="con" style="display:block;"> 除了向借款人收取一些微不足道的管理费用外,ZDmoney金融向尊贵的平台投资用户收取的费用为零。您没听错，除了高收益零费用之外，ZDmoney金融还会根据尊贵的平台投资用户的投资积分，向用户定期送出各种大礼，亲爱的您是不是很期待啊？</p>
        </div>
        <div class="helpt">
            <p class="tit">交易记录有哪些内容？<em></em></p>
            <p class="con"> 交易记录可以查到用户在ZDmoney金融账户中各项交易的情况（包括项目类型、操作金额、总金额、可用金额、冻结金额、待收金额、待还款金额、记录时间）等内容。</p>
        </div>
    </div>
    <!--名词解释-->                
    <div class="helpcont" style="display: none;">
        <div class="helpt" style="border:none;">
            <p class="tit">p2b是什么？<em class="cur"></em></p>
            <p class="con" style="display:block;"> P2B全称是互联网投融资服务平台，有别于P2P网络融资平台的一种微金融服务模式。P2B是指person-to-business，个人对（非金融机构）企业的一种贷款模式。简单地说，就是有资金并且有理财投资想法的个人，通过中介机构牵线搭桥，使用信用贷款的方式将资金贷给其他有借款需求的企业和单位。
            </p>
        </div>
        <div class="helpt">
            <p class="tit">资金池是什么?<em></em></p>
            <p class="con"> &nbsp;把资金汇集到一起,形成一个像蓄水池一样的储存资金的空间,这就是资金池。P2b行业的资金池模式是指客户不管通过什么渠道支付金钱,现金都需要先流入网贷平台公司的账户,此类模式下,平台涉嫌非法吸收公众存款。国内的P2b网络借贷一直遭遇非法集资质疑,对此,央行提出的方案是:建立平台资金第三方资金</p>
        </div>
        <div class="helpt">
            <p class="tit">可用余额指的是？<em></em></p>
            <p class="con"> &nbsp;指账户内投资人可自由支配的资金。</p>
        </div>
        <div class="helpt">
            <p class="tit">当月净投资总额<em></em></p>
            <p class="con"> ZDmoney金融在3月31日—6月30日期间举办的“四重好礼 非投不可”活动之“投资赚收益赢大礼”中的‘投资人单月投资总额’指的是，用户在活动期间单月内用于投标的净投资总额，当月净投资总额=当月充值总金额-当月未投资金额，以下情况不计入净投资总额内：<br>
            1、用户已充值未投资的部分资金；<br>
            2、用户反复使用同一笔本金进行投标，只记录首次投标金额。如，用户充值2万元，在一个月内反复使用2万元进行投资，系统只将2万元的首次有效投资计入净投资总额内；<br>
            3、标的中含用户叠加投资本金的，系统只将用户未重复叠加部分的本金计入净投资总额内。如，首次投标1万元，该标到期后，用户追加4万元，合计5万元投资该月第二个标的，则系统记录净投资总额为：1万元（首次投标本金）+4万元（第二次追加本金）=5万元。</p>
        </div>
        <div class="helpt" id="mcjs">
            <p class="tit">待收本金、待收收益分别代表什么？<em></em></p>
            <p class="con"> 待收本金：指投资人已投资而尚未收回的本金。<br>
            待收收益：指投资人已投资而尚未收回的收益之和。</p>
        </div>
        <div class="helpt">
            <p class="tit">提现中冻结借代表什么？<em></em></p>
            <p class="con"> 提现中冻结金额指的是申请提现后等待处理的金额。</p>
        </div>
    </div>
    <!--常见问题-->                
    <div class="helpcont" style="display: none;">
        <div class="helpt" style="border:none;">
            <p class="tit">p2p模式在国内外的优秀实践有哪些？<em class="cur"></em></p>
            <p class="con" style="display:block;"> p2p小额信贷模式在国外拥有大量优秀的实践：<br>
            1、2006年，孟加拉尤努斯教授就因其在小额贷款领域的突出贡献荣获“诺贝尔和平奖”，其创办的“格莱珉银行”模式在全球各地得到了推广，而P2P正是“乡村银行”价值理念的体现；<br>
            2、2005年成立的Kiva是一个非营利的P2P贷款网站，主要将发展中国家收入非常低的企业作为借款人与出借人进行撮合；<br>
            3、2006年，网站prosper.Com在美国成立并运营，prospe成功的帮助了人们更方便地相互借贷。起源于英国的Zopa，提供的是P2P社区贷款服务，并在美国日本和意大利成功推广；<br>
            4、2007年5月上线的加州森尼维尔市贷款的俱乐部 Lending Club，使用Facebook应用平台和其他社区网络及在线社区将出借人和借款人聚合；<br>
            5、2006年，曾师从尤努斯并作为尤努斯中国门徒的唐宁先生将p2p模式引入中国，创建了宜信，截至目前，宜信已经成为国内乃至国际p2p领域的杰出代表。
            </p>
        </div>
        <div class="helpt">
            <p class="tit">借款人的资金去向是哪里？<em></em></p>
            <p class="con">ZDmoney金融是一个信息提供者的角色，帮助借款人进行项目推荐，展示给合适的出借人。所以，只要借款用途是合法的、正当的、风险可控的，且出借人同意，即可促成二者借贷关系的成立。</p>
        </div>
        <div class="helpt">
            <p class="tit">资金托管的误区？<em></em></p>
            <p class="con"> 第一、资金托管不等于直接支取。目前大多数网贷平台跟支付公司合作的均为直接支取模式。客户通过支付平台的网银接口,将资金支付给网贷平台,支付平台只是让客户付款过程比线下汇款更加方便而已,资金还是会进入网贷平台的银行账户,资金并不是真正托管在支付平台。这种模式下,平台可以直接挪用客户的资金,这就是 “资金池”的模式的风险。资金池形成方式有两种:一种是线下汇款，另一种是在线支付。<br>
            第二、资金托管不等于资金监管。托管的含义是指客户的资金托付给了支付平台,在支付平台上进行操作,当然支付平台和网贷平台不能是同一个公司。监管的含义是监管方保障交易过程的合法性,三方不存在欺诈等违法行为,P2P行业的监管方是相关政府机构。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何区分资金托管的不同模式?<em></em></p>
            <p class="con"> 方法很简单,资金池模式中投资人的资金会先流入网贷平台的银行账户,网贷平台可以动用这部分资金，很可能会挪为他用。资金托管模式中客户的资金在支付平台直接流转,不经过网贷平台中转,网贷平台动用不了客户的资金,那么进行资金托管客户和网贷平台就必须在第三方支付平台上注册单独的支付账户,将资金的控制权交给客户和支付平台。网贷平台仅提供信息服务，不介入交易，也没有动用资金的权限，是纯信息交易平台。
            &nbsp; &nbsp; &nbsp;<br>当你决定在某个平台投资时，一定要看投资人、借款人、平台是否在第三方支付公司开通账户。</p>
        </div>
        <div class="helpt">
            <p class="tit">ZDmoney金融如何审核借款项目？<em></em></p>
            <p class="con"> 小额贷款机构与ZDmoney金融对每个借款项目经过七重严格审核：<br>
            1. 小额贷款机构针对每笔借款，进行线下实地考察，对借款人信息进行交叉验证以及真实性验证；<br>
            2. 审核材料，有包括借款人银行流水、征信报告、财产证明、房产证明、工作证明等15种必备材料的审核；<br>
            3. 借款人及联系人背景的详尽调查。借款人需要提供3个联系人，均由小贷公司和借款人电话核实；<br>
            4. 借款人还款能力评估。 通过上述三项审核（尤其是第1和第2项）还原借款人真实的月净现金流。<br>通过上述4重审核后，该借款人被推荐到ZDmoney金融，ZDmoney金融风控团队根据自身的风控标准对借款人进行二次审核：<br>
            1.再次审核借款资料，以保证合作机构提供的借款真实可信。确认其身份、联系人、还款能力、根据客户的身份信息检索反欺诈数据库及法院被执行人记录；<br>
            2.黑名单管理：借款人黑名单动态数据管理。
            </p>
        </div>
        <div class="helpt">
            <p class="tit">贷款客户如何筛选？<em></em></p>
            <p class="con"> 除了国有担保公司或金融机构承担全额本息担保外,ZDmoney金融专业风控团队还会对借款人进行尽职调查,以规避贷款风险.<br>ZDmoney金融定性+定量的借款评价体系包括：<br>
            一、借款人定性评价体系：<br>
            1、外部环境（区域经济、监管、政策支持）；<br>
            2、公司治理（股东背景、管理团队）；<br>
            3、业务模式和发展前景（企业行业地位）；<br>
            4、内部管理（流程、内控、IT），管理层访谈；<br>
            5、业务发展（发展定位、生产技术、还款能力）；<br>
            二、借款人定量评价体系：<br>
            1、查看借款人的财务报表以及征信报告；<br>
            2、重点关注借款人过去3年外部融资的变化，是否有逾期数据，以及贷款及库存的变化；<br>
            3、了解借款人过去3年盈利能力及融资成本的变化，量化分析借款人经营能力和盈利能力等。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何修改个人资料？<em></em></p>
            <p class="con">  您可以进入“我的账户-帐号管理-个人基本资料”页面，进行个人信息的修改。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何更换绑定邮箱？<em></em></p>
            <p class="con"> 点击“账户管理-基本设置-更换邮箱”系统将自动更换您已绑定的手机，新绑定的手机将收到新的验证码，输入验证码登陆即可。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何更换绑定手机？<em></em></p>
            <p class="con">已绑定手机不能解绑，只能更换。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何开通网上银行？<em></em></p>
            <p class="con">目前所有的国有商业银行都支持个人网银业务，您只需要携带有效身份证件，到当地您所持银行卡的发卡行任意营业网点，即可申请开通网上银行业务。开通网上银行的时候请注意咨询额度问题，以避免出现无法充值的现象。</p>
        </div> 
        <div class="helpt">
            <p class="tit">手机收不了验证码怎么办？<em></em></p>
            <p class="con">因工信部管制垃圾短信，现各手机运营商都在对106短信网关号段进行品牌改造和升级，造成暂时收不到短信验证码或接收验证码延迟，如果是注册时收不到验证码请您先使用邮箱验证。</p>
        </div>
        <div class="helpt">
            <p class="tit">忘记登录密码怎么办？<em></em></p>
            <p class="con">在登录页面选择“忘记登录密码”进行重置，但需要用户已经绑定过邮件或手机。</p>
        </div>
        <div class="helpt" id="cjwt">
            <p class="tit">为什么银行扣钱了ZDmoney金融账户余额却没有增加？<em></em></p>
            <p class="con">银行已扣款，但是可能由于系统原因，资金没有同步到第三方支付平台（即汇付天下），第三方支付平台没有收到扣款，您在ZDmoney账户余额就不会增加，这种情况您不用担心，银行会在发现问题之后和第三方支付平台对接，第三支付平台收到资金之后，您的ZDmoney金融账户余额就会增加，如银行没有把钱对接给第三方支付平台，会在2个工作日之内把钱退回您的银行卡。</p>
        </div>
        <div class="helpt">
            <p class="tit">如何更换绑定手机？<em></em></p>
            <p class="con">点击“账户管理-基本设置-更换邮箱”系统将自动更换您已绑定的手机，新绑定的手机将收到新的验证码，输入验证码登陆即可。</p>
        </div>    
    </div>
    <!--法律法规-->                
    <div class="helpcont" style="display: none;">
        <div class="helpt" id="flfg" style="border:none;">
            <p class="tit">p2b业务的社会和法律基础<em class="cur"></em></p>
            <p class="con" style="display:block;"> 1、个人之间的民间借贷自古以来是民间频繁发生的合理经济行为，但需要符合一定的规则和社会价值取向。<br>2、ZDmoney金融作为平台为有理财、融资需求的客户提供信息咨询和服务，促成借款人和出借人的民间借贷，都是自然人（个人）之间的借款，完全适用《中华人民共和国合同法》第十二章借款合同的专门规定。<br>3、《中华人民共和国合同法》第二十三章对居间业务有专章规定，对从事居间的个人或企业提供法律保护，同时也进行法律约束。 ZDmoney金融作为服务平台，履行居间人的角色，促成借款人和出借人完成订立《借款协议》，应依照《合同法》的上述规定依法履行居间义务，ZDmoney金融有权收取当事人的合理报酬。实际操作中，ZDmoney金融与借款人和出借人的各自签署的服务协议中，都分别规定了借款人或出借人委托ZDmoney金融提供交易对方的信息、信用管理服务的条款，ZDmoney金融基于双方的委托为双方提供订立《借款协议》的机会，最终促成每一笔《借款协议》的签署，在《借款协议》中，借款人和出借人是义务主体，ZDmoney金融仅作为第三方提供见证和信用管理服务。<br> 4、ZDmoney金融不收取资金，也不贷出资金，资金的借贷和偿还都是直接发生在借款人和出借人之间的，ZDmoney金融不存在“集资”的行为，更不是“非法集资”。
            </p>
        </div>
        <div class="helpt">
            <p class="tit">p2b业务的经营基础<em></em></p>
            <p class="con"> &nbsp;&nbsp;ZDmoney金融所提供的P2b借贷咨询与服务业务，不属于国家法律、行政法规、国务院禁止或限制的业务内容，公司成立得到当地工商局、金融办等主管部门的依法核准和大力支持。<br>
            《个人出借咨询与服务协议》、《债权转让及受让协议》的合法性及法律依据：<br>
            在不违反国家法律法规的前提下，（参考《合同法》52条）只要不违反这五点，我们的合同就会被视为有效。<br>
            第一条 &nbsp;一方以欺诈、胁迫的手段订立合同，损害国家利益。<br>
            第二条 &nbsp;恶意串通，损害国家集体或者第三人利益；<br>
            第三条 &nbsp;以合法形式掩盖非法目的；<br>
            第四条 &nbsp;损害社会公共利益；<br>
            第五条 &nbsp;违法法律、行政法规的强制性规定<br>
            债权文件上显示的出借人的收益率、借款人的贷款利率的合法性及法律依据：<br>
            1.《合同法》211条规定，自然人之间的借款合同对支付利息没有约定或者约定不明确，视为不支付利息。自然人之间的借款合同约定支付利息的，借款的利率不得违反国家有关限制借款利率的规定。<br>2.国家有关借款利率的规定是：不超过近期中国人民银行公布的贷款利率的四倍。根据最高人民法院《关于人民法院审理借贷案件的若干意见》：第六条 民间借贷的利率可以适当高于银行的利率，各地人民法院可根据本地区的实际情况具体掌握，但最高不得超过银行同类贷款利率的四倍，（包含利率本数）。超出的部分利息不予保护。 依据（中国人民银行网站的金融机构人民币贷款基准利率调整表），目前通过ZDmoney金融获得借款的利息不高于银行同类贷款利率的二倍。<br>
            债权可以转让的合法性及法律依据，根据《合同法》规定：第八十八条 当事人一方经对方同意，可以将自己在合同中的权利和义务一并转让给第三人。</p>
        </div>
        <div class="helpt">
            <p class="tit">电子合同受法律保护吗？<em></em></p>
            <p class="con">我国新合同法第十一条规定：书面形式合同是指合同书、信件和数据电文（包括电报、电传、传真、电子数据交换和电子邮件）等可以有形地表现所载内容的形式。因此电子合同属于书面形式合同的一种，是受到法律保护的。另外ZDmoney金融的合同文本都是由专业律师起草的，严格把关，保证了通过ZDmoney金融的交易是具备法律效力的。<br>
            另外根据《中华人民共和国电子签名法》的规定，民事活动中的合同或者其他文件、单证等文书，当事人可以约定使用电子签名、数据电文，不能因为合同采用电子签名、数据电文就否定其法律效力。同时，《电子签名法》中还规定，可靠的电子签名与手写签名或者盖章具有同等的法律效力，明确肯定了符合条件的电子签名与手写签名或盖章具有同等的效力。</p>
        </div>
        <div class="helpt">
            <p class="tit">当月净投资总额<em></em></p>
            <p class="con"> ZDmoney金融在3月31日—6月30日期间举办的“四重好礼 非投不可”活动之“投资赚收益赢大礼”中的‘投资人单月投资总额’指的是，用户在活动期间单月内用于投标的净投资总额，当月净投资总额=当月充值总金额-当月未投资金额，以下情况不计入净投资总额内：<br>
                           1、用户已充值未投资的部分资金；<br>
                           2、用户反复使用同一笔本金进行投标，只记录首次投标金额。如，用户充值2万元，在一个月内反复使用2万元进行投资，系统只将2万元的首次有效投资计入净投资总额内；<br>
                           3、标的中含用户叠加投资本金的，系统只将用户未重复叠加部分的本金计入净投资总额内。如，首次投标1万元，该标到期后，用户追加4万元，合计5万元投资该月第二个标的，则系统记录净投资总额为：1万元（首次投标本金）+4万元（第二次追加本金）=5万元。</p>
        </div>
        <div class="helpt">
            <p class="tit">待收本金、待收收益分别代表什么？<em></em></p>
            <p class="con"> 待收本金：指投资人已投资而尚未收回的本金。<br>
                             待收收益：指投资人已投资而尚未收回的收益之和。</p>
        </div>
        <div class="helpt">
            <p class="tit">提现中冻结借代表什么？<em></em></p>
            <p class="con"> 提现中冻结金额指的是申请提现后等待处理的金额。</p>
        </div>
    </div> 
</div>
<script type="text/javascript">
$(function () {
   var url = window.location.href;
   var id = url.substr(url.indexOf("#")+1);
    $("#"+id).parents(".helpcont").show().siblings().hide();
    $("."+id).addClass('helpon').siblings().removeClass('helpon'); 
     $("#"+id).siblings().children("p.con").slideUp("fast");
    $("#"+id).children("p.con").slideDown("fast");
  $(".helpt").click(function(){
    var thisSpan=$(this);
    $("p.con").prev("p").children("em").removeClass("cur");
    $("p.con", this).prev("p").children("em").addClass("cur");
    $(this).children("p.con").slideToggle("fast");
    $(this).siblings().children("p.con").slideUp("fast");
    
  })
});
$('.helppic a').each(function(i) {
    $(this).click(function(){ 
    $(this).addClass('helpon').siblings().removeClass('helpon'); 
    $('.helpcont:eq('+i+')').show().siblings().hide();
    return false;
    });

    $('.tit').click(function(){
      $('.con').hide()
      var obj = $(this);
      var next = $(this).next();
      next.fadeIn();
    });
  });
</script>
</div>
</div>
<!--right-->
</div>
</body></html>

@stop