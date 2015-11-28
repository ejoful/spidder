<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/26
 * Time: 16:22
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


# 下载一个网页
$web_page = http_get($target = 'https://passport.jd.com/uc/login?ltype=logout', $referer = "");




//echo @implode('',$web_page);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>京东-欢迎登录</title>
    <link rel="stylesheet" type="text/css" href="https://miscssl.360buyimg.com/lib/skin/2013/base.css" media="all" />
    <link type="text/css" rel="stylesheet"  href="https://miscssl.360buyimg.com/user/passport-2015/??/widget/common/common.css,/widget/login-form/login-form.css,/widget/login-banner/login-banner.css,/widget/safe-step/safe-step.css" source="widget"/>
    <script type="text/javascript" src="https://miscssl.360buyimg.com/jdf/lib/jquery-1.6.4.js"></script>
    <script type="text/javascript" src="https://miscssl.360buyimg.com/user/passport-2015/js/??login.pge.js,login.pge.init.js"></script>
    <script type="text/javascript">
        jQuery.getJSON("//sso.360buy.com" + "/exit?callback=?");
        jQuery.getJSON("//sso.jcloud.com" + "/exit?callback=?");
        jQuery.getJSON("https://sso.wangyin.com" + "/exit?callback=?");
        jQuery.getJSON("//sso.jd360.hk" + "/exit?callback=?");
        jQuery.getJSON("//sso.jd.hk" + "/exit?callback=?");
        jQuery.getJSON("https://sso.jdpay.com" + "/exit?callback=?");
    </script>
</head>
<body>
<!-- SDK 登录 -->
<div class="w">
    <div id="logo"><a href="http://www.jd.com/" clstag="pageclick|keycount|20150112ABD|45"><img src="https://miscssl.360buyimg.com/lib/img/e/logo-201305-b.png" alt="京东" width="170" height="60"></a><b></b></div>
</div>
<div id="content">
    <div class="login-wrap">
        <div class="w">
            <div class="login-form">
                <div class="login-box">
                    <div class="mt">
                        <h1>京东会员</h1>
                        <div class="extra-r">
                            <div class="regist-link"><a href="https://reg.jd.com/reg/person?ReturnUrl=http%3A%2F%2Fwww.jd.com" target="_blank" clstag="pageclick|keycount|20150112ABD|1"><b></b>立即注册</a></div>
                        </div>
                    </div>
                    <div class="msg-wrap">
                        <div class="msg-warn hide"><b></b></div>
                        <div class="msg-error hide"><b></b></div>
                    </div>
                    <div class="mc">
                        <div class="form">
                            <form id="formlogin" method="post" onsubmit="return false;">
                                <input type="hidden" id="uuid" name="uuid" value="3604fcd0-5ed0-49eb-aa9a-b09b6dd2c804"/>
                                <input type="hidden" name="machineNet" id="machineNet" value="" class="hide"/>
                                <input type="hidden" name="machineCpu" id="machineCpu" value="" class="hide"/>
                                <input type="hidden" name="machineDisk" id="machineDisk" value="" class="hide"/>
                                <input type="hidden" name="LsjcpVLFFA" value="qllqF" />
                                <div class="item item-fore1">
                                    <label for="loginname" class="login-label name-label"></label>
                                    <input id="loginname" type="text" class="itxt" name="loginname" tabindex="1" autocomplete="off"
                                           value="898150165@qq.com"
                                           placeholder="邮箱/用户名/已验证手机" />
                                    <span class="clear-btn"></span>
                                </div>
                                <div id="entry" class="item item-fore2">
                                    <label class="login-label pwd-label" for="nloginpwd"></label>
                                    <label id="sloginpwd" style="display: none;">
                                        <script type="text/javascript">pgeditor.generate()</script>
                                    </label>
                                    <input type="password" id="nloginpwd" name="nloginpwd" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="密码"/>
                                    <input type="hidden" name="loginpwd" id="loginpwd" value="" class="hide" />
                                    <span class="clear-btn"></span>
                                    <span class="capslock"><b></b>大小写锁定已打开</span>
                                </div>
                                <div class="item item-fore3">
                                    <div class="safe">
                                        <span>
                                            <input id="autoLogin" name="chkRememberMe" type="checkbox" class="jdcheckbox" tabindex="3"  clstag="pageclick|keycount|20150112ABD|6">
                                            <label for="">自动登录</label>
                                        </span>
                                                                                <span>
                                            <input id="chkOpenCtrl" type="checkbox" name="chkOpenCtrl" class="jdcheckbox safe-chk" tabindex="4" clstag="pageclick|keycount|20150112ABD|7" >
                                            <label data-tips="安全控件可提高账户安全性，加密保护您的密码。" id="jdsafe">安全控件登录</label>
                                        </span>
                                                                                <span class="forget-pw-safe">
                                            <a href="http://safe.jd.com/findPwd/index.action" class="" target="_blank" clstag="pageclick|keycount|20150112ABD|8">忘记密码?</a>
                                        </span>
                                    </div>
                                    <div class="updata" id="updata" style="display:none;">安全控件升级了!<a href="javascript:void(0);" class="up-two">立即更新</a> <a class="up-one" href="javascript:void(0);" onclick="$('#updata').hide();"></a></div>
                                </div>

                                <div id="o-authcode" class="item item-vcode item-fore4  hide ">
                                    <input id="authcode" type="text" class="itxt itxt02" name="authcode" tabindex="5">
                                    <img id="JD_Verification1" class="verify-code"
                                         src2="https://authcode.jd.com/verify/image?a=1&amp;acid=3604fcd0-5ed0-49eb-aa9a-b09b6dd2c804&amp;uid=3604fcd0-5ed0-49eb-aa9a-b09b6dd2c804"
                                         onclick="this.src= document.location.protocol +'//authcode.jd.com/verify/image?a=1&amp;acid=3604fcd0-5ed0-49eb-aa9a-b09b6dd2c804&amp;uid=3604fcd0-5ed0-49eb-aa9a-b09b6dd2c804&amp;yys='+new Date().getTime();$('#authcode').val('');"
                                        />
                                    <a href="javascript:void(0)"  onclick="$('#JD_Verification1').click();">看不清楚换一张</a>
                                </div>
                                <div class="item item-fore5">
                                    <div class="login-btn">
                                        <a href="javascript:;" class="btn-img btn-entry" id="loginsubmit" tabindex="6" clstag="pageclick|keycount|20150112ABD|2">登&nbsp;&nbsp;&nbsp;&nbsp;录</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="coagent" >
                            <h5>使用合作网站账号登录京东：</h5>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/wangyin/login.action'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD|3">京东钱包</a>
                                    <span class="line">|</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/qq/login.aspx'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD|4">QQ</a>
                                    <span class="line">|</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/wx/login.action'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD_201505135|2">微信</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="qrcode-login">
                    <div class="mc">
                        <div class="qrcode-desc"><h2>用京东APP <span class="ml5">扫码安全登录</span></h2></div>
                        <div class="qrcode-error">
                            <b></b>
                            <h6>登录失败</h6>
                            请刷新二维码后重新扫描
                        </div>
                        <div class="qrcode-main">
                            <div class="qrcode-img">
                                <img src="https://miscssl.360buyimg.com/lib/img/e/blank.gif" alt="">
                            </div>
                            <div class="qrcode-panel">
                                <ul>
                                    <li class="fore1">
                                        <a href="#none">刷新二维码</a>
                                    </li>
                                    <li><a href="http://help.jd.com/user/issue/353-1096.html">使用帮助</a></li>
                                </ul>
                                <div class="qrcode-tips">
                                    <span>扫描不上，版本过低？</span>
                                    <div class="triangle-border tb-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#nogo" class="qrcode-target btn-2qrcode" clstag="pageclick|keycount|20150112ABD_201505135|1">扫码登录</a>
            </div>
        </div>
        <div class="login-banner" clstag="pageclick|keycount|20150112ABD|46">
            <div class="w">
                <div id="banner-bg" class="i-inner"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w">
    <div class="ar"><a href="http://surveys.jd.com/index.php?r=survey/index/sid/568245/lang/zh-Hans" target="_blank" class="q-link"><b></b>登录页面，调查问卷</a></div>
</div>
<div class="w">
    <div id="footer-2013">
        <div class="links">
            <a rel="nofollow" target="_blank" href="http://www.jd.com/intro/about.aspx">
                关于我们
            </a>
            |
            <a rel="nofollow" target="_blank" href="http://www.jd.com/contact/">
                联系我们
            </a>
            |
            <a rel="nofollow" target="_blank" href="http://zhaopin.jd.com/">
                人才招聘
            </a>
            |
            <a rel="nofollow" target="_blank" href="http://www.jd.com/contact/joinin.aspx">
                商家入驻
            </a>
            |
            <a rel="nofollow" target="_blank" href="http://www.jd.com/intro/service.aspx">
                广告服务
            </a>
            |
            <a rel="nofollow" target="_blank" href="http://app.jd.com/">
                手机京东
            </a>
            |
            <a target="_blank" href="http://club.jd.com/links.aspx">
                友情链接
            </a>
            |
            <a target="_blank" href="http://cps.jd.com/">
                销售联盟
            </a>
            |
            <a href="http://club.jd.com/" target="_blank">
                京东社区
            </a>
            |
            <a href="http://gongyi.jd.com" target="_blank">
                京东公益
            </a>
            |
            <a target="_blank" href="http://en.jd.com/" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
        </div>
        <div class="copyright">
            Copyright&copy;2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有
        </div>
    </div>
</div>
<script type="text/javascript" src="/new/misc/js/login2015.js"></script>
<script type="text/javascript" src="https://miscssl.360buyimg.com/jdf/1.0.0/unit/base/1.0.0/base.js"></script>
<script type="text/javascript" src="https://miscssl.360buyimg.com/user/passport-2015/js/login.index.js" source="widget"></script>
<script type="text/javascript">	~function () {		var data = [						{			  src:"//img14.360buyimg.com/da/jfs/t2185/138/790846694/97383/c31f0f22/562a0d5cN1febd9c3.jpg",			  bgColor:"#ff2c4c",                          weight: "0"			}						,			{			  src:"//img11.360buyimg.com/da/jfs/t1291/70/400648492/118338/913c53e4/55701f5dNce5323f3.jpg",			  bgColor:"#e0243d",                          weight: "0"			}						,			{			  src:"//img11.360buyimg.com/da/jfs/t1468/83/1361485819/90262/367c331/55c9587aNe5c103cc.jpg",			  bgColor:"#fef184",                          weight: "0"			}						,			{			  src:"//img30.360buyimg.com/da/jfs/t925/194/900572056/97720/54aeeaf1/556273d5N1c152901.jpg",			  bgColor:"#e93854",                          weight: "0"			}						,			{			  src:"//img12.360buyimg.com/da/jfs/t1150/142/867607095/212956/6a07c492/5551a110Nf4593398.jpg",			  bgColor:"#ee2743",                          weight: "4"			}						,			{			  src:"//img10.360buyimg.com/da/jfs/t1774/224/819366149/87878/acd68f4a/55dc018fNb118bae4.jpg",			  bgColor:"#d94f4d",                          weight: "0"			}			];						         var getRandom = function (arr) {			var _temp = 0, _random = 0, _weight, _newArr = [];						for (var i = 0; i < arr.length; i++) {				_weight = arr[i].weight ? parseInt(arr[i].weight) : 1;				_newArr[i] = [];				_newArr[i].push(_temp);				_temp += _weight;				_newArr[i].push(_temp);			}						_random = Math.ceil(_temp * Math.random());						for (var i = 0; i< _newArr.length; i++){				if(_random > _newArr[i][0] && _random <= _newArr[i][1]){					return arr[i];				}			}			};				var tpl = '<div class="login-banner" style="background-color: {bgColor}">\		              <div class="w">\			         <div id="banner-bg"  clstag="pageclick|keycount|20150112ABD|46" class="i-inner" style="background: url({imgURI}) 0px 0px no-repeat;background-color: {bgColor}"></div>\		              </div>\		           </div>';							var bgData = getRandom(data);		var bannerHtml = tpl.replace(/{bgColor}/g, bgData.bgColor).replace(/{imgURI}/g, bgData.src);				$('.login-banner').replaceWith(bannerHtml);	}();</script>
<script type="text/javascript">
    (function () {
        var ja = document.createElement('script');
        ja.type = 'text/javascript';
        ja.async = true;
        ja.src = ('https:' == document.location.protocol ? 'https://cscssl' : 'http://csc') + '.jd.com/wl.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ja, s);
    })();
</script>
<script type="text/javascript">
    $(function(){
        if(!$('#autoLogin:checked').length){
            $('#autoLogin').prop("checked",'true').trigger("click").prop("checked",'true');
        }
        Util.Cookie.set("alpin","",-111);
    });
</script>
<!-- SDK 登录 -->
</body>
</html>




















